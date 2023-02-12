<?php

echo 'Now: '. time();

date_default_timezone_set('UTC');
echo "May 1, 2023 is on a " . date("l", mktime(0, 0, 0, 5, 1, 2023));
echo date('c', mktime(1, 2, 3, 4, 5, 2023));

echo date('l \t\h\e js');