-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 06:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tag` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `tag`) VALUES
(1, 'Baby Boy Blue Shirt', 200, 'https://xcdn.next.co.uk/Common/Items/Default/Default/ItemImages/Search/224x336/791405.jpg?X56', 1),
(2, 'Levis Full OutFit', 150, 'https://xcdn.next.co.uk/Common/Items/Default/Default/ItemImages/Search/224x336/101169.jpg?X56', 2),
(3, 'Levis Full Sleeves Shirt', 200, 'https://assets.ajio.com/medias/sys_master/root/h13/ha2/14111760515102/-1117Wx1400H-460399058-blue-MODEL.jpg', 3),
(4, 'U.S POLO full sleves shirt', 200, 'https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/503326/2018/5/9/4c89a202-cb13-45a0-8cf0-abe68854de341525860756905-US-Polo-Assn-Men-Pink-Polo-T-shirt-3291525860756627-1.jpg', 4),
(5, 'Medium Stone Jeans', 7, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQKxjSVnRuzvtqnzXhcFN3aJu_vpqlXHtQ1Mt0poOyWL_VeNCDd8_yv_TUsv9zhKW7jiDepSVNLti-Ubg9TjG79SP5bemHfcU8h3bXZMIHeHEkqB3MOTBDQRDs&usqp=CAE', 5),
(6, 'Denil Woman Black Sandals', 4, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTxcN5uPg2HvQjfV-kMsnTY6C6qqKSgBIYmSrj_G6r_GVLGZ5FFjUksMRVpEOpxR-SeD1mlxTSBd2Pz2zNFQoekn0ernDOH9OA_-O7Gs_roP9MVdOnA8ebtTQ&usqp=CAE', 6);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(2) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `username`, `email`, `password`) VALUES
(9, 'Kapil', 'rivipiv156@hiwave.org', '912ec803b2ce49e4a541068d495ab570'),
(10, 'kapil', 'rivipiv156@hiwave.org', 'a2550eeab0724a691192ca13982e6ebd');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `p_type` varchar(20) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `category` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `link` varchar(256) DEFAULT NULL,
  `tag` int(3) NOT NULL DEFAULT 0,
  `atcl` varchar(256) NOT NULL,
  `bnl` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_type`, `name`, `price`, `category`, `quantity`, `link`, `tag`, `atcl`, `bnl`) VALUES
