<?php

namespace Adapter;

include_once "SocialMedia.php";
include_once "../refactored/lib/Linkedin.php";

use lib\Linkedin;

class LinkedinAdapter implements SocialMedia
{
    public function publishMessage(string $message): void
    {
        $linkedin = new Linkedin();
        $linkedin->publish($message);
    }
}