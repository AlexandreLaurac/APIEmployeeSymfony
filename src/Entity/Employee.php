<?php

namespace App\Entity ;


class Employee {

    // Properties and constructor
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string $city,
        public string $country,
        public string $countryCode,
        public string $birthDate
    ) {}

    // Static function to convert a standard object to an Employee one
    public static function objectToEmployee($object) {
        return new self(
            $object->firstName,
            $object->lastName,
            $object->city,
            $object->country,
            $object->countryCode,
            $object->birthDate
        ) ;
    }

    // Static function to convert json to an Employee object
    public static function jsonToEmployee($json) {
        $object = json_decode($json) ;
        return Employee::objectToEmployee($object) ;
    }

}

?>
