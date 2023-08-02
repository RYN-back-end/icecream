-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 12:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icecream`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `image`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Yahya', NULL, 'admin@admin.com', '$2y$10$fFm91rpfgyt.bSXBw28s6u1Qi2sFv5cHNGtE1fVYSXeiBrVYkCOc2', '2023-04-03 02:00:10', '2023-04-03 02:00:10'),
(2, 'Ahmed Yahya', NULL, 'admin2@admin.com', '$2y$10$R8l0hqdNb/LhxUI363WW..W3c1K0YUTZHzQxfiPMRWJNJDuyV.djK', '2023-04-04 12:53:26', '2023-04-04 12:53:26'),
(3, 'Kiara Osborne', NULL, 'kusagater@mailinator.com', '$2y$10$ouWYFoX73lTH7.MvLE6gAOcwfMbBimqK8sTQ1NRm8GgStqMnF84Zm', '2023-04-04 13:22:42', '2023-04-04 13:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `desc_ar` text NOT NULL,
  `desc_en` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/categories/76081689784187.webp', 'ساندويش', 'Sandwich', 'شطائرنا على الطريقة الإيطالية مصنوعة من مكونات مختارة بدقة ، من الخس الطازج والطماطم ، والسلمون الاسكتلندي المدخن ، إلى الدجاج المشوي وجبن الموزاريلا الإيطالية.', 'Our Italian style sandwiches are made with finely selected ingredients, from the freshest lettuce and tomatoes, Scottish smoked salmon, to the perfectly grilled chicken and rigorously Italian mozzarella', '2023-07-19 13:10:08', '2023-07-19 14:08:39'),
(2, 'assets/uploads/categories/23281689784007.webp', 'جيلاتو ميلك شيك', 'Gelato Milkshake', 'إن ميلك شيك الجيلاتي الخاص بنا يتميز بفرادته حيث ستستمتع دائمًا بنكهة الجيلاتي الغنية التي اخترتها، فهو يحتوي على كمية كبيرة من الجيلاتي ويتم تنعيمه بالحليب المناسب دون إضافة سكر. لذا، اختر النكهة التي تناسب ذوقك وستستمتع بتجربة تذوق لا مثيل لها.', 'Our gelato milkshakes are truly unique because you will have always taste the rich gelato flavor you have choosen : lots of gelato in it, right milk to smooth it, and no sugar added. Choose the flavor that rocks your taste buds.', '2023-07-19 13:26:48', '2023-07-19 13:26:48'),
(3, 'assets/uploads/categories/7441689784847.webp', 'أيس كريم', 'Ice Cream', 'تنتج IL Sorbetto الجيلاتي الإيطالي الحرفي (الآيس كريم) والشراب باستخدام أجود المكونات في معملها الحديث المجهز بآلات الجيلاتي (الآيس كريم) المصنوعة في إيطاليا.\r\nتشمل النكهات العادية لدينا: الفانيليا ، والشوكولاتة ، والفراولة ، والبندق ، والفستق ، والكراميل ، والقهوة ، ومزيج التوت ، والتوت ، والتوت الأسود ، والتوت ، والسنيكرز ، والأوريو ، وستراتشاتيلا (أبيض وأسود) ، وشراب الليمون ، وشراب المانجو ، والبسكويت ، وبذور الصنوبر ، المكاديميا ، التيراميسو.\r\nملاحظة أخيرة جديرة بالذكر هي أن Il Sorbetto ، منذ إنشائها ، تقدم منتجاتها من الجيلاتي (الآيس كريم) الطازج إلى العديد من الفنادق ذات الخمس نجوم الشهيرة في الدوحة ، ومن أمثالها: النادي الدبلوماسي ، فندق Adagio ، فندق هيلتون منتجع جزيرة البنانا فندق انتركونتيننتال ذا تورش فندق وارويك منتجع القصار فندق ميلينيوم.', 'IL Sorbetto produces Italian artisanal gelato (ice cream) and sorbets using the finest ingredients in its state of the art laboratory equipped with the lates gelato (ice cream) machines made in Italy.\r\nOur regular flavors include : vanilla, chocolate, strawberry, hazelnut, pistachio, caramel, coffee, mix berries, blueberry, blackberry, raspberry, snickers, oreo, stracciatella (black and white), lemon sorbet, mango sorbet, biscuit, pine seed, macadamia, tiramisu.\r\nA final note worth mentioning is that Il Sorbetto, since its inception, has been catering its gelato (ice cream) fresh produce to several Doha based renowned five star Hotels, the likes of whom have included : The Diplomatic Club, Adagio Hotel, The Hilton, Banana Island Resort, Intercontinental Hotel, The Torch, Warwick Hotel, Al Gassar resort, Millennium Hotel.', '2023-07-19 13:40:48', '2023-07-19 13:40:48'),
(4, 'assets/uploads/categories/36011689786673.webp', 'كيكة', 'Cake', 'لذيذة وشهية تتميز بقوامها الناعم والرطب، وتتكون من عدة طبقات من الكيك الإسفنجي المغطى بالكريمة الزبدية الغنية والكريمة الشوكولاتية الحلوة. كما تزين الكيكة بأشكال مختلفة من الشوكولاتة ويتم وضع الفواكه الطازجة فوقها لإضافة نكهة منعشة وفاكهية. تعتبر هذه الكيكة خيارًا مثاليًا لجميع محبي الحلوى والمخبوزات الراغبين في تجربة شيء مميز ومختلف عن المألوف', 'A delicious and flavorful cake that is known for its soft and moist texture, made up of several layers of sponge cake covered with rich and creamy buttercream frosting and sweet chocolate cream. The cake is decorated with various shapes of chocolate and topped with fresh fruits to add a refreshing and fruity flavor. This cake is the perfect choice for all dessert and bakery lovers who want to experience something unique and different from the usual.', '2023-07-19 13:49:18', '2023-07-19 14:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `created_at`, `updated_at`) VALUES
(8, 'assets/uploads/clients/29921690602398.webp', '2023-07-29 00:46:38', '2023-07-29 00:46:38'),
(9, 'assets/uploads/clients/65241690602420.webp', '2023-07-29 00:47:00', '2023-07-29 00:47:00'),
(10, 'assets/uploads/clients/21361690602478.webp', '2023-07-29 00:47:58', '2023-07-29 00:47:58'),
(11, 'assets/uploads/clients/49271690602484.webp', '2023-07-29 00:48:04', '2023-07-29 00:48:04'),
(12, 'assets/uploads/clients/26121690602491.webp', '2023-07-29 00:48:11', '2023-07-29 00:48:11'),
(13, 'assets/uploads/clients/16161690602499.webp', '2023-07-29 00:48:19', '2023-07-29 00:48:19'),
(14, 'assets/uploads/clients/33671690602556.webp', '2023-07-29 00:49:16', '2023-07-29 00:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Darius Wilcox', 'xypiby@mailinator.com', '+1 (136) 521-7881', 'Do sequi et et fuga', '2023-07-21 00:12:40', '2023-07-21 00:12:40'),
(2, 'Bianca Conway', 'nogifejoh@mailinator.com', '+1 (971) 574-8609', 'Dolore aut dolores i', '2023-08-02 17:09:22', '2023-08-02 17:09:22'),
(3, 'Raphael Blake', 'zopogesuw@mailinator.com', '+1 (898) 369-5199', 'Ut laboris elit ten', '2023-08-02 17:10:05', '2023-08-02 17:10:05'),
(4, 'Rachel Miranda', 'gadi@mailinator.com', '+1 (665) 684-7553', 'Autem laborum Non n', '2023-08-02 17:10:48', '2023-08-02 17:10:48'),
(5, 'Lilah Talley', 'ciqa@mailinator.com', '+1 (983) 737-5491', 'Eiusmod consequat N', '2023-08-02 17:11:59', '2023-08-02 17:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flavors`
--

