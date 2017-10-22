CREATE TABLE sale_item (
    id BIGINT(20) NOT NULL PRIMARY KEY,
    product_id INT(11) NOT NULL,
    quantity BIGINT(20) NOT NULL,
    value DECIMAL(19, 2) NOT NULL,
    sale_id BIGINT(20) NOT NULL,
    INDEX INDEX_SALE_ITEM_ID (id),

    CONSTRAINT FK_SALE_ITEM_SALE
    FOREIGN KEY (sale_id) REFERENCES sale(id),

    CONSTRAINT FK_SALE_ITEM_PRODUCT
    FOREIGN KEY (product_id) REFERENCES cadastroproduto (id_produto)
);