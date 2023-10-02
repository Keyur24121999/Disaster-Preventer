-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 04:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `preventordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `AdminId` int(2) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ProfilePic` varchar(200) NOT NULL,
  `ContactNo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`AdminId`, `Username`, `Password`, `Email`, `ProfilePic`, `ContactNo`) VALUES
(1, 'Keyur', 'Keyur2412', 'kananikeyur26@gmail.com', 'Keyur.jpg', '9773093691'),
(2, 'Akshar', 'Akshar2201', 'akshar77588@gmail.com', 'Akshar.jpg', '9727777688');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CategoryId` int(2) NOT NULL,
  `CategoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CategoryId`, `CategoryName`) VALUES
(1, 'Flood'),
(2, 'Tsunami'),
(3, 'Earthquake'),
(4, 'Fires'),
(5, 'Hurricane');

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `CityId` int(5) NOT NULL,
  `CityName` varchar(50) NOT NULL,
  `StateId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`CityId`, `CityName`, `StateId`) VALUES
(1, 'Surat', 1),
(2, 'Udaipur', 2),
(3, 'Mumbai', 3),
(4, 'Ahmedabad', 1),
(5, 'Pune', 3),
(6, 'Nagpur', 3),
(7, 'Vishakhapatnam', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tblcommunity`
--

