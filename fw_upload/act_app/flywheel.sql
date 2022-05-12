/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.4.11-MariaDB : Database - flywheel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `home_page` int(11) NOT NULL,
  `slider` int(11) NOT NULL,
  `article_order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `articles` */

insert  into `articles`(`id`,`link`,`link_id`,`title`,`content`,`page_id`,`user_id`,`home_page`,`slider`,`article_order`,`status`,`created_at`,`updated_at`) values (1,'financial-institutions','5f1c1eb58f6db','Financial Institutions','<p>Financial Institutions (Banking, Insurance, Saccos, Microfinance)</p>\r\n<p>The scope, frequency and complexity of regulations that banks, insurance firms, saccos and microfinance institutions have to comply with are rapidly changing and increasing. Financial institutions have to increase their budget allocations so as to remain compliant.<br />At the same time, the cost and time needed to acquire and retain a new customer is increasing, and customer expectations are increasing too.&nbsp;<br />Financial institutions must then balance regulatory compliance costs, revenue growth and innovation. Flywheel helps you make this balance by:<br />&bull; Periodic bulk customer screening: Rather than subscribe to a screening service that you only use once a month or once a quarter, we can screen your entire customer database every month, quarter or semi-annually. The screening covers sanctions lists, adverse media checks, law enforcement checks, vessel checks and politically exposed persons their relatives and associates.</p>\r\n<p>&bull; Enhanced Due Diligence: Are you on boarding a new business partner, acquiring a new business, starting a relationship with a high net worth individual or organization from a foreign country? We have reputable partners across the world to perform due diligence checks for any litigation history, sanctions risk, beneficial ownership, bribery and corruption risk, adverse media and political exposure.</p>\r\n<p>&bull; Expert Witness: Flywheel Advisory offers expert witness services where testimony of a skilled professional is required for trial. Additionally, we employ our forensic expertise to support client&rsquo;s counsel communicate complex financial matters more persuasively. Our experience in handling contested matters for clients in diverse sectors rightfully positions us to be the premium provider of forensic expert witness services. &nbsp;</p>\r\n<p>&bull; AML, Transaction Monitoring and Anti-Fraud systems: Flywheel appreciates the fact that mitigation of money laundering, terrorism financing and fraud risk is best achieved through technology. To this end, Flywheel Advisory has partnered with providers of these technology solutions for organisations to automate and effectively manage these financial crime risks. Flywheel Advisory will, through effective business assessment, provide your organization with recommended tools that will not only detect perpetration of these crimes, but also apply preventive measures that deter criminals from misusing their systems.</p>\r\n<p>&bull; Anti- Fraud Services: Organizations grapple with how to continuously secure their enterprise from internal and external threats. Internally, fraud may be executed single-handedly or through collusion by fellow employees whilst externally fraud is perpetrated mainly through constantly evolving digital channel. Effective management of fraud risk involves a robust risk framework which not only secures the organization&rsquo;s interests but is also dynamic enough to respond to internal and external threats.&nbsp;<br />At Flywheel Advisory we will support you through a fraud crisis, and the investigation, overt or covert will ensure realization of fair outcomes. We execute this by employing forensic accounting expertise to unravel financial transactions.<br />We go a step further by issuing recommendations on how to bolster the organization&rsquo;s control framework to prevent future crystallization of fraud risks.</p>\r\n<p>&bull; Training: Never has the need to equip staff with the tools and knowledge to identify compliance breaches been as important as it is now. We have developed training programs covering Anti-Money Laundering, Terrorist Financing, Sanctions Screening, Suspicious Activity Monitoring and Reporting, Transaction Monitoring Rules, Bribery and Corruption risk and Know Your Customer checks. The training is delivered in-person, via live video classrooms or as pre-recorded eLearning modules depending on your preferred mode of deliver. &nbsp;</p>\r\n<p>&nbsp;</p>',1,1,0,0,1,1,'2020-07-25 11:59:49','2020-07-25 11:59:49'),(2,'betting-and-gaming','5f1c22fc98fc9','Betting and Gaming','<p>Casinos, betting, gaming and gambling services depend on quick and accurate on-boarding of clients. Yet this is also the new frontier for anti-money laundering, terror financing and corruption risk. This increased scrutiny brings with it extra compliance requirements.</p>\r\n<p>Flywheel Advisory solutions help our gaming and casino clients to:<br />&bull; Customer Screening: against PEPs, OFAC, UN, UKHMT, major sanctions lists and internal watch lists.<br />&bull; Automated ID validation: automated ID scanning and screening against any lists across Cashiers Cage, Players Club, and Security.<br />&bull; Address validation: Identify invalid addresses and those already claimed by other people and perform real-time address validation against U.S. postal data.</p>\r\n<p>&nbsp;</p>',1,1,0,0,2,1,'2020-07-25 12:18:04','2020-07-25 12:18:04'),(3,'procurement-and-supply-chain','5f1c235adb5d3','Procurement and Supply Chain','<p>Third party relationships and supply chain efficiency is now a critical success factor and a key differentiator between successful and non-successful businesses. Third parties provide an effective means for enlisting expertise and resources without costly investments required to build such capabilities or services in-house and come in various forms including suppliers, distributors, agents, advisors and consultants, and even customers. However, working with third parties comes with potential risk. One area of concern is increased exposure to corruption carried out by third parties.</p>\r\n<p>Flywheel Advisory assists with supply chain due diligence through database screening for Political exposure, sanctions risk, negative media, litigation history and government watch lists. We also train procurement staff on supply chain red-flags with regards to corruption risk, beneficial ownership and political exposure.</p>\r\n<p>Establish an ongoing monitoring plan: Third-party risk does not end with the onboarding process, as a third party&rsquo;s risk profile is likely to change over time. We help you stay ahead of third-party risk by continually monitoring your existing third-party relationships to rapidly identify emerging risk-relevant developments.</p>',1,1,0,0,3,0,'2020-07-25 12:19:38','2020-07-30 00:43:54'),(4,'public-sector','5f1c2459e50fa','Public Sector','<p>Non-government organizations (NGOs) are vulnerable targets of terrorist financing and money laundering. They enjoy the public trust, have access to considerable sources of funds, and their activities are often cash-intensive.</p>\r\n<p>In addition, it is time and resource consuming to maintain up-to-date records of their community based beneficiaries, their donors, suppliers, and partners. Yet, without accurate records, NGOs are unable to raise donations and perform other crucial operations.</p>\r\n<p>Flywheel Advisory appreciates this and helps in:<br />&bull; Screening partners, suppliers and beneficiaries against sanctions, political exposure, government and police watch lists<br />&bull; Data clean up to ensure that your records are complete with no duplicates or invalid formats.<br />&bull; Due Diligence including address validation, identification of nature of business, and registered owners of your beneficiaries, suppliers and partners.</p>',1,1,0,0,4,1,'2020-07-25 12:23:53','2020-07-25 12:23:53'),(5,'financial-crime-risk-management','5f1c255c2df04','Financial Crime Risk Management','<ul>\r\n<li>AML/CFT/Anti-Fraud systems for financial institutions</li>\r\n</ul>\r\n<p>Reduce risk and ensure compliance through the detection of money laundering and terrorist financing activity in a dynamic financial crime environment and support your customers.</p>\r\n<p>Flywheel presents you with Anti-Money Laundering (AML) and Fraud detection solutions designed and built by compliance systems experts and uniquely positioned to deliver flexibility and scalability. Our future proof platform enables you to increase your compliance and monitoring sophistication over time while keeping a lid on your human and technology costs.</p>\r\n<p>Our platform comes with pre-defined and customizable rule sets that help you meet key AML requirements including:</p>\r\n<ul>\r\n<li>Real time transaction monitoring</li>\r\n<li>User administration</li>\r\n<li>Alert scenarios and rules based triggers including profile deviation, KYC alerts, threshold breach, balance drain, funds in-funds out, structuring, account activity alerts, forex alerts, internal and external watch list matching, sanctions list checks, account activity review, loan alerts as well as card and other channel alerts.</li>\r\n<li>AML/CFT compliance framework review</li>\r\n</ul>\r\n<p>In order to fight financial crime, banks, saccos, micro-finance institutions, and a variety of non-financial businesses, are required to develop and implement Anti Money Laundering (AML) Compliance Programs.</p>\r\n<p>An AML policy is part of a wider compliance environment and should be contextual to the organizations regulatory environment as well as its internal controls processes. This can be challenging given the complex nature of AML laws. While a variety of factors may affect the content of the AML policy framework, senior management should check to ensure built around some key factors:</p>\r\n<ol>\r\n<li>a) Risk Assessment: Risk assessment is the primary factor in AML compliance. The AML policy framework should consider the company&rsquo;s products and services, customers, geographic location and service delivery channels. These risk factors should be rated based on issues such as high-risk countries, political exposure, beneficial ownership, enhanced due diligence checks, adverse media checks and litigation history amongst others.</li>\r\n<li>a) Suspicious Activity: Rules and results of the risk assessment should unearth suspicious activities such as inadequate, illegitimate or conflicting Know-Your-Customer (KYC) documents, abnormal deposits, and other triggering activities. If an institution has reasons to believe that transactions are from potential proceeds of crime or are linked to fraud and terrorism, it must report these suspicions to the Financial Intelligence Unit (FIU).</li>\r\n<li>c) Internal Controls: The AML compliance policy should highlight the internal controls for detecting and reporting on financial crime. The policy should involve a regular review of those controls to ensure measure their effectiveness. The Financial Action Task Force (FATF Recommendations 18) provides guidelines on information sharing within an organization.</li>\r\n<li>d) Independent Audits: A review by an independent auditor is key in exposing weaknesses of the company&rsquo;s risk assessment and compliance policy. Independent testing should be performed every 12-18 months, although organizations in particularly high risk areas may have more frequent schedule. Some of the areas an independent auditor may focus on include: KYC due diligence procedures, compliance training, monitoring and reporting systems. Such an auditor must have AML expertise and meet regulatory expectations &ndash; they are often approved by the regulator and the auditor must not have participated in developing the organization&rsquo;s AML compliance program.</li>\r\n<li>e) AML Training: Every employee should have general know of the AML policy framerwok. However, specific employees such as the AML / Compliance teams will have greater responsibility for the implementation of the policy. As such, it is critical to identify who to train, how to train, the training content and how frequent to train.</li>\r\n<li>f) Compliance Officer: AML programs should appoint a designated principal compliance officer who is responsible for overseeing the general implementation of AML policy within their institution. Everything from compliance development to its implementation often falls on the shoulders of a compliance officer.</li>\r\n</ol>\r\n<p>Flywheel has vast experience in preparing and auditing AML policies for both financial institutions and non-financial businesses such as NGO\'s, real estate firms, accountants, lawyers, gaming and betting firms as well as educational institutions.</p>\r\n<ul>\r\n<li><strong>AML/KYC Data Remediation (Compliance DataClean)</strong></li>\r\n</ul>\r\n<p>Client and business associate data often exists in different systems, in incomplete formats and with inaccurate data. This introduces uncertainty on the reliability of data used for decision making &ndash; particularly with regard to KYC and AML data.</p>\r\n<p>The uplift of client KYC information to an agreed standard focused on the highest-risk elements of the customer KYC profile is critical before any KYC activity. In addition, regulatory enforcement actions or findings often require firms to implement wide-ranging remedial programs or changes to business practices.</p>\r\n<p>Flywheel&rsquo;s Compliance DataClean solution is focused on cleansing, organizing and migrating data so it is fit for purpose. Our consultants research on your company and interview various stakeholders to identify critical information as well as any historical nuances that may have affected data integrity. Using automated tools and informed professional judgement, we detect, correct and/or remove corrupt and inaccurate records.</p>\r\n<p>Diagram: Databases and data sources &gt;&gt; Compliance Focused Data Remediation = Data analysis/Data Profiling == Standardize &amp; Correct Data</p>\r\n<ul>\r\n<li><strong>Bribery &amp; Corruption (ABC) risk management </strong></li>\r\n</ul>\r\n<p>Regulators across Kenya and East Africa are increasingly enforcing anti-bribery and anti-corruption legislation. The number of enforcement actions and the size and nature of fines and penalties have all increased significantly over the last few years.</p>\r\n<p>Directors and senior management have a corporate responsibility to take steps to deter, detect and prevent fraud and corruption. Flywheel&rsquo;s approach to ABC control helps you understand your ABC risk, identify your high-risk areas, prepare an ABC framework to address those areas as well as monitor the ongoing effectiveness of ABC risk mitigation actions.</p>\r\n<p>Flywheel assists you with Forensic Accounting investigations on alleged ABC violations, customer due diligence, development of an ABC framework, and supporting internal audit functions in assessing anti-bribery and fraud controls.</p>\r\n<ul>\r\n<li><strong>Training &amp; E-Learning on financial crime control</strong></li>\r\n</ul>\r\n<p>We provide your staff with practical, interactive and cost effective compliance courses. Flywheel compliance courses are delivered through live-virtual training, e-learning or in-person and are tailored to build a culture of compliance and integrity.</p>\r\n<p>The courses can be accessed via multiple platforms and cover financial crimes including:</p>\r\n<p>*** Sanctions &ndash; An Introduction: An introductory course on Sanctions Compliance for non-compliance staff. The course introduces the concept of sanctions, embargoes and blockades, why they are used, the impact of sanctions on the sanctioned entities, major sanctions bodies, methods of evading sanctions, impact of non-compliance to sanctions and how non-compliance staff can identify and flag possible sanctions violations.</p>\r\n<p>*** Sanctions Compliance &ndash; A detailed sanctions screening course for compliance and AML staff in financial institutions. It covers definitions, how sanctions relate to Terror Financing (TF), Special Designated Nationals, Screening tools and approaches, KYC research models, over view of trade based money laundering for sanctions violation and many more.</p>\r\n<p>*** AML for IT auditors &ndash; What should IT auditors look for when auditing AML systems? This short course delves into AML/CFT/Fraud systems and what audit approaches work best for both internal and external IT auditors.</p>\r\n<p>*** AML for non-compliance staff &ndash; An introduction to AML/CFT and why it is important, how AML contributes to business performance and the critical role played by non-compliance staff.</p>\r\n<p>*** AML for compliance staff &ndash; We go in-depth on what compliance staff should look out for, time saving alert scenarios, review of common and emerging rule sets given the change in customer behavior during and post COVID19 and many more.</p>\r\n<p>We also provide customized training for AML staff, the Board and Senior Management. &lt;&lt;Contact us&gt;&gt; for detailed discussion.</p>\r\n<ul>\r\n<li><strong><u>Client Due Diligence (CDD): </u></strong></li>\r\n</ul>\r\n<p><strong><em>Enhanced Due Diligence: </em></strong></p>\r\n<p>With decades of experience in background checks, our partners provide a range of EDD reports to unearth risks associated with your potential business partners. This includes bribery and corruption risk, sanctions risk, ultimate beneficial ownership, operating and litigation history, adverse media checks, political exposure and foreign government relationships as well as modern slavery and human rights violation risks.</p>\r\n<p>We provide these reports either as one-off reports issued upon request; or as annual renewable contracts for a specified number of reports over a twelve-month period.</p>\r\n<p><strong>Sanctions Screening</strong>: If you are engaged in export, import and international business relationships, then sanctions screening is important for your business &ndash; and this is not the place to cut corners. Ensure your Sanctions list is up-to-date and with comprehensive sanctions lists covering domestic and international restricted lists including implicit sanctions covered by the OFAC 50% rule and vessel screening.</p>\r\n<p>Through our partners, Flywheel gives you access to daily updated sanctions lists including the OFAC&rsquo;s 50% rule check, Vessel Searching for vessels that are either explicitly sanctioned or linked to sanctioned countries and cities and ports data in sanctioned areas.</p>\r\n<p><strong>Background Check</strong>: Do you know who you are doing business with? Protect your business from being used for money laundering and terrorist financing, meet regulatory obligations and reduce risk by screening your new and existing customers and business associates.</p>\r\n<p>We provide you with due diligence tools and enterprise technology for onboarding, screening and monitoring third parties and trade partners. Screen against sanctions and PEPs lists, state-owned companies, adverse media and other specialized risk categories, with risk data trusted by the world&rsquo;s biggest financial institutions.</p>\r\n<p>Our customers have the option of purchasing the background checking system and screening internally by paying an annual fee, or outsourcing the screening to Flywheel for periodic or once-off screening.</p>',2,1,0,1,1,1,'2020-07-25 12:28:12','2020-08-02 13:03:58'),(6,'who-we-are','5f1c274133d90','who we are','<p>Established in 2019, Flywheel Advisory is passionate about providing financial crime risk management solutions to our clients across East &amp; West Africa, not only to ensure compliance with regulatory requirements but to also safeguard the very core of their enterprise from abuse by criminals.<br />We pride ourselves in attracting and retaining the best talent in Forensics, Anti-Money Laundering and Financial Crime Control.</p>\r\n<p>Anti-Money Laundering (AML)&nbsp;<br />Criminals constantly seek channels through which to transmit proceeds of crime into the financial system. At Flywheel Advisory, we help our clients develop and implement robust AML Frameworks to combat propagation of money laundering crimes.&nbsp;</p>\r\n<p>Countering Financing of Terrorism (CFT) &amp; Sanctions&nbsp;<br />Terrorist financiers, sanctioned and designated parties have established sophisticated syndicates to fund terrorist activities as well as other human rights atrocities to the detriment of human life and global economies. Flywheel Advisory supports clients in bolstering existing internal control structures to prevent criminals from invading their systems to perpetrate these delinquencies. &nbsp;</p>\r\n<p>Forensic &amp; Litigation Support&nbsp;<br />At Flywheel Advisory, we support clients facing litigation and compliance investigations to ensure realization of fair outcomes by employing forensic accounting expertise to unravel complex financial transactions.</p>',4,1,0,0,1,1,'2020-07-25 12:36:17','2020-07-25 12:36:17'),(7,'team','5f1c27c6b7df8','Team','<p>Grace Mburu, Executive Director: Grace is the Executive Director at Flywheel Advisory and a passionate financial crime risk practitioner with over 8 years of experience in anti-money laundering, countering financing of terrorism, sanctions, forensic investigations and litigation support. Her career spans across Investment Banking, Finance and Accounting, Risk Consulting and Forensic Investigations. Her passion for fighting financial crime then led her to pursue a MSc Forensic Accounting degree from Sheffield Hallam University, UK and she qualified as a forensic accountant and thereafter joined Deloitte East Africa, Forensic division where she executed forensic investigations for local and multinational companies in multiple sectors and transitioned to financial crime risk management.</p>\r\n<p>After 4 years in Deloitte, Grace joined Standard Chartered Bank Kenya and served for 4 years as Senior Manager and Deputy Money Laundering Reporting Officer providing oversight on AML/CFT compliance risk management before leaving to set up Flywheel Advisory.</p>\r\n<p>Grace is a Fellow of the Association of Chartered Certified Accountants (ACCA), Certified Fraud Examiner (ACFE) and a Certified Anti-Money Laundering Specialist (ACAMS).</p>\r\n<p>Gilbert Ouko, Director &ndash; Financial Crime Control: Gilbert is a Financial Crime Control Specialist with over 8 years&rsquo; experience in consulting on Internal Audit, Anti-Money Laundering (AML) risk assessments, AML framework development and AML effectiveness reviews, AML systems setup, Know Your Customer (KYC) checks including identifying, classifying and managing Sanctions, Politically Exposed Persons (PEPs), Due Diligence Checks and Adverse Media Checks as well as training Board and Senior Management on Anti-Money Laundering.</p>\r\n<p>He leads teams, builds relationships and drives projects to successful completion.</p>\r\n<p>Gilbert has served as Chair to ISACA Kenya Chapter Board Committee on communications (2016/18), Secretary to the Institute of Certified Public Accountants of Kenya (ICPAK) Risk Management Panel, is a post graduate MBA student (MBA in Management Information Systems), Bachelor of Business Information Technology graduate, a Certified Information Systems Auditor (CISA), and a Certificate Oracle Database Administrator.</p>',4,1,0,0,2,1,'2020-07-25 12:38:30','2020-07-25 12:38:30'),(8,'careers','5f1c2811adf46','careers','<p>Together we shape the future of Forensics and Financial Crime Risk Management.</p>\r\n<p>We currently do not have vacancies at Flywheel, we encourage you to check this page periodically for vacancies.</p>\r\n<p>If you would like to join our potential staff database, please leave your name, email and area of interest below. We will be sure to shoot you a quick email whenever vacancies arise.</p>\r\n<p>[[Form with F.Name, L.Name, email, area of interest, year of experience. Sent to hr@flywheeladvisory.com]]</p>',4,1,0,0,3,1,'2020-07-25 12:39:45','2020-07-25 12:39:45'),(9,'partners','5f1c2882ac925','partners','<p>Opening Markets. Growing Faster, Together.</p>\r\n<p>Many of our clients choose to work with our partners to strengthen their customer due diligence checks and their anti-money laundering / fraud management systems as well as to deepen their forensic investigation capabilities.</p>\r\n<p>Whether you are a start-up or a well-established firm, we are happy to partner with you. We will give you access to our growing customer base across East and West Africa and ensure that our clients get the best from emerging global technologies relevant to the local context.</p>\r\n<p>[[P1: Napier Technologies Limited - https://www.napier.ai/ - AML &amp; Trade Compliance. Advanced Transaction Monitoring and Sanction Screening platform to combat evolving threats.]]</p>\r\n<p>[[P2: Dow Jones - Dow Jones brings together world-leading data, media, membership and intelligence solutions to power the most ambitious companies and professionals]]</p>\r\n<p>&gt;&gt; Become a Partner&gt;&gt; (Form: Co. Name, Registered Address, Website, Date of incorporation, social media links, Contact Name, Title, Country, City, Phone, Email address) **sent to partners@flywheeladvisory.com</p>',4,1,0,0,4,1,'2020-07-25 12:41:38','2020-07-25 12:41:38'),(10,'events-&-webinar','5f1c28b626c05','Events & Webinar','<p>Here is a quick summary of Financial Crime Control / AML and Forensic related events across the world. Please drop us a line if you would like to partner with us in an event.</p>\r\n<p>[Title, Date, Time, Location &ndash; Link]</p>\r\n<p>Counter proliferation Sanctions - Related Risk Management:</p>\r\n<p>Interactive training for risk management professionals in Africa</p>\r\n<p>June 23, 2020 - June 24, 2020</p>\r\n<p>9:00 am - 13:20 om GMT</p>',4,1,0,0,5,1,'2020-07-25 12:42:30','2020-07-25 12:42:30'),(11,'social-impact-initiatives','5f1c29045a109','Social Impact Initiatives','<p>We are always looking engage in activities that inspire those around us. We love to build lasting and sustainable development in our communities and we&rsquo;re keen to get new ideas on how we can do this. So feel free to share any ideas with us!&nbsp;</p>\r\n<p>Below are some of our employee led social impact initiatives.</p>\r\n<p>Mentorship</p>\r\n<p>Our staff initiated and sit in the advisory board of the Finance Society of Kenyatta University &ndash; a group of inspired and forward looking students. We offer mentorship to the students and connect them with industry leaders and organizations for internship opportunities.</p>',4,1,0,0,6,1,'2020-07-25 12:43:48','2020-07-25 12:43:48');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`title`,`link`,`status`,`created_at`,`updated_at`) values (1,'Category 1','category-1','1','2020-07-29 06:46:46','2020-07-29 06:46:46'),(2,'Category 2','category-2','1','2020-07-29 06:46:46','2020-07-29 06:46:46'),(3,'Category 3','category-3','1','2020-07-29 06:46:46','2020-07-30 00:46:12'),(4,'Category 4','category-4','1','2020-07-31 06:56:15','2020-07-31 06:56:15');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `image_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `images` */

