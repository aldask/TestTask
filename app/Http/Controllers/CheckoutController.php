<?php

namespace App\Http\Controllers;

class CheckoutController extends Controller
{
    public function __invoke()
    {
        $products = [
            [
                'id' => 1,
                'slug' => '1-month-plan', // Used for translations
                'order_route' => url(sprintf('order/%s', '1-month-plan')),
                'pricing' => [
                    'original_price' => 129.99,
                    'price' => 29.99,
                    'original_daily_price' => 4.33,
                    'daily_price' => 0.99,
                ],
                'default' => false,
            ],
            [
                'id' => 2,
                'slug' => '3-month-plan', // Used for translations
                'order_route' => url(sprintf('order/%s', '3-month-plan')),
                'pricing' => [
                    'original_price' => 179.97,
                    'price' => 39.97,
                    'original_daily_price' => 1.99,
                    'daily_price' => 0.44,
                ],
                'default' => true,
            ],
            [
                'id' => 3,
                'slug' => '6-month-plan', // Used for translations
                'order_route' => url(sprintf('order/%s', '6-month-plan')),
                'pricing' => [
                    'original_price' => 165.97,
                    'price' => 66.97,
                    'original_daily_price' => 0.92,
                    'daily_price' => 0.37,
                ],
                'default' => false,
            ],
        ];
        $routes = [
            'default_order_route' => collect($products)->where('default', true)->first()['order_route'],
            'privacy_policy' => url('privacy-policy'),
        ];
        $reviews = [
            [
                'name' => 'Dana',
                'age' => 37,
                'handle' => '@dana90s',
                'description' => 'I was skeptical, but this ADHD management hypnotherapy program helped me address underlying issues like low dopamine levels, stress and anxiety that were triggering my ADHD. What I love most about this plan is that it takes me only 10-15 minutes, and I feel like I\'m becoming more and more focused EVERY SINGLE DAY with no struggle.',
                'img' => 'https://media.istockphoto.com/id/1317804578/photo/one-businesswoman-headshot-smiling-at-the-camera.jpg?s=612x612&w=0&k=20&c=EqR2Lffp4tkIYzpqYh8aYIPRr-gmZliRHRxcQC5yylY=',
                'alt' => 'profile pic'
            ],
            [
                'name' => 'Ashley',
                'age' => 32,
                'handle' => '@adh990',
                'description' => 'ADHD is hard. Not having those patterns that are easily followed always create chaos in your life. This was my life and being always late was my worst problem I think. That\'s why I decided to try Happyo. It was easy to commit and now I\'m getting better and better every week!!',
                'img' => 'https://media.istockphoto.com/id/1437816897/photo/business-woman-manager-or-human-resources-portrait-for-career-success-company-we-are-hiring.jpg?s=612x612&w=0&k=20&c=tyLvtzutRh22j9GqSGI33Z4HpIwv9vL_MZw_xOE19NQ=',
                'alt' => 'profile pic'
            ],
            [
                'name' => 'Jim',
                'age' => 29,
                'handle' => '@Rollo_jims8544',
                'description' => 'Wish I had known about hypnotherapy earlier. I\'ve tried a lot of anti-ADHD programs, but nothing worked for me, because I needed to put in a lot of effort to see a result. But instead of putting in effort, I procrastinated. Happyo is different and hypnotherapy is actually a game-changer for people with ADHD because it\'s simply effortless.',
                'img' => 'https://images.unsplash.com/photo-1633332755192-727a05c4013d?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D',
                'alt' => 'profile pic'
            ],
        ];

        $steps = [
            ["number" => 1, "text" => "Find a quiet place where you can relax"],
            ["number" => 2, "text" => "Access the hypnotherapy recording in our member area"],
            ["number" => 3, "text" => "Listen to one 15-minute session per day"],
            ["number" => 4, "text" => "Enjoy the first results in one week"],
        ];

        return view('checkout', compact('products', 'routes', "steps", "reviews"));
    }
}