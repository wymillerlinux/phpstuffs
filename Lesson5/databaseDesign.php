<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CIT 228 - Database Design</title>
  </head>
  <body>
    <p>EmployeeDetails: employeeID (PK), salespersonEmployee (PK), phoneEmployeeID (FK), addressEmployeeID (FK), email, startDate, salaried, wages</p>
    <p>EmployeePhone: phoneEmployeeID (PK), businessNumber, homeNumber, cellNumber, faxNumber</p>
    <p>EmployeeAddress: addressEmployeeID (PK), zip (FK)</p>
    <p>EmployeeZip: zip (PK), street, city, state, region</p>
    <p>CustomerDetails: customerID (PK), salespersonCust (FK), firstName, lastName, companyCustID (FK), phoneCustID (FK), addressCustID (FK), jobTitle, email, webPage</p><br>
    <p>CustomerPhone: phoneID (PK), businessNumber, homeNumber, cellNumber, faxNumber</p>
    <p>CustomerAddress: addressCustID (PK), zip (FK)</p>
    <p>CustomerZip: zip (PK), street, city, state, region</p>
    <p>CustomerCompany: companyCustID (PK), companyName, companyIndustry</p>
  </body>
</html>
