
  
const quizContainer = document.getElementById('quiz');
const resultsContainer = document.getElementById('results');
const submitButton = document.getElementById('submit');



var retry1 = document.getElementById("retry");
retry1.style.display = 'none';

const myQuestions = [
  {
    question: "Quelle est ma date de naissance ?",
    answers: {
      a: "24 Avril 2019",
      b: "26 Avril 2019",
      c: "24 Mai 2019",
      d: "26 Mai 2019"
    },
    correctAnswer: "b"
  },
  {
    question: "Quelle est mon poids de naissance ?",
    answers: {
      a: "3,174 kg",
      b: "3,471 kg",
      c: "3,417 kg",
      d: "3,741 kg"
    },
    correctAnswer: "a"
  },
  {
    question: "Quelle est ma taille de naissance ?",
    answers: {
      a: "50 cm",
      b: "51 cm",
      c: "52 cm",
      d: "53 cm"
    },
    correctAnswer: "c"
  },
  {
    question: "Quelle est l'heure de ma naissance ?",
    answers: {
      a: "00h21",
      b: "04h31",
      c: "12h17",
      d: "17h32"
    },
    correctAnswer: "b"
  },
  {
    question: "Dans quelle ville je suis née?",
    answers: {
      a: "Grenoble",
      b: "Valladolid",
      c: "Brisbane",
      d: "Gerzat"
    },
    correctAnswer: "c"
  },
  {
    question: "Où suis je parti en vacance pour la premiere fois ? ",
    answers: {
      a: "La Bourboule",
      b: "Sydney",
      c: "Ibiza",
      d: "Darwin"
    },
    correctAnswer: "d"
  },
  {
    question: "A quel age ai je commencé a marcher à 4 pattes ?",
    answers: {
      a: "4 mois",
      b: "6 mois",
      c: "7 mois",
      d: "9 mois"
    },
    correctAnswer: "d"
  },
  {
    question: "Quelle est ma compote preferée ?",
    answers: {
      a: "pomme",
      b: "poire",
      c: "mangue",
      d: "banane"
    },
    correctAnswer: "c"
  },
  {
    question: "Quelle est ma peluche preferée?",
    answers: {
      a: "Mon Pinguin",
      b: "Mon Ver luisant",
      c: "Mon Singe",
      d: "Mon Lapin"
    },
    correctAnswer: "d"
  },
  {
    question: "A quel age ai je marché pour la première fois?",
    answers: {
      a: "26 Mai",
      b: "29 Mai",
      c: "13 Avril",
      d: "17 Avril"
    },
    correctAnswer: "c"
  },
  {
    question: "Question Bonus : A qui je ressemble le plus ? <br>(attention y'a un piège ! qui a créer le quizz ?)",
    answers: {
      a: "Mon PAPA",
      b: "Ma MAMA",
      c: "Le facteur",
      d: "La tata Cactus"
    },
    correctAnswer: "a"
  },
];
/*
function showSlide(n) {
  slides[currentSlide].classList.remove('active-slide');
  slides[n].classList.add('active-slide');
  currentSlide = n;
  if(currentSlide === 0){
    previousButton.style.display = 'none';
  }
  else{
    previousButton.style.display = 'inline-block';
  }
  if(currentSlide === slides.length-1){
    nextButton.style.display = 'none';
    submitButton.style.display = 'inline-block';
  }
  else{
    nextButton.style.display = 'inline-block';
    submitButton.style.display = 'none';
  }
};

function showNextSlide() {
  showSlide(currentSlide + 1);
};

function showPreviousSlide() {
  showSlide(currentSlide - 1);
};
*/

function buildQuiz(){
  // variable to store the HTML output
  const output = [];

  // for each question...
  myQuestions.forEach(
    (currentQuestion, questionNumber) => {

      // variable to store the list of possible answers
      const answers = [];

      // and for each available answer...
      for(letter in currentQuestion.answers){

        // ...add an HTML radio button
        answers.push(
          `<label id="labelle">
            <input type="radio" name="question${questionNumber}" value="${letter}">
            <em>${letter} :</em>
            ${currentQuestion.answers[letter]} <br>
          </label>`
        );
      }

      // add this question and its answers to the output
      output.push(
  
       `<div>
        <p id="questionN">Question ${questionNumber + 1}</p>
        <div class="question"><img src="images/logo.png" alt="logo decoration" width="4%"> ${currentQuestion.question} </div><br>
        <div class="answers"> ${answers.join("")} </div>
        </div>`

      );
    }
  );

  // finally combine our output list into one string of HTML and put it on the page
  quizContainer.innerHTML = output.join('');
}

