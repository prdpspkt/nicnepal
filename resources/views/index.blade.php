<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>सार्वजनिक सूचना केन्द्र - Public Information Center</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Eczar:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani:500&subset=devanagari" rel="stylesheet">

    <!-- Custom styles for this template -->
   <link href="/css/landing-page.min.css" rel="stylesheet">
     <link href="/css/app.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <div class="row">
                   <img title="Public Information Center" alt="सार्वजनिक सूचना केन्द्र" src="/images/default_logo.gif" class="img-fluid float-left"/>
                   <h1 style="font-family: 'Eczar', serif; font-size: 20px; width: 220px; margin-top: 10px">Public Information Center</h1>
        </div>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5" style="font-family: 'Eczar', serif;">सबै सूचनाहरू तथा जानकारीहरू अब तपाईको हातमै !!</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <p style="font-family: 'Rajdhani', sans-serif;"> सार्वजनिक सूचना, जनहितमा जारी सूचना, रोजगार सम्बन्धी सूचना, कुनै कार्यक्रम सम्बन्धी जानकारी, प्रेश विज्ञप्ति तथा अन्य व्यापारिक सूचनाहरू सम्प्रेषण गर्न र प्राप्त गर्न एउटा सजिलो माध्यम !!</p>
              </div>
              <div class="form-row" style="display: flex; flex-direction: row; justify-content: center;" >
                 <a class="btn btn-outline-light btn-separate" title="Get notices in your android device." href="#">Download App</a>
        @guest
        <a class="btn btn-outline-light btn-separate" title="Post your notice" href="/login">Get Started</a>
        @else
        <h6>Hi, {{Auth::user()->name}}</h6>
        <a class="btn btn-outline-light" href="/home">Proceed to Dashboard</a>
        @endguest
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col">
          <b>Warning: </b><br>
          <p>Public Informatin center is a public notice publicing platform for all kinds of organizations, business and groups. This ranges from government to private instutions. The organization or people who post notices to this platform are responsible for any kind of damage to target and target audiance are requested to perform necessary inquiries before proceeding. Froud, Scam, Spam and Phising are not intended through this portal and if done they can be treated against cyber crime. </p>

          <p>We are not responsible for any kind of messages and notices through portal and if reported to us we will immediately remove such post and ban users who posted them.</p>
        </div>
      </div>
    </div>
    <footer>
      <p class="text-center">&copy; 2018 <b><a href="https://deeptitech.com">Deepti Technologies</a></b> developed by <a href="https://psapkota.com">Pradeep Sapkota</a></p>
    </footer>
  </body>
</html>
