<?php
include("inc/functions.php");
$conn = connectToDB();

$firstnameerror = "";
$lastnameerror = "";
$emailErr = "";
$websiteErr = "";
$messageErr = "";
$TitleErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameerror = "Please enter your first name";
  }
  if (empty($_POST["lastname"])) {
     $lastnameerror = "Please enter your last name";
  }

  if (empty($_POST["email"])) {
    $emailErr = "Please enter your email";
  }

  if (empty($_POST["insertion"])) {
    $messageErr = "Required field";
  }

  if (empty($_POST["Title"])) {
    $TitleErr = "Please enter the title..";
  }
  else {
//var_dump($_POST);
if(isset($_POST['mySubmit']))
{
  $firstName  = $_POST['firstname'];
  $lastName   = $_POST['lastname'];
  $message   = $_POST['message'];
  $email      = $_POST['email'];
  $insertion      = $_POST['insertion'];

  $sql="INSERT INTO `guestbook` (firstName,lastName,message,email,Insertion)
    VALUES ('$firstName', '$lastName', '$message', '$email', '$insertion')";

  $result = $conn->query($sql) or die($conn->error);
}
// Connect to server and select database.
//

//check if query successful
if($result){
echo "Successful";
echo "<BR>";

// link to view guestbook page
}
}
}
//mysql_close();
// define variables and set to empty values

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Guestbook">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>My GuestBook</title>
</head>
  <body>
                <h1>Guestbook</h1>
     <form action="" method="post">
      <fieldset><div id="guestbooktitle">
        <table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
          <tr>

          </tr>
          </table>
          <div id="guestbook">
           <table cellspacing="1" bgcolor="#CCCCCC">
            <tr>
              <td>
                <table width="800" border="0" cellpadding="3" cellspacing="1" bgcolor="#fff9fd" bac>
                  <tr>
                    <td>First Name</td>
                    <td>:</td>
                    <td><input name="firstname" type="text"  size="60" /><span class="error">*<?php echo $firstnameerror;?></span></td>

                  </tr>
                  <tr>
                    <td>Insertion</td>
                    <td>:</td>
                    <td><input name="insertion" type="text" id="email" size="60" /></td>

                  </tr>
                  <td>Last Name</td>
                  <td>:</td>
                  <td><input name="lastname" type="text" size="60" /><span class="error">*<?php echo $lastnameerror;?></span></td>

                </tr>
                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td><input name="email" type="text" id="email" size="60" /><span class="error">*<?php echo $emailErr;?></span></td>

                </tr>
                <tr>
                  <td>Website</td>
                  <td>:</td>
                  <td><input name="Website" type="text" id="Website" size="60" /></td>
                </tr>

                <tr>
                  <td>Title</td>
                  <td>:</td>
                  <td><input name="Title" type="text" id="Title" size="60" /><span class="error">*<?php echo $TitleErr;?></span></td>
                </tr>

                <tr>
                  <td valign="top">Message</td>
                  <td valign="top">:</td>
                  <td><textarea name="message" cols="55" rows="3"  id="message"></textarea><span class="error">*<?php echo $messageErr;?></span></td>
                </tr>
              </div>

              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td> <div id="buttonsubmit"><input type="submit" name="mySubmit" value="Submit" /></div>
                  <div id="buttonreset"><input type="reset"  name="Reset" value="Reset" /></td></div>
                </tr>
              </table>
            </td>
          </form>
      </table>
        <table width="400" border="0" align="center" cellpadding="3" cellspacing="0"></table>
        </fieldset>


        <h2>Guests</h2>
      </form>
      <div id="table-container">
        <?php
          $sql = "SELECT firstname, lastname, message, email, message, insertion FROM guestbook";
            $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                echo "<table id='tabledata'><tr><th>First Name</th><th>Insertion</th><th>Last Name</th><th>Email</th><th>Message</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<tr><td>".$row["firstname"]."</td><td>".$row["insertion"]."</td><td> ".$row["message"]."</td><td> ".$row["email"]."</td><td> ".$row["message"]."</td><td> "."</td></tr>";
                }
                echo "</table>";
              } else {
                echo "0 results";
              }
              ?>
            </body>
          </html>
