CREATE DATABASE IF NOT EXISTS php;

USE php;

CREATE TABLE IF NOT EXISTS student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL
);

INSERT INTO student (name, age) VALUES ('John Doe', 20);
INSERT INTO student (name, age) VALUES ('Jane Smith', 22);
