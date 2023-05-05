document.addEventListener("DOMContentLoaded", () => {
  const questions = [
    {
      question: "Pregunta 1",
      name: "pregunta1",
      options: ["Muy deacuerdo", "Deacuerdo", "Indiferente", "Desacuerdo"],
      answer: "",
      id: "q1"
    },
    {
      question: "Pregunta 2",
      name: "pregunta2",
      options: ["Muy deacuerdo", "Deacuerdo", "Indiferente", "Desacuerdo"],
      answer: "",
      id: "q2"
    },
    {
      question: "Pregunta 3",
      name: "pregunta3",
      options: ["Muy deacuerdo", "Deacuerdo", "Indiferente", "Desacuerdo"],
      answer: "",
      id: "q3"
    },
    {
      question: "Pregunta 4",
      name: "pregunta4",
      options: ["Muy deacuerdo", "Deacuerdo", "Indiferente", "Desacuerdo"],
      answer: "",
      id: "q4"
    },
    {
      question: "Pregunta 5",
      name: "pregunta5",
      options: ["Muy deacuerdo", "Deacuerdo", "Indiferente", "Desacuerdo"],
      answer: "",
      id: "q5"
    },
    {
      question: "Pregunta 6",
      name: "pregunta6",
      options: ["Muy deacuerdo", "Deacuerdo", "Indiferente", "Desacuerdo"],
      answer: "",
      id: "q6"
    },
    {
      question: "Pregunta 7",
      name: "pregunta7",
      options: ["Muy deacuerdo", "Deacuerdo", "Indiferente", "Desacuerdo"],
      answer: "",
      id: "q7"
    },
    {
      question: "Pregunta 8",
      name: "pregunta8",
      options: ["Muy deacuerdo", "Deacuerdo", "Indiferente", "Desacuerdo"],
      answer: "",
      id: "q8"
    },
    {
        question: "Pregunta 9",
        name: "pregunta9",
        options: ["Muy deacuerdo", "Deacuerdo", "Indiferente", "Desacuerdo"],
        answer: "",
        id: "q9"
      },
      {
        question: "Pregunta 10",
        name: "pregunta10",
        options: ["Muy deacuerdo", "Deacuerdo", "Indiferente", "Desacuerdo"],
        answer: "",
        id: "q10"
      },
      {
        question: "Pregunta 11",
        name: "pregunta11",
        options: ["Muy deacuerdo", "Deacuerdo", "Indiferente", "Desacuerdo"],
        answer: "",
        id: "q11"
      }
  ];
  
  const questionsContainer = document.getElementById("question-container");
  const prevBtn = document.getElementById("prev-btn");
  const nextBtn = document.getElementById("next-btn");
  const sendBtn = document.getElementById("send-btn");
  
  const questionsPerPage = 5;
  let currentQuestion = 0;
  
  function showQuestions() {
    let questionsHTML = "";
    for (let i = currentQuestion; i < currentQuestion + questionsPerPage; i++) {
      const question = questions[i];
      if (!question) break;
      questionsHTML += `
        <div>
          <h3>${question.question}</h3>
          <ul>
            ${question.options
              .map(
                option => `
                  <li>
                    <label>
                      <input type="radio" name="question-${i}" value="${option}" ${
                        option === question.answer ? "checked" : ""
                      }>
                      ${option}
                    </label>
                  </li>
                `
              )
              .join("")}
          </ul>

        </div>
      `;
    }
    
    questionsContainer.innerHTML = ""; // Limpiar el contenido anterior
    questionsContainer.innerHTML = questionsHTML; // Agregar las nuevas preguntas
  }
  
  function prevQuestions() {
    currentQuestion = Math.max(currentQuestion - questionsPerPage, 0);
    showQuestions();
  }
  
  function nextQuestions() {
    currentQuestion = Math.min(currentQuestion + questionsPerPage, questions.length);
    showQuestions();
  }
  
  function saveAnswers() {
    const radios = document.querySelectorAll('input[type="radio"]');
    radios.forEach(radio => {
      const questionId = radio.name.split("-")[1];
      const question = questions.find(q => q.id === questionId); 
      question.answer = radio.checked ? radio.value : ""; 
    });
  }
  
  function sendQuestions() {
    // Obtener las respuestas de las preguntas
    saveAnswers();
  
    // Construir un objeto FormData con las respuestas
    const formData = new FormData();
    questions.forEach(question => {
      formData.append(question.name, question.answer);
    });
  
    // Enviar una solicitud POST al archivo PHP
    fetch('guardar_respuestas.php', {
      method: 'POST',
      body: formData
    })
    .then(response => {
      // Manejar la respuesta del servidor
      console.log(response);
    })
    .catch(error => {
      // Manejar el error de la solicitud
      console.error(error);
    });
  }

  showQuestions();
  const radios = document.querySelectorAll('input[type="radio"]');
  radios.forEach(radio => {
    radio.addEventListener("change", saveAnswers);
  });
  prevBtn.addEventListener("click", prevQuestions);
  nextBtn.addEventListener("click", nextQuestions);
  sendBtn.addEventListener("click", sendQuestions);
});
  