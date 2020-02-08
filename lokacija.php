<!DOCTYPE html>
<html lang="sr">

<head>
  <meta charset="UTF-8">
  <title>E-apoteka</title>

  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="icon" type="image/png" href="kapsula.png">
  <style type="text/css">
    #map-canvas {
      position: absolute;
      top: 10px;
      left: 100px;
      height: 250px;
      width: 800px;
    }
  </style>




<body>
  <div id="wrap">
    <div id="header">
      <img class="hederi" src="pozadina2.jpg">
    </div>
    <div id="meni">
      <ul>
        <li><a href="home.php">Početna</a></li>
        <li><a href="lekovi.php">Lekovi</a></li>
        <li><a href="proizvodjaci.php">Proizvođači</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
        <li><a href="komentari.php">Komentari</a></li>
        <li><a href="lokacija.php">Lokacija</a></li>
        <li><a href="glasanje.php">Glas za lek nedelje</a></li>
        <li><a href="prodavnica2/index.php">E-prodavnica</a></li>
        <li><a href="login.php">Log in</a></li>

      </ul>
    </div>
    <div id="content">
      <div id="map-canvas">


        <iframe width="600" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.rs/maps?f=q&amp;source=s_q&amp;hl=sr&amp;geocode=&amp;q=beogradska+34&amp;sll=44.025419,20.923339&amp;sspn=6.595522,13.52417&amp;ie=UTF8&amp;hq=&amp;hnear=34+%D0%91%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D0%B4%D1%81%D0%BA%D0%B0,+%D0%91%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D0%B4,+%D0%93%D1%80%D0%B0%D0%B4+%D0%91%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D0%B4+11000&amp;t=m&amp;ll=44.806747,20.471134&amp;spn=0.02923,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.rs/maps?f=q&amp;source=embed&amp;hl=sr&amp;geocode=&amp;q=beogradska+34&amp;sll=44.025419,20.923339&amp;sspn=6.595522,13.52417&amp;ie=UTF8&amp;hq=&amp;hnear=34+%D0%91%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D0%B4%D1%81%D0%BA%D0%B0,+%D0%91%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D0%B4,+%D0%93%D1%80%D0%B0%D0%B4+%D0%91%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D0%B4+11000&amp;t=m&amp;ll=44.806747,20.471134&amp;spn=0.02923,0.054932&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Vidi vecu mapu</a></small>

      </div>
      <div id="podaci">
        <p id="adresa" align="justify"><b>Ulica: Beograd, Beogradska 34</b>
          <p id="telefon"><b>Telefon: 011/333-222</b>


      </div>
      <div id="footer">
        <p id="tim">
          Despotović, Todorovići</p>
        <p id="datum">
          <script>
            var datum = new Date();
            document.write(datum.getDate() + "." +(datum.getMonth()+1)+"."+ datum.getFullYear() + ".");
          </script>
        </p>
      </div>

    </div>


</body>

</html>