-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2023 at 07:29 AM
-- Server version: 10.3.37-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aavastec_work24hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `emid` int(11) NOT NULL,
  `rfname` varchar(200) NOT NULL,
  `rlname` varchar(200) NOT NULL,
  `remail` varchar(200) NOT NULL,
  `rposition` varchar(200) NOT NULL,
  `rphone` varchar(200) NOT NULL,
  `rpassword` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `cindustryt` varchar(200) NOT NULL,
  `nemployees` varchar(200) NOT NULL,
  `typeofemployer` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `cperson` varchar(200) NOT NULL,
  `cphone` varchar(200) NOT NULL,
  `ccountry` varchar(200) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `companylogo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`emid`, `rfname`, `rlname`, `remail`, `rposition`, `rphone`, `rpassword`, `cname`, `cindustryt`, `nemployees`, `typeofemployer`, `website`, `cperson`, `cphone`, `ccountry`, `caddress`, `companylogo`) VALUES
(1, 'Jackson', 'akua', 'kofi@gmail.com', 'C-level: CEO / COO / CIO / CFO / CTO / CPO', '12312313', '6ae604e86b757357696599c731ca2f5f', 'koftech', 'Automotive & Aviation', '5-10', 'Direct Employer', 'koftech.com', 'sharon', '12312313', 'Ghana', 'Old weija, Accra', 'chizzy exchangelogo.png'),
(2, 'Gifty', 'Amah', 'gifty@gmail.com', 'Middle Management: Supervisor / Unit Head', '0206483445', '6ae604e86b757357696599c731ca2f5f', 'GiftedAgroTech', 'Agriculture, Fishing & Forestry', '51-100', 'Direct Employer', 'www.giftedagrotech.com', 'Charlse', '022344223', 'Ghana', 'Osu, Ghana', ''),
(3, 'Raymond', 'Apungu', 'apunguray@gmail.com', 'C-level: CEO / COO / CIO / CFO / CTO / CPO', '0546227605', '5f4dcc3b5aa765d61d8327deb882cf99', 'Genesis Tech', 'IT & Telecoms', '5-10', 'Direct Employer', 'https://github.com/Raymond-ap', 'Ray', '0546227605', 'Ghana', 'Accra', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `app_id` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `emid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_applied` varchar(200) NOT NULL,
  `statusapp` text NOT NULL,
  `cvfile` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`app_id`, `jobid`, `emid`, `user_id`, `date_applied`, `statusapp`, `cvfile`) VALUES
(2, 9, 1, 1, '2023.02.16 17:43:54', 'pending', 'Ifenna thesis Proposal.docx'),
(3, 8, 1, 1, '2023.02.17 13:56:36', 'Hello king, you have been invited to an interview on the 3rd of march 2023', '281294933_4363678090401879_7275866235782190394_n.jpg'),
(4, 9, 1, 4, '2023.02.18 13:01:21', 'Hell, Oluseyi you have been invited to an interview on the 27th of February 2023.', 'IMG_20230108_123004.jpg'),
(5, 9, 1, 2, '2023.02.22 23:20:51', 'pending', 'BeatriceV3.png'),
(6, 7, 1, 1, '2023.03.20 17:23:34', 'pending', 'cheezy light mock up.png');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `jobid` int(11) NOT NULL,
  `emid` int(11) NOT NULL,
  `jtitle` varchar(200) NOT NULL,
  `aopenings` varchar(200) NOT NULL,
  `jobfunction` varchar(200) NOT NULL,
  `cindustry` varchar(200) NOT NULL,
  `wtype` varchar(200) NOT NULL,
  `loc` varchar(200) NOT NULL,
  `mqualification` varchar(200) NOT NULL,
  `eyears` varchar(200) NOT NULL,
  `joblevel` varchar(200) NOT NULL,
  `scurrency` varchar(200) NOT NULL,
  `msalary` varchar(200) NOT NULL,
  `jobsummary` varchar(5000) NOT NULL,
  `jobdesc` varchar(40000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`jobid`, `emid`, `jtitle`, `aopenings`, `jobfunction`, `cindustry`, `wtype`, `loc`, `mqualification`, `eyears`, `joblevel`, `scurrency`, `msalary`, `jobsummary`, `jobdesc`, `date`, `status`) VALUES
(1, 1, 'Software Developer', '2', 'Software & Data', 'IT & Telecoms', 'Full Time', 'Accra and Tema Region', 'Degree', '3 years', 'Entry Level', 'Ghana Cedis', '1,800 - 2,100', ' Crontech is looking for a Full-stack developer interested in building desktop and mobile apps for all platforms (Android, iOS etcâ€¦) inclusive of web applications. You will be responsible for building these applications, as well as coordinating with the teams responsible for other layers of the product infrastructure.\r\n\r\n    * Minimum Qualification:  Degree\r\n    * Experience Level:  Entry level\r\n    * Experience Length:  3 years', '\r\n\r\n<p>Job Description</p>\r\n\r\n<p>Our team at Yazi is responsible for developing software and services to deliver next-generation mobile application systems including machine-learning models both for internal technical communities and for the customers that are cloud-native. We are working on a cool new idea centered around building a rich media learning experience for our customers.</p>\r\n\r\n<p><br />\r\nYou would be a key engineer on the team who will:</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp; Build cross-platform mobile apps for iOS and Android using React Native and/or Flutter.</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Build web applications using HTML &amp; CSS and/or ReactJS</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Maintain an existing React Native</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Maintain an existing Flutter codebase</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Strictly follow the application UI design mockup</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Deploy test, staging, and production builds for Android and iOS</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Influence design and architecture by sharing your mobile and web application development expertise</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Participate in the full development life cycle, working within broadly defined parameters, including test plan execution and software quality needs.</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Own the delivery of an entire piece of a system or mobile application, and serve as a technical lead on complex projects.</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Build software solutions where the problem is not well defined.</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Build highly scalable, cloud-native applications codebase</li>\r\n</ul>\r\n\r\n<p><br />\r\nSkills Required:</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp; Knowledge of ReactJS, HTML, CSS and JavaScript ES6+</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Knowledge of Flutter</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Knowledge of React Native</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Knowledge with using REST APIs</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Knowledge on building process in Android and iOS, with tools such as Gradle, Android Studio, and XCode</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Knowledge of building native applications for Android and iOS is a plus, with tools such as Java, Kotlin, Objective-C, and Swift</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Knowledge of TypeScript and Git is a plus</li>\r\n</ul>\r\n\r\n<p><br />\r\nBasic Qualifications Required:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; 2+ years of non-internship professional software development experience<br />\r\n&nbsp;&nbsp;&nbsp; Programming experience with at least one modern language such as Java, C++, or C# including object-oriented design<br />\r\n&nbsp;&nbsp;&nbsp; 1+ years of experience contributing to the architecture and design (architecture, design patterns, reliability and scaling) of new and current systems.</p>\r\n\r\n<p><br />\r\nPreferred Qualifications:</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp; Strong knowledge of Computer Science fundamentals in object-oriented design, data structures, algorithm design, problem-solving, and complexity analysis</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Knowledge of, at least, one modern programming language such as C, C++, Java, Dart, Javascript or Raku(Formally called Perl)</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Experience building complex software systems that have been successfully delivered to customers</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Knowledge of professional software engineering practices &amp; best practices for the full software development life cycle, including coding standards, code reviews, source control management, build processes, testing, and operations</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Ability to take a project from scoping requirements through actual launch of the project</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Experience in communicating with users, other technical teams, and management to collect requirements, describe software product features, and technical designs</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Meets/exceeds Yazi&rsquo;s builder fundamental requirements for this role</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Meets/exceeds Yazi&rsquo;s functional/technical depth and complexity for this role</li>\r\n</ul>\r\n\r\n<p>NB: Successful Applicants will start as Interns then transition to Full-Time</p>\r\n\r\n<p><br />\r\nAbout Crontech</p>\r\n\r\n<p>Crontech is a technology-first company headquartered in Accra, Ghana, and Nairobi, Kenya, with additional offices in Delaware, USA, and Manila, Philippines. Yazi endeavors to uncover and democratize the human learning algorithm to the benefit of all. We set out to disrupt and evolve the understanding of education by providing new alternatives that consider the human condition and apply it to the community&#39;s needs. Our journey thus far has led us to digital transformation through data and technology. We are passionate about collaborating and supporting individuals and organizations to transform and achieve their next level of success through knowledge and technology.</p>\r\n', '2023-02-03 15:00:39', 1),
(2, 1, 'Sales and Marketing Officer', '7', 'Marketing & Communications', 'Advertisement, Media & Communications', 'Internship & Graduate', 'Takoradi and Western Region', 'Degree', '5 years', 'Graduate trainee', 'Ghana Cedis', '2,400 - 3,000', ' Job Summary\r\n\r\nA reputable company with speciality in providing business software solution to a variety of clients ranging from SMEs to larger enterprise is seeking to recruit a Sales and Marketing Officer.\r\n\r\n*Minimum Qualification:   Degree\r\n *Experience Level:    Entry level\r\n *Experience Length:    2 years', '\r\n\r\n<p><strong>Requirement: </strong></p>\r\n\r\n<ul>\r\n	<li>A degree in Marketing, Business Management or equivalent</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Job Specification Candidate would:</strong></p>\r\n\r\n<ul>\r\n	<li>Generate and Close Leads</li>\r\n	<li>Promote the Company&#39;s existing brands and introduce new products to the market</li>\r\n	<li>Ensure proper sales documentation</li>\r\n	<li>Analyze and Prepare Sales &amp; Marketing budgets Research and develop marketing opportunities</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Candidate should have:</strong></p>\r\n\r\n<ul>\r\n	<li>Good interpersonal and leadership skills</li>\r\n	<li>Good communication skills</li>\r\n	<li>Knowledge and experience in digital marketing</li>\r\n	<li>At least 2 years experience in sales and marketing</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>N.B:</strong> Applicants should send CVs to hrecruitmentmsl@gmail.com</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; Only shortlisted applicants will be contacted</p>\r\n', '2023-02-04 14:23:08', 1),
(3, 1, 'Sales Representative', '13', 'Marketing & Communications', 'IT & Telecoms', 'Part Time', 'Kumasi and Ashanti Region', 'Degree', '4 years', 'Entry Level', 'Ghana Cedis', '3,000 - 3,600', 'Our company is looking for a sales representative to be responsible for generating leads and meeting sales goals ', '\r\n\r\n<p><strong>Pre-requisites for this position</strong></p>\r\n\r\n<ul>\r\n	<li>Already have database of potential customers and important references that can impact&nbsp;the level of turnover and accelerate the growth of the company</li>\r\n	<li>Having a Valid driving license and know how to drive very well both manual and automatic cars</li>\r\n	<li>Good knowledge of the city of Accra and the important cities of the country (Takoradi, Kumasi, Tamale, Tema ...)</li>\r\n	<li>Good comprehension and background in the following fields: Cybersecurity, systems integration, Cloud computing, Internet and Data Solutions</li>\r\n	<li>Proven experience with an IT firm or ISP or System integrator in Ghana or Africa.</li>\r\n	<li>Speaking, reading and writing of French will be a competitive advantage for this role.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Duties and Responsibilities:</strong></p>\r\n\r\n<ul>\r\n	<li>Generating leads</li>\r\n	<li>Identify new opportunities by implementing the sales process</li>\r\n	<li>Meet or exceed sales goals</li>\r\n	<li>Negotiate all contracts with prospective clients</li>\r\n	<li>Edit client and prospect proposals by generating the P&amp;L</li>\r\n	<li>Deal with strategic key account</li>\r\n	<li>Prepare weekly and monthly reports of sales activities</li>\r\n	<li>Give sales presentations to a range of prospective clients</li>\r\n	<li>Visit clients and potential clients to evaluate needs or promote products and services</li>\r\n	<li>Collaborate with other colleagues to ensure company quotas and standards are being met, performing market research and regular competitor monitoring</li>\r\n	<li>Our solutions using solid arguments to existing and prospective customers</li>\r\n	<li>Perform cost-benefit and needs analysis of existing/potential customers to meet their needs</li>\r\n	<li>Establish, develop and maintain positive business and key customer relationships</li>\r\n	<li>Expedite the resolution of customer problems and complaints to maximize satisfaction.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Skills and Qualities Required:</strong></p>\r\n\r\n<ul>\r\n	<li>Capacity to work alone without any supervision</li>\r\n	<li>Creative and innovative mindset</li>\r\n	<li>Result oriented</li>\r\n	<li>Very high problem-solving skills</li>\r\n	<li>Good knowledge of office suit package</li>\r\n	<li>Good presentation</li>\r\n	<li>Excellent communication and convincing skills</li>\r\n	<li>Continuous improvement mindset</li>\r\n	<li>Excellent salesperson and hands-on man capable of leading an end-to-end business conversation from identifying the need to closing the sale (Sales process/ Man or woman of field).</li>\r\n	<li>Enjoy taking on the most complex challenges (fast growing company) in a sometimes-difficult environment but a spirit of positivity, fighter and winner</li>\r\n	<li>Capacity to work alone with little supervision</li>\r\n	<li>Capacity to deal with serious pressure</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Requirements:</strong></p>\r\n\r\n<ul>\r\n	<li>Proven work experience of 5 years as a Sales representative or Business developer</li>\r\n	<li>Highly motivated and target driven with a proven track record in sales</li>\r\n	<li>Excellent selling, negotiation, and communication skills</li>\r\n	<li>Prioritizing, time management and organizational skills</li>\r\n	<li>Ability to create and deliver presentations tailored to the audience&#39;s needs</li>\r\n	<li>Relationship management skills and openness to feedback</li>\r\n	<li>Bachelor&rsquo;s degree in business, marketing, or a related field.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>N.B:</strong> All candidates must submit a CV with references on this email: example@annet.net</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; Specifying the job title in the subject. The deadline of this offer is 14th November 5PM.</p>\r\n', '2023-02-04 15:45:26', 1),
(4, 1, 'Media Buyer', '8', 'Building & Architecture', 'Construction', 'Full Time', 'Central Region', 'Degree', '10 years', 'Senior Level', 'Ghana Cedis', '3,000 - 3,600', 'As a Media Buyer, your duties include buying digital advertising space on various websites, apps, and other online platforms to ensure good conversion and company profit increase.', '\r\n\r\n<p><strong>Responsibilities:</strong></p>\r\n\r\n<ul>\r\n	<li>You will be responsible for buying digital advertising space on various websites, apps, and other online platforms to ensure good conversion and company profit increase.</li>\r\n	<li>You must be well versed in the latest trends in digital marketing. This includes knowing which types of ads perform best on different platforms.</li>\r\n	<li>You will also have to search and collaborate with social media influencers.</li>\r\n	<li>You will work with our corporate CRM containing a media buying tool for purchasing ads.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Skills needed:</strong></p>\r\n\r\n<p>- Good knowledge of the latest digital advertising trends;</p>\r\n\r\n<p>- Expertise in CPM, CPC, CPL, CPA, CPS, and CPI media buying models;</p>\r\n\r\n<p>- Experience in Native advertising.</p>\r\n', '2023-02-11 02:56:04', 1),
(5, 1, 'Agents', '10', 'Human Resources', 'Education', 'Internship & Graduate', 'Accra and Tema Region', 'HND', '2 years', 'Entry Level', 'Ghana Cedis', '900 - 1,200', 'We are looking for agents to attract drivers to the ride-hailing service ', '<p><strong>Our Conditions:</strong></p>\r\n\r\n<ul>\r\n	<li>Earn from $20 to $100 daily</li>\r\n	<li>Work more = earn more</li>\r\n	<li>No office - freedom of working in the fields</li>\r\n	<li>Our trainers will fully educate and support you</li>\r\n	<li>Special branded uniform provided</li>\r\n	<li>Cool team, parties and fun events for team members</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;<strong>Your tasks:</strong></p>\r\n\r\n<ul>\r\n	<li>Seeking and training the drivers interested in our service;</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>You are good for us if:</strong></p>\r\n\r\n<ul>\r\n	<li>You have a smartphone with Internet;</li>\r\n	<li>You like to communicate with people;</li>\r\n	<li>You want to work outside and improve your skills</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Salary:</strong></p>\r\n\r\n<ul>\r\n	<li>Fix salary 25 $ weekly</li>\r\n	<li>plus KPI bonus 50 - 350$ a weekly</li>\r\n</ul>\r\n', '2023-02-11 02:58:36', 1),
(6, 1, 'Engineering Intern', '10', 'Engineering & Technology', 'Energy & Utilities', 'Contract', 'Kumasi and Ashanti Region', 'Degree', '10 years', 'Volunteer,internship', 'Ghana Cedis', '5,300 - 6,000', 'Interested in a full-time, paid remote 8 - 12 week internship with a company in the US, UK, or Canada. We will accept students or recent graduates from any academic discipline. We include students in STEM areas, as well as in the humanities and social sciences. DiversiBoard wants to hear from you. DiversiBoard works to place highly qualified individuals with companies looking for diverse talent at no cost to the candidates. ', '\r\n\r\n<p><strong>Requirements:</strong></p>\r\n\r\n<ul>\r\n	<li>Currently pursuing a university degree or recent graduate (within the last five years)</li>\r\n	<li>Strong grades. A wide variety of academic subjects are accepted - you may be a STEM student, a humanities student, or a social science student.</li>\r\n	<li>Focus on critical thinking skills.&nbsp;</li>\r\n	<li>National (anywhere in Ghana since the position is remote)</li>\r\n	<li>Recently graduated (graduated less than 5 years ago) or are going to be graduating shortly</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Remuneration: GHC 7,000 to 9,300 per month</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Work Environment:</strong></p>\r\n\r\n<ul>\r\n	<li>Interns will work remotely with teams located in the US (New York, Pittsburgh, San Francisco, Durham, Miami, Atlanta, or Austin), the UK (London or Cambridge), or Canada (Toronto, Waterloo, Vancouver, or Ottawa).</li>\r\n	<li>Internships will take place over an 8 to 12-week period. Due to these being remote positions, selected candidates will need to maintain a high-speed internet connection for the duration of their internship.</li>\r\n</ul>\r\n', '2023-02-13 09:06:30', 1),
(7, 1, 'Partnerships and Philanthropy Officer', '6', 'Community & Social Service', 'NGO, NPO & Charity', 'Part Time', 'Accra and Tema Region', 'High School (S.S.C.E)', '3 years', 'Volunteer,internship', 'Ghana Cedis', '300 - 600', 'As a member of AWDFâ€™s newly-created Partnerships and Philanthropy team, the Partnerships and Philanthropy Officer will be central to AWDFâ€™s effort to cultivate, maintain and strengthen AWDFâ€™s relationships with existing and new partners in feminist and social justice movements, the philanthropic sector and international development. ', '\r\n\r\n<p><strong>Specific Duties</strong><br />\r\n<strong>Cultivate, maintain and strengthen AWDF&rsquo;s relationships with existing and new strategic partners</strong></p>\r\n\r\n<ul>\r\n	<li>Support the Director of Partnerships and Philanthropy, the CEO and the Director of Programmes in the development and progress monitoring of a partnerships strategy that is in line with the Fund&rsquo;s new strategic direction.</li>\r\n	<li>Serve as the focal point for selected AWDF partners (e.g. peer organisations in the feminist funding or advocacy sector), including by responding to partner requests and sharing updates, represent AWDF in working-level partner meetings, etc.</li>\r\n	<li>Project-manage and lead selected partnerships-related activities (e.g. panels, meetings, trips, etc.)</li>\r\n	<li>Identify and analyse new partnership opportunities for AWDF, and coordinate actions to leverage such opportunities.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Implement initiatives and activities to advance AWDF&rsquo;s philanthropic advocacy and influencing agenda</strong></p>\r\n\r\n<ul>\r\n	<li>Monitor and analyse key developments, trends, conversations and innovations in the feminist funds/ women&rsquo;s rights/ philanthropy /international development sectors, and keep the rest of organisation abreast of current events and potential opportunities</li>\r\n	<li>Support the Director of Partnerships and Philanthropy, the CEO and the Director of Programmes in the definition of influencing and advocacy priorities and objectives.</li>\r\n	<li>Project-manage and coordinate selected influencing and advocacy-related activities (e.g. AWDF-led events or AWDF participation in conferences.)</li>\r\n	<li>Represent AWDF and/or coordinate the AWDF team&rsquo;s participation in selected events or networks where AWDF engages for influencing purpose</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Contribute to AWDF&rsquo;s resource mobilisation, development &amp; donor engagement work</strong></p>\r\n\r\n<ul>\r\n	<li>Act as a focal point for a small number of AWDF donor partners (answering requests, keeping track of developments within the donor organisation, coordinating report writing and communications, etc.)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2023-02-13 09:16:15', 1),
(8, 1, 'Regional Growth &Community; Manager (Africa)', '6', 'Management & Business Development', 'NGO, NPO & Charity', 'Contract', 'Outside Ghana', 'Degree', '4 years', 'Entry Level', 'Ghana Cedis', '1,500 - 1,800', ' Are you looking to be a part of one of the most used wallets in the blockchain industry and contribute to the cryptocurrency revolution that is changing the world? This is a full-time remote position and the candidate can be based in any global location. ', '\r\n\r\n<p><strong>Responsibilities:</strong></p>\r\n\r\n<ul>\r\n	<li>Define the strategy for Trust Wallet to grow in your region.</li>\r\n	<li>Drive marketing, community, PR/comms and operations direction by planning, executing, and monitoring initiatives and campaigns.</li>\r\n	<li>Meticulously plan logistics and details of growth initiatives, and effectively manage them to deliver timely milestones.</li>\r\n	<li>Grow and manage local online and offline Trust Wallet communities.</li>\r\n	<li>Moderate the regional social media and chat groups to increase community followers and increase positive engagement.</li>\r\n	<li>Explore new community-friendly platforms to best facilitate the local community.</li>\r\n	<li>Organize online and offline events and meet-ups in your region.</li>\r\n	<li>Grow and serve developer communities in your region.</li>\r\n	<li>Create, translate, and proofread content that will serve the local community and users well for Trust Wallet, focusing on the local market.</li>\r\n	<li>Increase local brand awareness and reach through media and influencer channels.</li>\r\n	<li>Work with projects/partners to collaboratively deliver results. Ideate, test, iterate and optimize growth.</li>\r\n	<li>Communicate and liaise effectively across multiple stakeholders, internal and external.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Requirements:</strong></p>\r\n\r\n<ul>\r\n	<li>Strong understanding and interest in cryptocurrency, blockchain and a liking for decentralized culture are a must.</li>\r\n	<li>6-8 years of community, social media, and growth experience in technology companies.</li>\r\n	<li>Demonstrated a track record of delivering on growth metrics from 0 to 1.</li>\r\n	<li>Strong project management capability and detail orientation.</li>\r\n	<li>Humble, learning fast, scrappy and getting things done.</li>\r\n	<li>Taking extreme ownership and willing to go out of the comfort zone.</li>\r\n	<li>Experience growing passionate user or developer communities in order to catalyze market adoption of technologies.</li>\r\n	<li>Ability to effectively manage a complex, remote-first team with diverse backgrounds, opinions, and working styles.</li>\r\n	<li>Strong English verbal and written communication.</li>\r\n	<li>You won&rsquo;t be able to trade or do a side hustle on this job.</li>\r\n</ul>\r\n', '2023-02-13 09:18:21', 1),
(9, 1, 'Life Insurance Advisors', '5', 'Engineering & Technology', 'Advertisement, Media & Communications', 'Contract', 'Eastern Region', 'Diploma', '2 years', 'Graduate trainee', 'Ghana Cedis', '1,500 - 1,800', 'A leading life Insurance company is recruiting SMART LIFE INSURANCE ADVISORS (SLIAs)', '\r\n\r\n<p><strong>Responsibilities</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Meeting with clients virtually or during sales visits</li>\r\n	<li>Demonstrating and presenting products</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Establishing new business</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Maintaining accurate records</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Attending trade exhibitions, conferences and meetings</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Reviewing sales performance</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Negotiating contracts and packages</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Working towards monthly or annual targets.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Carefully vetting of closed businesses on daily basis.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Designing and implementing effective marketing strategies to sell new insurance contracts or adjust existing ones</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Contacting potential clients and creating rapport by networking, cold calling, using referrals etc</li>\r\n</ul>\r\n', '2023-02-13 09:21:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `h_qualification` varchar(255) NOT NULL,
  `current_job_function` varchar(255) NOT NULL,
  `year_of_experience` varchar(255) NOT NULL,
  `availability` varchar(100) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `reg_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `dob`, `gender`, `nationality`, `location`, `phone_number`, `h_qualification`, `current_job_function`, `year_of_experience`, `availability`, `cv`, `profile_image`, `reg_date`) VALUES
