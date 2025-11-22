-- Jazzlinne Arias 10/24 IT202-001 Phase 2 ja898@njit.edu

CREATE TABLE IcecreamTypes (
icecreamTypeID      INT(11)        NOT NULL,
icecreamTypeCode    VARCHAR(255)   NOT NULL   UNIQUE,
icecreamTypeName    VARCHAR(255)   NOT NULL,
icecreamTypeMachine VarChar(225)   NOT NULL,
DateTimeCreated   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
DateTimeUpdated   TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY ( icecreamTypeID )
);

INSERT INTO IcecreamTypes
(icecreamTypeID, icecreamTypeCode, icecreamTypeName, icecreamTypeMachine)
VALUES
    (01, '1GEL', 'Gelato', 'Batch freezer'),
    (02, '2SOR', 'Sorbet', 'Sorbet maker'),
    (03, '3SSE', 'Soft-serve', 'Softy machine');

SELECT * FROM IcecreamTypes;
DELETE FROM IcecreamTypes WHERE `icecreamTypeID` = 100;

DESCRIBE IcecreamTypes