create TABLE empdata(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(50) NOT NULL,
    email varchar(100) NOT NULL,
    phone varchar(15) NOT NULL,
    city varchar(15) NOT NULL
);

INSERT INTO empdata(name, email, phone, city)
VALUES
('test', 'test123@gmail.com', '9123456789', 'Pune')