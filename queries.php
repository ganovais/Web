SELECT * FROM products;
SELECT name, price, description FROM products;
SELECT name, price, description FROM products WHERE id = 3;
SELECT name, price, description FROM products WHERE price > 15;
SELECT * FROM products WHERE price > 15 AND price < 20;
SELECT * FROM products WHERE price > 15 OR price < 20;

INSERT INTO products (name, price, description) VALUES ("Coca Cola", "08.00", "Coca Cola");