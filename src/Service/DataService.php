<?php

namespace App\Service ;
use App\Entity\Employee ;


class DataService {

    public function getEmployees() {
        $employeesArray = json_decode($this->employees) ;
        $employees = array() ;
        foreach($employeesArray as $object) {
            $employees[] = Employee::objectToEmployee($object) ;
        }
        return $employees ;
    }

    // Hard coded json data
    private $employees = <<<JSON
    [
        {
            "firstName": "Courtnay",
            "lastName": "Mitzi",
            "city": "Tbilisi",
            "country": "Senegal",
            "countryCode": "VI",
            "birthDate": "2004-09-18"
        },
        {
            "firstName": "Yvonne",
            "lastName": "Blisse",
            "city": "Belfast",
            "country": "Saint Helena",
            "countryCode": "NO",
            "birthDate": "2006-11-18"
        },
        {
            "firstName": "Arabel",
            "lastName": "Dyche",
            "city": "Niamey",
            "country": "Cayman Islands",
            "countryCode": "SY",
            "birthDate": "1998-03-29"
        },
        {
            "firstName": "Fidelia",
            "lastName": "Germann",
            "city": "Daegu",
            "country": "Montserrat",
            "countryCode": "EE",
            "birthDate": "1999-08-21"
        },
        {
            "firstName": "Kara-Lynn",
            "lastName": "Tristram",
            "city": "Reykjavík",
            "country": "Djibouti",
            "countryCode": "AW",
            "birthDate": "1975-04-23"
        },
        {
            "firstName": "Caressa",
            "lastName": "Blisse",
            "city": "Yokohama",
            "country": "Cayman Islands",
            "countryCode": "PN",
            "birthDate": "1973-11-07"
        },
        {
            "firstName": "Philis",
            "lastName": "Amand",
            "city": "Port Hedland",
            "country": "Anguilla",
            "countryCode": "PE",
            "birthDate": "1972-05-08"
        },
        {
            "firstName": "Kial",
            "lastName": "Karylin",
            "city": "Houston",
            "country": "Angola",
            "countryCode": "SD",
            "birthDate": "1980-05-02"
        },
        {
            "firstName": "Korrie",
            "lastName": "Donell",
            "city": "Medan",
            "country": "Iraq",
            "countryCode": "PG",
            "birthDate": "1970-09-24"
        },
        {
            "firstName": "Rosanne",
            "lastName": "Shields",
            "city": "Raleigh",
            "country": "Togo",
            "countryCode": "SY",
            "birthDate": "2001-10-21"
        },
        {
            "firstName": "Dede",
            "lastName": "Berard",
            "city": "Toronto",
            "country": "Japan",
            "countryCode": "IS",
            "birthDate": "1997-07-28"
        },
        {
            "firstName": "Margarette",
            "lastName": "Wattenberg",
            "city": "Baku",
            "country": "Tokelau",
            "countryCode": "MY",
            "birthDate": "1995-10-11"
        },
        {
            "firstName": "Lucy",
            "lastName": "Hedve",
            "city": "Ankara",
            "country": "Gabon",
            "countryCode": "VI",
            "birthDate": "1999-11-16"
        },
        {
            "firstName": "Felice",
            "lastName": "Sherrie",
            "city": "Nizhny Novgorod",
            "country": "Peru",
            "countryCode": "CH",
            "birthDate": "2000-10-18"
        },
        {
            "firstName": "Angelique",
            "lastName": "Mayeda",
            "city": "Ürümqi",
            "country": "Senegal",
            "countryCode": "QA",
            "birthDate": "1970-10-21"
        },
        {
            "firstName": "Lindie",
            "lastName": "Ethban",
            "city": "Dar es Salaam",
            "country": "Armenia",
            "countryCode": "JP",
            "birthDate": "2017-06-04"
        },
        {
            "firstName": "Alejandra",
            "lastName": "Read",
            "city": "Dushanbe",
            "country": "Montserrat",
            "countryCode": "SO",
            "birthDate": "1996-10-24"
        },
        {
            "firstName": "Jordan",
            "lastName": "Sacken",
            "city": "Lviv",
            "country": "Eritrea",
            "countryCode": "NU",
            "birthDate": "1970-10-16"
        },
        {
            "firstName": "Maridel",
            "lastName": "McCutcheon",
            "city": "Odessa",
            "country": "Lao People\"S Democratic Republic",
            "countryCode": "BW",
            "birthDate": "1980-11-23"
        },
        {
            "firstName": "Blinni",
            "lastName": "Reinke",
            "city": "Cannes",
            "country": "Saint Lucia",
            "countryCode": "CH",
            "birthDate": "2018-07-27"
        },
        {
            "firstName": "Ana",
            "lastName": "Guildroy",
            "city": "Philadelphia",
            "country": "Tonga",
            "countryCode": "SB",
            "birthDate": "2002-02-17"
        },
        {
            "firstName": "Consuela",
            "lastName": "Saree",
            "city": "Road Town",
            "country": "Nauru",
            "countryCode": "PL",
            "birthDate": "2019-06-04"
        },
        {
            "firstName": "Carmela",
            "lastName": "Fredi",
            "city": "Avarua",
            "country": "Malaysia",
            "countryCode": "FI",
            "birthDate": "2005-06-17"
        },
        {
            "firstName": "Emelina",
            "lastName": "Fiester",
            "city": "Padang",
            "country": "Saint Lucia",
            "countryCode": "ET",
            "birthDate": "2014-06-04"
        },
        {
            "firstName": "Chastity",
            "lastName": "Jerald",
            "city": "Castries",
            "country": "Guinea",
            "countryCode": "IL",
            "birthDate": "2013-02-08"
        },
        {
            "firstName": "Maridel",
            "lastName": "Giule",
            "city": "Shillong",
            "country": "Azerbaijan",
            "countryCode": "BN",
            "birthDate": "2005-06-14"
        },
        {
            "firstName": "Alameda",
            "lastName": "Salvidor",
            "city": "Hong Kong",
            "country": "Hungary",
            "countryCode": "VN",
            "birthDate": "2014-12-06"
        },
        {
            "firstName": "Gisela",
            "lastName": "Ingra",
            "city": "Ilhéus",
            "country": "American Samoa",
            "countryCode": "HM",
            "birthDate": "2000-06-29"
        },
        {
            "firstName": "Shel",
            "lastName": "Brian",
            "city": "Ulan Bator",
            "country": "Greece",
            "countryCode": "IS",
            "birthDate": "2003-06-01"
        },
        {
            "firstName": "Lesly",
            "lastName": "Creamer",
            "city": "Guatemala City",
            "country": "Czech Republic",
            "countryCode": "DO",
            "birthDate": "1984-03-31"
        },
        {
            "firstName": "Fina",
            "lastName": "Letsou",
            "city": "N'Djamena",
            "country": "El Salvador",
            "countryCode": "MW",
            "birthDate": "2014-12-31"
        },
        {
            "firstName": "Esmeralda",
            "lastName": "Candy",
            "city": "Kharkiv",
            "country": "Western Sahara",
            "countryCode": "EG",
            "birthDate": "2014-10-22"
        },
        {
            "firstName": "Talya",
            "lastName": "Yorick",
            "city": "Kandahar",
            "country": "Suriname",
            "countryCode": "TO",
            "birthDate": "1995-06-13"
        },
        {
            "firstName": "Shaylyn",
            "lastName": "Chem",
            "city": "Jersey City",
            "country": "Monaco",
            "countryCode": "MH",
            "birthDate": "1991-12-11"
        },
        {
            "firstName": "Sindee",
            "lastName": "Madaih",
            "city": "Nouakchott",
            "country": "New Zealand",
            "countryCode": "ST",
            "birthDate": "1983-06-28"
        },
        {
            "firstName": "Marcelline",
            "lastName": "Zamora",
            "city": "Batticaloa",
            "country": "Macedonia, The Former Yugoslav Republic of",
            "countryCode": "DJ",
            "birthDate": "2019-02-24"
        },
        {
            "firstName": "Sallie",
            "lastName": "Zamora",
            "city": "Surat Thani",
            "country": "Bahamas",
            "countryCode": "AR",
            "birthDate": "2002-03-28"
        },
        {
            "firstName": "Jobi",
            "lastName": "Guthrie",
            "city": "Kuching",
            "country": "Norfolk Island",
            "countryCode": "IR",
            "birthDate": "2013-06-20"
        },
        {
            "firstName": "Bernardine",
            "lastName": "Peti",
            "city": "Dibrugarh",
            "country": "Nepal",
            "countryCode": "TG",
            "birthDate": "1982-06-12"
        },
        {
            "firstName": "Mariele",
            "lastName": "Dex",
            "city": "Vancouver",
            "country": "Cayman Islands",
            "countryCode": "KY",
            "birthDate": "2009-07-22"
        }
    ]
    JSON;
    }

?>