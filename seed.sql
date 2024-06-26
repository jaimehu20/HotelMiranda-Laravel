-- MySQL dump 10.13  Distrib 8.0.37, for Linux (x86_64)
--
-- Host: localhost    Database: hotelmiranda
-- ------------------------------------------------------
-- Server version	8.0.37-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `amenities`
--

DROP TABLE IF EXISTS `amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `amenities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amenities`
--

LOCK TABLES `amenities` WRITE;
/*!40000 ALTER TABLE `amenities` DISABLE KEYS */;
INSERT INTO `amenities` VALUES (1,'Free Wifi'),(2,'TV'),(3,'Air Conditioning'),(4,'Gym'),(5,'Swimming pool'),(6,'Parking'),(7,'Bar & lounge'),(8,'Spa');
/*!40000 ALTER TABLE `amenities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `reservation_id` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_number` int NOT NULL,
  `room_id` int NOT NULL,
  `room_type` varchar(32) NOT NULL,
  `special_request` text NOT NULL,
  `status` varchar(32) NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,'John','Doe','1','2021-01-01','2021-01-02','2021-01-03',1,1,'Suite','No smoking','pending'),(2,'Jaime','as','6671dde4d7084','2024-06-18','2024-06-18','2024-06-19',1,1,'Suite','sasa','Pending'),(3,'Silvia','LIrola','6671de1715816','2024-06-18','2024-06-24','2024-06-30',8,8,'Double Bed','FUmar mucho','Pending'),(4,'Rosa','Ureña','6671e03d5d058','2024-06-18','2024-06-18','2024-06-27',1,1,'Suite','No fumar','Pending'),(5,'Test','Test','6671e1ec0bf2f','2024-06-18','2024-06-18','2024-06-20',1,1,'Suite','asasa','Pending'),(6,'Test3','Test3','6671e2790b85c','2024-06-18','2024-06-28','2024-07-03',6,6,'Single Bed','asas','Pending'),(7,'Test3','Test3','6671e312db03e','2024-06-18','2024-06-05','2024-06-28',8,8,'Double Bed','assas','Pending');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `employee_id` int NOT NULL AUTO_INCREMENT,
  `employee_fullName` varchar(50) DEFAULT NULL,
  `employee_email` varchar(50) DEFAULT NULL,
  `employee_password` varchar(255) DEFAULT NULL,
  `employee_startDate` varchar(20) DEFAULT NULL,
  `employee_description` varchar(50) DEFAULT NULL,
  `employee_phone` varchar(50) DEFAULT NULL,
  `employee_status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (2,'Miss Teri Mills','missterimills72@hotelmiranda.com','$2a$10$q55BTrZY7EEOxshbwSrO/uBOdb9fkL.wNKPFYhAwvh8fQ2cIS95uG','2024-06-02 19:56:01','Physical Therapy Assistant','(947) 310-5976 x19838','Inactive'),(3,'Clinton Jacobs','clintonjacobs_runolfsson@hotelmiranda.com','$2a$10$1v4u7WCkCHLcKzJYnuckLOE7EYypAJL.cfxzPsqyODXGJjaLCmUr.','2024-09-28 23:01:19','Paralegal','(791) 538-2118','Active'),(4,'Flora Tromp','floratromp.paucek92@hotelmiranda.com','$2a$10$66J3TpbKIq8wQ4EaRk0SoezKAZxm7zwOT9XEabagmiUoZm6W5hE3C','2024-01-03 07:06:27','Paralegal','945.914.7934 x292','Active'),(5,'Ruben Murray DDS','rubenmurraydds_murphy21@hotelmiranda.com','$2a$10$6Vle8260XmT2oTsQ2ilK2Oklm7P6N.o7jG4trizrjzPeTkbTgKNh2','2024-03-02 02:37:33','Internal Auditor','1-371-498-5601 x52109','Active'),(6,'Wilson Bartell','wilsonbartell.pacocha@hotelmiranda.com','$2a$10$UgNkSnqvfhCWLZ6/8PfvvO.5iC/hz3JwpThqbWUOpn.Cn7etenBKq','2023-12-21 21:50:38','Paralegal','(440) 603-9547 x01193','Active'),(7,'Ignacio Lang','ignaciolang.krajcik47@hotelmiranda.com','$2a$10$Xaz.UTBTKh4DR8rFARQ8XeiXD0VjkfyMuIP8x9AOrbs/uoreJCKky','2024-07-07 15:21:32','Physical Therapy Assistant','1-223-325-8622 x375','Active'),(8,'Oliver Kuvalis','oliverkuvalis99@hotelmiranda.com','$2a$10$pjGr.FpPEVkUWbIJKm1FKeGY1Kat4TMbrTgDyOknDjO5yNmuNPvCW','2025-03-18 01:27:25','Assistant Manager','434-641-2081','Active'),(9,'Kayla Hoppe','kaylahoppe.ankunding52@hotelmiranda.com','$2a$10$LiU7okn/Ot0BqFL6Enuo/uishrAGMXLdLJ2KMYXUhQpsuya2.wGS6','2023-08-31 01:32:14','Paralegal','482.751.0766 x120','Inactive'),(10,'Elsa Ankunding','elsaankunding.macejkovic@hotelmiranda.com','$2a$10$1TkXvUxqKeBgg7J4u8bB/eDix.8T5KM19b5TaHdjZXsY2weIZumE2','2023-10-24 06:11:51','Assistant Manager','481.504.2925','Inactive');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `review_id` int NOT NULL AUTO_INCREMENT,
  `review_date` date DEFAULT NULL,
  `review_time` varchar(20) DEFAULT NULL,
  `review_customer` varchar(30) DEFAULT NULL,
  `review_customerMail` varchar(50) DEFAULT NULL,
  `review_customerPhone` varchar(50) DEFAULT NULL,
  `review_comment` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,'2024-10-27','2024-12-17 02:32:26','Mr. Travis Windler','mr.traviswindler3@hotmail.com','(286) 351-7867 x6486','Adnuo decumbo aestivus arcus solio velociter. Apparatus curiositas acquiro strenuus spoliatio truculenter stillicidium adicio. Dolor tonsor adhaero vinco audax vilicus tergum deporto. Colo suscipit aureus vito. Depopulo advoco adstringo ocer collum autem omnis vorago. Tolero numquam tepesco bibo approbo deripio versus. Complectus dicta dens laudantium officiis nisi. Umquam antepono attollo titulus animus vicissitudo socius quod. Turbo vomer celo. Aliquid reiciendis amor vobis cohaero carcer nemo suffoco.'),(2,'2024-09-01','2023-11-03 00:32:24','Bennie Kub','benniekub51@yahoo.com','495.530.7260','Possimus cultellus tondeo alter depono concido abscido dolores comparo facilis. Calco tergeo timor audentia aut deficio consectetur. Calcar verbum utilis urbanus voro convoco turba vulpes candidus. Tubineus soluta aestivus sequi curriculum bos comis. Absens dicta coerceo cilicium crepusculum cunae acies denego. Cinis cumque aveho tero tempus cubo. Spero adstringo coniuratio spectaculum comitatus decimus tremo dedico sui agnosco. Vulpes bellicus verto bos benigne. Caecus aperiam corona adsum ullam decens tergeo. Deinde atrox bellum optio demergo canto.'),(3,'2025-04-29','2025-05-26 20:51:17','Stewart Emmerich','stewartemmerich_steuber@hotmail.com','974.721.6507 x978','Illo creptio vos vulgus corroboro vado adhuc adficio dolores amoveo. Canto adeo cicuta utor. Utpote cumque cedo suscipit tamisium alioqui commemoro. Vilis dapifer spero. Canis vir deprimo alius creo aperiam alias aegrotatio. Tredecim aliquam sum utrimque ocer decor inflammatio cribro aequus aro. Tero abeo autem cresco trado vito. Demens aperte angelus vel asperiores textor ipsa. Cuppedia accedo decimus carpo. Undique accommodo suspendo tui curiositas cena occaecati minus.'),(4,'2024-01-20','2024-02-16 13:16:21','Sam Kemmer','samkemmer80@yahoo.com','(741) 571-6574 x9822','Adaugeo adstringo enim solitudo adficio coadunatio vinco porro solvo. Desidero attero modi reiciendis amplus conduco. Demonstro denego circumvenio cibo. Solutio amo ancilla colo cornu vapulus. Alveus placeat tabula tertius esse suscipio abundans. Auxilium suggero voco. Trans tabesco umerus adamo voluptate vilitas acerbitas acidus. Undique teneo vinum custodia apud suscipit. Vito aestus adaugeo velum vos aedificium suppellex absque quibusdam conspergo. Tonsor ab maiores tyrannus speciosus crudelis compello audax crustulum ventosus.'),(5,'2024-04-14','2024-03-02 10:28:21','Opal Dicki','opaldicki_olson37@yahoo.com','(797) 848-8505 x3152','Alienus similique spiculum cubitum summa. Aliquam depono hic utpote argentum comes ventus somniculosus abutor ex. Usus celo culpa voro campana caput varius nostrum rem conculco. Theologus undique adeptio ancilla. Xiphias cuius aqua cultellus demergo timidus. Fugiat thalassinus constans aspicio defetiscor decerno allatus trepide nostrum. Auctor tolero defaeco. Aqua socius est. Sto versus patruus vapulus ver demergo aspicio. Bene utilis quidem dicta addo vapulus ea.'),(6,'2024-06-05','2023-11-30 03:12:15','Marjorie Jacobs','marjoriejacobs_adams25@yahoo.com','556.577.4402 x87100','Calculus agnitio templum veritas credo. Admoneo surgo aer. Cultura adficio iure commodi vesica esse. Magni tempora coniecto audacia. Conatus adipisci aeternus tutamen. Vacuus balbus statua cursus abduco voluptatibus architecto optio. Sulum concido vacuus speculum tredecim aperio eveniet civis sufficio venia. Capitulus absorbeo suasoria theologus validus delego demonstro ait sollers sortitus. Super molestiae arguo antiquus adaugeo votum amita adulescens. Comedo sui tredecim.'),(7,'2025-04-19','2023-12-31 04:47:47','Andrea Weber Jr.','andreaweberjr._wintheiser99@gmail.com','257.319.0346 x60919','Vorax voluptate cenaculum ultra ulterius patior coniecto demitto. Quos antepono corpus tonsor adulescens maiores spargo. Utrum mollitia conqueror optio sumptus crepusculum vesica careo umerus aranea. Peccatus creator ipsa sunt utrimque claudeo absconditus via velut conitor. Vivo catena statua aggredior tabgo. Tener sopor voluptates vinum callide accendo rem eligendi culpa. Considero speciosus denego coadunatio cibo appello theologus supra. Quod perferendis triumphus careo. Nihil vicinus despecto apostolus degusto creptio conor victus agnosco. Tego cubicularis suggero.'),(8,'2024-06-28','2024-03-29 19:49:25','James Stanton Jr.','jamesstantonjr.bailey@yahoo.com','799-479-3867 x39666','Teneo assumenda sponte laboriosam cogo incidunt vito universe adhaero solium. Baiulus apostolus illo vix. Amaritudo tero vallum victoria crudelis. Vesper thesis decet usus antea cedo agnosco. Clibanus veniam adeo explicabo cito avaritia solium. Solvo aestus cubicularis candidus explicabo. Cedo depraedor voluptate sunt speculum. Supellex admitto vitiosus tot sto victoria tripudio teneo. Soluta decet cavus quis catena temperantia suggero umquam. Valens velociter cubitum careo arceo currus blandior.'),(9,'2025-01-07','2023-12-01 03:01:00','Leticia Anderson','leticiaanderson.schumm@yahoo.com','(927) 772-8244 x697','Acerbitas urbs tabula spero aggero. Corona volubilis maiores mollitia dolor tactus acer video usque desipio. Accusantium adinventitias decens. Venio socius amita statua cunctatio. Defetiscor calco decumbo alii trepide. Enim crustulum voco. Acervus vox tergeo. Adipiscor utique theca cubo spes trado tepesco voluptatem subvenio pel. Aeneus canis adicio. Speciosus ut caput quia.'),(10,'2024-12-12','2025-01-28 01:26:29','Rachael Carter','rachaelcarter_bechtelar@gmail.com','861-225-2721 x8299','Caecus pax cetera tempore uterque arbor accommodo usus. Amissio accendo exercitationem. Quos adipiscor denego tubineus cubitum venia atque. Tametsi arbor coruscus victus theatrum. Vere adsidue bos. Acsi cui templum aranea textilis alveus. Congregatio ut perferendis voluptatem praesentium correptius. Repellendus adfectus auditor accendo totidem confugo. Alter soleo commemoro correptius approbo aurum veniam amitto aptus. Alias vos pel curvo.');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_amenities`
--

DROP TABLE IF EXISTS `room_amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_amenities` (
  `room_id` int NOT NULL,
  `amenity_id` int NOT NULL,
  KEY `room_id` (`room_id`),
  KEY `amenity_id` (`amenity_id`),
  CONSTRAINT `room_amenities_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`_id`) ON DELETE CASCADE,
  CONSTRAINT `room_amenities_ibfk_2` FOREIGN KEY (`amenity_id`) REFERENCES `amenities` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_amenities`
--

LOCK TABLES `room_amenities` WRITE;
/*!40000 ALTER TABLE `room_amenities` DISABLE KEYS */;
INSERT INTO `room_amenities` VALUES (1,1),(1,2),(1,3),(1,4),(2,1),(2,2),(2,3),(2,5),(3,1),(3,2),(3,3),(3,5),(4,1),(4,2),(4,3),(4,5),(5,1),(5,2),(5,3),(5,5),(6,1),(6,2),(6,3),(6,5),(7,1),(7,2),(7,3),(7,5),(8,1),(8,2),(8,3),(8,5),(9,1),(9,2),(9,3),(9,5),(10,1),(10,2),(10,3),(10,5);
/*!40000 ALTER TABLE `room_amenities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `room_number` int NOT NULL,
  `room_type` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `room_rate` int NOT NULL,
  `room_status` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,1,'Suite','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',420,'Pending'),(2,2,'Double Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',240,'Pending'),(3,3,'Double Superior','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',350,'Pending'),(4,4,'Single Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',110,'Pending'),(5,5,'Suite','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',420,'Pending'),(6,6,'Single Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',110,'Pending'),(7,7,'Suite','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',440,'Pending'),(8,8,'Double Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',240,'Pending'),(9,9,'Suite','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',480,'Pending'),(10,10,'Double Superior','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',350,'Pending');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-21  9:40:45
