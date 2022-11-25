$(document).ready(function() {
    $('.btn-delete').click(function(){
        let url = $(this).data('url');
        $('.modal').css('display','flex');
        $('#btn-delete-modal').attr('href', url);
    });

    $('.close-modal').click(function(){
        $('.modal').css('display','none');
    });
});
