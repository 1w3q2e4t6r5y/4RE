

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `userinformation` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Atr_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Atr_inf` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `userinformation` (`id`, `user_id`, `Atr_name`, `Atr_inf`) VALUES
(3, 4, 'my age', '422'),
(4, 4, 'I too stupid to complete this test ', 'i m need more time for that'),
(5, 4, 'eeeeyy', 'i can speak with myself'),
(6, 4, 'sacasca', 'sacasca'),
(7, 4, 'I can eat my grandMothers food', 'yep it is delicious');


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'moloko', 'wqeqwe@fqwf.ss', '6767fbc5b1383fc3b93e13a931b9135f'),
(2, 'molok', 'moloko19@inbox.lv', '6767fbc5b1383fc3b93e13a931b9135f'),
(3, 'qwe', 'qwe@inb.lv', '76d80224611fc919a5d54f0ff9fba446'),
(4, 'moloko', 'moloko@inbox.lv', 'c031786da4116fa89c2e23082e4f6386'),
(5, 'meh', 'mideki6749@ptcji.com', 'e396bbb053529d2ddb17b100aa04d7c5');


ALTER TABLE `userinformation`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


--
ALTER TABLE `userinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;


