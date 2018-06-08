<?php
include 'util.php';
date_default_timezone_set('PRC');
class Test
{
    
    public function run()
    {
        $datetime = '2017-2-8 15:57:54';
        // $datetime = strtotime($datetime);
        // echo $datetime;
        echo Util::friendlyDateTime($datetime);
    }

    public function randomString($length)
    {
        var_dump(Util::randomString($length));
    }
    public function randomInt($length)
    {
        var_dump(Util::randomInt($length));
    }
}

// (new Test)->run();
(new Test)->randomString(16);
(new Test)->randomInt(4);