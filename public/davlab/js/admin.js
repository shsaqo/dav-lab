$(document).ready(function () {
    if($("#editor").length > 0){
        CKEDITOR.replace('editor', {
            skin: 'moono',
            enterMode: CKEDITOR.ENTER_BR,
            shiftEnterMode:CKEDITOR.ENTER_P,
            toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
                { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
                { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
                { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
                { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                { name: 'links', items: [ 'Link', 'Unlink' ] },
                { name: 'insert', items: [ 'Image'] },
                { name: 'spell', items: [ 'jQuerySpellChecker' ] },
                { name: 'table', items: [ 'Table' ] }
            ],
        });
    }
    if($("#editor2").length > 0) {
        CKEDITOR.replace('editor2', {
            skin: 'moono',
            enterMode: CKEDITOR.ENTER_BR,
            shiftEnterMode: CKEDITOR.ENTER_P,
            toolbar: [{
                name: 'basicstyles',
                groups: ['basicstyles'],
                items: ['Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor']
            },
                {name: 'styles', items: ['Format', 'Font', 'FontSize']},
                {name: 'scripts', items: ['Subscript', 'Superscript']},
                {
                    name: 'justify',
                    groups: ['blocks', 'align'],
                    items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
                },
                {
                    name: 'paragraph',
                    groups: ['list', 'indent'],
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent']
                },
                {name: 'links', items: ['Link', 'Unlink']},
                {name: 'insert', items: ['Image']},
                {name: 'spell', items: ['jQuerySpellChecker']},
                {name: 'table', items: ['Table']}
            ],
        });
    }
    if($("#editor3").length > 0) {
        CKEDITOR.replace('editor3', {
            skin: 'moono',
            enterMode: CKEDITOR.ENTER_BR,
            shiftEnterMode: CKEDITOR.ENTER_P,
            toolbar: [{
                name: 'basicstyles',
                groups: ['basicstyles'],
                items: ['Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor']
            },
                {name: 'styles', items: ['Format', 'Font', 'FontSize']},
                {name: 'scripts', items: ['Subscript', 'Superscript']},
                {
                    name: 'justify',
                    groups: ['blocks', 'align'],
                    items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
                },
                {
                    name: 'paragraph',
                    groups: ['list', 'indent'],
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent']
                },
                {name: 'links', items: ['Link', 'Unlink']},
                {name: 'insert', items: ['Image']},
                {name: 'spell', items: ['jQuerySpellChecker']},
                {name: 'table', items: ['Table']}
            ],
        });
    }
    $(document).on("click", "#add-container-hy", function (e) {
        let appendContainer = $("#info-container");
        e.preventDefault();
        $(appendContainer).append(`<div class="col-12">
                                            <div class='row align-items-center'>
                                                <div class='position-relative form-group col-md-2 pl-0'>
                                                    <label for="year_en">Թվական</label>
                                                    <input type="text" class="form-control added" name="year_hy[]" required>
                                                </div>
                                                <div class="position-relative form-group col-md-9 pl-0">
                                                    <label for="event_en">Բնութագիր</label>
                                                    <textarea name="event_hy[]" class="form-control added" required></textarea>
                                                </div>
                                                <div class="position-relative form-group col-md-1 mb-0 text-right">
                                                    <button class="remove-input">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='17.453' height='17.453' viewBox='0 0 17.453 17.453'><g transform='translate(-382.773 -829.94)'><g transform='translate(391.5 831.44) rotate(45)'><line x2='10.22' y2='10.22' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/><line x1='10.22' y2='10.22' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/></g></g></svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                        `)
    });
    $(document).on("click", "#add-container-ru", function (e) {
        e.preventDefault();
        let appendContainer = $("#info-container-ru");
        $(appendContainer).append(`<div class="col-12">
                                            <div class='row align-items-center'>
                                                <div class='position-relative form-group col-md-2 ml-0'>
                                                    <label for="year_en">Թվական</label>
                                                    <input type="text" class="form-control added" name="year_ru[]" required>
                                                </div>
                                                <div class="position-relative form-group col-md-9 ml-0">
                                                    <label for="event_en">Բնութագիր</label>
                                                    <textarea name="event_ru[]" class="form-control added" required></textarea>
                                                </div>
                                                <div class="position-relative form-group col-md-1 mb-0 text-right">
                                                    <button class="remove-input">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='17.453' height='17.453' viewBox='0 0 17.453 17.453'><g transform='translate(-382.773 -829.94)'><g transform='translate(391.5 831.44) rotate(45)'><line x2='10.22' y2='10.22' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/><line x1='10.22' y2='10.22' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/></g></g></svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                        `)
    });
    $(document).on("click", "#add-container-en", function (e) {
        let appendContainer = $("#info-container-en");
        e.preventDefault();
        $(appendContainer).append(`<div class="col-12">
                                            <div class='row align-items-center'>
                                                <div class='position-relative form-group col-md-2'>
                                                    <label for="year_en">Թվական</label>
                                                    <input type="text" class="form-control added" name="year_en[]" required>
                                                </div>
                                                <div class="position-relative form-group col-md-9">
                                                    <label for="event_en">Բնութագիր</label>
                                                    <textarea name="event_en[]" class="form-control added" required></textarea>
                                                </div>
                                                <div class="position-relative form-group col-md-1 mb-0 text-right">
                                                    <button class="remove-input">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='17.453' height='17.453' viewBox='0 0 17.453 17.453'><g transform='translate(-382.773 -829.94)'><g transform='translate(391.5 831.44) rotate(45)'><line x2='10.22' y2='10.22' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/><line x1='10.22' y2='10.22' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/></g></g></svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                        `)
    });

    $(document).on("click", ".remove-input", function (e) {
        e.preventDefault();
        $(this).parent().parent().parent().remove();
    });
    var form = document.querySelector('.form');
    var paths = [];
    var pathsAboutImage = [];
    var pathsAboutLicense = [];
    var inputType = document.createElement("input");
    var inputAboutSlider = document.createElement("input");
    var inputAboutLicense = document.createElement("input");
    $(document).on("change", ".custom-file-input-slider", function (e) {
        inputType.type = "hidden";
        inputType.name = "otherPhoto[]";
        var fileType = 1;
        e.preventDefault();
        var formData = new FormData();
        let file = $(this)[0].files;
        for (let i =0; i< file.length; ++i){
            if(file[i].size/1024/1024 < 10){
                formData.append("upload[]", file[i]);
            }
        }
        formData.append("type", fileType);
        fetch("/api/v1/files-path",
            {
                body: formData,
                method: "post",
            }).then(res=>{
            return(res.json());
        }).then(res => {
            let imgs = $(".in-js-image-news");
            for(let i =0; i < res.response.length; ++i){
                paths.push(res.response[i]);
                imgs[i].setAttribute("data", res.response[i]);
            }
            inputType.value = paths;
        }).catch(e=>{
            console.error(e);
        });
        form.appendChild(inputType);
    });

    $(document).on("change", "#upload", function (e) {
        inputAboutSlider.type = "hidden";
        inputAboutSlider.name = "upload[]";
        var fileType = 1;
        e.preventDefault();
        var formData = new FormData();
        let file = $(this)[0].files;
        for (let i =0; i< file.length; ++i){
            if(file[i].size/1024/1024 < 11){
                formData.append("upload[]", file[i]);
            }
        }
        formData.append("type", fileType);
        fetch("/api/v1/files-path",
            {
                body: formData,
                method: "post",
            }).then(res=>{
            return(res.json());
        }).then(res => {
            let imgs = $(".in-js-image-about-image");
            for(let i =0; i < res.response.length; ++i){
                pathsAboutImage.push(res.response[i]);
                imgs[i].setAttribute("data", res.response[i]);
            }
            inputAboutSlider.value = pathsAboutImage;
        }).catch(e=>{
            console.error(e);
        });
        form.appendChild(inputAboutSlider);
    });

    $(document).on("change", ".custom-file-input-slider-license", function (e) {
        inputAboutLicense.type = "hidden";
        inputAboutLicense.name = "license[]";
        var fileType = 2;
        e.preventDefault();
        var formData = new FormData();
        let file = $(this)[0].files;
        for (let i =0; i< file.length; ++i){
            if(file[i].size/1024/1024 < 11){
                formData.append("upload[]", file[i]);
            }
            if(file[i].type.includes("mp4") || file[i].type.includes("mov") || file[i].type.includes("ogg")){
                fileType = 1;
            }
        }
        formData.append("type", fileType);
        fetch("/api/v1/files-path",
            {
                body: formData,
                method: "post",
            }).then(res=>{
            return(res.json());
        }).then(res => {
            let imgs = $(".in-js-image-license");
            for(let i =0; i < res.response.length; ++i){
                pathsAboutLicense.push(res.response[i]);
                imgs[i].setAttribute("data", res.response[i]);
            }
            inputAboutLicense.value = pathsAboutLicense;
        }).catch(e=>{
            console.error(e);
        });
        form.appendChild(inputAboutLicense);
    });

    // $(document).on("click", ".delete-image-icon-news.slider", function(e) {
    //     e.preventDefault();
    //     let img_data = $(this).parent().parent()[0].childNodes[1].childNodes[3].attributes[5].nodeValue;
    //     paths = paths.filter(item => item !== img_data);
    //     inputType.value = paths;
    //     $(this).parent().parent().remove();
    // });

    function removeImage (e){
        e.preventDefault();
        const button = $(e.target).closest($('.edit-image-delete-btn'))

        const parent = $(button).closest($('.col-1'));
        const nextElement = $(button).next();
        const dataUrl = $(nextElement).attr('data');
        $(parent).remove();

        return dataUrl;
    }
    $(document).on("click", ".edit-image-delete-btn.news", function(e) {

        const dataUrl = removeImage(e);
        paths = paths.filter(item => item !== dataUrl);
        inputType.value = paths;

    });
    $(document).on("click", ".edit-image-delete-btn.about-image", function(e) {

        let img_data = removeImage(e);
        pathsAboutImage = pathsAboutImage.filter(item => item !== img_data);
        inputAboutSlider.value = pathsAboutImage;
    });
    $(document).on("click", ".edit-image-delete-btn.license", function(e) {
        let img_data = removeImage(e);
        pathsAboutLicense = pathsAboutLicense.filter(item => item !== img_data);
        inputAboutLicense.value = pathsAboutLicense;
    });
    $(document).on("click", ".edit-image-delete-btn.about-photo", function (e) {
        e.preventDefault();
        let input = document.createElement("input");
        input.name = "deleteAboutPhoto[]";
        input.type = "hidden";
        let slider_id = $(this).parent()[0].childNodes[3].attributes[0].nodeValue.split("-").pop();
        input.value = slider_id;
        form.appendChild(input);
        $(this).parent().remove();
    })
    $(document).on("click", ".edit-image-delete-btn.about-license", function (e) {
        e.preventDefault();
        let input = document.createElement("input");
        input.name = "deleteAboutLicense[]";
        input.type = "hidden";
        let slider_id = $(this).parent()[0].childNodes[3].attributes[0].nodeValue.split("-").pop();
        input.value = slider_id;
        form.appendChild(input);
        $(this).parent().remove();
    })
    $(document).on("click", ".edit-image-delete-btn.news-edit", function (e) {
        e.preventDefault();
        let input = document.createElement("input");
        input.name = "deleteNewsFiles[]";
        input.type = "hidden";
        let slider_id = $(this).parent()[0].childNodes[3].attributes[0].nodeValue.split("-").pop();
        input.value = slider_id;
        form.appendChild(input);
        $(this).parent().remove();
    })
});

$('.green-button-plus button').on('click', function(e){
    // collapse  max height 60 px important
    setTimeout(() => {

        const collapsSelector = $(e.target)
            .closest('[data-target]').attr('data-target')

        const container = $(collapsSelector);

        $(container).closest( ".col-12" ).toggleClass('sub-cat');

        if($(container).hasClass('show')) {

            $(container)
                .parent()
                .parent()
                .css({
                    'padding-bottom': 0
                })

            $(container)
                .parent( ".col-12" )
                .removeClass('sub-cat');
        }


            // $(container).find($('.green-button-plus'))
            // .css({
            //     'padding-bottom': '10px'
            // })

    }, 0);
  })
