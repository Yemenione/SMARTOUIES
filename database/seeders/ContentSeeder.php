<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Services
        $services = [
            [
                'title' => ['en' => 'Web Development', 'fr' => 'Développement Web'],
                'description' => [
                    'en' => 'We utilize Laravel, Vue.js, and React to build responsive, SEO-friendly, and high-performance websites.',
                    'fr' => 'Nous utilisons Laravel, Vue.js et React pour créer des sites web performants, réactifs et optimisés pour le référencement.'
                ],
                'icon' => 'heroicon-o-globe-alt',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => ['en' => 'Mobile Applications', 'fr' => 'Applications Mobiles'],
                'description' => [
                    'en' => 'Native performance with cross-platform efficiency using Flutter and React Native.',
                    'fr' => 'Performance native avec efficacité multiplateforme grâce à Flutter et React Native.'
                ],
                'icon' => 'heroicon-o-device-phone-mobile',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => ['en' => 'Complex Systems', 'fr' => 'Systèmes Complexes'],
                'description' => [
                    'en' => 'Robust enterprise software, CRM, and ERP solutions ensuring scalability and security.',
                    'fr' => 'Logiciels d\'entreprise robustes, solutions CRM et ERP garantissant évolutivité et sécurité.'
                ],
                'icon' => 'heroicon-o-cpu-chip',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => ['en' => 'UI/UX Design', 'fr' => 'Design UI/UX'],
                'description' => [
                    'en' => 'User-centric interfaces that are visually stunning, intuitive, and accessible.',
                    'fr' => 'Interfaces centrées sur l\'utilisateur, visuellement époustouflantes, intuitives et accessibles.'
                ],
                'icon' => 'heroicon-o-paint-brush',
                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            \App\Models\Service::create($service);
        }

        // 2. Team Members
        $team = [
            [
                'name' => 'Michael Foster',
                'role' => ['en' => 'Co-Founder / CTO', 'fr' => 'Co-Fondateur / CTO'],
                'bio' => ['en' => '10+ years of full-stack experience.', 'fr' => 'Plus de 10 ans d\'expérience full-stack.'],
                'image_path' => 'team/michael.jpg', // Placeholder
                'social_links' => ['LinkedIn' => '#', 'Twitter' => '#'],
            ],
            [
                'name' => 'Sarah Smith',
                'role' => ['en' => 'Head of Design', 'fr' => 'Directrice Artistique'],
                'bio' => ['en' => 'Award-winning UI/UX designer.', 'fr' => 'Designer UI/UX primée.'],
                'image_path' => 'team/sarah.jpg', // Placeholder
                'social_links' => ['Dribbble' => '#'],
            ],
            [
                'name' => 'Lindsay Walton',
                'role' => ['en' => 'Lead Developer', 'fr' => 'Développeuse Lead'],
                'bio' => ['en' => 'Specializes in scalable backend architecture.', 'fr' => 'Spécialiste en architecture backend évolutive.'],
                'image_path' => 'team/lindsay.jpg', // Placeholder
                'social_links' => ['GitHub' => '#'],
            ],
        ];

        foreach ($team as $member) {
            \App\Models\TeamMember::create($member);
        }

        // 3. Projects (Portfolio)
        $projects = [
            [
                'title' => ['en' => 'E-Commerce Platform', 'fr' => 'Plateforme E-Commerce'],
                'description' => [
                    'en' => 'A full-featured online store with payment integration, inventory management, and a custom admin dashboard.',
                    'fr' => 'Une boutique en ligne complète avec intégration de paiement, gestion des stocks et un tableau de bord administratif personnalisé.'
                ],
                'category' => 'Web Development',
                'image_path' => 'projects/ecommerce.jpg',
            ],
            [
                'title' => ['en' => 'Healthcare App', 'fr' => 'Application Santé'],
                'description' => [
                    'en' => 'A hipaa-compliant mobile application for patient management and telehealth consultations.',
                    'fr' => 'Une application mobile conforme à la loi HIPAA pour la gestion des patients et les consultations de télésanté.'
                ],
                'category' => 'Mobile App',
                'image_path' => 'projects/healthcare.jpg',
            ],
            [
                'title' => ['en' => 'Logistics ERP', 'fr' => 'ERP Logistique'],
                'description' => [
                    'en' => 'An enterprise resource planning system for tracking shipments, fleet management, and real-time analytics.',
                    'fr' => 'Un système de planification des ressources de l\'entreprise pour le suivi des expéditions, la gestion de la flotte et des analyses en temps réel.'
                ],
                'category' => 'Complex Systems',
                'image_path' => 'projects/erp.jpg',
            ],
        ];

        foreach ($projects as $project) {
            \App\Models\Project::create($project);
        }
    }
}
