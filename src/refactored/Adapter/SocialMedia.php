<?php

namespace Adapter;

interface SocialMedia
{
    public function publishMessage(string $message): void;
}