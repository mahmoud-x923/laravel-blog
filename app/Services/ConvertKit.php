<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;
use App\Services\Newsletter;

class ConvertKit implements Newsletter
{

    public function __construct(protected ApiClient $client) 
    {
    }
    public function subscribe(string $email, string $list = null)
    {
        // code to subscribe to a newsletter
    }
}
