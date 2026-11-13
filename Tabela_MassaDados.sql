CREATE TABLE
    pratos (
        idPrato INT AUTO_INCREMENT PRIMARY KEY,
        nomePrato VARCHAR(100) NOT NULL UNIQUE,
        descricao VARCHAR(255),
        preco numeric(6, 2) NOT NULL
    );

SELECT
    *
FROM
    pratos
INSERT INTO
    pratos (nomePrato, descricao, preco)
VALUES
    (
        'Strogonoff de frango',
        'Frango em pedaços ao molho de strogonoff acompanhado por deliciosos champignons',
        34.99
    ),
    (
        'Lasanha a Bolonhesa',
        'Deliciosas folhas de massa produzida na casa com queijo, presunto e molho de tomate com carne moída',
        46.99
    ),
    (
        'Frango à Milanesa',
        'Delicioso peito de frango à milanesa, acompanha arroz, feijão e batat fritas',
        37.99
    ),
    (
        'Filé Mignon ao Molho Madeira',
        'Filé Mignon ao molho madeira. Acompanha arroz e batat rústica',
        87.99
    ),
    (
        'Costela ao molho barbecue',
        'Costela ao molho barbecue. Acompanha arroz e cebola à milanesa',
        59.99
    );
    
    CREATE TABLE
    bebida (
        idBebida INT AUTO_INCREMENT PRIMARY KEY,
        nomeBebida VARCHAR(100) NOT NULL UNIQUE,
        volume VARCHAR (5) NOT NULL,
        alcoolico BOOLEAN,
        preco numeric(6, 2) NOT NULL
    );

SELECT
    *
FROM
    bebida
INSERT INTO
    bebida (nomeBebida, volume, alcoolico, preco)
VALUES
    (
        'Strogonoff de frango',
        'Frango em pedaços ao molho de strogonoff acompanhado por deliciosos champignons',
        34.99
    ),
    (
        'Lasanha a Bolonhesa',
        'Deliciosas folhas de massa produzida na casa com queijo, presunto e molho de tomate com carne moída',
        46.99
    ),
    (
        'Frango à Milanesa',
        'Delicioso peito de frango à milanesa, acompanha arroz, feijão e batat fritas',
        37.99
    ),
    (
        'Filé Mignon ao Molho Madeira',
        'Filé Mignon ao molho madeira. Acompanha arroz e batat rústica',
        87.99
    ),
    (
        'Costela ao molho barbecue',
        'Costela ao molho barbecue. Acompanha arroz e cebola à milanesa',
        59.99
    );
    
    
    