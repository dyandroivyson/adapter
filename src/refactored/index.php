<?php

include_once "Adapter/FacebookAdapter.php";
include_once "Adapter/LinkedinAdapter.php";
include_once "Adapter/TwitterAdapter.php";

use Adapter\FacebookAdapter;
use Adapter\LinkedinAdapter;
use Adapter\TwitterAdapter;

$message = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

$facebook = new FacebookAdapter;
$facebook->publishMessage($message);

$linkedin = new LinkedinAdapter;
$linkedin->publishMessage($message);

$twitter = new TwitterAdapter;
$twitter->publishMessage($message);
