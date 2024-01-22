<?php
    function longdate($timestamp) {
        $temp = date ("l F jS Y", $timestamp);
        return " the date is $temp";
    }
    echo longdate(time());
?>