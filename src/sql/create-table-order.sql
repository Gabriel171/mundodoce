CREATE TABLE sale (
    id BIGINT(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT(11) NOT NULL,
    value DECIMAL(19, 2) NOT NULL,
    created_date DATETIME NOT NULL,
    INDEX INDEX_SALE_ID (id),

    CONSTRAINT FK_SALE_USER_ID
    FOREIGN KEY (user_id) REFERENCES cadastrofuncionario (id_funcionario)
);