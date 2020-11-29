<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Popmach Assessment</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-dark justify-content-end">
        <a class="navbar-brand" href="#"><img src="images/Logo.png"></a>
        <a class=" ml-auto mr-1"><img src="images/Hong Kong.png"><img src="images/Drop.png"></a>
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
            <div class="row header-text-index">
                <div class="col-lg-12">
                    <div class="intro-text text-center">
                        <p class="name">Rent Now.</p>
                        <p class="skills">Select a machinery to start</p><br />

                    </div>
                </div>
            </div>
            <div class="p-top__intro__wrapper l-container__layout--m ">
                <div class="machine_selector_title text-left text-muted">Select Machinery</div>
                <p class="machine_selector_text text-left text-muted">Multiple selection are allowed</p>
                <div class="row card-deck machinery_deck" style="margin: 0 15px;">
                    <div class="col-4 one_machine_col machine_selected">
                        <div class="card one_machine_card border-0 machine-1">
                            <div class="div_tick onclick_tick"><img class="tick" src="images/Tick.png" alt="Card image cap"></div>
                            <img class="card-img-top" src="images/Aerial Platforms.png" alt="Card image cap">
                            <figcaption class="figure-caption w-75">Aerial Platforms</figcaption>
                        </div>
                    </div>
                    <div class="col-4 one_machine_col machine_selected">
                        <div class="card one_machine_card border-0 machine-2">
                        <div class="div_tick onclick_tick"><img class="tick" src="images/Tick.png" alt="Card image cap"></div>

                            <img class="card-img-top" src="images/Aerial Platforms Copy.png" alt="Card image cap"
                                caption="test">
                            <figcaption class="figure-caption w-75">Compaction Equipment</figcaption>
                        </div>
                    </div>
                    <div class="col-4 one_machine_col machine_selected">
                        <div class="card one_machine_card border-0 machine-3">
                        <div class="div_tick onclick_tick"><img class="tick" src="images/Tick.png" alt="Card image cap"></div>

                            <img class="card-img-top" src="images/Aerial Platforms Copy 2.png" alt="Card image cap">
                            <figcaption class="figure-caption w-75">Crawlers Crane</figcaption>
                        </div>
                    </div>

                    <div class="col-4 one_machine_col machine_selected">
                        <div class="card one_machine_card border-0 machine-4">
                        <div class="div_tick onclick_tick"><img class="tick" src="images/Tick.png" alt="Card image cap"></div>

                            <img class="card-img-top" src="images/Aerial Platforms Copy 3.png" alt="Card image cap">
                            <figcaption class="figure-caption w-75">Dozers</figcaption>
                        </div>
                    </div>
                    <div class="col-4 one_machine_col machine_selected">
                        <div class="card one_machine_card border-0 machine-5">
                        <div class="div_tick onclick_tick"><img class="tick" src="images/Tick.png" alt="Card image cap"></div>

                            <img class="card-img-top" src="images/Aerial Platforms Copy 4.png" alt="Card image cap">
                            <figcaption class="figure-caption w-75">Dumpers</figcaption>
                        </div>
                    </div>
                    <div class="col-4 one_machine_col machine_selected">
                        <div class="card one_machine_card border-0 machine-6">
                        <div class="div_tick onclick_tick"><img class="tick" src="images/Tick.png" alt="Card image cap"></div>

                            <img class="card-img-top" src="images/Aerial Platforms Copy 5.png" alt="Card image cap">
                            <figcaption class="figure-caption w-75">Excavators</figcaption>
                        </div>
                    </div>
                </div>

                <button class="btn-lg down_buttons next_button border-0 mb-2" id="machine_selected_submit">NEXT</button>
                <div class="row hr_div">
                    <div class="col">
                        <hr>
                    </div>
                    <div class="col-auto or">or</div>
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <button class=" btn-lg down_buttons whatsapp_button border-0" > <i class="fa fa-whatsapp"
                        style="font-size:25px;margin-right: 15px;VERTICAL-ALIGN: top;"></i> WHATSAPP NOW</button>

            </div>
        </div>
        <script>
           $('#machine_selected_submit').click(function(){
            var selectedMachineArray = [];
            $('.active_one_machine_card').each(function() {
                var currentElement = $(this);
              
                selectedMachineArray.push(currentElement[0].classList[2].slice(currentElement[0].classList[2].length - 1));
               
            });
      
            if(selectedMachineArray.length == 0 ){
                alert("Please select machinery to proceed.")
            }

         
            request = $.ajax({
                type: "POST",
                url: "/popmach/machine_save.php",
                data: "machine="+selectedMachineArray,  
                }).done(function( msg ) {
                alert( "Data Saved: " + msg );
});
        });

        $('.machine_selected').on('click', function () {
            $(this).toggleClass('active_one_machine_col')
            $(this).find('.one_machine_card').toggleClass('active_one_machine_card');
            $(this).find('.one_machine_card').toggleClass('border-0');
            
            $(this).find('.div_tick').toggleClass('onclick_tick');
        });


        </script>
    });
</body>

</html>