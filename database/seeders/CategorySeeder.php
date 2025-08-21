<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Web Development
            ['title' => 'Frontend Development', 'slug' => 'frontend-development', 'parent_category' => 'Web Development', 'description' => 'Covers UI/UX, HTML, CSS, JavaScript, and modern frontend frameworks for building blog web apps.'],
            ['title' => 'Backend Development', 'slug' => 'backend-development', 'parent_category' => 'Web Development', 'description' => 'Focuses on Laravel, Node.js, PHP, and server-side logic for blogs.'],
            ['title' => 'Database Management', 'slug' => 'database-management', 'parent_category' => 'Web Development', 'description' => 'Discusses relational and NoSQL databases for storing and retrieving blog content efficiently.'],
            ['title' => 'Authentication & Security', 'slug' => 'authentication-security', 'parent_category' => 'Web Development', 'description' => 'Ensures safe login, user roles, and data protection in blog applications.'],
            ['title' => 'API Integration', 'slug' => 'api-integration', 'parent_category' => 'Web Development', 'description' => 'Guides on REST and GraphQL APIs for blogs, including third-party integrations.'],
            ['title' => 'Performance & Optimization', 'slug' => 'performance-optimization', 'parent_category' => 'Web Development', 'description' => 'Techniques to improve blog speed, SEO, and scalability.'],

            // Artificial Intelligence
            ['title' => 'Natural Language Processing', 'slug' => 'nlp', 'parent_category' => 'Artificial Intelligence', 'description' => 'NLP techniques for analyzing, summarizing, and generating blog content.'],
            ['title' => 'Recommendation Systems', 'slug' => 'recommendation-systems', 'parent_category' => 'Artificial Intelligence', 'description' => 'Personalized content suggestions for blog readers.'],
            ['title' => 'Chatbots & Virtual Assistants', 'slug' => 'chatbots-assistants', 'parent_category' => 'Artificial Intelligence', 'description' => 'Implementing AI-driven assistants for blog user engagement.'],
            ['title' => 'Content Generation', 'slug' => 'content-generation', 'parent_category' => 'Artificial Intelligence', 'description' => 'Using AI to generate articles, summaries, and blog drafts.'],
            ['title' => 'Image & Video Analysis', 'slug' => 'image-video-analysis', 'parent_category' => 'Artificial Intelligence', 'description' => 'AI for analyzing and auto-tagging multimedia in blogs.'],
            ['title' => 'AI-Powered Analytics', 'slug' => 'ai-analytics', 'parent_category' => 'Artificial Intelligence', 'description' => 'Tracking, predicting, and analyzing blog performance with AI.'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
