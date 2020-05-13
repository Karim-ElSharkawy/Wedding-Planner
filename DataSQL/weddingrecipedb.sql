-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 11:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weddingrecipedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Rank` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`, `Rank`) VALUES
(1, 'Admin', 'Admin', 'Lead Admin'),
(4, 'Admin2', 'Admin2', 'Vice Lead Admin'),
(5, 'Admin2', 'Admin2', 'Vice Lead Admin'),
(6, 'Admin2', 'Admin2', 'Vice Lead Admin'),
(7, 'Admin2', 'Admin2', 'Vice Lead Admin'),
(8, 'Admin2', 'Admin2', 'Vice Lead Admin'),
(9, 'Admin2', 'Admin2', 'Vice Lead Admin'),
(10, 'Admin2', 'Admin2', 'Vice Lead Admin'),
(11, 'Admin2', 'Admin2', 'Vice Lead Admin');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `ID` int(11) NOT NULL,
  `Flower` varchar(20) DEFAULT NULL,
  `Photographer` varchar(30) DEFAULT NULL,
  `Hair` varchar(20) DEFAULT NULL,
  `Dress` varchar(20) DEFAULT NULL,
  `Appetizer` varchar(20) DEFAULT NULL,
  `MainDish` varchar(20) DEFAULT NULL,
  `Dessert` varchar(20) DEFAULT NULL,
  `Venue` varchar(20) DEFAULT NULL,
  `Beverage` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`ID`, `Flower`, `Photographer`, `Hair`, `Dress`, `Appetizer`, `MainDish`, `Dessert`, `Venue`, `Beverage`) VALUES
