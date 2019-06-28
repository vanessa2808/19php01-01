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
 SELECT * FROM products INNER JOIN customers ON products.productID = customers.customerID 
 WHERE customers.emailAddress IS NOT NULL
-- cau 5:
SELECT * FROM products WHERE listPrice > 300 AND dateAdded LIKE '%2014%' ORDER BY listPrice DESC LIMIT 0, 4
-- cau 6:
SELECT * FROM addresses INNER JOIN products ON
 addresses.addressID = products.productID WHERE products.productName = "Yamaha FG700S"
