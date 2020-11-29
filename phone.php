<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

   
    <link rel="stylesheet" href="node_modules/intl-tel-input/build/css/intlTelInput.css">
<script src="node_modules/intl-tel-input/build/js/intlTelInput.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Popmach Assessment</title>


            
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-dark justify-content-end">
        <a class="navbar-brand" href="#"><img src= "images/Logo.png"></a>
        <a class=" ml-auto mr-1"><img src= "images/Hong Kong.png"><img src="images/Drop.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <img src="images/Flag.png" class="navbar-toggler-icon text-right nav-icon">
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
            <ul class="navbar-nav text-right">
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="#">Right Link 1</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="#">Right Link 2</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class=background>
        <div class="layer_color">
            <div class="row header-text-phone">
                <div class="col-lg-12">
                    <div class="intro-text text-center">
                        <p class="name">Rent Now.</p>
                        <p class="skills">Construction machinery. <br />600+ suppliers.</p>
                    </div>
                    <p class="skills_text text-center ">How to Rent  • Why Choose Popmach</p>
                    
                </div>
            </div>
            <div class="p-top__phone_wrapper l-container__layout--m container text-center">
                <div class="p-top__intro__inner text-left"><i class="fa fa-arrow-left arrow_css" aria-hidden="true"></i></div>
              <div class="phone-container">
                <form>
              

                </form>

                <form action="/action_page.php">
                    <div class="form-group text-center m-4">
                      <input type="tel" class="form-control" id="phone" placeholder="Type your phone number">
                    </div>                 
                 </form>

              </div>

                <button class="btn-lg down_buttons next_button border-0 mb-2">RENT NOW</button>
                <p class="policy-text"> By clicking ‘Rent Now’, you are agreeing to Popmach’s</p><br>
                <a href= "#" class ="policy-text"> terms </a> & <a href= "#" class ="policy-text">privacy policy</a></span>
        </div>
       

     <script>


        var input = document.querySelector("#phone");
      var iti = window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.3/build/js/utils.js",
      });
      
      // store the instance variable so we can access it in the console e.g. window.iti.getNumber()
      window.iti = iti;
      </script>
      
</body>

</html>