CREATE TABLE `flavors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flavors`
--

INSERT INTO `flavors` (`id`, `image`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/flavors/52241690983581.webp', 'كوكتيل', 'Cocktail', 'تيست تيست تيست تيست تيست تيست تيست', 'test test test test test test test test test test', '2023-08-02 10:39:41', '2023-08-02 10:39:41'),
(2, 'assets/uploads/flavors/46131690983635.webp', 'شوكلت وفانيليا', 'chocolate & Vanilla', 'شوكولاتة اجود الانواع شوكولاتة اجود الانواع شوكولاتة اجود الانواع', 'Good chocolate chocolate chocolate chocolate chocolate', '2023-08-02 10:40:35', '2023-08-02 10:40:35'),
(3, 'assets/uploads/flavors/37971690983666.webp', 'فراولة', 'strawberry', 'فراولة فراولة فراولة فراولة فراولة', 'strawberry strawberry strawberry strawberry strawberry', '2023-08-02 10:41:06', '2023-08-02 10:41:06'),
(4, 'assets/uploads/flavors/52241690983581.webp', 'كوكتيل', 'Cocktail', 'تيست تيست تيست تيست تيست تيست تيست', 'test test test test test test test test test test', '2023-08-02 10:39:41', '2023-08-02 10:39:41'),
(5, 'assets/uploads/flavors/37971690983666.webp', 'فراولة', 'strawberry', 'فراولة فراولة فراولة فراولة فراولة', 'strawberry strawberry strawberry strawberry strawberry', '2023-08-02 10:41:06', '2023-08-02 10:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2023_04_02_205801_create_admins_table', 1),
(16, '2023_07_15_155010_create_categories_table', 2),
(19, '2023_07_19_172242_create_reviews_table', 3),
(22, '2023_07_20_121450_create_products_table', 4),
(23, '2023_07_20_122307_create_product_images_table', 4),
(24, '2023_07_21_025742_create_contact_us_table', 5),
(25, '2023_07_25_153555_create_sliders_table', 6),
(26, '2023_07_29_030644_create_clients_table', 7),
(29, '2023_07_29_041929_create_site_texts_table', 8),
(32, '2023_07_31_131645_create_traditions_table', 9),
(33, '2023_08_02_131853_create_flavors_table', 10),
(34, '2023_08_02_150818_create_wholesales_table', 11),
(35, '2023_08_02_204617_create_order_ways_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `order_ways`
--

CREATE TABLE `order_ways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_ways`
--

INSERT INTO `order_ways` (`id`, `image`, `title_ar`, `title_en`, `link`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/order_ways/26881691010113.webp', 'تطبيق طلبات', 'Talabat', 'https://play.google.com/store/apps/details?id=com.talabat&hl=ar&gl=US', '2023-08-02 18:01:53', '2023-08-02 18:01:53'),
(2, 'assets/uploads/order_ways/94451691011883.webp', 'تطبيق رفيق', 'RAFEEQ', 'https://play.google.com/store/apps/details?id=com.rafiq_assistant.rafiq&hl=ar&gl=US', '2023-08-02 18:31:23', '2023-08-02 18:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `large_price` decimal(8,2) DEFAULT NULL,
  `medium_price` decimal(8,2) DEFAULT NULL,
  `small_price` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `image`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `large_price`, `medium_price`, `small_price`, `created_at`, `updated_at`) VALUES
(1, 3, 'assets/uploads/products/60151689858629.webp', 'فراولة', 'strawberry', 'الجيلاتي الإيطالي الحرفي (الآيس كريم) والشراب باستخدام أجود المكونات في حالته', 'Italian artisanal gelato (ice cream) and sorbets using the finest ingredients in its state', '50.00', '14.00', '9.00', '2023-07-20 10:10:29', '2023-07-25 15:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/uploads/products/67421689858629.webp', '2023-07-20 10:10:29', '2023-07-20 10:10:29'),
(2, 1, 'assets/uploads/products/68761689858629.webp', '2023-07-20 10:10:29', '2023-07-20 10:10:29'),
(3, 1, 'assets/uploads/products/33811689858629.webp', '2023-07-20 10:10:30', '2023-07-20 10:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `desc_ar` text NOT NULL,
  `desc_en` text NOT NULL,
  `written_at_ar` varchar(255) NOT NULL DEFAULT 'عبر فيسبوك',
  `written_at_en` varchar(255) NOT NULL DEFAULT 'Facebook Comment',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `image`, `name_ar`, `name_en`, `desc_ar`, `desc_en`, `written_at_ar`, `written_at_en`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/reviews/32191689792101.webp', 'أحمد يحيي', 'Ahmed Yahya', '\"قمت بزيارة محل الآيس كريم هذا المساء ولقد استمتعت بتجربة رائعة. كانت النكهات والمجموعات المتاحة واسعة ومتنوعة، وتم تقديم الآيس كريم بطريقة جميلة ومرتبة. كانت النكهات التي جربتها جميعها لذيذة بشكل لا يصدق، ولم أتمكن من تحديد الأفضل بينها.', '“I visited the ice cream parlor this evening and had a great experience. The flavors and combinations available were wide and varied, and the ice cream was presented in a beautiful and tidy way. The flavors I tried were all incredibly delicious, and I couldn\'t decide which was the best.', 'تعليق فيسبوك', 'Facebook Comment', '2023-07-19 15:41:41', '2023-07-19 16:01:30'),
(2, 'assets/uploads/reviews/88381689793360.webp', 'ابو مريف', 'Abu Morief', 'كان الجو في المحل رائعاً، حيث كانت الموسيقى هادئة والأجواء مريحة ومثالية للاسترخاء والاستمتاع بالآيس كريم. كان العاملون في المحل متعاونين وودودين، وقدموا لي خدمة سريعة وممتازة. أوصي بشدة بزيارة هذا المحل إذا كنت تبحث عن تجربة آيس كريم لا تنسى. سأعود بالتأكيد مرة أخرى لتجربة المزيد من النكهات الرائعة', 'The atmosphere in the shop was great, the music was soft and the atmosphere was relaxing and perfect for relaxing and enjoying an ice cream. The shop staff were helpful and friendly, and provided me with prompt and excellent service. I highly recommend visiting this shop if you are looking for an unforgettable ice cream experience. I will definitely come back again to try more of the great flavours', 'زائر دائم', 'Visitor', '2023-07-19 16:02:40', '2023-07-19 16:02:40'),
(3, 'assets/uploads/reviews/36601689793547.webp', 'مني علي', 'Mona Ali', 'المحل مدهش بالفعل , المحل يقدم منتجات في غاية الجمال والروعة , والاطعمه تشبه المطابخ الايطالية خصوصا الكلاسيكية , قمت بزيارة المحل 3 مرات حتي الان وكل مرة تكون افضل من التي قبلها , انت محظوظ للغاية اذا لم تذهب الي هناك حتي الان لان ما ينتظرك شئ كبير حقا !', 'The shop is really amazing, the shop offers products of the utmost beauty and magnificence, and the food is similar to Italian kitchens, especially the classic ones. I have visited the shop 3 times so far and each time is better than the one before, you are very lucky if you have not gone there yet because what awaits you is something really big !', 'تويت تويتر', 'Twitter tweet', '2023-07-19 16:05:47', '2023-07-19 16:05:47'),
(4, 'assets/uploads/reviews/73671689867835.webp', 'علي جمال', 'Ali Gamal', 'الجيلاتي من ilsorbetto في قطر لذيذ! أوصي بشكل خاص بنكهة النوتيلا. إنه أمر لا بد منه.', 'The gelato from ilsorbetto in Qatar is delicious! I especially recommend their Nutella flavor. It\'s a must-try', 'تعليق فيسبوك', 'Facebook Comment', '2023-07-20 12:43:55', '2023-07-31 15:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `site_texts`
--

CREATE TABLE `site_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `second_section_ar` text DEFAULT NULL,
  `second_section_en` text DEFAULT NULL,
  `category_desc_ar` text DEFAULT NULL,
  `category_desc_en` text DEFAULT NULL,
  `flavor_desc_ar` text DEFAULT NULL,
  `flavor_desc_en` text DEFAULT NULL,
  `wholesale_desc_ar` text DEFAULT NULL,
  `wholesale_desc_en` text DEFAULT NULL,
  `order_desc_ar` text DEFAULT NULL,
  `order_desc_en` text DEFAULT NULL,
  `about_desc_ar` text DEFAULT NULL,
  `about_desc_en` text DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_texts`
--

INSERT INTO `site_texts` (`id`, `logo`, `menu`, `second_section_ar`, `second_section_en`, `category_desc_ar`, `category_desc_en`, `flavor_desc_ar`, `flavor_desc_en`, `wholesale_desc_ar`, `wholesale_desc_en`, `order_desc_ar`, `order_desc_en`, `about_desc_ar`, `about_desc_en`, `about_image`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/setting/88381690665745.webp', 'assets/uploads/setting/82781691013238.webp', 'وُلدت إل سوربيتو في الأصل في عام 2013 وربما كانت الشركة الوحيدة في ذلك الوقت التي صنعت الجيلاتي الإيطالي الأصيل (الآيس كريم) في قطر. لا يزال تقاليدنا مستمرة حتى اليوم ، على الرغم من أننا قدمنا مجموعة منتجات جديدة ، وهي الكعك والسندويشات والمخفوقات والعصائر والقهوة. لقد تطورنا إلى كافيتريا على الطراز الإيطالي حقًا ، حيث نقدم الترفيه لعملائنا المحبوبين والمخلصين من الإفطار إلى العشاء مع مجموعة من المنتجات اللذيذة.\'', 'IL Sorbetto was originally born in 2013 as perhaps the only company then to make genuine Italian artisanal gelato (ice cream) in Qatar. Our tradion still continues today, though we have introduced new product range, namely cakes, sandwiches, shakes, juices, and coffee. We have evolved into a truly Italian style cafeteria, entertaining our beloved and loyal customers from breakfast to dinner with a range of delicious products.', '\"وُلدت إل سوربيتو في الأصل في عام 2013 وربما كانت الشركة الوحيدة في ذلك الوقت التي صنعت الجيلاتي الإيطالي الأصيل (الآيس كريم) في قطر. لا يزال تقاليدنا مستمرة حتى اليوم ، على الرغم من أننا قدمنا مجموعة منتجات جديدة ، وهي الكعك والسندويشات والمخفوقات والعصائر والقهوة. لقد تطورنا إلى كافيتريا على الطراز الإيطالي حقًا ، حيث نقدم الترفيه لعملائنا المحبوبين والمخلصين من الإفطار إلى العشاء مع مجموعة من المنتجات اللذيذة.\'\"', 'IL Sorbetto was originally born in 2013 as perhaps the only company then to make genuine Italian artisanal gelato (ice cream) in Qatar. Our tradion still continues today, though we have introduced new product range, namely cakes, sandwiches, shakes, juices, and coffee. We have evolved into a truly Italian style cafeteria, entertaining our beloved and loyal customers from breakfast to dinner with a range of delicious products.', 'نعتقد أن النكهة هي قلب وروح أي تجربة طعام رائعة ، ولهذا السبب نأخذها على محمل الجد. قضى فريق خبراء الطهي لدينا ساعات لا تحصى في إتقان مجموعة متنوعة من النكهات اللذيذة التي ستثير حواس التذوق لديك وتجعلك ترغب في المزيد. سواء كنت في حالة مزاجية لشيء حلو أو مالح أو حار أو أي شيء بينهما ، فقد قمنا بتغطيتك', 'We believe that flavor is the heart and soul of any great food experience, and that\'s why we take it so seriously. Our team of culinary experts has spent countless hours perfecting a wide variety of delicious flavors that will tantalize your taste buds and leave you wanting more. Whether you\'re in the mood for something sweet, savory, spicy, or anything in between, we\'ve got you covered', '\"استعد لتجربة لا تُنسى مع محلنا المميز للآيس كريم بالبيع بالجملة! نحن نقدم لك فرصة رائعة لتحقيق نجاحك في عالم الآيس كريم وتلبية شهية عملائك بطريقة لذيذة ومربحة.\r\n\r\nمهما كانت احتياجاتك، فإننا نوفر لك مجموعة واسعة من النكهات الشهية والمبتكرة التي تناسب جميع الأذواق. سواء كنت تبحث عن الكلاسيكيات اللذيذة مثل الفانيليا والشوكولاتة، أو ترغب في تقديم ابتكارات جديدة ومثيرة مثل الفواكه الطازجة والحلويات المختلفة، فإننا نقدم لك تشكيلة واسعة تضم الكثير من الخيارات الشهية.\r\n\r\nنحن نضمن لك جودة عالية في كل كوب من الآيس كريم الذي نقدمه. نستخدم المكونات الطازجة والطبيعية، ونتبع أعلى معايير الصحة والسلامة في عملياتنا. فنحن نؤمن بأن تجربة الآيس كريم يجب أن تكون لذيذة وصحية في الوقت نفسه.\r\n\r\nفريقنا المحترف والمبدع مستعد لمساعدتك في جميع جوانب عملك. سواء كنت تحتاج إلى توجيهات في اختيار النكهات المناسبة أو تصميم العبوات الجذابة، فإننا هنا لدعمك ومساعدتك في تحقيق نجاحك.\r\n\r\nانضم إلينا اليوم واستمتع بتجربة رائعة في عالم الآيس كريم بالبيع بالجملة. اجعل محلك مكانًا لا يقاوم لعشاق الآيس كريم واجعل أعمالك تزدهر بنجاح ورضا العملاء.\"', 'Get ready for an unforgettable experience with our unique wholesale ice cream shop! We offer you a great opportunity to make your ice cream business successful and satisfy your customers\' appetites in a delicious and profitable way.\r\n\r\nWhatever your needs, we provide you with a wide range of delicious and innovative flavors to suit all tastes. Whether you\'re looking for delicious classics like vanilla and chocolate, or want to introduce new and exciting innovations like fresh fruits and different desserts, we offer you a wide assortment of delicious options.\r\n\r\nWe guarantee high quality in every cup of ice cream that we serve. We use fresh and natural ingredients, and follow the highest standards of health and safety in our operations. We believe that an ice cream experience should be delicious and healthy at the same time.\r\n\r\nOur professional and creative team is ready to assist you in all aspects of your business. Whether you need guidance in choosing the right flavors or designing attractive packaging, we are here to support you and help you achieve your success.\r\n\r\nJoin us today and have a wonderful experience in the world of wholesale ice cream. Make your shop an irresistible place for ice cream lovers and let your business flourish with success and customer satisfaction.”', '<p>&quot;استمتع بالطلب عبر الإنترنت واحصل على أفضل تجربة للآيس كريم من محلنا المميز! نحن نقدم لك الفرصة للاستمتاع بالنكهات الشهية والممتعة في راحة منزلك عبر خدمة الطلب عبر الإنترنت.</p>\r\n\r\n<p>مهما كانت رغبتك، فإننا نوفر لك مجموعة واسعة من النكهات اللذيذة للاختيار من بينها. من الكلاسيكيات الشهية مثل الفانيليا والشوكولاتة إلى الابتكارات الجديدة والمميزة مثل الفواكه الطازجة والحلويات المختلفة، نقدم لك تشكيلة متنوعة تناسب جميع الأذواق.</p>\r\n\r\n<p>مع خدمة الطلب عبر الإنترنت، يمكنك اختيار النكهات والحجم والإضافات بسهولة من خلال موقعنا الإلكتروني. ستصلك طلبيتك الطازجة واللذيذة مباشرة إلى باب منزلك أو مكان عملك، مما يوفر لك الراحة والسهولة في الحصول على الآيس كريم الذي ترغب فيه.</p>\r\n\r\n<p>نحن نضمن لك جودة عالية في كل كوب من الآيس كريم الذي نقدمه. نستخدم المكونات الطازجة والطبيعية، ونهتم بتفاصيل التحضير لضمان حصولك على تجربة لا تُنسى في كل مرة.</p>\r\n\r\n<p>استمتع بتجربة الآيس كريم الرائعة عبر الطلب عبر الإنترنت الآن. اختر نكهاتك المفضلة واستمتع بالمذاق الرائع في أي وقت وأي مكان. فريقنا مستعد لتلبية طلباتك وضمان رضاك التام بكل تفاصيل الخدمة.&quot;</p>', '<p>Enjoy online ordering and get the best ice cream experience from our signature store! We offer you the opportunity to enjoy delicious and fun flavors in the comfort of your home with our online ordering service.<br />\r\nWhatever your desire, we provide you with a wide range of delicious flavors to choose from. From delicious classics such as vanilla and chocolate to new and exciting innovations such as fresh fruits and various desserts, we offer you a variety to suit all tastes.<br />\r\nWith our online ordering service, you can choose your flavours, size and toppings easily through our website. Your fresh and delicious order will be delivered directly to the door of your home or workplace, providing you with the convenience and ease of getting the ice cream you desire.<br />\r\nWe guarantee high quality in every cup of ice cream that we serve. We use fresh and natural ingredients, and pay attention to the details of preparation to ensure you have an unforgettable experience every time.<br />\r\nEnjoy the ultimate ice cream experience by ordering online now. Choose your favorite flavors and enjoy the great taste anytime and anywhere. Our team is ready to meet your requests and ensure that you are completely satisfied with every detail of the service.</p>', '<h2>مهمة:<br />\r\nفي II Sorbetto ، مهمتنا هي خلق تجارب آيس كريم لا تُنسى تسعد الحواس وتجلب الفرح لعملائنا.<br />\r\nنحن ملتزمون بصياغة نكهات استثنائية ، باستخدام أفضل المكونات فقط ، وتوفير مساحة ترحيبية حيث<br />\r\nالذكريات تصنع.<br />\r\nقيم:<br />\r\n1. التميز: نسعى جاهدين للتميز في كل جانب من جوانب حرفتنا ، من اختيار المكونات إلى الاهتمام الدقيق بها<br />\r\nالتفاصيل في صنع النكهات لدينا. نعتقد أنه من خلال السعي وراء التميز ، يمكننا تقديم تجارب الآيس كريم التي تفوق<br />\r\nالتوقعات.<br />\r\n2. الإبداع: الابتكار هو جوهر إبداعاتنا. نحن نحتضن الإبداع في مجموعات النكهات ، والعرض ، والشكل العام<br />\r\nتجربة الآيس كريم. نستكشف باستمرار أفكارًا جديدة ، وندفع الحدود لمفاجأة عملائنا وإسعادهم.<br />\r\n3. الجودة: الجودة هي أساس كل ما نقوم به. نحن ملتزمون بتوريد المكونات عالية الجودة ، والالتزام بها<br />\r\nمعايير النظافة الصارمة ، والتأكد من أن كل مغرفة من آيس كريم II Sorbetto هي تحفة من المذاق والقوام.<br />\r\n4. المجتمع: نحن نؤمن بتعزيز روح المجتمع والتواصل من خلال الآيس كريم. نحن نسعى جاهدين لخلق ترحيب<br />\r\nمساحة حيث يمكن للأصدقاء والعائلات وعشاق الآيس كريم التجمع ومشاركة اللحظات وخلق ذكريات دائمة.<br />\r\n5. الاستدامة: نحن ملتزمون بالممارسات المستدامة والحد من تأثيرنا البيئي. نحن مصدر المكونات<br />\r\nبشكل مسؤول ، وتقليل النفايات ، واستكشاف خيارات التعبئة والتغليف الصديقة للبيئة. نحن نهدف إلى المساهمة في كوكب أكثر صحة مع الإرضاء<br />\r\nالرغبة الشديدة في الحلو.<br />\r\n6. رضا العملاء: عملائنا هم في صميم كل ما نقوم به. نحن نعطي الأولوية لرضاهم من خلال توفير<br />\r\nخدمة استثنائية ، والاستماع إلى ملاحظاتهم ، وتحسين عروضنا باستمرار لتتجاوز توقعاتهم.<br />\r\n7. الفرح والبهجة: نعتقد أن الآيس كريم يجلب الفرح والسعادة. هدفنا خلق لحظات فرحة لعملائنا ،<br />\r\nيستحضر الابتسامات ويخلق ذكريات عزيزة مع كل مغرفة لذيذة.<br />\r\nترشدنا هذه القيم في سعينا إلى صياغة أفضل تجارب الآيس كريم. إنهم يشكلون قراراتنا ويلهمون إبداعاتنا و<br />\r\nتعكس التزامنا بتقديم لحظات من النعيم الخالص من خلال الحلويات المجمدة المحببة لدينا.</h2>', '<h3>Mission:<br />\r\nAt II Sorbetto, our mission is to create unforgettable ice cream experiences that delight the senses and bring joy to our customers.<br />\r\nWe are committed to crafting exceptional flavors, using only the finest ingredients, and providing a welcoming space where<br />\r\nmemories are made.<br />\r\nValues:<br />\r\n1. Excellence: We strive for excellence in every aspect of our craft, from the selection of ingredients to the meticulous attention to<br />\r\ndetail in creating our flavors. We believe that by pursuing excellence, we can deliver ice cream experiences that surpass<br />\r\nexpectations.<br />\r\n2. Creativity: Innovation is at the heart of our creations. We embrace creativity in flavor combinations, presentation, and the overall<br />\r\nice cream experience. We continuously explore new ideas, pushing the boundaries to surprise and delight our customers.<br />\r\n3. Quality: Quality is the foundation of everything we do. We are dedicated to sourcing the highest-quality ingredients, adhering to<br />\r\nstrict hygiene standards, and ensuring that every scoop of II Sorbetto ice cream is a masterpiece of taste and texture.<br />\r\n4. Community: We believe in fostering a sense of community and connection through ice cream. We strive to create a welcoming<br />\r\nspace where friends, families, and ice cream enthusiasts can gather, share moments, and create lasting memories.<br />\r\n5. Sustainability: We are committed to sustainable practices and reducing our environmental impact. We source ingredients<br />\r\nresponsibly, minimize waste, and explore eco-friendly packaging options. We aim to contribute to a healthier planet while satisfying<br />\r\nsweet cravings.<br />\r\n6. Customer Satisfaction: Our customers are at the heart of everything we do. We prioritize their satisfaction by providing<br />\r\nexceptional service, listening to their feedback, and continuously improving our offerings to exceed their expectations.<br />\r\n7. Joy and Delight: We believe that ice cream brings joy and happiness. Our goal is to create moments of delight for our customers,<br />\r\nevoking smiles and creating cherished memories with each delicious scoop.<br />\r\nThese values guide us in our pursuit of crafting the finest ice cream experiences. They shape our decisions, inspire our creations, and<br />\r\nreflect our commitment to delivering moments of pure bliss through our beloved frozen treats.</h3>', 'assets/uploads/setting/67431691013238.webp', '2023-07-29 18:04:03', '2023-08-02 18:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `sub_title_ar` text DEFAULT NULL,
  `sub_title_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'الجيلاتو المميز الإيطالي', 'ITALIAN ARTISANAL GELATO', 'الذوق ، في النهاية ، في تقاليدنا ، شيء مقدس. لا يتعلق الأمر بالمغذيات والسعرات الحرارية. يتعلق الأمر بالمشاركة.', 'Taste, in the end, in our own tradition, is something holy. It\'s not about nutrients and calories. It\'s about sharing.', 'assets/uploads/sliders/87651690300120.webp', '2023-07-25 13:48:40', '2023-07-25 13:48:40'),
(2, 'نكهــات الايس كريم الجميلة للعائلة', 'Delicious ice-screems for family', 'هل تحب الفراولة او الموز او الليمون ؟ لا يهم فلدينا تشكيلة واسعة لكل النكهات والاطعمة المختلفة لتحقيق كافة الاذواق', 'Do you like strawberry, banana or lemon? It doesn\'t matter, we have a wide variety of different flavors and foods to satisfy all tastes', 'assets/uploads/sliders/93551690300512.webp', '2023-07-25 13:55:13', '2023-07-25 13:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `traditions`
--

CREATE TABLE `traditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `sub_title_ar` varchar(255) DEFAULT NULL,
  `sub_title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `traditions`
--

INSERT INTO `traditions` (`id`, `image`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/setting/57751690811733.webp', 'التقاليد', 'tradition', 'اوريجينال', 'Original', 'وُلدت إل سوربيتو في الأصل في عام 2013 وربما كانت الشركة الوحيدة في ذلك الوقت التي صنعت الجيلاتي الإيطالي الأصيل (الآيس كريم) في قطر. لا يزال تقاليدنا مستمرة حتى اليوم ، على الرغم من أننا قدمنا مجموعة منتجات جديدة ، وهي الكعك والسندويشات والمخفوقات والعصائر والقهوة. لقد تطورنا إلى كافيتريا على الطراز الإيطالي حقًا ، حيث نقدم الترفيه لعملائنا المحبوبين والمخلصين من الإفطار إلى العشاء مع مجموعة من المنتجات اللذيذة.\'', 'IL Sorbetto was originally born in 2013 as perhaps the only company then to make genuine Italian artisanal gelato (ice cream) in Qatar. Our tradion still continues today, though we have introduced new product range, namely cakes, sandwiches, shakes, juices, and coffee. We have evolved into a truly Italian style cafeteria, entertaining our beloved and loyal customers from breakfast to dinner with a range of delicious products.', '2023-07-31 10:31:04', '2023-07-31 10:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wholesales`
--

CREATE TABLE `wholesales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wholesales`
--

INSERT INTO `wholesales` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/wholesale/89321691000040.webp', '2023-08-02 15:14:00', '2023-08-02 15:14:00'),
(2, 'assets/uploads/wholesale/8461691000079.webp', '2023-08-02 15:14:40', '2023-08-02 15:14:40'),
(3, 'assets/uploads/wholesale/18821691000090.webp', '2023-08-02 15:14:50', '2023-08-02 15:14:50'),
(4, 'assets/uploads/wholesale/35091691000103.webp', '2023-08-02 15:15:03', '2023-08-02 15:15:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flavors`
--
ALTER TABLE `flavors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_ways`
--
ALTER TABLE `order_ways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_texts`
--
ALTER TABLE `site_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traditions`
--
ALTER TABLE `traditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wholesales`
--
ALTER TABLE `wholesales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flavors`
--
ALTER TABLE `flavors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `order_ways`
--
ALTER TABLE `order_ways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_texts`
--
ALTER TABLE `site_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `traditions`
--
ALTER TABLE `traditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wholesales`
--
ALTER TABLE `wholesales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
