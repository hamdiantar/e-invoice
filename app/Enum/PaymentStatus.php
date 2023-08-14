<?php

namespace App\Enum;

class PaymentStatus
{
    const NEW = "New";
    const PAID = "PAID";
    const CANCELED = "CANCELED";
    const DELIVERED = "DELIVERED";
    const REFUNDED = "REFUNDED";
    const EXPIRED = "EXPIRED";
    const PARTIAL_REFUNDED = "PARTIAL_REFUNDED";
    const FAILED = "FAILED";
    const UNPAID = "UNPAID";
}
