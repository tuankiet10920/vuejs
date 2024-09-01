create database backend_vuejs;
use backend_vuejs;
-- drop database backend_vuejs;
create table product (
	id int auto_increment primary key,
    name varchar(255),
    image varchar(255),
    price int,
    qty int
);

insert into product values
(null, 'Product 1', 'product-1.webp', 20000, 1),
(null, 'Product 2', 'product-2.webp', 20000, 2),
(null, 'Product 3', 'product-3.webp', 20000, 3),
(null, 'Product 4', 'product-4.webp', 20000, 4),
(null, 'Product 5', 'product-5.webp', 20000, 5);
select * from product;