
CREATE TABLE usuarios ( 
    id_usuario  INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    nombres     VARCHAR (255) NOT NULL,
    cargo       VARCHAR (255) NOT NULL,
    email       VARCHAR (255) NOT NULL UNIQUE KEY,
    password    TEXT NOT NULL,

    fyh_creacion    DATETIME NULL,
    fyh_actualilzacion  DATETIME NULL,
    estado      VARCHAR(11)
)ENGINE=InnoDB;
INSERT INTO usuarios (nombres,cargo,email,password,fyh_creacion,estado)
VALUES ("Cesar Garcia Yllescas","ADMINISTRADOR","admin@admin.com","$2y$10$TmNNnk6vNyRjCpPVtFFCSOmQylDztQFq2qIJHHHki99tUXo/YZiVS","2024-08-19 21:59:10","1");
 