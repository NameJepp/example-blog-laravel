<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class ConvertKitNewsletter
{
    public function __construct(protected ApiClient $client)
    {
        //
    }

    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.convertkit.lists.subscribers');

        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed',
            ]);
    }
}
