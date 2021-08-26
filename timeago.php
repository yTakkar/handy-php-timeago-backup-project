<?php

    function TimeAgo($time_ago) {
        $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
        $time  = time() - $time_ago;
        $time = $time + 4*60*60;
        $time = $time - 30*60;    // Play around with this line if time is forward or behind.

        switch($time):

            // seconds
            case $time <= 60;
            return ($time == 1) ? "Just now" : $time." secs";

            // minutes
            case $time >= 60 && $time < 3600;
            return (round($time/60) == 1) ? '1 min' : round($time/60).' mins';

            // hours
            case $time >= 3600 && $time < 86400;
            return (round($time/3600) == 1) ? '1 hour' : round($time/3600).' hours';

            // days
            case $time >= 86400 && $time < 604800;
            return (round($time/86400) == 1) ? '1 day' : round($time/86400).' days';

            // weeks
            case $time >= 604800 && $time < 2600640;
            return (round($time/604800) == 1) ? '1 week' : round($time/604800).' weeks';

            // months
            case $time >= 2600640 && $time < 31207680;
            return (round($time/2600640) == 1) ? '1 month' : round($time/2600640).' months';
            
            // years
            case $time >= 31207680;
            return (round($time/31207680) == 1) ? '1 year' : round($time/31207680).' years' ;

        endswitch;
    }

?>