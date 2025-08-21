<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            // Frontend Development
            ['title' => 'Building a Responsive Blog Layout with Tailwind CSS', 'description' => 'Learn how to create a mobile-first blog layout using Tailwind CSS utilities.', 'category_id' => 1],
            ['title' => 'Vue vs React for Blog Frontend', 'description' => 'A comparison of Vue and React for building modern blog UIs.', 'category_id' => 1],
            ['title' => 'Enhancing Blog UX with Dark Mode', 'description' => 'Implementing theme switching to improve blog readability.', 'category_id' => 1],

            // Backend Development
            ['title' => 'Laravel Authentication for Blog Users', 'description' => 'Step-by-step guide to implementing authentication in a Laravel blog app.', 'category_id' => 2],
            ['title' => 'Node.js Blog Backend with Express', 'description' => 'Building a RESTful blog API using Node.js and Express.', 'category_id' => 2],
            ['title' => 'Role-Based Access Control in Blogs', 'description' => 'Secure your blog with admin, editor, and reader roles.', 'category_id' => 2],

            // Database Management
            ['title' => 'MySQL Schema Design for Blogs', 'description' => 'Designing an efficient schema for storing posts, comments, and users.', 'category_id' => 3],
            ['title' => 'MongoDB vs MySQL for Blog Applications', 'description' => 'Pros and cons of relational vs NoSQL databases in blogging.', 'category_id' => 3],
            ['title' => 'Optimizing Blog Queries with Indexing', 'description' => 'Techniques to speed up blog queries using indexes.', 'category_id' => 3],

            // Authentication & Security
            ['title' => 'Implementing Social Login in Blogs', 'description' => 'Allow users to log in with Google, Facebook, or GitHub.', 'category_id' => 4],
            ['title' => 'CSRF & XSS Protection in Blogs', 'description' => 'Safeguard your blog web app against common security vulnerabilities.', 'category_id' => 4],
            ['title' => 'JWT Authentication in Blog APIs', 'description' => 'Secure blog APIs using JSON Web Tokens.', 'category_id' => 4],

            // API Integration
            ['title' => 'Integrating a Commenting System with Disqus API', 'description' => 'Add external commenting to your blog.', 'category_id' => 5],
            ['title' => 'Using GraphQL in Blogs for Efficient Data Fetching', 'description' => 'Replace REST with GraphQL for your blog API.', 'category_id' => 5],
            ['title' => 'Adding Newsletter Subscriptions via Mailchimp API', 'description' => 'Grow your blog audience with email automation.', 'category_id' => 5],

            // Performance & Optimization
            ['title' => 'Lazy Loading Images in Blogs', 'description' => 'Improve page load speed with image optimization.', 'category_id' => 6],
            ['title' => 'SEO Optimization for Blogs', 'description' => 'Best practices for making blog content search-engine friendly.', 'category_id' => 6],
            ['title' => 'Caching Blog Pages with Redis', 'description' => 'Use Redis caching to enhance performance.', 'category_id' => 6],

            // NLP
            ['title' => 'Using NLP for Blog Tag Suggestions', 'description' => 'Auto-generate relevant tags for blog posts.', 'category_id' => 7],
            ['title' => 'Sentiment Analysis on Blog Comments', 'description' => 'Detect positive and negative comments automatically.', 'category_id' => 7],
            ['title' => 'Summarizing Blog Articles with NLP', 'description' => 'Create short summaries for long blog posts.', 'category_id' => 7],

            // Recommendation Systems
            ['title' => 'Building a Related Posts Feature with AI', 'description' => 'Show readers personalized related articles.', 'category_id' => 8],
            ['title' => 'Collaborative Filtering for Blog Content', 'description' => 'Learn how to recommend posts based on user behavior.', 'category_id' => 8],
            ['title' => 'Hybrid Recommendation Models for Blogs', 'description' => 'Combine content-based and collaborative filtering.', 'category_id' => 8],

            // Chatbots
            ['title' => 'Integrating ChatGPT as a Blog Assistant', 'description' => 'Help readers with AI-driven Q&A.', 'category_id' => 9],
            ['title' => 'FAQ Chatbot for Blogs', 'description' => 'Build a simple chatbot to answer common blog questions.', 'category_id' => 9],
            ['title' => 'Voice Assistants for Blog Navigation', 'description' => 'Enable voice search and commands for blogs.', 'category_id' => 9],

            // Content Generation
            ['title' => 'AI Tools for Generating Blog Drafts', 'description' => 'Use AI to create first drafts of blog articles.', 'category_id' => 10],
            ['title' => 'Automated Meta Description Generation for Blogs', 'description' => 'Improve SEO with AI-generated descriptions.', 'category_id' => 10],
            ['title' => 'Using GPT Models to Rewrite Old Blog Posts', 'description' => 'Refresh outdated blog posts with AI-powered rewriting.', 'category_id' => 10]
        ];

        shuffle($posts);

        foreach ($posts as $post) {
            $category = Category::where('id', $post['category_id'])->first();
            if ($category) {
                Post::create([
                    'title' => $post['title'],
                    'description' => $post['description'],
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
