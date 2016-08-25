
<?php
$handle = fopen("inputfile.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        
                exec('bvbcoind');
                sleep(1);
                
    }

    fclose($handle);
}
?>
