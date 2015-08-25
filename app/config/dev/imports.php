<?php

foreach (glob(__DIR__.'/*.yml') as $file) {
    $loader->import($file);
}
