<?php
    class User {
        var $userName;
        var $passWord;
        var $fullName;
        function User ($userName, $passWord, $fullName){
            $this->userName=$userName;
            $this->passWord=$passWord;
            $this->fullName=$fullName;
    }
    static function authentication ($userName, $pw){
        if ($userName == "nhacpham34@gmail.com" && $pw == "1234")
            return new User($userName,$pw, "Pham Nhac");
    }
}

?>