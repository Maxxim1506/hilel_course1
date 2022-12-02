-- auto-generated definition
create table test_table
(
    id           int auto_increment
        primary key,
    first_name   varchar(55) not null,
    second_name  varchar(55) null,
    phone_number int         not null,
    constraint phone_number
        unique (phone_number)
);
DROP TABLE test_table;

ALTER TABLE courier RENAME COLUMN second_name TO surname;

INSERT INTO customers (first_name, second_name, phone_number)
VALUES ('Maxan', 'Baydan', '123456');

INSERT INTO customers (first_name, second_name, phone_number)
VALUES ('Alex', 'Alex', '1234125');

INSERT INTO customers (first_name, second_name, phone_number)
VALUES ('Nick', 'Nick', '333333');

INSERT INTO courier (first_name, surname, phone_number)
VALUES ('Vasya', 'Vasya', '1337');

INSERT INTO courier (first_name, surname, phone_number)
VALUES ('Lexa', 'Lexa', '1234123');

INSERT INTO courier (first_name, surname, phone_number)
VALUES ('Dima', 'Dima', '13371337');

INSERT INTO food_menu (name, price)
VALUES ('Borsch', '200');

INSERT INTO food_menu (name, price)
VALUES ('Pasta', '250');

INSERT INTO food_menu (name, price)
VALUES ('Pizza', '300');

INSERT INTO hookah_menu (name, price)
VALUES ('Citrus', '300');

INSERT INTO hookah_menu (name, price)
VALUES ('Berries', '300');

INSERT INTO hookah_menu (name, price)
VALUES ('Mint', '200');

ALTER TABLE orders DROP COLUMN price;

INSERT INTO orders (id_customer, id_food, id_hookah, order_time, payment_type)
VALUES ('1', '2', '2', '2022-12-01 00:00:00', 'Cash');

INSERT INTO orders (id_customer, id_food, id_hookah, order_time, payment_type)
VALUES ('2', '1', '3', '2022-12-01 00:00:00', 'Card');

INSERT INTO orders (id_customer, id_food, id_hookah, order_time, payment_type)
VALUES ('3', '2', '1', '2022-12-01 00:00:00', 'Cash');

INSERT INTO delivery (id_courier, id_order, order_adress)
VALUES ('1', '2', 'Shevchenko 32');

INSERT INTO delivery (id_courier, id_order, order_adress)
VALUES ('2', '1', 'Hmelnytskoho 12');

INSERT INTO delivery (id_courier, id_order, order_adress)
VALUES ('3', '3', 'Dovzhenko 50');

UPDATE courier SET first_name = 'Maxan', surname = 'Bandera', phone_number = '121212' WHERE id = 1;

DELETE FROM delivery WHERE id = 3;

ALTER TABLE food_menu ADD disount INT;

# имя заказчика, адрес, номер телефона, цена заказа
SELECT c.first_name, c.second_name, c.phone_number, d.order_adress, fm.price as food_price, hm.price as hookah_price FROM customers c INNER JOIN orders o ON c.id = o.id_customer INNER JOIN delivery d ON o.id = d.id_order INNER JOIN food_menu fm ON o.id_food = fm.id INNER JOIN hookah_menu hm ON o.id_hookah = hm.id WHERE c.id = 3;

# время заказа, тип оплаты, название кальяна, название еды, цена кальяна, цена еды
SELECT o.order_time, o.payment_type, fm.name, fm.price, hm.name, hm.price FROM orders o INNER JOIN food_menu fm ON o.id = fm.id INNER JOIN hookah_menu hm ON o.id_hookah = hm.id;

SELECT first_name, surname FROM courier;