<!DOCTYPE html>

<html>  
  
<head>
  <link type="text/css" rel="stylesheet" href="mobile.css" />
  <link rel="stylesheet" media="screen and (min-device-width: 799px)" href="stylesheet.css" />
  <link rel="icon" href="images/syntaxLPIcon.png" />
  <link rel="prefetch" href="events.html">
  <title>Syntax Junkies</title>
</head>

<body>
   <div id="navbar">
      <a href="index.html"><img src="images/syntaxLogo.png"; onmouseover="this.src='images/syntaxLogoEdited.png';" onmouseout="this.src='images/syntaxLogo.png';"width="300"; /></a>
      <img src="images/divider.png" />
      <a href="music.html"><img src="images/music.png"; onmouseover="this.src='images/musicHover.png';" onmouseout="this.src='images/music.png';" /></a>
      <img src="images/divider.png" />
      <a href="videos.html"><img src="images/videos.png"; onmouseover="this.src='images/videosHover.png';" onmouseout="this.src='images/videos.png';" /></a>
      <img src="images/divider.png" />
      <a href="events.php"><img src="images/events.png"; onmouseover="this.src='images/eventsHover.png';" onmouseout="this.src='images/events.png';" /></a>
      <img src="images/divider.png" />
      <a href="gallery.html"><img src="images/gallery.png"; onmouseover="this.src='images/galleryHover.png';" onmouseout="this.src='images/gallery.png';" /></a>
      <img src="images/divider.png" />
      <a href="artists.html"><img src="images/artists.png"; onmouseover="this.src='images/artistsHover.png';" onmouseout="this.src='images/artists.png';" /></a>
      <img src="images/divider.png" />
      <a href="shop.html"><img src="images/shop.png"; onmouseover="this.src='images/shopHover.png';" onmouseout="this.src='images/shop.png';" /></a>
      <img src="images/divider.png" />
      <a href="signup.html"><img src="images/signup.png"; onmouseover="this.src='images/signupHover.png';" onmouseout="this.src='images/signup.png';" /></a>
      <img src="images/divider.png" />
      <a href="https://www.facebook.com/syntaxjunkies/" ; target=_blank><img src="images/facebookIcon.png"; onmouseover="this.src='images/facebookIconHover.png';" onmouseout="this.src='images/facebookIcon.png';" /></a>
      <a href="https://www.youtube.com/user/ooperss" ; target=_blank><img src="images/youtubeIcon.png"; onmouseover="this.src='images/youtubeIconHover.png';" onmouseout="this.src='images/youtubeIcon.png';" /></a>
      <a href="https://www.instagram.com/syntaxjunkies/" ; target=_blank><img src="images/instagramIcon.png"; onmouseover="this.src='images/instagramIconHover.png';" onmouseout="this.src='images/instagramIcon.png';" /></a>
    </div>

      <div id="title">
        <h1>
      EVENTS
    </h1>
      </div>
  
  <?php
  include "loadEvents.php"; // include all functions from the loadEvents php page
  $array = getEvents(); // set the variable array to the return value of the getEvents function located in the loadEvents php page
  ?>
  
  <div id=container>
      <table style="margin-left:auto; margin-right:auto; margin-top:2%; color:grey;" width=70%>
        <tr>
          <td colspan="4" style="border-bottom:2px solid grey;">
          </td>
        </tr>
        <tr>
          <td>Date</td>
          <td>Venue</td>
          <td>Location</td>
          <td>Tickets</td>
        </tr>
        <tr>
          <td colspan="4" style="border-top:2px solid grey">
          </td>
        </tr>
        <?php 
          foreach ($array as $details)
          {
            echo "<tr>";
            echo "<td style=\"padding:5px 0px 5px 0px\">" . $details["DATE"] . "</td>";
            echo "<td>" . $details["VENUE"] . "</td>";
            echo "<td>" . $details["LOCATION"] . "</td>";
            echo "<td>" . "<a href=\"http://premier.ticketek.com.au/\">Tickets</a>" . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan=\"4\" style=\"border-top:1px solid grey\">";
            echo "</td>";
            echo "</tr>";
          }
        ?>
      </table>
    </div>

  <div id="footer" style="bottom:0;">
    <p style="float:left; padding-left:10px">2017 All Rights Reserved, Syntax Junkies ©</p>
    <a href="privacypolicy.html" ><p style="float:right; padding-right:10px">Privacy Policy</p></a>
  </div>

</body>


</html>