(1, 'king', 'Smart', 'king@gmail.com', '6ae604e86b757357696599c731ca2f5f', '2023-01-13', 'Male', 'Ghana', 'Brong-Ahafo Region', '123231', 'Degree', 'Accounting, Auditing & Finance', '1 years', '2 Weeks', 'Reset2.docx', '2.jpg', '2023.01.28 10:38:54'),
(2, 'smith', 'Arthur', 'kevjames940@gmail.com', '6ae604e86b757357696599c731ca2f5f', '2023-01-12', 'Male', 'Nigerian', 'Accra and Tema Region', '123131', 'Degree', 'Building & Architecture', '1 years', '1 Week', '', '', '2023.01.31 18:47:24'),
(3, 'Oluseyi', 'Folorunso', 'holuhseyi4@gmail.com', '1a5bd80528facf6825c9a3cec16c3260', '1984-02-17', 'Male', 'Nigerian', 'Accra and Tema Region', '0559362615', 'N.C.E', 'Farming & Agriculture', '3 years', 'Immediately', 'IMG_20221125_092208.jpg', '', '2023.02.18 12:37:22'),
(4, 'Oluseyi', 'Folorunso', 'holuhseyi4@gmail.com', '57f23c53b440a032552b13434ac707a9', '1983-02-17', 'Male', 'Nigerian', 'Accra and Tema Region', '0559362615', 'N.C.E', 'Farming & Agriculture', '4 years', 'Immediately', 'IMG_20221125_092208.jpg', 'IMG_20220817_090917.jpg', '2023.02.18 12:46:04'),
(5, 'Olusheyi', 'Folorunso', 'holuhseyi4@gmail.com', '57f23c53b440a032552b13434ac707a9', '1983-02-17', 'Male', 'Nigerian', 'Accra and Tema Region', '0559362615', 'N.C.E', 'Farming & Agriculture', '3 years', 'Immediately', 'IMG_20220817_090907.jpg', '', '2023.02.18 12:55:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`emid`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `emid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
