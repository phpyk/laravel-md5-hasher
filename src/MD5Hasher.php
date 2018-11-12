<?php
namespace Phpyk\Hasher;
/**
 * Created by PhpStorm.
 * User: kk
 * Date: 2018/11/12
 * Time: 2:35 PM
 */
class MD5Hasher
{

    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt);
    }

    public function check($value,$hashValue,array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt) === $hashValue;
    }
}