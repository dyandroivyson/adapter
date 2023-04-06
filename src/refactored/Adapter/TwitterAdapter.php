<?php

namespace Adapter;

include_once "SocialMedia.php";
include_once "../refactored/lib/Twitter.php";

use lib\Twitter;

class TwitterAdapter implements SocialMedia
{
    public function publishMessage(string $message): void
    {
        $twitter = new Twitter();
        $twitter->tweet('secret-token', $message);
    }
}