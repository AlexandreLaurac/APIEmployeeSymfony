CREATE TABLE employee(
    id integer PRIMARY KEY,
    firstname varchar(20) NOT NULL,
    lastname varchar(30) NOT NULL,
    city varchar(20) NOT NULL,
    country varchar(50) NOT NULL,
    countrycode char(2) NOT NULL,
    birthdate char(10) NOT NULL
);

CREATE SEQUENCE employee_id_seq INCREMENT BY 1 MINVALUE 1 START 1;
ALTER TABLE employee ALTER COLUMN id SET DEFAULT nextval('employee_id_seq');
