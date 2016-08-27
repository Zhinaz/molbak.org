<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Aalborg</title>
  
  <link rel="shortcut icon" href="/images/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
  <!-- Optional Bootstrap theme -->
  <link rel="stylesheet" href="dist/css/custom-bootstrap.css">
</head>

<body>
  <?php include 'includes/upper-body.php';?>
  
  
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h2 class="panel-title">Aalborg - Card drinking game</h2>
    </div>
    <div class="panel-body">
      
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h2 class="panel-title">Prerequisites</h2>
        </div>
        <div class="panel-body">
          <ul>
            <li>Players: 3+</li>
            <li>Lots of alcohol!</li>
            <li>A deck of cards without jokers.</li>
          </ul>
        </div>
      </div>
      
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h2 class="panel-title">Game Setup</h2>
        </div>
        <div class="panel-body">
          <ul>
            <li>All cards must lie face down</li>
            <li>Place 16~ cards in two rows to form a street</li>
            <li>Randomly place people in the street</li>
            <li>Place one card at the end of the street, indicating the Casino</li>
            <li>Place two cards indicating McDonald and two next those for the Bus ride</li>
          </ul>
          <p><img class="img-responsive" src="images/AalborgSmall.png" alt="Aalborg Setup"></p>
        </div>
      </div>
      
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h2 class="panel-title">Rules</h2>
        </div>
        <div class="panel-body">
          
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h2 class="panel-title">General Rules</h2>
            </div>
            <div class="panel-body">
              <p>The dealer will clockwise draw a card to the next player. The player will then turn a bar or person from the street. If the dealer card is black, or a Jack, the player will drink sips equal to the difference of the two cards. If the dealer card is red, or a King, the player can give out sips equal to the difference of the two cards.<br>When the street is empty, the game is finishing and the next two players will have to pass by McDonald before grabbing their Bus ride home.<br>If a player at any point wants to leave, he will first have to visit McDonald and then grab a Bus ride to get home.</p>
            </div>
          </div>
          
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h2 class="panel-title">McDonald</h2>
            </div>
            <div class="panel-body">
              <p>The two players will choose a card each. The higher card wins, while the lower card drink sips equal the value of the higher card.</p>
            </div>
          </div>
          
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h2 class="panel-title">Bus Ride</h2>
            </div>
            <div class="panel-body">
              <p>Same as McDonald, because you haven't drinked enough yet!</p>
            </div>
          </div>
          
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h2 class="panel-title">Casino</h2>
            </div>
            <div class="panel-body">
              <p>When having to drink a player can enter the casino for a 'double or nothing' chance by guessing the color of the card.</p>
            </div>
          </div>
          
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h2 class="panel-title">Bar Fight</h2>
            </div>
            <div class="panel-body">
              <p>Occurs when the drawer and the dealer draws the same card!<br>The drawer can challenge another player to a bar fight. They both get three cards facing down. They will blindly pick one and the higher card wins, while the lower card will drink sips equal to the higher cards value.<br>Should both fighters draw the same card they can both call for backup from another player. The drawn cards gets added together and the losers share the punishment.</p>
            </div>
          </div>
          
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h2 class="panel-title">Lady Hunt</h2>
            </div>
            <div class="panel-body">
              <p>Occurs when a queen is drawn or found!<br>The dealer creates a three by three pyramid of cards. The player will have to guess his way through the rows to score the lady.<br>The first row (from the bottom) is about guessing whether there are more black or red cards. At the second row, the player will guess whether there are 2 blacks, 2 reds or one of each. At the final row, the player will have to guess the suit of the card.<br>Should the player score the lady, everybody else will have to empty their drinks in his honor!<br>Should the player fail at any row, he will have to drink, for one round, the number of the row he failed times the amount of sips drunk by people who drew a black or Jack card.<br>If the player fails at any row, a wingman can step up (any other player). This will draw a new card from the dealer and if it saves the player, the wingman will not have to drink if he scores. Should the player fail at the row the wingman helped, they both get punished. A player can only be wingmaned once per lady hunt.</p>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
  </div>

  
  <?php include 'includes/lower-body.php';?>
</body>
</html>