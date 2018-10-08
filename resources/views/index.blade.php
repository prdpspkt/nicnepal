<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NIC - (राष्ट्रिय सूचना केन्द्र) National Information Center</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img style="width: 50px;" src="/images/default_logo.gif">
            </div>
            <div class="col-md-9">
                <h5>राष्ट्रिय सूचना केन्द्र <br>
                    <small>National Information Center</small></h5>
            </div>
        </div>
        <a class="btn btn-success" href="#">Download App</a>
        @guest
        <a class="btn btn-primary" href="/login">Get Started</a>
        @else
        <h6>Hi, {{Auth::user()->name}}</h6>
        <a class="btn btn-primary" href="/home">Go to Dashboard</a>
        @endguest
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">सबै सूचनाहरू तथा जानकारीहरू अब तपाईको हातमै !!</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <p> सार्वजनिक सूचना, जनहितमा जारी सूचना, रोजगार सम्बन्धी सूचना, कुनै कार्यक्रम सम्बन्धी जानकारी, प्रेश विज्ञप्ति तथा अन्य व्यापारिक सूचनाहरू सम्प्रेषण गर्न र प्राप्त गर्न एउटा सजिलो माध्यम !!</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
