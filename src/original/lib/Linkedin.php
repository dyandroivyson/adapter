<?php

declare(strict_types=1);

namespace lib;

class Linkedin
{
    public function publish(string $message): void
    {
        echo "{$message}, published on Linkedin.<br><br>";
    }
}