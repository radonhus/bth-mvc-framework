USE riax20;

DROP TABLE IF EXISTS books;

CREATE TABLE IF NOT EXISTS books
(
	isbn VARCHAR(40) NOT NULL,
	title VARCHAR(80) NOT NULL,
	author VARCHAR(50) NOT NULL,
	image_url VARCHAR(50) NOT NULL,

	PRIMARY KEY (isbn)
)
;


INSERT INTO books
    (isbn, title, author, image_url)
VALUES
	('1234', 'På motorcykel från Petrograd till Tiflis', 'Brusewitz, Per Emil', 'bildurl'),
	('9113003240', 'Uppdrag Fred', 'Bildt, Carl', 'bildurl'),
    ('9151820870', 'Dagligt liv i Wien på Mozarts och Schuberts tid', 'Berglund, Gunilla', 'bildurl')
;

SELECT * FROM books;