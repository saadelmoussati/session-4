<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio — Projets</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="site-header">
        <div class="container">
            <h1>Mon Portfolio</h1>
            <p>Découvrez mes projets de développement web, JavaScript et application bureau.</p>

            <div class="stats">
                <div class="stat-box">
                    <span class="stat-number"><?= $totalProjects ?></span>
                    <span class="stat-label">Projets</span>
                </div>
                <div class="stat-box">
                    <span class="stat-number"><?= $completedProjects ?></span>
                    <span class="stat-label">Terminés</span>
                </div>
                <div class="stat-box">
                    <span class="stat-number"><?= $inProgressProjects ?></span>
                    <span class="stat-label">En cours</span>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        <section class="projects-section">
            <h2>Mes Projets</h2>

            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <?php
                        $isCompleted = ($project['status'] === 'Terminé');
                        $statusClass = $isCompleted ? 'status-done' : 'status-progress';
                        $categoryClass = 'cat-' . strtolower($project['category']);
                    ?>

                    <article class="project-card">
                        <div class="card-media">
                            <img
                                src="<?= htmlspecialchars($project['image']) ?>"
                                alt="<?= htmlspecialchars($project['title']) ?>"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                            >
                            <div class="image-fallback" style="display: none;">
                                <span><?= htmlspecialchars($project['category']) ?></span>
                            </div>
                            <span class="badge category-badge <?= htmlspecialchars($categoryClass) ?>">
                                <?= htmlspecialchars($project['category']) ?>
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="card-top">
                                <h3 class="project-title"><?= htmlspecialchars($project['title']) ?></h3>
                                <span class="badge status-badge <?= htmlspecialchars($statusClass) ?>">
                                    <?= htmlspecialchars($project['status']) ?>
                                </span>
                            </div>

                            <p class="project-description">
                                <?= htmlspecialchars($project['description']) ?>
                            </p>

                            <ul class="tech-list">
                                <?php foreach ($project['technologies'] as $tech): ?>
                                    <li class="tech-tag"><?= htmlspecialchars($tech) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

</body>
</html>