PETSHOP
  CREATE TABLE `dogs` (
  `id` int NOT NULL,
  `nome` varchar(45) NOT NULL,
  `raca` varchar(45) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `dogs` (`id`, `nome`, `raca`, `data_nascimento`) VALUES
(1, 'harry', 'dachshund', '2018-06-11'),
(2, 'akira', 'akita', '2004-01-31'),
(3, 'lulu', 'golden retriever', '2016-04-08');

ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `dogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
