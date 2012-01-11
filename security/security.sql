drop database if exists `security`;
create database `security`;
grant all privileges on `security`.* to security@localhost identified by 'security';
use security;

create table users(
	id int unsigned not null auto_increment primary key,
	username varchar(18) not null,
	password char(36) not null,
	email varchar(117) not null
);

create table posts(
	id int unsigned not null auto_increment primary key,
	post text not null,
	user_id int unsigned not null,
	foreign key(user_id) references users(id)
);
