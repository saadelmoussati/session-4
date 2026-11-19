<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Todo List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/lucide@latest"></script>
<body>

    <div class="container">
        
        <header class="app-header">
            <div class="logo-box">
                <i data-lucide="check-square"></i>
            </div>
            <div class="header-text">
                <h1>Ma Todo List</h1>
                <p>Gérez et suivez vos tâches quotidiennes</p>
            </div>
        </header>

        <section class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon icon-total">
                    <i data-lucide="layers"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Total</span>
                    <strong class="stat-value"><?= $totalTaches ?></strong>
                    <span class="stat-unit">tâches</span>
                </div>
            </div>

            <div class="stat-card stat-card-done">
                <div class="stat-icon icon-done">
                    <i data-lucide="check"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Terminées</span>
                    <strong class="stat-value"><?= $tachesTerminees ?></strong>
                    <span class="stat-unit">tâches</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon icon-pending">
                    <i data-lucide="circle"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Non terminées</span>
                    <strong class="stat-value"><?= $tachesRestantes ?></strong>
                    <span class="stat-unit">tâches</span>
                </div>
            </div>
        </section>

        <section class="tasks-section">
            <h2 class="section-title">
                <i data-lucide="list"></i>
                Liste des tâches
            </h2>

            <div class="tasks-list">
                <?php foreach ($taches as $tache): ?>
                    <?php 
                    $descriptionCourte = strlen($tache['description']) > 80 
    ? substr($tache['description'], 0, 80) . '...' 
    : $tache['description'];
                    ?>
                    
                    <article class="task-card <?= $etatClasse ?>">
                        <div class="task-checkbox">
                            <?php if ($tache['terminee']): ?>
                                <i data-lucide="check"></i>
                            <?php endif; ?>
                        </div>

                        <div class="task-content">
                            <h3 class="task-title"><?= htmlspecialchars($tache['titre']) ?></h3>
                            <p class="task-desc"><?= htmlspecialchars($descriptionCourte) ?></p>
                        </div>

                        <div class="task-meta">
                            <span class="badge-priorite <?= $prioriteClasse ?>">
                                <?= htmlspecialchars($tache['priorite']) ?>
                            </span>

                            <span class="badge-etat">
                                <?= $tache['terminee'] ? 'Terminée' : 'À faire' ?>
                            </span>

                            <div class="task-date">
                                <i data-lucide="calendar"></i>
                                <span><?= date('d/m/Y', strtotime($tache['date_limite'])) ?></span>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>