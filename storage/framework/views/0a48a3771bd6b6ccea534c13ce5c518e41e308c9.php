<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
        <base href="<?php echo e(route('index')); ?>">
		<meta charset="utf-8" />
		<title> <?php echo $__env->yieldContent('title'); ?> </title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="<?php echo e(asset("assets/css/pages/error/error-6.css")); ?>" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo e(asset("assets/plugins/global/plugins.bundle.css")); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset("assets/plugins/custom/prismjs/prismjs.bundle.css")); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset("assets/css/style.bundle.css")); ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?php echo e(asset("imgs/logo-2.png")); ?>" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Error-->
			<div class="error error-6 d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url(<?php echo e(asset('assets/media/error/bg6.jpg')); ?>);">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-row-fluid text-center">
					<h3 class="error-title font-weight-boldest text-white mb-12" style="margin-top: 12rem;">( <?php echo $__env->yieldContent("code"); ?> ) Oops... <u><a href="<?php echo e(url()->previous()); ?>" class="text-white"> <?php echo app('translator')->get('common.Back'); ?> </a></u></h3>
					<p class="display-4 font-weight-bold text-white"><?php echo $__env->yieldContent('message'); ?></p>
				</div>
				<!--end::Content-->
			</div>
			<!--end::Error-->
		</div>
        <!--end::Main-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo e(asset("assets/plugins/global/plugins.bundle.js")); ?>"></script>
		<script src="<?php echo e(asset("assets/plugins/custom/prismjs/prismjs.bundle.js")); ?>"></script>
		<script src="<?php echo e(asset("assets/js/scripts.bundle.js")); ?>"></script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>
<?php /**PATH /var/www/html/e-invoice/resources/views/errors/layout.blade.php ENDPATH**/ ?>