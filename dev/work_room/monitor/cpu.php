<?php
//php-cpu-monitor was developed by Steve Stone - zyk0tik@gmail.com
//If you find this useful then please share it about to people who you think may also find use for it.
//This program comes with absolutely no warranty and under no license. 
//If you think you can contribute to the codebase then please contact me!


//Checks to see if it's been passed a time value to check CPU usage.
if(isset ($_GET['cpu'])){
    //Sets time value.
    $speed = $_GET['cpu'];
    //Sets variable with current CPU information and then turns it into an array seperating each word.
    $prevVal = shell_exec("cat /proc/stat");
    $prevArr = explode(' ',trim($prevVal));
    //Gets some values from the array and stores them.
    $prevTotal = $prevArr[2] + $prevArr[3] + $prevArr[4] + $prevArr[5];
    $prevIdle = $prevArr[5];
    //Wait a period of time until taking the readings again to compare with previous readings.
    usleep($speed * 1000000);
    //Does the same as before.
    $val = shell_exec("cat /proc/stat");
    $arr = explode(' ',trim($val));
    //Same as before.
    $total = $arr[2] + $arr[3] + $arr[4] + $arr[5];
    $idle = $arr[5];
    //Does some calculations now to work out what percentage of time the CPU has been in use over the given time period.
    $intervalTotal = intval($total - $prevTotal);
    //Does a few more calculations and outputs total CPU usage as an integer.
    echo intval(100 * (($intervalTotal - ($idle - $prevIdle)) / $intervalTotal));
}else{
    //Gets the amount of free memory on the host system and outputs as an integer.
    $output = shell_exec("free | grep Mem | awk '{print $3/$2 * 100.0}'");
    echo intval($output);
}
?>
