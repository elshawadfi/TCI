<?php

class ValidatePassword{
    const MIN_LENGTH = 6;
    const MAX_LENGTH = 12;
    public function validLength($password){
        $passLenght = strlen($password);
        return $passLenght >= self::MIN_LENGTH && $passLenght <= self::MAX_LENGTH;
    }
}