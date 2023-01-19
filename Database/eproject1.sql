-- phpMyAdmin SQL Dump
-- version 5.2.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2022 at 02:22 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject1`
--
drop database if exists `eproject1`;
create database if not exists `eproject1`;
use `eproject1`;
-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `logo`) VALUES
(11, 'Tesla', 'Tesla was founded in 2003 by a group of engineers who wanted to prove that people didn’t need to compromise to drive 3 – that 3 vehicles can be better, quicker and more fun to drive than 1 cars. Today, Tesla builds not only all-3 vehicles but also infinitely scalable clean energy generation and storage products. Tesla believes the faster the world stops relying on fossil fuels and moves towards a zero-emission future, the better.', '03-21-22543y-nghia-logo-tesla.jpg'),
(12, 'Toyota', 'Toyota Motor is a Japanese multinational automobile manufacturer headquartered in Toyota, Aichi, Japan. As of 2017, Toyota is the largest automaker. Toyota is the first automaker in the world to produce more than 10 million vehicles a year, which it has done since 2012, when it also reported production of its 200 millionth vehicle. As of May As of July 2014, Toyota is the largest listed company in Japan by market capitalization and by revenue.\r\n\r\n                ', '03-23-5069logo-xe-toyota.jpg'),
(20, 'Lamborghini', 'Manufacturing magnate Italian Ferruccio Lamborghini founded the company in 1963 with the objective of producing a refined grand touring car to compete with offerings from established marques such as Ferrari. The company\'s first models, such as the 350 GT, were released in the mid-1960s. Lamborghini was noted for the 1966 Miura sports coupé, which used a rear mid-engine, rear-wheel drive layout.\r\n                ', '03-51-33198lambo.jpg'),
(21, 'Honda', '\r\n                Honda is a Japanese multinational corporation headquartered in Minato district, Tokyo. It is the largest motorcycle manufacturer in the world since 1959 and the largest engine manufacturer in the world with a volume of more than 14 million units per year.', '03-52-12820logo-honda-oto.jpg'),
(22, 'Ferrari', 'Since the company\'s beginnings, Ferrari has been involved in motorsport, competing in a range of categories including Formula One and sports car racing through its Scuderia Ferrari sporting division as well as supplying cars and engines to other teams and for one-make race series.\r\n                ', '03-52-31328logo-ferrari-3.jpg'),
(23, 'Volkswagen', '\r\n                Volkswagen is a German car manufacturer, one of the largest car manufacturing companies in the world\r\nVolkswagen group. This is the top brand of Tap\r\nVolkswagen Group, the largest automaker in terms of worldwide sales in 2016 and 2017. The group\'s largest market is in China, generating 40% of sales and profits. Famous brands under the company include Audi, Bentley, Skoda, Lamborghini, Bugatti, SEAT, Porsche and Volkswagen.', '03-53-05183Volkswagen_logo.png'),
(24, 'NISSAN', '\r\n                Nissan is a Japanese car manufacturer and one of the largest car manufacturers in the world. In 1999, Nissan cooperated with the French car company Renault. Nissan is one of the top three Japanese competitors (along with Toyota and Honda) of the \"3 giants\" of American car production. Currently, it is Japan\'s third largest car manufacturer. They have invested around $1.4 billion in a new 3 vehicle development center in the UK. The facility is called \"Nissan EV36Zero\" and is Nissan\'s flagship 3 vehicle development center.', '03-53-259621584769947-89-ava-1584769733-width640height480.jpg'),
(25, 'Mazda', '\r\n                Mazda started as Toyo Cork Kogyo Co., Ltd., was established in Hiroshima, Japan, January 30, 1920. Toyo Cork Kogyo changed its name to Toyo Kogyo Co., Ltd. in 1927. In 1931 Toyo Kogyo changed from manufacturing machine tools to manufacturing cars with the introduction of the Mazda-Go autorickshaw. Toyo Kogyo manufactured weapons for the Japanese military during World War II, most notably the No. 99 rifles 30 to 35. The company officially changed its name to Mazda in 1984, although each car all bear that name from the beginning. The Mazda R360 was introduced in 1960, followed by the Mazda Carol in 1962.', '03-53-55263bieu-tuong-hang-xe-o-to-logo-mazda-hien-nay-co-hinh-tuong-gi-12345.jpg'),
(26, 'BMW', '\r\n                BMW is a German multinational company specializing in the production of umbrellas cars and motorbikes. The company was founded in 1916 as a manufacturer of aircraft engines, produced from 1917 to 1918 and again from 1933 to 1945. In 2015, BMW was a manufacturer of motor vehicles. twelfth largest in the world, with 2,279,503 vehicles produced. BMW is headquartered in Munich and manufactures motor vehicles in Germany, Brazil, China, India, South Africa, the United Kingdom, the United States and Mexico. On October 22, 2021, BMW said it will stop producing internal combustion engines at its main plant in Munich (Germany) by 2024 to start producing 3 models.', '03-54-16628web-183281280.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL,
  `range_id` int(11) NOT NULL,
  `transmission_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `fuel_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand_id`, `range_id`, `transmission_id`, `description`, `fuel_id`, `price`, `status`, `update_at`, `seller_id`) VALUES
