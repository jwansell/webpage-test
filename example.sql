
	-- remove existing tables before we create new ones
DROP TABLE IF EXISTS orders, users, contacts;

CREATE TABLE users
(
    id       INTEGER AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


-- FIXME: Here you need to define your own contacts table according to your contacts form
-- It is good practice to add a primary key column to your database typically these are in the form of an auto incrementing ID
CREATE TABLE contacts
(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR (255) NOT NULL,
    lname VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL UNIQUE,
    message TEXT 
);

INSERT INTO users (username, password)
VALUES
	('Admin', 'password'),
	('jwansell','donthackthis'),
	('testuser','testpass');

SELECT * FROM users;

SELECT * FROM users
WHERE username like 'A%'
AND password like 'p%';

INSERT INTO contacts (fname, lname, email, message)
VALUES
	('michael', 'sievenpiper', 'michael@sievenpiper@yourmeds.net', 'This is a great message'),
	('Joe', 'Ansell', 'joseph.ansell@yourmeds.net', 'I love messages');

SELECT * FROM contacts;

SELECT * FROM contacts
WHERE fname LIKE 'j%';


INSERT INTO contacts (fname, lname, email, message)
VALUES
	('Carter','Richards','CSrichards@realwebsite.co.uk','A sandwich is a food');
	
SELECT * FROM contacts;

DROP TABLE IF EXISTS orders;

CREATE TABLE orders
(
    id       INTEGER AUTO_INCREMENT,
   	user_id  INTEGER NOT NULL,
   	PRIMARY KEY (id),
   	FOREIGN KEY(user_id) REFERENCES users(id),
   	order_time TIMESTAMP NOT NULL,
   	quantity INTEGER 	 NOT NULL,
   	item VARCHAR (255) 	 NOT NULL,
   	order_value VARCHAR (255) NOT NULL
);