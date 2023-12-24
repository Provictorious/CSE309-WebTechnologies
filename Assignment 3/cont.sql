SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `form_detail` (
  `name` varchar(255) NOT NULL,
  `cno` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `form_detail` (`name`, `cno`, `email`, `message`) VALUES
('Helium', 2147483647, 'hydra@gmail.com', 'pedo'),
('Provi', 2147483647, 'cyber71@gmail.com', 'dunki');
COMMIT;
