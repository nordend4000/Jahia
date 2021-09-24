
  
const quizContainer = document.getElementById('quiz');
const resultsContainer = document.getElementById('results');
const submitButton = document.getElementById('submit');



var retry1 = document.getElementById("retry");
retry1.style.display = 'none';

const myQuestions = [
  {
    question: "Which is my date of birth ?",
    answers: {
      a: "24th April 2019",
      b: "26th April 2019",
      c: "24th May 2019",
      d: "26th May 2019"
    },
    correctAnswer: "b"
  },
  {
    question: "What was my birth weight ?",
    answers: {
      a: "3,174 kg",
      b: "3,471 kg",
      c: "3,417 kg",
      d: "3,741 kg"
    },
    correctAnswer: "a"
  },
  {
    question: "How tall was I at birth ?",
    answers: {
      a: "50 cm",
      b: "51 cm",
      c: "52 cm",
      d: "53 cm"
    },
    correctAnswer: "c"
  },
  {
    question: "At what time was I born ?",
    answers: {
      a: "00h21",
      b: "04h31",
      c: "12h17",
      d: "17h32"
    },
    correctAnswer: "b"
  },
  {
    question: "Which city was I born in?",
    answers: {
      a: "Grenoble",
      b: "Valladolid",
      c: "Brisbane",
      d: "London"
    },
    correctAnswer: "c"
  },
  {
    question: "Where did I go on vacation for the first time ? ",
    answers: {
      a: "Albuquerque",
      b: "Sydney",
      c: "Ibiza",
      d: "Darwin"
    },
    correctAnswer: "d"
  },
  {
    question: "How old was I when I started crawling?",
    answers: {
      a: "4 month",
      b: "6 month",
      c: "7 month",
      d: "9 month"
    },
    correctAnswer: "d"
  },
  {
    question: "What is my favorite compote ?",
    answers: {
      a: "Apple",
      b: "Pear",
      c: "Manguo",
      d: "Banana"
    },
    correctAnswer: "c"
  },
  {
    question: "Which is my favorite stuffed animal?",
    answers: {
      a: "My Pinguin",
      b: "My Goussano",
      c: "My Monkey",
      d: "My Bunny"
    },
    correctAnswer: "d"
  },
  {
    question: "Which date did I start walking ?",
    answers: {
      a: "26th March",
      b: "29th March",
      c: "13th April",
      d: "17th April"
    },
    correctAnswer: "c"
  },
  {
    question: "Who do I look like the most ? <br> Be careful !! who created this quizz",
    answers: {
      a: "My PAPA",
      b: "My MAMA",
      c: "My tata Cactus",
      d: "Our postman"
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
            ${currentQuestion.answers[letter]}<br>
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
          resultsContainer.innerHTML = `<strong>Awsome Mate!</strong> <br> Your rating is    <em> ${numCorrect} </hem>   out of    <em> ${myQuestions.length} </em>  <br> You looked at my site very well. <br><div class="image_centrer" ><br><img src="images/quizz.jpg" alt="quizz effectué" width="50%"></div>`};
         
         if (note >= 6 && note <= 8) { 
          resultsContainer.innerHTML = `<strong>Well done Mate!</strong> <br> Your rating is    <em> ${numCorrect} </hem>   out of    <em> ${myQuestions.length} </em>  <br> You looked at my site pretty well.<br><div class="image_centrer" ><br><img src="images/quizz.jpg" alt="quizz effectué" width="50%"></div>`};
         
         if (note >= 3 && note <=5 ) { 
          resultsContainer.innerHTML = `<strong>Yeahhhhh No !</strong> <br> Your rating is    <em> ${numCorrect} </hem>   out of    <em> ${myQuestions.length} </em>  <br> You looked at the pictures but not really the comments !<br><div class="image_centrer" ><br><img src="images/quizz.jpg" alt="quizz effectué" width="50%"></div>`};
         
         if (note <= 2) { 
          resultsContainer.innerHTML = `<strong>Come on Mate !</strong> <br> Your rating is    <em> ${numCorrect} </hem>   out of    <em> ${myQuestions.length} </em>  <br> You haven’t really looked at my site or you're like Mama you have a baby brain !<br><div class="image_centrer" ><br><img src="images/quizz.jpg" alt="quizz effectué" width="50%"></div>`};
  

      

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
