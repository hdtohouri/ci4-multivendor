const initMenu = (groupe = "_", page = "_") => {
    // Vider le menu existant
    $("#accordion-menu").html("");

    // Charger le menu depuis le localStorage
    const storageMenu = "userMenu"; // Nom de la clé pour localStorage
    let menu = JSON.parse(localStorage.getItem(storageMenu)) || [];

    // Vérification des données : s'assurer que `menu` est un tableau
    if (!Array.isArray(menu)) {
        console.error("Le menu stocké n'est pas valide.");
        menu = [];
    }

    let mn = "";

    // Fonction pour générer un lien de sous-menu
    const generateLink = (link, isActive) => `
        <li>
            <a class="dropdown-item${isActive}" href="${link.lien || "#"}">
                <span class="micon bi bi-${link.icone || "chevron-compact-right"}"></span>
                ${link.nom || "Sans nom"}
            </a>
        </li>
    `;

    // Générer les items du menu
    menu.forEach((smenu) => {
        let active = page === smenu.nom ? " active" : "";
        let show = groupe === smenu.nom ? " show" : "";

        if (smenu.type === "lien") {
            if (smenu.smenu && smenu.smenu.length) {
                // Groupe avec sous-menus
                let ctn = smenu.smenu.map((link) => generateLink(link, page === link.nom ? " active" : "")).join("");

                mn += `
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle${show}">
                            <span class="micon bi bi-${smenu.icone || "bar-chart-fill"}"></span>
                            <span class="mtext">${smenu.nom || "Sans nom"}</span>
                        </a>
                        <ul class="submenu">
                            ${ctn}
                        </ul>
                    </li>
                `;
            } else {
                // Lien unique
                mn += `
                    <li>
                        <a href="${smenu.lien || "#"}" class="dropdown-toggle no-arrow${active}">
                            <span class="micon bi bi-${smenu.icone || "bar-chart-fill"}"></span>
                            <span class="mtext">${smenu.nom || "Sans nom"}</span>
                        </a>
                    </li>
                `;
            }
        } else {
            // Diviseur ou catégorie
            mn += `<li class="side-item side-item-category">${smenu.nom || "Sans nom"}</li>`;
        }
    });

    // Injecter le menu dans la vue
    $("#accordion-menu").html(mn);

    // Mettre à jour les informations utilisateur si disponibles
    const user = JSON.parse(localStorage.getItem("userKey")) || { nom: "Utilisateur", email: "exemple@mail.com" };
    $(".account-name").html(user.nom);
    $(".account-description").html(user.email);
};
