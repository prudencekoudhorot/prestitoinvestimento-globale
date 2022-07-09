<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
</head>

<body>

  <div style=" display:block; max-width:800px; margin:20px auto;  padding:0; color:#fff; background: green; border-radius:5px;border:1px solid #85060622;font-size:15px; font-family: Montserrat, sans serif;">

    <div style=" display:block;  text-align:center;padding:20px;margin: 0;">
        <h3 style="font-size: 120%; margin-top:10px; line-height:1.7;">
        <a href="{{ route('accueil') }}" style="font-size :150%;text-decoration: none; color:white;">
        prestitoinvestimento-globale.org<br>
    </div>

    <div style="background:#fff; color: #000; display:block;padding:30px; text-align: justify; ">
    <p>Bonjour,
    </p><br>
    <p>Mr / Mme : <b>{{ $contenu['name'] }}</b> ayant pour e-mail : <b>{{ $contenu['email'] }}</b> vous a contacté. Voici son contenu.</p>
    <p>Contenu du message : <b>{{ $contenu['message'] }}</b> </p> 
    <br/>


    </div>
    <div style="background: #85060622; color:#fff; text-align:center;padding:30px 10px; display:block;  ">
      <p class="copyright-text" style="color: #fff;">
      <div class="copyright">
      &copy; Copyright <strong><span>prestito </span>investimento-globale</a></strong>. Tous droits réservés
    </div>
  </div>
          </p>
    </div>
  </div>

</body>
</html>
