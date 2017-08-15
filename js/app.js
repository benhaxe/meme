$(document).ready(function () {
    // Loader images Hide(beginning)
    $("#image-loader").hide();
      presentImageLink = '';

    //Changing The Name When Input Changes

    $('#change-name').change(function (e) {
        e.preventDefault();
        $('#personName').html(e.target.value);
    });

    $('#change-name').keyup(function (e) {
        e.preventDefault();
        $('#personName').html(e.target.value);
    });

    //changing the Image when Image changes
    $("#change-image").change(function (e) {
        e.preventDefault();
        $("#image-loader").show();
        // Creating and Appending the Image Form
       var formdata = new FormData();
       formdata.append("image",  e.target.files[0]);


        // Testing Loader
        setTimeout(function() {
            //Using Axios to Upload the Image
           axios.post("http://" + mainUrl + "meme/index.php", formdata)
           .then(function (response) {
            $('#personImage').attr( 'style', "background-image : url(" + response.data["image-link"] + ");");
            $("#image-loader").hide();
            presentImageLink = response.data["image-link"];
           })
           .catch(function (err) {
            $("#image-loader").hide();
           });
        });
    });



    /**
     * The download button section functions ------  HERE --------
     */

    $("#download-image").click(function (e) {
        e.preventDefault();
        // Put the capture div to image funnction codes here  --------
        html2canvas($('.box-image, .overlay'),{
          onrendered:function(canvas) {
            $('#checking').html("");
            $('#checking').append(canvas);

            $('#download').attr('href', canvas.toDataURL("image/png"));
            $('#download').attr('download', 'dp.redmptionweek17.png');
            $('#download')[0].click();

            // After rendering delete image
        if (presentImageLink) {
            var imageLinkConstituent  = presentImageLink.split('/');
            var imageName = imageLinkConstituent[imageLinkConstituent.length - 1];
            var dataToBeSent = new FormData();
            dataToBeSent.append('image', imageName);

            /// Operation Delete Image
            axios.post("http://" + mainUrl + "meme/delete.php", dataToBeSent)
            .then(function (response) {
                console.log(response.data);
            })
            .catch(function (err) {
                if (err) {
                    consoole.log(err)
                }
            })
        }
    }
});
});
});
