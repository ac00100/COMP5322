drop database cms;

create database cms;

use cms;

-- create cases table
create table cases (
    case_id	int primary key auto_increment,
	name		varchar(50) not null,
	created		date not null,
	status		char(1) not null,
	ref_no		varchar(8),
	description	varchar(500),
	user_id		int
);


-- add case sample records
insert into cases (name, created, status, ref_no, description, user_id)
values ("Financial Case", "2017-12-15", "O", "88883333", "A wonderful serenity has taken possession of my entire", 2);

insert into cases (name, created, status, ref_no, description, user_id)
values ("Investigation Case", "2017-11-2", "O", "77773333", "soul, like these sweet mornings of spring which I enjoy", 3);

insert into cases (name, created, status, ref_no, description, user_id)
values ("Test Case", "2017-10-3", "C", "66663333", "with my whole heart. I am alone, and feel the charm of", 4);

insert into cases (name, created, status, ref_no, description, user_id)
values ("Publish Case", "2017-12-1", "O", "55553333", "existence in this spot, which was created for the bliss of", 5);

insert into cases (name, created, status, ref_no, description, user_id)
values ("Study Case", "2017-11-2", "C", "44443333", "souls like mine. I am so happy, my dear friend, so", 5);


-- for case management system
use cms;

drop table users;

create table users (
	user_id		int primary key auto_increment,
	username	varchar(50) not null,
	password	varchar(50) not null,
	type		char(1) not null,
	dob			date,
	gender		char(1),
	tel_no		varchar(8),
	email		varchar(100),
	photo		varchar(100)
);

-- add user sample records
insert into users (username, password, type, dob, gender, tel_no, email, photo)
values ("Candy", "1234", "A", "1980-12-15", "M", "88883333", "candy@abc.com", "face1.png");

insert into users (username, password, type, dob, gender, tel_no, email, photo)
values ("Peter", "1111", "U", "1981-11-2", "M", "77773333", "peter@abc.com", "face2.png");

insert into users (username, password, type, dob, gender, tel_no, email, photo)
values ("Sam", "1111", "U", "1982-10-3", "M", "66663333", "sam@abc.com", "face3.png");

insert into users (username, password, type, dob, gender, tel_no, email, photo)
values ("John", "1111", "U", "1979-12-1", "M", "55553333", "john@abc.com", "face4.png");

insert into users (username, password, type, dob, gender, tel_no, email, photo)
values ("Mary", "1111", "U", "1979-11-2", "F", "44443333", "sammy@abc.com", "face5.png");


use cms;
show tables;

-- for case management system
select * from cases;

-- for user management system
select * from users;

-- query the tables;
select *
from cases c
left join users u on u.user_id = c.user_id;
