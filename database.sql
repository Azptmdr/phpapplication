CREATE TABLE IF NOT EXISTS RECAUDO (
    ID_RECAUDO INT AUTO_INCREMENT PRIMARY KEY,
    ID_CLIENTE_RECAUDO INT NOT NULL,
    ID_FACTURA_RECAUDO INT NOT NULL,
    VALOR_RECAUDO DECIMAL(10,2) NOT NULL,
    FECHA_RECAUDO DATE NOT NULL
);
