

$(function() {


    // date picker

    // $( ".datepicker" ).datepicker();

    $(".datepicker").datepicker({
        dateFormat: "yy-mm-dd"
    });

//file input plugin for image upload and preview
    $(".fileinput").fileinput({
        showUpload: false,
        showRemove: false,
        showCaption: false
    });


});