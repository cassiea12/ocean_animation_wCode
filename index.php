<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>The Animated Ocean</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
			.ocean{fill:#76CFE4;}
			.sand{fill:#E5CE1E;}
			.seaweed2{fill:#1B6432;}
			.seaweed1{fill:#499443;}
			.orange_fish{fill:#F68A1F;}
			.purple_fish{fill:#9C2271;}
			.crab{fill:#DA3926;}

			/* Transform Time */
			.crab, .crab_eye_right, .crab_eye_left {
	        transition: transform 2s;
	    }
			.orange_fish, .orange_fish_eye, .purple_fish, .purple_fish_eye {
				transition: transform 7s;
			}
			.seaweed1 {
				transition: transform 4s;
			}
			.seaweed2 {
				transition: transform 2s;
			}

      /* Crabs */
			.crab_right.is-open {
      	transform: translateY(-80%);
      }
      .crab_eye_right.is-open {
      	transform: translateY(-600%);
      }
			.crab_left.is-open {
      	transform: translateY(-90%);
      }
      .crab_eye_left.is-open {
      	transform: translateY(-700%);
      }

		/* Fish */
      .orange_fish.swim {
        transform: translateX(400%);
      }
      .orange_fish_eye.swim {
        transform: translateX(6700%);
      }
      .purple_fish.swim {
        transform: translateX(-400%);
      }
      .purple_fish_eye.swim {
        transform: translateX(-6700%);
      }

			/* Seaweed */
			.seaweed1.grow {
				transform: translateY(-80%);
			}
			.seaweed2.grow {
				transform: translateY(-80%);
			}

      /* Night */
      .ocean, .sand {
        transition: fill 7s;
      }
      .ocean.night {
        fill: #074751;
      }
      .sand.night {
      	fill: #827211;
      }
    </style>
  </head>
  <body class="bg-faded">
    <main class="container py-4">
      <h1 class="pb-4 font-weight-bold text-center">The Ocean Alive</h1>
      <?php include('images/ocean_optimized.php'); ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script>
      $( document ).ready(function() { //don't run until the page is loaded
        $( ".orange_fish" ).click(function() {
          $('.orange_fish').toggleClass('swim');
          $('.orange_fish_eye').toggleClass('swim');
        });

        $( ".purple_fish" ).click(function() {
          $('.purple_fish').toggleClass('swim');
          $('.purple_fish_eye').toggleClass('swim');
        });

        $( ".crab_right" ).click(function() {
          $('.crab_right').toggleClass('is-open');
          $('.crab_eye_right').toggleClass('is-open');
        });

        $( ".crab_left" ).click(function() {
          $('.crab_left').toggleClass('is-open');
          $('.crab_eye_left').toggleClass('is-open');
        });

        $( ".ocean" ).click(function() {
          $('.ocean').toggleClass('night');
          $('.sand').toggleClass('night');
        });

        $( ".seaweed1" ).click(function() {
          $('.seaweed1').toggleClass('grow');
        });

        $( ".seaweed2" ).click(function() {
          $('.seaweed2').toggleClass('grow');
        });
      });
    </script>
  </body>
</html>


