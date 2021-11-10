<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

interface Newsletter
{
    public function subscribe(string $email, $list = null);
}