function showResults(){
  

  // gather answer containers from our quiz
  const answerContainers = quizContainer.querySelectorAll('.answers');
  
  // keep track of user's answers
  let numCorrect = 0;

  // for each question...
  myQuestions.forEach( (currentQuestion, questionNumber) => {

    // find selected answer
    const answerContainer = answerContainers[questionNumber];
    const selector = `input[name=question${questionNumber}]:checked`;
    const userAnswer = (answerContainer.querySelector(selector) || {}).value;

    console.log(questionNumber.correctAnswer);

    // if answer is correct
    if(userAnswer === currentQuestion.correctAnswer){
      // add to the number of correct answers
      numCorrect++;
      

      // color the answers green
      answerContainers[questionNumber].style.color = 'green';
     
      
    }
    // if answer is wrong or blank
    else{
      // color the answers red
      answerContainers[questionNumber].style.color = 'red';
      
       //myQuestions.forEach((questionNumber) => {
        //const bonneRep = bonneReps[questionNumber];
        //bonneReps[currentQuestion].style.textDecoration = "underline";

        console.log(questionNumber.correctAnswer);
        //resultsContainer.innerHTML = (questionNumber.correctAnswer);});
            //resultsContainer.innerHTML = ${questionNumber} + (questionNumber.correctAnswer);
      
  
    }
  });
      //quizContainer.innerHTML = "";
      //previousButton.style.display = 'none';
      submitButton.style.display = 'none';
      var retry = document.getElementById("retry");
      retry.style.display = 'inline-block';

     // show number of correct answers out of total
     //resultsContainer.innerHTML = `Votre note est de ${numCorrect} sur ${myQuestions.length}`;

     var note = `${numCorrect}`;

         if (note == 9 ) { 
          resultsContainer.innerHTML = `<strong>Excellent !</strong> <br> Ta note est de    <em> ${numCorrect} </em>   sur    <em> ${myQuestions.length} </em> <br> Tu as très bien regardé mon site. <br><div class="image_centrer" ><br><img src="images/quizz.jpg" alt="quizz effectué" width="50%"></div>`};
         
         if (note >= 6 && note <= 8) { 
         	resultsContainer.innerHTML = `<strong>Bravo !</strong> <br> Ta note est de    <em> ${numCorrect} </em>   sur    <em> ${myQuestions.length} </em> <br> Tu as bien regardé mon site.<br><div class="image_centrer" ><br><img src="images/quizz.jpg" alt="quizz effectué" width="50%"></div>`};
         
         if (note >= 3 && note <=5 ) { 
         	resultsContainer.innerHTML = `<strong>Bof !</strong> <br> Ta note est de    <em> ${numCorrect} </em>   sur    <em> ${myQuestions.length} </em> <br> Tu as regardé les photos mais pas trop les commentaires !<br><div class="image_centrer" ><br><img src="images/quizz.jpg" alt="quizz effectué" width="50%"></div>`};
         
         if (note <= 2) { 
        	resultsContainer.innerHTML = `<strong>Nul !</strong> <br> Ta note est de    <em> ${numCorrect} </em>   sur    <em> ${myQuestions.length} </em> <br> Tu as pas vraiment regardé mon site ou tu as une memoire de poisson rouge !<br><div class="image_centrer" ><br><img src="images/quizz.jpg" alt="quizz effectué" width="50%"></div>`};
  

      

};



// display quiz right away
buildQuiz();

/*
// Pagination
const previousButton = document.getElementById("previous");
const nextButton = document.getElementById("next");
const slides = document.querySelectorAll(".slide");
let currentSlide = 0;


// Show the first slide
showSlide(currentSlide);
*/

// on submit, show results
submitButton.addEventListener('click', showResults);

/*
// add Event Listener slides
previousButton.addEventListener("click", showPreviousSlide);
nextButton.addEventListener("click", showNextSlide);
*/


// <button id="previous">Previous Question</button>
// <button id="next">Next Question</button>
