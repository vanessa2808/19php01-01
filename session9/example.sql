-- Cau 1:
SELECT * FROM products INNER JOIN categories ON products.categoryID = categories.categoryID
 WHERE categories.categoryName = 'Guitars' AND listPrice > 500
-- Cau 2: 
SELECT * FROM products INNER JOIN categories ON products.categoryID = categories.categoryID
 WHERE products.dateAdded LIKE '2014-07-__%' ORDER BY listPrice DESC
 -- cau 3
 SELECT * FROM products INNER JOIN categories ON products.categoryID = categories.categoryID 
 WHERE productName LIKE '%o%' AND categories.categoryName = 'Basses' ORDER BY productName DESC
 -- cau 4
SELECT * FROM products INNER JOIN orderitems ON products.productID = orderitems.productID 
INNER JOIN orders ON orderitems.orderID = orders.orderID
INNER JOIN customers ON customers.customerID = orders.customerID 
 WHERE customers.emailAddress LIKE "%@gmail.%"
-- cau 5:
SELECT * FROM products WHERE listPrice > 300 AND dateAdded LIKE '%2014%' ORDER BY listPrice DESC LIMIT 0, 4
-- cau 6:
SELECT * FROM addresses INNER JOIN orders ON addresses.customerID = orders.customerID
INNER JOIN orderitems ON orders.orderID = orderitems.orderID
INNER JOIN products ON products.productID = orderitems.productID
WHERE products.productName = 'Yamaha FG700S'
