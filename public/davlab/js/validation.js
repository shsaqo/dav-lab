// histology page validation

jQuery.extend(jQuery.validator.messages, {
    required: "Պարտադիր դաշտ",
    digits: "Սխալ ձևաչափ",
    email: "Էլ․ հասցեի սխալ ձևաչափ",
    phoneUS: "Հեռախոսահամարի սխալ ձևաչափ",
    range: "Սխալ ամսաթիվ"
});

jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\\s+/g, "");
    return this.optional(element) ||
        phone_number.match(/^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g);
}, "Հեռախոսահամարի սխալ ձևաչափ");

var paperPageValidator = $("#analyses-form").validate({
    rules: {
        client_name: {
            required: true,
        },
        date_input: {
            required: true,
        },
        surname: {
            required: true,
        },
        age: {
            required: true,
            digits: true,
        },
        clinic_diagnose: {
            required: true,
        },
        doctors: {
            required: true,
        },
        med_fac_name: {
            required: true,
        },
        doctors_phone: {
            phoneUS: true
        },
        dispatch_day: {
            required: true,
            digits: true,
            range: [1, 31]
        },
        dispatch_month: {
            required: true,
            digits: true,
            range: [1, 12]
        },
        dispatch_year: {
            required: true,
            digits: true
        },
        client_day: {
            required: true,
            digits: true,
            range: [1, 31]
        },
        client_month: {
            required: true,
            digits: true,
            range: [1, 12]
        },
        client_year: {
            required: true,
            digits: true
        },
        operation_descr: {
            required: true,
        },
        doctors_email: {
            email: true
        }
    },
    groups: {
        dispatchDate: "dispatch_day dispatch_month dispatch_year",
        clientDate: "client_day client_month client_year"
    },
    onfocusout: function (element) {
        this.element(element);
    },
});

// $("#about-us-form").validate({
//     rules: {
//         '.form-control.added.valid': {
//             required: function(element) {
//                 return !!$(".form-control.added.error").val();
//             }
//         },
//         '.form-control.added.error': {
//             required: function(element) {
//                 return !!$(".form-control.added.error").val();
//             }
//         },
//     },
//     onfocusout: function (element) {
//         this.element(element);
//     },
// });

// $('#about-us-form').each(function() {
//     $(this).rules("add",
//         {
//             required: true,
//             messages: {
//                 required: "Email is required",
//             }
//         });
// });

$("#home-call-form").validate({
    rules: {
        modal_phone: {
            required: true,
            digits: true
        },
    },
    onfocusout: function (element) {
        this.element(element);
    },
});

const message = {
    en: {
        required: "Required field"
    },
    hy: {
        required: "Պարտադիր դաշտ"
    },
    ru: {
        required: "Обязательное поле"
    }
};

if(window.location.href.split('/').pop().includes('hy')){
    $.extend($.validator.messages, message.hy);
} else if(window.location.href.split('/').pop().includes('ru')){
    $.extend($.validator.messages, message.ru);
} else if(window.location.href.split('/').pop().includes('en')){
    $.extend($.validator.messages, message.en);
}

$("#news-form").validate({
    rules: {
        title_hy: {
            required: true,
        },
        title_ru:{
            required: true,
        },
        title_en:{
            required: true
        }
    },
    onfocusout: function (element) {
        this.element(element);
    },
});

$(document).on("click", "#form_reset", function (e) {
    $(".TextBoxDiv").remove();
    paperPageValidator.resetForm();
});
