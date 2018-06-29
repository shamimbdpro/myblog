-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 03:25 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `post_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_details` longtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `post_image` varchar(256) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`post_id`, `post_title`, `post_details`, `category_id`, `author`, `post_image`, `date`) VALUES
(70, 'dfgdfgfdg', '<p>dfgdfgdfg</p>\r\n', 40, '', 'user_462148406066.jpg', '2018-05-19 08:42:04'),
(71, '', '<p>dfgfdgdfg</p>\r\n', 40, 'dfgdfg', 'user_248528782422.jpg', '2018-05-19 08:42:17'),
(75, 'php add post', '<p>&lt;?php<br />\r\n&nbsp; require_once(&#39;function/functions.php&#39;);<br />\r\n&nbsp;&nbsp;&nbsp; needLogged();<br />\r\n&nbsp; if(isset($_POST[&#39;post-register&#39;])){<br />\r\n&nbsp;&nbsp;&nbsp; $post_title=$_POST[&#39;post_title&#39;];<br />\r\n&nbsp;&nbsp;&nbsp; $post_details= $_POST[&#39;post_details&#39;];<br />\r\n&nbsp;&nbsp;&nbsp; $role= $_POST[&#39;role&#39;];<br />\r\n&nbsp;&nbsp;&nbsp; $author= $_POST[&#39;author&#39;];<br />\r\n&nbsp;&nbsp;&nbsp; $image= $_FILES[&#39;post_image&#39;][&#39;name&#39;];<br />\r\n&nbsp;&nbsp;&nbsp; $image_tmp= $_FILES[&#39;post_image&#39;][&#39;tmp_name&#39;];<br />\r\n&nbsp;&nbsp;&nbsp; $image_size= $_FILES[&#39;post_image&#39;][&#39;size&#39;];<br />\r\n&nbsp;&nbsp;&nbsp; $image_format= array(&#39;jpg&#39;,&#39;jpeg&#39;,&#39;png&#39;,&#39;gif&#39;);<br />\r\n&nbsp;&nbsp;&nbsp; $image_name=&#39;user_&#39;.rand(100000,1000000).rand(10000,1000000).&#39;.&#39;.pathinfo($image,PATHINFO_EXTENSION);<br />\r\n&nbsp;&nbsp;&nbsp; $div=explode(&#39;.&#39;, $image);<br />\r\n&nbsp;&nbsp;&nbsp; $fle_text=strtolower(end($div));</p>\r\n\r\n<p>&nbsp; if(!empty($image)){<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; if($image_size &gt; 1000000 ){<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $error=&quot;Maximum Upload Size 1MB&quot;;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; }elseif(in_array($fle_text, $image_format)===false){<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $error=&#39;Image format not validate&#39;;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; }else{<br />\r\n&nbsp;&nbsp; $sql = &quot;INSERT INTO blog_posts(post_title,post_details,category_id,author,post_image)<br />\r\nVALUES (&#39;$post_title&#39;,&#39;$post_details&#39;,&#39;$role&#39;,&#39;$author&#39;,&#39;$image_name&#39;)&quot;;<br />\r\n&nbsp;<br />\r\n&nbsp; if (mysqli_query($conn, $sql)) {<br />\r\n&nbsp;&nbsp;&nbsp; move_uploaded_file($image_tmp,&#39;uploads/post/&#39;.$image_name);<br />\r\n&nbsp;&nbsp;&nbsp; $msg=&#39;New post added successfuly&#39;;<br />\r\n&nbsp; } else {<br />\r\n&nbsp;&nbsp;&nbsp; echo &quot;Error: &quot; . $sql . &quot;&lt;br&gt;&quot; . mysqli_error($conn);<br />\r\n&nbsp; }</p>\r\n\r\n<p>&nbsp; mysqli_close($conn);<br />\r\n}</p>\r\n\r\n<p>}</p>\r\n\r\n<p>&nbsp; }<br />\r\n&nbsp; get_header();<br />\r\n&nbsp; get_sidebar();<br />\r\n&nbsp; get_breadcum();<br />\r\n&nbsp;<br />\r\n&nbsp; ?&gt;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-md-12&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;form class=&quot;form-horizontal&quot; action=&quot;&quot; method=&quot;post&quot; enctype=&quot;multipart/form-data&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;panel panel-primary&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;panel-heading&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-md-9 heading_title&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Add Information<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-md-3 text-right&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;a href=&quot;all-post.php&quot; class=&quot;btn btn-sm btn btn-primary&quot;&gt;&lt;i class=&quot;fa fa-th&quot;&gt;&lt;/i&gt; All Post&lt;/a&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;clearfix&quot;&gt;&lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;!-- sucess message --&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h5 style=&quot;color:green;text-align: center&quot;&gt;&lt;?php if(isset($msg)){echo $msg;}?&gt;&lt;/h5&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;!-- Error Message --&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h5 style=&quot;color:red;text-align: center&quot;&gt;&lt;?php if(isset($error)){echo $error;}?&gt;&lt;/h5&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;panel-body&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;form-group&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for=&quot;&quot; class=&quot;col-sm-3 control-label&quot;&gt;Post Title&lt;/label&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-8&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type=&quot;text&quot; name=&quot;post_title&quot; class=&quot;form-control&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;panel-body&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;form-group&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for=&quot;&quot; class=&quot;col-sm-3 control-label&quot;&gt;Post Description&lt;/label&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-8&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;textarea id=&quot;editor1&quot; class=&quot;form-control&quot; name=&quot;post_details&quot; placeholder=&quot;Add Body&quot;&gt;&lt;/textarea&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;form-group&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for=&quot;&quot; class=&quot;col-sm-3 control-label&quot;&gt;Add Category&lt;/label&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;select class=&quot;form-control select_cus&quot; name=&quot;role&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;?php<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $sel=&quot;SELECT * FROM post_catergorys&quot;;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $Q=mysqli_query($conn,$sel);<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; while($sel_result=mysqli_fetch_assoc($Q)){ ?&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;option value=&quot;&lt;?= $sel_result[&#39;category_id&#39;];?&gt;&quot;&gt;&lt;?= $sel_result[&#39;category_names&#39;];?&gt;&lt;/option&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;?php&nbsp;&nbsp;&nbsp; }<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ?&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/select&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;form-group&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for=&quot;&quot; class=&quot;col-sm-3 control-label&quot;&gt;Author&lt;/label&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input class=&quot;form-control&quot; type=&quot;text&quot; name=&quot;author&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;form-group&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for=&quot;&quot; class=&quot;col-sm-3 control-label&quot;&gt;Upload Post Image&lt;/label&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;col-sm-8&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type=&quot;file&quot; name=&quot;post_image&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;panel-footer text-center&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;button class=&quot;btn btn-sm btn-primary&quot; name=&quot;post-register&quot;&gt;REGISTRATION&lt;/button&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/form&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&lt;!--col-md-12 end--&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&lt;!--admin-part end--&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&lt;!--row end--&gt;<br />\r\n&nbsp;&nbsp;&nbsp; &lt;/div&gt;&lt;!--container-fluid end--&gt;<br />\r\n&nbsp;&nbsp; &lt;?php get_footer(); ?&gt;</p>\r\n', 43, 'phpexpert', 'user_63544263463.jpg', '2018-05-19 08:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL,
  `par_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `user`, `text`, `date`, `par_code`) VALUES
(6, 'Admin', 'hi', '2018-03-28 00:05:34', 'hOjMFW'),
(7, 'Admin', 'Hey do you know about the post', '2018-03-28 00:21:37', 'hOjMFW'),
(8, 'Admin', 'Hey do you know about the post', '2018-03-28 00:22:35', 'hOjMFW'),
(9, 'Admin', 'hi', '2018-03-28 00:31:20', '9xAwoR'),
(10, 'Admin', 'hi', '2018-03-28 00:46:04', 'iF8GCD'),
(11, 'Admin', 'Hey how are you', '2018-03-27 20:52:51', '3DjgLo'),
(12, 'Admin', 'fg', '2018-03-27 20:59:49', 'YiWtPx'),
(13, 'Admin', 'fg', '2018-03-27 21:42:47', '9xAwoR'),
(14, '', 'hum', '2018-03-27 21:43:17', 'YiWtPx'),
(15, '', 'hi', '2018-03-27 21:43:49', 'O2pUU6'),
(16, '', 'hrlo', '2018-03-27 21:44:26', 'O2pUU6'),
(17, '', 'no', '2018-03-27 21:45:23', 'O2pUU6'),
(18, '', 'no', '2018-03-27 21:57:22', 'O2pUU6'),
(19, '', 'hi', '2018-03-27 22:00:11', 'O2pUU6'),
(20, '', 'hi', '2018-03-28 10:59:21', 'iF8GCD'),
(21, '', 'hi...m', '2018-04-05 18:27:08', 'hOjMFW'),
(22, '', 'dfgdfgdfg', '2018-05-19 10:17:39', 'dyRd22'),
(23, '', 'ghgh', '2018-05-19 10:19:07', '6QeOoi'),
(24, '', 'Hi', '2018-05-25 06:15:01', '8MbLRD');

-- --------------------------------------------------------

--
-- Table structure for table `cit_roles`
--

CREATE TABLE `cit_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cit_roles`
--

INSERT INTO `cit_roles` (`role_id`, `role_name`) VALUES
(1, 'Superadmin'),
(2, 'Admin'),
(3, 'Author');

-- --------------------------------------------------------

--
-- Table structure for table `cit_users`
--

CREATE TABLE `cit_users` (
  `user_id` int(11) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '1',
  `user_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cit_users`
--

INSERT INTO `cit_users` (`user_id`, `User_name`, `username`, `user_phone`, `user_email`, `user_pass`, `role_id`, `status`, `user_photo`) VALUES
(25, 'shamim', 'shamim', '01794939992', 'shamim1@gmail.com', '123456', 1, '1', 'user_747143777895.jpg'),
(40, 'shamimn', 'shamimsf', '454554252', 'dfgdg@gmail.com', '123456', 1, '1', 'user_317318915251.jpg'),
(44, 'shamimhasanf', 'shamimbb', '01476553532', 'md.shamimtpi@gmail.com', '123456', 2, '1', 'user_557078124199.jpg'),
(46, 'shamimhasanvbb', 'shamimbbghg', '56546546546', 'dfgdfgs@gmail.com', '123456789', 1, '1', 'user_821874626949.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_subject` varchar(50) NOT NULL,
  `contact_message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES
(83, 'dfgfdg', 'dfgfdg@gmail.com', 'sdfdsf', 'dfdsf'),
(112, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'hr'),
(113, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'hr'),
(114, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'hr'),
(115, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'hr'),
(116, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'hr'),
(117, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'hr'),
(118, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'hr'),
(119, 'ddf', 'shamimtpi1@gmail.com', 'sdf', 'dsf'),
(120, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'ji'),
(121, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'ji'),
(122, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'ji'),
(123, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'ji'),
(124, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'ji'),
(125, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'ji'),
(126, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'ji'),
(127, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'ji'),
(128, 'Mogan', 'md.shamimtpi@gmail.com', 'shamim@gmail.com', 'ji'),
(129, 'Mogan', 'dddd@gmail.com', 'fgfg', 'hi'),
(130, 'hyjj', 'Md.shamimtpi@gmail.com', 'Web Designer And Developer', 'hi'),
(131, 'Shamim', 'shamimtpi1@gmail.com', 'Web Designer And Developer', 'hui');

-- --------------------------------------------------------

--
-- Table structure for table `gellery`
--

CREATE TABLE `gellery` (
  `gellery_id` int(11) NOT NULL,
  `gellery_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gellery`
--

INSERT INTO `gellery` (`gellery_id`, `gellery_image`) VALUES
(72, 'user_849913947949.jpg'),
(73, 'user_61436975007.jpg'),
(74, 'user_723704584482.jpg'),
(75, 'user_275774690938.jpg'),
(76, 'user_291073669625.jpg'),
(77, 'user_573875570445.jpg'),
(78, 'user_506443976687.jpg'),
(79, 'user_623160446421.jpg'),
(82, 'user_64352158866.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `option_id` int(11) NOT NULL,
  `page_title` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `about` longtext NOT NULL,
  `widget` longtext NOT NULL,
  `copyright` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`option_id`, `page_title`, `logo`, `about`, `widget`, `copyright`) VALUES
(1, 'Knowldge | Share ', 'KnowladgeShare', 'You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!', 'You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!', 'Copyright Â© Your Website 2018');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `user`, `text`, `date`, `code`) VALUES
(8, 'Admin', 'Hello how are you boy', '2018-03-28 00:04:54', 'hOjMFW'),
(9, 'Admin', 'This is Good Post', '2018-03-28 00:20:42', 'R3RrJo'),
(10, 'Admin', 'This is Good Post', '2018-03-28 00:21:15', 'qDkY4L'),
(11, 'Admin', 'hi', '2018-03-28 00:22:40', '9xAwoR'),
(12, 'Admin', 'hi', '2018-03-28 00:23:04', 'YiWtPx'),
(13, 'Admin', 'hi', '2018-03-28 00:23:11', '8MbLRD'),
(14, 'Admin', 'this is news', '2018-03-28 00:37:37', 'M1I81t'),
(15, 'Admin', 'dfsdf', '2018-03-28 00:37:51', '6QeOoi'),
(16, 'Admin', 'dfsdf', '2018-03-28 00:39:27', 'iF8GCD'),
(17, 'Admin', 'dfsdf', '2018-03-28 00:40:01', 'fwvugI'),
(18, 'Admin', 'dfsdf', '2018-03-28 00:41:00', 'y6I8gE'),
(19, 'Admin', 'Hellow all brow', '2018-03-28 00:43:58', 'dyRd22'),
(20, 'Admin', 'Hellow all brow', '2018-03-28 00:44:44', '3DjgLo'),
(21, 'Admin', 'Hellow all brow', '2018-03-28 00:45:58', 'O2pUU6');

-- --------------------------------------------------------

--
-- Table structure for table `post_catergorys`
--

CREATE TABLE `post_catergorys` (
  `category_id` int(11) NOT NULL,
  `category_names` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_catergorys`
--

INSERT INTO `post_catergorys` (`category_id`, `category_names`) VALUES
(40, 'HTML'),
(41, 'JQuery'),
(43, 'PHP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cit_roles`
--
ALTER TABLE `cit_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `cit_users`
--
ALTER TABLE `cit_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_phone` (`user_phone`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `gellery`
--
ALTER TABLE `gellery`
  ADD PRIMARY KEY (`gellery_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_catergorys`
--
ALTER TABLE `post_catergorys`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cit_roles`
--
ALTER TABLE `cit_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cit_users`
--
ALTER TABLE `cit_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `gellery`
--
ALTER TABLE `gellery`
  MODIFY `gellery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `post_catergorys`
--
ALTER TABLE `post_catergorys`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `post_catergorys` (`category_id`);

--
-- Constraints for table `cit_users`
--
ALTER TABLE `cit_users`
  ADD CONSTRAINT `cit_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `cit_roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
