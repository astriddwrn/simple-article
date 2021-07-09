-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 04:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `article_image` varchar(255) NOT NULL,
  `article_created_time` datetime NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_content`, `article_image`, `article_created_time`, `id_categorie`, `id_author`) VALUES
(6, 'Learn git concepts, not commands', '<p>An interactive git tutorial meant to teach you how git works, not just which commands to execute.</p>\r\n\r\n<h1>Overview</h1>\r\n\r\n<p>In the picture below you see four boxes. One of them stands alone, while the other three are grouped together in what I&#39;ll call your Development Environment.</p>\r\n\r\n<p>We&#39;ll start with the one that&#39;s on it&#39;s own though. The Remote Repository is where you send your changes when you want to share them with other people, and where you get their changes from. If you&#39;ve used other version control systems there&#39;s nothing interesting about that.</p>\r\n\r\n<p>The Development Environment is what you have on your local machine. The three parts of it are your Working Directory, the Staging Area and the Local Repository. We&#39;ll learn more about those as we start using git.</p>\r\n\r\n<p>Choose a place in which you want to put your Development Environment. Just go to your home folder, or where ever you like to put your projects. You don&#39;t need to create a new folder for your Dev Environment though.</p>\r\n\r\n<h1>Getting a Remote Repository</h1>\r\n\r\n<p>Now we want to grab a Remote Repository and put what&#39;s in it onto your machine.</p>\r\n\r\n<p>Now that you have a copy of my Remote Repository of your own, it&#39;s time to get that onto your machine.</p>\r\n', 'git.png', '2020-02-14 10:28:00', 16, 2),
(17, '10 Data Science and Machine Learning Courses for Beginners ', '<p>Data Science, Machine Learning, Deep Learning, and Artificial intelligence are really hot at this moment and offering a lucrative career to programmers with high pay and exciting work. It&#39;s a great opportunity for programmers who are willing to learn these new skills and upgrade themselves and want to solve some of the most interesting real-world problems. It&#39;s also important from the job perspective because Robots and Bots are getting smarter day by day, thanks to these technologies and most likely will take over some of the jobs which many programmers do today. Hence, it&#39;s important for software engineers and developers to upgrade themselves with these skills. Programmers with these skills are also commanding significantly higher salaries as data science is revolutionizing the world around us.</p>\r\n', 'datascience.jpg', '2020-02-14 11:52:24', 4, 1),
(26, 'Anybody wants to start/practice contributing to OSS projects?? ', '<h1>Introduction</h1>\r\n\r\n<p>I made this super simple ruby gem called <a href=\"https://github.com/K-Sato1995/spell_generator\">spell_generator</a> and looking for people who want to start/practice contributing to OSS projects.</p>\r\n\r\n<h1>Why?</h1>\r\n\r\n<p>Making a PR to an OSS project can be intimidating if you don&#39;t know how to actually do to it. But if you know the process of making a PR and have already done it before, it can be very simple and fun.<br />\r\nI want to help people who have been thinking about contributing to OSS projects but have been too scared to do it.<br />\r\nEspecially if you are a self-taught programmer or new graduate who is looking for some experience to put on your resume, contributions to OSS projects would be great to have as your experience.</p>\r\n\r\n<p><strong>I want to help you to take the first step of your OSS journey.</strong></p>\r\n\r\n<h1>What I want you to do</h1>\r\n\r\n<p>As I mentioned above, this gem I created is very simple.<br />\r\nAll it does is creating a random spell based on adjectives and verbs that are stored in different arrays respectively.</p>\r\n\r\n<p>I want you to add one or more adjectives or verbs to the corresponding array.</p>\r\n\r\n<p><a href=\"https://github.com/K-Sato1995/spell_generator/issues/1\">https://github.com/K-Sato1995/spell_generator/issues/1</a></p>\r\n', '6.jpg', '2020-02-14 15:05:13', 2, 2),
(27, 'Create your YOUR Personal Blog 📜 using Reactjs ⚛️ & Github Issues in less than 10 min  ', '<h1>React Blog</h1>\r\n\r\n<h2>React + Github Issues 👉 Your Personal Blog 🔥</h2>\r\n\r\n<p>React Blog is a personal blog system build on React that helps you create your own personal blog using Github Issues</p>\r\n\r\n<p>Link : <a href=\"https://github.com/saadpasta/react-blog-github\">https://github.com/saadpasta/react-blog-github</a></p>\r\n\r\n<h2>🔥 Features</h2>\r\n\r\n<p>✅ Own your content<br />\r\n✅ Write using Markdown On Github Issues<br />\r\n✅ Syntax/Code Highlighting<br />\r\n✅ Fully customizable<br />\r\n✅ Tags - Topics<br />\r\n<br />\r\n✅ Links<br />\r\n✅ Reaction<br />\r\n✅ Images<br />\r\n✅ Minutes Read<br />\r\n✅ Beautiful UI Like Medium<br />\r\n✅ Easy deployment: Using Github Pages<br />\r\n✅ Beautiful blockquote</p>\r\n\r\n<h2>🔗 Live Demo</h2>\r\n\r\n<p>Here&#39;s a <a href=\"https://saadpasta.github.io/react-blog-github/#/\">live demo</a></p>\r\n\r\n<p>Github <a href=\"https://github.com/saadpasta/react-blog-github/issues\">Issues / Blogs</a></p>\r\n\r\n<hr />\r\n<h2>🚀 Get Up and Running in 10 Minutes</h2>\r\n\r\n<p>You can get a react-blog site up and running on your local dev environment in 10 minutes with these five steps:</p>\r\n\r\n<p>These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.</p>\r\n', 'bbgv69gnhmi97nihyc6k.webp', '2020-02-14 15:55:01', 1, 1),
(40, 'Role-based auth in Angular 9 🔑 ', '<p>You are welcome to join LIVE MasterClass 📺 18-02-2020 8 pm GMT</p>\r\n\r\n<p>Free LIVE MasterClass about designing a role-based system in Angular 🅰</p>\r\n\r\n<p>Register 👉 <a href=\"https://mailchi.mp/9038cbea0f9c/role-based-auth-angular\">https://mailchi.mp/9038cbea0f9c/role-based-auth-angular</a></p>\r\n\r\n<p>⚡ the case of role-based application<br />\r\n⚡ a domain model for a multi-account system<br />\r\n⚡ vectors of authorization<br />\r\n⚡ designing secure REST API for roles<br />\r\n⚡ userAuth object<br />\r\n⚡ Router Guards<br />\r\n⚡ HttpInterceptors<br />\r\n⚡ Silent auth (RxJS magic!)<br />\r\n⚡ Express.js middlewares<br />\r\n⚡ DEMO</p>\r\n', 'xghawvmrh6v3z4pmvgts.webp', '2020-02-18 12:00:01', 14, 8),

INSERT INTO `article` (`article_id`, `article_title`, `article_content`, `article_image`, `article_created_time`, `id_categorie`, `id_author`) VALUES
(43, 'Ask HN: Does Anybody Still Use JQuery?', '<h3>Lorem Ipsum: when, and when not to use it</h3>\r\n\r\n<p>Do you like Cheese Whiz? Spray tan? Fake eyelashes? That&#39;s what is Lorem Ipsum to many&mdash;it rubs them the wrong way, all the way. It&#39;s unreal, uncanny, makes you wonder if something is wrong, it seems to seek your attention for all the wrong reasons. Usually, we prefer the real thing, wine without sulfur based preservatives, real butter, not margarine, and so we&#39;d like our layouts and designs to be filled with real words, with thoughts that count, information that has value.</p>\r\n\r\n<p>The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods, the paint you may slap on your face to impress the new boss is your business. But what about your daily bread? Design comps, layouts, wireframes&mdash;will your clients accept that you go about things the facile way? Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge, huge no no to forswear forever. Not so fast, I&#39;d say, there are some redeeming factors in favor of greeking text, as its use is merely the symptom of a worse problem to take into consideration.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/blog/webmag/img/post-4.jpg\" /></p>\r\n\r\n<p>So Lorem Ipsum is bad (not necessarily)</p>\r\n\r\n<p>You begin with a text, you sculpt information, you chisel away what&#39;s not needed, you come to the point, make things clear, add value, you&#39;re a content person, you like words. Design is no afterthought, far from it, but it comes in a deserved second. Anyway, you still use Lorem Ipsum and rightly so, as it will always have a place in the web workers toolbox, as things happen, not always the way you like it, not always in the preferred order. Even if your less into design and more into content strategy you may find some redeeming value with, wait for it, dummy copy, no less.</p>\r\n\r\n<p>There&#39;s lot of hate out there for a text that amounts to little more than garbled words in an old language. The villagers are out there with a vengeance to get that Frankenstein, wielding torches and pitchforks, wanting to tar and feather it at the least, running it out of town in shame.</p>\r\n\r\n<p>One of the villagers, Kristina Halvorson from Adaptive Path, holds steadfastly to the notion that design can&rsquo;t be tested without real content:</p>\r\n\r\n<blockquote>I&rsquo;ve heard the argument that &ldquo;lorem ipsum&rdquo; is effective in wireframing or design because it helps people focus on the actual layout, or color scheme, or whatever. What kills me here is that we&rsquo;re talking about creating a user experience that will (whether we like it or not) be DRIVEN by words. The entire structure of the page or app flow is FOR THE WORDS.</blockquote>\r\n\r\n<p>If that&#39;s what you think how bout the other way around? How can you evaluate content without design? No typography, no colors, no layout, no styles, all those things that convey the important signals that go beyond the mere textual, hierarchies of information, weight, emphasis, oblique stresses, priorities, all those subtle cues that also have visual and emotional appeal to the reader. Rigid proponents of content strategy may shun the use of dummy copy but then designers might want to ask them to provide style sheets with the copy decks they supply that are in tune with the design direction they require.</p>\r\n\r\n<h3>Summing up, if the copy is diverting attention from the design it&rsquo;s because it&rsquo;s not up to task.</h3>\r\n\r\n<p>Typographers of yore didn&#39;t come up with the concept of dummy copy because people thought that content is inconsequential window dressing, only there to be used by designers who can&rsquo;t be bothered to read. Lorem Ipsum is needed because words matter, a lot. Just fill up a page with draft copy about the client&rsquo;s business and they will actually read it and comment on it. They will be drawn to it, fiercely. Do it the wrong way and draft copy can derail your design review.</p>\r\n', 'post-page.jpg', '2020-08-05 16:11:14', 4, 1),
(44, '10 Amazing JavaScript Games In Under 13kB of Code', '<h1>&nbsp;</h1>\r\n\r\n<p>In this fun article we&#39;ll take a look at the amazing&nbsp;<a href=\"https://js13kgames.com/\" target=\"_blank\">JS13K</a>&nbsp;game challenge. It is an annual coding competition where super talented JavaScript developers show off their games made with only 13kB of code or less.</p>\r\n\r\n<p>We&#39;ve chosen some of our favorite games from last year to share with you. Enjoy them as a tiny gaming break from work or as a source of coding inspiration!</p>\r\n\r\n<hr />\r\n<p><a href=\"https://js13kgames.com/games/onoff/index.html\" target=\"_blank\"><img alt=\"on-off.png\" src=\"https://tutorialzine.com/media/2018/11/on-off.png\" /></a></p>\r\n\r\n<h2><a href=\"https://js13kgames.com/games/onoff/index.html\" target=\"_blank\">OnOff</a></h2>\r\n\r\n<p>This is a challenging platformer with great design and fun music. Dodge spikes, jump over pits, and toggle between dimensions to complete all the 25 levels. The game also offers a cool level editor where you can create your own levels.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://js13kgames.com/games/everyones-sky/index.html\" target=\"_blank\"><img alt=\"everyonesky.jpg\" src=\"https://tutorialzine.com/media/2019/02/everyonesky.jpg\" /></a></p>\r\n\r\n<h2><a href=\"https://js13kgames.com/games/everyones-sky/index.html\" target=\"_blank\">Everyone&#39;s sky</a></h2>\r\n\r\n<p>Everyone&#39;s sky offers the classic Asteroid style game but with an adventure and exploration RPG twist. You fly around space and its solar systems, contacting other civilizations and collecting resources. You can choose to complete missions peacefully, making allies, or just attack everything that comes in your way.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://js13kgames.com/games/underrun/index.html\" target=\"_blank\"><img alt=\"underrun.png\" src=\"https://tutorialzine.com/media/2018/11/underrun.png\" /></a></p>\r\n\r\n<h2><a href=\"https://js13kgames.com/games/underrun/index.html\" target=\"_blank\">Underrun</a></h2>\r\n\r\n<p>A shooter game where you run in a destroyed lab and your goal is to kill the spider-looking enemies and find the terminals and reboot the systems. The game runs really smoothly, with nice pixelated graphics and great sound and lighting effects.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://js13kgames.com/games/konnekt/index.html\" target=\"_blank\"><img alt=\"konnekt.png\" src=\"https://tutorialzine.com/media/2018/11/konnekt.png\" /></a></p>\r\n\r\n<h2><a href=\"https://js13kgames.com/games/konnekt/index.html\" target=\"_blank\">Konnekt</a></h2>\r\n\r\n<p>This is a simple real-time-strategy game where a virus has infected some of your system&#39;s nodes and you need to clear them before they spread. The game is really addicting and the more you play, the harder it gets and the more nodes you have to deal with.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://js13kgames.com/games/super-chrono-portal-maker/index.html\" target=\"_blank\"><img alt=\"super-chrono-portal-maker.png\" src=\"https://tutorialzine.com/media/2018/11/super-chrono-portal-maker.png\" /></a></p>\r\n\r\n<h2><a href=\"https://js13kgames.com/games/super-chrono-portal-maker/index.html\" target=\"_blank\">Super Chrono Portal Maker</a></h2>\r\n\r\n<p>An hommage to the original Super Mario games, this platformer offers 30 levels of run and jump action. Each level introduces more and more game mechanics, making the game super fun to play. There is also a level builder where you can create your own levels and share them with friends.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://js13kgames.com/games/offline-paradise/index.html\" target=\"_blank\"><img alt=\"offline-paradise.png\" src=\"https://tutorialzine.com/media/2018/11/offline-paradise.png\" /></a></p>\r\n\r\n<h2><a href=\"https://js13kgames.com/games/offline-paradise/index.html\" target=\"_blank\">Offline Paradise</a></h2>\r\n\r\n<p>A fast-paced paltformer where you need to run, jump or dash over different obstacles. An awesome feature of this game are the automatic checkpoint which bring you right back into the action if you fail on one of the challenges. It runs very smoothly with a constant high FPS while still having a pleasing parallax background, animations and music.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://js13kgames.com/games/raven/index.html\" target=\"_blank\"><img alt=\"raven.png\" src=\"https://tutorialzine.com/media/2018/11/raven.png\" /></a></p>\r\n\r\n<h2><a href=\"https://js13kgames.com/games/raven/index.html\" target=\"_blank\">Raven</a></h2>\r\n\r\n<p>Raven is a action-puzzle game where you need to fix the security cameras of the secret facility. There are mysterious creatures that you need to keep an eye on, or else they will kill you in the dark.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://js13kgames.com/games/systems-offline/index.html\" target=\"_blank\"><img alt=\"systems-offline.png\" src=\"https://tutorialzine.com/media/2018/11/systems-offline.png\" /></a></p>\r\n\r\n<h2><a href=\"https://js13kgames.com/games/systems-offline/index.html\" target=\"_blank\">Systems Offline</a></h2>\r\n\r\n<p>Awesome puzzle game in which you are stuck on a broken space station. Your mission is to fix the systems and escape before your oxygen runs out. The game can be played with a mouse or touch controls, offers colorblind mode and has three different difficulty levels.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://js13kgames.com/games/re-wire/index.html\" target=\"_blank\"><img alt=\"rewire.png\" src=\"https://tutorialzine.com/media/2018/11/rewire.png\" /></a></p>\r\n\r\n<h2><a href=\"https://js13kgames.com/games/re-wire/index.html\" target=\"_blank\">Re-wire</a></h2>\r\n\r\n<p>This game tests your logical thinking skills. You need to connect the nodes with the cable and plug it into the socket, without touching the blades. It is really challenging and fun and the best part is that it saves automatically and you can play it multiple times without losing your progress.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://js13kgames.com/games/off-the-line/index.html\" target=\"_blank\"><img alt=\"off-the-line.png\" src=\"https://tutorialzine.com/media/2018/11/off-the-line.png\" /></a></p>\r\n\r\n<h2><a href=\"https://js13kgames.com/games/off-the-line/index.html\" target=\"_blank\">Off The Line</a></h2>\r\n\r\n<p>Off the line is one of those games that have a very simple concept, while being super fun to play and difficult to master. There are 20 stages and 3 difficulty levels that you can try if you are looking for a challenge.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://js13kgames.com/games/1024-moves/index.html\" target=\"_blank\"><img alt=\"1024-moves.png\" src=\"https://tutorialzine.com/media/2018/11/1024-moves.png\" /></a></p>\r\n\r\n<h2><a href=\"https://js13kgames.com/games/1024-moves/index.html\" target=\"_blank\">1024 Moves</a></h2>\r\n\r\n<p>This is an amazing 3D puzzle game where you have the task of moving a cube through a tile grid and reach the endpoint. Avoid the holes, move different objects and try to complete all the levels in less than 1024 moves.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://js13kgames.com/games/spacecraft/index.html\" target=\"_blank\"><img alt=\"spacecraft.png\" src=\"https://tutorialzine.com/media/2018/11/spacecraft.png\" /></a></p>\r\n\r\n<h2><a href=\"https://js13kgames.com/games/spacecraft/index.html\" target=\"_blank\">Spacecraft</a></h2>\r\n\r\n<p>Spacecraft is an interesting game where you need to collect as many tokens as you can from the planets of the Solar System. You need to stay on track, dodge obstacles and asteroids, and spend your tokens wisely to upgrade your ship.</p>\r\n\r\n<hr />\r\n<p><strong>Bootstrap Studio</strong></p>\r\n\r\n<p>The revolutionary web design tool for creating responsive websites and apps.</p>\r\n\r\n<p><a href=\"https://tutorialzine.com/2019/02/10-amazing-javascript-games#\">LEARN MORE</a></p>\r\n', '10-amazing-js-games.png', '2020-08-06 14:58:20', 15, 1),
(45, '10 Useful Git Tips', '<p>Over the past few years git has vastly grown in popularity to become one of the most used version control systems. It is used by developers coding in various languages and teams of all sizes, from small open-source projects to huge codebases like the&nbsp;<a href=\"https://github.com/torvalds/linux\" target=\"_blank\">linux kernel</a>.</p>\r\n\r\n<p>In this article we are going to share with you a few tips that could improve your git experience and workflow.</p>\r\n\r\n<hr />\r\n<h2><a href=\"https://git-scm.com/docs/git-log#git-log---no-merges\" target=\"_blank\">git log --no-merges</a></h2>\r\n\r\n<p>This git command shows the whole commit history but skips commits that merged two branches together or solve a merge conflict. This allows you to quickly see all the changes done to the project, without having merge commits cluttering the git history.</p>\r\n\r\n<pre>\r\n$git log --no-merges\r\n\r\ncommit e75fe8bf2c5c46dbd9e1bc20d2f8b2ede81f2d93\r\nAuthor:  John\r\nDate:   Mon Jul 10 18:04:50 2017 +0300\r\n\r\n    Add new branch.\r\n\r\ncommit 080dfd342ab0dbdf69858e3b01e18584d4eade34\r\nAuthor:  John\r\nDate:   Mon Jul 11 15:40:56 2017 +0300\r\n\r\n    Added index.php.\r\n\r\ncommit 2965803c0deeac1f2427ec2f5394493ed4211655\r\nAuthor:  John\r\nDate:   Mon Jul 13 12:14:50 2017 +0300\r\n\r\n    Added css files.\r\n\r\n</pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<h2><a href=\"https://git-scm.com/docs/git-revert#git-revert--n\" target=\"_blank\">git revert --no-commit [commit]</a></h2>\r\n\r\n<p>Git revert generates a new commit that undoes the changes made by existing commits and generates a new commit with the resulting content. If you want to to revert the named commits and avoid the automatic commits, you can use the flag --no-commit or the shorthand -n.</p>\r\n\r\n<hr />\r\n<h2><a href=\"https://git-scm.com/docs/git-diff#git-diff--w\" target=\"_blank\">git diff -w</a></h2>\r\n\r\n<p><code>Git diff</code>&nbsp;shows the changes between two commits, two working trees or two files on disk. When multiple people work on the same project, often there are changes due to text editor&#39;s tab and space setting. In order to ignore differences caused by whitespaces when comparing lines, you can use it with the -w flag.</p>\r\n\r\n<hr />\r\n<h2><a href=\"https://git-scm.com/docs/git-diff#git-diff---statltwidthgtltname-widthgtltcountgt\" target=\"_blank\">git diff --stat</a></h2>\r\n\r\n<p>Shows how each file has been changed over time. You can add 3 parameters:&nbsp;<strong>width</strong>&nbsp;to override the default output width,&nbsp;<strong>name-width</strong>&nbsp;to set the width of the filename and&nbsp;<strong>count</strong>&nbsp;to limit the output to the first number of lines.</p>\r\n\r\n<pre>\r\n$ git diff --stat\r\n index.php | 83 +++++++++++++++++++++++++++++---------------------------\r\n 1 file changed, 43 insertions(+), 40 deletions(-)\r\n\r\n</pre>\r\n\r\n<pre>\r\n$ git diff --stat-width=10\r\n index.php | 83 +++---\r\n 1 file changed, 43 insertions(+), 40 deletions(-)\r\n</pre>\r\n\r\n<hr />\r\n<h2><a href=\"https://git-scm.com/docs/git-reset#git-reset---soft\" target=\"_blank\">git reset --soft HEAD^</a></h2>\r\n\r\n<p>Reset the head to a certain commit without touching the index file and the working tree. All changes made after this commit are moved to &quot;staged for commit&quot; stage. After that you just need to run&nbsp;<code>git commit</code>&nbsp;to add them back in.</p>\r\n\r\n<hr />\r\n<h2><a href=\"https://git-scm.com/docs/git-stash#git-stash-branchltbranchnamegtltstashgt\" target=\"_blank\">git stash branch [branch-name] [stash]</a></h2>\r\n\r\n<p>This command creates a new branch named branch-name and check it out, then applies the changes from the given stash to it and drops the stash. If no stash is given, it uses the latest one. This allows you to apply any stashed changes into a safer environment, that can later be merged into master.</p>\r\n\r\n<hr />\r\n<h2><a href=\"https://git-scm.com/docs/git-branch#git-branch--a\" target=\"_blank\">git branch -a</a></h2>\r\n\r\n<p>It shows a list of all remote-tracking and local branches. You can use the --merged flag to see only the branches that are fully merged to the master branch. This way you can track your branches and find out which ones aren&#39;t used anymore and can be deleted.</p>\r\n\r\n<pre>\r\n$ git branch -a\r\n\r\n  dev\r\n* master\r\n  remotes/origin/HEAD -&gt; origin/master\r\n  remotes/origin/dev\r\n</pre>\r\n\r\n<hr />\r\n<h2><a href=\"https://git-scm.com/docs/git-commit#git-commit---amend\" target=\"_blank\">git commit --amend</a></h2>\r\n\r\n<p>With&nbsp;<code>git commit --amend</code>&nbsp;you can change your previous commit, instead of making a new one. If you haven&#39;t pushed your changes to a remote branch, you can use this command to amend the most recent commit, adding your latest changes and even changing your commit message.</p>\r\n\r\n<hr />\r\n<h2><a href=\"https://git-scm.com/docs/git-pull#git-pull---rebasefalsetruepreserveinteractive\" target=\"_blank\">git pull --rebase</a></h2>\r\n\r\n<p>Git pull --rebase forces git to first pull the changes and then rebase the unpushed commits on top of the latest version of the remote branch. The --rebase option can be used to ensure a linear history by preventing unnecessary merge commits.</p>\r\n\r\n<hr />\r\n<h2><a href=\"https://git-scm.com/docs/git-add#git-add--p\" target=\"_blank\">git add -p</a></h2>\r\n\r\n<p>When you use this command, instead of immediately adding all the changed to the index, it goes through each change and asks what you want to do with it. This way, it allows you to interactively choose exactly what you want to be committed.</p>\r\n\r\n<pre>\r\ndiff --git a/package.json b/package.json\r\nindex db78332..a814f7e 100644\r\n--- a/package.json\r\n+++ b/package.json\r\n@@ -6,7 +6,6 @@\r\n   },\r\n   &quot;devDependencies&quot;: {\r\n     &quot;bootstrap-sass&quot;: &quot;^3.3.7&quot;,\r\n-    &quot;gulp&quot;: &quot;^3.9.1&quot;,\r\n     &quot;jquery&quot;: &quot;^3.1.0&quot;,\r\n     &quot;laravel-elixir&quot;: &quot;^6.0.0-11&quot;,\r\n     &quot;laravel-elixir-vue-2&quot;: &quot;^0.2.0&quot;,\r\nStage this hunk [y,n,q,a,d,/,e,?]? </pre>\r\n', '10-useful-git-tips.png', '2020-08-06 16:45:08', 16, 1),
(46, 'Creating an Image Zoom Library With Vanilla JavaScript', '<p>In this tutorial we are going to build a simple JavaScript library for adding zoom-on-hover effects to images. We will make the whole library from scratch, without relying on jQuery or any other external dependencies. Let&#39;s jump right in!</p>\r\n\r\n<h2>The Project</h2>\r\n\r\n<p>You can see this type of effect on many shopping sites, including very popular ones like <a href=\"https://www.ebay.com/\" target=\"_blank\">eBay</a> and <a href=\"https://www.amazon.com/\" target=\"_blank\">Amazon</a>. It usually consists of a group of small photos which can be enlarged and inspected in further detail with an on-hover magnifier.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div>\r\n<figure><video loop=\"\" autoplay=\"\" controls=\"\" src=\"https://tutorialzine.com/media/2017/08/vanilla-zoom-demo.mp4\"></video><figcaption>Our Library in Action</figcaption></figure>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>To keep the tutorial simple we won&#39;t be adding too many features to the library. It will contain only one JavaScript file, plus an optional CSS file for quickly styling a gallery like the one above.</p>\r\n\r\n<h2>Designing the Library</h2>\r\n\r\n<p>Before we start building the library, let&#39;s take a look at how we want people to use it. Making that design decision first will make developing the actual library easier later on.</p>\r\n\r\n<p>Since we are making a gallery plugin, people who use it will need to have some boilerplate HTML. This markup will contain their images, an empty <code>div</code> for the zoom effect, as well as some predefined classes to make the library work.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n\r\n<p>People are free to change this layout and add as many images as they want. It&#39;s important, however, that every image has the <code>.small-preview</code> class, and that there is an empty div with the <code>.zoomed-image</code> class.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The library will be mainly JavaScript driven but there are also a few important CSS styles that need to be set. Users can include our CSS file directly in their HTML.</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>Now that the markup and styles are set, all that is left is to include the library and initialize it.</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>Including the library&#39;s .js file makes the <code>vanillaZoom</code> object globally available. The object has only one method which is for initializing the plugin. It takes a single parameter - the id of our gallery. This way we can have multiple independent galleries initialized on one page.</p>\r\n\r\n<h2>Developing the Library</h2>\r\n\r\n<p>When building front-end JavaScript libraries we need to make sure we register their API properly. There are many ways to do this, possibly the easiest of which is <a href=\"http://checkman.io/blog/creating-a-javascript-library/\" target=\"_blank\">this method</a> by Jordan Checkman. We advise you to read his full blog post, but in short it boils down to this:</p>\r\n\r\n<pre>\r\n<code>\r\n(function(window) {\r\n  function define_library() {\r\n    // Create the library object and all its properties and methods.\r\n    var vanillaZoom = {};\r\n    vanillaZoom.init = function(galleryId) {\r\n      // Our library&#39;s logic goes here.\r\n    }\r\n    return vanillaZoom;\r\n  }\r\n\r\n  // Add the vanillaZoom object to global scope if its not already defined.\r\n  if(typeof(vanillaZoom) === &#39;undefined&#39;) {\r\n    window.vanillaZoom = define_library();\r\n  }\r\n  else{\r\n    console.log(&quot;Library already defined.&quot;);\r\n  }\r\n})(window);</code></pre>\r\n\r\n<p>The above code is wrapped in a self executing function. This way when we add the <code>vanilla-zoom.js</code> file to our project, the library will be automatically registered and the <code>vanillaZoom</code> object with all its methods will be made available to the user.</p>\r\n\r\n<p>Our library has only one method - <code>vanillaZoom.init(galleryId)</code>. Its job is to select the gallery DOM elements and add event listeners to them.</p>\r\n\r\n<p>First we check if the proper elements have been added to the HTML and select them. We can&#39;t use jQuery so we have to rely on the native JavaScript methods for working with the DOM.</p>\r\n\r\n<pre>\r\nvar container = document.querySelector(el);\r\n\r\nif(!container) {\r\n    console.error(&#39;Please specify the correct class of your gallery.&#39;);\r\n    return;\r\n}\r\n\r\nvar firstSmallImage = container.querySelector(&#39;.small-preview&#39;);\r\nvar zoomedImage = container.querySelector(&#39;.zoomed-image&#39;);\r\n\r\nif(!zoomedImage) {\r\n    console.error(&#39;Please add a .zoomed-image element to your gallery.&#39;);\r\n    return;\r\n}\r\n\r\nif(!firstSmallImage) {\r\n    console.error(&#39;Please add images with the .small-preview class to your gallery.&#39;);\r\n    return;\r\n}\r\nelse {\r\n    // Set the source of the zoomed image.\r\n    zoomedImage.style.backgroundImage = &#39;url(&#39;+ firstSmallImage.src +&#39;)&#39;;\r\n}</pre>\r\n\r\n<p>In the last line of the above code we take the image source of one of the preview images and set it as the background of our zoomable element. This happens as soon as <code>vanillaZoom.init(galleryId)</code> is called, making sure that our gallery doesn&#39;t stay empty.</p>\r\n\r\n<p>We do the same when one of the previews is clicked. This allows the user to select which image they want magnified.</p>\r\n\r\n<pre>\r\ncontainer.addEventListener(&quot;click&quot;, function (event) {\r\n  var elem = event.target;\r\n\r\n  if (elem.classList.contains(&quot;small-preview&quot;)) {\r\n      zoomedImage.style.backgroundImage = &#39;url(&#39;+ elem.src +&#39;)&#39;;\r\n  }\r\n});\r\n</pre>\r\n\r\n<p>Selecting Images</p>\r\n\r\n<p>The magnifier element has a couple of event listeners attached to it. The first one is activated when the cursor enters the element, increasing the size of the background image, thus creating a zoom effect.</p>\r\n\r\n<pre>\r\nzoomedImage.addEventListener(&#39;mouseenter&#39;, function(e) {\r\n    this.style.backgroundSize = &quot;250%&quot;; \r\n}, false);</pre>\r\n\r\n<p>Since the image is now very large, it won&#39;t fit in the container and only part of it will be visible. We want users to be able to select which portion of the image is magnified so we add a mousemove listener that changes the background position.</p>\r\n\r\n<pre>\r\nzoomedImage.addEventListener(&#39;mousemove&#39;, function(e) {\r\n\r\n  // getBoundingClientReact gives us various information about the position of the element.\r\n  var dimentions = this.getBoundingClientRect();\r\n\r\n  // Calculate the position of the cursor inside the element (in pixels).\r\n  var x = e.clientX - dimentions.left;\r\n  var y = e.clientY - dimentions.top;\r\n\r\n  // Calculate the position of the cursor as a percentage of the total size of the element.\r\n  var xpercent = Math.round(100 / (dimentions.width / x));\r\n  var ypercent = Math.round(100 / (dimentions.height / y));\r\n\r\n  // Update the background position of the image.\r\n  this.style.backgroundPosition = xpercent+&#39;% &#39; + ypercent+&#39;%&#39;;\r\n\r\n}, false);</pre>\r\n\r\n<p>Magnifying Specific Part of Image</p>\r\n\r\n<p>When the cursor leaves the magnified image we want it to go back to normal. This is easily done by returning the background size to <code>cover</code> and the background position to <code>center</code>.</p>\r\n\r\n<pre>\r\nzoomedImage.addEventListener(&#39;mouseleave&#39;, function(e) {\r\n    this.style.backgroundSize = &quot;cover&quot;; \r\n    this.style.backgroundPosition = &quot;center&quot;; \r\n}, false);</pre>\r\n\r\n<p>And with that, we are done!</p>\r\n\r\n<h2>Browser Support</h2>\r\n\r\n<p>The library should work in all modern desktop browsers, although some of the flexbox CSS may not be displayed properly on older IE.</p>\r\n\r\n<p>Sadly, the zoom effect doesn&#39;t translate very well to touch devises. Because of this and the limited screen space, it&#39;s best to present your images in another way for mobile. In our CSS we&#39;ve simply hidden the zoom element and listed the images vertically but you can try other solutions such as a carousel.</p>\r\n\r\n<h2>Conclusion</h2>\r\n\r\n<p>You can get the full source code for this article, as well as the demo code (with images courtesy to <a href=\"https://burst.shopify.com/\" target=\"_blank\">Burst</a>), from the <strong>Download</strong> button near the top of the page. You are free to use the library in all your projects, commercial or personal (<a href=\"https://tutorialzine.com/license\" target=\"_blank\">our license</a>). Happy coding!</p>\r\n', 'image-zoom-library-with-vanilla-js.jpg', '2020-08-07 19:10:22', 15, 2),
(47, 'Get Instagram Feed Data without Code', '<p>Ever had to access Instagram API and had to go through the confusing facebook docs, I have seen a friend go through the Facebook docs for hours and still not able to get it working. We need an easier way to access Instagram API, it could be to embed it on our portfolio or basically to do anything with it.</p>\r\n\r\n<p><a href=\"https://res.cloudinary.com/practicaldev/image/fetch/s--S2iZncnq--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_66%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/esgjssiai5cvu3omzyte.gif\"><img alt=\"Gif\" src=\"https://res.cloudinary.com/practicaldev/image/fetch/s--S2iZncnq--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_66%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/esgjssiai5cvu3omzyte.gif\" /></a></p>\r\n\r\n<p>Me trying to understand Facebook docs.</p>\r\n\r\n<p>So yeah, this is exactly what we are trying to solve with <a href=\"https://instafeedapi.com\">InstaFeedAPI</a>, no need to go through the confusing docs or read every single thing and pass weird parameters with no explanation to get your own feed.</p>\r\n\r\n<p>So we have read the docs for you &amp; we have done it the right way, all you need is the token for your Instagram account and that&#39;s it (literally). You just paste it in our dashboard and get an API.</p>\r\n\r\n<h3>What are we doing today?</h3>\r\n\r\n<ol>\r\n	<li>Get your Instagram Long-lived token</li>\r\n	<li>Fill a two-step form</li>\r\n	<li>Voila, you have an Instagram feed API ready.</li>\r\n</ol>\r\n\r\n<h2>Get the token</h2>\r\n\r\n<h3>1. Make a Facebook app</h3>\r\n\r\n<p>Open Facebook Developer portal<br />\r\n<a href=\"https://developers.facebook.com/apps/\">https://developers.facebook.com/apps/</a></p>\r\n\r\n<p>If you&#39;re doing this for the first time, join the FB developers portal by logging in.</p>\r\n\r\n<p>Click on <strong>Get Started on top</strong> -&gt; <strong>Verify your account</strong></p>\r\n\r\n<p>After clicking on <strong>Create App</strong>, click on <strong>&quot;For Everything Else&quot;</strong> from the popup. Give your App a Name.</p>\r\n\r\n<p><a href=\"https://res.cloudinary.com/practicaldev/image/fetch/s--WDefbS5J--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/0ydb65laghkukpg844a1.png\"><img alt=\"Instagram APP\" src=\"https://res.cloudinary.com/practicaldev/image/fetch/s--WDefbS5J--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/0ydb65laghkukpg844a1.png\" /></a></p>\r\n\r\n<h3>2. Add Instagram Testers</h3>\r\n\r\n<p>Now select <strong>Instagram</strong> from the set of Facebook products, as we want the Instagram feed.</p>\r\n\r\n<p>You will be taken to an agreement page, select <strong>Basic Display</strong> from the sidebar click on <strong>Create App</strong>, give it a name again and you will now be seeing the Instagram developer console.</p>\r\n\r\n<p>Scroll down and you will be able to see a section called <strong>User Token Generator</strong> &amp; Click on <strong>Add or Remove Instagram Testers.</strong></p>\r\n\r\n<p><a href=\"https://res.cloudinary.com/practicaldev/image/fetch/s--ibqvk49z--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/vpu3fayg3a07y5ztapoe.png\"><img alt=\"Add Tester\" src=\"https://res.cloudinary.com/practicaldev/image/fetch/s--ibqvk49z--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/vpu3fayg3a07y5ztapoe.png\" /></a></p>\r\n\r\n<p>Scroll down and add the Instagram username of whose feed you want in the API, <strong>this only works for accounts that are set as public and you will not be able to access private accounts.</strong></p>\r\n\r\n<p>Let&#39;s add our own account username and accept the testing invite by accessing this link <a href=\"https://www.instagram.com/accounts/manage_access/\"><code>https://www.instagram.com/accounts/manage_access/</code></a></p>\r\n\r\n<p>Once done come back to the Facebook developer portal, open your app, click on <strong>Basic Display</strong> and click <strong>Generate Token</strong>.</p>\r\n\r\n<p>You now have finally generated an <strong>Instagram access token</strong>, keep this somewhere aside.</p>\r\n\r\n<h3>Video Tutorial about getting Token</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Insta Feed API.</h2>\r\n\r\n<p>So, all you have to do is create an account in <a href=\"https://instafeedapi.com/signup\">https://instafeedapi.com/signup</a> and give yourself a username.</p>\r\n\r\n<p><a href=\"https://res.cloudinary.com/practicaldev/image/fetch/s--Sl4pJFbl--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/rkgz7jyj7d6swhgai3aw.jpeg\"><img alt=\"Setup Account\" src=\"https://res.cloudinary.com/practicaldev/image/fetch/s--Sl4pJFbl--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/rkgz7jyj7d6swhgai3aw.jpeg\" /></a></p>\r\n\r\n<p>Click on Create Instagram API button, once done you will be seeing a form like below, just give your API a name and enter your Instagram token.</p>\r\n\r\n<p><a href=\"https://res.cloudinary.com/practicaldev/image/fetch/s--261oErXI--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/1vopoeccpdb4jhk500nk.jpeg\"><img alt=\"Make API\" src=\"https://res.cloudinary.com/practicaldev/image/fetch/s--261oErXI--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/1vopoeccpdb4jhk500nk.jpeg\" /></a></p>\r\n\r\n<p>Your API will be listed and you can create more APIs with different accounts if you like.</p>\r\n\r\n<p>Click on the API and there you have it an API endpoint which will return you a list of your Instagram feed in a clean JSON format.</p>\r\n\r\n<p><a href=\"https://res.cloudinary.com/practicaldev/image/fetch/s--GxAPDGcR--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/4tgfjk28ts7tbxpqwvdh.jpeg\"><img alt=\"InstaFeedAPI docs\" src=\"https://res.cloudinary.com/practicaldev/image/fetch/s--GxAPDGcR--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/4tgfjk28ts7tbxpqwvdh.jpeg\" /></a></p>\r\n\r\n<p>You can also pass limit, before &amp; after parameters to our endpoint to have quick filters.</p>\r\n\r\n<p>Website: <a href=\"https://instafeedapi.com\">https://instafeedapi.com</a><br />\r\nPricing Page: <a href=\"https://instafeedapi.com/pricing\">https://instafeedapi.com/pricing</a></p>\r\n', 'dwvsjs9gyl4szykr0ppl.png', '2020-08-07 20:05:41', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_fullname` varchar(100) NOT NULL,
  `author_desc` varchar(255) NOT NULL DEFAULT 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus in ullam eum corrupti reiciendis.',
  `author_email` varchar(100) NOT NULL,
  `author_twitter` varchar(100) NOT NULL DEFAULT 'loujaybee',
  `author_github` varchar(100) NOT NULL DEFAULT 'loujaybee',
  `author_link` varchar(100) NOT NULL DEFAULT 'loujaybee',
  `author_avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_fullname`, `author_desc`, `author_email`, `author_twitter`, `author_github`, `author_link`, `author_avatar`) VALUES
