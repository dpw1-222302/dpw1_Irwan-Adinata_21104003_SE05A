CREATE TABLE `role` (
  `role_id` int PRIMARY KEY,
  `role_name` varchar(255)
);

CREATE TABLE `user` (
  `user_id` int PRIMARY KEY,
  `username` varchar(255),
  `password` varchar(255),
  `role_id` int
);

CREATE TABLE `division` (
  `division_id` int PRIMARY KEY,
  `ketua_divisi_id` int,
  `user_id` int,
  `division_name` varchar(255)
);

CREATE TABLE `activity` (
  `activity_id` int PRIMARY KEY,
  `division_id` int,
  `user_id` int,
  `activity_date` date,
  `activity` varchar(255)
);

ALTER TABLE `user` ADD FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

ALTER TABLE `division` ADD FOREIGN KEY (`ketua_divisi_id`) REFERENCES `user` (`user_id`);

ALTER TABLE `division` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

ALTER TABLE `activity` ADD FOREIGN KEY (`division_id`) REFERENCES `division` (`division_id`);

ALTER TABLE `activity` ADD FOREIGN KEY (`user_id`) REFERENCES `division` (`user_id`);
