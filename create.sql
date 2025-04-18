CREATE TABLE employee(
    id integer PRIMARY KEY,
    firstname varchar(20) NOT NULL,
    lastname varchar(30) NOT NULL,
    city varchar(20) NOT NULL,
    country varchar(50) NOT NULL,
    countrycode char(2) NOT NULL,
    birthdate char(10) NOT NULL
);
