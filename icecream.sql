-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 08:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
(1, 'Darius Wilcox', 'xypiby@mailinator.com', '+1 (136) 521-7881', 'Do sequi et et fuga', '2023-07-21 00:12:40', '2023-07-21 00:12:40');

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
(25, '2023_07_25_153555_create_sliders_table', 6);

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
(1, 3, 'assets/uploads/products/60151689858629.webp', 'فراولة', 'strawberry', 'الجيلاتي الإيطالي الحرفي (الآيس كريم) والشراب باستخدام أجود المكونات في حالته', 'Italian artisanal gelato (ice cream) and sorbets using the finest ingredients in its state', 50.00, 14.00, 9.00, '2023-07-20 10:10:29', '2023-07-25 15:56:26');

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
(4, 'assets/uploads/reviews/73671689867835.webp', 'مايكل براون', 'Michel Brown', 'الجيلاتي من ilsorbetto في قطر لذيذ! أوصي بشكل خاص بنكهة النوتيلا. إنه أمر لا بد منه.', 'The gelato from ilsorbetto in Qatar is delicious! I especially recommend their Nutella flavor. It\'s a must-try', 'تعليق فيسبوك', 'Facebook Comment', '2023-07-20 12:43:55', '2023-07-20 12:43:55');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
