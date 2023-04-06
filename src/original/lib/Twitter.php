<?php

declare(strict_types=1);

namespace lib;

class Twitter
{
    public function tweet(string $token, string $message): void
    {
        echo "{$message}, on Twitter.<br><br>";
    }
}