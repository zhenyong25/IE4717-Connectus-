create table user {
    id int unsigned not null auto_increment primary key,
    email_address char(50) not null,
    password char(50) not null,
    retype_password char(50) not null,
    name char(50) not null,
    contact char(50) not null 
}; 