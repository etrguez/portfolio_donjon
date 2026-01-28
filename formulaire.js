document.getElementById("form-chouette").addEventListener("submit", function(event) {
    event.preventDefault();  // Empêcher le rechargement de la page

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;

    fetch('traitement.php', {  // Assure-toi que ce script côté serveur existe
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&message=${encodeURIComponent(message)}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("form-message").innerHTML = data;
    })
    .catch(error => {
        document.getElementById("form-message").innerHTML = "Une erreur est survenue.";
        console.error("Erreur :", error);
    });
});
