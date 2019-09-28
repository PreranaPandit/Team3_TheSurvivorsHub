<?php
//host is the localhost of computer
//username is root by default of mysql
//password is null by default of mysql
$conn = new mysqli("localhost","root","");
$create = "create database prerana_lcdc";
$conn->query($create);
//name of database'prerana_lcdc'
mysqli_select_db($conn,'prerana_lcdc');

/* --
  -- Table structure for table `answer`
  --*/
$query1 = "CREATE TABLE IF NOT EXISTS`answer` (
    `id` int(10) NOT NULL,
    `answer` varchar(50) NOT NULL,
    `datetime` datetime NOT NULL,
    `question_no` int(10) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  $conn->query($query1);
  
  /*
  -- Dumping data for table `answer`
  --*/
  
  $query2 = "INSERT INTO `answer` (`id`, `answer`, `datetime`, `question_no`) VALUES
  (47, 'There are classes in morning shift.               ', '2030-12-18 01:11:34', 8),
  (48, '                                 Yes, There is cla', '2030-12-18 01:11:54', 8),
  (49, 'Two shifts are available.           ', '2030-12-18 01:12:29', 9)";
 $conn->query($query2);
 
  
 /* --
  -- Table structure for table `booking`
  --*/
  
  $query3 = "CREATE TABLE IF NOT EXISTS `booking` (
    `booking_id` int(10) NOT NULL,
    `parentName` varchar(50) NOT NULL,
    `childName` varchar(50) NOT NULL,
    `childDob` date NOT NULL,
    `parentEmail` varchar(50) NOT NULL,
    `parentAddress` varchar(50) NOT NULL,
    `parentPhoneno` int(50) NOT NULL,
    `classes` enum('Acting','Singing','Dancing') NOT NULL,
    `comments` longtext NOT NULL,
    `username` varchar(50) NOT NULL,
    `age` int(10) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  $conn->query($query3);
  
  /*
  --
  -- Dumping data for table `booking`
  --
  */

  $query4="INSERT INTO `booking` (`booking_id`, `parentName`, `childName`, `childDob`, `parentEmail`, `parentAddress`, `parentPhoneno`, `classes`, `comments`, `username`, `age`) VALUES
  (12, 'Ram', 'prince', '1997-01-13', 'ram@gmail.com', 'birgunj', 784645, 'Acting', 'Thank you', 'ram', 21),
  (13, 'Mark', 'Lorem', '1999-04-03', 'mark@yahoo.com', 'bhotebahal', 4255499, 'Dancing', 'Interested in ballet dancing.', 'mark', 19),
  (14, 'Jacequline', 'James', '2009-09-27', 'jace@hotmail.com', 'kalanki', 4233770, 'Singing', 'Vocal Singing Classes', 'jacequline', 9),
  (15, 'Harry', 'Braut', '2011-07-13', 'hari@rocketmail.com', 'rajbiraj', 2334151, 'Acting', 'Wanna join in drama.', 'hari', 6),
  (19, 'Joseph', 'Jack', '1981-09-30', 'jack@gmail.com', 'dorset', 4255499, 'Acting', 'Love to join', 'jack', 0)";
  $conn->query($query4);
  
  /*-- --------------------------------------------------------
  
  --
  -- Table structure for table `counter`
  --*/
  
  $query5="CREATE TABLE IF NOT EXISTS `counter` (
    `counter` int(10) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  $conn->query($query5);
  
  /*
  --
  -- Dumping data for table `counter`
  --*/
  
 $query6 ="INSERT INTO `counter` (`counter`) VALUES
  (1328)";
  $conn->query($query6);
  /*
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `event`
  --*/
  $query7="CREATE TABLE IF NOT EXISTS`event` (
    `event_id` int(10) NOT NULL,
    `event` varchar(50) NOT NULL,
    `date` date NOT NULL,
    `time` time NOT NULL,
    `title` varchar(50) NOT NULL,
    `image` varchar(100) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  $conn->query($query7);
  
  /*
  --
  -- Dumping data for table `event`
  --*/
  
  $query8="INSERT INTO `event` (`event_id`, `event`, `date`, `time`, `title`, `image`) VALUES
  (2, 'Music', '2019-03-29', '14:15:00', 'TheViolinChallenge', 'violinchallenge.jpg'),
  (3, 'Dance', '2019-09-25', '17:30:00', 'BalletDancing', 'balletdance.jpg')";
  $conn->query($query8);

  /*
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `post`
  --*/
  $query9="CREATE TABLE IF NOT EXISTS `post` (
    `post_id` int(10) NOT NULL,
    `subject` varchar(50) NOT NULL,
    `context` varchar(50) NOT NULL,
    `datetime` datetime NOT NULL,
    `image` varchar(100) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  $conn->query($query9);

  /*
  --
  -- Dumping data for table `post`
  --*/

  
  $query10="INSERT INTO `post` (`post_id`, `subject`, `context`, `datetime`, `image`) VALUES
  (1, 'ChildrenDrama', 'Cindrella', '2017-12-29 02:36:00', 'blog1.png'),
  (2, 'Dancing', 'FinalStage', '2019-12-28 02:00:00', 'blog4.jpg'),
  (3, 'Books', 'TwelvethD', '2014-06-08 13:00:00', 'blog3.jpg')";
  $conn->query($query10);
  
  /*-- --------------------------------------------------------
  
  --
  -- Table structure for table `question`
  --*/
  $query11="CREATE TABLE IF NOT EXISTS `question` (
    `id` int(10) NOT NULL,
    `topic` varchar(50) NOT NULL,
    `category` varchar(50) NOT NULL,
    `detail` varchar(50) NOT NULL,
    `datetime` datetime NOT NULL,
    `username` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  $conn->query($query11);

  /*
  --
  -- Dumping data for table `question`
  --*/
  
  $query12="INSERT INTO `question` (`id`, `topic`, `category`, `detail`, `datetime`, `username`) VALUES
  (8, 'Singing', 'Classes', '                         is violin class available', '2029-12-18 06:02:11', 'jack'),
  (9, 'Timing', 'Music', '                             Time period of classe', '2030-12-18 12:34:11', 'jacequline')";
  $conn->query($query12);
  
  /*
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `review`
  --*/
  $query13="CREATE TABLE IF NOT EXISTS `review` (
    `review_id` int(10) NOT NULL,
    `username` varchar(50) NOT NULL,
    `reviews` varchar(1000) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  $conn->query($query13);
  
  /*
  --
  -- Dumping data for table `review`
  --*/
  
  $query14="INSERT INTO `review` (`review_id`, `username`, `reviews`) VALUES
  (3, 'jacequline', 'wonderful videos!!')";
  $conn->query($query14);
  
  /*
  --
  -- Table structure for table `students`
  --*/
  
  $query15="CREATE TABLE IF NOT EXISTS `students` (
    `studentid` int(10) NOT NULL,
    `studentname` varchar(50) NOT NULL,
    `studentdob` date NOT NULL,
    `enrolledcourse` enum('youthcourse','fulltime','parttime') NOT NULL,
    `shift` enum('morning','day','evening') NOT NULL,
    `age` int(10) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  $conn->query($query15);
  
  /*
  --
  -- Dumping data for table `students`
  --*/

  
  $query16="INSERT INTO `students` (`studentid`, `studentname`, `studentdob`, `enrolledcourse`, `shift`, `age`) VALUES
  (18, 'prena', '2015-12-29', 'youthcourse', 'morning', 3)";
  $conn->query($query16);

  /*
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `subscriber`
  --*/
  
  $query17="CREATE TABLE IF NOT EXISTS `subscriber` (
    `subscriber_id` int(10) NOT NULL,
    `subscriberName` varchar(50) NOT NULL,
    `subscriberEmail` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  $conn->query($query17);
  
  /*--
  -- Dumping data for table `subscriber`
  --*/
  
  $query18="INSERT INTO `subscriber` (`subscriber_id`, `subscriberName`, `subscriberEmail`) VALUES
  (1, 'JeetendraMaharjan', 'jeetendra@newslteer.com'),
  (2, 'Sujeet', 'sujeet@yahoo.com')";
  $conn->query($query18);
  /*-- --------------------------------------------------------
  
  --
  -- Table structure for table `user`
  --*/
  $query19="CREATE TABLE IF NOT EXISTS `user` (
    `user_id` int(10) NOT NULL,
    `firstname` varchar(50) NOT NULL,
    `lastname` varchar(50) NOT NULL,
    `username` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `postal_address` varchar(50) NOT NULL,
    `postcode` varchar(50) NOT NULL,
    `gender` enum('male','female','others') NOT NULL,
    `usertype` enum('admin','user') NOT NULL,
    `datetime` datetime NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  $conn->query($query19);
  
  /*--
  -- Dumping data for table `user`
  --*/
  
  $query20="INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `username`, `password`, `email`, `postal_address`, `postcode`, `gender`, `usertype`, `datetime`) VALUES
  (2, 'Ram', 'Prajapati', 'ram', '6a557ed1005dddd940595b8fc6ed47b2', 'ram@yahoo.com', 'Kumahltole', '9977', 'male', 'user', '2018-11-24 11:25:00'),
  (4, 'Prerana', 'Pandit', 'prerana', '2fda2ab158d74710c2b973eddfad335a', 'prerana@gmail.com', '9200DW', '95-DW', 'female', 'admin', '2018-12-21 08:47:00'),
  (5, 'Mark', 'Lord', 'mark', 'ea82410c7a9991816b5eeeebe195e20a', 'mark@rocketmail.com', 'Liverpool', 'FRE-123', 'male', 'user', '2014-05-25 09:57:00'),
  (6, 'jack', 'martin', 'jack', '4ff9fc6e4e5d5f590c4f2134a8cc96d1', 'jack@gmail.com', 'Jordonss', '009-TRG', 'male', 'user', '2018-12-31 00:00:00'),
  (7, 'Jacequiline', 'Farnandez', 'jacequline', 'd0ae6a274438862c3833a7a5312a5c6b', 'jackqueline@gmail.com', 'Fizaour', 'FRT-WE3', 'female', 'user', '2018-12-30 00:00:00')";
  $conn->query($query20);
 /* --
  -- Indexes for dumped tables
  --
  
  --
  -- Indexes for table `answer`
  --*/

 $query21="ALTER TABLE `answer`
    ADD PRIMARY KEY (`id`)";
    $conn->query($query21);
  
 /* --
  -- Indexes for table `booking`
  --*/

 $query22="ALTER TABLE `booking`
    ADD PRIMARY KEY (`booking_id`)";
    $conn->query($query22);
  
  /*--
  -- Indexes for table `event`
  --*/

  $query23="ALTER TABLE `event`
    ADD PRIMARY KEY (`event_id`)";
    $conn->query($query23);
  
  /*--
  -- Indexes for table `post`
  --*/
  $query24="ALTER TABLE `post`
    ADD PRIMARY KEY (`post_id`)";
    $conn->query($query24);
  
  /*--
  -- Indexes for table `question`
  --*/
  $query25="ALTER TABLE `question`
    ADD PRIMARY KEY (`id`)";
    $conn->query($query25);
  
 /* --
  -- Indexes for table `review`
  --*/
  $query26="ALTER TABLE `review`
    ADD PRIMARY KEY (`review_id`)";
    $conn->query($query26);
  
  /*--
  -- Indexes for table `students`
  --*/
  $query27="ALTER TABLE `students`
    ADD PRIMARY KEY (`studentid`)";
  $conn->query($query27);
  /*--
  -- Indexes for table `subscriber`
  --*/
  $query28="ALTER TABLE `subscriber`
    ADD PRIMARY KEY (`subscriber_id`)";
    $conn->query($query28);
  
  /*--
  -- Indexes for table `user`
  --*/
  $query29="ALTER TABLE `user`
    ADD PRIMARY KEY (`user_id`),
    ADD UNIQUE KEY `username` (`username`)";
    $conn->query($query29);
  
 /* --
  -- AUTO_INCREMENT for dumped tables
  --
  
  --
  -- AUTO_INCREMENT for table `answer`
  --*/

  $query30="ALTER TABLE `answer`
    MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50";
    $conn->query($query30);
  
  /*--
  -- AUTO_INCREMENT for table `booking`
  --*/
  $query31="ALTER TABLE `booking`
    MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20";
    $conn->query($query31);
  
  /*--
  -- AUTO_INCREMENT for table `event`
  --*/
  $query32="ALTER TABLE `event`
    MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4";
    $conn->query($query32);
  
 /* --
  -- AUTO_INCREMENT for table `post`
  --*/
  $query33="ALTER TABLE `post`
    MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4";
    $conn->query($query33);
  
  /*--
  -- AUTO_INCREMENT for table `question`
  --*/

  $query34="ALTER TABLE `question`
    MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10";
  $conn->query($query34);
  /*
  --
  -- AUTO_INCREMENT for table `review`
  --*/
  $query35="ALTER TABLE `review`
    MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4";
    $conn->query($query35);
  
  /*--
  -- AUTO_INCREMENT for table `students`
  --*/
  $query36="ALTER TABLE `students`
    MODIFY `studentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19";
    $conn->query($query36);
  
  /*--
  -- AUTO_INCREMENT for table `subscriber`
  --*/
  $query37="ALTER TABLE `subscriber`
    MODIFY `subscriber_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3";
    $conn->query($query37);
  
  /*--
  -- AUTO_INCREMENT for table `user`
  --*/
  $query38="ALTER TABLE `user`
    MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
  COMMIT";
  $conn->query($query38);
  ?>

  <button onclick="JavaScript:alert('SetUp Is Completed;; Go For HomePage!!')">
 
				<a href="index.php">
				<img src="click.jpg" alt="" class="img-responsive" style="height:250px; width:280px; padding-left: 500px; padding-top: 250px;">
</a>

</button>
<?php
?>