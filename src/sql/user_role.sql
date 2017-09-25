CREATE TABLE user_role (
id BIGINT(20) NOT NULL AUTO_INCREMENT,
user_id int(11) NOT NULL,
role varchar(255) NOT NULL,
PRIMARY KEY(id),
CONSTRAINT FK_USER_ROLE_USER
FOREIGN KEY (user_id)
REFERENCES login_tcc (id_usuario)
ON DELETE NO ACTION
ON UPDATE NO ACTION);