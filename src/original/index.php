<?php

include_once 'lib/Facebook.php';
include_once 'lib/Linkedin.php';
include_once 'lib/Twitter.php';

use lib\Facebook;
use lib\Linkedin;
use lib\Twitter;

$message = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

$facebook = new Facebook;
$facebook->post($message, 'Tester');

$linkedin = new Linkedin;
$linkedin->publish($message);

$twitter = new Twitter;
$twitter->tweet('secret-token', $message);