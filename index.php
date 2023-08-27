<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./style.css"/>
  </head>
  <body> 
    <fieldset>
      <legend>Ask Query</legend>
      <form action="submit.php" method="post" id="contact">
        <table class="personal-info">
          <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" name="name" placeholder="Enter Full Name.." class="input-width"></td>
          </tr>
          <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" name="email" placeholder="Enter Email" class="input-width"></td>
          </tr>
          <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input type="phone" name="phone" placeholder="Enter Phone" class="input-width"></td>
          </tr>
        </table>
        <table class="message">
          <tr>
            <td><h4>Your message</h4></td>
          </tr>
          <tr>
            <td><input type="text" name="subject" placeholder="Subject" class="subject"></td>
          </tr>
          <tr>
            <td><textarea name="message" id="" cols="55" rows="15" placeholder="Enter Your Message here....."></textarea></td>
          </tr>
          <tr>
            <td><input type="submit" value="submit" name="submit" class="submit"></td>
          </tr>
        </table>
      </form>
    </fieldset>
  </body>
</html>