(1, 'Quincy Larson', 'Georgi is a computer science student who loves web development, writing code and crafting interfaces.', 'larson.Quic@gmail.com', 'loujaybee', 'loujaybee', 'loujaybee', 'avatar-2.png'),
(2, 'Samantha Ming ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus in ullam eum corrupti reiciendis.', 'samantha_ming@gmail.com', 'loujaybee', 'loujaybee', 'loujaybee', 'avatar-1.png'),
(8, ' Bartosz Pietrucha ', 'Fullstack engineer, https://angular-academy.com founder, speaker, trainer, software consultant. I can help you with Angular and reactive architecture. ', 'bartosz-pietrucha@gmail.com', 'pietrucha', '', '', 'cc5d5f49-30e6-41be-9cc4-82f44c2cf1d9.webp');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_color` varchar(10) NOT NULL DEFAULT '333333'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`, `category_color`) VALUES
(1, 'Web Development', '1 9npNPVH7iNJ64Koq7EcW5A.jpeg', '#4BB92F'),
(2, 'CSS', 'android.png', '#0078ff'),
(4, 'JQuery', 'dataScience.jpg', '#8d00ff'),
(14, 'Front End Dev', 'Front-end-developemtn-1.png', '#247ba0'),
(15, 'Javascript', 'sasasasa', '#ff8700'),
(16, 'Git', '', '#5bd770');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_username` varchar(100) NOT NULL,
  `comment_avatar` varchar(255) NOT NULL DEFAULT 'def_face.jpg',
  `comment_content` text NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT '2020-02-14 10:28:00',
  `comment_likes` int(11) NOT NULL DEFAULT 0,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_username`, `comment_avatar`, `comment_content`, `comment_date`, `comment_likes`, `id_article`) VALUES
