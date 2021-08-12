$(document).ready(function () {
    var counter = 0;
    let $price = 0;
    // let $ids = 0;

    // show price modal
    function showPriceModal(counter) {
        if (counter > 0) {
            $("#analyses").show();
        } else {
            $("#analyses").hide();
        }


        document.getElementById("analyses_count").innerHTML = counter;
    }
    // check or uncheck checkboxes
    // var idsArray = [];
    // $('input[type="checkbox"]').change(function () {
    //     idsArray.push($(this)[0].attributes[0].nodeValue);
    //     localStorage.setItem("id", idsArray);
    //     if ($(this).prop("checked")) {
    //         ++counter;
    //     } else if($(this).prop("checked", false)) {
    //         --counter;
    //     }
    //     showPriceModal(counter);
    //     document.getElementById("analyses_count").innerHTML = counter;
    // });
    var data_id;
    var inputs;
    function hasNumbers(t)
    {
        var regex = /\d/g;
        return regex.test(t);
    }
    $(document).on("click", ".tab-chooser.tab-changer-item.active", function (e) {
        e.preventDefault();
        data_id = e.target.attributes[1].value;
        inputs = $(`input[data*=${data_id}]`);
    });
    $(document).on("click", ".mobile-sub-shower.tab-changer-item.active", function (e) {
        e.preventDefault();
        data_id = e.target.attributes[2].value;
        let containsNumber = hasNumbers(data_id);
        if(!containsNumber){
            data_id = e.target.attributes[3].value;
        }
        $(`#${data_id}`).addClass("active");
    });
    // check all inputs

    $(".all-select").change(function (event) {
        var parent = $(event.target).closest('.tab-one-content');
        var inputs = $(parent).find($('.item-check'));
        if($(this).prop("checked")){
            $.map(inputs, function (item) {
                $(item).prop('checked', true);
            });
        } else {
            $.map(inputs, function (item) {
                $(item).prop('checked', false);
            });
        }
    });


    // count total price
    var $card_value = 0;
    var $drop;
    var $html;
    $('input[type="checkbox"]').change(function (event) {
        event.preventDefault();
        const mainParent = $(event.target).closest($('.mainForm'));
        const localParent = $(event.target).closest($('.tab-one-content'));
        const allSelectClicked = $(event.target).closest($('.all-select')).length;
        if(!allSelectClicked){
            $(localParent).find('.all-select').prop('checked',false);
        }
        const procedures = $(mainParent).find($('.item-check:checked'));
        const localAllChecked = $(localParent).find($('.item-check:checked'));
        const localAll = $(localParent).find($('.item-check'));
        if(localAllChecked.length && localAllChecked.length === localAll.length){
            $(localParent).find('.all-select').prop('checked',true);
        }
        let total = 0;

        $('.chooesed-item').remove();

        [].forEach.call(procedures,(procedure=>{
            drawCheckedProcedures.call(procedure);
            const parent = $(procedure).closest($('.checbox-and-price'));
            const price = +$(parent).find($('p')).text();
            total += price
        }));

        $("#analyses_total_price").html(total);
        $("#total_price").html(total);
        $("#dwn-total-price").html(total + " դր․");

        const counter = procedures.length;
        showPriceModal(counter);
    });

    // close prices modal
    $(document).on('click', '.close-analyse-list',function(e) {
        e.preventDefault();
        let id = $(this).attr('data-id');
        var price = $(this)[0].childNodes[0].innerHTML;
        // todo fix
        // if (counter === 0) {
        //     $("#analyses").hide();
        // }
        // document.getElementById("analyses_count").innerHTML = counter;
        //$(`#analyse_detail_${id}`).remove();
        if(document.body.clientWidth < 1200){
            $(`input[id=${id}]`).click();
        } else {
            $(`#${id}`).click()
        }
    });

    //checked checkboxes add in selected divs
    var $card_value = 0;
    var $drop;
    var $html;
    let cardMassive = [];
    let card;

    function drawCheckedProcedures (event) {
        if(event) event.preventDefault();
        let id = $(this).attr('id');
        if ($(this).prop("checked")) {
            $drop = $(this).parent().parent().parent().html();
            $html = jQuery.parseHTML($drop);
            $card_value = $($html[1])[0].getElementsByTagName("h3")[0].innerHTML;
            var price = $html[3].innerHTML;
            cardMassive.push($card_value);
            for (var i = 0; i < cardMassive.length; ++i) {
                card = cardMassive[i];
            }
            if(id !== "analyses-first-checkbox"){
                $("#chooses-list").prepend(
                    "<li class='chooesed-item' id=analyse_detail_" +
                    id +
                    ">" +
                    card +
                    "<button class=close-analyse-list id=delete-"+ id +" data-id="+id+" type=button aria-label=choosed-delete>" +
                    "<span>" +
                    price +
                    "</span>" +
                    "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><g transform='translate(-1752 -313)'><circle cx='12' cy='12' r='12' transform='translate(1752 313)' fill='#eee'/><g transform='translate(1759.713 321.212)' opacity='0.5'><line y2='12.127' transform='translate(8.575 0) rotate(45)' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/><line y1='12.127' transform='translate(8.575 8.575) rotate(135)' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/></g></g></svg>" +
                    "</button>" +
                    "</li>"
                );
                if(card.includes('img')){
                    card = card.split('<img').shift();
                }
                $("#there-add-all").prepend(
                    `
                    <div class="container chooesed-item" id="analyse_detail_${id}">
                        <div class="row jcc">
                            <div class="col-10">
                                <div class="print-item-name-content">
                                    <p class="print-item-name">${card}</p>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="print-item-price-content">
                                    <p class="print-item-ptice">${price}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    `
                );
            }
        } else if($(this).prop("checked", false)) {
            let id = $(this)[0].attributes[0].nodeValue;
            $(`#analyse_detail_${id}`).remove();
            var childs = $("#download-content")[0].childNodes;
            childs.forEach(child => {
                if(child.id === `analyse_detail_${id}`){
                    child.remove();
                }
            })
        }
    }
    // $('input[type="checkbox"]').change(drawCheckedProcedures);

    //clear analyses data
    $( "#clear-btn").click(function(e) {
        e.preventDefault();
        $("#analyses").hide();
        $price = 0;
        counter = 0;
        $(".chooesed-item").remove();
        $('input[type="checkbox"]').each(function () {
            this.checked = false;
        })
    });
    // $(".sidebar-tab").on("click", function (e) {
    //     e.preventDefault();
    //     let id = $(this)[0].childNodes[1].attributes[1].nodeValue.split("-").pop();
    //     $("#analyses-first-checkbox").attr("data", id)
    //     let inputId = $("#analyses-first-checkbox").attr("data");
    //     if(id === inputId){
    //         $("#analyses-first-checkbox").click()
    //     }
    // })
    // $(".sidebar-tab-content").on("click", function (e) {
    //     e.preventDefault();
    //     let id = $(this)[0].childNodes[1].attributes[1].nodeValue.split("-").pop();
    //     $("#analyses-first-checkbox").attr("data", id)
    // })

    //add dynamically input
    let dynamicInputsCount = 0;
    $(document).on("click", "#addInput", function (e) {
        e.preventDefault();
        var newTextBoxDiv = $(document.createElement("div")).attr({
            id: "TextBoxDiv" + dynamicInputsCount,
            class: "TextBoxDiv",
        });

        newTextBoxDiv
            .after()
            .html(
                '<input type="text" name="textbox' +
                dynamicInputsCount +
                '" id="textbox' +
                dynamicInputsCount +
                '" value="" >' +
                '<button class="removeInput" id="' +
                dynamicInputsCount +
                '"><svg xmlns="http://www.w3.org/2000/svg" width="20.851" height="20.85" viewBox="0 0 20.851 20.85"><path d="M175.673,172.545a2.212,2.212,0,1,1-3.129,3.129l-6.648-6.649-6.648,6.649a2.212,2.212,0,0,1-3.129-3.129l6.648-6.648-6.648-6.648a2.212,2.212,0,1,1,3.129-3.129l6.648,6.648,6.648-6.648a2.212,2.212,0,1,1,3.129,3.129l-6.648,6.648Zm0,0" transform="translate(-155.471 -155.471)"/></svg></button>'
            );

        newTextBoxDiv.appendTo("#desc_container");

        dynamicInputsCount++;
    });

    // remove dynamically added input
    $(document).on("click", ".removeInput", function (e) {
        let input_id = $(this).attr("id");
        $("#TextBoxDiv" + input_id).remove();
    });

    // to prepare document before print
    function prePrint() {
        let dynamicInputs = [];
        let name = $("#client_name")[0].value;
        let surname = $("#surname")[0].value;
        let fathername = $("#father_name")[0].value;
        $("#printable-document").attr('5');
        dynamicInputs = document.querySelectorAll(".TextBoxDiv");
        $("#added_list").eq(0).empty();
        for (let i = 0; i < dynamicInputs.length; ++i) {
            document.querySelectorAll(".research-subject__list")[1].innerHTML +=
                "<li>" +
                dynamicInputs[i].getElementsByTagName("input")[0].value +
                "</li>";
        }
        $("#pacient-birth-data")[0].innerHTML = $("#client-day")[0].value + "." + $("#client-month")[0].value + "." + $("#client-year")[0].value;
        $("#hospital-name")[0].innerHTML = $("#hospital-name-select")[0].value;
        $("#pacient-name")[0].innerHTML = name + " " + surname + " " + fathername;
        $("#doctor")[0].innerHTML = $("#doctors")[0].value;
        $("#diagnose")[0].innerHTML = $("#clinic_diagnose")[0].value;
        $("#research-subject-element")[0].innerHTML = $(
            "#operation_descr"
        )[0].value;
        if ($("#spec_characters")[0].value) {
            document.getElementById("special_samples_container").style.display = "block";
            $("#spec_char")[0].innerHTML = $("#spec_characters")[0].value;
        } else {
            (document.getElementById("special_samples_container").style.display = "none");
        }
        if($("#department")[0].value){
            document.getElementById("clinic_department_container").style.display = "block";
            $("#clinic_department-name")[0].innerHTML = $("#department")[0].value;
        } else {
            (document.getElementById("clinic_department_container").style.display = "none");
        }
        if ($("#operation")[0].value) {
            document.getElementById("clinic_surgery_container").style.display = "block";
            $("#clinic_surgery")[0].innerHTML = $("#operation")[0].value
        } else {
            document.getElementById("clinic_surgery_container").style.display = "none";
        }
        $("#date_of_dispatch")[0].innerHTML = $("#dispatch_day")[0].value + "." + $("#dispatch_month")[0].value + "." + $("#dispatch_year")[0].value;
        if ($("#doctors_phone")[0].value) {
            document.getElementById("doctors_phone_container").style.display = "block";
            $("#phone_of_doctor")[0].innerHTML = $("#doctors_phone")[0].value
        } else {
            document.getElementById("doctors_phone_container").style.display = "none";
        }
        if ($("#doctors_email")[0].value) {
            document.getElementById("doctors_email_container").style.display = "block";
            $("#email_of_doctor")[0].innerHTML = $("#doctors_email")[0].value;
        } else {
            document.getElementById("doctors_email_container").style.display = "none";
        }
    }

    // return back from view document section
    $("#return_button").click(function () {
        document.getElementById("printable-document").style.display = "none";
        document.getElementById("paper_page").style.display = "block";
    });

    // print document in the section preView document
    $("#print_viewed_doc").click(function () {
        print();
    });

    // print document
    $("#print").click(function () {
        if ($("#analyses-form").valid()) {
            prePrint();
            document.getElementById("printable-document").style.display = "block";
            print();
            document.getElementById("printable-document").style.display = "none";
        } else {
            return;
        }
    });

    $(".download_btn").click(function (e) {
        if ($("#analyses-form").valid()) {
            prePrint();
                    const invoice = document.getElementById("print-content");
                    var opt = {
                        margin: [1, 1],
                        filename: 'davidyants.pdf',
                        image: { type: 'jpeg', quality: 0.98 },
                        html2canvas: { scale: 1 },
                        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
                    };
                    html2pdf().from(invoice).set(opt).save();
        } else {
            return;
        }
    });

    $(".dwn-price-list").click(function (e) {
        const invoice = document.getElementById("download-content");
            var opt = {
                margin: [1, 1],
                filename: 'davidyants.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 1 },
                jsPDF: { unit: 'cm', format: 'letter', orientation: 'portrait' }
            };
            $(".page.in-print-view").css("display", "block");
            html2pdf().from(invoice).set(opt).save();
            setTimeout(() => {
                $(".page.in-print-view").css("display", "none");
            }, 1000)
    })

    // view before print document (preView)
    $("#preView").click(function (e) {
        e.preventDefault();
        prePrint();
        if (!$("#analyses-form").valid()) {
            return;
        }
        document.getElementById("printable-document").style.display = "block";
        document.getElementById("paper_page").style.display = "none";
    });
    $(document).on("change", "#hospital-name-select", function (e) {
        const image = $(this).children("option:selected").attr("data-set");
        if(!!image){
            $("#logo-image").attr("src", `${location.origin}/images/${image}`);
        }
    });
    $(".print_btn").click(function () {
        $(".page.in-print-view").css("display", "block");
        print();
        setTimeout(() => {
            $(".page.in-print-view").css("display", "none");
        }, 1000)
    });
    function locationHashChanged() {
        let pageLoc = window.location.href.split("#").pop();
        if(pageLoc.includes("tab-4")){
            $("#gyumri-map").attr("class", "active")
        } else {
            $("#gyumri-map").attr("class", "")
        }
        if(pageLoc.includes("tab-3")){
            $("#vanadzor-map").attr("class", "active")
        } else {
            $("#vanadzor-map").attr("class", "")
        }
        if(pageLoc.includes("tab-6")){
            $("#stepanakert-map").attr("class", "active")
        } else{
            $("#stepanakert-map").attr("class", "")
        }
        if(pageLoc.includes("tab-5")){
            $("#sevan-map").attr("class", "active")
        } else {
            $("#sevan-map").attr("class", "")
        }
        if(pageLoc.includes("tab-1")){
            $("#yerevan-map").attr("class", "active")
        } else {
            $("#yerevan-map").attr("class", "")
        }
        $(".tab-changer-item.fixed-content-list__item").map((index, item) => {
            if(item.getAttribute('data-id').includes(pageLoc)){
                item.click();
            }
        });
    }
    locationHashChanged();
    window.onhashchange = locationHashChanged;

    $(document).on("click", "#clinical_lab", function (e) {
        e.preventDefault();
        const lang = location.href.split('/').pop();
        location.href=`${lang}/price`;
    });
});

