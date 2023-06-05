CREATE TABLE `rehber` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `telefon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `rehber`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `rehber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
