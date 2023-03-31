-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 07:09 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aman_mit_exam_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(30) DEFAULT NULL,
  `admin_name` varchar(30) DEFAULT NULL,
  `admin_password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
('admin001', 'aman', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `ques_bank`
--

CREATE TABLE `ques_bank` (
  `Exam_name` varchar(100) NOT NULL,
  `Set_Name` varchar(100) NOT NULL,
  `Q_id` varchar(500) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `option_1` varchar(500) NOT NULL,
  `option_2` varchar(500) NOT NULL,
  `option_3` varchar(500) NOT NULL,
  `option_4` varchar(500) NOT NULL,
  `ans` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques_bank`
--

INSERT INTO `ques_bank` (`Exam_name`, `Set_Name`, `Q_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `ans`) VALUES
('Web Development', 'SET-1', 'QUES201225A393484807SR', 'What does the â€œbreakâ€ statement do?', 'Cancels the current event.', 'Aborts the current function.', 'Aborts the current loop or switch statement.', 'Simulates a JavaScript crash.', 'Aborts the current loop or switch statement.'),
('Web Development', 'SET-1', 'QUES201225A272005307SR', 'A webpage displays a picture. Whatï»¿ï»¿ï»¿ ï»¿ï»¿tag ï»¿ï»¿ï»¿ï»¿ï»¿was used to display that picture?', '< picture >', '< image >', '< img >', '< src >', '< img >'),
('Web Development', 'SET-1', 'QUES201225A300495307SR', '< b > tag makes the enclosed text bold. What is other tag to make text bold?', '< strong >', '< bold >', '.', '.', '< strong >'),
('Web Development', 'SET-1', 'QUES201225A720415507SR', 'HTML stands for?', 'High Text Markup Language', 'Hyper Text Markup Language', 'Hyper Tabular Markup Language', 'None of these', 'Hyper Text Markup Language'),
('Web Development', 'SET-1', 'QUES201225A667115607SR', 'which of the following tag is used to mark a begining of paragraph', '< p >', '< br >', '< td >', '< tr >', '< p >'),
('Web Development', 'SET-1', 'QUES201225A848385607SR', 'Correct HTML tag for the largest heading is', '< h1 >', '< h2 >', '< h6 >', '< h7 >', '< h1 >'),
('Web Development', 'SET-1', 'QUES201225A444485707SR', 'Markup tags tell the web browser', 'How to organise the page', 'How to display the page', 'How to display message box on page', 'None of these', 'How to display the page'),
('Web Development', 'SET-1', 'QUES201225A815495807SR', 'HTML is what type of language ?', 'Scripting Language', 'Markup Language', 'Programming Language', 'Network Protocol', 'Markup Language'),
('Web Development', 'SET-1', 'QUES201225A299285907SR', 'HTML uses', 'User defined tags', 'Pre-specified tags', 'Fixed tags defined by the language', 'Tags only for linking', 'Fixed tags defined by the language'),
('Web Development', 'SET-1', 'QUES201225A638080008SR', 'The year in which HTML was first proposed _______', '1990', '2000', '1980', '2014', '1990'),
('Web Development', 'SET-1', 'QUES201225A734030108SR', 'Who is Known as the father of World Wide Web (WWW)?', 'Robert Cailliau', 'Tim Thompson', 'Tim Berners-Lee', 'Charles Darwin', 'Tim Berners-Lee'),
('Web Development', 'SET-1', 'QUES201225A773353408SR', 'What should be the first tag in any HTML document?', '< head >', '< title >', '< html >', '< document >', '< html >'),
('Web Development', 'SET-1', 'QUES201225A430133508SR', 'How can you make a auto list with numbers?', '< dl >', '< ol >', '< list >', '< ul >', '< ol >'),
('Web Development', 'SET-1', 'QUES201225A309033608SR', 'Which of the following is not a browser ?', 'Microsofts Bing', 'Netscape Navigator', 'Mozilla Firefox', 'Opera', 'Microsofts Bing'),
('Web Development', 'SET-1', 'QUES201225A325023908SR', 'Which format usually works best for photos ?', 'JPG', 'HTML', 'GIF', 'DOCX', 'JPG'),
('Web Development', 'SET-1', 'QUES201225A522514108SR', 'What tag is used to add columns to tables ?', '< colspan >', '< td >', '< tr >', 'column', '< td >'),
('Web Development', 'SET-1', 'QUES201225A201404208SR', 'Choose the correct HTML tag to make a text italic', '< italic >', '< i >', '.', '.', '< i >'),
('Web Development', 'SET-1', 'QUES201225A286414308SR', 'Choose the correct HTML tag to make a text bold', '< b >', '< bold >', '.', '.', '< b >'),
('Web Development', 'SET-1', 'QUES201225A920294408SR', 'The < title > tag belongs where in your HTML ?', 'head', 'html', 'body', 'arm', 'head'),
('Web Development', 'SET-1', 'QUES201225A141135108SR', 'What is the correct HTML for adding a background color?', '< body background=â€yellowâ€ >', '< background >yellow< /background >', '< body style=â€background-color:whiteâ€ >', 'None of the above', '< body style=â€background-color:whiteâ€ >'),
('Web Development', 'SET-1', 'QUES201225A408255208SR', 'To add rows to your tables use which tags?', '< td > and < /td >', '< cr > and < /cr >', '< tr > and  < /tr >', '< th > and < /th >', '< tr > and  < /tr >'),
('Web Development', 'SET-1', 'QUES201225A190505308SR', 'Choose the correct HTML to left-align the content inside a tablecell', '< td valign=â€leftâ€ >', '< tdleft >', '< td align=â€leftâ€ >', '< td leftalign >', '< td align=â€leftâ€ >'),
('Web Development', 'SET-1', 'QUES201225A215325408SR', 'Which is NOT a predefined target for links ?', '_blank', '_son', '_parent', '_self', '_son'),
('Web Development', 'SET-1', 'QUES201225A336285508SR', 'How many characters can be written with 1 Kilobyte ?', '1024 bytes', '1024 bits', '.', '.', '1024 bytes'),
('Web Development', 'SET-1', 'QUES201225A423255608SR', 'To start a list at the count of 3, use which ?', '< ol start=â€3â€³ >', '< ol begin=â€3â€³ >', '< ol list=â€5â€³ >', '< ol type=â€5â€³ >', '< ol start=â€3â€³ >'),
('Web Development', 'SET-1', 'QUES201225A187125708SR', 'Who is making the Web standards?', 'The World Wide Web Consortium', 'Mozilla', 'Microsoft', 'Subline Text', 'The World Wide Web Consortium'),
('Web Development', 'SET-1', 'QUES201225A457005808SR', 'What is the correct HTML tag for inserting a line break?', '< lb / >', '< br / >', '< break / >', 'None of the above', '< br / >'),
('Web Development', 'SET-1', 'QUES201225A659375808SR', 'The attribute used to choose the type of font in HTML is ?', 'Character', 'Face', 'Text-type', 'font', 'Face'),
('Web Development', 'SET-1', 'QUES201225A830170009SR', 'What is the correct HTML for creating a hyperlink?', '< a name=â€http://www.parasinfotech.inâ€ >PARAS Infotech< /a >', '< a href=â€http://www.parasinfotech.inâ€ >PARAS Infotech< /a >', '< a url=â€http://www.parasinfotech.inâ€ >PARAS Infotech< /a >', '< a > name=â€http://www.parasinfotech.inâ€ PARAS Infotech< /a >', '< a href=â€http://www.parasinfotech.inâ€ >PARAS Infotech< /a >'),
('Web Development', 'SET-1', 'QUES201225A770210109SR', 'Which program do you need to write HTML?', 'Any text editor', 'HTML-development suite 4', 'A graphics program', 'None of the above', 'Any text editor'),
('Web Development', 'SET-1', 'QUES201225A197050309SR', 'To seperate single list items use ?', '< li > and < /li >', '< ol > and < /ol >', '< ul > and < /ul >', '< list > and < list >', '< li > and < /li >'),
('Web Development', 'SET-1', 'QUES201225A232560609SR', 'What does CSS stand for?', 'Creative Style Sheets', 'Colorful Style Sheets', 'Cascading Style Sheets', 'Computer Style Sheets', 'Cascading Style Sheets'),
('Web Development', 'SET-1', 'QUES201225A831020909SR', 'What is the correct HTML for referring to an external style sheet?', '< stylesheet>mystyle.css</stylesheet / >', '< style src=â€mystyle.cssâ€ / >', '< link rel=â€stylesheetâ€ type=â€text/cssâ€ href=â€mystyle.cssâ€ >', 'None of the above', '< link rel=â€stylesheetâ€ type=â€text/cssâ€ href=â€mystyle.cssâ€ >'),
('Web Development', 'SET-1', 'QUES201225A891470909SR', 'Where in an HTML document is the correct place to refer to an external style sheet?', 'At the end of the document', 'In the < head > section', 'At the top of the document', 'In the < body > section', 'In the < head > section'),
('Web Development', 'SET-1', 'QUES201225A764401009SR', 'Which HTML tag is used to define an internal style sheet?', '< style >', '< css >', '< script >', '< head >', '< style >'),
('Web Development', 'SET-1', 'QUES201225A217061109SR', 'Which HTML attribute is used to define inline styles?', 'font', 'class', 'styles', 'style', 'style'),
('Web Development', 'SET-1', 'QUES201225A819451109SR', 'Which is the correct CSS syntax?', 'body {color: black}', '{body;color:black}', '{body:color=black(body}', 'body_color=black', 'body {color: black}'),
('Web Development', 'SET-1', 'QUES201225A390361209SR', 'How do you insert a comment in a CSS file?', '// this is a comment //', '/* this is a comment */', '#   this is a comment  #', '< !-- this is a comment -- >', '/* this is a comment */'),
('Web Development', 'SET-1', 'QUES201225A831251309SR', 'Which property is used to change the background color?', 'bgcolor:', 'background-color:', 'color:', 'backcolor:', 'background-color:'),
('Web Development', 'SET-1', 'QUES201225A216041409SR', 'Which CSS property controls the text size?', 'font-size', 'font-style', 'text-style', 'text-size', 'font-size'),
('Web Development', 'SET-1', 'QUES201225A379551409SR', 'What is the correct CSS syntax for making all the < p > elements bold?', '< p style=â€text-size:boldâ€ >', 'p {font-weight:bold}', 'p {text-size:bold}', '< p style=â€font-size:boldâ€ >', 'p {font-weight:bold}'),
('Web Development', 'SET-1', 'QUES201225A710491509SR', 'How do you display hyperlinks without an underline?', 'a {text-decoration:no underline}', 'a {decoration:no underline}', 'a {text-decoration:none}', 'a {underline:none}', 'a {text-decoration:none}'),
('Web Development', 'SET-1', 'QUES201225A182351609SR', 'How do you make each word in a text start with a capital letter?', 'text-transform:capitalize', 'You canâ€™t do that with CSS', 'text-transform:uppercase', 'text-transform:firstletter', 'text-transform:capitalize'),
('Web Development', 'SET-1', 'QUES201225A124221709SR', 'How do you change the font of an element?', 'font-family:', 'font-face', '.', '.', 'font-family:'),
('Web Development', 'SET-1', 'QUES201225A937151809SR', 'How do you make a list that lists its items with squares?', 'list-type: square', 'type: square', 'type: 2', 'list-style-type: square', 'list-style-type: square'),
('Web Development', 'SET-1', 'QUES201225A177231909SR', 'If we want define style for an unique element, then which css selector will we use ?', 'id', 'text', 'class', 'name', 'id'),
('Web Development', 'SET-1', 'QUES201225A501082109SR', 'If we want to show an Arrow as cursor, then which value we will use ?', 'pointer', 'default', 'arrow', 'arr', 'default'),
('Web Development', 'SET-1', 'QUES201225A276532109SR', 'If we want to use a nice looking green dotted border around an image, which css property will we use', 'border-color', 'border-decoration', 'border-style', 'border-line', 'border-style'),
('Web Development', 'SET-1', 'QUES201225A393484807SR', 'What does the â€œbreakâ€ statement do?', 'Cancels the current event.', 'Aborts the current function.', 'Aborts the current loop or switch statement.', 'Simulates a JavaScript crash.', 'Aborts the current loop or switch statement.'),
('Web Development', 'SET-1', 'QUES201225A272005307SR', 'A webpage displays a picture. Whatï»¿ï»¿ï»¿ ï»¿ï»¿tag ï»¿ï»¿ï»¿ï»¿ï»¿was used to display that picture?', '< picture >', '< image >', '< img >', '< src >', '< img >'),
('Web Development', 'SET-1', 'QUES201225A300495307SR', '< b > tag makes the enclosed text bold. What is other tag to make text bold?', '< strong >', '< bold >', '.', '.', '< strong >'),
('Web Development', 'SET-1', 'QUES201225A720415507SR', 'HTML stands for?', 'High Text Markup Language', 'Hyper Text Markup Language', 'Hyper Tabular Markup Language', 'None of these', 'Hyper Text Markup Language'),
('Web Development', 'SET-1', 'QUES201225A667115607SR', 'which of the following tag is used to mark a begining of paragraph', '< p >', '< br >', '< td >', '< tr >', '< p >'),
('Web Development', 'SET-1', 'QUES201225A848385607SR', 'Correct HTML tag for the largest heading is', '< h1 >', '< h2 >', '< h6 >', '< h7 >', '< h1 >'),
('Web Development', 'SET-1', 'QUES201225A444485707SR', 'Markup tags tell the web browser', 'How to organise the page', 'How to display the page', 'How to display message box on page', 'None of these', 'How to display the page'),
('Web Development', 'SET-1', 'QUES201225A815495807SR', 'HTML is what type of language ?', 'Scripting Language', 'Markup Language', 'Programming Language', 'Network Protocol', 'Markup Language'),
('Web Development', 'SET-1', 'QUES201225A299285907SR', 'HTML uses', 'User defined tags', 'Pre-specified tags', 'Fixed tags defined by the language', 'Tags only for linking', 'Fixed tags defined by the language'),
('Web Development', 'SET-1', 'QUES201225A638080008SR', 'The year in which HTML was first proposed _______', '1990', '2000', '1980', '2014', '1990'),
('Web Development', 'SET-1', 'QUES201225A734030108SR', 'Who is Known as the father of World Wide Web (WWW)?', 'Robert Cailliau', 'Tim Thompson', 'Tim Berners-Lee', 'Charles Darwin', 'Tim Berners-Lee'),
('Web Development', 'SET-1', 'QUES201225A773353408SR', 'What should be the first tag in any HTML document?', '< head >', '< title >', '< html >', '< document >', '< html >'),
('Web Development', 'SET-1', 'QUES201225A430133508SR', 'How can you make a auto list with numbers?', '< dl >', '< ol >', '< list >', '< ul >', '< ol >'),
('Web Development', 'SET-1', 'QUES201225A309033608SR', 'Which of the following is not a browser ?', 'Microsofts Bing', 'Netscape Navigator', 'Mozilla Firefox', 'Opera', 'Microsofts Bing'),
('Web Development', 'SET-1', 'QUES201225A325023908SR', 'Which format usually works best for photos ?', 'JPG', 'HTML', 'GIF', 'DOCX', 'JPG'),
('Web Development', 'SET-1', 'QUES201225A522514108SR', 'What tag is used to add columns to tables ?', '< colspan >', '< td >', '< tr >', 'column', '< td >'),
('Web Development', 'SET-1', 'QUES201225A201404208SR', 'Choose the correct HTML tag to make a text italic', '< italic >', '< i >', '.', '.', '< i >'),
('Web Development', 'SET-1', 'QUES201225A286414308SR', 'Choose the correct HTML tag to make a text bold', '< b >', '< bold >', '.', '.', '< b >'),
('Web Development', 'SET-1', 'QUES201225A920294408SR', 'The < title > tag belongs where in your HTML ?', 'head', 'html', 'body', 'arm', 'head'),
('Web Development', 'SET-1', 'QUES201225A141135108SR', 'What is the correct HTML for adding a background color?', '< body background=â€yellowâ€ >', '< background >yellow< /background >', '< body style=â€background-color:whiteâ€ >', 'None of the above', '< body style=â€background-color:whiteâ€ >'),
('Web Development', 'SET-1', 'QUES201225A408255208SR', 'To add rows to your tables use which tags?', '< td > and < /td >', '< cr > and < /cr >', '< tr > and  < /tr >', '< th > and < /th >', '< tr > and  < /tr >'),
('Web Development', 'SET-1', 'QUES201225A190505308SR', 'Choose the correct HTML to left-align the content inside a tablecell', '< td valign=â€leftâ€ >', '< tdleft >', '< td align=â€leftâ€ >', '< td leftalign >', '< td align=â€leftâ€ >'),
('Web Development', 'SET-1', 'QUES201225A215325408SR', 'Which is NOT a predefined target for links ?', '_blank', '_son', '_parent', '_self', '_son'),
('Web Development', 'SET-1', 'QUES201225A336285508SR', 'How many characters can be written with 1 Kilobyte ?', '1024 bytes', '1024 bits', '.', '.', '1024 bytes'),
('Web Development', 'SET-1', 'QUES201225A423255608SR', 'To start a list at the count of 3, use which ?', '< ol start=â€3â€³ >', '< ol begin=â€3â€³ >', '< ol list=â€5â€³ >', '< ol type=â€5â€³ >', '< ol start=â€3â€³ >'),
('Web Development', 'SET-1', 'QUES201225A187125708SR', 'Who is making the Web standards?', 'The World Wide Web Consortium', 'Mozilla', 'Microsoft', 'Subline Text', 'The World Wide Web Consortium'),
('Web Development', 'SET-1', 'QUES201225A457005808SR', 'What is the correct HTML tag for inserting a line break?', '< lb / >', '< br / >', '< break / >', 'None of the above', '< br / >'),
('Web Development', 'SET-1', 'QUES201225A659375808SR', 'The attribute used to choose the type of font in HTML is ?', 'Character', 'Face', 'Text-type', 'font', 'Face'),
('Web Development', 'SET-1', 'QUES201225A830170009SR', 'What is the correct HTML for creating a hyperlink?', '< a name=â€http://www.parasinfotech.inâ€ >PARAS Infotech< /a >', '< a href=â€http://www.parasinfotech.inâ€ >PARAS Infotech< /a >', '< a url=â€http://www.parasinfotech.inâ€ >PARAS Infotech< /a >', '< a > name=â€http://www.parasinfotech.inâ€ PARAS Infotech< /a >', '< a href=â€http://www.parasinfotech.inâ€ >PARAS Infotech< /a >'),
('Web Development', 'SET-1', 'QUES201225A770210109SR', 'Which program do you need to write HTML?', 'Any text editor', 'HTML-development suite 4', 'A graphics program', 'None of the above', 'Any text editor'),
('Web Development', 'SET-1', 'QUES201225A197050309SR', 'To seperate single list items use ?', '< li > and < /li >', '< ol > and < /ol >', '< ul > and < /ul >', '< list > and < list >', '< li > and < /li >'),
('Web Development', 'SET-1', 'QUES201225A232560609SR', 'What does CSS stand for?', 'Creative Style Sheets', 'Colorful Style Sheets', 'Cascading Style Sheets', 'Computer Style Sheets', 'Cascading Style Sheets'),
('Web Development', 'SET-1', 'QUES201225A831020909SR', 'What is the correct HTML for referring to an external style sheet?', '< stylesheet>mystyle.css</stylesheet / >', '< style src=â€mystyle.cssâ€ / >', '< link rel=â€stylesheetâ€ type=â€text/cssâ€ href=â€mystyle.cssâ€ >', 'None of the above', '< link rel=â€stylesheetâ€ type=â€text/cssâ€ href=â€mystyle.cssâ€ >'),
('Web Development', 'SET-1', 'QUES201225A891470909SR', 'Where in an HTML document is the correct place to refer to an external style sheet?', 'At the end of the document', 'In the < head > section', 'At the top of the document', 'In the < body > section', 'In the < head > section'),
('Web Development', 'SET-1', 'QUES201225A764401009SR', 'Which HTML tag is used to define an internal style sheet?', '< style >', '< css >', '< script >', '< head >', '< style >'),
('Web Development', 'SET-1', 'QUES201225A217061109SR', 'Which HTML attribute is used to define inline styles?', 'font', 'class', 'styles', 'style', 'style'),
('Web Development', 'SET-1', 'QUES201225A819451109SR', 'Which is the correct CSS syntax?', 'body {color: black}', '{body;color:black}', '{body:color=black(body}', 'body_color=black', 'body {color: black}'),
('Web Development', 'SET-1', 'QUES201225A390361209SR', 'How do you insert a comment in a CSS file?', '// this is a comment //', '/* this is a comment */', '#   this is a comment  #', '< !-- this is a comment -- >', '/* this is a comment */'),
('Web Development', 'SET-1', 'QUES201225A831251309SR', 'Which property is used to change the background color?', 'bgcolor:', 'background-color:', 'color:', 'backcolor:', 'background-color:'),
('Web Development', 'SET-1', 'QUES201225A216041409SR', 'Which CSS property controls the text size?', 'font-size', 'font-style', 'text-style', 'text-size', 'font-size'),
('Web Development', 'SET-1', 'QUES201225A379551409SR', 'What is the correct CSS syntax for making all the < p > elements bold?', '< p style=â€text-size:boldâ€ >', 'p {font-weight:bold}', 'p {text-size:bold}', '< p style=â€font-size:boldâ€ >', 'p {font-weight:bold}'),
('Web Development', 'SET-1', 'QUES201225A710491509SR', 'How do you display hyperlinks without an underline?', 'a {text-decoration:no underline}', 'a {decoration:no underline}', 'a {text-decoration:none}', 'a {underline:none}', 'a {text-decoration:none}'),
('Web Development', 'SET-1', 'QUES201225A182351609SR', 'How do you make each word in a text start with a capital letter?', 'text-transform:capitalize', 'You canâ€™t do that with CSS', 'text-transform:uppercase', 'text-transform:firstletter', 'text-transform:capitalize'),
('Web Development', 'SET-1', 'QUES201225A124221709SR', 'How do you change the font of an element?', 'font-family:', 'font-face', '.', '.', 'font-family:'),
('Web Development', 'SET-1', 'QUES201225A937151809SR', 'How do you make a list that lists its items with squares?', 'list-type: square', 'type: square', 'type: 2', 'list-style-type: square', 'list-style-type: square'),
('Web Development', 'SET-1', 'QUES201225A177231909SR', 'If we want define style for an unique element, then which css selector will we use ?', 'id', 'text', 'class', 'name', 'id'),
('Web Development', 'SET-1', 'QUES201225A501082109SR', 'If we want to show an Arrow as cursor, then which value we will use ?', 'pointer', 'default', 'arrow', 'arr', 'default'),
('Web Development', 'SET-1', 'QUES201225A276532109SR', 'If we want to use a nice looking green dotted border around an image, which css property will we use', 'border-color', 'border-decoration', 'border-style', 'border-line', 'border-style'),
('Web Development', 'SET-1', 'QUES201225A744492209SR', 'What should be the table width, so that the width of a table adjust to the current width of the browser window?', '640 pixels', '100%', 'full-screen', '1024 px', '100%'),
('Web Development', 'SET-1', 'QUES201225A340462309SR', 'When we write < img src="img.png" >, what "img.png" inside double quote implies?', 'element', 'attribute', 'value', 'property', 'value'),
('Web Development', 'SET-1', 'QUES201225A481362409SR', 'Which css property you will use if you want to add some margin between a DIV s border and its inner text ?', 'spacing', 'margin', 'padding', 'inner-margin', 'padding'),
('Web Development', 'SET-1', 'QUES201225A277452509SR', 'The default value of ', 'fixed', 'absolute', 'inherit', 'relative', 'relative');

-- --------------------------------------------------------

--
-- Table structure for table `student_expression`
--

CREATE TABLE `student_expression` (
  `ques_id` varchar(200) NOT NULL,
  `stu_id` varchar(200) NOT NULL,
  `exam_id` varchar(200) NOT NULL,
  `question` varchar(500) NOT NULL,
  `right_ans` varchar(200) NOT NULL,
  `stu_ans` varchar(200) NOT NULL,
  `timing` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_expression`
--

INSERT INTO `student_expression` (`ques_id`, `stu_id`, `exam_id`, `question`, `right_ans`, `stu_ans`, `timing`) VALUES
('QUES201225A393484807SR', 'st220503071103', 'Web Development', 'What does the â€œbreakâ€ statement do?', 'Aborts the current loop or switch statement.', 'Aborts the current loop or switch statement.', '2022-05-22 11:29:20'),
('QUES201225A272005307SR', 'st220503071103', 'Web Development', 'A webpage displays a picture. Whatï»¿ï»¿ï»¿ ï»¿ï»¿tag ï»¿ï»¿ï»¿ï»¿ï»¿was used to display that picture?', '< img >', '< image >', '2022-05-22 11:29:36'),
('QUES201225A300495307SR', 'st220503071103', 'Web Development', '< b > tag makes the enclosed text bold. What is other tag to make text bold?', '< strong >', '< bold >', '2022-05-22 11:30:29'),
('QUES201225A667115607SR', 'st220503071103', 'Web Development', 'which of the following tag is used to mark a begining of paragraph', '< p >', '< tr >', '2022-05-22 11:34:50'),
('QUES201225A848385607SR', 'st220503071103', 'Web Development', 'Correct HTML tag for the largest heading is', '< h1 >', '< h6 >', '2022-05-22 11:38:43'),
('QUES201225A444485707SR', 'st220503071103', 'Web Development', 'Markup tags tell the web browser', 'How to display the page', 'How to display message box on page', '2022-05-22 11:38:45'),
('QUES201225A815495807SR', 'st220503071103', 'Web Development', 'HTML is what type of language ?', 'Markup Language', 'Programming Language', '2022-05-22 11:38:48'),
('QUES201225A299285907SR', 'st220503071103', 'Web Development', 'HTML uses', 'Fixed tags defined by the language', 'Fixed tags defined by the language', '2022-05-22 11:38:51'),
('QUES201225A638080008SR', 'st220503071103', 'Web Development', 'The year in which HTML was first proposed _______', '1990', '1980', '2022-05-22 11:38:54'),
('QUES201225A937151809SR', 'st220503071103', 'Web Development', 'How do you make a list that lists its items with squares?', 'list-style-type: square', 'type: 2', '2022-05-22 11:56:11'),
('QUES201225A830170009SR', 'st220503071103', 'Web Development', 'What is the correct HTML for creating a hyperlink?', '< a href=â€http://www.parasinfotech.inâ€ >PARAS Infotech< /a >', '< a > name=â€http://www.parasinfotech.inâ€ PARAS Infotech< /a >', '2022-05-22 12:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `student_records`
--

CREATE TABLE `student_records` (
  `stu_ID` varchar(30) DEFAULT NULL,
  `Stu_name` varchar(30) DEFAULT NULL,
  `Reg_date` date DEFAULT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `m_name` varchar(30) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `class` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `re_pas` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_records`
--

INSERT INTO `student_records` (`stu_ID`, `Stu_name`, `Reg_date`, `f_name`, `m_name`, `Dob`, `phone`, `email`, `class`, `password`, `re_pas`) VALUES
('st220410025751', 'rahul', '2022-04-20', 'ram singh', 'geeta devi', '2022-04-16', '9927006874', 'rahu432@gmail.com', 'Bca', '9876', '9876'),
('st220503071103', 'Aman singh', '2201-03-12', 'mohan singh', 'seema devi', '2001-08-23', '97863548874', 'amanbisht572@gmail.com', 'Mca', '12345', '12345'),
('st220517054802', 'ankit ', '2022-06-01', 'Amit kumar', 'kamla Devi', '2022-05-11', '876543456789', 'ankduudik@gmail.com', 'Mca', '2334', '43211');

-- --------------------------------------------------------

--
-- Table structure for table `student_results_record`
--

CREATE TABLE `student_results_record` (
  `stu_id` varchar(200) NOT NULL,
  `exam_id` varchar(200) NOT NULL,
  `ob_marks` int(11) NOT NULL,
  `t_marks` int(11) NOT NULL,
  `timing` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_results_record`
--

INSERT INTO `student_results_record` (`stu_id`, `exam_id`, `ob_marks`, `t_marks`, `timing`) VALUES
('st220503071103', 'Web Development', 2, 100, '2022-05-22 12:13:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
