create table users (
	username	varchar(25) 	not null,
	password	varchar(250) 	not null,
	primary key (username)
	);

create table movies (
	id			int 			unsigned auto_increment not null,
	title		varchar(100) 	not null,
	description	varchar(500),
	releaseDate	date 			not null,
	minutes		smallint		unsigned not null,
	link		varchar(100),
	check		(minutes < 600),
	primary key (id)
);

create table reviews (
	username	varchar(25)		not null,
	movie_id	int				unsigned not null,
	rating		smallint		unsigned not null,
	check 		(rating <= 10),
	foreign key (username) 		references users(username)
								on delete cascade
								on update cascade,
	foreign key (movie_id) 		references movies(id)
								on delete cascade
								on update cascade,
	primary key	(username, movie_id)
);

create table actors (
	id 			int 			unsigned not null ,
	name		varchar(50) 	not null,
	birthday	date 			not null,
	primary key (id)
);

create table movie_actors (
	movie_id	int 			unsigned not null ,
	actor_id	int 			unsigned not null ,
	foreign key (movie_id)		references movies(id) 
								on delete cascade
								on update cascade,
	foreign key (actor_id)		references actors(id)
								on delete cascade
								on update cascade,
	primary key (movie_id, actor_id)
);

create table movie_genre (
	movie_id	int 			unsigned not null ,
	genre 		varchar(25) 	not null,
	foreign key (movie_id) 		references movies(id)
								on delete cascade
								on update cascade,
	foreign key (genre) 		references genres(genre)
								on delete cascade
								on update cascade,
	primary key (movie_id, genre)
);