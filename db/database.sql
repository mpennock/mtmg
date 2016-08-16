CREATE DATABASE ploop;
USE ploop;

DROP TABLE posts;
DROP TABLE users;

CREATE TABLE posts(
	post_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	date_time DATE,
    board varchar(30),
    post_title varchar(300),
	post_content varchar(5000)
);

CREATE TABLE users (
user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
reg_date DATE,
username VARCHAR(100) NOT NULL,
password CHAR(128) NOT NULL);

INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'music', 'greatest albums of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'games', 'greatest games of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');
INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('2014-01-05', 'movies', 'greatest movies of all time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis porttitor ante. Aenean non sollicitudin dolor. Sed auctor arcu eget. ');

SELECT * FROM posts;

SELECT * FROM users;

INSERT INTO users (reg_date, username, password) VALUES ('2016-01-05', 'm', 'm');