USE testing;
CREATE TABLE sliderimg(id INT(5) NOT NULL AUTO_INCREMENT, imagen LONGBLOB, PRIMARY KEY(id));
CREATE TABLE sliderinfo(titulo VARCHAR(30), descripcion VARCHAR(200));
CREATE TABLE modalimg(imagen LONGBLOB);
CREATE TABLE logosimg(imagen LONGBLOB);
CREATE TABLE datoscontacto(id INT(5) NOT NULL AUTO_INCREMENT, 
nombresede VARCHAR(50), 
direccion VARCHAR(150), 
mapa VARCHAR(500), 
email1 VARCHAR(40), 
email2 VARCHAR(40), 
email3 VARCHAR(40), 
email4 VARCHAR(40), 
email5 VARCHAR(40), 
telefono1 VARCHAR(10), 
telefono2 VARCHAR(10), 
telefono3 VARCHAR(10), 
telefono4 VARCHAR(10), 
telefono5 VARCHAR(10), 
wspnum1 VARCHAR(10), 
wspnum2 VARCHAR(10), 
facebook VARCHAR(100), 
twitter VARCHAR(100), 
instagram VARCHAR(100), 
youtube VARCHAR(100), 
PRIMARY KEY(id));