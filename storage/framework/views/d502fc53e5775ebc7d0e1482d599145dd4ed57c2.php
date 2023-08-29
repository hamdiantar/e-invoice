
<div class="col-xl-12 col-lg-12">
    <!--begin::List Widget 1-->
    <div class="card card-custom card-stretch gutter-b">
        <!--begin::Header-->
        <div class="card-header pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark"> إحصائيات المنصة </span>
            </h3>
            <div class="card-toolbar"></div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body row">
            <div class="col-md-4">
                <!--begin::Stats Widget 29-->
                <div class="card card-custom bg-info rounded-0 mb-2"  >
                    <!--begin::Body-->
                    <div class="card-body">
                        <i class="flaticon2-user-outline-symbol text-white icon-2x" style="font-size:20px !Important"></i>
                        <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 d-block"><?php echo e(\App\Models\User::where('type', 'customer')->count()); ?></span>
                        <span class="font-weight-bold text-white font-size-sm"> العملاء</span>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Stats Widget 29-->
            </div>
            <div class="col-md-4" >
                <!--begin::Stats Widget 29-->
                <div class="card card-custom bg-info  rounded-0 mb-2"  >
                    <!--begin::Body-->
                    <div class="card-body">
                        <i class="fab fa-audible text-white icon-2x"></i>
                        <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 d-block"><?php echo e(\App\Models\User::where('type', 'store')->count()); ?></span>
                        <span class="font-weight-bold text-white font-size-sm">المتاجر</span>
                    </div>
                    <!--end::Body-->
                </div>


                <!--end::Stats Widget 29-->
            </div>
            <div class="col-md-4">
                <!--begin::Stats Widget 29-->
                <div class="card card-custom bg-info  rounded-0 mb-2"  >
                    <!--begin::Body-->
                    <div class="card-body">
                        <i class="fas fa-file-invoice text-white icon-2x"></i>
                        <?php if(auth()->user()->type == 'store'): ?>
                            <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 d-block"><?php echo e(\App\Models\Invoice::where('store_id', auth()->id())->count()); ?></span>

                        <?php else: ?>
                            <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 d-block"><?php echo e(\App\Models\Invoice::count()); ?></span>

                        <?php endif; ?>
                        <span class="font-weight-bold text-white font-size-sm">فواتير المتجر</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /var/www/html/e-invoice/resources/views/home/super-admin.blade.php ENDPATH**/ ?>