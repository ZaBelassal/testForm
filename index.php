<?php

?>
<!-- 
<form action="traitement.php" method="GET">
    <input type="text" placeholder="Enter your name" name="nom">
    <button type="submit">Submit</button>

</form> -->



<form action="traitement.php" method="POST">
    <label for="fullname">Full Name</label><br>
    <input type="text" placeholder="Entrer your name" value="" name="fullname"><br/><br>

    <label for="email">Email</label><br>
    <input type="email" placeholder="Enter your email" id="email" name="email"><br/><br>

    <label for="password">Password</label><br>
    <input type="password" placeholder="Enter your password" id="password" name="password"><br/><br>

    <label for="confirmPassword">Confirm Password</label><br>
    <input type="password" placeholder="Confirm your password" id="confirmPassword" name="confirmPassword"><br><br>
    <div>
      <input type="checkbox" id="accept" name="accept">
      <label for="scales">Accepter vous les conditions d'utilisation</label>
    </div>
    <button type="submit" name="submit">Submit</button>
</form>
