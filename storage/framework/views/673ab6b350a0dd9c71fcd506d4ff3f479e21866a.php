<?php $__env->startSection('page', trans('pages.Dashboard')); ?>
<?php
    $page = 'Dashboard';
?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <?php echo $__env->make('home.super-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush("js"); ?>
<script src="<?php echo e(asset("assets/js/pages/features/charts/apexcharts.js")); ?>"></script>
<script>
// who is here
// Shared Colors Definition
const primary = '#6993FF';
const success = '#1BC5BD';
const info = '#8950FC';
const warning = '#FFA800';
const danger = '#F64E60';

chart = new ApexCharts(document.querySelector("#who_is_here"), {
    series: [44, 55, 13, 43, 22],
    chart: {
        width: 380,
        type: 'pie',
    },
    labels: ['المشتركين', 'المحاضرين', 'الكورسات', 'التصنيفات', 'الاشتراكات'],
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }],
    colors: [primary, success, warning, danger, info]
});
chart.render();

/////////////////////////////////
chart = new ApexCharts(document.querySelector("#page_views"), {
    series: [{
		name: 'المحاضرات',
		data: [31, 40, 28, 51, 42, 109, 100]
	}, {
	    name: 'الرئيسية',
		data: [11, 32, 45, 32, 34, 52, 41]
	}],
	chart: {
		height: 350,
		type: 'area'
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		curve: 'smooth'
	},
	xaxis: {
		type: 'datetime',
		categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
	},
	tooltip: {
		x: {
			format: 'dd/MM/yy HH:mm'
		},
	},
	colors: [primary, success]
});
chart.render();
/////////////////////////////////////
chart = new ApexCharts(document.querySelector("#apsence"), {
    series: [{
        
        data: [44, 55, 57, 56, 61, 58, 63]
    }],
    chart: {
        type: 'bar',
        height: 350
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    xaxis: {
        categories: ["<?php echo app('translator')->get('home.Saturday'); ?>", "<?php echo app('translator')->get('home.Sunday'); ?>", "<?php echo app('translator')->get('home.Monday'); ?>", "<?php echo app('translator')->get('home.Tuesday'); ?>", "<?php echo app('translator')->get('home.Wednesday'); ?>", "<?php echo app('translator')->get('home.Thursday'); ?>", "<?php echo app('translator')->get('home.Friday'); ?>"],
    },

    fill: {
        opacity: 1
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands"
            }
        }
    },
    colors: [success]
});
chart.render();
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/e-invoice/resources/views/index.blade.php ENDPATH**/ ?>