create database test;
use test;

create table login(
id int not null auto_increment,
username varchar(70),
`password` varchar(100),
stored_time timestamp,
primary key(id)
);

