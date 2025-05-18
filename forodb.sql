CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cedula VARCHAR(20),
    nombres VARCHAR(100),
    correo VARCHAR(100) UNIQUE,
    cargo VARCHAR(50),
    password VARCHAR(255)
);
