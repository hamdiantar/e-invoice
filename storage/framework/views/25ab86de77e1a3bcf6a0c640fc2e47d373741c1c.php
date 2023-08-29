<base href="">
<meta charset="utf-8" />
<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link rel="canonical" href="https://keenthemes.com/metronic" />
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->

<?php if(app()->getLocale() == "ar"): ?>
<!--begin::Global Theme Styles(used by all pages)-->
<link href="<?php echo e(asset("assets/plugins/global/plugins.bundle.rtl.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset("assets/plugins/custom/prismjs/prismjs.bundle.rtl.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset("assets/css/style.bundle.rtl.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<!--end::Global Theme Styles-->
<!--begin::Layout Themes(used by all pages)-->
<link href="<?php echo e(asset("assets/css/themes/layout/header/base/light.rtl.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset("assets/css/themes/layout/header/menu/light.rtl.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset("assets/css/themes/layout/brand/light.rtl.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset("assets/css/themes/layout/aside/light.rtl.css?v=1")); ?>" rel="stylesheet" type="text/css" />

<!--begin::Page Vendors Styles(used by this page)-->
<link href="<?php echo e(asset("assets/plugins/custom/datatables/datatables.bundle.rtl.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<?php else: ?>
<!--begin::Global Theme Styles(used by all pages)-->
<link href="<?php echo e(asset("assets/plugins/global/plugins.bundle.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset("assets/plugins/custom/prismjs/prismjs.bundle.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset("assets/css/style.bundle.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<!--end::Global Theme Styles-->
<!--begin::Layout Themes(used by all pages)-->
<link href="<?php echo e(asset("assets/css/themes/layout/header/base/light.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset("assets/css/themes/layout/header/menu/light.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset("assets/css/themes/layout/brand/light.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset("assets/css/themes/layout/aside/light.css?v=1")); ?>" rel="stylesheet" type="text/css" />

<!--begin::Page Vendors Styles(used by this page)-->
<link href="<?php echo e(asset("assets/plugins/custom/datatables/datatables.bundle.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>
<!--end::Layout Themes-->
<link rel="shortcut icon" href="<?php echo e(asset("imgs/tamkeen.png")); ?>" />


<link href="<?php echo e(asset("assets/css/custom.css?v=1")); ?>" rel="stylesheet" type="text/css" />

<link href="<?php echo e(asset("assets/plugins/custom/datatables/datatables.bundle.css?v=1")); ?>" rel="stylesheet" type="text/css" />
<style>
    .hidden {
        display: none !important;
    }

    .subheader h5
    {
        font-weight: bold !important;
    }
</style>
<?php echo $__env->yieldPushContent('css'); ?>
<?php /**PATH /var/www/html/e-invoice/resources/views/layout/head.blade.php ENDPATH**/ ?>