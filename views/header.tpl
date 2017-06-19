<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{$titel}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Logic website, ratt, Logic, Logic301, Rattpack, Robert Bryson, Rapper, DefJam, Music, Jesse Andrea, Rubiks cube logic, Maryland" />
    <meta name="author" content="Nick Meijer"/>
    <meta name="description" content="Beginning in his home state of Maryland, upcoming star Logic (born Sir Robert Bryson Hall II) has been crushing the rap scene since he was 17 years old. Logic cites the Wu Tang Clan as his influence in the early days, and his dream is to work with Kanye West." />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Logic" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:description" content="Beginning in his home state of Maryland, upcoming star Logic (born Sir Robert Bryson Hall II) has been crushing the rap scene since he was 17 years old. Logic cites the Wu Tang Clan as his influence in the early days, and his dream is to work with Kanye West." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{$site_url}/assets/favicon/logic.jpg" type="image/x-icon" />
    <link rel="shortcut icon" href="{$site_url}/assets/favicon/logic.jpg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{$site_url}/assets/favicon/logic.jpg" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="{$site_url}/assets/css/core.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{$site_url}/assets/jquery/pace.min.js"></script>
    <script src="{$site_url}/assets/jquery/core.js"></script>
    <script src="https://use.fontawesome.com/b43063b610.js"></script>
  </head>
  <body>

    <nav>
    <div class="navigation" role="navigation">
    	<div class="nav-bar">
        <div class="mobile-icon">.</div>
        <ul>
          <li><a  href="index"> Welkom</a></li>

          <li><a href="releases">Releases</a></li>

          <li><a href="tour">Tour</a></li>

          <div class="logic-logo">
            Logic
          </div>

          <li><a  href="contact"> Contact</a></li>

          {if isset($username)}
          <li><a  href="account"><i class="fa fa-user-o" aria-hidden="true"></i> account ({$username})</a></li>

          <li><a href="uitloggen"><i class="fa fa-angle-right" aria-hidden="true"></i> Uitloggen</a></li>
          {else}
          <li><a  href="login"><i class="fa fa-user-o" aria-hidden="true"></i> Login</a></li>

          <li><a href="registreren"><i class="fa fa-angle-right" aria-hidden="true"></i> Registreren</a></li>
          {/if}
        </ul>
       </div>
      </div>
      </nav>
      <div class="colored-line"></div>
      <div class="logic-header">
        <div class="page">

          <div id="home-news">
            <div class="home_header">
              <strong><i class="fa fa-ellipsis-h" aria-hidden="true"></i> Welkom</strong>
              <span>op Logic's website.</span>
            </div>
            <div class="home_header">
              <strong><i class="fa fa-map-marker" aria-hidden="true"></i> Tour</strong>
              <span>Binnenkort in amsterdam </span>
            </div>
            <div class="home_header">
              <span><i class="fa fa-headphones"></i> Album.</span>
              <strong>Nieuwe album verkrijgbaar</strong>
            </div>
          </div>
        </div>
      </div>


  </body>
</html>