(100, 'Pomander', 'Bullseye Photography', 'Richard El-Boustany', 'Memories', 'Farmhouse Vegetable', 'Roast scallops', 'Banana tart delight', 'Kempinski Hotel', 'Iced tea and sweet t'),
(101, 'Pomander', 'Ahmed Rajeep', NULL, NULL, NULL, NULL, NULL, 'Swiss Inn Resort', NULL),
(102, 'Candy ice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `Name` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`Name`, `Type`, `Price`, `Description`) VALUES
('Banana tart delight', 'Main Dish', 250, 'you can choose for your guests a different kind of dessert that contain chocolates and the main ingredient is banana this is our special in modren weddings by chef Emeril Lagasse'),
('Beef Sourdough', 'Main Dish', 18, 'served with Tomato & White Wine Sauce for 18$\r\n\r\n'),
('Creamberry', 'Dessert', 35, 'its with creamcheese for 35$\r\n\r\n'),
('Farmhouse Vegetable', 'Appetizer', 299, 'its a soup made from vegetables 7$\r\n\r\n'),
('Fruit infused water', 'Beverage', 3, 'some fresh fruits soaked in water its for 3$per cup\r\n\r\n'),
('goat\'s cheese', 'Appetizer', 6, 'its very delicious for 6$\r\n\r\n'),
('Iced tea and sweet t', 'Beverage', 4, 'the price is 4$ for cup\r\n\r\n'),
('Orange cake', 'Main Dish', 200, 'you can choose for your guests a light dessert that contain a several fresh fruits this is our special in modern weddings and many brides choose it and its made by chef Paul Bocuse\r\n\r\n'),
('ravioli pasta', 'Main Dish', 150, 'When it comes to pasta the best kind of pasta and has the special taste is ravioli and it has many kinds of cheeses and its made by the famous chef Marco Pierre White\r\n\r\n'),
('Roast scallops', 'Appetizer', 9, 'its a roasted chicken for 9$\r\n\r\n'),
('Seafood Chowder', 'Appetizer', 20, 'soup made from some kinds of sea food for 20$\r\n\r\n'),
('Smoked duck breast', 'Appetizer', 7, 'its a breast with some dips for 7$ only\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `flower`
--

CREATE TABLE `flower` (
  `Name` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flower`
--

INSERT INTO `flower` (`Name`, `Type`, `Price`, `Description`, `Photo`) VALUES
('100 Blooms of Poms', 'Most selected', 455, 'Celebrate the hundreds of ways you love her with 100 Blooms of Poms. This assorted color collection of spring daisy pom poms reminds her of the many reasons you love and appreciate her.\r\n', 'images/Flowers/flower_3.jpg'),
('Biedermeier', 'Bouqet', 250, 'Biedermeier bouquets are round and consist of a tight bunch of uniformly cut flowers wrapped by fabric or wire. It\'s arrangements align the flowers in concentric circles around each other, creating a striped effect on your bouquet.\r\n', 'images/Flowers/bouqet_1.jpg'),
('Blush Pink', 'Table Decor', 455, 'Blush Pink Wholesale Garden Roses features lavish layers of soft hues that perfectly compliment any theme.\r\n', 'images/Flowers/table_3.jpg'),
('Candy ice', 'Table Decor', 250, 'Add a feminine touch to your event with Candy Ice.The petals are a classic, soft white, with just a hint of blush near the center of the bloom with hot pink freckles.\r\n', 'images/Flowers/table_2.jpg'),
('Hugs and kisses', 'Most selected', 250, 'A dizzying array of deep, robust color, the Hugs and Kisses bouquet contains one dozen tulips and one dozen iris, fresh from the fields.\r\n', 'images/Flowers/flower_1.jpg'),
('Nosegay', 'Bouqet', 250, 'Highly traditional and popular bouquets are round bouquets consisting of a tight bunch of flowers cut to uniform in length and style. The flowers are packed and tied by an accenting fabric wrap or wire.\r\n', 'images/Flowers/table_1.jpg'),
('Peaceful White Gardens', 'Most selected', 250, 'Express warmth to your loved ones with this peaceful garden. Planted full of kalanchoe and lush foliage plants, this garden also comes with one 10”-15” Peace Lily plant. As the Lily blooms your compassion will be conveyed in the most loving way.\r\n', 'images/Flowers/flower_2.jpg'),
('Pomander', 'Bouqet', 455, 'Pomander bouquets feature a round ball of flowers suspended from ribbon or twine, and worn by the wrist. Typically, a pomander bouquet will be enhanced with colorful jewels and gems.\r\n', 'images/Flowers/bouqet_4.jpg'),
('White Garden Rose', 'Table Decor', 250, 'This Garden Rose is a fluffy off white garden rose with hints of soft pink and has an amazingly sweet scent. Fluffy and full, this rose is perfect for a baby shower or classic wedding.\r\n', 'images/Flowers/table_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Relation` varchar(15) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `TableNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`ID`, `Name`, `Phone`, `Relation`, `Email`, `TableNumber`) VALUES
(101, 'astatas', 2131231, 'TTT', '12124@hota', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hairanddress`
--

CREATE TABLE `hairanddress` (
  `Name` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hairanddress`
--

INSERT INTO `hairanddress` (`Name`, `Type`, `Price`) VALUES
('Ambika Pillai', 'Indian Makeup', 1550),
('Kimi Safadi', 'Mid Hair Style', 750),
('kleinfeldbridalit', 'Bride Dress', 2500),
('Memories', 'Bridesmaid', 1500),
('Michelle Phan', 'Asian Makeup', 2000),
('Rabie Mrad', 'Long Hair Style', 1000),
('Richard El-Boustany', 'Short Hair Style', 800),
('sam michele', 'Smokey Makeup', 550);

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `Name` varchar(25) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Facebook` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`Name`, `Price`, `Description`, `Phone`, `Email`, `Facebook`) VALUES
('Ahmed Rajeep', 3000, 'Ahmed Rajeep is an Egyptian photographer that specializes in portrait, fashion, and product photography.\r\n\r\n', 1016377174, 'ahmed.rajeep.company@gmail.com', 'https://www.facebook.com/rajeep.photography/'),
('Ahmed Shibl', 3500, 'Ahmed Shibl is a professional photographer with 3 years of experience in photography with more than 200 weddings captured. He is always looking to create timeless images; classic photographs.', 1021030618, 'ahmedshibl2005@hotmail.com', 'https://www.facebook.com/a.shiblweddings/'),
('Bullseye Photography', 5000, 'Bullseye Photography is a team that provides the quality and expertise to meet and exceed your needs for a vision towards reality.', 1020475719, 'karim.roushdy@bullseyephotography.tv', 'https://www.facebook.com/Bullseyephotography.tv/?ref=page_internal'),
('Karim Elshrief', 2500, 'Karim Elshrief is a professional photographer who offers an exceptional bespoke approach to preserving your precious memories in a natural style.', 1228888938, NULL, 'https://www.facebook.com/karimelshreif/?eid=ARBj41NxuGbJiZP4oi9eXSCzFSieAWbUF5AwCA4xRL64VqhRKJBuKAhocrwco4lE41WElkgpWiJyP9of&timeline_context_item_type=intro_card_work&timeline_context_item_source=1114770246&fref=tag');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ID` int(11) NOT NULL,
  `VenueName` varchar(20) NOT NULL,
  `GuestNumber` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `WeddingDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ID`, `VenueName`, `GuestNumber`, `TotalPrice`, `WeddingDate`) VALUES
(100, 'Kempinski Hotel', 750, 37500, '2019-04-13'),
(101, 'Swiss Inn Resort', 259, 13950, '2019-04-15'),
(102, 'Kempinski Hotel', 250, 12500, '2019-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Newsletter` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Email`, `Newsletter`) VALUES
(100, 'KarimAbdelWahab', '123', '159773@bue.edu.eg', 0),
(101, 'Ayah Hesham', '1234', 'arasrasr@hotmail.com', 1),
(102, 'Habiba', '123', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `Name` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `Photo` text NOT NULL,
  `GuestRange` varchar(15) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `PriceRange` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`Name`, `Description`, `Photo`, `GuestRange`, `Location`, `PriceRange`) VALUES
('Cupid Yacht', 'Looking for a new wedding idea? If you are searching for joyful atmosphere, fun and want to get inspired Cupid Yacht is the right choice. Cupid yacht has Two main decks , Upper sun deck and Front sun deck 26 meter long and 6 meter width.\r\n\r\n', 'images/venues/Venue_2.jpg', '(50-80)', 'Al-Manil Giza', '50'),
('Kempinski Hotel', 'Begin your happily ever after story in the elegance of Royal Maxim Palace Kempinski. The most spacious ballroom in Egypt, the Excelsior, is on hand to make every bride’s dream come true during her fairy-tale wedding, and despite being an impressive 3,042sq m, the ballroom is easily divisible into three sections, therefore also accommodating smaller weddings.\r\n\r\n', 'images/venues/Venue_1.jpg', '(250-750)', 'First Settlement', '50'),
('Swiss Inn Resort', 'Swiss Inn Pyramids Golf Resort is a beautiful venue for your wedding reception. It is a highly coveted wedding venue. It is a hotel steeped in history, charm and romance.The breath-taking Connemara Suite caters for numbers of up to 800 guests seated for dinner. Set against an egg shell white backdrop, it is decorated with 9 magnificently decadent crystal chandeliers. Combined with stunning candelabras on each Table, a magical ambience is created for your special day.\r\n\r\n', 'images/venues/Venue_3.jpg', '(350-800)', '6 October', '50'),
('Villa Belle Epoque', 'In a 1920s villa surrounded by lush gardens, this elegant boutique hotel is a 12-minute walk from Maadi metro station, and 11 km from both the 3rd-century Hanging Church and the ancient Roman Babylon Fortress.Plush rooms and suites with polished, period-style furnishings and Egyptian art feature desks and balconies. Amenities include an outdoor pool, and gardens with mango, guava and olive trees.\r\n\r\n', 'images/venues/Venue_4.jpg', '(250-750)', 'Maadi', '50');

-- --------------------------------------------------------

--
-- Table structure for table `venuerecommendation`
--

CREATE TABLE `venuerecommendation` (
  `name` varchar(20) NOT NULL,
  `contactemail` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `supervisoradmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venuerecommendation`
--

INSERT INTO `venuerecommendation` (`name`, `contactemail`, `description`, `supervisoradmin`) VALUES
('Koookfa', 'katksatast@ttt', 'atstas', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `BudgetVenue_FK` (`Venue`),
  ADD KEY `BudgetAppetizer_FK` (`Appetizer`),
  ADD KEY `BudgetBeverage_FK` (`Beverage`),
  ADD KEY `BudgetDessert_FK` (`Dessert`),
  ADD KEY `BudgetDress_FK` (`Dress`),
  ADD KEY `BudgetFlower_FK` (`Flower`),
  ADD KEY `BudgetHair_FK` (`Hair`),
  ADD KEY `BudgetMainDish_FK` (`MainDish`),
  ADD KEY `BudgetPhotographer_FK` (`Photographer`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `flower`
--
ALTER TABLE `flower`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `GuestUser_FK` (`ID`);

--
-- Indexes for table `hairanddress`
--
ALTER TABLE `hairanddress`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ReservationVenue_FK` (`VenueName`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `venuerecommendation`
--
ALTER TABLE `venuerecommendation`
  ADD PRIMARY KEY (`name`),
  ADD KEY `VenueRecAdmin_FK` (`supervisoradmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `BudgetAppetizer_FK` FOREIGN KEY (`Appetizer`) REFERENCES `catering` (`Name`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `BudgetBeverage_FK` FOREIGN KEY (`Beverage`) REFERENCES `catering` (`Name`) ON DELETE SET NULL,
  ADD CONSTRAINT `BudgetDessert_FK` FOREIGN KEY (`Dessert`) REFERENCES `catering` (`Name`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `BudgetDress_FK` FOREIGN KEY (`Dress`) REFERENCES `hairanddress` (`Name`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `BudgetFlower_FK` FOREIGN KEY (`Flower`) REFERENCES `flower` (`Name`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `BudgetHair_FK` FOREIGN KEY (`Hair`) REFERENCES `hairanddress` (`Name`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `BudgetMainDish_FK` FOREIGN KEY (`MainDish`) REFERENCES `catering` (`Name`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `BudgetPhotographer_FK` FOREIGN KEY (`Photographer`) REFERENCES `photographer` (`Name`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `BudgetUser_FK` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guest`
--
ALTER TABLE `guest`
  ADD CONSTRAINT `GuestUser_FK` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `ReservationUser_FK` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ReservationVenue_FK` FOREIGN KEY (`VenueName`) REFERENCES `venue` (`Name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `venuerecommendation`
--
ALTER TABLE `venuerecommendation`
  ADD CONSTRAINT `VenueRecAdmin_FK` FOREIGN KEY (`supervisoradmin`) REFERENCES `admin` (`ID`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