CREATE TABLE `tblcommunity` (
  `CommunityId` int(5) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Status` int(1) NOT NULL DEFAULT 1,
  `CreatedDt` timestamp NOT NULL DEFAULT current_timestamp(),
  `EmployeeId` int(5) NOT NULL,
  `CoverPic` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `CategoryId` int(2) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `CityId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcommunity`
--

INSERT INTO `tblcommunity` (`CommunityId`, `Title`, `Status`, `CreatedDt`, `EmployeeId`, `CoverPic`, `Description`, `CategoryId`, `Address`, `CityId`) VALUES
(1, 'Flood Community', 1, '2020-10-18 05:54:04', 1, 'river-flood-1030x687.jpg', 'Floods are the most frequent type of natural disaster and occur when an overflow of water submerges land that is usually dry. Floods are often caused by heavy rainfall, rapid snowmelt or a storm surge from a tropical cyclone or tsunami in coastal areas.', 1, 'Surat,Gujarat', 1),
(2, 'Fires Community', 1, '2020-11-20 05:07:11', 2, '_110370131_gettyimages-1191120355.jpg', 'The most common causes of fires are lightning strikes, sparks during arid conditions, the eruption of volcanoes, and man-made fires arising from deliberate arson or accidents. A side-effect of wildfires that also threatens inhabited areas is smoke.', 4, 'Udaipur , Rajasthan', 2),
(3, 'Earthquake Community', 1, '2020-12-03 13:08:50', 1, 'Earthquake.jpg', 'Earthquake is a term used to describe both sudden slip on a fault, and the resulting ground shaking and radiated seismic energy caused by the slip, or by volcanic or magmatic activity, or other sudden stress changes in the earth.', 3, 'Mumbai,Maharashtra', 3),
(4, 'Tsunami Community', 1, '2020-12-03 13:15:41', 2, 'Tsunami.jpg', 'A tsunami is a series of waves caused by earthquakes or undersea volcanic eruptions. Tsunamis are giant waves caused by earthquakes or volcanic eruptions under the sea. Out in the depths of the ocean, tsunami waves do not dramatically increase in height.', 2, 'Pune,Maharashtra', 5),
(5, 'Flood in Gujarat', 1, '2020-12-20 16:02:53', 1, '17THRDGUJARAT.jpg', 'Gujarat\'s all flood details appear here', 1, 'Ahmedabad', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblcommunityemp`
--

CREATE TABLE `tblcommunityemp` (
  `ComEmpid` int(7) NOT NULL,
  `CommunityId` int(5) NOT NULL,
  `EmployeeId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcommunityemp`
--

INSERT INTO `tblcommunityemp` (`ComEmpid`, `CommunityId`, `EmployeeId`) VALUES
(1, 1, 2),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcommunitymember`
--

CREATE TABLE `tblcommunitymember` (
  `CommunityMemberId` int(7) NOT NULL,
  `CommunityId` int(5) NOT NULL,
  `UserId` int(7) NOT NULL,
  `Status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcommunitymember`
--

INSERT INTO `tblcommunitymember` (`CommunityMemberId`, `CommunityId`, `UserId`, `Status`) VALUES
(1, 1, 1, 0),
(2, 2, 1, 0),
(3, 3, 1, 0),
(4, 4, 1, 0),
(5, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcommunityrequest`
--

CREATE TABLE `tblcommunityrequest` (
  `CommunityRequestId` int(7) NOT NULL,
  `CommunityId` int(5) NOT NULL,
  `UserId` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcommunityrequest`
--

INSERT INTO `tblcommunityrequest` (`CommunityRequestId`, `CommunityId`, `UserId`) VALUES
(3, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbldonatedetails`
--

CREATE TABLE `tbldonatedetails` (
  `DonateDetailId` int(7) NOT NULL,
  `CURRENCY` varchar(20) NOT NULL,
  `GATEWAYNAME` varchar(100) NOT NULL,
  `BANKNAME` varchar(100) NOT NULL,
  `TXNID` varchar(50) NOT NULL,
  `TXNAMOUNT` int(10) NOT NULL,
  `STATUS` int(1) NOT NULL,
  `BANKTXNID` varchar(50) NOT NULL,
  `TXNDATE` varchar(100) NOT NULL,
  `RESPCODE` int(11) NOT NULL,
  `RESPMSG` varchar(1000) NOT NULL,
  `PAYMENTMODE` varchar(1000) NOT NULL,
  `MID` varchar(1000) NOT NULL,
  `ORDERID` varchar(1000) NOT NULL,
  `CHECKSUMHASH` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldonatedetails`
--

INSERT INTO `tbldonatedetails` (`DonateDetailId`, `CURRENCY`, `GATEWAYNAME`, `BANKNAME`, `TXNID`, `TXNAMOUNT`, `STATUS`, `BANKTXNID`, `TXNDATE`, `RESPCODE`, `RESPMSG`, `PAYMENTMODE`, `MID`, `ORDERID`, `CHECKSUMHASH`) VALUES
(1, 'INR', 'Paytm', 'Paytm', '7646444515', 1500, 0, '62585210', '2020-11-13', 1001, '', '', '', '1', ''),
(2, 'INR', 'WALLET', 'WALLET', '20201230111212800110168830402216966', 500, 0, '63840253', '2020-12-30 22:01:05.0', 1, 'Txn Success', 'PPI', 'kRyDQD57207638143578', '3', '6nvkClDXMj/d1B+tL69vv6JuQjGlUnSafs2nmrlp8VQYK94IE1Iim7yFTOWXsdH7qEGSWJlIfOwkTUd5ZaobZOOXNsyvDFmY+IqOKUHMYtw='),
(3, 'INR', 'WALLET', 'WALLET', '20201230111212800110168813502231325', 1500, 0, '63840485', '2020-12-30 22:40:35.0', 1, 'Txn Success', 'PPI', 'kRyDQD57207638143578', '5', 'kzMUaiLngJbY/kQs4YdnrRs+xHWrpVaZ9jLEKupkzrAhJvJv8Y5Eo/BBsxssEyJC8HlRPRaj0PMjrn04zN4HhRKsMBqrtKkrt63dtkbYxeg='),
(4, 'INR', 'WALLET', 'WALLET', '20201230111212800110168801902223215', 500, 0, '63840529', '2020-12-30 22:53:23.0', 1, 'Txn Success', 'PPI', 'kRyDQD57207638143578', '6', 'NU2In36lj7KIQFffG3xYR9jWYhY8HEXt5D4YAkrhSe65wwWvd8qcnm0gR7/RTs77UUDK24Qlexlwel5w7seACqdatBv8g6xbuUp/686XD1I='),
(5, 'INR', 'WALLET', 'WALLET', '20210101111212800110168797102229069', 1200, 0, '63846988', '2021-01-01 13:06:31.0', 1, 'Txn Success', 'PPI', 'kRyDQD57207638143578', '7', 'Av1Pbc58HCvlb/MgB3dt7SvNl8yUfxGCAMZKudiyPWP5DpOjd3Z9SbMy7j/s1R6PnHXegsIDf4KsLHxM+HlhNZuLtxtoD7mrvUDKGOr3yKU='),
(6, 'INR', 'WALLET', 'WALLET', '20210107111212800110168789702255243', 1000, 0, '63874247', '2021-01-07 10:22:37.0', 1, 'Txn Success', 'PPI', 'kRyDQD57207638143578', '8', 'OBX83B1cXtwAsBkCAOohaQvD7NEoGw/sr8QaThxXG17XpKDYq+LKzOjmeLXR4br69qt0scxJOOax/nlST7sqBvMexaGesRIQNdanOVU3z8U=');

-- --------------------------------------------------------

--
-- Table structure for table `tbldonaterequest`
--

CREATE TABLE `tbldonaterequest` (
  `DonateRequestId` int(7) NOT NULL,
  `UserId` int(7) NOT NULL,
  `CategoryId` int(2) NOT NULL,
  `CityId` int(5) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldonaterequest`
--

INSERT INTO `tbldonaterequest` (`DonateRequestId`, `UserId`, `CategoryId`, `CityId`, `Description`) VALUES
(1, 1, 1, 1, 'I want to donate clothes.'),
(2, 1, 3, 5, 'I want to donate food of 100 people..');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `EmployeeId` int(5) NOT NULL,
  `EmployeeName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `CityId` int(5) NOT NULL,
  `CoverImage` varchar(200) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `CategoryId` int(2) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`EmployeeId`, `EmployeeName`, `UserName`, `Password`, `Email`, `Gender`, `CityId`, `CoverImage`, `Contact`, `CategoryId`, `Address`, `DOB`) VALUES
(1, 'Keyur Kanani', 'Keyur', 'Keyur2412', 'kananikeyur26@gmail.com', 'Male', 1, 'Keyur.jpg', '9773093691', 1, '25-Shantivan Society Part-2', '1999-12-24'),
(2, 'Akshar Patel', 'Akshar', 'AK47', 'akshar77588@gmail.com', 'Male', 1, 'Akshar.jpg', '9727777688', 4, '123-abc circle', '2000-01-21'),
(3, 'Nijal Prajapati', 'Nijal', 'Nijal123', 'nijalprajapati22@gmail.com', 'Female', 4, 'Nijal.JPG', '9601824857', 5, 'Bharuch', '2000-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `tblforum`
--

CREATE TABLE `tblforum` (
  `ForumId` int(7) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `CreatedDt` timestamp NOT NULL DEFAULT current_timestamp(),
  `PostImage` varchar(200) NOT NULL,
  `CommunityId` int(5) NOT NULL,
  `UserId` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblforum`
--

INSERT INTO `tblforum` (`ForumId`, `Title`, `Description`, `CreatedDt`, `PostImage`, `CommunityId`, `UserId`) VALUES
(1, 'Flood at uk', 'because of flood so many people had to transfer ', '2020-12-19 16:17:34', 'large-26378-SF-UA.jpg', 1, 1),
(2, 'Fire Disaster', 'Fire at Sarthana So many children lost their lives....', '2020-12-20 15:36:31', 'FireatSarthana.jpg', 2, 1),
(3, 'earthquake', 'earthquake inindia', '2020-12-20 15:36:31', 'List-major-natural-calamities-in-India.jpg', 3, 1),
(4, 'Tsunami', 'Deadly Tsunami', '2020-12-20 15:38:36', '7f4635ac8deb550626744f3f72e257db.jpg', 4, 1),
(5, 'Flood', 'Flood in india', '2020-12-21 04:47:06', 'flood-1597745615.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblforumlike`
--

CREATE TABLE `tblforumlike` (
  `ForumLikeId` int(7) NOT NULL,
  `ForumId` int(7) NOT NULL,
  `UserId` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblforumlike`
--

INSERT INTO `tblforumlike` (`ForumLikeId`, `ForumId`, `UserId`) VALUES
(1, 5, 1),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblforumpost`
--

CREATE TABLE `tblforumpost` (
  `ForumPostId` int(7) NOT NULL,
  `UserId` int(7) NOT NULL,
  `Messages` varchar(500) NOT NULL,
  `ForumId` int(7) NOT NULL,
  `CreatedDt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblforumpost`
--

INSERT INTO `tblforumpost` (`ForumPostId`, `UserId`, `Messages`, `ForumId`, `CreatedDt`) VALUES
(1, 1, 'Sad News', 1, '2020-12-19 18:02:41'),
(2, 1, 'Bad', 1, '2020-12-19 18:30:17'),
(3, 1, 'nice', 3, '2021-01-07 04:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE `tblnews` (
  `NewsId` int(7) NOT NULL,
  `Topic` varchar(50) NOT NULL,
  `Status` int(1) NOT NULL DEFAULT 1,
  `CreatedDt` timestamp NOT NULL DEFAULT current_timestamp(),
  `CityId` int(5) NOT NULL,
  `CoverImage` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `CategoryId` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`NewsId`, `Topic`, `Status`, `CreatedDt`, `CityId`, `CoverImage`, `Description`, `CategoryId`) VALUES
(1, 'Amazon', 1, '2020-10-26 16:53:17', 1, 'AmazonWildFire.jpg', 'Fires in Brazil’s Amazon increased 13% in the first nine months of the year compared with a year ago, as the rainforest region experiences its worst rash of blazes in a decade, data from space research agency Inpe has shown.', 4),
(2, 'Fire in Hospital', 1, '2020-11-20 04:39:45', 1, 'fireathospital.jpg', 'A major fire broke out at a hospital in Surat on Wednesday evening. Fire brigade officals and police personnel rushed to the spot and efforts were on to douse the fire. Though the exact reason behind the fire is not yet known, reports said that it broke out first in the server room.', 4),
(3, 'Flood in Andhra Pradesh', 1, '2020-12-14 08:24:42', 7, 'Flood-in-Andhra-Pradesh-India-November-2020-Government-of-Andhra-Pradesh-768x419.jpg', 'Cyclone Nivar made landfall to the north of Puducherry on 26 November 2020, causing severe wind damage and some flooding in low-lying areas of Tamil Nadu, including Chennai.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblnewsimages`
--

CREATE TABLE `tblnewsimages` (
  `NewsImageId` int(8) NOT NULL,
  `NewsId` int(7) NOT NULL,
  `ImageURL` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnewsimages`
--

INSERT INTO `tblnewsimages` (`NewsImageId`, `NewsId`, `ImageURL`) VALUES
(1, 1, 'Amazon1.jpg'),
(3, 1, 'Amazon2.jpg'),
(4, 2, '755C6455-3258-47FA-B610-6EFCEB6CB465-800x560.jpeg'),
(5, 2, 'Surathospitalfire.jpg'),
(7, 3, 'Floods-in-Andhra-Pradesh-India-November-2020-Government-of-Andhra-Pradesh-768x514.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `ORDERID` int(11) NOT NULL,
  `CityId` int(5) NOT NULL,
  `CategoryId` int(2) NOT NULL,
  `TXNAMOUNT` int(11) NOT NULL,
  `UserId` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`ORDERID`, `CityId`, `CategoryId`, `TXNAMOUNT`, `UserId`) VALUES
(1, 1, 1, 900, 1),
(2, 7, 3, 100, 1),
(3, 1, 1, 100, 1),
(4, 1, 1, 500, 1),
(5, 4, 3, 1500, 1),
(6, 3, 1, 500, 2),
(7, 2, 4, 1200, 1),
(8, 3, 1, 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

CREATE TABLE `tblstate` (
  `StateId` int(5) NOT NULL,
  `StateName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`StateId`, `StateName`) VALUES
(1, 'Gujarat'),
(2, 'Rajasthan'),
(3, 'Maharashtra'),
(4, 'Jammu-Kashmir'),
(5, 'Madhya Pradesh'),
(6, 'Andhra Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UserId` int(7) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DOB` date NOT NULL,
  `CityId` int(5) NOT NULL,
  `Status` int(1) NOT NULL DEFAULT 0,
  `MobileNo` varchar(10) NOT NULL,
  `ProfileImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserId`, `Username`, `Password`, `Email`, `Gender`, `DOB`, `CityId`, `Status`, `MobileNo`, `ProfileImage`) VALUES
(1, 'Raj', 'Raj123', 'chauhanraj525@gmail.com', 'Male', '2000-08-07', 1, 0, '9874561230', 'Raj.jpg'),
(2, 'Dipesh', 'Dipesh1812', 'dipeshkanani70@gmail.com', 'Male', '1996-12-18', 1, 0, '8140320032', 'PSX_20171001_220943.jpg'),
(3, 'Priyanka', 'Priyanka1110', 'priyankakanani007@gmail.com', 'Male', '1996-10-11', 1, 0, '8140320033', 'IMG_2539.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`CityId`);

--
-- Indexes for table `tblcommunity`
--
ALTER TABLE `tblcommunity`
  ADD PRIMARY KEY (`CommunityId`);

--
-- Indexes for table `tblcommunityemp`
--
ALTER TABLE `tblcommunityemp`
  ADD PRIMARY KEY (`ComEmpid`);

--
-- Indexes for table `tblcommunitymember`
--
ALTER TABLE `tblcommunitymember`
  ADD PRIMARY KEY (`CommunityMemberId`);

--
-- Indexes for table `tblcommunityrequest`
--
ALTER TABLE `tblcommunityrequest`
  ADD PRIMARY KEY (`CommunityRequestId`);

--
-- Indexes for table `tbldonatedetails`
--
ALTER TABLE `tbldonatedetails`
  ADD PRIMARY KEY (`DonateDetailId`);

--
-- Indexes for table `tbldonaterequest`
--
ALTER TABLE `tbldonaterequest`
  ADD PRIMARY KEY (`DonateRequestId`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`EmployeeId`);

--
-- Indexes for table `tblforum`
--
ALTER TABLE `tblforum`
  ADD PRIMARY KEY (`ForumId`);

--
-- Indexes for table `tblforumlike`
--
ALTER TABLE `tblforumlike`
  ADD PRIMARY KEY (`ForumLikeId`);

--
-- Indexes for table `tblforumpost`
--
ALTER TABLE `tblforumpost`
  ADD PRIMARY KEY (`ForumPostId`);

--
-- Indexes for table `tblnews`
--
ALTER TABLE `tblnews`
  ADD PRIMARY KEY (`NewsId`);

--
-- Indexes for table `tblnewsimages`
--
ALTER TABLE `tblnewsimages`
  ADD PRIMARY KEY (`NewsImageId`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`ORDERID`);

--
-- Indexes for table `tblstate`
--
ALTER TABLE `tblstate`
  ADD PRIMARY KEY (`StateId`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `AdminId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CategoryId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `CityId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblcommunity`
--
ALTER TABLE `tblcommunity`
  MODIFY `CommunityId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcommunityemp`
--
ALTER TABLE `tblcommunityemp`
  MODIFY `ComEmpid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcommunitymember`
--
ALTER TABLE `tblcommunitymember`
  MODIFY `CommunityMemberId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcommunityrequest`
--
ALTER TABLE `tblcommunityrequest`
  MODIFY `CommunityRequestId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbldonatedetails`
--
ALTER TABLE `tbldonatedetails`
  MODIFY `DonateDetailId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbldonaterequest`
--
ALTER TABLE `tbldonaterequest`
  MODIFY `DonateRequestId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `EmployeeId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblforum`
--
ALTER TABLE `tblforum`
  MODIFY `ForumId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblforumlike`
--
ALTER TABLE `tblforumlike`
  MODIFY `ForumLikeId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblforumpost`
--
ALTER TABLE `tblforumpost`
  MODIFY `ForumPostId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `NewsId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblnewsimages`
--
ALTER TABLE `tblnewsimages`
  MODIFY `NewsImageId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `ORDERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblstate`
--
ALTER TABLE `tblstate`
  MODIFY `StateId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `UserId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
