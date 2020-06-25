CREATE DATABASE DATA;
CREATE TABLE users(
    id smallint AUTO_INCREMENT,
    fullname VARCHAR(32) NOT NULL,
    email VARCHAR(32) NOT NULL,
    username VARCHAR(32) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
    );