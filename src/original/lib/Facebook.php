<?php

declare(strict_types=1);

namespace lib;

class Facebook
{
    public function post(string $message, string $author): void
    {
        echo "{$message}, post by {$author}, on Facebook.<br><br>";
    }
}