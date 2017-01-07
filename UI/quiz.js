var app = angular.module('quizApp', []);


app.directive('quiz', function(quizFactory) {
	return {
		restrict: 'AE',
		scope: {},
		templateUrl: 'quiz-template.html',
		link: function(scope, elem, attrs) {
			scope.start = function() {
				scope.id = 0;
				scope.quizOver = false;
				scope.inProgress = true;
				scope.score = 0;
				scope.getQuestion();
			};

			scope.reset = function() {
				scope.inProgress = false;
				scope.score = 0;
			}

			scope.getQuestion = function() {
				var q = quizFactory.getQuestion(scope.id);
				if(q) {
					scope.question = q;
					scope.answerMode = true;
				} else {
					scope.quizOver = true;
					scope.score = scope.score/10;
				}
			};

			scope.checkAnswer = function() {
				if(!scope.disableButton){
					scope.disableButton = true;
					var q = quizFactory.getQuestion(scope.id);
					var ans = $('input[name=answer]').val();

					xmlhttp = new XMLHttpRequest();
					xmlhttp.open("GET", "cgi-bin/quiz.pl?word1=" + encodeURIComponent(q) + "&word2=" + encodeURIComponent(ans), false);
					xmlhttp.send(null);

					var response = xmlhttp.responseText;
					if(String(response).match(/NA/) == null){
						scope.score = scope.score + parseFloat(response);
					}

					document.getElementById('answer').value = "";
					scope.disableButton = false;

					scope.id++;
					scope.getQuestion();
				}
				

			};

			scope.nextQuestion = function() {
				
				

			}

			scope.reset();
		}
	}
});

app.factory('quizFactory', function() {
	var questions = [
	'wind', 'food', 'boy', 'dark', 'hard', 'high', 'king', 'table', 'slow', 'man'
	];

	return {
		getQuestion: function(id) {
			if(id < questions.length) {
				return questions[id];
			} else {
				return false;
			}
		}
	};
});