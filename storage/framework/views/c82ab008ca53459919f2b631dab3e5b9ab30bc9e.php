<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SAM | ســـم</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="<?php echo e(asset('imgs/logo.png')); ?>" rel="icon">
    <link href="<?php echo e(asset('imgs/logo.png')); ?>" rel="apple-touch-icon">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>

    <link href="<?php echo e(asset('front/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/vendor/bootstrap/css/bootstrap.rtl.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/vendor/boxicons/css/boxicons.min.css"')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/css/style.css')); ?>" rel="stylesheet">
    <style>
        .invalid-feedback {
            display: block !important;
        }
        body,p,h1,h2,h3,h4,h5,h6,a,span {
            font-family: 'Cairo' !important;
        }
    </style>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

        <div style="display: flex" class="logo">
            <img src="<?php echo e(asset('imgs/logo.png')); ?>">
            <h1><a href="/">SAM | ســـمّ</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="front/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">الصفحة الرئيسية</a></li>
                <li><a class="nav-link scrollto" href="#footer"> ابحث عن فاتورتك</a></li>
                <li><a class="nav-link scrollto" href="#gallery">من نحن </a></li>
                <li><a class="nav-link scrollto" href="#contact">تواصل معنا </a></li>
                <?php if(auth()->guard()->check()): ?>
                    <li class="dropdown"><a href="#"><span style="margin-left:10px;">  مرحبا بك <?php echo e(auth()->user()->name); ?> </span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a  style="color: black" onclick="document.getElementById('logout').submit()" href="#">تسجيل الخروج</a></li>
                        </ul>
                    </li>
                    <form id="logout" action="<?php echo e(route("logout")); ?>" method="POST" style="display: none">
                        <?php echo csrf_field(); ?>
                    </form>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                <li><a class="nav-link scrollto" href="#Login">تسجيل الدخول</a></li>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                <div>
                    <h1>نظام حفظ الفواتير</h1>
                    <h2>تهدف خدمة ســـمّ إلى تطوير نظام الفواتير فى المملكة العربية السعودية من خلال استبدال الفواتير الورقية بالفواتير الرقمية لحفظها من الضياع والتلف والمساهمة فى رؤية 2030 بالحفاظ على البيئة</h2>
                    <a href="<?php echo e(route('register')); ?>?role=store" class="download-btn"><i class="bx bxl-play-store"></i>  الأنضمام كمتجر</a>
                    <a href="<?php echo e(route('register')); ?>?role=customer" class="download-btn"><i class="bx bxl-apple"></i> الأنضمام كعميل </a>
                </div>
            </div>
            <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                <img src="<?php echo e(asset('front/img/hero-img.png')); ?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->
