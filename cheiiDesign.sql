DROP DATABASE IF EXISTS devshop;
CREATE DATABASE devshop;
USE devshop;

DROP TABLE IF EXISTS projectAssignment;
DROP TABLE IF EXISTS employee;
DROP TABLE IF EXISTS project;


CREATE TABLE project (
  projectId INT UNSIGNED AUTO_INCREMENT NOT NULL,
  title VARCHAR(64) NOT NULL,
  startDate DATE NOT NULL,
  endDate DATE NOT NULL,
  PRIMARY KEY (projectId)
);


CREATE TABLE employee (
employeeId INT UNSIGNED AUTO_INCREMENT NOT NULL,
name CHAR(64) NOT NULL,
address1 VARCHAR(64) NOT NULL,
address2 VARCHAR(64) NOT NULL,
state CHAR(16) NOT NULL,
status CHAR(16) NOT NULL,
zip VARCHAR(16) NOT NULL,
email VARCHAR(64) NOT NULL,
salt CHAR(64) NOT NULL,
hash CHAR(128) NOT NULL,
phone VARCHAR(32) NOT NULL,
PRIMARY KEY (`employeeId`)
);

CREATE TABLE projectAssignment (
employAlot DECIMAL(6,2) NOT NULL,
projectId INT UNSIGNED NOT NULL,
employeeId INT UNSIGNED NOT NULL,
INDEX (projectId),
INDEX (employeeId),
FOREIGN KEY (projectId) REFERENCES project(projectId),
FOREIGN KEY (employeeId) REFERENCES employee(employeeId),
PRIMARY KEY (projectId, employeeId)
);