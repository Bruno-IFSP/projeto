// Defina o tempo limite em segundos
const tempoLimiteSegundos = 300; // 5 minutos

// Registre o tempo inicial
let tempoInicial = Date.now();

// Atualize o contador de tempo
function atualizarTempoRestante() {
    const tempoAtual = Date.now();
    const tempoPassado = (tempoAtual - tempoInicial) / 1000; // Converta para segundos

    const tempoRestante = tempoLimiteSegundos - tempoPassado;
    if (tempoRestante <= 0) {
        // O tempo acabou, tome a ação apropriada (por exemplo, envie automaticamente o formulário)
        simuladoForm.submit();
        clearInterval(intervalId); // Limpa o intervalo para parar de contar o tempo
    } else {
        // Exiba o tempo restante na página
        const minutos = Math.floor(tempoRestante / 60);
        const segundos = Math.floor(tempoRestante % 60);
        resultado.innerHTML = `Tempo Restante: ${minutos}m ${segundos}s`;
    }
}

// Atualize o contador de tempo a cada segundo
const intervalId = setInterval(atualizarTempoRestante, 1000);


const questions = [
    {
        question: "Quanto é 2+2?",
        options: ["1", "5", "4", "6"],
        correctAnswer: "4"
    },
    {
        question: "Quantos lados tem um triângulo?",
        options: ["3", "4", "5", "6"],
        correctAnswer: "3"
    },
    {
        question: "Qunato é 10 * 5?",
        options: ["50", "500", "55", "550"],
        correctAnswer: "50"
    },
    {
        question: "Qual é o menor número primo?",
        options: ["2", "3", "-2", "-3"],
        correctAnswer: "2"
    },
    {
        question: "Qual a raiz de 144'?",
        options: ["14", "12", "24", "22"],
        correctAnswer: "12"
    }
];

const simuladoForm = document.getElementById("simulado-form");
const questionsContainer = document.getElementById("questions-container");
const resultado = document.getElementById("resultado");

function loadQuestions() {
    questions.forEach((q, index) => {
        const questionDiv = document.createElement("div");
        questionDiv.classList.add("question");
        questionDiv.innerHTML = `
            <p>${index + 1}. ${q.question}</p>
            <ul>
                ${q.options.map(option => `
                    <li>
                        <label>
                            <input type="radio" name="question${index}" value="${option}">
                            ${option}
                        </label>
                    </li>`).join('')}
            </ul>
        `;
        questionsContainer.appendChild(questionDiv);
    });
}

function calculateScore() {
    let score = 0;
    questions.forEach((q, index) => {
        const selectedOption = document.querySelector(`input[name="question${index}"]:checked`);
        if (selectedOption && selectedOption.value === q.correctAnswer) {
            score++;
        }
    });
    return score;
}

simuladoForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const score = calculateScore();
    resultado.innerHTML = `Você acertou ${score} de ${questions.length} questões.`;
    clearInterval(intervalId); // Limpa o intervalo do contador de tempo
    simuladoForm.style.display = "none"; // Oculta o formulário
});

loadQuestions();
