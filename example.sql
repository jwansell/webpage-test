
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
    id       INTEGER AUTO_INCREMENT PRIMARY KEY,
   	user_id  INTEGER NOT NULL,
   	FOREIGN KEY(user_id) REFERENCES users(id),
--    	address_id INTEGER NOT NULL,
--    	FOREIGN KEY(address_id) references addresses(id),
   	order_time TIMESTAMP NOT NULL,
   	item VARCHAR (255) NOT NULL,
   	order_value VARCHAR (255) NOT NULL
);

CREATE TABLE products (
	id INTEGER AUTO_INCREMENT PRIMARY KEY,
	item VARCHAR(255) NOT NULL, 
	price VARCHAR(255) NOT NULL,
	stock VARCHAR(255) NOT NULL
	);

INSERT INTO orders (user_id, order_time, item, order_value)
VALUES
	('1',CURRENT_TIMESTAMP,'Test Item','£1.99'),
	('2',CURRENT_TIMESTAMP,'Ham Sandwich','£2.99');
	
INSERT INTO products (item, price, stock)
VALUES
	('Test Item','£3.99','5'),
	('Club Sandwich','£4.99','50');

DROP TABLE IF EXISTS addresses;
CREATE TABLE addresses (
	id INTEGER AUTO_INCREMENT PRIMARY KEY,
	user_id INTEGER NOT NULL,
	FOREIGN KEY(user_id) REFERENCES users(id),
	order_id INTEGER NOT NULL,
	FOREIGN KEY(order_id) REFERENCES orders(id),
	address varchar(255) NOT NULL,
	postcode varchar(255) NOT NULL,
	city varchar(255) NOT NULL,
	county varchar(255) NOT NULL
);

INSERT INTO addresses (user_id, order_id, address, postcode, city, county)
VALUES
	('1', '1','Test Street','TO12 TDE','Testville','Testshire');
	
INSERT INTO products (item, price, stock)
VALUES
	('BLT','£4.99','100');
	
DROP TABLE order_products;
CREATE TABLE order_products (
	id INTEGER AUTO_INCREMENT PRIMARY KEY,
    order_id INTEGER NOT NULL,
    FOREIGN KEY(order_id) REFERENCES orders(id),
    product_id INTEGER NOT NULL,

INSERT INTO order_products (order_id, product_id, quantity)
VALUES
	('1','1','1'),
	('2','2','1'),
	('3','3','4');

INSERT INTO orders (user_id, order_time, it
    FOREIGN KEY(product_id) REFERENCES products(id),
    quantity INTEGER NOT NULL
);em, order_value)
VALUES
	('3',CURRENT_TIMESTAMP,'Knuckle Sandwich','£7.99');
	
SELECT
    orders.user_id,
    orders.order_time,
    order_products.quantity,
    products.item,
    products.price
FROM
    orders
    INNER JOIN order_products ON order_products.order_id = orders.id
    INNER JOIN products ON products.id = product_id
ORDER BY
    order_products.quantity;
INSERT INTO orders (user_id, order_time, item, order_value)
VALUES
 	('3',CURRENT_TIMESTAMP,'Test Sandwich, Club Sandwich, BLT','£13.97');
INSERT INTO order_products (order_id, product_id, quantity) 
VALUES
	('4', '4', '6');