(4, 'COROLLA ALTIS', 12, 3, 2, 'COROLLA ALTIS Hybrid version has dimensions of length x width x height of 4,630 x 1,780 x 1,455mm, respectively, with a wheelbase of 2,700mm. Thus, compared to the two versions Altis 1.8G and Altis 1.8V, it has the same body length, width and wheelbase, but the height has been increased by 20mm. In addition, the ground clearance is also 11mm higher than the rest of the Corolla Altis lineup.\r\n                ', 1, 33260, '0', '2022-06-30 01:09:27', 1),
(5, 'Mazda CX-5 2.5 Premium AT 2WD', 25, 1, 2, 'Following the success of the 6.0 product generation, Mazda continues to bring customers new products of the 6.5 generation with synchronous upgrades in design towards minimalism but elegance, outstanding performance. equipped with comfort and advanced safety features.\r\n                ', 1, 33782, '0', '2022-06-30 01:12:01', 1),
(6, 'Nissan Navara XE 2.5 AT', 24, 6, 2, '\r\n            Nissan Navara 2.5 AT 4WD 2022, also known as Nissan Navara VL 2022, is a high-end version in the Nissan pickup family. The version possesses superior equipment, facilities and a strong and safe operating system. Along with that, the youthful, dynamic, sporty and masculine design also helps to increase the car\'s attractiveness.    ', 2, 24099, '0', '2022-06-30 01:14:28', 1),
(9, 'Tesla Model 3 Standard Range RWD', 11, 11, 2, 'The Tesla Model 3 is an all-electric four-door sedan manufactured and sold by Tesla, Inc. As of today it\'s the most affordable car in the Tesla model range. The production of the Model 3 began in mid-2017 and right now Tesla is ramping it up.The Tesla Model 3 is the first vehicle built on Tesla’s third-generation platform. It aims to reduce the entry price for electric vehicles while not making any compromise on range and performance. Model 3 can get you anywhere you want to go — with industry-leading range and convenient charging options, all over the world. Model 3 charges up to 80% in 40 minutes on a Tesla Supercharger. It is designed to improve over time with regular software updates, introducing new features, functionality, and performance. For all of its futuristic ambitions, the Model 3 is a relatively conventional-looking four-door sedan. It incorporates many design elements from the more expensive Model S, making it immediately recognizable as a Tesla, but it’s significantly taller and less sporty looking than its low-slung, sleek-sedan sibling.\r\n\r\n\r\n\r\n                ', 3, 36200, '1', '2022-06-30 09:25:30', 1),
(10, 'Tesla Model X ', 11, 11, 2, '\r\n                The Tesla Model X is a mid-size luxury all-electric SUV made by Tesla, Inc. that uses falcon wing doors for access to the second and third row seats. It was developed from the sedan platform of the Tesla Model S. First deliveries of the Model X began in September 2015.Model X is the fastest and most capable sport utility vehicle in history', 3, 105840, '1', '2022-06-30 09:27:05', 1),
(11, 'Mazda 3 1.5L Deluxe', 25, 3, 2, '\r\n                Entering the 7th generation, Mazda3 Deluxe 2022 is equipped with a new chassis with overall dimensions of length x width x height of 4660 x 1795 x 1440 mm, respectively. Compared to its predecessor, the Mazda3 Deluxe is 200 mm longer and 25 mm lower, thereby helping the overall car look more luxurious and sportier.', 1, 27327, '1', '2022-06-30 09:33:40', 1),
(12, 'HONDA CITY', 21, 3, 2, '\r\n            This is a B-size model of Honda that competes with Vios or Accent. However, the high price and masculine design make City reach few customers and always rank behind Vios and City in the sales race.    ', 1, 28579, '1', '2022-06-30 09:36:13', 1),
(13, 'Nissan Kicks E-Power 2022', 24, 1, 2, 'On May 15, the Japanese automaker introduced Kicks e-Power 2022, the first crossover model launched in Southeast Asia. The new Kicks comes with e-Power technology or an electronic hybrid powertrain. Thailand is also the second country after Japan to introduce the e-Power system. Kicks e-Power made in Thailand, aimed at urban customers. The car competes with rivals in the B-segment SUV segment such as Toyota C-HR, Honda HR-V, Mazda CX-30 and MG ZS.\r\n                ', 1, 27972, '1', '2022-06-30 09:39:17', 1),
(14, 'Tesla Model 3 Performance AWD', 11, 11, 2, '\r\n                The Tesla Model 3 is an all-electric four-door sedan manufactured and sold by Tesla, Inc. As of today it\'s the most affordable car in the Tesla model range. The production of the Model 3 began in mid-2017 and right now Tesla is ramping it up.The Tesla Model 3 is the first vehicle built on Tesla’s third-generation platform. It aims to reduce the entry price for electric vehicles while not making any compromise on range and performance. Model 3 can get you anywhere you want to go — with industry-leading range and convenient charging options, all over the world. Model 3 charges up to 80% in 40 minutes on a Tesla Supercharger. It is designed to improve over time with regular software updates, introducing new features, functionality, and performance. For all of its futuristic ambitions, the Model 3 is a relatively conventional-looking four-door sedan. It incorporates many design elements from the more expensive Model S, making it immediately recognizable as a Tesla, but it’s significantly taller and less sporty looking than its low-slung, sleek-sedan sibling.\r\n\r\n\r\n', 3, 56190, '1', '2022-06-30 09:42:31', 1),
(15, 'Tesla Model S Plaid', 11, 11, 2, '\r\n                The Tesla Model S is a mid-size luxury all-electric five-door liftback car, produced by Tesla, Inc. and introduced on June 22, 2012. It is the car that changed the world view of EVs and accelerated the world\'s transition to sustainable transportation.Model S is the safest, quickest car on the road—with industry-leading performance, range, and storage. It was designed for speed and endurance—with incredible aerodynamics, ludicrous performance and uncompromised aesthetics. Automatic door handles auto-present upon approach and withdraw when closed.\r\n', 3, 126840, '1', '2022-06-30 09:44:12', 1),
(16, 'HONDA HR-V', 21, 1, 2, '\r\n                Honda HR-V owns a wheelbase of 2,610mm and length x width x height of the car respectively 4,334 x 1,722 x 1,605 (mm) with a ground clearance of 150mm, this size helps the car to be stable on the side. In addition, the Honda HR-V is also equipped with a number of modern amenities such as: Steering wheel 03. leather-wrapped spokes with integrated keys, 9-inch center screen, Honda Conect, Honda Alsok, wireless charging, USB port, lively 6-speaker sound system, felt leather seats, rear vents.', 1, 35913, '0', '2022-06-30 09:46:06', 1),
(17, 'TOYOTA VIOS', 12, 2, 2, '\r\n                \"Toyota Vios owns an extremely balanced size with length x width x height of 4,425 x 1,730 x 1,475mm respectively. The car\'s wheelbase reaches 2,550mm and the ground clearance is 133mm.\r\nIn addition to the vehicle\'s exterior dimensions, Toyota also provides the following interior dimensions. Toyota Vios owns the cabin dimensions in length x width x height of 1,895 x 1,420 x 1,205mm respectively and the front and rear wheelbase of the car is 1,475/1,460mm.', 1, 27739, '0', '2022-06-30 09:48:29', 1),
(18, 'Tesla Model 3 Standard Range Plus RWD', 11, 11, 2, '\r\n                The Tesla Model 3 is an all-electric four-door sedan manufactured and sold by Tesla, Inc. As of today it\'s the most affordable car in the Tesla model range. The production of the Model 3 began in mid-2017 and right now Tesla is ramping it up.The Tesla Model 3 is the first vehicle built on Tesla’s third-generation platform. It aims to reduce the entry price for electric vehicles while not making any compromise on range and performance. Model 3 can get you anywhere you want to go — with industry-leading range and convenient charging options, all over the world. Model 3 charges up to 80% in 40 minutes on a Tesla Supercharger. It is designed to improve over time with regular software updates, introducing new features, functionality, and performance. For all of its futuristic ambitions, the Model 3 is a relatively conventional-looking four-door sedan. It incorporates many design elements from the more expensive Model S, making it immediately recognizable as a Tesla, but it’s significantly taller and less sporty looking than its low-slung, sleek-sedan sibling.\r\n\r\n\r\n', 3, 39190, '0', '2022-06-30 09:49:59', 1),
(19, 'Mazda 6 2.5L Premium', 25, 3, 2, '\r\n                Mazda 6 is a prominent name in the D-class sedan segment in Vietnam. Although currently SUV models, Crossovers are increasingly popular and occupy a large market share compared to Sedan models. But along with Toyota Camry, Mazda 6 is one of two models that still have impressive sales and are always loved by many customers. The car possesses many advantages such as beautiful appearance, fully equipped facilities and impressive performance.', 1, 30339, '1', '2022-06-30 09:59:25', 1),
(20, 'Nissan Sunny XV 1.5 AT ', 24, 3, 2, 'At the Vietnam auto show 2018, Nissan Sunny suddenly added two new versions named Sunny XT-Q and Sunny XV-Q with significant changes in interior and exterior design but keeping the transportation system unchanged. onion. This may be a strategy to help Nissan Sunny change its competitive position in a segment with too many popular names like Toyota Vios or Honda City.\r\n                ', 1, 16568, '0', '2022-06-30 10:01:06', 1),
(21, 'Mazda BT-50 4x4 AT', 25, 6, 2, '\r\n                Mazda BT-50 Standard not only owns a powerful and powerful engine of a pickup truck, Mazda BT-50 also has a luxurious and comfortable design like a sedan, with an eye-catching and attractive appearance. inferior to an SUV while taking advantage of the many advantages of the rear cargo box, which is very suitable for the needs of the vast majority of customers.', 1, 20226, '1', '2022-06-30 10:07:02', 1),
(22, 'Tesla Model 3 Long Range AWD', 11, 11, 2, '\r\n                The Tesla Model 3 is an all-electric four-door sedan manufactured and sold by Tesla, Inc. As of today it\'s the most affordable car in the Tesla model range. The production of the Model 3 began in mid-2017 and right now Tesla is ramping it up.The Tesla Model 3 is the first vehicle built on Tesla’s third-generation platform. It aims to reduce the entry price for electric vehicles while not making any compromise on range and performance. Model 3 can get you anywhere you want to go — with industry-leading range and convenient charging options, all over the world. Model 3 charges up to 80% in 40 minutes on a Tesla Supercharger. It is designed to improve over time with regular software updates, introducing new features, functionality, and performance. For all of its futuristic ambitions, the Model 3 is a relatively conventional-looking four-door sedan. It incorporates many design elements from the more expensive Model S, making it immediately recognizable as a Tesla, but it’s significantly taller and less sporty looking than its low-slung, sleek-sedan sibling.\r\n\r\n\r\n', 3, 48190, '1', '2022-06-30 10:08:05', 1),
(23, 'Tesla Model S ', 11, 11, 2, '\r\n                The Tesla Model S is a mid-size luxury all-electric five-door liftback car, produced by Tesla, Inc. and introduced on June 22, 2012. It is the car that changed the world view of EVs and accelerated the world\'s transition to sustainable transportation.Model S is the safest, quickest car on the road—with industry-leading performance, range, and storage. It was designed for speed and endurance—with incredible aerodynamics, ludicrous performance and uncompromised aesthetics. Automatic door handles auto-present upon approach and withdraw when closed.\r\n', 3, 90840, '1', '2022-06-30 10:09:17', 1),
(24, 'CAMRY 2.5Q', 12, 3, 2, '\r\n                Compared to the remaining 3 versions and compared to the previous generation, Camry 2.5Q 2022 has no significant change in exterior design. Only a few small details at the front and rear of the car have been refined, exuding a youthful appearance and maintaining the luxury style.', 1, 59565, '1', '2022-06-30 10:11:18', 1),
(25, 'HONDA CR-V', 21, 1, 2, 'In general, the size of the Honda CR-V in the new version is slightly larger than the old version. The overall dimensions of (L x Width x Height) of the car are 4,623 x 1,855 x 1,679 (mm) respectively, the wheelbase is at 2,660 mm, the ground clearance is 198 mm. Compared to the old generation, the length of the car has increased by nearly 40 mm.\r\n                ', 1, 43391, '0', '2022-06-30 10:12:54', 1),
(26, 'Ferrari Roma', 22, 3, 2, '\r\n                Ferrari Roma is a GT (grand touring sports car) line of super sports cars from Ferrari, Italy. First born in November 2019, Ferrari Roma was developed based on the Ferrari Portofino platform.', 1, 222630, '1', '2022-06-30 12:58:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fuels`
--

CREATE TABLE `fuels` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fuels`
--

INSERT INTO `fuels` (`id`, `name`) VALUES
(1, 'Gasoline'),
(2, 'Oil'),
(3, 'Electric');

-- --------------------------------------------------------

--
-- Table structure for table `imgdetails`
--

CREATE TABLE `imgdetails` (
  `id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imgdetails`
--

INSERT INTO `imgdetails` (`id`, `car_id`, `name`) VALUES
(17, 4, '01-09-274604D01DEE886B17F3667E047AE0B1508D8.png'),
(18, 4, '01-09-2790795BE0C9F5A28448750201D06B08A6AFA.png'),
(19, 4, '01-09-27512867B954C907BEB58F2B5F5A068A36B17.png'),
(20, 4, '01-09-27596A82DE88C7390258AFF311643506B15A2.png'),
(21, 4, '01-09-27273BC4A3D2EB5FF6124B9A82AC29136C9B0.png'),
(22, 5, '01-12-0164220220530135534-0c70_wm.jpg'),
(23, 5, '01-12-0127920220530135534-0ca5_wm.jpg'),
(24, 5, '01-12-01820220530135534-9f76_wm.jpg'),
(25, 5, '01-12-01620220530135534-715c_wm.jpg'),
(26, 5, '01-12-016720220530135534-8658_wm.jpg'),
(27, 6, '01-14-28720220601234048-1fbe_wm.jpg'),
(28, 6, '01-14-2898320220602145554-016a.jpg'),
(29, 6, '01-14-2815520220602145602-af4f.jpg'),
(30, 6, '01-14-2875120220602145607-db6c.jpg'),
(31, 6, '01-14-2834820220602145614-354c.jpg'),
(37, 9, '09-25-308095a872a6cd030721b008b4727.jpg'),
(38, 9, '09-25-3053057a2a288.jpg'),
(39, 9, '09-25-3046760c380926d855e00181578df.jpg'),
(40, 9, '09-25-30756tesla-model-3.jpg'),
(41, 10, '09-27-05354Model-X-Exterior-Hero-Desktop-LHD.jpg'),
(42, 10, '09-27-05380tesla-model-x-2020-84585.png'),
(43, 10, '09-27-05468xehay- Tesla Model X NC- 040717-1.jpg'),
(44, 10, '09-27-05737xehay-Tesla-su-tra-thu-cua-xe-dien-phan-7-280319 (11).jpg'),
(45, 11, '09-33-4064720220616210210-bbcd_wm.jpg'),
(46, 11, '09-33-4076220220616210221-03ff_wm.jpg'),
(47, 11, '09-33-40683a86e78ca-3dfb-450e-b474-98e965178077-cfc9.jpg'),
(48, 12, '09-36-13451F27-1-4.png'),
(49, 12, '09-36-13472F27-2-4.png'),
(50, 12, '09-36-13826F27-5.png'),
(51, 12, '09-36-13296F28-1-3.png'),
(52, 12, '09-36-13760F28-2-4.png'),
(53, 13, '09-39-1793320220609133405-547f_wm.jpg'),
(54, 13, '09-39-1722720220609133405-629d_wm.jpg'),
(55, 13, '09-39-1767320220609133405-813d_wm.jpg'),
(56, 13, '09-39-1743520220609133405-d897_wm.jpg'),
(57, 14, '09-42-31740125-1250899_tesla-model-s-100d-in-black-von-vorne.png'),
(58, 14, '09-42-314032019_tesla_model_3_angularfront.jpg'),
(59, 14, '09-42-317812019-Tesla-Model 3-front-angle3_12659_089_640x480.jpg'),
(60, 14, '09-42-31190Tesla-Model-3-black.jpg'),
(61, 14, '09-42-31311tesla-model-3-premium-white-interior-matte-carbon-fiber-dash-wm-2.jpg'),
(62, 15, '09-44-1272021-Tesla-Model-S-Plaid-5.jpg'),
(63, 15, '09-44-12705tesla-model-s_100487458_l.jpg'),
(64, 15, '09-44-12438Tesla-Model-S-Plaid-Performance-02.jpg'),
(65, 15, '09-44-12868Unplugged-Model-S-Plaid-Carbon-BBK-Blue-1200x800.jpg'),
(66, 16, '09-46-0690920220615145712-8e37_wm.jpg'),
(67, 16, '09-46-0636620220615145712-41f4_wm.jpg'),
(68, 16, '09-46-0677220220615145712-8697_wm.jpg'),
(69, 16, '09-46-0659120220615145712-aac6_wm.jpg'),
(70, 16, '09-46-0623720220615145712-f791_wm.jpg'),
(71, 17, '09-48-297012BE0D68B291F26AEA1FC6528CE6E7372.png'),
(72, 17, '09-48-2946091F2C2E421F40A687ED2EBDB1747BE82.png'),
(73, 17, '09-48-2939994CAE4E9C5F1AD2959C7472F5A54FCAD.png'),
(74, 17, '09-48-29496125883CC60FF8AE138743370C91E10DA.png'),
(75, 17, '09-48-2982C5AE743C3204C10FEF16E79832A1C488.png'),
(76, 18, '09-49-591732018-Tesla-Model-3-Dual-Motor-Long-Range-front-in-motion.jpg'),
(77, 18, '09-49-59155277255.jpg'),
(78, 18, '09-49-59137Car-Review-Tesla-Model-3-Electric-Standard-Range-Plus.jpg'),
(79, 18, '09-49-59390Used-2021-Tesla-MODEL-3-STANDARD-RANGE-PLUS-RWD-NAV-SUNROOF-WIRELESS-CHARGING-360-VIEW.jpg'),
(80, 19, '09-59-2527520220617144056-5ebe_wm.jpg'),
(81, 19, '09-59-2583320220617144056-7f34_wm.jpg'),
(82, 19, '09-59-2566620220617144056-8bf0_wm.jpg'),
(83, 19, '09-59-2576920220617144056-b5e4_wm.jpg'),
(84, 19, '09-59-2580520220617144056-e6d8_wm.jpg'),
(85, 20, '10-01-068520220615123221-4aba_wm.jpg'),
(86, 20, '10-01-0644220220615123221-5b51_wm.jpg'),
(87, 20, '10-01-0640620220615123221-93c9_wm.jpg'),
(88, 20, '10-01-0634720220615123221-9065_wm.jpg'),
(89, 20, '10-01-0643520220615123221-d608_wm.jpg'),
(95, 21, '10-07-0287920220613181736-8c09_wm.jpg'),
(96, 21, '10-07-0278820220613181736-0677_wm.jpg'),
(97, 21, '10-07-025520220613181736-dc87_wm.jpg'),
(98, 21, '10-07-0223720220613181736-dd93_wm.jpg'),
(99, 21, '10-07-0218320220613181736-f811_wm.jpg'),
(100, 22, '10-08-0587782c5651s-960jpg.jpeg'),
(101, 22, '10-08-05913blue-tesla-model-3-front-wide-apr-25-17.jpg'),
(102, 22, '10-08-05119Model-3-rear.jpg'),
(103, 23, '10-09-174222021-tesla-model-s-plaid.jpg'),
(104, 23, '10-09-1768DSC_8322_c.jpg'),
(105, 23, '10-09-17273images.jpg'),
(106, 23, '10-09-17442N4v6kBq9-IMG_1923.jpeg'),
(107, 23, '10-09-17338tesla-model-s-plaid-in-red.jpg'),
(108, 24, '10-11-1866564EE95D9245744B846EA5D5A94B20334.png'),
(109, 24, '10-11-18788224CE8209DBE3CB4459012A4A8003083.png'),
(110, 24, '10-11-18568EE3E40AAB87AF5894E7D64D26C2B8DD8.png'),
(111, 24, '10-11-18295F09EB3D14B65F06BCBF103C224854386.png'),
(112, 25, '10-12-54680download-1.png'),
(113, 25, '10-12-5496download-2.png'),
(114, 25, '10-12-54424download-3.png'),
(115, 25, '10-12-54809download-4.png'),
(116, 25, '10-12-54754download-5.png'),
(117, 26, '12-58-42875640-gia-sieu-xe-ferrari-roma.jpg'),
(118, 26, '12-58-42227640-hong-xe-ferarri-roma.jpg'),
(119, 26, '12-58-42946640-ngoai-that-xe-ferarri-roma.jpg'),
(120, 26, '12-58-42462640-noi-that-xe-ferarri-roma.jpg'),
(121, 26, '12-58-42119640-tien-nghi-xe-ferrari-roma.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ranges`
--

CREATE TABLE `ranges` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ranges`
--

INSERT INTO `ranges` (`id`, `name`) VALUES
(1, 'SUV'),
(2, 'CUV'),
(3, 'Sedan'),
(4, 'Minivan'),
(5, 'Van'),
(6, 'Truck'),
(7, 'HatchBack'),
(8, 'Convertible/Cabriolet'),
(9, 'Pick-up'),
(10, 'Limousine'),
(11, 'Sport Car');

-- --------------------------------------------------------

--
-- Table structure for table `transmissions`
--

CREATE TABLE `transmissions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transmissions`
--

INSERT INTO `transmissions` (`id`, `name`) VALUES
(1, 'Manual'),
(2, 'Automatic'),
(3, 'Continous Variable'),
(4, 'Dual Clutch');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_permission` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone_number`, `email`, `id_card`, `address`, `user_name`, `password`, `sell_permission`, `avatar`) VALUES
(1, '0969669966', 'admin@gmail.com', '038203001400', 'Aptech 56 Le Thanh Nghi', 'admin', 'db11b32c69e5f3e5f871d5b4363bded7', '1', '02-21-22962images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `range_id` (`range_id`),
  ADD KEY `transmission_id` (`transmission_id`),
  ADD KEY `fuel_id` (`fuel_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `fuels`
--
ALTER TABLE `fuels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgdetails`
--
ALTER TABLE `imgdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `ranges`
--
ALTER TABLE `ranges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transmissions`
--
ALTER TABLE `transmissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `fuels`
--
ALTER TABLE `fuels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imgdetails`
--
ALTER TABLE `imgdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `ranges`
--
ALTER TABLE `ranges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transmissions`
--
ALTER TABLE `transmissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_ibfk_2` FOREIGN KEY (`range_id`) REFERENCES `ranges` (`id`),
  ADD CONSTRAINT `cars_ibfk_3` FOREIGN KEY (`transmission_id`) REFERENCES `transmissions` (`id`),
  ADD CONSTRAINT `cars_ibfk_4` FOREIGN KEY (`fuel_id`) REFERENCES `fuels` (`id`),
  ADD CONSTRAINT `cars_ibfk_5` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `imgdetails`
--
ALTER TABLE `imgdetails`
  ADD CONSTRAINT `imgdetails_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
