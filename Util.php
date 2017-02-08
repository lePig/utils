<?php

class Util
{
    /**
    * 生成一个唯一标识GUID
    */
    public static function guid()
    {
        if (function_exists('com_create_guid')) {
            return com_create_guid();
        } else {
            mt_srand((double)microtime()*10000);
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);
            $uuid   = chr(123)
                .substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12)
                .chr(125);
            return $uuid;
        }
    }

    /**
     * 格式化输出友好的日期
     * @param int|string 可以接受时间戳或者字符串日期格式
     * @return String  3天前
     */
    public static function friendlyDateTime($time)
    {
        if (! is_numeric($time)) {
            $time = strtotime($time);
        }
        $t = time() - $time;
        $f = array(
            '31536000'=> '年',
            '2592000' => '个月',
            '604800'  => '星期',
            '86400'   => '天',
            '3600'    => '小时',
            '60'      => '分钟',
            '1'       => '秒'
        );
        foreach ($f as $k=>$v){        
            if (0 !=$c=floor($t/(int)$k)){
                return $c.$v.'前';
            }
        }
    }






    /*------------------------------------------*/
}
