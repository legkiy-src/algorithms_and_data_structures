<?php

require_once __DIR__ . '/ArrayBubble.php';

$maxSize = 100;
$arrayBubble = new ArrayBubble();

$arrayBubble->insert(77);
$arrayBubble->insert(99);
$arrayBubble->insert(44);
$arrayBubble->insert(55);
$arrayBubble->insert(22);
$arrayBubble->insert(88);
$arrayBubble->insert(11);
$arrayBubble->insert(0);
$arrayBubble->insert(66);
$arrayBubble->insert(33);

$arrayBubble->display();

$arrayBubble->sort();

$arrayBubble->display();
