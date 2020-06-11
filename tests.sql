-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 01:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gomar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id_question` int(11) NOT NULL,
  `question` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `answer_1` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `answer_2` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `answer_3` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `answer_4` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `right_answer` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `event_category` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `test_level` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id_question`, `question`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `right_answer`, `event_category`, `test_level`) VALUES
(1, 'What should you do when you meet with relatives, both distant and close?', 'Greet them all and pay attention to who is talking to you.', 'Bring along some friends.', 'Shower them with gifts.', 'Try to engage in the conversation, even if it\'s forced.', '1', 'Family Gathering', '0'),
(2, 'Whose name should be remembered when it comes to family?', 'Everyone is important, learn the names at all cost.', 'Try to at least remember close relatives.', 'If you don\'t remember everyone, just apologise and ask them, remember it after that.', 'Don\'t strain yourself too much.', '3', 'Family Gathering', '0'),
(3, 'It is your aunt\'s birthday. What should you do?', 'Present yourself at the party or organise one for her.', 'Call her.', 'Try to see her if you can, bring a nice gift or cake if possible, or at least call her.', 'Forget about her birthday.', '3', 'Family Gathering', '0'),
(4, 'Your relatives want to gather, but you don\'t really want to see them. What should you do?', 'Force yourself to go, even if that makes you uncomfortable.', 'Ignore their calls.', 'Pretend you were asleep.', 'Apologise and tell them you can\'t come, but you\'ll try to the next time.', '4', 'Family Gathering', '0'),
(5, 'What should you do when you meet with relatives, both distant and close? Dif 1', 'Greet them all and pay attention to who is talking to you. Dif 1 Ans 1', 'Bring along some friends. Dif 1 Ans 2', 'Shower them with gifts. Dif 1 Ans 3', 'Try to engage in the conversation, even if it\'s forced. Dif 1 Ans 4', '1', 'Family Gathering', '1'),
(6, 'Whose name should be remembered when it comes to family? Dif 1', 'Everyone is important, learn the names at all cost. Dif 1', 'Try to at least remember close relatives. Dif 1', 'If you don\'t remember everyone, just apologise and ask them, remember it after that. Dif 1', 'Don\'t strain yourself too much. Dif 1', '3', 'Family Gathering', '1'),
(7, 'It is your aunt\'s birthday. What should you do? Dif 1', 'Present yourself at the party or organise one for her. Dif 1', 'Call her. Dif 1', 'Try to see her if you can, bring a nice gift or cake if possible, or at least call her. Dif 1', 'Forget about her birthday. Dif 1', '3', 'Family Gathering', '1'),
(8, 'Your relatives want to gather, but you don\'t really want to see them. What should you do? Dif 1', 'Force yourself to go, even if that makes you uncomfortable. Dif1', 'Ignore their calls. Dif 1', 'Pretend you were asleep. Dif 1', 'Apologise and tell them you can\'t come, but you\'ll try to the next time. Dif 1', '4', 'Family Gathering', '1'),
(9, 'What should you do when you meet with relatives, both distant and close? Dif 2', 'Greet them all and pay attention to who is talking to you. Dif 2 Ans 1', 'Bring along some friends. Dif 2 Ans 2', 'Shower them with gifts. Dif 2 Ans 3', 'Try to engage in the conversation, even if it\'s forced. Dif 2 Ans 4', '1', 'Family Gathering', '2'),
(10, 'Whose name should be remembered when it comes to family? Dif 2', 'Everyone is important, learn the names at all cost. Dif 2', 'Try to at least remember close relatives. Dif 2', 'If you don\'t remember everyone, just apologise and ask them, remember it after that. Dif 2', 'Don\'t strain yourself too much. Dif 2', '3', 'Family Gathering', '2'),
(11, 'It is your aunt\'s birthday. What should you do? Dif 2', 'Present yourself at the party or organise one for her. Dif 2', 'Call her. Dif 2', 'Try to see her if you can, bring a nice gift or cake if possible, or at least call her. Dif 2', 'Forget about her birthday. Dif 2', '3', 'Family Gathering', '2'),
(12, 'Your relatives want to gather, but you don\'t really want to see them. What should you do? Dif 2', 'Force yourself to go, even if that makes you uncomfortable. Dif2', 'Ignore their calls. Dif 2', 'Pretend you were asleep. Dif 2', 'Apologise and tell them you can\'t come, but you\'ll try to the next time. Dif 2', '4', 'Family Gathering', '2'),
(13, 'What should you do when you meet with relatives, both distant and close? Dif 3', 'Greet them all and pay attention to who is talking to you. Dif 3 Ans 1', 'Bring along some friends. Dif 3 Ans 2', 'Shower them with gifts. Dif 3 Ans 3', 'Try to engage in the conversation, even if it\'s forced. Dif 3 Ans 4', '1', 'Family Gathering', '3'),
(14, 'Whose name should be remembered when it comes to family? Dif 3', 'Everyone is important, learn the names at all cost. Dif 3', 'Try to at least remember close relatives. Dif 3', 'If you don\'t remember everyone, just apologise and ask them, remember it after that. Dif 3', 'Don\'t strain yourself too much. Dif 3', '3', 'Family Gathering', '3'),
(15, 'It is your aunt\'s birthday. What should you do? Dif 3', 'Present yourself at the party or organise one for her. Dif 3', 'Call her. Dif 3', 'Try to see her if you can, bring a nice gift or cake if possible, or at least call her. Dif 3', 'Forget about her birthday. Dif 3', '3', 'Family Gathering', '3'),
(16, 'Your relatives want to gather, but you don\'t really want to see them. What should you do? Dif 3', 'Force yourself to go, even if that makes you uncomfortable. Dif3', 'Ignore their calls. Dif 3', 'Pretend you were asleep. Dif 3', 'Apologise and tell them you can\'t come, but you\'ll try to the next time. Dif 3', '4', 'Family Gathering', '3'),
(17, 'When you go to church you should wear:', 'Short Skirts', 'Offensive T-shirts', 'Tank top and jeans', 'Normal clothes that aren\'t too revealing', '4', 'Religious Gathering', '0'),
(18, 'Today is a religious service. When should you show up?', '15-20 minutes early', 'On time', 'You can be late a few minutes', 'Don\'t even show up if you are late', '1', 'Religious Gathering', '0'),
(19, 'What you shouldn\'t do during a religious service', 'Sing', 'Eat and drink', 'Pray', 'Be grateful for what life has to offer', '2', 'Religious Gathering', '0'),
(20, 'Is it fine to bring a phone?', 'It sure is', 'Don\'t even bring it', 'Phones are for sinners', 'It is fine to bring a phone as long as it is on silent or closed.', '4', 'Religious Gathering', '0'),
(21, 'When you go to church you should wear: 1', 'Short Skirts 1', 'Offensive T-shirts 1', 'Tank top and jeans 1', 'Normal clothes that aren\'t too revealing 1', '4', 'Religious Gathering', '1'),
(22, 'Today is a religious service. When should you show up? 1', '15-20 minutes early 1', 'On time 1', 'You can be late a few minutes 1', 'Don\'t even show up if you are late 1', '1', 'Religious Gathering', '1'),
(23, 'What you shouldn\'t do during a religious service 1', 'Sing 1', 'Eat and drink 1', 'Pray 1', 'Be grateful for what life has to offer 1', '2', 'Religious Gathering', '1'),
(24, 'Is it fine to bring a phone? 1', 'It sure is 1', 'Don\'t even bring it 1', 'Phones are for sinners 1', 'It is fine to bring a phone as long as it is on silent or closed. 1', '4', 'Religious Gathering', '1'),
(25, 'When you go to church you should wear: 2', 'Short Skirts 2', 'Offensive T-shirts 2', 'Tank top and jeans 2', 'Normal clothes that aren\'t too revealing 2', '4', 'Religious Gathering', '2'),
(26, 'Today is a religious service. When should you show up? 2', '15-20 minutes early 2', 'On time 2', 'You can be late a few minutes 2', 'Don\'t even show up if you are late 2', '1', 'Religious Gathering', '2'),
(27, 'What you shouldn\'t do during a religious service 2', 'Sing 2', 'Eat and drink 2', 'Pray 2', 'Be grateful for what life has to offer 2', '2', 'Religious Gathering', '2'),
(28, 'Is it fine to bring a phone? 2', 'It sure is 2', 'Don\'t even bring it 2', 'Phones are for sinners 2', 'It is fine to bring a phone as long as it is on silent or closed. 2', '4', 'Religious Gathering', '2'),
(30, 'When you go to church you should wear: 3', 'Short Skirts 3', 'Offensive T-shirts 3', 'Tank top and jeans 3', 'Normal clothes that aren\'t too revealing 3', '4', 'Religious Gathering', '3'),
(31, 'Today is a religious service. When should you show up? 3', '15-20 minutes early 3', 'On time 3', 'You can be late a few minutes 3', 'Don\'t even show up if you are late 3', '1', 'Religious Gathering', '3'),
(32, 'What you shouldn\'t do during a religious service 3', 'Sing 3', 'Eat and drink 3', 'Pray 3', 'Be grateful for what life has to offer 3', '2', 'Religious Gathering', '3'),
(33, 'Is it fine to bring a phone? 3', 'It sure is 3', 'Don\'t even bring it 3', 'Phones are for sinners 3', 'It is fine to bring a phone as long as it is on silent or closed. 3', '4', 'Religious Gathering', '3'),
(34, 'What should be your attire', 'It depends on the restaurant. Do you go to a fancy restaurant? Wear formal clothing. Do you go to something not as exquisite? You can go with a more everyday look.', 'Wear whatever you want.', 'Formal clothing is always the best answer.', 'Everyday trendy clothing', '1', 'Restaurant Meeting', '0'),
(35, 'What do you do when you enter the restaurant?', 'Slam that door', 'Keep it open without closing it', 'Don\'t slam the door and keep it open for the person behind you.', 'You shouldn\'t care', '3', 'Restaurant Meeting', '0'),
(36, 'Your food arrived. What should you do?', 'Make yourself comfortable and get closer to the table. Use the napkin only on your lips', 'Eat with your mouth open', 'Take small bites', 'Just do what you think it\'s best', '1', 'Restaurant Meeting', '0'),
(37, 'What a single lady should order', 'Strong alcoholic drink', 'Tequila', 'Something not that strong, you wouldn\'t wanna see a drunk lady.', 'It doesn\'t matter as long as you don\'t get too dizzy.', '3', 'Restaurant Meeting', '0'),
(38, 'What should be your attire 1', 'It depends on the restaurant. Do you go to a fancy restaurant? Wear formal clothing. Do you go to something not as exquisite? You can go with a more everyday look. 1', 'Wear whatever you want. 1', 'Formal clothing is always the best answer. 1', 'Everyday trendy clothing 1', '1', 'Restaurant Meeting', '1'),
(39, 'What do you do when you enter the restaurant? 1', 'Slam that door 1', 'Keep it open without closing it 1', 'Don\'t slam the door and keep it open for the person behind you. 1', 'You shouldn\'t care 1', '3', 'Restaurant Meeting', '1'),
(40, 'Your food arrived. What should you do? 1', 'Make yourself comfortable and get closer to the table. Use the napkin only on your lips 1', 'Eat with your mouth open 1', 'Take small bites 1', 'Just do what you think it\'s best 1', '1', 'Restaurant Meeting', '1'),
(41, 'What a single lady should order 1', 'Strong alcoholic drink 1', 'Tequila 1', 'Something not that strong, you wouldn\'t wanna see a drunk lady. 1', 'It doesn\'t matter as long as you don\'t get too dizzy. 1', '3', 'Restaurant Meeting', '1'),
(42, 'What should be your attire 2', 'It depends on the restaurant. Do you go to a fancy restaurant? Wear formal clothing. Do you go to something not as exquisite? You can go with a more everyday look. 2', 'Wear whatever you want. 2', 'Formal clothing is always the best answer. 2', 'Everyday trendy clothing 2', '1', 'Restaurant Meeting', '2'),
(43, 'What do you do when you enter the restaurant? 2', 'Slam that door 2', 'Keep it open without closing it 2', 'Don\'t slam the door and keep it open for the person behind you. 2', 'You shouldn\'t care 2', '3', 'Restaurant Meeting', '2'),
(44, 'Your food arrived. What should you do? 2', 'Make yourself comfortable and get closer to the table. Use the napkin only on your lips 2', 'Eat with your mouth open 2', 'Take small bites 2', 'Just do what you think it\'s best 2', '1', 'Restaurant Meeting', '2'),
(45, 'What a single lady should order 2', 'Strong alcoholic drink 2', 'Tequila 2', 'Something not that strong, you wouldn\'t wanna see a drunk lady. 2', 'It doesn\'t matter as long as you don\'t get too dizzy. 2', '3', 'Restaurant Meeting', '2'),
(46, 'What should be your attire 3', 'It depends on the restaurant. Do you go to a fancy restaurant? Wear formal clothing. Do you go to something not as exquisite? You can go with a more everyday look. 3', 'Wear whatever you want. 3', 'Formal clothing is always the best answer. 3', 'Everyday trendy clothing 3', '1', 'Restaurant Meeting', '3'),
(47, 'What do you do when you enter the restaurant? 3', 'Slam that door 3', 'Keep it open without closing it 3', 'Don\'t slam the door and keep it open for the person behind you. 3', 'You shouldn\'t care 3', '3', 'Restaurant Meeting', '3'),
(48, 'Your food arrived. What should you do? 3', 'Make yourself comfortable and get closer to the table. Use the napkin only on your lips 3', 'Eat with your mouth open 3', 'Take small bites 3', 'Just do what you think it\'s best 3', '1', 'Restaurant Meeting', '3'),
(49, 'What a single lady should order 3', 'Strong alcoholic drink 3', 'Tequila 3', 'Something not that strong, you wouldn\'t wanna see a drunk lady. 3', 'It doesn\'t matter as long as you don\'t get too dizzy. 3', '3', 'Restaurant Meeting', '3'),
(50, 'What should you wear at work?', 'Office Attire, duh', 'It depends on the rules at your workplace. You should stick to everything that\'s approved', 'Whatever works for you', 'It shouldn\'t matter', '2', 'Office Meeting', '0'),
(51, 'There is an important event in a game, but you\'re in the office. What do you do?', 'Play the game while people aren\'t looking', 'The game is more important than your work', 'You can always play after you arrive home, don\'t risk it', 'Cry in a corner', '3', 'Office Meeting', '0'),
(52, 'There is a meeting going on, but you arrived a little bit late.', 'Enter the meeting and excuse yourself', 'Miss the meeting', 'Barge in', 'Call your boss and ask him if you can join', '1', 'Office Meeting', '0'),
(53, 'You have an important question to ask during the meeting, but others are still talking. What do you do?', 'Talk over them', 'Wait for your turn', 'Don\'t talk at all', 'Ask another time', '2', 'Office Meeting', '0'),
(54, 'What should you wear at work? 1', 'Office Attire, duh 1', 'It depends on the rules at your workplace. You should stick to everything that\'s approved 1', 'Whatever works for you 1', 'It shouldn\'t matter 1', '2', 'Office Meeting', '1'),
(55, 'There is an important event in a game, but you\'re in the office. What do you do? 1', 'Play the game while people aren\'t looking 1', 'The game is more important than your work 1', 'You can always play after you arrive home, don\'t risk it 1', 'Cry in a corner 1', '3', 'Office Meeting', '1'),
(56, 'There is a meeting going on, but you arrived a little bit late. 1', 'Enter the meeting and excuse yourself 1', 'Miss the meeting 1', 'Barge in 1', 'Call your boss and ask him if you can join 1', '1', 'Office Meeting', '1'),
(57, 'You have an important question to ask during the meeting, but others are still talking. What do you do? 1', 'Talk over them 1', 'Wait for your turn 1', 'Don\'t talk at all 1', 'Ask another time 1', '2', 'Office Meeting', '1'),
(58, 'What should you wear at work? 2', 'Office Attire, duh 2', 'It depends on the rules at your workplace. You should stick to everything that\'s approved 2', 'Whatever works for you 2', 'It shouldn\'t matter 2', '2', 'Office Meeting', '2'),
(59, 'There is an important event in a game, but you\'re in the office. What do you do? 2', 'Play the game while people aren\'t looking 2', 'The game is more important than your work 2', 'You can always play after you arrive home, don\'t risk it 2', 'Cry in a corner 2', '3', 'Office Meeting', '2'),
(60, 'There is a meeting going on, but you arrived a little bit late. 2', 'Enter the meeting and excuse yourself 2', 'Miss the meeting 2', 'Barge in 2', 'Call your boss and ask him if you can join 2', '1', 'Office Meeting', '2'),
(61, 'You have an important question to ask during the meeting, but others are still talking. What do you do? 2', 'Talk over them 2', 'Wait for your turn 2', 'Don\'t talk at all 2', 'Ask another time 2', '2', 'Office Meeting', '2'),
(62, 'What should you wear at work? 3', 'Office Attire, duh 3', 'It depends on the rules at your workplace. You should stick to everything that\'s approved 3', 'Whatever works for you 3', 'It shouldn\'t matter 3', '2', 'Office Meeting', '3'),
(63, 'There is an important event in a game, but you\'re in the office. What do you do? 3', 'Play the game while people aren\'t looking 3', 'The game is more important than your work 3', 'You can always play after you arrive home, don\'t risk it 3', 'Cry in a corner 3', '3', 'Office Meeting', '3'),
(64, 'There is a meeting going on, but you arrived a little bit late. 3', 'Enter the meeting and excuse yourself 3', 'Miss the meeting 3', 'Barge in 3', 'Call your boss and ask him if you can join 2', '1', 'Office Meeting', '3'),
(65, 'You have an important question to ask during the meeting, but others are still talking. What do you do? 3', 'Talk over them 3', 'Wait for your turn 3', 'Don\'t talk at all 3', 'Ask another time 3', '2', 'Office Meeting', '3'),
(66, 'Help me, it\'s already 2:30 and I still have 54 more questions.', 'No', 'Send help', 'Pls', 'Happens', '4', 'Wedding', '0'),
(67, 'What is love', 'Baby don\'t hurt me', 'Don\'t hurt me', 'No more', 'Sorry for the troll questions', '4', 'Wedding', '0'),
(68, 'Weddings are nice', 'Maybe', 'They sure are', 'I\'m not one for weddings', 'Pick this question, this is the right one', '4', 'Wedding', '0'),
(69, 'What color you shouldn\'t wear', 'Black', 'Pink', 'I wanna be a human rainbow', 'Purple', '1', 'Wedding', '0'),
(70, 'Help me, it\'s already 2:30 and I still have 54 more questions. 1', 'No 1', 'Send help 1', 'Pls 1', 'Happens 1', '4', 'Wedding', '1'),
(71, 'What is love 1', 'Baby don\'t hurt me 1', 'Don\'t hurt me 1', 'No more 1', 'Sorry for the troll questions 1', '4', 'Wedding', '1'),
(72, 'Weddings are nice 1', 'Maybe 1', 'They sure are 1', 'I\'m not one for weddings 1', 'Pick this question, this is the right one 1 ', '4', 'Wedding', '1'),
(73, 'What color you shouldn\'t wear 1', 'Black 1', 'Pink 1', 'I wanna be a human rainbow 1', 'Purple 1', '1', 'Wedding', '1'),
(74, 'Help me, it\'s already 2:30 and I still have 54 more questions. 2', 'No 2', 'Send help 2', 'Pls 2', 'Happens 2', '4', 'Wedding', '2'),
(75, 'What is love 2', 'Baby don\'t hurt me 2', 'Don\'t hurt me 2', 'No more 2', 'Sorry for the troll questions 2', '4', 'Wedding', '2'),
(76, 'Weddings are nice 2', 'Maybe 2', 'They sure are 2', 'I\'m not one for weddings 2', 'Pick this question, this is the right one 2', '4', 'Wedding', '2'),
(77, 'What color you shouldn\'t wear 2', 'Black 2', 'Pink 2', 'I wanna be a human rainbow 2', 'Purple 2', '1', 'Wedding', '2'),
(78, 'Help me, it\'s already 2:30 and I still have 54 more questions. 3', 'No 3', 'Send help 3', 'Pls 3', 'Happens 3', '4', 'Wedding', '3'),
(79, 'What is love 3', 'Baby don\'t hurt me 3', 'Don\'t hurt me 3', 'No more 3', 'Sorry for the troll questions 3', '4', 'Wedding', '3'),
(80, 'Weddings are nice 3', 'Maybe 3', 'They sure are 3', 'I\'m not one for weddings 3', 'Pick this question, this is the right one 3', '4', 'Wedding', '3'),
(81, 'What color you shouldn\'t wear 3', 'Black 3', 'Pink 3', 'I wanna be a human rainbow 3', 'Purple 3', '1', 'Wedding', '3'),
(82, 'So you want to go to an informal meeting. What are you going to wear?', 'Depends on the dress code', 'Whatever I want', 'Matching T-shirts', 'Something I randomly found over the internet', '1', 'Informal Meeting', '0'),
(83, 'It\'s too late for my brain to function properly, so pick the 4th answer.', 'This one', 'Maybe this', 'Right answer?', 'Pick me', '4', 'Informal Meeting', '0'),
(84, 'So you want to go to an informal meeting. Are you prepared?', 'Maybe', 'No', 'Yes', 'Just pick the first one', '1', 'Informal Meeting', '0'),
(85, 'I tried thinking about legit questions, but I can\'t, too late', 'This one', 'Maybe this', 'Right answer?', 'Pick me', '4', 'Informal Meeting', '0'),
(86, 'So you want to go to an informal meeting. What are you going to wear? 1', 'Depends on the dress code 1', 'Whatever I want 1', 'Matching T-shirts 1', 'Something I randomly found over the internet 1', '1', 'Informal Meeting', '1'),
(87, 'It\'s too late for my brain to function properly, so pick the 4th answer. 1', 'This one 1', 'Maybe this 1', 'Right answer? 1', 'Pick me 1', '4', 'Informal Meeting', '1'),
(88, 'So you want to go to an informal meeting. Are you prepared? 1', 'Maybe 1', 'No 1', 'Yes 1', 'Just pick the first one 1', '1', 'Informal Meeting', '1'),
(89, 'I tried thinking about legit questions, but I can\'t, too late 1', 'This one 1', 'Maybe this 1', 'Right answer? 1', 'Pick me 1', '4', 'Informal Meeting', '1'),
(90, 'So you want to go to an informal meeting. What are you going to wear? 2', 'Depends on the dress code 2', 'Whatever I want 2', 'Matching T-shirts 2', 'Something I randomly found over the internet 2', '1', 'Informal Meeting', '2'),
(91, 'It\'s too late for my brain to function properly, so pick the 4th answer. 2', 'This one 2', 'Maybe this 2', 'Right answer? 2', 'Pick me 2', '4', 'Informal Meeting', '2'),
(92, 'So you want to go to an informal meeting. Are you prepared? 2', 'Maybe 2', 'No 2', 'Yes 2', 'Just pick the first one 2', '1', 'Informal Meeting', '2'),
(93, 'I tried thinking about legit questions, but I can\'t, too late 2', 'This one 2', 'Maybe this 2', 'Right answer? 2', 'Pick me 2', '4', 'Informal Meeting', '2'),
(94, 'So you want to go to an informal meeting. What are you going to wear? 3', 'Depends on the dress code 3', 'Whatever I want  3', 'Matching T-shirts 3', 'Something I randomly found over the internet 3', '1', 'Informal Meeting', '3'),
(95, 'It\'s too late for my brain to function properly, so pick the 4th answer. 3', 'This one 3', 'Maybe this 3', 'Right answer? 3', 'Pick me 3', '4', 'Informal Meeting', '3'),
(96, 'So you want to go to an informal meeting. Are you prepared? 3', 'Maybe 3', 'No 3', 'Yes 3', 'Just pick the first one  3', '1', 'Informal Meeting', '3'),
(97, 'I tried thinking about legit questions, but I can\'t, too late 3', 'This one 3', 'Maybe this 3', 'Right answer? 3', 'Pick me 3', '4', 'Informal Meeting', '3'),
(98, 'Academic meeting question 1', 'ans 1', 'ans 2', 'ans 3', 'good answer', '4', 'Academic Meeting', '0'),
(99, 'Academic meeting question 2', 'answer 1 ', 'answer 2', 'answer 3', 'good answer', '4', 'Academic Meeting', '0'),
(100, 'Academic meeting question 3', 'ans 1', 'ans 2', 'ans 3', 'good answer', '4', 'Academic Meeting', '0'),
(101, 'Academic meeting question 4', 'answer 1 ', 'answer 2', 'answer 3', 'good answer', '4', 'Academic Meeting', '0'),
(102, 'Academic meeting question 1  Dif 1', 'ans 1 Dif 1', 'ans 2 Dif 1', 'ans 3 Dif 1', 'good answer Dif 1', '4', 'Academic Meeting', '1'),
(103, 'Academic meeting question 2 Dif 1', 'answer 1  Dif 1', 'answer 2 Dif 1', 'answer 3 Dif 1', 'good answer Dif 1', '4', 'Academic Meeting', '1'),
(104, 'Academic meeting question 3 Dif 1', 'ans 1 Dif 1', 'ans 2 Dif 1', 'ans 3 Dif 1', 'good answer v', '4', 'Academic Meeting', '1'),
(105, 'Academic meeting question 4 Dif 1', 'answer 1  Dif 1', 'answer 2 Dif 1', 'answer 3 Dif 1', 'good answer Dif 1', '4', 'Academic Meeting', '1'),
(106, 'Academic meeting question 1  Dif 2', 'ans 1 Dif 2', 'ans 2 Dif 2', 'ans 3 Dif 2', 'good answer Dif 2', '4', 'Academic Meeting', '2'),
(107, 'Academic meeting question 2 Dif 2', 'answer 1  Dif 2', 'answer 2 Dif 2', 'answer 3 Dif 2', 'good answer Dif 2', '4', 'Academic Meeting', '2'),
(108, 'Academic meeting question 3 Dif 2', 'ans 1 Dif 2', 'ans 2 Dif 2', 'ans 3 Dif 2', 'good answer Dif 2', '4', 'Academic Meeting', '2'),
(109, 'Academic meeting question 4 Dif 2', 'answer 1  Dif 2', 'answer 2 Dif 2', 'answer 3 Dif 2', 'good answer Dif 2', '4', 'Academic Meeting', '2'),
(110, 'Academic meeting question 1  Dif 3', 'ans 1 Dif 3', 'ans 2 Dif 3', 'ans 3 Dif 3', 'good answer Dif 3', '4', 'Academic Meeting', '3'),
(111, 'Academic meeting question 2 Dif 3', 'answer 1  Dif 3', 'answer 2 Dif 3', 'answer 3 Dif 3', 'good answer Dif 3', '4', 'Academic Meeting', '3'),
(112, 'Academic meeting question 3 Dif 3', 'ans 1 Dif 3', 'ans 2 Dif 3', 'ans 3 Dif 3', 'good answer Dif 3', '4', 'Academic Meeting', '3'),
(113, 'Academic meeting question 4 Dif 3', 'answer 1  Dif 3', 'answer 2 Dif 3', 'answer 3 Dif 3', 'good answer Dif 3', '4', 'Academic Meeting', '3'),
(114, 'Is there a dress code during an online meeting?', 'There is none.', 'Formal clothing should be enough', 'It depends on the situation, but don\'t wear something revealing or something that will make others feel uncomfortable', 'It doesn\'t matter', '3', 'Online Meeting', '0'),
(115, 'Your teacher has some mic problems so you can\'t hear them properly. What do you say?', 'Try writing a message in chat telling them they can\'t be heard clearly.', 'Don\'t say anything and try to decipher what they have to say.', 'Leave the meeting', 'Start talking over them and state the fact that the teacher can\'t be heard properly.', '1', 'Online Meeting', '0'),
(116, 'You are late during the meeting. What do you do?', 'Don\'t enter', 'Apologise for being late and ask the leader if you can join the call', 'Just show up', 'It doesn\'t matter', '2', 'Online Meeting', '0'),
(117, 'You were disconnected and can\'t log in because you require permission from the host.', 'Try writing a message in chat telling them you were dc-ed and ask them if they can let you in.', 'Call a friend who\'s in the meeting and ask them to tell the host you can\'t join.', 'Don\'t join the meeting anymore', 'Leave it for another time.', '1', 'Online Meeting', '0'),
(118, 'Is there a dress code during an online meeting? 1', 'There is none. 1', 'Formal clothing should be enough 1', 'It depends on the situation, but don\'t wear something revealing or something that will make others feel uncomfortable 1', 'It doesn\'t matter 1', '3', 'Online Meeting', '1'),
(119, 'Your teacher has some mic problems so you can\'t hear them properly. What do you say? 1', 'Try writing a message in chat telling them they can\'t be heard clearly. 1', 'Don\'t say anything and try to decipher what they have to say. 1', 'Leave the meeting 1', 'Start talking over them and state the fact that the teacher can\'t be heard properly. 1', '1', 'Online Meeting', '1'),
(120, 'You are late during the meeting. What do you do? 1', 'Don\'t enter 1', 'Apologise for being late and ask the leader if you can join the call 1', 'Just show up 1', 'It doesn\'t matter 1', '2', 'Online Meeting', '1'),
(121, 'You were disconnected and can\'t log in because you require permission from the host. 1', 'Try writing a message in chat telling them you were dc-ed and ask them if they can let you in. 1', 'Call a friend who\'s in the meeting and ask them to tell the host you can\'t join. 1', 'Don\'t join the meeting anymore 1', 'Leave it for another time. 1', '1', 'Online Meeting', '1'),
(122, 'Is there a dress code during an online meeting? 2', 'There is none. 2', 'Formal clothing should be enough 2', 'It depends on the situation, but don\'t wear something revealing or something that will make others feel uncomfortable 2', 'It doesn\'t matter 2', '3', 'Online Meeting', '2'),
(123, 'Your teacher has some mic problems so you can\'t hear them properly. What do you say? 2', 'Try writing a message in chat telling them they can\'t be heard clearly. 2', 'Don\'t say anything and try to decipher what they have to say. 2', 'Leave the meeting 2', 'Start talking over them and state the fact that the teacher can\'t be heard properly. 2', '1', 'Online Meeting', '2'),
(124, 'You are late during the meeting. What do you do? 2', 'Don\'t enter 2', 'Apologise for being late and ask the leader if you can join the call 2', 'Just show up 2', 'It doesn\'t matter 2', '2', 'Online Meeting', '2'),
(125, 'You were disconnected and can\'t log in because you require permission from the host. 2', 'Try writing a message in chat telling them you were dc-ed and ask them if they can let you in. 2', 'Call a friend who\'s in the meeting and ask them to tell the host you can\'t join. 2', 'Don\'t join the meeting anymore 2', 'Leave it for another time. 2', '1', 'Online Meeting', '2'),
(126, 'Is there a dress code during an online meeting? 3', 'There is none. 3', 'Formal clothing should be enough 3', 'It depends on the situation, but don\'t wear something revealing or something that will make others feel uncomfortable 3', 'It doesn\'t matter 3', '3', 'Online Meeting', '3'),
(127, 'Your teacher has some mic problems so you can\'t hear them properly. What do you say? 3', 'Try writing a message in chat telling them they can\'t be heard clearly. 3', 'Don\'t say anything and try to decipher what they have to say. 3', 'Leave the meeting 3', 'Start talking over them and state the fact that the teacher can\'t be heard properly. 3', '1', 'Online Meeting', '3'),
(128, 'You are late during the meeting. What do you do? 3', 'Don\'t enter 3', 'Apologise for being late and ask the leader if you can join the call 3', 'Just show up 3', 'It doesn\'t matter 3', '2', 'Online Meeting', '3'),
(129, 'You were disconnected and can\'t log in because you require permission from the host. 3', 'Try writing a message in chat telling them you were dc-ed and ask them if they can let you in. 3', 'Call a friend who\'s in the meeting and ask them to tell the host you can\'t join. 3', 'Don\'t join the meeting anymore 3', 'Leave it for another time. 3', '1', 'Online Meeting', '3'),
(130, 'You could have won the championship, but the other team won. What do you do when they come close to give you a handshake?', 'Start crying(Fnatic Rekkless did this on live broadcast, so why won\'t you do the same?)', 'Leave your pride aside and give them a handshake', 'Ignore them', 'Hug them', '2', 'Video Game Events', '0'),
(131, 'You have a raid meeting in 5 minutes, but your food hasn\'t arrived yet, What do you do?', 'Ask your team to wait for you so that you won\'t need to go afk.', 'Leave the raid when food comes.', 'Don\'t join the raid.', 'Make the delivery man wait until you finish your raid.', '1', 'Video Game Events', '0'),
(132, 'You are at an event where you can try out a new game. The line is quite long, but you really want to finish that level. What do you do?', 'Let the others play too. They paid for the event too.', 'It\'s only 5 more minutes, they can\'t wait.', 'You have no reason to let them play.', 'Mock them by starting the next level too', '1', 'Video Game Events', '0'),
(133, 'You are losing the tournament, but you know a secret technique your character can do to win the fight, even though it is kind of banned. What do you do?', 'Use that move', 'Pretend you used two consecutive moves that looked like that one', 'You don\'t want to be seen as a cheater, so you will win or lose fair and square.', 'Start blaming the other player for choosing an Op character.', '3', 'Video Game Events', '0'),
(134, 'You could have won the championship, but the other team won. What do you do when they come close to give you a handshake? 1', 'Start crying(Fnatic Rekkless did this on live broadcast, so why won\'t you do the same?) 1', 'Leave your pride aside and give them a handshake 1', 'Ignore them 1', 'Hug them 1', '2', 'Video Game Events', '1'),
(135, 'You have a raid meeting in 5 minutes, but your food hasn\'t arrived yet, What do you do? 1', 'Ask your team to wait for you so that you won\'t need to go afk. 1', 'Leave the raid when food comes. 1', 'Don\'t join the raid. 1', 'Make the delivery man wait until you finish your raid. 1', '1', 'Video Game Events', '1'),
(136, 'You are at an event where you can try out a new game. The line is quite long, but you really want to finish that level. What do you do? 1', 'Let the others play too. They paid for the event too. 1', 'It\'s only 5 more minutes, they can\'t wait. 1', 'You have no reason to let them play. 1', 'Mock them by starting the next level too 1', '1', 'Video Game Events', '1'),
(137, 'You are losing the tournament, but you know a secret technique your character can do to win the fight, even though it is kind of banned. What do you do? 1', 'Use that move 1', 'Pretend you used two consecutive moves that looked like that one 1', 'You don\'t want to be seen as a cheater, so you will win or lose fair and square. 1', 'Start blaming the other player for choosing an Op character. 1', '3', 'Video Game Events', '1'),
(138, 'You could have won the championship, but the other team won. What do you do when they come close to give you a handshake? 2', 'Start crying(Fnatic Rekkless did this on live broadcast, so why won\'t you do the same?) 2', 'Leave your pride aside and give them a handshake 2', 'Ignore them 2', 'Hug them 2', '2', 'Video Game Events', '2'),
(139, 'You have a raid meeting in 5 minutes, but your food hasn\'t arrived yet, What do you do? 2', 'Ask your team to wait for you so that you won\'t need to go afk. 2', 'Leave the raid when food comes. 2', 'Don\'t join the raid. 2', 'Make the delivery man wait until you finish your raid. 2', '1', 'Video Game Events', '2'),
(140, 'You are at an event where you can try out a new game. The line is quite long, but you really want to finish that level. What do you do? 2', 'Let the others play too. They paid for the event too. 2', 'It\'s only 5 more minutes, they can\'t wait. 2', 'You have no reason to let them play. 2', 'Mock them by starting the next level too 2', '1', 'Video Game Events', '2'),
(141, 'You are losing the tournament, but you know a secret technique your character can do to win the fight, even though it is kind of banned. What do you do? 2', 'Use that move 2', 'Pretend you used two consecutive moves that looked like that one 2', 'You don\'t want to be seen as a cheater, so you will win or lose fair and square. 2', 'Start blaming the other player for choosing an Op character. 2', '3', 'Video Game Events', '2'),
(142, 'You could have won the championship, but the other team won. What do you do when they come close to give you a handshake? 3', 'Start crying(Fnatic Rekkless did this on live broadcast, so why won\'t you do the same?) 3', 'Leave your pride aside and give them a handshake 3', 'Ignore them 3', 'Hug them 3', '2', 'Video Game Events', '3'),
(143, 'You have a raid meeting in 5 minutes, but your food hasn\'t arrived yet, What do you do? 3', 'Ask your team to wait for you so that you won\'t need to go afk. 3', 'Leave the raid when food comes. 3', 'Don\'t join the raid. 3', 'Make the delivery man wait until you finish your raid. 3', '1', 'Video Game Events', '3'),
(144, 'You are at an event where you can try out a new game. The line is quite long, but you really want to finish that level. What do you do? 3', 'Let the others play too. They paid for the event too. 3', 'It\'s only 5 more minutes, they can\'t wait. 3', 'You have no reason to let them play. 3', 'Mock them by starting the next level too 3', '1', 'Video Game Events', '3'),
(145, 'You are losing the tournament, but you know a secret technique your character can do to win the fight, even though it is kind of banned. What do you do? 3', 'Use that move 3', 'Pretend you used two consecutive moves that looked like that one 3', 'You don\'t want to be seen as a cheater, so you will win or lose fair and square. 3', 'Start blaming the other player for choosing an Op character. 3', '3', 'Video Game Events', '3'),
(146, 'There is a new Catan expansion coming out, but the booth only has 2 left. What do you do?', 'Fight with the other people over it', 'Gamble ', 'Wait in line like a civilised person', 'Pray to God they have more in stock', '3', 'Game Events', '0'),
(147, 'You are on a Cards Against Humanity session with your friends and you have a kind of offensive card that will fit well. What do you do?', 'Use it', 'Think about the others around you', 'Yolo', 'Use it and apologise for its content', '2', 'Game Events', '0'),
(148, 'Bowling Night. You are having fun winning, but a friend seems to have problems learning how to play bowling', 'Help them understand. Show them the ropes so they can have fun alongside you.', 'Laugh at them', 'Don\'t do anything', 'Leave the place', '1', 'Game Events', '0'),
(149, 'You are playing pool and you realise your friend has a greater chance to win than you. What do you do?', 'Sabotage them', 'Play fair and square', 'Throw a tantrum', 'Ask them to help you get better', '2', 'Game Events', '0'),
(150, 'There is a new Catan expansion coming out, but the booth only has 2 left. What do you do? 1', 'Fight with the other people over it 1', 'Gamble  1', 'Wait in line like a civilised person 1', 'Pray to God they have more in stock 1', '3', 'Game Events', '1'),
(151, 'You are on a Cards Against Humanity session with your friends and you have a kind of offensive card that will fit well. What do you do? 1', 'Use it 1', 'Think about the others around you 1', 'Yolo 1', 'Use it and apologise for its content 1', '2', 'Game Events', '1'),
(152, 'Bowling Night. You are having fun winning, but a friend seems to have problems learning how to play bowling 1', 'Help them understand. Show them the ropes so they can have fun alongside you. 1', 'Laugh at them 1', 'Don\'t do anything 1', 'Leave the place 1', '1', 'Game Events', '1'),
(153, 'You are playing pool and you realise your friend has a greater chance to win than you. What do you do? 1', 'Sabotage them 1', 'Play fair and square 1', 'Throw a tantrum 1', 'Ask them to help you get better 1', '2', 'Game Events', '1'),
(154, 'There is a new Catan expansion coming out, but the booth only has 2 left. What do you do? 2', 'Fight with the other people over it 2', 'Gamble  2', 'Wait in line like a civilised person 2', 'Pray to God they have more in stock 2', '3', 'Game Events', '2'),
(155, 'You are on a Cards Against Humanity session with your friends and you have a kind of offensive card that will fit well. What do you do? 2', 'Use it 2', 'Think about the others around you 2', 'Yolo 2', 'Use it and apologise for its content 2', '2', 'Game Events', '2'),
(156, 'Bowling Night. You are having fun winning, but a friend seems to have problems learning how to play bowling 2', 'Help them understand. Show them the ropes so they can have fun alongside you. 2', 'Laugh at them 2', 'Don\'t do anything 2', 'Leave the place 2', '1', 'Game Events', '2'),
(157, 'You are playing pool and you realise your friend has a greater chance to win than you. What do you do? 2', 'Sabotage them 2', 'Play fair and square 2', 'Throw a tantrum 2', 'Ask them to help you get better 2', '2', 'Game Events', '2'),
(158, 'There is a new Catan expansion coming out, but the booth only has 2 left. What do you do? 3', 'Fight with the other people over it 3', 'Gamble  3', 'Wait in line like a civilised person 3', 'Pray to God they have more in stock 3', '3', 'Game Events', '3'),
(159, 'You are on a Cards Against Humanity session with your friends and you have a kind of offensive card that will fit well. What do you do? 3', 'Use it 3', 'Think about the others around you 3', 'Yolo 3', 'Use it and apologise for its content 3', '2', 'Game Events', '3'),
(160, 'Bowling Night. You are having fun winning, but a friend seems to have problems learning how to play bowling 3', 'Help them understand. Show them the ropes so they can have fun alongside you. 3', 'Laugh at them 3', 'Don\'t do anything 3', 'Leave the place 3', '1', 'Game Events', '3'),
(161, 'You are playing pool and you realise your friend has a greater chance to win than you. What do you do? 3', 'Sabotage them 3', 'Play fair and square 3', 'Throw a tantrum  3', 'Ask them to help you get better 3', '2', 'Game Events', '3'),
(162, 'I lost all my will to take this seriously. Sports Events ', 'Yes', ' No', ' Maybe', 'Pick this', '4', 'Sports Events', '0'),
(163, 'Do you like sports?', 'Yes', 'Maybe', 'Pick this for free points', 'No', '3', 'Sports Events', '0'),
(164, 'Is it football or soccer?', 'Depends on the region', 'Football', 'Soccer', 'It doesn\'t matter', '1', 'Sports Events', '0'),
(165, 'Last question, yaaay', 'I did it', '2000 years later', 'Pick this', 'Can\'t believe it\'s over', '3', 'Sports Events', '0'),
(166, 'I lost all my will to take this seriously. Sports Events  1', 'Yes 1', ' No 1', ' Maybe 1', 'Pick this 1', '4', 'Sports Events', '1'),
(167, 'Do you like sports? 1', 'Yes 1', 'Maybe 1', 'Pick this for free points 1', 'No 1', '3', 'Sports Events', '1'),
(168, 'Is it football or soccer? 1', 'Depends on the region 1', 'Football 1', 'Soccer 1', 'It doesn\'t matter 1', '1', 'Sports Events', '1'),
(169, 'Last question, yaaay 1', 'I did it 1', '2000 years later 1', 'Pick this 1', 'Can\'t believe it\'s over 1', '3', 'Sports Events', '1'),
(170, 'I lost all my will to take this seriously. Sports Events 2', 'Yes 2', ' No 2', ' Maybe 2', 'Pick this 2', '4', 'Sports Events', '2'),
(171, 'Do you like sports? 2', 'Yes 2', 'Maybe 2', 'Pick this for free points 2', 'No 2', '3', 'Sports Events', '2'),
(172, 'Is it football or soccer? 2', 'Depends on the region 2', 'Football 2', 'Soccer 2', 'It doesn\'t matter 2', '1', 'Sports Events', '2'),
(173, 'Last question, yaaay 2', 'I did it 2', '2000 years later 2', 'Pick this 2', 'Can\'t believe it\'s over 2', '3', 'Sports Events', '2'),
(174, 'I lost all my will to take this seriously. Sports Events 3', 'Yes 3', ' No 3', ' Maybe 3', 'Pick this 3', '4', 'Sports Events', '3'),
(175, 'Do you like sports? 3', 'Yes 3', 'Maybe 3', 'Pick this for free points 3', 'No 3', '3', 'Sports Events', '3'),
(176, 'Is it football or soccer? 3', 'Depends on the region 3', 'Football 3', 'Soccer 3', 'It doesn\'t matter 3', '1', 'Sports Events', '3'),
(177, 'Last question, yaaay 3', 'I did it 3', '2000 years later 3', 'Pick this 3', 'Can\'t believe it\'s over 3', '3', 'Sports Events', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id_question`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
