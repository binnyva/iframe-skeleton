<?php
/// This file is here for backward compactability. Plan for this to go away.
use iframe\App;
require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/includes/backward-compatible.php';

$app = new App;
setupBackwardCompatibility();
