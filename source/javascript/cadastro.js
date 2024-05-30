// ----------------- BOLHAS BACKGROUND ----------------- //
document.addEventListener('DOMContentLoaded', () => {
    const bubblesContainer = document.querySelector('.bubbles');
    const numberOfBubbles = 30;

    for (let i = 0; i < numberOfBubbles; i++) {
        const bubble = document.createElement('div');
        bubble.classList.add('bubble');
        bubble.style.width = `${Math.random() * 50 + 10}px`;
        bubble.style.height = bubble.style.width;
        bubble.style.left = `${Math.random() * 100}%`;
        bubble.style.animationDuration = `${Math.random() * 5 + 5}s`;
        bubble.style.animationDelay = `${Math.random() * 5}s`;
        bubblesContainer.appendChild(bubble);
    }
});

// ----------------- REALIZA CONFIRMAÇÃO DA SENHA ----------------- //

document.getElementById("cadastroForm").addEventListener("submit", function(event) {
    
    var senha = document.getElementById("password").value;
    var confirmSenha = document.getElementById("confirm-password").value;
    var igualDiv = document.getElementById("igual");

    if (senha !== confirmSenha) {
        event.preventDefault();
        igualDiv.innerText = "As senhas devem ser iguais";
    }
});