$(".has-tooltip,[data-toggle='tooltip']").tooltip();
// toaster options
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-left",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
// date pickers
function initPickers()
{
    $(".date-picker").datepicker({
        defaultViewDate: 'today',
        autoclose: true,
        format : 'yyyy-mm-dd',
        todayHighlight: true,
        todayBtn: "linked",
        orientation: "bottom left",
        defaultDate: moment().format('mm-dd-yyyy'),
        templates: {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'
        }
    });

    $('.time-picker').timepicker({
        minuteStep: 1,
        defaultTime: moment().format('H:m:s'),
        showSeconds: true,
        showMeridian: false,
        snapToStep: true
    });

    $(".datetime-picker").datetimepicker({
        format : 'YYYY-MM-DD HH:mm:ss',
    });
}

// data tables
// - normal DT
$(".datatable").DataTable( $('html')[0].lang === 'ar' ? {
    language: {
        url: 'https://cdn.datatables.net/plug-ins/1.10.25/i18n/Arabic.json'
    }
} : '');
// - With Buttons
let page_title = $("title").text()


$(".exportal-datatable").DataTable({
    buttons: [
        {
            attr: {
                class : 'btn btn-primary rounded-0 m-1'
            },
            extend: 'copy',
            exportOptions: {
                columns: ':visible:not(:last-child)'
            },
            text: '<i class="fa fa-copy"></i> Copy',
        },
        {
            attr: {
                class : 'btn btn-primary rounded-0 m-1'
            },
            extend: 'print',
            exportOptions: {
                columns: ':visible:not(:last-child)'
            },
            text: '<i class="fa fa-print"></i> Print',
            // messageTop: `<h4 class="text-center" style="margin-bottom: 10px">${page_title}</h4>`
        },
        {
            attr: {
                class : 'btn btn-primary rounded-0 m-1'
            },
            extend: 'excel',
            exportOptions: {
                columns: ':visible:not(:last-child)'
            },
            text: '<i class="fa fa-file-excel"></i> Excel'
        },
        {
            attr: {
                class : 'btn btn-primary rounded-0 m-1'
            },
            extend: 'csv',
            exportOptions: {
                columns: ':visible:not(:last-child)'
            },
            text: '<i class="fa fa-file-csv"></i> CSV'
        },
        {
            attr: {
                class : 'btn btn-primary rounded-0 m-1'
            },
            extend: 'pdf',
            exportOptions: {
                columns: ':visible:not(:last-child)'
            },
            text: '<i class="fa fa-file-pdf"></i> PDF'
        }
    ],
    dom: 'Bfrtip',
    responsive: true,
});

function confirmActionWithAlert(targetFormId, actionType, iconType = null) {
    event.preventDefault();
    Swal.fire({
        title: `${actionType}!`,
        text: `Are You Sure To ${actionType} it ?`,
    icon: `${iconType ?? 'warning'}`,
        showCancelButton: true,
        confirmButtonText: `Yes, ${actionType} it!`
}).then(function (result) {
        if (result.isConfirmed) {
            $(targetFormId).submit();
        }
    });
}


function confirmAddVideoToDomains(targetFormId, actionType, iconType = null) {
    event.preventDefault();
    Swal.fire({
        title: `حمايــة الفديو`,
        text: 'سوف يتم اضافه هذا الفديو الى دومين الداش بورد والمنصة ولن يكون متاح فى اى موقع أخر',
        icon: `${iconType ?? 'warning'}`,
        showCancelButton: true,
        confirmButtonText: `Add To Domains`
    }).then(function (result) {
        if (result.isConfirmed) {
            $(targetFormId).submit();
        }
    });
}

var initRepeater = function()
{
    removeAllEventListner('[data-repeater-create=""]');
    repeater = $('.repeater').repeater({
        initEmpty: false,
        defaultValues: {},
        show: async  function () {
            countNumberOfBroadcast('#number-of-times-broadcast', 1);
            $(this).slideDown(function(){
                $(".date-picker").datepicker('destroy');
                initPickers();
            });
        },
        hide: async function (deleteElement) {
            Swal.fire({
                title: `Delete`,
                text: `Are You Sure To Delete it ?`,
                icon: `warning`,
                showCancelButton: true,
                confirmButtonText: `Yes, Delete it!`
            }).then(function (result) {
                if (result.isConfirmed) {
                    $(this).slideUp(deleteElement);
                    countNumberOfBroadcast('#number-of-times-broadcast', 1, false);
                }
            });
        }
    });
}


//this function used when create/edit subjects for preview icons
function previewImage(event) {
    event.preventDefault();
    let imagePath = event.target.attributes.src.value;
    document.getElementById('preview-image-div').src = imagePath
    $('#subject-icon').val(imagePath);
    $('img').each( function (index, image) {
        $(this).removeClass("selected-img")
    });
    $(event.target).toggleClass("selected-img");
}


//function to open modal

function openModalToShow(url, modalId, responseId) {
    event.preventDefault();
    $.ajax({
        url: url,
        type: 'get',
        success: function (response) {
            $(modalId).modal('show');
            setTimeout( () => {
                $('.box-loader').hide();
                $(responseId).html(response.data);
            },3000)
        }
    });
}

//reset modal after close

$('#subject-show-modal').on('hidden.bs.modal', function () {
    $('.box-loader').show();
    $('#show_subject_response').html('');
})


function activateSidebar()
{
    let current_url = getCurrentOrigin();
    current_url = singleTrim (current_url,"/", 0);
    let link = document.querySelector("a[href$='"+current_url+"'][class='menu-link']");
    if(isset(link)){

        link.parentElement.classList.add("menu-item-active");
    }
}


function init(){
    initRepeater();
    initPickers();
    activateSidebar();
}
init();
var avatar1 = new KTImageInput('kt_image_1');
