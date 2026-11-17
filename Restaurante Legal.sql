CREATE TABLE pratos(
idPrato INT AUTO_INCREMENT PRIMARY KEY,
nomePrato VARCHAR(100) NOT NULL UNIQUE,
descricao VARCHAR(255),
preco DECIMAL(6,2) NOT NULL
)

SELECT * FROM pratos

INSERT INTO pratos
(nomePrato, descricao, preco)

VALUES 
('Strogonoff de Frango', 'Frango em pedaços com molho de strogonoff acompanhado por deliciosos champignos, arroz e batata frita', 34.99),
('Lasanha á Bolonhesa', 'Deliciosos folhas de massa produzida na casa com queijo, presunto e molho de tomate com carne moida', 46.99),
('Frango á Milanesa', 'Delicioso peito de frango à milanesa. Acompanha arroz, feijão e batata frita', 37.99),
('Filé à Mignon ao molho Madeira', 'Delicioso filé mignon ao molho madeira. Acompanha arroz e batata rústica', 87.99),
('Costela ao molho Barbecue', 'Costela de molho barbecue. Acompanha arroz e cebola à milanese', 59.99)

CREATE TABLE bebidas(
idBebida INT AUTO_INCREMENT PRIMARY KEY,
nomeBebida VARCHAR(50) NOT NULL,
volume VARCHAR(100) NOT NULL,
alcoolico BOOLEAN NOT NULL,
preco DECIMAL(6,2) NOT NULL
)

INSERT INTO bebidas
(nomeBebida, volume, alcoolico, preco)

VALUES
('Água com gás', '500ml', 0, 2.99),
('Coca-Cola','350ml', 0, 5.99),
('Suco de Laranja', '200ml', 0, 12.99),
('Vinho do Porto', '250ml', 1, 29.99),
('Caipirinha de Limão', '250ml', 1, 20.99)

SELECT *FROM bebidas

CREATE TABLE sobremesas(
idSobremesa INT AUTO_INCREMENT PRIMARY KEY,
nomeSobremesa VARCHAR(100) NOT NULL UNIQUE,
descricao VARCHAR(255),
preco DECIMAL(6,2) NOT NULL
)

INSERT INTO sobremesas
(nomeSobremesa, descricao, preco)

VALUES 
('Sorvete de Negresco','Um doce frio e saboroso em dias de extremo calor, sabor chocolate com pedaços de negresgo ', 15.99),
('Mousse de Morango','Um delicioso Mousse feito de Morangos muito deliciosos', 20.00),
('Bolo de chocolate', 'Uma fatia deliciosa e generosa de chocolate', 18.00);


