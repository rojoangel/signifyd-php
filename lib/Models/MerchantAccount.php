<?php

namespace Signifyd\Models;

use Signifyd\Core\SignifydModel;

class MerchantAccount extends SignifydModel
{
    public $active;
    public $customerContactOptOut;
    public $merchantEmail;
    public $merchantName;
    public $planType;
    public $merchantWebsite;

    public function __construct()
    {
    }
}
