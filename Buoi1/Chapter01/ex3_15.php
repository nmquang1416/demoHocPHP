<?php
    $temp = "The date is ";
    echo $temp.date("l F jS Y", time());
    
    function longdate($timestamp) {
        $quang = "quang ";
        return $quang.date("l F jS Y",$timestamp);
    }
    echo "<br>";
    echo longdate(time());
?>