<main id="main">

    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>ابحث عن فاتورتك الأن</h4>
                        <p>فقط قم بكتابة رقم الفاتورة ثم الضغط على زر البحث</p>
                        <form action="/" method="get">
                            <input type="text" name="q" value="<?php echo e(request()->q); ?>"><input type="submit" value="ابحث الأن">
                        </form>
                    </div>
                    <?php if(auth()->guard()->check()): ?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3 class="hsites">فواتيري : </h3>
                                    </div>
                                    <div class="col-md-12">
                                        <table id="myTable" class="paleBlueRows">
                                            <thead>
                                            <tr>
                                                <th>رقم الفاتورة</th>
                                                <th>المتجر</th>
                                                <th>عدد المنتجات</th>
                                                <th>تاريخ الفاتورة</th>
                                                <th>المجموع</th>
                                                <th>الضريبة [15 %]</th>
                                                <th>المجموع الكلى</th>
                                                <th>طباعة</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(count($invoices)): ?>
                                                <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td>#<?php echo e($invoice->number); ?></td>
                                                        <td><?php echo e(optional($invoice->store)->name); ?></td>
                                                        <td><?php echo e(count($invoice->items)); ?></td>
                                                        <td><?php echo e(date('Y-m-d H:m A', strtotime($invoice->date))); ?></td>
                                                        <td><?php echo e(number_format($invoice->subtotal, 2)); ?></td>
                                                        <td><?php echo e(number_format($invoice->total - $invoice->subtotal, 2)); ?></td>
                                                        <td><?php echo e(number_format($invoice->total, 2)); ?></td>
                                                        <td><a href="<?php echo e(route('printInvoice' , $invoice->id)); ?>" target="_blank" class="btn btn-primary"><i class="bi bi-printer-fill"></i>
                                                            </a></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="8">لا يوجد فواتير</td>
                                                </tr>
                                            <?php endif; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2> من نحن ؟؟ </h2>
            </div>
        </div>

        <div class="container-fluid" data-aos="fade-up">
            <div class="gallery-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href="<?php echo e(asset('front/img/1.png')); ?>" class="gallery-lightbox" data-gall="gallery-carousel"><img src="<?php echo e(asset('front/img/1.png')); ?>" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="<?php echo e(asset('front/img/2.png')); ?>" class="gallery-lightbox" data-gall="gallery-carousel"><img src="<?php echo e(asset('front/img/2.png')); ?>" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="<?php echo e(asset('front/img/3.png')); ?>" class="gallery-lightbox" data-gall="gallery-carousel"><img src="<?php echo e(asset('front/img/3.png')); ?>" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="<?php echo e(asset('front/img/4.png')); ?>" class="gallery-lightbox" data-gall="gallery-carousel"><img src="<?php echo e(asset('front/img/4.png')); ?>" class="img-fluid" alt=""></a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Gallery Section -->

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>تواصل معنا </h2>
            </div>
            <div style="justify-content: space-around;" class="row">
                <div style="box-shadow: 0 0 6px 3px #a19a9a;padding: 18px; border-radius: 5px;" class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 info">
                            <i class="bx bx-map"></i>
                            <h4>Address</h4>
                            <p>A108 Adam Street,<br>New York, NY 535022</p>
                        </div>
                        <div class="col-lg-6 info">
                            <i class="bx bx-phone"></i>
                            <h4>Call Us</h4>
                            <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
                        </div>
                        <div class="col-lg-6 info">
                            <i class="bx bx-envelope"></i>
                            <h4>Email Us</h4>
                            <p>contact@example.com<br>info@example.com</p>
                        </div>
                        <div class="col-lg-6 info">
                            <i class="bx bx-time-five"></i>
                            <h4>Working Hours</h4>
                            <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

    <section id="Login" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>تسجيل الدخول</h2>
            </div>
            <div style="justify-content: space-around;" class="row">
                <div class="col-lg-8">
                    <form style="box-shadow: 0 0 6px 3px #a19a9a;padding: 18px; border-radius: 5px;" action="<?php echo e(route('login')); ?>" method="post" role="form" class="php-email-form" data-aos="fade-up">
                        <div class="form-group">
                            <?php echo csrf_field(); ?>
                            <label>البريد الألكترونى</label>
                            <input autocomplete="new-email" placeholder="البريد الألكترونى" type="text" name="email" class="form-control" required>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group mt-3">
                            <label>كلمة المرور </label>
                            <input autocomplete="new-password" placeholder="كلمة المرور" type="password" class="form-control" name="password"  required>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="text-center mt-4"><button type="submit">تسجيل الدخول </button></div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->

<footer id="footer2">
    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>SAM</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="#">Our Team</a>
        </div>
    </div>
</footer><!-- End Footer -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo e(asset('front/vendor/aos/aos.js')); ?>"></script>
<script src="<?php echo e(asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('front/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
<script src="<?php echo e(asset('front/vendor/swiper/swiper-bundle.min.js')); ?>"></script>

<!-- Template Main JS File -->
<script src="<?php echo e(asset('front/js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH /var/www/html/e-invoice/resources/views/home.blade.php ENDPATH**/ ?>