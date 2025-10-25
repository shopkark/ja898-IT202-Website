CREATE TABLE Icecreams (
icecreamID               INT(11)        NOT NULL,
icecreamCode             VARCHAR(10)    NOT NULL  UNIQUE,
icecreamName             VARCHAR(255)   NOT NULL,
icecreamDescription      TEXT           NOT NULL,
icecreamFlavor           VARCHAR(255)   NOT NULL,
icecreamServingSize      VARCHAR(255)   NOT NULL,
icecreamTypeID           INT(11)        NOT NULL,
icecreamWholesalePrice   DECIMAL(10,2)  NOT NULL,
icecreamListPrice        DECIMAL(10,2)  NOT NULL,
DateTimeCreated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
DateTimeUpdated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY ( icecreamID )
);

INSERT INTO Icecreams
(icecreamID, icecreamCode, icecreamName, icecreamDescription, icecreamFlavor, icecreamServingSize, icecreamTypeID, icecreamWholesalePrice, icecreamListPrice)
VALUES
    (001, '01STR', 'Strawberry Gelato',     'Ripe, sun-sweetened strawberry gelato. Bursts with fresh fruity flavor in every spoonful.',      'Strawberry',   'Small',  01, 2.00, 4.75),
    (002, '02STR', 'Strawberry Gelato',     'Ripe, sun-sweetened strawberry gelato. Bursts with fresh fruity flavor in every spoonful.',      'Strawberry',   'Medium', 01, 2.00, 5.25),
    (003, '03HAZ', 'Hazelnut Gelato',       'Rich and velvety roasted hazelnut gelato. Melts beautifully on the tongue.',                     'Hazelnut',     'Small',  01, 2.00, 4.75),
    (004, '04HAZ', 'Hazelnut Gelato',       'Rich and velvety roasted hazelnut gelato. Melts beautifully on the tongue.',                     'Hazelnut',     'Medium', 01, 2.00, 5.25),
    (005, '05ALM', 'Almond Gelato',         'Delicately flavored toasted almond gelato. A subtly sweet and aromatic taste.',                  'Almond',       'Small',  01, 2.00, 4.75),
    (006, '06ALM', 'Almond Gelato',         'Delicately flavored toasted almond gelato. A subtly sweet and aromatic taste.',                  'Almond',       'Medium', 01, 2.00, 5.25),
    (007, '07RAS', 'Raspberry Sorbet',      'Bright, tangy, and refreshing raspberry sorbet. The pure essence of fresh berries.',             'Raspberry',    'Medium', 02, 1.00, 4.00),
    (008, '08RAS', 'Raspberry Sorbet',      'Bright, tangy, and refreshing raspberry sorbet. The pure essence of fresh berries.',             'Raspberry',    'Large',  02, 1.00, 5.00),
    (009, '09LEM', 'Lemon Sorbet',          'Zesty lemon sorbet. Both tart and sweet, the ultimate summer refresher.',                        'Lemon',        'Medium', 02, 1.00, 4.00),
    (010, '10LEM', 'Lemon Sorbet',          'Zesty lemon sorbet. Both tart and sweet, the ultimate summer refresher.',                        'Lemon',        'Large',  02, 1.00, 5.00),
    (011, '11WAT', 'Watermelon Sorbet',     'Refreshing watermelon sorbet. Juicy, light, and irresistible.',                                  'Watermelon',   'Medium', 02, 1.00, 4.50),
    (012, '12WAT', 'Watermelon Sorbet',     'Refreshing watermelon sorbet. Juicy, light, and irresistible.',                                  'Watermelon',   'Large',  02, 1.00, 5.50),
    (013, '13VAN', 'Vanilla Icecream',      'Smooth, creamy vanilla icecream. A timeless, rich, aromatic flavor.',                            'Vanilla',      'Small',  03, 1.00, 3.50),
    (014, '14VAN', 'Vanilla Icecream',      'Smooth, creamy vanilla icecream. A timeless, rich, aromatic flavor.',                            'Vanilla',      'Medium', 03, 1.00, 4.00),
    (015, '15CHO', 'Chocolate Icecream',    'Decadent and silky chocolate icecream. A luscious flavor that satisfies every craving.',         'Chocolate',    'Small',  03, 1.50, 4.50),
    (016, '16CHO', 'Chocolate Icecream',    'Decadent and silky chocolate icecream. A luscious flavor that satisfies every craving.',         'Chocolate',    'Medium', 03, 1.50, 5.00),
    (017, '17CDO', 'Cookie dough Icecream', 'Creamy vanilla icecream. Swirled with chunks of buttery cookie dough and rich chocolate chips.', 'Cookie dough', 'Small',  03, 1.50, 4.50),
    (018, '18CDO', 'Cookie dough Icecream', 'Creamy vanilla icecream. Swirled with chunks of buttery cookie dough and rich chocolate chips.', 'Cookie dough', 'Medium', 03, 1.50, 5.00);

SELECT * FROM Icecreams;

DELETE FROM Icecreams;