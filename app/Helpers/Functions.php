<?php

// Get path
function get_path($path){
    return base_path() . config('custom.public') . '/' . $path;
}

// Default language
function lang(){
    return "english";
}

// User fullname
function name($user = null){
    if($user != null){
        return $user->fname . ' ' . $user->lname;
    }else{
        return auth()->user()->fname . ' ' . auth()->user()->lname;
    }
}

// Site languages
function languages(){
    $lookup = \App\Lookup::where('name', 'languages')->first();
    return \App\Lookup::where('parent_id', $lookup->id)->get();
}

// Get lookup
function lookup($by, $value){
    $results = null;
    $by_array = ['id','uuid','name','parent_id'];
    if (in_array($by, $by_array)){$results = \App\Lookup::where($by, $value)->first();}
    return $results;
}

// Get lookups
function lookups($value){
    $lookup = \App\Lookup::where('name', $value)->first();
    return \App\Lookup::where('parent_id', $lookup->id)->get();
}

// Get lookups
function str_well($value){
    return ucfirst(str_replace('_', ' ', $value));
}

// Files
function getFile($file_for, $refer_row_id, $table){
    return \App\File::where('lookup_file_for_id', lookup('name',$file_for)->id)
        ->where('refer_row_id', $refer_row_id)
        ->where('lookup_tables_id', lookup('name', $table)->id)
        ->where('active', 1)
        ->first();
}

// Localized fields
function localize($table, $refer_row_id, $localized_field){
    return \App\Localization::where('lookup_tables_id', lookup('name', $table)->id)
        ->where('lookup_languages_id', lookup('name',lang())->id)
        ->where('refer_row_id', $refer_row_id)
        ->where('lookup_localized_fields_id', lookup('name', $localized_field)->id)
        ->first();
}

// Upload files
function upload_file($type, $file, $path){

    $results = [
        'status' => false,
        'filename' => null,
        'mime' => null,
        'message' => null,
    ];

    $extention = strtolower($file->getClientOriginalExtension());

    $validExtentions = [];
    $file_mimes = lookups('file_mimes');

    $results['mime'] = $type . '/' . $extention;

    if ($type == "image") {
        foreach($file_mimes as $file_mime){
            $ext = strtolower(str_replace('image/', '', $file_mime->name));
            $validExtentions[] = $ext;
        }
    }
    elseif ($type == "text") {
        foreach($file_mimes as $file_mime){
            $ext = strtolower(str_replace('text/', '', $file_mime->name));
            $validExtentions[] = $ext;
        }
    }

    if (in_array($extention, $validExtentions)) {

        $filename = time().rand(1000,9999).'.'.$extention;
        $destinationPath = get_path($path);

        $upload = $file->move($destinationPath, $filename);

        if ($upload) {
            // File Uploaded
            $results['status'] = true;
            $results['filename'] = $filename;
            $results['message'] = 'Uploaded Successfully';

            return $results;
        }else{
            // Error Uploading
            $results['message'] = 'Error Uploading';

            return $results;
        }

    }else{
        // File not valid
        $results['message'] = 'File not valid';

        return $results;
    }
}

// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
