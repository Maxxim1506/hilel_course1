CREATE TABLE users (
                       id INT(10) AUTO_INCREMENT PRIMARY KEY,
                       user_nm VARCHAR(50) UNIQUE NOT NULL,
                       email VARCHAR(255) UNIQUE NOT NULL,
                       password TEXT NOT NULL,
                       name VARCHAR(50) NOT NULL,
                       surname VARCHAR(75) NOT NULL
);