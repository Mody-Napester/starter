$(document).ready(function(){

    var loader = '<div class="loading"><div class="loader"></div></div>';
    function addLoader() {
        $('body').append(loader);
    }
    function removeLoarder() {
        $('.loading').hide(200).remove();
    }

    // General Update
    $('body').on('click', '.update-modal', function (event) {
        event.preventDefault();
        var url, targetModal;
        url = $(this).attr('href');
        targetModal = $('#update-modal');

        // Get contents
        $.ajax({
            method:'GET',
            url:url,
            beforeSend:function () {
                addLoader();
            },
            success:function (data) {
                targetModal.find('#editModalLabel').text(data.title);
                targetModal.find('.modal-body').html(data.view);
                removeLoarder();
            },
            error:function () {
                
            }
        });

        // Show modal
        targetModal.modal();
    });

    // General Confirm Delete
    $('body').on('click', ".confirm-delete", function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        $('#confirm-delete-form').attr('action', link);
        $("#confirm_delete_modal").modal({backdrop: true});
    });
});