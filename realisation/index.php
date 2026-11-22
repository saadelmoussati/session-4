<?php
$brandName = 'Daily Habit Tracker';
$sectionTitle = 'Why Choose Daily Habit Tracker?';

$features = [
    [
        'id' => 1,
        'title' => 'Daily Tracking',
        'description' => 'Check off your habits every day and visualize your progress at a glance.',
        'category' => 'Tracking',
        'level' => 'Essential',
        'icon' => '✓',
        'is_pro' => false
    ],
    [
        'id' => 2,
        'title' => 'Stats & Streaks',
        'description' => 'Analyze your success streaks so you never break the chain.',
        'category' => 'Analytics',
        'level' => 'Essential',
        'icon' => '🔥',
        'is_pro' => false
    ],
    [
        'id' => 3,
        'title' => '100% Customizable',
        'description' => 'Create tailored habits designed to fit your unique lifestyle and goals.',
        'category' => 'Customization',
        'level' => 'Essential',
        'icon' => '⚙',
        'is_pro' => false
    ],
    [
        'id' => 4,
        'title' => 'Smart Reminders',
        'description' => 'Never forget a habit with custom push notifications and alerts.',
        'category' => 'Notifications',
        'level' => 'Plus',
        'icon' => '⏰',
        'is_pro' => true
    ],
    [
        'id' => 5,
        'title' => 'Weekly Insights',
        'description' => 'Get detailed reports and progress charts on your consistency.',
        'category' => 'Analytics',
        'level' => 'Plus',
        'icon' => '📊',
        'is_pro' => true
    ],
    [
        'id' => 6,
        'title' => 'Milestones & Rewards',
        'description' => 'Earn achievements and celebrate your habit-building milestones.',
        'category' => 'Motivation',
        'level' => 'Essential',
        'icon' => '🏆',
        'is_pro' => false
    ]
];

$totalFeatures = count($features);
$proFeaturesCount = 0;

foreach ($features as $feature) {
    if ($feature['is_pro'] === true) {
        $proFeaturesCount++;
    }
}

$freeFeaturesCount = $totalFeatures - $proFeaturesCount;

require 'index-template.php';