insert  into `images`(`id`,`article_id`,`image_type`,`image`,`status`,`created_at`,`updated_at`) values (1,1,'article','financial-institutions-5f1c1eb58f6db.jpg',1,'2020-07-25 11:59:49','2020-07-25 11:59:49'),(2,2,'article','betting-and-gaming-5f1c22fc98fc9.jpg',1,'2020-07-25 12:18:04','2020-07-25 12:18:04'),(3,3,'article','procurement-and-supply-chain-5f1c235adb5d3.jpg',1,'2020-07-25 12:19:39','2020-07-25 12:19:39'),(4,4,'article','public-sector-5f1c2459e50fa.jpg',1,'2020-07-25 12:23:54','2020-07-25 12:23:54'),(5,5,'article','financial-crime-risk-management-5f1c255c2df04.jpg',1,'2020-07-25 12:28:12','2020-07-25 12:28:12'),(6,6,'article','who-we-are-5f1c274133d90.jpg',1,'2020-07-25 12:36:17','2020-07-25 12:36:17'),(7,7,'article','team-5f1c27c6b7df8.jpg',1,'2020-07-25 12:38:30','2020-07-25 12:38:30'),(8,8,'article','careers-5f1c2811adf46.jpg',1,'2020-07-25 12:39:45','2020-07-25 12:39:45'),(9,9,'article','partners-5f1c2882ac925.jpg',1,'2020-07-25 12:41:38','2020-07-25 12:41:38'),(10,10,'article','events-&-webinar-5f1c28b626c05.jpg',1,'2020-07-25 12:42:30','2020-07-25 12:42:30'),(11,11,'article','social-impact-initiatives-5f1c29045a109.jpg',1,'2020-07-25 12:43:48','2020-07-25 12:43:48'),(12,1,'item','blog-post-1-5f2261bb9b612.jpg',1,'2020-07-30 05:59:23','2020-07-30 05:59:23'),(13,2,'item','blog-post-2-5f227f1e24f37.jpg',1,'2020-07-30 08:04:46','2020-07-30 08:04:46'),(16,3,'item','contact-us-5f23dd3c2befc.jpg',1,'2020-07-31 08:58:36','2020-07-31 08:58:36'),(17,4,'item','team-5f26e1d2476c7.jpg',1,'2020-08-02 15:54:58','2020-08-02 15:54:58');

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `item_order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `items` */

insert  into `items`(`id`,`link`,`link_id`,`title`,`article_type`,`content`,`page_id`,`user_id`,`category_id`,`item_order`,`status`,`created_at`,`updated_at`) values (1,'blog-post-1','5f2261bb9b612','Blog Post 1','item','<p>dsfdsfdsfdsfdsfdsfds fdsfdsfdsfdvcbvcbvbvcbvbvbvc tytuyuutyiuyiolkljklkjlkjlnmnmmnbm retretrtrtrtrtertrtrtrtuiuiooiuouoipopo ghgfhgfhgfhgfhfghfghgfhfghgh</p>',3,1,1,1,1,'2020-07-30 05:59:23','2020-07-31 06:49:15'),(2,'blog-post-2','5f227f1e24f37','Blog Post 2','item','<p>sakdhlsadjklasjlkdsajdlsakdjlksjdlsadkasd</p>\r\n<p>sajdkhskjahdkjhsadkhskajdhkjsahdkjshdkjhsd</p>\r\n<p>sadjhksadhkjshdkjsahdkjashdkjhsakjhdsdasd</p>\r\n<p>asdkjasldslakdjklsdjlksajdlkjsalkjaslkjdlkasjdlkjsa7</p>\r\n<p>aksdlksjdkljsalkjasd</p>',3,1,1,2,1,'2020-07-30 08:04:46','2020-07-30 08:04:46'),(3,'contact-us','5f23dd3c2befc','contact us','item','<p>asdkklsdkasdksad saldhl dsaljdsadpasudposudpsud aspoduapsd sadasudpous dusad psuadposda paspdoupsad asddpsad</p>',5,1,NULL,1,1,'2020-07-31 08:58:36','2020-07-31 08:58:36'),(4,'team','5f26e1d2476c7','team','sub_item','<p>asdashdkjshdkjhsakjd sd sakdsdasdkjsdksjdk asjdaskdsakdsjhdkjash jdhjskahdksadksakd jkhsakjdhksjhdkjshdkjshakjdhkj kjhkjhdsakjhdksjhdksjahkjh kkjahkjshakjdhsdjkhaskdhkh khakshdkjshdkjhsakjhdkj kjahscjkhsakjhckjhckjhkjch jhaksjhckjhskjhakjhkjah kjsahkjhkjhskjhkj kjashkjhhkhcksahkjhajh kjhskhkjah kjhkjsahkjhcskajhcksjhkjh kjhsjkhsacslchlskajcslkajcoisaoij oijoasjoicjsaoijoj ijoasijcoisjacoijsaoijoj oijsojis</p>',7,1,NULL,1,1,'2020-08-02 15:54:58','2020-08-02 15:54:58');

/*Table structure for table `menus` */

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `menus` */

insert  into `menus`(`id`,`title`,`menu_link`,`status`,`created_at`,`updated_at`) values (1,'your industry','your-industry',1,'2020-07-29 06:45:46','2020-07-29 06:45:46'),(2,'solutions','solutions',1,'2020-07-29 06:45:46','2020-07-29 06:45:46'),(3,'insights','insights',1,'2020-07-29 06:45:46','2020-07-29 06:45:46'),(4,'about us','about-us',1,'2020-07-29 06:45:46','2020-07-29 06:45:46'),(5,'contact us','contact-us',1,'2020-07-29 06:45:46','2020-07-29 06:45:46');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_07_08_102933_create_roles_table',1),(5,'2020_07_08_103513_create_role_user_table',1),(6,'2020_07_09_172502_create_menus_table',1),(7,'2020_07_09_172727_create_pages_table',1),(8,'2020_07_09_172801_create_articles_table',1),(9,'2020_07_09_173307_create_images_table',1),(10,'2020_07_17_091615_create_subscriptions_table',1),(11,'2020_07_17_091737_create_subscription_groups_table',1),(12,'2020_07_17_094749_create_sub_groups_table',1),(13,'2020_07_19_164537_create_page_logs_table',1),(14,'2020_07_29_062934_create_categories_table',2),(15,'2020_07_29_064748_create_items_table',3);

/*Table structure for table `page_logs` */

DROP TABLE IF EXISTS `page_logs`;

CREATE TABLE `page_logs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `page_logs` */

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pages` */

insert  into `pages`(`id`,`title`,`page_link`,`menu_id`,`user_id`,`status`,`created_at`,`updated_at`) values (1,'financial services','financial-services',1,1,1,'2020-07-24 17:04:05','2020-07-24 17:04:05');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_user` */

