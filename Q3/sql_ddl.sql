CREATE DATABASE bd_cricket;
USE bd_cricket;

CREATE TABLE match_performance(
    Id INT PRIMARY KEY,
    PlayerName VARCHAR(50),
    Team VARCHAR(20),
    Venue VARCHAR(30),
    Runs INT,
    Balls INT
);

INSERT INTO match_performance VALUES
(1,"Shnto","DHK","Mirpur",112,98),
(2,"Shnto","DHK","Sylhet",45,52),
(3,"Litton","KHL","Sylhet",88,70),
(4,"Litton","KHL","Mirpur",67,60),
(5,"Miraz","CTG","Khulna",30,41),
(6,"Miraz","CTG","Khulna",52,44)