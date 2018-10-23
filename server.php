<?php

// echo "Hello from PHP server !<br/>";

exec("/usr/local/bin/node index.js sample_data1 sample_data2 2>&1", $out, $err);
var_dump($out);

?>