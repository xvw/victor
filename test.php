<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h1>Data</h1>";

if (!empty($_GET['data'])) {
    if(sha1($_GET['data']) == '88fa846e5f8aa198848be76e1abdcb7d7a42d292') {
        phpinfo();
    } else {
        echo "nothing here";
    }
}