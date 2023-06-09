let quizz = [
    {
        question: "Comment tu t'appelle ?",
        option: [
            "A. Marie",
            "B. Lisa",
            "C. Clara",
            "D. Sophia",
        ],
        answer: 2,
    },
    {
        question: "Tu fais quoi comme sport ?",
        option: [
            "A. Equitation",
            "B. Skate",
            "C. Cheerleading",
            "D. Danse",
        ],
        answer: 4,
    },
    {
        question: "Quel âge as-tu ?",
        option: [
            "A. 21",
            "B. 26",
            "C. 17",
            "D. 19",
        ],
        answer: 1,
    },
    {
        question: "Quelle est ta couleur préférée ?",
        option: [
            "A. Bleu",
            "B. Violet",
            "C. Rouge",
            "D. Orange",
        ],
        answer: 3,
    },
    {
        question: "Comment s'appelle ton chat ?",
        option: [
            "A. Rudolphe",
            "B. Fiona",
            "C. Meteor",
            "D. Mistouille",
        ],
        answer: 2,
    }
]

var img = document.getElementById("rotateImg");

img.addEventListener("mousemove", function(event) {
  var rect = img.getBoundingClientRect();
  var x = event.clientX - rect.left;
  var y = event.clientY - rect.top;
  var rotation = (Math.atan2(y, x) * 180) / Math.PI;
  img.style.transform = "rotate(" + rotation + "deg)";
});

img.addEventListener("mouseleave", function() {
  img.style.transform = "rotate(0deg)";
});