(1, '250871902', 'def_face.jpg', 'This is a comment test 1', '2019-07-07 09:28:00', 0, 40),
(2, '989786379', 'def_face.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic', '2019-03-15 10:28:00', 0, 27),
(3, '378052515', 'def_face.jpg', 'This is an advanceed test', '2020-02-14 10:28:00', 0, 26),
(4, '378052515', 'def_face.jpg', 'This is an advanced test 2', '2020-01-05 11:28:00', 0, 26),
(5, '784031346', 'def_face.jpg', 'this is a comment 2', '2019-05-21 11:28:00', 0, 40),
(6, '2076925118', 'def_face.jpg', 'This is a comment test 5\r\nThis is a comment test 4\r\nThis is a comment test 3', '2020-02-18 17:16:12', 0, 40),
(7, '1249945059', 'def_face.jpg', 'Thank you for taking the time to write such an elaborate advice!🙌', '2020-02-18 17:16:50', 0, 6),
(8, '1884119267', 'def_face.jpg', 'this is s comment 1', '2020-02-18 17:21:43', 0, 17),
(9, '418132487', 'def_face.jpg', 'sasajsasas', '2020-02-18 17:46:10', 0, 41),
(10, '577317656', 'def_face.jpg', 'kdjkzhdzdjizjdz', '2020-02-19 11:34:23', 0, 27),
(11, '468461801', 'def_face.jpg', 'sasasasasasasasa', '2020-08-05 14:48:37', 0, 26),
(12, '1931903981', 'def_face.jpg', 'Test Comment', '2020-08-07 15:00:04', 0, 40),
(13, '1918947887', 'def_face.jpg', 'sasasasajsasa', '2020-08-07 19:37:34', 0, 40),
(14, '202906189', 'def_face.jpg', 'test comment', '2020-08-07 19:38:22', 0, 40),
(15, '1835186045', 'def_face.jpg', 'sajshasasa', '2020-08-07 19:38:44', 0, 40),
(16, '910296642', 'def_face.jpg', 'sasasas', '2020-08-07 19:38:56', 0, 40),
(17, '564956375', 'def_face.jpg', 'hhhhhhhhhhhhhhhh', '2020-08-07 19:39:13', 0, 40),
(18, '697303869', 'def_face.jpg', 'Test comment', '2021-10-07 17:53:32', 0, 40),
(19, '500715459', 'def_face.jpg', 'Test comment', '2020-08-07 19:56:21', 0, 44),
(20, '1893422093', 'def_face.jpg', 'yyyyyyyyyyyyyyyyyyyy', '2020-08-07 20:00:02', 0, 44),
(21, '1397021679', 'def_face.jpg', 'hcuzifzefd', '2020-08-07 20:32:34', 0, 47),
(22, '1613781666', 'def_face.jpg', 'salam', '2020-08-07 20:43:06', 0, 47);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `created_at`) VALUES
(1, 'admin@admin.com', 'admin', '$2y$10$ss5ZCOfLJprUwB5CyMKZ4.eRWKbtRxgG19g0sm/INzDOQuMIbawrm', '2020-08-08 11:46:05'),
(3, 'test@test.com', 'test', '$2y$10$7gy27M9yBNjzQkY.Aklo3.JVMkKZia9MAqmXH8zdKuSQwkz5UeOtm', '2020-08-08 12:38:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `article_category` (`id_categorie`),
  ADD KEY `article_author` (`id_author`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_article` (`id_article`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_author` FOREIGN KEY (`id_author`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_category` FOREIGN KEY (`id_categorie`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_article` FOREIGN KEY (`id_article`) REFERENCES `article` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
