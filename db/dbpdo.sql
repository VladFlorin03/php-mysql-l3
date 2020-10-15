

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `tbl_articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `tbl_articles` (`id`, `title`, `content`) VALUES
(1, 'test title', 'test content');



CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `email_id`, `contact_no`) VALUES
(23, 'pradeep', 'khodke', 'pradeep@gmail.com', 9876543210),
(24, 'sohan', 'mahamune', 'sohan@gmail.com', 9874563210),
(25, 'john', 'doe', 'john@someone.com', 9778456123),
(26, 'test', 'test', 'test@test.com', 8745691230),
(27, 'medaimane', 'mohamed', 'medaimane@domaine.com', 0),
(28, 'mohamed', 'Aimane', 'medaimane@domaine.com', 11001100);

ALTER TABLE `tbl_articles`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tbl_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

