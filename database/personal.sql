CREATE TABLE personal ( 
    id_usuario  INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    numempleado INT (11) NOT NULL,
    rfc         VARCHAR (11) NOT NULL,
    nombre     VARCHAR (255) NOT NULL,
    apaterno    VARCHAR (255) NOT NULL,
    amaterno    VARCHAR (255) NOT NULL,
    curp        VARCHAR (255) NOT NULL,
    plaza       VARCHAR (255) NOT NULL,
    puesto      VARCHAR (255) NOT NULL,
    fechin      DATE NULL,
    telefono    VARCHAR (11) NOT NULL,
    estadocivil VARCHAR (255) NOT NULL,
    email       VARCHAR (255) NOT NULL,
    hijos       INT (2),
    fyh_creacion    DATETIME NULL,
    fyh_actualilzacion  DATETIME NULL,
    estado      VARCHAR(11)
)ENGINE=InnoDB;
INSERT INTO personal (numempleado,rfc,nombre,apaterno,amaterno,curp,plaza,puesto,fechin,telefono,estadocivil,email,hijos,fyh_creacion,estado)
VALUES ("9800238","GAYC731006","Cesar","Garcia","Yllescas","GAYC731006HMCRLS06","T06817","TECNICO","1998-02-16","5530836700","CASADO","cgarciay@cic.ipn.mx","0","2024-08-26 21:37:10","1");
  