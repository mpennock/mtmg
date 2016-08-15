CREATE DATABASE ploop;
USE ploop;

DROP TABLE posts;

CREATE TABLE posts(
	date_time DATE,
    board varchar(30),
    post_title varchar(300),
	post_content varchar(5000)
);