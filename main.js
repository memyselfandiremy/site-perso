$(function() {
    // On initialise la latitude et la longitude de dijon (centre de la carte)
    var lat = 47.3215806;
    var lon = 5.0414701;
    var macarte = null;
    var villes = {
        "Marie-Ange REMY": { "lat": 47.3215806, "lon": 5.0414701 },
    };
    // Fonction d'initialisation de la carte
    function initMap() {
        // Nous définissons le dossier qui contiendra les marqueurs
        var iconBase = 'https://marieanger.promo-27.codeur.online/site-perso/images/';
        // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
        macarte = L.map('map').setView([lat, lon], 11);
        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            // Il est toujours bien de laisser le lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(macarte);

        // Nous parcourons la liste des villes
        for (ville in villes) { // Nous définissons l'icône à utiliser pour le marqueur, sa taille affichée (iconSize), sa position (iconAnchor) et le décalage de son ancrage (popupAnchor)
            var myIcon = L.icon({
                iconUrl: iconBase + "pointer.svg",
                iconSize: [50, 50],
                iconAnchor: [25, 50],
                popupAnchor: [-3, -76],
            });
            var marker = L.marker([villes[ville].lat, villes[ville].lon], { icon: myIcon }).addTo(macarte);

            marker.bindPopup(ville);
        }

    }
    window.onload = function() {
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();
    };


    //AJAX

    var errorMsg = document.getElementById('errorMsg');

    // je déclare ma fonction au submit
    const formValid = document.getElementById('btn');
    formValid.addEventListener('click', function(e) {

        e.preventDefault();

        const nom = document.getElementById('nom').value;
        const email = document.getElementById('email').value;
        const objet = document.getElementById('objet').value;
        const message = document.getElementById('message').value;

        $.ajax({
            type: "POST",
            url: "traitement.php",
            dataType: "json",
            data: {
                nom: nom,
                objet: objet,
                email: email,
                message: message
            },
            success: function(data) {
                if (data.code == "200") {
                    var successMsg = document.getElementById('oksuccess');
                    //alert("Success: " + data.msg);
                    if (errorMsg.length != 0) {
                        errorMsg.innerHTML = "";
                    }
                    successMsg.innerHTML = data.msgok;

                } else {
                    //alert('Error: ' + data.msg);

                    errorMsg.innerHTML = data.msg;
                    errorMsg.style.display = "block";
                }
            },
            error: function(e) {}
        });
    });

})