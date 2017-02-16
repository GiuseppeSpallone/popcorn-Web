
<html>
<head>
<meta charset=utf-8>
<meta name="viewport" content="width=620">
<title>Carica Poster</title></head>
<body>

    <header>
        <script src='jquery.min.js'></script>
        <script src='ajaxupload.js'></script>
    </header>

<script>
    var preview = $('#preview'); //id of the preview image
    new AjaxUpload('imageUpload', {
        action: 'saveimage.php', //the php script that receives and saves the image
        name: 'image', //The saveimagephp will find the image info in the variable $_FILES['image']
        onSubmit: function(file, extension) {
            preview.attr('src', 'loading.gif'); //replace the image SRC with an animated GIF with a 'loading...' message
        },
        onComplete: function(file, response) {
            preview.load(function(){
                preview.unbind();
            });
            preview.attr('src', response); //make the preview image display the uploaded file
            $('#uploadedimg').val(response); //drop the path to the file into the hidden field
        }
    });

</script>
    <form >
        <img id="preview" src="" width="100px" height="100px" />
        <label>Upload a picture: <input id="imageUpload" type="file" name="image"/></label>
        <input type="hidden" name="uploadedImg"></input>
        <input type="submit" value="Save the picture"/>
    </form>

</body>
</html>
