CREATE TABLE IcecreamManagers (
    icecreamManagerID   INT(11)      NOT NULL   AUTO_INCREMENT,
    emailAddress        VARCHAR(255) NOT NULL   UNIQUE,
    password            VARCHAR(64)  NOT NULL,
    pronouns            VARCHAR(60)  NOT NULL,
    firstName           VARCHAR(60)  NOT NULL,
    lastName            VARCHAR(60)  NOT NULL,
    DateTimeCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    DateTimeUpdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (icecreamManagerID)
);

INSERT INTO IcecreamManagers (emailAddress, password, pronouns, firstName, lastName)
VALUES ('jarias@icecreamshop.com', SHA2('Icecream123%', 256), 'She/Her', 'Jazzlinne', 'Arias')

INSERT INTO IcecreamManagers (emailAddress, password, pronouns, firstName, lastName)
VALUES ('bobman@icecreamshop.com', SHA2('burger456', 256), 'He/him', 'Bob', 'Man')

INSERT INTO IcecreamManagers (emailAddress, password, pronouns, firstName, lastName)
VALUES ('bloobert@icecreamshop.com', SHA2('oooooooo', 256), 'It/Its', 'Bloob', 'Bert')

SELECT * FROM IcecreamManagers