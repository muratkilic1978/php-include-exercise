<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title><?php //write out the PHP variable title. Remember to write echo in front of the variable title and finally terminate each PHP statement with a semicolon ?></title>
</head>
<body>
  <header>
    <a href="index.php"><h1>Marioclub</h1></a>
  </header>
  <section class="banner">
    <img src="img/banner.jpg" alt="marioclub welcome banner">
    <div class="welcome">
      <h2>Welcome to <br><span>Marioclub 
      <?php 
          if($page == 'news'){echo 'news';} 
          elseif ($page == 'games'){echo 'games';}
          elseif ($page == 'contact'){echo 'contact';}
          else {echo '';}
      
      ?></span></h2>
    </div>
  </section>
  <nav class="main-nav">
    <ul>
      <li>
        <a href="index.php" class="
         <?php 
          // Explanation: This PHP if-statement checks whether the variable $page is equal to 'index' and if it is true it then write out 'join'
          if($page == 'index'){echo 'join';} ?> ">Join the club</a>
      </li>
      <li>
        <a href="news.php" class="
        <?php // Check if the page variable is equal to 'news'. If true then print out 'join'. Remember to terminate each PHP statement with a semicolon ?>">Latest news</a>
      </li>
      <li>
        <a href="games.php" class="<?php // Check if the page variable is equal to 'games'. If true then print out 'join'. Remember to terminate each PHP statement with a semicolon ?>">New games</a>
      </li>
      <li>
        <a href="contact.php" class="<?php // Check if the page variable is equal to 'contact'. If true then print out 'join'. Remember to terminate each PHP statement with a semicolon ?>">Contact</a>
      </li>
    </ul>
  </nav>