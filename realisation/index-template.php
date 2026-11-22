<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($brandName) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="features-section">
        <div class="container">
            <h1 class="section-title"><?= htmlspecialchars($sectionTitle) ?></h1>
            <p class="section-meta">
                <?= (int) $totalFeatures ?> features (<?= (int) $freeFeaturesCount ?> free, <?= (int) $proFeaturesCount ?> plus)
            </p>

            <div class="features-grid">
                <?php foreach ($features as $feature): ?>
                    <?php
                        $isPro = ($feature['is_pro'] === true);
                        $cardClass = $isPro ? 'feature-card is-plus' : 'feature-card';
                        $badgeClass = $isPro ? 'plan-badge badge-plus' : 'plan-badge badge-free';
                        $shortDesc = strlen($feature['description']) > 110
                            ? substr($feature['description'], 0, 110) . '...'
                            : $feature['description'];
                    ?>

                    <article class="<?= htmlspecialchars($cardClass) ?>">
                        <div class="card-top">
                            <span class="feature-icon"><?= htmlspecialchars($feature['icon']) ?></span>
                            <span class="<?= htmlspecialchars($badgeClass) ?>">
                                <?= htmlspecialchars($feature['level']) ?>
                            </span>
                        </div>

                        <h2 class="feature-title"><?= htmlspecialchars($feature['title']) ?></h2>
                        <p class="feature-desc"><?= htmlspecialchars($shortDesc) ?></p>

                        <div class="card-footer-info">
                            <span class="category-label"><?= htmlspecialchars($feature['category']) ?></span>
                            <span class="id-label">#<?= (int) $feature['id'] ?></span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2026 <?= htmlspecialchars($brandName) ?>. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>