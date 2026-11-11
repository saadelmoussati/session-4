<?php
$articles = [
    [ 
        'id' => 1,
        'titre' => 'Comment structurer ses composants UI avec Atomic Design ?',
        'contenu' => 'Découvrez les concepts fondamentaux de la méthode Atomic Design...'
    ],
    [ 
        'id' => 2, 'titre' => 'Maîtriser les micro-interactions UX',
        'contenu' => 'Une interface belle n\'est pas suffisante...'
    ],
    [ 
        'id' => 3, 'titre' => 'Les bases de la programmation orientée objet en PHP',
        'contenu' => 'Apprenez les principes de la POO en PHP...'
    ]    
];
?>
<ul>
<?php foreach ($articles as $article) : ?>
    <li> <?= $article['titre'] ?> </li>
<?php endforeach; ?>
</ul>
   