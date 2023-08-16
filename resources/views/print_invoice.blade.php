<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>E-Invoice System </title>
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-cSfiDrYfMj9eYCidq//oGXEkMc0vuTxHXizrMOFAaPsLt1zoCUVnSsURN+nef1lj" crossorigin="anonymous">    <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        body {
            font-family: 'Cairo';
            font-size: 22px;
        }
        ::-webkit-scrollbar {
            width: 8px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }     .body-main {
                          background: #ffffff;
                          border-bottom: 15px solid #173560;
                          border-top: 15px solid #173560;
                          margin-top: 30px;
                          margin-bottom: 30px;
                          padding: 14px 10px !important;
                          position: relative;
                          box-shadow: 0 1px 21px #808080;
                          font-size: 12px;
                          border-radius: 5px;
              }

        .main thead {
            background: #1E1F23;
            color: #fff;
        }
        .img{
            height: 100px;}
        h1{
            text-align: center;
        }
        table.blueTable {
            border: 1px solid #1C6EA4;
            background-color: #EEEEEE;
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }
        table.blueTable td, table.blueTable th {
            border: 1px solid #AAAAAA;
            padding: 3px 2px;
        }
        table.blueTable tbody td {
            font-size: 13px;
        }
        table.blueTable tr:nth-child(even) {
            background: #D0E4F5;
        }
        table.blueTable thead {
            background: #173560;
            background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            background: -webkit-linear-gradient(top, #173560 0%, #173560 66%, #173560 100%);
            background: linear-gradient(to bottom, #173560 0%, #173560 66%, #173560 100%);
            border-bottom: 2px solid #444444;
        }
        table.blueTable thead th {
            font-size: 15px;
            font-weight: bold;
            color: #FFFFFF;
            border-left: 2px solid #D0E4F5;
        }
        table.blueTable thead th:first-child {
            border-left: none;
        }

        table.blueTable tfoot td {
            font-size: 14px;
        }
        table.blueTable tfoot .links {
            text-align: right;
        }
        table.blueTable tfoot .links a{
            display: inline-block;
            background: #1C6EA4;
            color: #FFFFFF;
            padding: 2px 8px;
            border-radius: 5px;
        }
        .copyright-container {
            color: #858585;
            margin-top: 10px;
            text-align: center;
            font-size: 13px;
        }
    </style>
</head>
<body className='snippet-body'>
<div class="container">

{{--    <div class="page-header">--}}
{{--        <h1>Invoice Template  </h1>--}}
{{--    </div>--}}


    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 body-main">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <img style="height: 115px;
    border-radius: 100px;
    width: 115px;"  src="{{asset('imgs/logo.png')}}" />
                        </div>
                        <div class="col-md-8 text-right">
                            <h4 style="color: #173560;"><strong>E-Invoice System</strong></h4>
                            <p>+96623423434   <i class="fa fa-phone"> </i> </p>
                            <p>e-invoice@system.com <i class="fa fa-comment-dots"> </i></p>

                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 style="margin: 0;">الفاتورة الألكترونية</h2>
                            <h5># {{$invoice->number}}</h5>
                        </div>
                    </div>
                    <br />
                    <div>

                        <table class="text-center blueTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم المنتج</th>
                                <th>الكمية</th>
                                <th>السعر</th>
                                <th>المجموع</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($invoice->items as $index=>$item)
                                <tr>
                                    <td>{{$index+ 1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{number_format($item->price, 2)}}</td>
                                    <td>SAR {{number_format($item->total, 2)}}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="1"> <strong>المجموع </strong></td>
                                <td colspan="2"> <strong>الضريبة </strong></td>
                                <td colspan="2"> <strong>قيمة الضريبة </strong></td>

                            </tr>
                            <tr>
                                <td colspan="1"> <strong> SAR {{number_format($invoice->subtotal)}} </strong></td>
                                <td colspan="2"> <strong> 15 % </strong></td>
                                <td colspan="2"><strong> SAR  {{ number_format($invoice->total - $invoice->subtotal) }} </strong></td>
                            </tr>
                            <tr style="color: #F81D2D;">
                                <td colspan="3" ><h4><strong>المجموع الكلى</strong></h4></td>
                                <td colspan="2"><h4><strong> SAR  {{ number_format($invoice->total) }} </strong></h4></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div>
                        <div style="margin-top: 26px;" class="col-md-6 mt-3">
                            <p><b>تاريخ الفاتورة :</b>  {{ date('Y-m-d H:m A', strtotime($invoice->date)) }}</p>
                            <p><b> اسم المتجر :</b>  {{ optional($invoice->store)->name }}</p>
                            <p><b> جوال المتجر :</b>  {{ optional($invoice->store)->phone }}</p>
                        </div>
                        <div style="margin-top: 26px;" class="col-md-6 mt-3">
                            <p><b> اسم العميل :</b>  {{ optional($invoice->customer)->name }}</p>
                            <p><b> جوال العميل :</b>  {{ optional($invoice->customer)->phone }}</p>
                            <p><b> رقم الفاتورة :</b>  {{ $invoice->number }}</p>
                        </div>

                    </div>
                    <div class="col-md-12 copyright-container">
                        <p>  <a href="#">E-Invoice System</a> 2023  All Right Reserved © </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
<script type='text/javascript' src='#'></script>
<script type='text/javascript' src='#'></script>
<script type='text/javascript' src='#'></script>
<script type='text/javascript'></script>
<script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function(e) {
        e.preventDefault();
    });
    setTimeout( () => {
        window.print();
    }, 500)
</script>

</body>
</html>
