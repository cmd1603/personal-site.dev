'use strict'
	
	var userSequence = [];
	var gameSequence = [];
	var homerSound = $('#homer');
	var barneySound = $('#barney');
	var duffSound = $('#beer');
	var bartSound = $('#bart');
	var boxes = $('.col-md-6');
	var speed = [600, 300, 50];

		function start() {
			gameSequence = [];
			goSimon();
		}

		function goSimon() {
			userSequence = [];
			addRandomBoxToSequence();
			playback()
		}

		// function diffuculty() {
		// 	speed = 
		// }

			$('.text-right').hover(
				function(){
				$('.text-right').css('color', 'white');
 
				},
				function () {
				$('.text-right').css('color','color: rgb(251, 255, 0);');
				});

		function addRandomBoxToSequence() {
			var random = Math.floor(Math.random() * 4);
			gameSequence.push(boxes.get(random).id);
			console.log(gameSequence);
		}

		function playback() {
			endInput();

		document.getElementById('round').innerText = 'Round: ' + gameSequence.length;

		var i = 0;

			var intervalId = setInterval(function (){
					lightUp(document.getElementById(gameSequence[i]));
					i++;
				if (i >= gameSequence.length) {
					clearInterval(intervalId);
					beginInput();
				}
			}, 1000);
		}	


        function lightUp(element) {
            element.style.opacity = "1";
            var fadeoutTimerId = setTimeout(function() {
                element.style.opacity = "0.3";
            }, 150);
        }	

				$(document).ready(function() {
					$('#box1').click(function(){
						$('#box1').animate({
							opacity: '1'
						}, 150).animate({
							opacity: '.3'
						})
						duffSound.trigger('play');
					})
				$(document).ready(function() {
					$('#box2').click(function(){
						$('#box2').animate({
							opacity: '1'
						}, 150).animate({
							opacity: '.3'
						})
						bartSound.trigger('play');
					})
				})
				$(document).ready(function() {
					$('#box3').click(function(){
						$('#box3').animate({
							opacity: '1'
						}, 150).animate({
							opacity: '.3'
						})
						homerSound.trigger('play');
					})
				})
				$(document).ready(function() {
					$('#box4').click(function(){
						$('#box4').animate({
							opacity: '1'
						}, 150).animate({
							opacity: '.3'
						})
						barneySound.trigger('play');
					})
				})							
			})
		
        function compareSequences() {
	            var sequenceError = false;
	            for (var i = 0; i < userSequence.length; i++) {
	              if (gameSequence[i] == undefined || gameSequence[i] != userSequence[i]) {
	                sequenceError = true;
	                break;
	              }
	            }

		    if (sequenceError) {
		              gameOver();
		        } else if (userSequence.length == gameSequence.length) {
		              goSimon();
	        }
	    }

        function gameOver() {
            location.reload(true);
            confirm("LOSERR! PLAY AGAIN???");
            if(confirm) {
                start();
            }
        }

        function stop() {
            alert('GAME ENDED');
            location.reload(true);
        }
        function userClick() {
            var userChoice = this.id;
            lightUp(this);
            userSequence.push(userChoice);
            compareSequences();
        }

		function beginInput() {
			document.getElementById('box1').addEventListener('click',userClick, false);
			document.getElementById('box2').addEventListener('click',userClick, false);
			document.getElementById('box3').addEventListener('click',userClick, false);
			document.getElementById('box4').addEventListener('click',userClick, false);
		}
		function endInput() {
			document.getElementById('box1').removeEventListener('click',userClick, false);
			document.getElementById('box2').removeEventListener('click',userClick, false);
			document.getElementById('box3').removeEventListener('click',userClick, false);
			document.getElementById('box4').removeEventListener('click',userClick, false);		
		}

		document.getElementById('start').addEventListener('click', start, false);
		document.getElementById('stop').addEventListener('click', stop, false);
		//document.getElementById('easy').addEventListener('click', diffuculty, false);
		
