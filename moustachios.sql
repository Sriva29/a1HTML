-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 03:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moustachios`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ind` int(11) NOT NULL,
  `aboutTitle` varchar(500) NOT NULL,
  `aboutContent` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ind`, `aboutTitle`, `aboutContent`) VALUES
(1, 'All about moustaches', 'Wow. An entire site about moustaches... Really?\r\nSigh. Yes.');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `personId` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`personId`, `email`, `password`, `name`) VALUES
(1, 'srivatsan.neptune@mars.com', 'JupiterVenus99', 'SriWay');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `articleId` int(11) NOT NULL,
  `authorName` varchar(100) NOT NULL,
  `authorLink` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `metaDesc` varchar(5000) NOT NULL,
  `metaKeys` varchar(500) NOT NULL,
  `fullContent` longtext NOT NULL,
  `featured?` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articleId`, `authorName`, `authorLink`, `title`, `metaDesc`, `metaKeys`, `fullContent`, `featured?`) VALUES
(3, 'Mike Lawson', 'https://www.beardbrand.com/blogs/urbanbeardsman/how-to-blow-your-nose-when-you-have-a-mustache', 'How to blow your nose when you have a moustache', 'This article is about taking care of your moustache by making sure you blow your nose effectively without compromising your stache integrity.', 'moustache, blow my nose, moustache getting in the way of my nose blowing, moustache care, moustache tips', '<article>\r\n        <h2>1. Find Some Privacy</h2>\r\n        <p>Nothing is redeeming about blowing your nose. Okay, it is slightly better than just letting your nose drip\r\n            like a faucet. Still, nobody has ever blown their nose and gotten a standing ovation. Now, add a mustache to\r\n            the mix. Yeah, an ugly situation is about to get uglier.\r\n\r\n            If you have to blow your nose, do everyone a favor and find some privacy. Be it a bathroom or a broom\r\n            closet, get yourself somewhere discreet. Because chances are, when you pull that tissue away, your mustache\r\n            will have absorbed the brunt of the boogers. Nobody wants to see that. At the very least, go find a corner\r\n            or turn your back until you have got yourself situated again. Just, whatever you do, try not to let anyone see\r\n            you.</p>\r\n        <figure><img src=\"img/article1img1.webp\" alt=\"A picture of tissues\"></figure>\r\n        <h2>2. Use a Handkerchief</h2>\r\n        <p>Are tissues more convenient? Yes. Do tissues feel better on your nose? Probably — especially if you get the\r\n            nice ones with the aloe vera on them. So why on earth would we suggest using a handkerchief to blow your\r\n            nose? For starters, no matter how deft you are at the art of clearing out your sneeze box, there’s still a\r\n            high likelihood that you’re going to end up with some nastiness in your mustache. When you go to wipe that\r\n            snot out, tissues leave behind a bit of residue that can get trapped in between the hairs. Now, instead of\r\n            dealing with snot, you’re doing with snot and little white tissue particles. Get yourself a week’s worth of\r\n            bandanas and carry a fresh one with you every day. It won’t actually help you all that much. But in the\r\n            event that you cannot find some privacy, at least it will look cool — sort of.</p>\r\n    </article>\r\n\r\n    <p>Read the rest of this fascinating article here: <a href=\"https://www.beardbrand.com/blogs/urbanbeardsman/how-to-blow-your-nose-when-you-have-a-mustache\" target=\"_blank\">article link</a>\r\n    </p>\r\n\r\n    <a href=\"index.php\">Go Back Home</a>', 0),
(4, 'Srivatsan R', 'www.srivatsanrangarajan.com', 'Warm Moustaches for a Cold Movember', 'This article talks about three moustache styles you can use to keep you warm in the winter.', 'face cold brrr..., warm moustache, Movember, Ron Swanson, moustache styles for Novemember, Movember moustache style recommendations', '<article>\r\n        <p>Movember is coming and its going to be a really chilly one this time around. On top of your jacket, your\r\n            scarf, your hat, and your boots, why not use nature\'s winter gear? The mighty stache. Here are three styles\r\n            guaranteed to keep you warm this winter. Ready to face Movember? Don these staches for a warm and cozy\r\n            winter.</p>\r\n\r\n        <h2>1. The Cowboy Stache</h2>\r\n        <img src=\"img/article2img2.webp\" alt=\"The Cowboy stache\">\r\n        <p>The Cowboy is the moustache style worn by Ron Swanson of Parks and Recreation.\r\n\r\n            It\'s a longer, unkempt version of the Chevron. Instead of trimming your moustache to the top of your lips,\r\n            allow it to grow until it touches your bottom lip. You won\'t have to worry about keeping this style too neat\r\n            but trim it up once in a while so you don\'t look lazy.</p>\r\n\r\n        <h2>2. The Handlebar</h2>\r\n        <img src=\"img/article2img3.webp\" alt=\"The Handlebar\">\r\n        <p>The Handlebar is a retro favorite and can be argued as one of the best moustache styles. To grow out the\r\n            handlebar moustache style, let your moustache grow until it\'s over your upper lip. Then using moustache wax and\r\n            a comb, part your hair over the middle of your lip.\r\n\r\n            Spread the wax over your whole moustache (use the comb and a blow-dryer), then twist the ends up into a curl.\r\n            For a tighter curl, use the end of a moustache comb and a pencil or pen.\r\n\r\n            Check out more on our tips on how to style a Handlebar moustache. In the end, keep your handlebar moustache\r\n            curled, twisted, and waxed.</p>\r\n\r\n        <h2>3. The Walrus</h2>\r\n        <img src=\"img/article2img3.webp\" alt=\"The Walrus\">\r\n        <p>If you want to channel the spirit of Teddy Roosevelt, then you want a Walrus moustache. The Walrus moustache\r\n            style is iconic due to it\'s bushy, overhanging and long appearance.\r\n\r\n            To master this look, you need the length of a Cowboy moustache and the styling of the relaxed Handlebar. Grow\r\n            your moustache until it hangs over the edge of your lower lip. Keep the center of your facial hair trimmed,\r\n            like scissors in a horseshoe shape.\r\n\r\n            Then using wax, a comb, and a blow dryer, wrangle your facial hair into two equal parts. You can use the wax\r\n            to turn the ends of your beard comb and your moustache up or let it hang.</p>\r\n    </article>\r\n    \r\n        <p>This content was sourced from: <a\r\n                href=\"https://bossmanbrand.com/blogs/blog/the-ultimate-guide-on-how-to-style-your-moustache\" target=\"_blank\">article link</a></p>\r\n        <a href=\"index.php\">Go Back Home</a>', 0),
(5, 'Gillette', 'https://gillette.com/en-us/shaving-tips/facial-hair-styles/how-to-shave-horseshoe-mustache', 'How to Get a Handlebar Moustache in 10 Steps', 'This article talks about how you can style a handlebar moustache.', 'hulk hogan, handlebar moustache, I want a handlebar moustache for some reason, I am from the 60s and I still think handlebar moustaches are cool', '<article>\r\n\r\n        <p>If horseshoes are good luck, perhaps the horseshoe mustache facial hair style will bring some good fortune to\r\n            your daily shaving ritual. The horseshoe facial hair style is like a mustache, but includes two long bars of\r\n            mustache hair pointing downwards, often extending all the way to the chin. With the All Purpose Gillette\r\n            STYLER, you can achieve this look.</p>\r\n        <h2>The Horseshoe Mustache Look</h2>\r\n        <p>There are countless facial hair styles, but this doesn’t mean that trimming a mustache will be complicated.\r\n            Here’s a simple set of steps to get you on your way to the popular horseshoe mustache style:</p>\r\n\r\n        <img src=\"img/handlebar steps/handlebar-step-1.webp\" alt=\"styling step 1 for handlebar moustache\">\r\n        <h2>Step 1: Select a Fixed-Length Comb for Trimming</h2>\r\n        <p>The right comb length on your trimmer can help you style your look. The All Purpose Gillette STYLER comes\r\n            with three comb attachments (2 mm, 4 mm, 6 mm) for you to choose from</p>\r\n\r\n        <img src=\"img/handlebar steps/handlebar-step-2.webp\" alt=\"styling step 2 for handlebar moustache\">\r\n        <h2>Step 2: Trim Your Facial Hair</h2>\r\n        <p>Even out your mustache hair length with the trimmer.</p>\r\n\r\n        <img src=\"img/handlebar steps/handlebar-step-3.webp\" alt=\"styling step 3 for handlebar moustache\">\r\n        <h2>Step 3: Define Your Mustache Shape</h2>\r\n        <p>Remove your trimmer’s comb attachment and trim your mustache to define the Horseshoe shape. Trimming hairs\r\n            before shaving can help reduce tug and pull while shaving, and this can help prevent clogged blades.</p>\r\n\r\n        <img src=\"img/handlebar steps/handlebar-step-4.webp\" alt=\"styling step 4 for handlebar moustache\">\r\n        <h2>Step 4: Check For Symmetry As You Go</h2>\r\n        <p>But be careful not to trim too much off in an effort to look even.</p>\r\n\r\n        <img src=\"img/handlebar steps/handlebar-step-5.webp\" alt=\"styling step 5 for handlebar moustache\">\r\n        <h2>Step 5: Prep Your Face</h2>\r\n        <p>Rinse your face with warm water to help hydrate your hair in preparation for shaving. Then, lather up the parts of your face that you want to shave completely bare—the non-mustache parts—with a shave gel. Using a shave gel can help prevent nicks, cuts, and irritation.</p>\r\n\r\n        <img src=\"img/handlebar steps/handlebar-step-6.webp\" alt=\"styling step 6 for handlebar moustache\">\r\n        <h2>Step 6: Shave With Light, Gentle Strokes</h2>\r\n        <p>Attach the razor blade onto your Gillette STYLER handle and shave with light, gentle strokes to give yourself a close shave. Any Fusion5 blade refill fits the STYLER.</p>\r\n\r\n        <img src=\"img/handlebar steps/handlebar-step-7.webp\" alt=\"styling step 7 for handlebar moustache\">\r\n        <h2>Step 7: Rinse Your Blades Often</h2>\r\n        <p>Rinsing the blades often throughout your shave helps to prevent buildup of hairs and shaving cream on the blade edges and cartridge; this helps keep your razor performing at its best.</p>\r\n\r\n        <img src=\"img/handlebar steps/handlebar-step-8.webp\" alt=\"styling step 8 for handlebar moustache\">\r\n        <h2>Step 8: Edge With the Precision Trimmer</h2>\r\n        <p>On the back of all Fusion5 razors is a precision blade; use this to help define the mustache shape and achieve clean edges.</p>\r\n\r\n        <img src=\"img/handlebar steps/handlebar-step-9.webp\" alt=\"styling step 9 for handlebar moustache\">\r\n        <h2>Step 9: Rinse, Towel, and Moisturize</h2>\r\n        <p></p>\r\n\r\n        <img src=\"img/handlebar steps/handlebar-step-10.webp\" alt=\"styling step 10 for handlebar moustache\">\r\n        <h2>Step 10: You Have Just Mastered the Horseshoe Mustache Style!</h2>\r\n        <p>With Gillette razors and trimmers, your personal grooming possibilities are endless.</p>\r\n\r\n    </article>\r\n\r\n    <p>This content was sourced from: <a href=\"https://gillette.com/en-us/shaving-tips/facial-hair-styles/how-to-shave-horseshoe-mustache\" target=\"_blank\">article link</a></p>\r\n    <a href=\"index.php\">Go Back Home</a>', 0),
(6, 'Lee Kynaston', 'https://www.fashionbeans.com/author/lee-kynaston/', 'Moustache Care: Expert Grooming and Maintenance Tips', 'This article gives you tips on how to take care of your moustache.', 'moustache care tips, moustache shampoo, moustache scrubbing', '<h1>MUSTACHE CARE: EXPERT TIPS AND GROOMING MAINTENANCE</h1>\r\n    <p>LEE KYNASTON</p>\r\n    <article>\r\n        <p>Whether you’re growing one for Movember or simply because they’re on trend at the moment (the moustache is\r\n            the new beard, don’t you know?) a ‘tache takes time to train and needs some TLC if it’s to look its best.\r\n\r\n            And who better to give some advice on moustache care and maintenance than ten guys who either have one or\r\n            look after ‘taches for a living (and in some cases both)?</p>\r\n        <figure><img src=\"img/article4-img1.jpg\" alt=\"an image of a man with a moustache\"></figure>\r\n        <h2>1. GET YOUR TIMING RIGHT</h2>\r\n        <p>“The easiest way to trim your moustache in the initial stages is with clippers or a beard trimmer, but after\r\n            three to four weeks graduate from these to a quality pair of facial hair scissors to trim around the mouth.\r\n            This is also the time to start using a moustache comb, along with a little wax. These will help shape your\r\n            moustache but will also even it out, helping fill any gaps and prevent it from looking fluffy.”\r\n\r\n            Michael Beardsley, stylist at Pall Mall Barbers in London and owner of a beautifully maintained moustache.\r\n        </p>\r\n    </article>\r\n\r\n    <p>Read the rest of the article here: <a href=\"https://www.fashionbeans.com/2014/10-expert-tips-moustaches/\" target=\"_blank\">article link</a></p>\r\n    <a href=\"index.php\">Go Back Home</a>', 0),
(7, 'vintage grooming', 'https://www.vintagegrooming.com/collections/the-vintage-beard-company-moustache-wax-product-line', 'Like your moustache? Buy these moustache care products', 'This is a moustache care products site.', 'moustache care products, moustache wax, moustache brush', '<h1>Like your moustache? Buy these moustache care products</h1>\r\n    <p>Vintage Grooming</p>\r\n    <article>\r\n        <h2>Moustache Care</h2>\r\n        <p>We use natural and cruelty-free ingredients that conditions, strengthens, softens, and tames those wild whiskers! Our mustache wax is also great for the skin underneath that awesome stache of yours.</p>\r\n        <figure><img src=\"img/article5-img1.jpg\" alt=\"a man caring for his moustache\"></figure>\r\n    </article>\r\n\r\n    <p>Buy the products here:  <a href=\"https://www.vintagegrooming.com/collections/the-vintage-beard-company-moustache-wax-product-line\">article link</a></p> \r\n    <a href=\"index.php\">Go Back Home</a>', 0),
(8, 'Debabrata Mukherjee', 'https://www.historic-uk.com/HistoryUK/HistoryofBritain/The-Moustache-to-Rule-Them-All/', 'The Moustache to Rule Them All', 'This article talks about the history of moustaches.', 'moustaches throughout history, moustache history, british moustache', '<h1>The Moustache to Rule Them All</h1>\r\n    <p>Debabrata Mukherjee</p>\r\n    <article>\r\n        <p>Did you know that you could be imprisoned for shaving your moustache? Between 1860 and 1916, every soldier in\r\n            the British Army was forbidden from shaving his upper lip or else it would have been considered a breach of\r\n            discipline.\r\n\r\n            According to the Oxford dictionary, it was in 1585 that the word ‘moustache’ was first recorded in the\r\n            translation of the French book, The Nauigations, Peregrinations and Voyages, made into Turkie. The moustache\r\n            would need close to another 300 years to become the emblem of the British Empire, the empire which in its’\r\n            heyday ruled a quarter of the world’s population.\r\n\r\n            During the Napoleonic Wars in the 1800s, British officers were inspired by the coxcombical Frenchmen with\r\n            their whiskers being ‘appurtenances of terror’. In the newly colonized lands of India, the moustache was a\r\n            symbol of male prestige. Tipu Sultan, the ruler of Mysore, commemorated his victory over the East India\r\n            Company with a painting depicting the clean-shaven British soldiers as if they looked like girls or at least\r\n            creatures ‘who are not fully male’.</p>\r\n            <figure><img src=\"img/article6-img1.jpg\" alt=\"Three men with old-timey moustaches\"><figcaption>Bengal Army troops with their moustaches</figcaption></figure>\r\n    </article>\r\n    <p>Read the full article here: <a\r\n            href=\"https://www.historic-uk.com/HistoryUK/HistoryofBritain/The-Moustache-to-Rule-Them-All/\" target=\"_blank\">article link</a></p>\r\n    <a href=\"index.php\">Go Back Home</a>', 0),
(9, 'NZ', 'https://nzhistory.govt.nz/culture/men-and-their-moustaches/timeline', 'Men and their moustaches - A Moustache Timeline', 'This article gives a timeline of men\'s moustaches', 'history of moustaches, a timeline of moustaches, New Zealand moustaches', '<article>\r\n        <h2>1800–1880s – beards maketh the man</h2>\r\n        <p>Facial hair was big in the 19th century. Look at paintings or photographs from this time, and chances are the\r\n            men will have beards, moustaches or sideburns – and sometimes elaborate combinations of all three.\r\n\r\n            For much of the century, the emphasis was on beards and ’burns. Big hairy beards were all the rage in the\r\n            middle decades. The bushier the beard, the more virile the man, some people believed. In an age as obsessed\r\n            with health issues as our own, some people claimed that good beards meant good health.</p>\r\n            <figure><img src=\"img/article7-img1.jpg\" alt=\"image of a man with mutton chops moustache\"><figcaption>A style sometimes known as \'friendly mutton chops\'</figcaption></figure>\r\n    </article>\r\n\r\n    <p>Read the full article here: <a href=\"https://nzhistory.govt.nz/culture/men-and-their-moustaches/timeline\" target=\"_blank\">article link</a></p>\r\n    <a href=\"index.php\">Go Back Home</a>', 1),
(11, 'SDFSDFSDFDS', '', 'ANOTHERtEST', '', '', 'ETESTEDFS', 0),
(12, 'SDFSDFS', '', 'YETANOTHERTEST', '', '', 'SDFSDF', 0),
(13, 'kjhkjh', '', 'hjhj', '', '', 'hkjhk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `personId` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL DEFAULT 'guest',
  `handlebar` tinyint(1) NOT NULL,
  `walrus` tinyint(1) NOT NULL,
  `vanDyke` tinyint(1) NOT NULL,
  `pencil` tinyint(1) NOT NULL,
  `horseshoe` tinyint(1) NOT NULL,
  `chevron` tinyint(1) NOT NULL,
  `fuManchu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`personId`, `name`, `email`, `role`, `handlebar`, `walrus`, `vanDyke`, `pencil`, `horseshoe`, `chevron`, `fuManchu`) VALUES
(17, 'Srivatsan Rangarajan', 'srivatsan.official@gmail.com', 'lurker', 0, 0, 1, 0, 0, 0, 0),
(18, 'Srivatsan Rangarajan', 'srivatsan.official@gmail.com', 'administrator', 0, 0, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likeId` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `memberId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`likeId`, `articleId`, `memberId`) VALUES
(6, 4, 1),
(7, 7, 1),
(8, 3, 8),
(9, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberId` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `admin?` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberId`, `username`, `email`, `password`, `admin?`) VALUES
(1, 'sricreates', 'rangarsr@sheridancollege.ca', 'SriHasAPassword!00', 1),
(2, 'test', 'test@gmail.com', 'test@', 0),
(3, 'sldjfldnf', 'skfdksjhfskhfn@gmail.com', 'ksjdfkjds283u02', 0),
(4, 'user', 'user@moustache.com', 'user123', 0),
(5, 'user', 'user@moustache.com', 'user123', 0),
(6, 'srivatsan.official@gmail.com', 'srivatsan.official@gmail.com', 'sssqe', 0),
(7, 'BrushWax', 'srivatsan.official@gmail.com', 'jhjh', 0),
(8, 'srivatsam', 'srivatsan.sfsdf@gmail.com', 'werewrwerwerwerw', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ind`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`personId`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articleId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`personId`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likeId`),
  ADD KEY `like-article` (`articleId`),
  ADD KEY `like-member` (`memberId`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `personId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `articleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `personId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `like-article` FOREIGN KEY (`articleId`) REFERENCES `articles` (`articleId`),
  ADD CONSTRAINT `like-member` FOREIGN KEY (`memberId`) REFERENCES `members` (`memberId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
