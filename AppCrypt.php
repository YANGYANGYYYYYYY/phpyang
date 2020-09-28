<?php

/**
 * Created by PhpStorm.
 * User: liushuai
 * Date: 2019/4/11
 * Time: 14:17
 */
class AppCrypt {
    protected static $method = 'aes-128-cbc';
    protected static $aesKey = '5fd28e8b2d6c8678e9eb64e9bb48ecbd';

    public static function setKey($key)
    {
        self::$aesKey = $key;
    }

    /**
     * Desc: 加密
     * @param $data
     * @return string
     */
    public static function encrypt($data)
    {
        return base64_encode(openssl_encrypt($data, self::$method, substr(self::$aesKey, 0, 16), true, str_repeat("\0", 16)));
    }

    /**
     * Desc: 解密
     * @param $data
     * @return string
     */
    public static function decrypt($data)
    {
        return openssl_decrypt(base64_decode($data), self::$method, substr(self::$aesKey, 0, 16), true, str_repeat("\0", 16));
    }
}
$encData = "";
$decData = AppCrypt::decrypt($encData);
echo $decData . PHP_EOL;
