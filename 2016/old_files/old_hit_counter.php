<?php
function get_ip_address(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $ip){
                $ip = trim($ip); // just to be safe

                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                    return $ip;
                }
            }
        }
    }
}
$mysqli=mysqli_connect("localhost", "wac", "CEAf3RSP6ChvQrTy", "wac");
$sql="INSERT INTO hits (ip, date, script) VALUES (\"".get_ip_address()."\", ".time().", \"".$_SERVER["PHP_SELF"]."\");";
@mysqli_query($mysqli, $sql);
?>