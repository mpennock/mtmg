CREATE DATABASE ploop;
USE ploop;

DROP TABLE posts;
DROP TABLE users;

CREATE TABLE posts(
	post_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	date_time DATE,
    board varchar(30),
    post_title varchar(300),
	post_content varchar(5000),
    username varchar(100)
);

CREATE TABLE users (
user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
reg_date DATE,
username VARCHAR(100) NOT NULL,
password CHAR(128) NOT NULL);


SELECT * FROM posts;

SELECT * FROM users;

SELECT * FROM users WHERE user_id = 2;

INSERT INTO users (reg_date, username, password) VALUES ('2016-01-05', 'm', 'm');