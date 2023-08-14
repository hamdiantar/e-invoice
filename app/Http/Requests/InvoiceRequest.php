<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'number' => 'required|unique:invoices,number',
            'date' => 'required',
            'subtotal' => 'required',
            'total' => 'required',
            'customer_id' => 'required|exists:users,id',
            'items' => 'required',
            'items.*.name' => 'required',
            'items.*.price' => 'required|gt:0',
            'items.*.qty' => 'required|gt:0',
            'items.*.total' => 'required|gt:0',
        ];
    }

    public function attributes(): array
    {
        return [
            'user_id' => 'الطالب المشترك',
            'course_id' => ' الكورس',
            'number' => 'رقم الفاتورة',
            'date' => 'تاريخ الفاتورة ',
            'subtotal' => 'المجموع ',
            'total' => 'المجموع الكلى ',
            'customer_id' => ' العميل',
            'store_id' => 'المتجر ',
            'items.*.name' => 'اسم المنتج',
            'items.*.price' => 'السعر ',
            'items.*.qty' => 'الكمية',
            'items.*.total' => 'المجموع',
            'items' => 'بيانات الفاتورة',
        ];
    }
}