(1, 'Shoes', 'puma', 200, 'men', 0, 'https://www.jeans24h.eu/images/381100879_main.jpg', 0, '', ''),
(3, 'jeans', 'levis', 200, 'men', 0, 'https://i.etsystatic.com/24518159/d/il/6577c9/2497227843/il_340x270.2497227843_9hg2.jpg?version=0', 0, '', ''),
(4, 'jeans', 'calven klien', 20, 'men', 0, 'https://n2.sdlcdn.com/imgs/f/r/x/U-S-Polo-Jeans-Blue-SDL151437965-5-70edc.jpg', 0, '', ''),
(6, 'belt', 'American Levis', 50, 'men', 0, 'https://www.americanjeans.com/images/accessories/levis-a-11lv0204-brown.jpg', 0, '', ''),
(7, 'belt', 'reddish brrown levis', 200, 'men', 0, 'https://i.ebayimg.com/thumbs/images/g/z0AAAOSwoyleakwO/s-l225.jpg', 0, '', ''),
(8, 'belt', 'USPA', 300, 'men', 0, 'https://images-na.ssl-images-amazon.com/images/I/818Lr0lYnDL._UX679_.jpg', 0, '', ''),
(9, 'belt', 'Woodland Casual', 200, 'men', 0, 'https://rukminim1.flixcart.com/image/714/857/jgpfs7k0/belt/u/e/5/38-inches-bt-1059041-bt-1059041-belt-woodland-original-imaf4vwfgmk8agxk.jpeg?q=50', 0, '', ''),
(10, 'belt', 'Nike', 200, 'men', 0, 'https://www.allingolfer.com/content/images/thumbs/0000844_nike-mens-cutout-and-cutout-ii-belts-2-pack.jpeg', 0, '', ''),
(11, 'belt', 'Peter England', 200, 'men', 0, 'https://images-na.ssl-images-amazon.com/images/I/81i10Y%2BXG3L._UX679_.jpg', 0, '', ''),
(12, 'Deodrent', 'Fogg', 200, 'men', 0, 'https://images-na.ssl-images-amazon.com/images/I/61AZwEdIl1L._SL1200_.jpg', 0, '', ''),
(13, 'Deodrent', 'Denver', 200, 'men', 0, 'https://www.deobazaar.com/admin/product_image/Denver-Hamilton-Original-EDP-Perfume-Spray.jpg', 0, '', ''),
(14, 'Deodrent', 'Skinn Titan', 200, 'men', 0, 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/D4F2255F5DDC42779816F2EB48793FCF/203318937_9999_D4F2255F5DDC42779816F2EB48793FCF.jpg', 0, '', ''),
(15, 'Deodrent', 'Park Avneue Voyage', 200, 'men', 0, 'https://5.imimg.com/data5/QF/HJ/MY-20033121/park-avenue-voyage-signature-deo-for-men-100g-2f130ml-500x500.png', 0, '', ''),
(16, 'Deodrent', 'Axe', 200, 'men', 0, 'https://sc02.alicdn.com/kf/U3340a148e26846b78c54c69c599c6042K.jpg', 0, '', ''),
(17, 'Deodrent', 'Gucci Bloom', 200, 'men', 0, 'https://cdn.shopify.com/s/files/1/0011/8793/8348/products/rasasi-mushreqah-attar-perfume-pure-imported-for-mens-and-womens-made-in-u-a-e-dubai-11962014826598_2000x.jpg?v=1562819388', 0, '', ''),
(18, 'T-shirt', 'Peter England', 200, 'men', 0, 'https://www.fabindia.com/ccstore/v1/images/?source=/file/v3744307102910851434/products/10546033BR.f.26092018.jpg', 0, '', ''),
(19, 'T-shirt', 'Levis', 200, 'men', 0, 'https://images.asos-media.com/products/levis-t-shirt-batwing-logo/5373264-1-black?$XXL$&wid=513&fit=constrain', 0, '', ''),
(20, 'T-shirt', 'U.S. POLOO', 200, 'men', 2, 'https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/503326/2018/5/9/4c89a202-cb13-45a0-8cf0-abe68854de341525860756905-US-Polo-Assn-Men-Pink-Polo-T-shirt-3291525860756627-1.jpg', 4, '', 'http://localhost/project/mens_shirt_s2.php'),
(21, 'T-shirt', 'levis full sleevs', 200, 'men', 2, 'https://assets.ajio.com/medias/sys_master/root/h13/ha2/14111760515102/-1117Wx1400H-460399058-blue-MODEL.jpg', 3, '', 'http://localhost/project/mens_shirt_s1.php'),
(22, 'T-shirt', 'Kelivn-Klan', 200, 'men', 0, 'https://images-na.ssl-images-amazon.com/images/I/81dj59oSLlL._AC_UX466_.jpg', 0, '', ''),
(23, 'T-shirt', 'Gucci', 200, 'men', 0, 'https://media.gucci.com/style/DarkGray_Center_0_0_800x800/1537981204/440103_X3F05_9045_004_100_0000_Light-Oversize-washed-T-shirt-with-Gucci-logo.jpg', 0, '', ''),
(24, 'Kurta', 'Mnayavar', 200, 'men', 0, 'https://5.imimg.com/data5/TX/PL/MY-2730475/red-luxurious-kurta-sdes245-329-500x500.png', 0, '', ''),
(25, 'Kurta', 'Levis plain white', 200, 'men', 0, 'https://img1.cfcdn.club/e4/05/e4b69b1c67a4744e110c0638a7c0e105_350x350.jpg', 0, '', ''),
(26, 'Kurta', 'Levis full sleeves', 200, 'men', 0, 'https://img1.cfcdn.club/00/5f/00080f04fcc4ad92749bde9ddd221d5f_350x350.jpg', 0, '', ''),
(27, 'Kurta', 'Manyavar Red', 200, 'men', 0, 'https://assets.panashindia.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/R/a/Rangbaaz-159_9.jpg', 0, '', ''),
(28, 'Kurta', 'Manyavar Yellow', 200, 'men', 0, 'https://assets.panashindia.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/R/a/Rangbaaz-159_9.jpg', 0, '', ''),
(29, 'Sandal', 'Nike', 300, 'men', 0, 'https://shop.r10s.jp/noel-ange/cabinet/shoes/nike6/nike-882694-002-al-a.jpg', 0, '', ''),
(30, 'Sandal', 'Puma', 399, 'men', 0, 'https://rukminim1.flixcart.com/image/300/300/sandal/g/u/v/puma-black-puma-royal-cydon-dp-puma-8-original-imaeq4z9xva9nvks.jpeg?q=90', 0, '', ''),
(31, 'Sandal', 'Khaki Woodland', 500, 'men', 0, 'https://sw-ol-image.azureedge.net/cdn-process/https://images-eu.ssl-images-amazon.com/images/I/41faElmPpfL.jpg', 0, '', ''),
(32, 'Sandal', 'Sparks', 346, 'men', 0, 'https://www.easy2by.com/image/cache/catalog/images/ss485%20olive/ss_485_olive_yellow-1-1000x1000.jpg', 0, '', ''),
(33, 'shoes', 'Woodland', 200, 'men', 0, 'https://images-na.ssl-images-amazon.com/images/I/91F4PENHf%2BL._UX500_.jpg', 0, '', ''),
(34, 'shoes', 'Nike sports', 200, 'men', 0, 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 0, '', ''),
(35, 'shoes', 'Addidas sports', 200, 'men', 0, 'https://db3ujbgzkl8k8.cloudfront.net/catalog/product/thumbnail/9a9b60a8ae77a5b6e5d880774535628a/image/700x700/000/80/x/a/xabi_alonso_signed_black_adidas_boot_with_metal_studs_2_2_1.png', 0, '', ''),
(36, 'Lipstick', 'Elle 18 Matte', 1, 'Cosmetics', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQS9e5ebjJY40ASu7VHmTzwqh224ctGcz7IfRoZpoOtMg7RF18_Vbusd0x2531N-smJLWTGrsJ8HtUgnc1hNzZ2ohW7mUkGRo5aOqnX91Iquj4wU2fBZmOD&usqp=CAE', 0, '', ''),
(37, 'Lipstick', 'Miss Rose Brand matte', 2, 'Cosmetics', 0, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQNa4CkOMjVUwZWPEhXxhuJJB7EXKLDqlVwOkKxISlGQalVLlxQ3mD8yeMXZlbnPl5jUcDR8XmDkEOfHDnPdQ7vIw8WYPk5t-1eZJ1PBscpEMNMZ7tySQtxCw&usqp=CAE', 0, '', ''),
(38, 'Makeup', 'Vanity Kit', 7.2, 'Cosmetics', 0, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRBxYgAzo7Clgx1y-pMaaY7u6UwQxg8_86WWzVN0aohLXAtqJlW142EvaMcaMatrF7Mq4CiHmChc5KRTLGozRenNY5KFO-m8U0Z61rmFc6nHVE2Px7tecN3wg&usqp=CAE', 0, '', ''),
(39, 'Eye Shadow', 'Beauty Rose Gold', 4.2, 'Cosmetics', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQ5ICYElES5Cm1I9rRDMix439XZVIeBSJpZ9GjYN81HT4ZWbNrn8VSMUnW01bvSKT-e7iQBhCNyyq3E7oTCAkgJEj3LyzI_w-eDN5oF00Sj8-mh0l6kxoy4&usqp=CAE', 0, '', ''),
(40, 'Creamy Matte Lipstic', 'Ny bae', 1.02, 'Cosmetics', 0, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSQtCgUXHiks4yDBdk8SIul_l5aRrlEJ3r-hfZdi8J6Ju3LN4buZEyRZBIGNSMIUrROGkdsU23BrvtH6x11htRaWvovW3xNtDwPEx4_cGw&usqp=CAE', 0, '', ''),
(41, 'Matte Lipstick', 'Lakme Enrich', 4, 'Cosmetics', 0, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSM_7_cwsYBsfzXcE2L_1Y2EQoi_2zAjO5ENRqsziCDBQxERU5hBWuAgjX4fx2f4SL82uwo0HI3gctFbt8IBUDdZZw4fBZaoG10o46FsNOyv4ju17tTpzS-sw&usqp=CAE', 0, '', ''),
(42, 'Sports Watch', 'Fastrack', 50, 'men', 0, 'https://n1.sdlcdn.com/imgs/a/j/0/Fastrack-Sports-3099SM02-Men-s-SDL639556369-1-16c9c.jpg', 0, '', ''),
(43, 'Centrik Watch', 'RADO', 200, 'men', 0, 'https://4.imimg.com/data4/WN/WW/MY-26510561/rado-jubile-centrix-rose-gold-watch-for-men-500x500.jpg', 0, '', ''),
(44, 'Watch', 'Titan', 200, 'men', 0, 'https://5.imimg.com/data5/OC/FM/MY-48068321/titan-mens-watch-500x500.png', 0, '', ''),
(45, 'Digital Watch', 'Sonata', 200, 'men', 0, 'https://www.price-hunt.com/content/images/watches/sonata-digital-black-dial-mens-watch-77070-pp-01_l.jpeg', 0, '', ''),
(46, 'Smart Watch', 'LED', 200, 'men', 0, 'https://assetscdn1.paytm.com/images/catalog/product/W/WA/WATMISS-PERFECTMISS26881727824C0B/1562698577454_0..jpg?imwidth=320&impolicy=hq', 0, '', ''),
(47, 'watch', 'Diesel D78420', 200, 'men', 0, 'https://images-na.ssl-images-amazon.com/images/I/91Vf2YuGyRL._AC_UX522_.jpg', 0, '', ''),
(48, 'Sunglasses', 'Fastrack Aviator', 50, 'men', 0, 'https://d1xbedroeo1z0l.cloudfront.net/fit-in/400x600/Amazon.in/XRVOS_amz_B07K1HKG4C_1100x1100.jpg', 0, '', ''),
(49, 'Sunglasses', 'Vincent Chase', 200, 'men', 0, 'https://rukminim1.flixcart.com/image/714/857/sunglass/g/y/s/vc-5107-green-gunmetal-vincent-chase-large-original-imadrfrxmz3dh89p.jpeg?q=50', 0, '', ''),
(50, 'Sunglasses', 'Calvin Klien', 200, 'men', 0, 'https://au.shadestation.com/media/thumbs/920x575/media/product_images/Calvin-Klein-Sunglasses-CK18112S-045fw920fh575.jpg', 0, '', ''),
(51, 'Sunglasses', 'Retro', 200, 'men', 0, 'https://cdn.shopify.com/s/files/1/2655/2888/products/Steampunk-Sunglasses-Women-Round-Glasses-Goggles-Men-Side-Visor-Circle-Lens-Unisex-Vintage-Retro-Style-Punk_1500x1500_EMBED_Gold_Frame_Gold_Lens_900x.jpg?v=1523071917', 0, '', ''),
(52, 'Sunglasses', 'Ray-Ban', 200, 'men', 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQIbpjpfYSd0eOLylMTcJx1zqtxAUhL8RM8WA&usqp=CAU', 0, '', ''),
(53, 'Sunglasses', 'Gucci', 200, 'men', 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQIbpjpfYSd0eOLylMTcJx1zqtxAUhL8RM8WA&usqp=CAU', 0, '', ''),
(54, 'Slipper', 'Levis', 200, 'men', 0, 'https://cdn.fashiola.in/L61076287/levis-levis-men-navy-printed-flip-flops.jpg', 0, '', ''),
(55, 'slipper', 'Nike gripped', 200, 'men', 0, 'https://i.pinimg.com/originals/bd/7b/2e/bd7b2e7ff531f8ff5a3e2ff54baefffd.jpg', 0, '', ''),
(56, 'slipper', 'Addidas', 200, 'men', 0, 'https://m.media-amazon.com/images/I/91X5+VHfsoL._AC_UL320_.jpg', 0, '', ''),
(57, 'slipper', 'Cheap Levis', 200, 'men', 0, 'https://cf.shopee.ph/file/16c3fd0f30ae3f70ef38f144f5758fd3', 0, '', ''),
(58, 'Slipper', 'Nike air max', 200, 'men', 0, 'https://cdn.fashiola.in/L52268190/nike-men-blue-solid-chroma-5-thong-flip-flops.jpg', 0, '', ''),
(59, 'slipper', 'Chroma', 200, 'men', 0, 'https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fwp-content%2Fblogs.dir%2F6%2Ffiles%2F2019%2F04%2Fadidas-adilette-luxe-slides-sandals-core-black-release-111.jpg?q=75&w=800&cbr=1&fit=max', 0, '', ''),
(60, 'shoes', 'Nike sneakers', 200, 'men', 0, 'https://images.unsplash.com/photo-1570464197285-9949814674a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=666&q=80', 0, '', ''),
(61, 'sandal', 'Women fashion', 8, 'women', 0, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQGK7ynw1s4PDAdSvx2sqYC5EWIewP_Yj9toptlxSlV3oysz177ii861WCb5T5Iw829DTlXgYucKs1CxyHtAxXzCnFvmmPiBTasQFTnbij76wGwzG7qs6WP6A&usqp=CAE', 0, '', ''),
(62, 'sandal', 'Cat walk golden', 8.5, 'women', 0, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcT0jCudjwYzYmyJub2bFFFLWcTqSAE_lxlRUIm4HgHHRYvDNLP46COWMOvS3PskoStKkrttziAzxYva0i-4bmhbW-mmmnjl_2C5uDkLtlcOPbho7heuqBLZKQ&usqp=CAE', 0, '', ''),
(63, 'sandal', 'RGK Fashion', 7, 'women', 0, 'ttps://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcR_VBEAV4rwlMua_ss7B5gYDIdMq_iyIFT2DlSxSM-ye4NZXb5xDBlVcE-5JsNswj8Zos_JdsmTBYv2G7FbYIoGf76WHI64Eo2furlvAzr5WtqHMm16F7kamA&usqp=CAE', 0, '', ''),
(64, 'heels', 'Dressbury Embroided', 19, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQGB66pGVvO600XSYBpPFPuOABWcalwDmOQhfGykirlJqomLp_ISrB7sY5GFdnEUZBLmVjVCPnvTcNOil1AnUhkE1AS7_7MxvVDs3nfjyKLv8gAX37I1nYovw&usqp=CAE', 0, '', ''),
(65, 'sandal', 'Denil Black', 4, 'women', 2, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTxcN5uPg2HvQjfV-kMsnTY6C6qqKSgBIYmSrj_G6r_GVLGZ5FFjUksMRVpEOpxR-SeD1mlxTSBd2Pz2zNFQoekn0ernDOH9OA_-O7Gs_roP9MVdOnA8ebtTQ&usqp=CAE', 6, '', 'http://localhost/project/women_heel2.php'),
(66, 'heels', 'Toshina', 6, 'women', 0, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQxFSM014eqz_PB_1qEKtWiuofAJzXV_HQ8glAlB3KFH4dJm0ykFQuuMQ17oUlQb9CjZXqcAzG_VBU63G8Sj80bNS4-GC_Q9P7NpzlAOv7mvChzFc8ikYk4Fw&usqp=CAE', 0, '', ''),
(67, 'jeans', 'medium stone', 7, 'women', 2, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQKxjSVnRuzvtqnzXhcFN3aJu_vpqlXHtQ1Mt0poOyWL_VeNCDd8_yv_TUsv9zhKW7jiDepSVNLti-Ubg9TjG79SP5bemHfcU8h3bXZMIHeHEkqB3MOTBDQRDs&usqp=CAE', 5, '', 'http://localhost/project/woman_j1.php'),
(68, 'Dark Blue jeans', 'V2 kart', 4, 'women', 0, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSFqdZfv-F4uLG8Lc0LBxqemhTJMHYFSSzYGQ7RDI_dV998oVUb4SvaNOC8JmKfgDQVozmL9gnNwA4n89WX0u6BgfXy0YV-qXLV9KwEqV_x7GqoLtMrXTyJ&usqp=CAE', 0, '', ''),
(69, 'slim fit jeans', 'Ginger Solid', 10.5, 'women', 0, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSVrnpomx3nlr23QpHIouwIBHgZ-lUpK1cwXJNbS7T9OzP9EiV_joJLCAL9KI7MN05QGcyNC47KdPmUZaUeTFMZ0rU3nuhyGh7sP_W8in-EqM4bPewrathh&usqp=CAE', 0, '', ''),
(70, 'skinny fit jeans', 'here&now', 12, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRpx0FIoDnyN-Vkm1tgGFVMQzU5EFafeWyiuZzxt41KDxQdwAsFng5M_ceh3CsJsldJhVU-vtdEm3nxyFY5l8Trgky72cdOvdpzWaIEahN6irG6O-ZLwbpQ&usqp=CAE', 0, '', ''),
(71, 'black jeans', 'Xee Skinny', 9, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSUzT_Nsk4aFxjfWviyjZjxj1erVdw728KOTSGxxr3SCCMbHQCvzRgm96rZv8VSIQadoEKnRR3q2USyo-VTP-iMMydMGBPzjMEXjy9jwTqP3BWCKwmRYCICvQ&usqp=CAE', 0, '', ''),
(72, 'White jeans', 'Kotty Regular', 8.1, 'women', 0, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQW159UYCYfbgMzw7SBzBaS05xSqs1WbDdYHtJfWLWBg4VtPoq3HZj4ouorq-bHxhm1U08Cy9lfcanlW1RlE5uRX5vA33dUxskcr88L7bMJCkE1Ak7laTGBGg&usqp=CAE', 0, '', ''),
(73, 'kurta', 'Peach layred', 18.27, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRLIxKPI1V0YWPhLHbiMs1c972OKvYQToe79zAxNMN8sfasUa4mLl5kCAQsH4O1_OIhZZ1dYwHZa_D7q2HP9_ggGO2upMVqEEDKCpEKDvWR&usqp=CAE', 0, '', ''),
(74, 'kurta', 'navy blue printed', 19, 'women', 0, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSHPXH0SAt7bJ3_s2fML2IcJLkKE8UMQmftOxHdcUdnLRJ6oV-RMJoN0dITRsNESP_1pLoOfVkTOLJpjyduEWF-_dOKUsDrg9VLcXsy_1mJ&usqp=CAE', 0, '', ''),
(75, 'kurta', 'Aurelia White Printed', 4.5, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRODKmhhzAvuT338cu667vnk5gQ2S9gp_5YxtTlYnu89VkBS_wJphO6Q1AYcU-D97D1varE7qDI66xTzeouJmIMgt5uJdtfT00xHFun1cHiiC3ds55nKUH3uQ&usqp=CAE', 0, '', ''),
(76, 'kurta', 'sera polka dot', 18.5, 'women', 0, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQZIRzVhzz8ttrsRyzc6AsZCgnEQtPiMBks_zycwZv1T5Jbont-E9Wi2LFl6ZxPUlq93t1XEDnYkqZsbZtwzBu-uQlptfD0gJeUsaWa2uah6dalyZKFprWC&usqp=CAE', 0, '', ''),
(77, 'kurta', 'Vastranikhar Plain', 10, 'women', 0, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRd20XCR4_Eryjj4vrE8Cvz3uCUB_KHZuZ-cETOUFpPEpNxD7hM85ey08zjwSPZtQxfljXgxN0TxVqtioFIrrMlSwds_MfN1AkNrmtVo7wRCIdvlco3isH5&usqp=CAE', 0, '', ''),
(78, 'Kurta', 'Flevia Creation Fit', 12, 'women', 0, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTWYbW6taMFxXnWk1mSUJfBS4ufosMzEsfpzox_Tw6B4MPsyCglgrJ72HqGgfVgZ1dWhELDaqTz48AGMmXcyURgHkpcEHhOjVUhqOa2DBBp&usqp=CAE', 0, '', ''),
(79, 'purse', 'Dune London Medium Tone', 101, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcS6GH_vZBVgYtqg5Xa1yvnKDSrgefV3g9zgzurfaKBzJVDAihOiP3zrZhz_ebAvN0pIX8Hq60kNTmrzcmDolQRl3VyytAbdEhiO16BQ_9mKvTvW8z7pFkiZKw&usqp=CAE', 0, '', ''),
(80, 'Purse', 'Shining star', 20, 'women', 0, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRxy5qLsssJSAynLmQRQ6gH3a80KziaqJKh7E6x9kVHPuWt1eglmvaS0_czjc-l8nzav30oT_pEMIImcpqVUcJY2vqlBL2VytKQ_I-aKmI&usqp=CAE', 0, '', ''),
(81, 'shoulder bag', 'Fastrack Pink', 20, 'women', 0, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcT_zN_aM1kKUTdNNpjj64J-lvMdKd2WAFs7JyFT3uLRcJHiYFkjBDX4D65aKRXu9fqsQN2zfjCo10F8RhR_aFajaD7Eml2AMsNcJkePdSL-t9y5fEuRDUXA&usqp=CAE', 0, '', ''),
(82, 'purse', 'Miniso sling Bag', 8, 'women', 0, 'ttps://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTRQeiDY5QkR73_RShMebX8WKJsx3gN3vAVjx7m2SFVP4xSUWZuqg-666gqt2X7aP-iS_J94N4yrS_0w2HPZLLVU0Ztg8_8wgXagjnNMJcC&usqp=CAE', 0, '', ''),
(83, 'shoulder bag', 'Miniso Blue', 7.5, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQQtOwiiNJjF_Lt3la8vQC99TZzZeUUj1xXRLEjSP03s3o_NbBx1MCvKbjJvefZ4szrkzDxt2VZehez_YQJ2MaspntakI5jjIasuMsVgXVV&usqp=CAE', 0, '', ''),
(84, 'purse', 'Miraggio Phoebe Cross bod', 15, 'women', 0, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcT-pXhw2ZtiBsMxX6ddlFUOlA_yPETi-rd3MYbutii_fm9d_HMIYBerJjxGS56RRYUmCk5m4pIgQnBKSd60O3VNZA37-zgEn5w1-QXcQf-6N3iiJ8R0bbJwUg&usqp=CAE', 0, '', ''),
(85, 'shirt', 'Mizago Bishop Sleeve', 10, 'women', 0, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ9isWRzN37gPIC70TxN1NPssJOaUsxHtFbzncanMdSco4lph2HvPa8vCj-SLXwATREoA_BOQDPLK8ZltORadpPg5Z_smpmQsFEkBtHijca&usqp=CAE', 0, '', ''),
(86, 'shirt', 'V2 Kart Plain Casual', 3.2, 'women', 0, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcR-gHj-T0RsCwundrJ4luy2O_9zpsuScDYg1Cqomgf8PHQnqRZtQ9sJORt_SJ5TASAM6a8jgEbjCNB-iTI2fUhNIhfYncGD4ODqzP7cMM9r72_UTw_B5xlQ&usqp=CAE', 0, '', ''),
(87, 'shirt', 'Blue Pin Shoulder', 12.5, 'women', 0, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSPV59Qu_UFiLsWQpkiEgmoCxIF4P_3oHeT4bEMrkUOOJj4BSZ685BSynTHjpDFBfQXkyDMHs3CJfRcnTXX0JDCaxlwmv9iwe7TOMCgQic&usqp=CAE', 0, '', ''),
(88, 'Shirt', 'Ladybird Casual Blue', 7, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcToWoIn9d5vmLXM1xulUvwPkTbTFTO_o89fw3P_odFkKwjqpuHkKfDqtkF0k3WiB-UdFsPum34Jzey2oyNyivNbtU7zTVch-n8kvR6UUvs&usqp=CAE', 0, '', ''),
(89, 'shirt', 'Tokyo Talkies White Strip', 5.5, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRlEB_ikrWCW85KCl3NJkt6aqmpcThkNhqPOoJsapIgo8X3xIvSoac6O5Gn2GqB3PGxxqnDVULsyjWLShoGZQ0zeHwi_Lf5x83xBiRoSk6qQ0IqiNwDmNvF&usqp=CAE', 0, '', ''),
(90, 'Shirt', 'Itliutki Casual Green', 10, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRHjYN2lR5u6hzP-YCauqARuyIEqfd1NUYIOHD5OTdp3BqmGGYA4jfs7o6LMImYb9t1tv0cEgJ5xaGSKBUrfbXH6l67LYgzP81UjJ38O-WL&usqp=CAE', 0, '', ''),
(91, 'sunglasses', 'Hawk Gold Full Frame', 18, 'women', 0, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcR0A9V0OeWRMtBykmOQqSXzySwm_ztMauoGjSHz8-Kg2nvUxWvLpCTJxxCkp5xHt5-0c5JM3FYQ8pwizV1a0SVelELbtYt02u2XyCi8KaP5&usqp=CAE', 0, '', ''),
(92, 'sunglasses', 'Hawk Black Full Frame', 10, 'women', 0, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRA-ePgN1RPjfVH0ZZoex7RxKogqqycpFit_s4hi-DKRZHh2g0kk93F1_65iX_phV74-UCwicpoNPf0EMlF-eUKpdFhoimDSn2dCj7naxzdazYBhTbdgBdi&usqp=CAE', 0, '', ''),
(93, 'sunglasses', 'Yooske Cat Eye', 4.5, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSaeIR5b2CkTDagHBQeO-FzqZa45yyXM70PhE3uJgDZf3FUQo7-1tSrshVVw1cpxszCD0kQRikPlD4VR_jyLqPK-iTVXL1BZGe7W-tUB_KBf7VjBYJ49vTy&usqp=CAE', 0, '', ''),
(94, 'sunglasses', 'Dressbury Hexagon Mirror', 9, 'women', 0, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRboWQj0-AVTXPFZ7HnHAO5ba-SB75rA_6bJZnG66MMmJLTWdylyu43gKy0Uf1iyF7gMZlVV6vyw7XnFlXkt7ycnGazB3qJmNqxOgGTwHEOEJrwouerm_o-gg&usqp=CAE', 0, '', ''),
(95, 'sunglasses', 'Mtv Round', 4, 'women', 0, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRrWytNjI4x4OBrCAZpq7utbcwbnSER2TC1Tqm0j_r6UcjclVfYwEOjrJPUpkad_1hb5CGAiurWErqBtNQLgD6PzAlGCkdF6EQmnDUZ56o&usqp=CAE', 0, '', ''),
(96, 'sunglasses', 'Round blaze', 10.1, 'women', 0, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcS4oIo5BU3PKe07YdYNKquwW-NQ_rcT2c7u_jl5ebLBTpxXa_qxQiYQ4idLRrQGNjR06eF8rT0BhrZBNtBk-y8_o6c8warc21hxBlN-ETJpDYH0bzqJPRcq&usqp=CAE', 0, '', ''),
(97, 'Baby Daipers', 'Himalaya', 120, 'kids', 0, 'https://cdn.shopify.com/s/files/1/0272/4714/9155/products/baby-diapers-l54_1200x1200.png?v=1582716148', 0, '', ''),
(98, 'Baby Daipers', 'Pampers', 200, 'kids', 0, 'https://images-na.ssl-images-amazon.com/images/I/81wVP0l804L._SL1500_.jp', 0, '', ''),
(99, 'Baby Daipers', 'Huggies', 200, 'kids', 0, 'https://d27zlipt1pllog.cloudfront.net/pub/media/catalog/product/h/u/hug0062_1.jpg', 0, '', ''),
(100, 'Baby Daipers', 'Fine', 200, 'kids', 0, 'https://static2.mumzworld.com/media/catalog/product/n/g/ng-10914500043-fine-baby-diapers-fast-sorption-newborn-pack-of-21-1587281878.jpg', 0, '', ''),
(101, 'Baby Diapers', 'suppels', 200, 'kids', 0, 'https://images-na.ssl-images-amazon.com/images/I/61ltYn2nmXL._SX466_.jpg', 0, '', ''),
(102, 'Baby Daipers', 'Teddy', 100, 'kids', 0, 'https://cdn.fcglcdn.com/brainbees/images/products/zoom/2393438a.jpg', 0, '', ''),
(103, 'Baby girl', 'Party wear skirt', 150, 'kids', 0, 'https://alfastore.co.in/content/images/thumbs/0010938_sk-mani-baby-girls-party-wear-frock-dress_550.jpeg', 0, '', ''),
(104, 'Baby Girl', ' Frock levis', 200, 'kids', 0, 'https://i.ytimg.com/vi/gzrNvjUEA8E/hqdefault.jpg', 0, '', ''),
(105, 'Baby girl', 'fancy frock', 200, 'kids', 0, 'https://images-na.ssl-images-amazon.com/images/I/41yLhiumHeL.jpg', 0, '', ''),
(106, 'Baby Girl', 'Princess dress', 100, 'kids', 0, 'https://www.dhresource.com/0x0/f2/albu/g8/M00/61/67/rBVaV1zfzoeALNAGAAHhardlXZA881.jpg/newborn-1-2-years-little-dress-1st-first.jpg', 0, '', ''),
(107, 'Baby Girl', 'Mini skirt', 200, 'kids', 0, 'https://cdn.shopify.com/s/files/1/2981/1940/products/WhatsApp_Image_2018-04-04_at_20.07.14_1400x.jpeg?v=1536760092', 0, '', ''),
(108, 'Baby Girl', 'Football ruffeled', 200, 'kids', 0, 'https://cdn11.bigcommerce.com/s-tp3n4f/images/stencil/500x659/products/6028/12898/b8081-1__13875.1524158097.jpg?c=2', 0, '', ''),
(109, 'Baby oil', 'Jhonson', 20, 'kids', 0, 'https://images-na.ssl-images-amazon.com/images/I/51aQI5zZrjL._SL1000_.jpg', 0, '', ''),
(110, 'Baby oil', 'Himalaya', 15, 'kids', 0, 'https://cdn.shopify.com/s/files/1/0272/4714/9155/products/baby-massage-oil-50ml_1200x1200.png?v=1582720185', 0, '', ''),
(111, 'Baby oil', 'Keshkanti', 10, 'kids', 0, 'https://www.pankajakasthuri.in/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/b/a/baby-oil-020718-v2.jpg', 0, '', ''),
(112, 'Baby', 'oil', 10, 'kids', 0, 'https://target.scene7.com/is/image/Target/GUEST_a6c7d1bf-c92d-4b63-aa84-506c78f8d289?wid=488&hei=488&fmt=pjpeg', 0, '', ''),
(113, 'Baby oil', 'Johnson', 10, 'kids', 0, 'https://images-na.ssl-images-amazon.com/images/I/71ttKOjmuyL._SL1500_.jpg', 0, '', ''),
(114, 'Baby oil', 'Vilva', 65, 'kids', 0, 'https://www.thespiceclub.in/images/baby1500new.jpg', 0, '', ''),
(115, 'Baby Powder', 'Johnson', 40, 'kids', 0, 'https://images-na.ssl-images-amazon.com/images/I/51EmUgM0%2BjL._SX679_.jpg', 0, '', ''),
(116, 'Baby Powder', 'Himalya Herbal', 55, 'kids', 0, 'https://cdn.fcglcdn.com/brainbees/images/products/zoom/2652109a.jpg', 0, '', ''),
(117, 'Baby Powder', 'Johnson', 100, 'kids', 0, 'https://images-na.ssl-images-amazon.com/images/I/31Q1TffINKL._SX466_.jpg', 0, '', ''),
(118, 'Baby Clothes', 'Levis', 50, 'kids', 0, 'https://i.ebayimg.com/thumbs/images/g/6yEAAOSw49JesfUX/s-l225.jpg', 0, '', ''),
(119, 'Baby Clothes', 'Boy Blue', 200, 'kids', 2, 'https://xcdn.next.co.uk/Common/Items/Default/Default/ItemImages/Search/224x336/791405.jpg?X56', 1, '', 'http://localhost/project/baby_boy_s1.php'),
(120, 'Baby Clothes', 'U.S.P.A', 200, 'kids', 0, 'https://cdn.shopify.com/s/files/1/2326/8617/files/Pom_Pom_Suit_Unisex_Banner_4x5_e7d1ee61-5a6c-464c-aaae-f676d4d59ba0_1800x.jpg?v=1563022579', 0, '', ''),
(121, 'Baby Clothes', 'levis full', 150, 'kids', 2, 'https://xcdn.next.co.uk/Common/Items/Default/Default/ItemImages/Search/224x336/101169.jpg?X56', 2, '', 'http://localhost/project/baby_boy_s2.php'),
(122, 'Baby Clothes', 'J&J', 100, 'kids', 0, 'https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/10782486/2020/1/22/6d74b7c1-7990-4305-acb1-1c2e07599f221579686475599-Gini-and-Jony-Boys-T-shirt-581579686473192-1.jpg', 0, '', ''),
(123, 'Baby Clothes', 'Peter England', 160, 'kids', 0, 'https://images-na.ssl-images-amazon.com/images/I/71-hA1LdKZL._UL1271_.jpg', 0, '', ''),
(124, 'Baby Shoes', 'Party wear', 20, 'kids', 0, 'https://5.imimg.com/data5/JS/DE/MY-27865482/baby-booty-500x500.jpg', 0, '', ''),
(125, 'Baby Shoes', 'Booty Corchet', 15, 'kids', 0, 'https://i.etsystatic.com/5377960/r/il/467dca/882008718/il_570xN.882008718_7phh.jpg', 0, '', ''),
(126, 'Baby Shoes', 'Red Velvet', 54, 'kids', 0, 'https://img5.cfcdn.club/b1/d9/b1e10a691eb4fff116ea0746d6afe4d9_350x350.jpg', 0, '', ''),
(127, 'Baby Shoes', 'Booty Mustach', 21, 'kids', 0, 'https://cdn.shopclues.com/images/thumbnails/38989/640/1/babyshoes1465819270.jpg', 0, '', ''),
(128, 'Baby Shoes', 'Girl', 20, 'kids', 0, 'https://www.bumpalumpa.com/wp-content/uploads/2018/10/Baby-Girls-pink-Pram-Shoes-with-beautiful-pink-bow-.jpg', 0, '', ''),
(129, 'Baby Soap', 'Johnson', 20, 'kids', 0, 'https://images-na.ssl-images-amazon.com/images/I/71v-7ORABOL._SL1500_.jpg', 0, '', ''),
(130, 'Baby Soap', 'Dove', 15, 'kids', 0, 'https://images-na.ssl-images-amazon.com/images/I/31aF5AVvFkL._SX466_.jpg', 0, '', ''),
(131, 'Baby Soap', 'Santoor', 100, 'kids', 0, 'https://static2.medplusmart.com/products/SANT0029_L.jpg', 0, '', ''),
(132, 'Baby Soap', 'Johnson', 30, 'kids', 0, 'https://www.pepstores.com/cdn-proxy/cdn_pepstores_com/product-images/prod/370_370_AGT35_web_PNG.webp', 0, '', ''),
(133, 'Baby Soap', 'Himalaya', 10, 'kids', 0, 'https://rukminim1.flixcart.com/image/312/312/k6jnfrk0/soap/k/c/h/6-450-gentle-baby-soap-6n-x-75g-himalaya-original-imafzzgxhdjybemj.jpeg?q=70', 0, '', ''),
(134, 'Baby Soap', 'Cussons', 15, 'kids', 0, 'https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/F/M/158085_1563792919.jpg', 0, '', ''),
(135, 'Baby Socks', 'Navy Blue', 20, 'kids', 0, 'https://static.falke.com/pdmain/481496.jpg', 0, '', ''),
(136, 'Baby Socks', 'Woolan', 15, 'kids', 0, 'ttps://cdn11.bigcommerce.com/s-2y2z/images/stencil/1280x1280/products/744/2716/Pretty-Cables__97438.1499352706.jpg?c=2', 0, '', ''),
(137, 'Baby Socks', '4 Pairs', 100, 'kids', 0, 'https://reinashop.com.au/wp-content/uploads/2019/06/Mori-Baby-Socks-4-Pack-NAVY2.jpg', 0, '', ''),
(138, 'Baby Socks', 'Mini', 10, 'kids', 0, 'https://littlebluehouse-weblinc.netdna-ssl.com/product_images/patterned-moose-2-pack-baby-socks/SO6WIMO002_jpg/pdp_zoom.jpg?c=1587592429&locale=en', 0, '', ''),
(139, 'Baby Socks', 'Printed', 15, 'kids', 0, 'https://cdn05.zipify.com/CogzDW8WYuLwMtR_Nvu-_rh-KNk=/98x132:1358x1391/fit-in/1080x0/011610ee4b4e4fbaaeaea7fd26fbbe98/20200317_attipas43984.jpg', 0, '', ''),
(140, 'jeans', 'Gucci Men', 200, 'men', 0, 'https://di2ponv0v5otw.cloudfront.net/posts/2019/07/04/5d1e30822eb33fc80623c938/m_5d1e30b3adb58db7e5c23c18.jpg', 0, '', ''),
(141, 'jeans', 'allen solly Men', 200, 'men', 0, 'https://i.etsystatic.com/24518159/d/il/6577c9/2497227843/il_340x270.2497227843_9hg2.jpg?version=0', 0, '', ''),
(142, 'jeans', 'Peter England Men', 560, 'men', 0, 'https://n2.sdlcdn.com/imgs/f/r/x/U-S-Polo-Jeans-Blue-SDL151437965-5-70edc.jpg', 0, '', ''),
(143, 'jeans', 'Gucci Blue', 124, 'men', 0, 'https://d1bwyguot0k3jj.cloudfront.net/yadt/inventory.ItemColourImage/image_new/original/153379276.jpeg', 0, '', ''),
(144, 'hair jel', 'Park Avenue', 50, 'men', 0, 'https://www.malabarcentral.com/media/catalog/product/cache/1/image/4a0df732147afe96993efdcc8f017363/p/a/paahsgxx_1.jpg', 0, '', ''),
(145, 'hair jel', 'Tresemme', 200, 'men', 0, 'https://pics.drugstore.com/prodimg/265194/900.jpg', 0, '', ''),
(146, 'face cream', 'Garnier Men', 200, 'men', 0, 'https://blog.talkcharge.com/wp-content/uploads/2019/12/garnier-men-power-light-moisturiser.jpg', 0, '', ''),
(147, 'face wash', 'Loreal', 200, 'men', 0, 'https://imshopping.rediff.com/imgshop/800-1280/shopping/pixs/30589/a/art01622._loreal-paris-men-expert-hydra-energetic-purifing-skin-and-stubble-face-wash-150ml.jpg', 0, '', ''),
(148, 'face wash', 'Nivea mens', 200, 'men', 0, 'https://www.nivea.co.za/-/media/media-center-items/8/7/8/e781aa22fd7943e8b0ea51bea3fb4833-original.png', 0, '', ''),
(149, 'Jewellary', 'Treazy Circle Crystal', 8.9, 'women', 0, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQjLy93OBZRq7xHULO-_OqwHHQIYFVPbQfrwO1PFxcFCQa__kaVP0K9r_waeOP0PLdYWR0g-frKTBWtC_ab8_TGk-8Xgro6IUAGN3NdTLk2ARCLc32iu8XjEg&usqp=CAE', 0, '', ''),
(150, 'Jewellary', 'Crystal Stone Luxury', 20, 'women', 0, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSUO7Vz8ZXz7_ixHrLjafcugM4CrCbENB8SmeYzmLwuo9qC-Ttk1bY92ibHBva8eCieO6QHqf_gvVVXf0aRIeCt3B1XbzxlPdXlQArAh-AgxZr3ujWP_4W6&usqp=CAE', 0, '', ''),
(151, 'Jewellary', 'Nityakshi Silver', 5, 'women', 0, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcT_HGa0RcLvAeqDk6F793dy2rQ45_gjIeLBPCPgoIj48VZuc_N5TT_WvdrIVPHiVnD7rDcpoTIImUJtfOiCKyn3RN6HjpaywtUsUKZU6xd7eN49BM51vPaU&usqp=CAE', 0, '', ''),
(152, 'Ring', 'Daimond', 12, 'women', 0, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcS_C5NJIdjcuAy0N_dgscYvOUNQ3b7z3xzxChlXl5MsAiu_RbwLxfAGoK9GB2idqf-gtU3xMVaggGEj9BGgxU-9omr4Fz7aUMps42SIcq8p&usqp=CAE', 0, '', ''),
(153, 'Jewellary', 'Jewels Galaxy', 1.02, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSm2Db5SqgMkYLYH6OC17XbiKXELsNYdeVJnlWdz-Bkwfl4CmkaGfrRnKV_nXSqbjAdK9B1yLbl41GAwuNHBNLHfM1-YNIK_pHE7w3L_8auEKNgYjGvTV4N&usqp=CAE', 0, '', ''),
(154, 'Plated Bracelet', 'You bella Gold ', 4, 'women', 0, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQT50xX2DmI5oftffxbAJoIHsXNvm2FAwIAI0e23_TNPx51Y00op8RQToKGd1HkLrBE0O0gExEjv_-Q9EtDhgW-iJ7Xt44y7kUorm1ZlIHAewDFHQLlUGYg&usqp=CAE', 0, '', ''),
(155, 'Shoes', 'Dennils Women Sports', 9.2, 'women', 0, '', 0, '', ''),
(156, 'Shoes', 'Nike denim sneakers', 9, 'women', 0, '', 0, '', ''),
(157, 'Shoes', 'Campus Lace-up sports', 15, 'women', 0, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTugwq8sWsnyB4a7FpxYjoJ9gRRCre-Sppsr2y7RWucS6zLrIxFSoeGnj1oQxu7RLPLlbRRDvYgHKSJ&usqp=CAc', 0, '', ''),
(158, 'Shoes', 'Kelemon', 8, 'women', 0, '', 0, '', ''),
(159, 'Shoes', 'Shoetopia Meshs', 10.2, 'women', 0, '', 0, '', ''),
(160, 'Shoes', 'Working Ankle', 8, 'women', 0, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQlsgbpmDSgMD0A6-mqsz2Yb_XasNBKNNFQGhU2zSj7sWkCYvOVf8Jfa7AToXSXOm_lUTjqfdg7jbD57-OOY7WU_98mJxGlnssR401Cq1HKEFKI_jJ7VZz1&usqp=CAE', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `realcart`
--

CREATE TABLE `realcart` (
  `id` int(3) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `realcart`
--

INSERT INTO `realcart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(21, 'U.S POLO full sleves shirt', 200, 'https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/503326/2018/5/9/4c89a202-cb13-45a0-8cf0-abe68854de341525860756905-US-Polo-Assn-Men-Pink-Polo-T-shirt-3291525860756627-1.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realcart`
--
ALTER TABLE `realcart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `realcart`
--
ALTER TABLE `realcart`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
