CREATE DATABASE olimpiadas;
USE olimpiadas;
CREATE TABLE `atletas`(`id_atleta`   int NOT NULL primary key AUTO_INCREMENT,
`atleta`    varchar(40),
`peso`    double(7,3),
`altura`    double(4,2),
`IMC`        double(6,2),
`nacionalidade`       varchar(40),
`modalidade`        varchar(40)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;