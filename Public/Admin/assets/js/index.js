$(document).ready(function() {
    $("#doc-form-file").on('change', function() {
        var path = "Gallery";
        var width = "470";
        var height = "289";

        $.post(uploadPic, {path : path, width : width, height : height}, function(data) {
            console.log(data);
        })
    })

})