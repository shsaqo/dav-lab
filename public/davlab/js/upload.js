$(document).ready(function () {
    var c = 0;
    function readURLSlider(input, fileType, appendContainer, parent) {
        var images = [];
        var videos = [];
        var fileName = [];
        if (input.files) {
            var filesAmount = input.files.length;
            for (let i = 0; i < filesAmount; i++) {
                const id = input.files[i].id;
                if(input.files[i].size/1024/1024 > 11){
                    ++i;
                    alert("Նկար/Վիդեո-ի չափսը պետք է փոքր լինի 10 մբ-ից");
                }
                fileName.push(input.files[i].name);
                fileType.push(input.files[i].type);
                var reader = new FileReader();
                reader.onload = function(event) {
                    ++c;
                    if(fileType[i] === 'video/mp4') {
                        videos.push(event.target.result);
                        let container = $(appendContainer).parent()[0].childNodes[5];
                        $(container).append(`<div class="col-1">
                                                <div class="image-in-js-parent">
                                                    <button  class="edit-image-delete-btn ${parent}" data-id="${id}">
                                                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><g transform='translate(-1752 -313)'><circle cx='12' cy='12' r='12' transform='translate(1752 313)' fill='#eee'/><g transform='translate(1759.713 321.212)' opacity='0.5'><line y2='12.127' transform='translate(8.575 0) rotate(45)' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/><line y1='12.127' transform='translate(8.575 8.575) rotate(135)' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/></g></g></svg>
                                                    </button>
                                                    <video class="in-js-image-${parent}" id=aaa${c} width="100%"  controls> <source src="#"> </source></video>
                                                </div>
                                            </div>
                            `);
                        for(let i = 0; i < videos.length; ++i){
                            $("#aaa" + c + "").attr('src', videos[i]);
                        }
                    } else {
                        images.push(event.target.result);
                        let container = $(appendContainer).parent()[0].childNodes[5];
                        $(container).append(`
                            <div class="col-1">
                                <div class="image-in-js-parent">
                                    <button id=deleteButton${c} data-id="${id}"  class="edit-image-delete-btn ${parent}">
                                    <div class="${parent}">
                                       <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><g transform='translate(-1752 -313)'><circle cx='12' cy='12' r='12' transform='translate(1752 313)' fill='#eee'/><g transform='translate(1759.713 321.212)' opacity='0.5'><line y2='12.127' transform='translate(8.575 0) rotate(45)' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/><line y1='12.127' transform='translate(8.575 8.575) rotate(135)' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/></g></g></svg>
                                    </div>
                                </button> 
                                <img class="in-js-image-${parent}" src=# id=aaa${c} width="320" height="240"> 
                                </div>
                            </div>
                        `);
                        for(let i = 0; i < images.length; ++i){
                            $("#aaa" + c + "").attr('src', images[i]);
                            $("#deleteButton" + c + "").attr('data', fileName[i]);
                        }
                    }

                };
                reader.readAsDataURL(input.files[i]);
            }
        }
    }

    // upload file function
    function readURL(input, image, uploadedVideo) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(image).attr('src', e.target.result);
                if(uploadedVideo){
                    $(uploadedVideo).css("display", "none");
                }
                $(image).css("display", "block");
            }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }
    // inputs, that need to upload
    $(document).on("change", ".custom-file-input", function (e) {
        e.preventDefault();
        $("#uploaded-images").css("display", "none");
        let file = $(this)[0].files;
        if(file[0].size/1024/1024 > 11){
            alert("Նկար/Վիդեո-ի չափսը պետք է փոքր լինի 10 մբ-ից");
            return false;
        }
        var fileType = file[0].type.split("/").pop();
        if(fileType !== "jpeg" && fileType !== "jpg" && fileType !== "png" && fileType !== "gif" && fileType !== "mp4" && fileType !== "mov" && fileType !== "ogg"){
            return false;
        }
        let editFile = $(this).parent().parent().parent()[0].childNodes[7];
        if(editFile){
            $(editFile).remove();
        }
        let uploadedImage = $(this).parent().parent().parent()[0].childNodes[5].childNodes[1];
        let uploadedVideo = $(this).parent().parent().parent()[0].childNodes[5].childNodes[3];
        const {0: { type } } = file;
        if(type.includes('video')){
            uploadedVideo.src = URL.createObjectURL(this.files[0]);
            if(uploadedImage){
                $(uploadedImage).css("display", "none");
            }
            $(uploadedVideo).css("display", "block");
        } else{
            readURL(e.target, uploadedImage, uploadedVideo);
        }
    });
    $(document).on("change", ".custom-file-input-slider", function (e) {
        e.preventDefault();
        const parent = "news";
        var fileType = [];
        var appendContainer = $(this).parent().parent().parent()[0].childNodes[3];
        readURLSlider(e.target, fileType, appendContainer, parent);
    });
    $(document).on("change", ".custom-file-input-slider-image", function (e) {
        const parent = "about-image";
        e.preventDefault();
        var fileType = [];
        var appendContainer = $(this).parent().parent().parent()[0].childNodes[3];
        readURLSlider(e.target, fileType, appendContainer, parent);
    });
    $(document).on("change", ".custom-file-input-slider-license", function (e) {
        const parent = "license";
        e.preventDefault();
        var fileType = [];
        var appendContainer = $(this).parent().parent().parent()[0].childNodes[3];
        readURLSlider(e.target, fileType, appendContainer, parent);
    });
});

