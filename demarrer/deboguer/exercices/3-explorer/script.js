const bouton = document.getElementById("bouton");
const message = document.getElementById("message");

bouton.addEventListener("click", function () {
  message.textContent = "Bravo, la page fonctionne désormais !";
});
