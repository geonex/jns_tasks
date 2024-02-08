
</nav>

<div class="container mt-5">
  <h2>Exercise 3: Form, Bootstrap, Strings, Numbers, Browser Detection, File Modification Time</h2>
  
  <form class="mt-4">
    <div class="form-group">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" id="firstname" >
    </div>
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" id="lastname" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <?php
    if(isset($_POST['firstname']) && isset($_POST['lastname'])) {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      echo "<h3>Hello $firstname $lastname, You are welcome to my site.</h3>";
    }
  ?>

  <h3 class="mt-5">HTML Table with Bootstrap Styling</h3>
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>John</td>
        <td>Doe</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Jane</td>
        <td>Smith</td>
      </tr>
      <tr>
        <td>3</td>
        <td>James</td>
        <td>Brown</td>
      </tr>
    </tbody>
  </table>

  <?php
   
    $str1 = "Hello";
    $str2 = "World";
    $combined_string = $str1 . " " . $str2;
    echo "<p>The combined string is: $combined_string</p>";
    echo "<p>The length of the combined string is: " . strlen($combined_string) . "</p>";

   
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
    $sum = $num1 + $num2 + $num3;
    echo "<p>The sum of the numbers $num1, $num2, and $num3 is: $sum</p>";

   
    $browser = $_SERVER['HTTP_USER_AGENT'];
    echo "<p>Your browser is: $browser</p>";

    
    $filename = basename(__FILE__);
    $modification_time = date("F d Y H:i:s.", filemtime($filename));
    echo "<p>Last modified: $modification_time</p>";
  ?>
</div>


<?php
 include("footer.php");
 ?>