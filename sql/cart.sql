create table cart (
    id int unsigned not null auto_increment primary key,
    name char(50) not null,
    description char(50),
    quantity int unsigned not null,
    price float(4, 2)
); 