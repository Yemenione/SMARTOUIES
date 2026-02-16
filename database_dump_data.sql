-- Database Dump for SMARTOUIES
-- Generated at 2026-02-16 10:20:06

SET FOREIGN_KEY_CHECKS=0;

-- Table structure for `users`
DROP TABLE IF EXISTS `users`;
-- Dumping data for `users`
INSERT INTO `users` VALUES (1, 'Admin', 'admin@smartouies.com', NULL, '$2y$12$EDoWrxtoZzxRbCXN2D4EpeNnuTqj7JaDQyIEuestTDgygS6kI8c3e', 'qL9JbePPysn7Pal9M1IfC1tWpakbpatwOFW2gOxYVg2UjdN0rwzBoiDnzHo9', '2026-02-16 00:24:35', '2026-02-16 00:24:35');

-- Table structure for `password_reset_tokens`
DROP TABLE IF EXISTS `password_reset_tokens`;
-- Table structure for `sessions`
DROP TABLE IF EXISTS `sessions`;
-- Dumping data for `sessions`
INSERT INTO `sessions` VALUES ('1MDshu3cLKwcpLaD2XSim0eR7acuG8OhiEl2wAN0', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSFBoaFYzaWxRRURFNVIyZmJBNnBLVFIyc3FINk5IbmUwOExpazNySCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToyOntzOjM6InVybCI7czoyNzoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2FkbWluIjtzOjU6InJvdXRlIjtzOjMwOiJmaWxhbWVudC5hZG1pbi5wYWdlcy5kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2NDoiMWYyZDA1MGY0YzY4OWE5NWExY2QzNjExYmJiNjI3YTcyMTk3NzhlNGVmZjk2MzhjMjFmOTg1N2YzZjc4ZGY3MyI7fQ==', 1771236441);

-- Table structure for `cache`
DROP TABLE IF EXISTS `cache`;
-- Table structure for `cache_locks`
DROP TABLE IF EXISTS `cache_locks`;
-- Table structure for `jobs`
DROP TABLE IF EXISTS `jobs`;
-- Table structure for `job_batches`
DROP TABLE IF EXISTS `job_batches`;
-- Table structure for `failed_jobs`
DROP TABLE IF EXISTS `failed_jobs`;
-- Table structure for `projects`
DROP TABLE IF EXISTS `projects`;
-- Dumping data for `projects`
INSERT INTO `projects` VALUES (1, '{\"en\":\"E-Commerce Platform\",\"fr\":\"Plateforme E-Commerce\"}', '{\"en\":\"A full-featured online store with payment integration, inventory management, and a custom admin dashboard.\",\"fr\":\"Une boutique en ligne complète avec intégration de paiement, gestion des stocks et un tableau de bord administratif personnalisé.\"}', 'projects/ecommerce.jpg', 'Web Development', '2026-02-16 01:15:48', '2026-02-16 01:15:48');
INSERT INTO `projects` VALUES (2, '{\"en\":\"Healthcare App\",\"fr\":\"Application Santé\"}', '{\"en\":\"A hipaa-compliant mobile application for patient management and telehealth consultations.\",\"fr\":\"Une application mobile conforme à la loi HIPAA pour la gestion des patients et les consultations de télésanté.\"}', 'projects/healthcare.jpg', 'Mobile App', '2026-02-16 01:15:48', '2026-02-16 01:15:48');
INSERT INTO `projects` VALUES (3, '{\"en\":\"Logistics ERP\",\"fr\":\"ERP Logistique\"}', '{\"en\":\"An enterprise resource planning system for tracking shipments, fleet management, and real-time analytics.\",\"fr\":\"Un système de planification des ressources de l\'entreprise pour le suivi des expéditions, la gestion de la flotte et des analyses en temps réel.\"}', 'projects/erp.jpg', 'Complex Systems', '2026-02-16 01:15:48', '2026-02-16 01:15:48');

-- Table structure for `services`
DROP TABLE IF EXISTS `services`;
-- Dumping data for `services`
INSERT INTO `services` VALUES (1, '{\"en\":\"Web Development\",\"fr\":\"Développement Web\"}', '{\"en\":\"We utilize Laravel, Vue.js, and React to build responsive, SEO-friendly, and high-performance websites.\",\"fr\":\"Nous utilisons Laravel, Vue.js et React pour créer des sites web performants, réactifs et optimisés pour le référencement.\"}', 'heroicon-o-globe-alt', 1, 1, '2026-02-16 01:01:42', '2026-02-16 01:01:42');
INSERT INTO `services` VALUES (2, '{\"en\":\"Mobile Applications\",\"fr\":\"Applications Mobiles\"}', '{\"en\":\"Native performance with cross-platform efficiency using Flutter and React Native.\",\"fr\":\"Performance native avec efficacité multiplateforme grâce à Flutter et React Native.\"}', 'heroicon-o-device-phone-mobile', 2, 1, '2026-02-16 01:01:42', '2026-02-16 01:01:42');
INSERT INTO `services` VALUES (3, '{\"en\":\"Complex Systems\",\"fr\":\"Systèmes Complexes\"}', '{\"en\":\"Robust enterprise software, CRM, and ERP solutions ensuring scalability and security.\",\"fr\":\"Logiciels d\'entreprise robustes, solutions CRM et ERP garantissant évolutivité et sécurité.\"}', 'heroicon-o-cpu-chip', 3, 1, '2026-02-16 01:01:42', '2026-02-16 01:01:42');
INSERT INTO `services` VALUES (4, '{\"en\":\"UI/UX Design\",\"fr\":\"Design UI/UX\"}', '{\"en\":\"User-centric interfaces that are visually stunning, intuitive, and accessible.\",\"fr\":\"Interfaces centrées sur l\'utilisateur, visuellement époustouflantes, intuitives et accessibles.\"}', 'heroicon-o-paint-brush', 4, 1, '2026-02-16 01:01:42', '2026-02-16 01:01:42');
INSERT INTO `services` VALUES (5, '{\"en\":\"Web Development\",\"fr\":\"Développement Web\"}', '{\"en\":\"We utilize Laravel, Vue.js, and React to build responsive, SEO-friendly, and high-performance websites.\",\"fr\":\"Nous utilisons Laravel, Vue.js et React pour créer des sites web performants, réactifs et optimisés pour le référencement.\"}', 'heroicon-o-globe-alt', 1, 1, '2026-02-16 01:15:48', '2026-02-16 01:15:48');
INSERT INTO `services` VALUES (6, '{\"en\":\"Mobile Applications\",\"fr\":\"Applications Mobiles\"}', '{\"en\":\"Native performance with cross-platform efficiency using Flutter and React Native.\",\"fr\":\"Performance native avec efficacité multiplateforme grâce à Flutter et React Native.\"}', 'heroicon-o-device-phone-mobile', 2, 1, '2026-02-16 01:15:48', '2026-02-16 01:15:48');
INSERT INTO `services` VALUES (7, '{\"en\":\"Complex Systems\",\"fr\":\"Systèmes Complexes\"}', '{\"en\":\"Robust enterprise software, CRM, and ERP solutions ensuring scalability and security.\",\"fr\":\"Logiciels d\'entreprise robustes, solutions CRM et ERP garantissant évolutivité et sécurité.\"}', 'heroicon-o-cpu-chip', 3, 1, '2026-02-16 01:15:48', '2026-02-16 01:15:48');
INSERT INTO `services` VALUES (8, '{\"en\":\"UI/UX Design\",\"fr\":\"Design UI/UX\"}', '{\"en\":\"User-centric interfaces that are visually stunning, intuitive, and accessible.\",\"fr\":\"Interfaces centrées sur l\'utilisateur, visuellement époustouflantes, intuitives et accessibles.\"}', 'heroicon-o-paint-brush', 4, 1, '2026-02-16 01:15:48', '2026-02-16 01:15:48');

-- Table structure for `team_members`
DROP TABLE IF EXISTS `team_members`;
-- Dumping data for `team_members`
INSERT INTO `team_members` VALUES (1, 'Michael Foster', '{\"en\":\"Co-Founder / CTO\",\"fr\":\"Co-Fondateur / CTO\"}', '{\"en\":\"10+ years of full-stack experience.\",\"fr\":\"Plus de 10 ans d\'expérience full-stack.\"}', 'team/michael.jpg', '{\"LinkedIn\":\"#\",\"Twitter\":\"#\"}', '2026-02-16 01:01:42', '2026-02-16 01:01:42');
INSERT INTO `team_members` VALUES (2, 'Sarah Smith', '{\"en\":\"Head of Design\",\"fr\":\"Directrice Artistique\"}', '{\"en\":\"Award-winning UI/UX designer.\",\"fr\":\"Designer UI/UX primée.\"}', 'team/sarah.jpg', '{\"Dribbble\":\"#\"}', '2026-02-16 01:01:42', '2026-02-16 01:01:42');
INSERT INTO `team_members` VALUES (3, 'Lindsay Walton', '{\"en\":\"Lead Developer\",\"fr\":\"Développeuse Lead\"}', '{\"en\":\"Specializes in scalable backend architecture.\",\"fr\":\"Spécialiste en architecture backend évolutive.\"}', 'team/lindsay.jpg', '{\"GitHub\":\"#\"}', '2026-02-16 01:01:42', '2026-02-16 01:01:42');
INSERT INTO `team_members` VALUES (4, 'Michael Foster', '{\"en\":\"Co-Founder / CTO\",\"fr\":\"Co-Fondateur / CTO\"}', '{\"en\":\"10+ years of full-stack experience.\",\"fr\":\"Plus de 10 ans d\'expérience full-stack.\"}', 'team/michael.jpg', '{\"LinkedIn\":\"#\",\"Twitter\":\"#\"}', '2026-02-16 01:15:48', '2026-02-16 01:15:48');
INSERT INTO `team_members` VALUES (5, 'Sarah Smith', '{\"en\":\"Head of Design\",\"fr\":\"Directrice Artistique\"}', '{\"en\":\"Award-winning UI/UX designer.\",\"fr\":\"Designer UI/UX primée.\"}', 'team/sarah.jpg', '{\"Dribbble\":\"#\"}', '2026-02-16 01:15:48', '2026-02-16 01:15:48');
INSERT INTO `team_members` VALUES (6, 'Lindsay Walton', '{\"en\":\"Lead Developer\",\"fr\":\"Développeuse Lead\"}', '{\"en\":\"Specializes in scalable backend architecture.\",\"fr\":\"Spécialiste en architecture backend évolutive.\"}', 'team/lindsay.jpg', '{\"GitHub\":\"#\"}', '2026-02-16 01:15:48', '2026-02-16 01:15:48');

-- Table structure for `contact_messages`
DROP TABLE IF EXISTS `contact_messages`;
SET FOREIGN_KEY_CHECKS=1;
