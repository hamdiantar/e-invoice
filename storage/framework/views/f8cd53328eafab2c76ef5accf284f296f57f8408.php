    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="<?php echo e(asset("assets/plugins/global/plugins.bundle.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/prismjs/prismjs.bundle.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/scripts.bundle.js")); ?>"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="<?php echo e(asset("assets/plugins/custom/datatables/datatables.bundle.js")); ?>"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="<?php echo e(asset("assets/js/pages/widgets.js")); ?>"></script>
    <!--end::Page Scripts-->
    <script src="<?php echo e(asset("assets/js/pages/features/miscellaneous/toastr.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/pages/widgets.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/pages/features/miscellaneous/sweetalert2.js")); ?>"></script>
    <script src="<?php echo e(asset('js/integerations.js?v=0.1')); ?>"></script>
    <script src="<?php echo e(asset('js/PHPHelper.js?v=0.1')); ?>"></script>
    <script src="<?php echo e(asset('js/commander.js?v=0.1')); ?>"></script>
    <script src="<?php echo e(asset('js/dom-builder.js')); ?>"></script>
    <script src="<?php echo e(asset('js/general.js?v=0.1')); ?>"></script>
    <!--end::Page Scripts-->

    
    <script src="<?php echo e(asset("assets/plugins/custom/datatables/datatables.bundle.js")); ?>"></script>
    <script>
        <?php if(session('created')): ?>
            toastr.success('<?php echo trans(session("created")); ?>');
        <?php endif; ?>

        <?php if(session('updated')): ?>
            toastr.info('<?php echo trans(session("updated")); ?>');
        <?php endif; ?>

        <?php if(session('deleted')): ?>
            toastr.error('<?php echo trans(session("deleted")); ?>');
        <?php endif; ?>
        <?php if(session('warning')): ?>
            toastr.warning('<?php echo trans(session("warning")); ?>');
        <?php endif; ?>

        <?php if(session('success')): ?>
        toastr.success('<?php echo trans(session("success")); ?>');
        <?php endif; ?>

        <?php if(session('error')): ?>
        toastr.error('<?php echo trans(session("error")); ?>');
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            toastr.error("<?php echo trans($error); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js" integrity="sha512-JtpGKUjQUqCJmgw3TOr8bkL8QqB8oCbofRU39xgDnRYTfIDvfg0gQs2efeKxBCdwSAP/h3CSqhn87+giWSsxjw==" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendor/jsvalidation/js/jsvalidation.js')); ?>"></script>

    <script>
        $(document).ready(function(){
            $("table").addClass("table-bordered table-checkable");
            $("table").addClass("table");
        });

        function server_side_datatable(selector, load_at_end_selector) {
            var page_title = $("title").text()
            $datatable = $('#datatable-with-btns').DataTable({
                serverSide: false,
                responsive: true,
                "iDisplayLength": 25,
                dom: 'Bfrtipl',
                "ajax": {
                    "url": "<?php echo e(url()->full()); ?>",
                    "type": "GET",
                    "data": function (data) {
                        data.isDataTable = "true";
                    }
                },
                "language": {
                    "url": "<?php echo e(app()->isLocale("ar")  ? url("trans/ar.json") :  url("trans/en.json")); ?>",
                },
                aoColumns: [
                        <?php if(isset($js_columns)): ?>
                        <?php $__currentLoopData = $js_columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key == 'action' || $key=='DT_RowIndex' || $key=='options'): ?>
                    {
                        mData: "<?php echo e($key); ?>", name: "<?php echo e($row); ?>", orderable: false, searchable: false
                    },
                        <?php else: ?>
                    {
                        mData: "<?php echo e($key); ?>", name: "<?php echo e($row); ?>"
                    },
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                ],
                pageLength: 25,
                lengthMenu: [ [25 , 50, 100, 250, 500, -1], [25, 50, 100, 250, 500, "<?php echo e(__('All')); ?>"] ],
                "lengthChange": true,
            });
        }
    </script>
    <?php echo $__env->yieldPushContent('js'); ?>
    <?php echo $__env->yieldContent('footer'); ?>
<?php /**PATH /var/www/html/e-invoice/resources/views/layout/foot.blade.php ENDPATH**/ ?>