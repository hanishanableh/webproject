DROP DATABASE IF EXISTS shield;

CREATE DATABASE shield;

USE shield;

CREATE TABLE feedbacks(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(50),
    Email VARCHAR(50),    
    Message VARCHAR(200),
);
