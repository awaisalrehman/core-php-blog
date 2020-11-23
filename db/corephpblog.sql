CREATE DATABASE `core-php-blog`;
USE `core-php-blog`;

CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# email :       rjawaisbutt@gmail.com
# password :    password
INSERT INTO `users` (`username`, `email`, `role`, `password`) VALUES
('rjawais', 'rjawaisbutt@gmail.com', 'Admin', '5f4dcc3b5aa765d61d8327deb882cf99');

CREATE TABLE `posts` (
 `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `user_id` int(11) DEFAULT NULL,
 `title` varchar(255) NOT NULL,
 `slug` varchar(255) NOT NULL UNIQUE,
 `views` int(11) NOT NULL DEFAULT '0',
 `image` varchar(255) NOT NULL,
 `body` text NOT NULL,
 `published` tinyint(1) NOT NULL,
 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `posts` (`user_id`, `title`, `slug`, `views`, `image`, `body`, `published`) VALUES
(1, 'What is PHP?', 'what-is-php', 0, 'xampp.png', 'PHP is an open source, server-side, HTML embedded scripting language used to create dynamic web pages.', 1),
(1, 'What is MySQL?', 'what-is-mysql', 0, 'xampp.png', 'MySQL is an open-source relational database management system. Its name is a combination of "My", the name of co-founder Michael Widenius daughter, and "SQL", the abbreviation for Structured Query Language.', 1);

CREATE TABLE `topics` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL UNIQUE,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `post_topic` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `post_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `post_topic` ADD FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
ALTER TABLE `post_topic` ADD FOREIGN KEY (`topic_id`) REFERENCES `topics`(`id`) ON DELETE CASCADE ON UPDATE NO ACTION;


INSERT INTO `topics` (`name`, `slug`) VALUES
('Web Development', 'web-development'),
('Android Development', 'android-development'),
('How To', 'how-to');

INSERT INTO `post_topic` (`post_id`, `topic_id`) VALUES
(1, 1),
(2, 2);
