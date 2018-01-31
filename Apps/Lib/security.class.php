<?php

class security {

    function encryptionKeyGenerationFunc() {
        $key = base64_encode(openssl_random_pseudo_bytes(32));
        return $key;
    }
    
    function encrypKey(){
        $key = 'XHBh3YrJ3VwubADZ9mqh+OxpF6pBauEXKwCsi7bqjiY=';
        return $key;
    }
    function passwordSalt(){
        $salt = md5('kkennymoreEngineeringLimitedAiruleyemwangbonusiobaifokennethiguelaihooviasouthwestlocalgov');
        return $salt;
    }
//encryption and decryption funtions starts here-----------------------------------------------------------------------
    function kenProtectFunc($string) {
        $string = trim(strip_tags(addslashes($string)));
        return $string;
    }

//encrypt function----------------------------------------------------------------------------------------------------------
    function kenEncrypt($string, $key) {
        $encryption_key = base64_decode($key);
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($string, 'aes-256-cbc', $encryption_key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
    }

//decryption function----------------------------------------------------------------------------------------------------
    function kenDecrypt($string, $key) {
    $encryption_key = base64_decode($key);
    list($encrypted_data, $iv) = explode('::', base64_decode($string), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
    }

// Salt encryption function--------------------------------------------------------------------------------------
    function kenhashword($string, $salt) {
        $string = crypt($string, '$1$' . $salt . '$');
        return $string;
    }
    
    
    
    // email matching regular expression
    function EmailRegularExpression($email) {
        $match = preg_match('/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD', $email);
        return $match;
    }

    //Username matching regular expression
    function UsernameRegularExpression($username) {
        $match = preg_match('/^[a-z0-9_-]{3,20}$/', $username);
        return $match;
    }

    //password matching regular expression
    function PasswordRegularExpression($password) {
        $match = preg_match('((?=.*\d)(?=.*[a-z])(?=.*[@#$%/]).{8,20})', $password);
        return $match;
    }



}
