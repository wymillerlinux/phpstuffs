<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CIT 228 - MySQL Exercise</title>
  </head>
  <body>
    <h2>Building my database!</h2>
    <p>CREATE DATABASE CustomerEmployee;</p>
    <h2>Building tables!</h2>
    <p>CREATE TABLE EmployeeDetails (
employeeID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
salespersonEmployee varchar(75) NOT NULL,
phoneEmployeeID int NOT NULL,
addressEmployeeID int NOT NULL,
email varchar(150) NULL,
startDate date NOT NULL,
saleried bool NOT NULL,
wages int NOT NULL
);</p>
  <p>CREATE TABLE EmployeePhone (
phoneEmployeeID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
businessPhone int NOT NULL,
cellNumber int NOT NULL,
homeNumber int NOT NULL,
faxNumber int NULL
);</p>
  <p>CREATE TABLE EmployeeAddress (
addressEmployeeID int NOT NULL,
zip int NOT NULL
);</p>
  <p>CREATE TABLE EmployeeZip (
zip int NOT NULL AUTO_INCREMENT PRIMARY KEY,
street varchar(100) NOT NULL,
city varchar(30) NOT NULL,
state char(2) NOT NULL,
region varchar(20) NOT NULL
);</p>
<p>CREATE TABLE CustomerDetails (
customerID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
salespersonCust varchar(75) NOT NULL,
firstName varchar(30) NOT NULL,
lastName varchar(50) NOT NULL,
phoneCustID int NOT NULL,
addressCustID int NOT NULL,
email varchar(150) NULL,
jobTitle varchar(50) NOT NULL,
webPage varchar(100) NOT NULL
);</p>
<p>CREATE TABLE CustomerPhone (
phoneCustID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
businessPhone int NOT NULL,
cellNumber int NOT NULL,
homeNumber int NOT NULL,
faxNumber int NULL
);</p>
<p>CREATE TABLE CustomerAddress (
addressCustID int NOT NULL,
zip int NOT NULL
);</p>
<p>CREATE TABLE CustomerZip (
zip int NOT NULL AUTO_INCREMENT PRIMARY KEY,
street varchar(100) NOT NULL,
city varchar(30) NOT NULL,
state char(2) NOT NULL,
region varchar(20) NOT NULL
);</p>
  <h2>Adding records to tables!</h2>
  <p>INSERT INTO EmployeeDetails (employeeID, salespersonEmployee, phoneEmployeeID, addressEmployeeID, email, startDate, salaried, wages) VALUES (1001, 'Jim Smith', 2001, 3001, jim@employee.com, 01/01/2016, true, $50000);</p>
  <p>INSERT INTO CustomerDetails (employeeID, salespersonEmployee, phoneEmployeeID, addressEmployeeID, email, jobTitle, webPage) VALUES (4001, 'Mary Smith', 5001, 6001, 7001 'mary@customer.com' 'Accounant', 'marysmith.com');</p>
  <p>INSERT INTO EmployeePhone (phoneEmployeeID, businessNumber, homeNumber, cellNumber, faxNumber) VALUES (2001, 8889890001, 231231231, 2312312322, 231231323);</p>
  <p>INSERT INTO EmployeeAddress (addressEmployeeID, zip) VALUES (3001, 49686);</p>
  <p>INSERT INTO EmployeeZip (zip, street, city, state, region) VALUES (49686, 123 Apple Street, Traverse City, MI, USA);</p>
  <p>INSERT INTO CustomerPhone (phoneID, businessNumber, homeNumber, cellNumber, faxNumber) VALUES (6001, 8889899999, 231231432, 231231433, 231231431);</p>
  <p>INSERT INTO EmployeeAddress (addressEmployeeID, zip) VALUES (3001, 49686);</p>
  <p>INSERT INTO EmployeeZip (zip, street, city, state, region) VALUES (49686, 123 Apple Street, Traverse City, MI, USA);</p>
  <p>INSERT INTO CustomerCompany (companyCustomerID, companyName, companyIndustry) VALUES (5001, 'Smith Electronics', 'Electronics Dealer');</p>
  <h2>Getting my tables!</h2>
  <p>SELECT EmployeeDetails FROM EmployeeCustomer;</p>
  <p>SELECT EmployeePhone FROM EmployeeCustomer;</p>
  <p>SELECT EmployeeAddress FROM EmployeeCustomer;</p>
  <p>SELECT EmployeeZip FROM EmployeeCustomer;</p>
  <p>SELECT CustomerDetails FROM EmployeeCustomer;</p>
  <p>SELECT CustomerPhone FROM EmployeeCustomer;</p>
  <p>SELECT CustomerZip FROM EmployeeCustomer;</p>
  <p>SELECT CustomerCompany FROM EmployeeCustomer;</p>
  <h2>Joining!</h2>
  <p>SELECT phoneEmployeeID
FROM EmployeeDetails
INNER JOIN EmployeePhone ON EmployeeDetails.phoneEmployeeID = EmployeePhone.phoneEmployeeID; </p>
<h2>Order by select!</h2>
  <p>SELECT *
FROM EmployeeCustomer
ORDER BY ASC</p>
<h2>Where select!</h2>
<p>SELECT *
FROM CustomerDetails
WHERE lastName = 'Smith';</p>
<h2>Modify stuffs!</h2>
<p>ALTER TABLE EmployeeDetails
DROP COLUMN email;</p>
<p>ALTER TABLE EmployeeZip
DROP COLUMN street;</p>
<h2>SELECTing again!</h2>
<p> SELECT * FROM EmployeeDetails; </p>
<p> SELECT * FROM EmployeeZip; </p>
  </body>
</html>
