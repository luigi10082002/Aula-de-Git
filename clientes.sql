-- Criação da tabela Clientes no Azure SQL
CREATE TABLE Clientes (
    Id_Cliente INT PRIMARY KEY IDENTITY(1,1),
    Nome NVARCHAR(100) NOT NULL,
    Endereco NVARCHAR(150),
    Cidade NVARCHAR(100),
    Telefone NVARCHAR(20)
);

-- Inserção de 30 registros fictícios
INSERT INTO Clientes (Nome, Endereco, Cidade, Telefone) VALUES
('João Silva', 'Rua das Flores, 123', 'São Paulo', '(11) 98888-1111'),
('Maria Oliveira', 'Av. Brasil, 456', 'Rio de Janeiro', '(21) 97777-2222'),
('Carlos Santos', 'Rua A, 55', 'Belo Horizonte', '(31) 96666-3333'),
('Ana Costa', 'Av. Central, 900', 'Curitiba', '(41) 95555-4444'),
('Paulo Lima', 'Rua B, 22', 'Porto Alegre', '(51) 94444-5555'),
('Fernanda Souza', 'Rua C, 78', 'Brasília', '(61) 93333-6666'),
('Rafael Almeida', 'Rua D, 101', 'Salvador', '(71) 92222-7777'),
('Juliana Pereira', 'Av. Paulista, 1500', 'São Paulo', '(11) 91111-8888'),
('Rodrigo Martins', 'Rua E, 345', 'Recife', '(81) 90000-9999'),
('Carla Fernandes', 'Rua F, 88', 'Manaus', '(92) 98888-0000'),
('Eduardo Rocha', 'Av. Leste, 120', 'Belém', '(91) 97777-1234'),
('Patrícia Nunes', 'Rua G, 67', 'Fortaleza', '(85) 96666-2345'),
('Gustavo Ribeiro', 'Rua H, 34', 'Natal', '(84) 95555-3456'),
('Luciana Moreira', 'Av. Sul, 700', 'João Pessoa', '(83) 94444-4567'),
('Marcos Vieira', 'Rua I, 99', 'Maceió', '(82) 93333-5678'),
('Aline Barbosa', 'Rua J, 150', 'Teresina', '(86) 92222-6789'),
('Ricardo Farias', 'Rua K, 300', 'Campo Grande', '(67) 91111-7890'),
('Camila Cardoso', 'Rua L, 45', 'Florianópolis', '(48) 90000-8901'),
('André Lopes', 'Av. Oeste, 210', 'Vitória', '(27) 98888-9012'),
('Mariana Pires', 'Rua M, 75', 'Cuiabá', '(65) 97777-0123'),
('Felipe Teixeira', 'Rua N, 66', 'Goiânia', '(62) 96666-1234'),
('Tatiane Santos', 'Rua O, 80', 'Palmas', '(63) 95555-2345'),
('Alexandre Pinto', 'Rua P, 12', 'Macapá', '(96) 94444-3456'),
('Vanessa Souza', 'Av. Norte, 500', 'Rio Branco', '(68) 93333-4567'),
('Thiago Moura', 'Rua Q, 40', 'Aracaju', '(79) 92222-5678'),
('Bianca Correia', 'Rua R, 85', 'Porto Velho', '(69) 91111-6789'),
('Henrique Duarte', 'Rua S, 200', 'Boa Vista', '(95) 90000-7890'),
('Priscila Azevedo', 'Av. Nova, 300', 'Santos', '(13) 98888-8901'),
('Leandro Campos', 'Rua T, 170', 'Campinas', '(19) 97777-9012'),
('Natália Freitas', 'Rua U, 25', 'Sorocaba', '(15) 96666-0123');
