document.getElementById("form-chouette").addEventListener("submit", function(event) {
    event.preventDefault();

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;

    fetch('traitement.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&message=${encodeURIComponent(message)}`
    })
    .then(response => response.text())
    .then(data => {
        const formMessage = document.getElementById("form-message");
        formMessage.innerHTML = data;
        
        // Vérifier si le message contient "success" ou "error"
        if (data.includes("bien") || data.includes("correctamente") || data.includes("successfully")) {
            formMessage.style.color = "#00ff00";
            document.getElementById("form-chouette").reset();
        } else {
            formMessage.style.color = "#ff6b6b";
        }
        
        formMessage.style.marginTop = "1rem";
        formMessage.style.padding = "1rem";
        formMessage.style.borderRadius = "5px";
        formMessage.style.backgroundColor = "rgba(0, 0, 0, 0.2)";
    })
    .catch(error => {
        document.getElementById("form-message").innerHTML = "Une erreur est survenue.";
        document.getElementById("form-message").style.color = "#ff6b6b";
        console.error("Erreur :", error);
    });
});

