<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // menu
    $menu = [
        [
            "type" => "lien",
            "nom" => "DASHBOARD",
            "lien" => "home",
            "icone" => "bi bi-house",
            "smenu" => [],
        ],
        [
            "type" => "lien",
            "nom" => "Utilisateurs",
            "lien" => "#",
            "icone" => "dw dw-group",
            "smenu" => [
                ["titre" => "Liste des Vendeurs", "nom" => "Liste des Vendeurs", "lien" => "vendeurs-liste", "parent" => "Utilisateurs", "groupe" => "TRAITEMENTS", "selected" => "true"],
                ["titre" => "Liste des Utilisateurs", "nom" => "Liste des Utilisateurs", "lien" => "utilisateurs-liste", "parent" => "Utilisateurs", "groupe" => "TRAITEMENTS", "selected" => "true"],
            ],
        ],
        [
            "type" => "lien",
            "nom" => "Categories",
            "lien" => "#",
            "icone" => "dw dw-tag",
            "smenu" => [
                ["titre" => "Ajouter Categorie", "nom" => "Ajouter Categorie", "lien" => "categorie-add", "parent" => "Categorie", "groupe" => "TRAITEMENTS", "selected" => "true"],
            ],
        ],
        [
            "type" => "lien",
            "nom" => "Calendar",
            "lien" => "calendar",
            "icone" => "bi bi-calendar4-week",
            "smenu" => [],
        ],

        [
            "type" => "lien",
            "nom" => "Articles",
            "lien" => "#",
            "icone" => "dw dw-shopping-cart1",
            "smenu" => [
                ["titre" => "Liste des Articles", "nom" => "Liste des Articles", "lien" => "articles-liste", "parent" => "Articles", "groupe" => "TRAITEMENTS", "selected" => "true"],
                ["titre" => "Ajouter Article", "nom" => "Ajouter Article", "lien" => "articles-add", "parent" => "Articles", "groupe" => "TRAITEMENTS", "selected" => "true"],
                
            ],
        ],
        [
            "type" => "lien",
            "nom" => "Commandes",
            "lien" => "#",
            "icone" => "dw dw-shopping-basket-1",
            "smenu" => [
                ["titre" => "Gestion des Commandes", "nom" => "Gestion des Commandes", "lien" => "manage-order", "parent" => "Commandes", "groupe" => "TRAITEMENTS", "selected" => "true"],
            ],
        ],
        [
            "type" => "lien",
            "nom" => "Stocks",
            "lien" => "#",
            "icone" => "bi bi-pie-chart",
            "smenu" => [
                ["titre" => "Historique", "nom" => "Historique", "lien" => "stocks", "parent" => "Stocks", "groupe" => "PARAMETRAGE", "selected" => "true"],

            ],
        ],
        [
            "type" => "lien",
            "nom" => "Sitemap",
            "lien" => "#",
            "icone" => "file-earmark-zip-fill",
            "smenu" => [],
        ],
        [
            "type" => "lien",
            "nom" => "Invoice",
            "lien" => "#",
            "icone" => "bi bi-receipt-cutoff",
            "smenu" => [],
        ],
        [
            "type" => "divider",
            "nom" => "Paramettre",
            "lien" => "#",
            "icone" => "",
            "smenu" => [],
        ],
        [
            "type" => "lien",
            "nom" => "Mon Compte",
            "lien" => "#",
            "icone" => "dw dw-settings2",
            "smenu" => [],
        ],
    ];
    echo json_encode($menu, JSON_UNESCAPED_UNICODE);
    // var_dump($jsmenu);
    ?>
</body>

</html>