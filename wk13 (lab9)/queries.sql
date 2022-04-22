CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    email varchar(255),
    firstname varchar(255),
    lastname varchar(255),
    active BOOLEAN,
    PRIMARY KEY (id)
);

INSERT INTO users (username, email, firstname, lastname, active) 
VALUES ("siber", "iam@simonbermudez.com", "Simon", "Bermudez", 1);

INSERT INTO users (username, email, firstname, lastname, active) 
VALUES ("max", "max@maxg.cloud", "Max", "Grossman", 1);

INSERT INTO users (username, email, firstname, lastname, active) 
VALUES ("Duncan", "duncan@wardlaw.com", "Duncan", "Wardlaw", 1);

INSERT INTO users (username, email, firstname, lastname, active) 
VALUES ("gar-fei", "gar@fei.com", "Gar-fei", "Jung", 1);

INSERT INTO users (username, email, firstname, lastname, active) 
VALUES ("Armen", "mino@mino.com", "Armen", "Levon", 1);

INSERT INTO users (username, email, firstname, lastname, active) 
VALUES ("ben", "ben@ben,com", "Ben", "Blanc", 0);