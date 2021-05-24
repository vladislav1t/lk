<?php
session_start();

if ($_POST['newname'] && $_POST['newpass']) {
    $data = [$_POST['newname'], $_POST['newpass']];
    $file = 'data.csv';
    $fp = fopen($file, 'a+');

    $csv = array_map('str_getcsv', file($file));
    $i = 0;
    foreach ($csv as $value) {

       if (in_array($_POST['newname'], $value)) {
           var_dump($csv[$i]);
            exit();
        }
        $i++;
    }
exit('asd');
    if (is_resource($fp)) {
        fputcsv($fp, $data);
    }

    fclose($fp);

    exit('asdasd');
} else {

   exit('222222');
}
