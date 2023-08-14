<div class="card-body">
    <div class="row">

        <div class="form-group col-md-4">
            <label>  رقم الفاتورة  <span class="text-danger">*</span></label>
            <input style="background-color: #e2dede;" type="text" class="form-control" readonly  name="number" value="{{isset($item) ? $item->number : $number}}">
        </div>

        <div class="form-group col-md-4">
            <label>   التاريخ <span class="text-danger">*</span></label>
            <input type="datetime-local" class="form-control"  name="date" value="{{isset($item) ? $item->date : old('date')}}">
        </div>

        <div class="form-group col-md-4">
            <label> اختر العميل <span class="text-danger">*</span></label>
            <select class="form-control rounded-0 selectpicker" data-live-search="true" name="customer_id">
                <option value="">أختر العميل</option>
                @foreach($customers as $customer)
                    <option value="{{$customer->id}}"> {{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class=" col-md-12">
            <h3 class="text-center p-3">بيانات الفاتورة</h3>
            <table class="table table-bordered text-center">
                <tr>
                    <th>#</th>
                    <th>اسم المنتج</th>
                    <th>الكمية</th>
                    <th>السعر</th>
                    <th>المجموع</th>
                    <th>
                        <a onclick="addRow()" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                    </th>
                </tr>
                <tbody id="tblBody">

                </tbody>
                <tfoot>
                <tr>
                    <td colspan="2">
                        المجموع : <input type="text" readonly class="form-control" id="finalTotal1" value="0" name="subtotal">
                    </td>
                    <td colspan="2">
                        الضريبة : <input type="text" readonly class="form-control" value="15 %" name="tax">
                    </td>
                    <td colspan="2">
                        المجموع الكلى : <input type="text" readonly class="form-control" id="finalTotal2" value="0" name="total">
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>

    </div>
</div>