insert  into `role_user`(`id`,`role_id`,`user_id`,`created_at`,`updated_at`) values (1,1,1,NULL,NULL),(2,2,2,NULL,NULL),(3,3,3,NULL,NULL);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`created_at`,`updated_at`) values (1,'admin','2020-07-22 18:14:50','2020-07-22 18:14:50'),(2,'author','2020-07-22 18:14:50','2020-07-22 18:14:50'),(3,'user','2020-07-22 18:14:50','2020-07-22 18:14:50');

/*Table structure for table `sub_groups` */

DROP TABLE IF EXISTS `sub_groups`;

CREATE TABLE `sub_groups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sub_groups` */

/*Table structure for table `subscription_groups` */

DROP TABLE IF EXISTS `subscription_groups`;

CREATE TABLE `subscription_groups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `subscription_groups` */

/*Table structure for table `subscriptions` */

DROP TABLE IF EXISTS `subscriptions`;

CREATE TABLE `subscriptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `subscriptions` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Admin User','admin@admin.com',NULL,'$2y$10$FTknWwHs.AZa5bQF.FEhf.maqZEOpGME9thIqJ5dl9ZcPedelLxlq',NULL,'2020-07-24 15:09:26','2020-07-24 15:09:26'),(2,'Author User','author@author.com',NULL,'$2y$10$OeC796YoREh.w3Gm4HrA3ueP4JH4twaPQwlzO4vY762v1dIJgc6sa',NULL,'2020-07-24 15:09:26','2020-07-24 15:09:26'),(3,'Generic User','user@user.com',NULL,'$2y$10$TRrsaNUrV8px4kof/vn1P.Ew6PtKbUJJm/zHg62D.IHMivTOUAa/.',NULL,'2020-07-24 15:09:26','2020-07-24 15:09:26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
