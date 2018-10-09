USE testdb;
CREATE TABLE id (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    dateAdded DATETIME,
    dateModified DATETIME,
    fName VARCHAR(75),
    lName VARCHAR(75)
);

CREATE TABLE address (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    masterId INT NOT NULL,
    dateAdded DATETIME,
    dateModified DATETIME,
    address VARCHAR(255),
    city VARCHAR(30),
    state CHAR(2),
    zipCode VARCHAR(10),
    type ENUM ('home', 'work', 'other')
);

CREATE TABLE telephone (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    masterId INT NOT NULL,
    dateAdded DATETIME,
    dateModified DATETIME,
    telNumber VARCHAR (25),
    type ENUM ('home', 'cell', 'work', 'other')
);
CREATE TABLE fax (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    masterId INT NOT NULL,
    dateAdded DATETIME,
    dateModified DATETIME,
    faxNumber VARCHAR (25),
    type ENUM ('home', 'work', 'other')
);
CREATE TABLE email (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    masterId INT NOT NULL,
    dateAdded DATETIME,
    dateModified DATETIME,
    email VARCHAR (150),
    type ENUM ('home', 'work', 'other')
);

CREATE TABLE notes (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    masterId INT NOT NULL UNIQUE,
    dateAdded DATETIME,
    dateModified DATETIME,
    note TEXT
);