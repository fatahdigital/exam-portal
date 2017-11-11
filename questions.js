var answers = "";
var trueAnswers = "addbdccdccbbdcbdecbbbabbebbaacacbda";
var score = 0;
function checkAnswers() {
  answers = "";
  var questions = $(".ques");
  for (var i = 0; i < questions.length; i++) {
    var inputs = $(questions[i]).find("input");
    var answered = false;
    for (var j = 0; j < inputs.length; j++) {
      if ( $(inputs[j]).prop("checked") ) {
        // console.log( "[" + i + "] [" + j + "] " + $(inputs[j]).val()  );
        answers += $(inputs[j]).val();
        answered = true;

        if ( answers[i] == trueAnswers[i] ) {
          score++;
        }

      }

    }

    if (!answered) {
      answers += "x";
    }

  }

}

$(document).ready(function(){

  $('#questions').on('keyup keypress', function(e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) {
      e.preventDefault();
      return false;
    }
  });

  $("#questions").submit(function () {
    checkAnswers();
    $("#score").val(score);
    $("#userAnswers").val(answers);

    console.log("submit");
  });

  $(".submit-button").click(function (e) {
    e.preventDefault();
    checkAnswers();
    $("#score").val(score);
    $("#userAnswers").val(answers);

    $("#questions").submit();
  });

});
