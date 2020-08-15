<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Page</title>
  <link rel="stylesheet" types="text/css" href="css/stylesignup12.css">
</head>
<body>
  <form action="insert.php" method="post">

  <div class="two"><h1><p>Welcome To Our Sign Up Page</p></h1>
  </div>
  <div class="one">
    <label for="email">Email Id:-</label>
    <input type="email" name="email" size="30" required></br>
    <label for="password">Password:-</label>
    <input type="password" name="Password" value="" size="30" required></br>
    <label for="first name">First Name:-</label>
    <input type="text" name="first_Name" value="" size="30" required></br>
    <label for="second name">Second Name:-</label>
    <input type="text" name="second_Name" value="" size="30" ></br>
    <label for="surname">surname:-</label>
    <input type="text" name="Surname" value="" size="30" required></br>
    <label for="Mobile No">Mobile No:-</label>
    <input type="tel" name="Mobile_No" value="" size="30" required></br>
    <label for="Country">Country:-</label>
    <select name="Country" id="Country"  required>
    <option value=""></option>
    <option value="India">India     </option></select></br>
    <label for="State">State:-</label>
    <select name="State" id="State"  required>
    <option value=""></option>
    <option value="Bangalore">Bangalore    </option></select></br
    <label for="Address">Address:-</label>
    <pre>
              <textarea id="Address" name="Address" rows="5" cols="50" required></textarea></br></pre>
    </br>
  </br>
        <div class="button">
          <input type="submit" />
        </div>
    </div>
  </form>
</body>
</html>
