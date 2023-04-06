<?php

namespace Adapter;

include_once "SocialMedia.php";
include_once "../refactored/lib/Facebook.php";

use lib\Facebook;

class FacebookAdapter implements SocialMedia
{
    public function publishMessage(string $message): void
    {
        $facebook = new Facebook();
        $facebook->post($message, 'Tester');
    }
}