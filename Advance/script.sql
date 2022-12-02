create table courier
(
    id           int auto_increment
        primary key,
    first_name   varchar(55) not null,
    second_name  varchar(55) not null,
    phone_number int         not null,
    constraint phone_number
        unique (phone_number)
);

create table customers
(
    id           int auto_increment
        primary key,
    first_name   varchar(55) not null,
    second_name  varchar(55) null,
    phone_number int         not null,
    constraint phone_number
        unique (phone_number)
);

create table food_menu
(
    id    int auto_increment
        primary key,
    name  varchar(50) not null,
    price float(5, 2) not null,
    constraint name
        unique (name)
);

create table hookah_menu
(
    id    int auto_increment
        primary key,
    name  varchar(50) not null,
    price float(5, 2) not null,
    constraint name
        unique (name)
);

create table orders
(
    id           int auto_increment
        primary key,
    id_customer  int                   null,
    id_food      int                   null,
    id_hookah    int                   null,
    order_time   timestamp             null,
    price        int                   not null,
    payment_type enum ('Cash', 'Card') null,
    constraint orders_ibfk_1
        foreign key (id_customer) references customers (id)
            on delete set null,
    constraint orders_ibfk_2
        foreign key (id_food) references food_menu (id)
            on delete set null,
    constraint orders_ibfk_3
        foreign key (id_hookah) references hookah_menu (id)
            on delete set null
);

create table delivery
(
    id           int auto_increment
        primary key,
    id_courier   int         null,
    id_order     int         null,
    order_adress varchar(55) not null,
    constraint delivery_ibfk_1
        foreign key (id_order) references orders (id)
            on delete set null,
    constraint delivery_ibfk_2
        foreign key (id_courier) references courier (id)
            on delete set null
);

create index id_courier
    on delivery (id_courier);

create index id_order
    on delivery (id_order);

create index id_customer
    on orders (id_customer);

create index id_food
    on orders (id_food);

create index id_hookah
    on orders (id_hookah);


