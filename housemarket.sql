CREATE TABLE ci_sessions(
	id varchar(40) not null,
    ip_address varchar(45) not null,
    timestamp int(10) unsigned default 0 not null,
    data BLOB not null,
    
    CONSTRAINT PK_ci_sessions PRIMARY KEY(id),
    CONSTRAINT UQ_ci_sessions_timestamp UNIQUE (timestamp)
);
CREATE TABLE `user` (
  `id` INT NOT NULL AUTO_INCREMENT, 
  `name` varchar(60) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tel` varchar(11) DEFAULT NULL
)

CREATE TABLE `house` (
  `id` INT NOT NULL AUTO_INCREMENT, 
  `seller` int(11) NOT NULL,
  `zip` varchar(4) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `Rnum` int(11) NOT NULL,
  `comf` smallint(6) NOT NULL,
  `price` int(11) NOT NULL,
  `size` smallint(6) NOT NULL,
  `floors` smallint(6) NOT NULL,
   PRIMARY KEY (`id`));

)

CREATE TABLE `messages` (
  `sender` int(11) NOT NULL,
  `reciever` int(11) NOT NULL,
  `message` text NOT NULL,
  `sendTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `isReaded` binary(1) NOT NULL DEFAULT '0',
  FOREIGN KEY (`sender`) REFERENCES `user` (`id`),
  FOREIGN KEY (`reciever`) REFERENCES `user` (`id`)
)

 