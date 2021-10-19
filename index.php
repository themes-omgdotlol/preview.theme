<?php
include "database/config.php";

if (isset($_GET['id']) && $_GET['id'] != "") {
  $themeID = $_GET['id'];

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>MatseVH (He/Him)</title>
  <meta charset="utf-8">
  <meta property="og:type" content="website">
  <meta property="og:title" content="MatseVH (He/Him)">
  <meta property="og:description" content="I'm a Developer located in Belgium. I have a serious passion for development. In my spare time next to development I play basketball. ">
  <meta name="viewport" content="width=device-width">
  <link href="/default.profile.css" rel="stylesheet">
  <?php
  $sql = "SELECT * FROM themes WHERE id = '" . $themeID . "'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      print "<style>";
      print $row["css"];
      print "</style>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
</head>

<body>

  <main>

    <div id="profile-picture-container">
      <img alt="matsevh’s profile picture" id="profile-picture" src="https://profile.alpha.omg.lol/matsevh/picture">
    </div>

    <h1 id="name">MatseVH <a title="This address is verified." style="text-decoration: none; border: 0;" href="https://meta.omg.lol/help/profile-verification"><i style="font-size: 80%; color: #0089cf;" class="fas fa-badge-check"></i></a></h1>

    <div id="pronouns">He/Him</div>
    <div id="details">

      <div id="occupation"><i class="fas fa-briefcase"></i> Student</div>

      <div id="location"><i class="fas fa-map-marker-alt"></i> Belgium</div>
    </div>

    <div id="bio">
      <p>I'm a Developer located in Belgium. I have a serious passion for development. In my spare time next to
        development I play basketball. </p>
    </div>

    <div id="profile-items">

      <ul class="fa-ul">

        <li><span class="fa-li"><i class="fas fa-link"></i></span><a rel="me" href="https://matsevh.eu">matsevh.eu</a>
        </li>

        <li><span class="fa-li"><i class="fas fa-link"></i></span><a rel="me" href="https://themes.omg.lol">themes.omg.lol</a></li>
      </ul>
    </div>

    <div id="footer"><a href="https://omg.lol/"><i class="fas fa-plug"></i> Powered by OMG.LOL</a></div>

  </main>

</body>

</html>