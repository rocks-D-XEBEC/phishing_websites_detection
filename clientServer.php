<?php
header("Access-Control-Allow-Origin: *");
$site=$_POST['url'];
$html = file_get_contents($site);
$bytes=file_put_contents('markup.txt', $html);

$safe_sites = 'safe_list.csv';
$unsafe_sites = 'unsafe_list.csv';
$safe_list = [];
$unsafe_list = [];

if (file_exists($safe_sites)) {
    $file = fopen($safe_sites, 'r');
    while (($line = fgetcsv($file)) !== false) {
        $safe_list =  array_merge($safe_list, $line);
    }
    fclose($file);
} else {
    echo "ERROR";
}

if (file_exists($unsafe_sites)) {
    $file = fopen($unsafe_sites, 'r');
    while (($line = fgetcsv($file)) !== false) {
        $unsafe_list = array_merge($unsafe_list, $line);
    }
    fclose($file);
} else {
    echo "ERROR";
}


function urlExistsInList($url, $list) {
    foreach ($list as $item) {
        if ($item === $url) {
            return true;
        }
    }
    return false;
}

if (urlExistsInList($site, $safe_list)) {
    echo "SAFE";
} elseif (urlExistsInList($site, $unsafe_list)) {
    echo "PHISHING";
} else {
	$python_path=exec("which python 2>&1 ");
	$decision=exec("C:\Python310\python.exe test.py $site 2>&1 ");
    // print_r($safe_list);
	echo $decision;
}
?>