<html>
    <head>

        <title>Aeromexico Business - @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://www.aeromexico.com/images/favicon.ico">
        <link rel="stylesheet" href="{{ asset('modalstyle.css') }}" />


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"                                          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"                 integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"                    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> </script>
        
        <style type="text/css">
            body {
              font-family: Neue Haas Unica Pro;
              font-style: normal;
              font-weight: normal;
            }
        </style>

        <script type="text/javascript">
            if (window.location.protocol !== 'https:') {
                window.location = 'https://' + window.location.hostname + window.location.pathname + window.location.hash;
            }
        </script>

        <script src="{{ asset('webchat.js') }}"/>
        <script src="{{ asset('webchatsurvey.js') }}"/>
        <script src="{{ asset('widgetsjson.json') }}"/>
        <link rel="stylesheet" href="{{ asset('webchatcss.css') }}">


        <style type="text/css">
            tr > td > input {
                align-content: center;
                margin: none !important;
                font-size: 10px !important; 
                background: #ffffff !important; 
                border: black !important;
                color: black !important;
                border-bottom: 0.5px solid#000000 !important;
            }
        </style>

        <script src="https://apps.mypurecloud.com/widgets/9.0/cxbus.min.js" onload="CXBus.configure({ pluginsPath: 'https://apps.mypurecloud.com/widgets/9.0/plugins/' }); CXBus.loadPlugin('widgets-core');"></script>
        <script src="https://apps.mypurecloud.com/widgets/9.0/cxbus.min.js" onload="javascript:CXBus.configure({debug:false,pluginsPath:'https://apps.mypurecloud.com/widgets/9.0/plugins/'}); CXBus.loadPlugin('widgets-core');"></script>

        
    </head>
    <body>

         <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TVBDV7L"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        @section('navbar')
            <nav class="navbar navbar-expand-lg navbar-light bg-#0b2343">
                    <img src="{{ asset('images/Aeromexico.png') }}" style="margin-right: 5px;width: 110px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                  aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                        </li>
                        <li class="nav-item">
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>

                    <button class="btn btn-outline-primary my-2 my-sm-0" type="button" style="font-weight: normal; font-size: 12px;" data-toggle="modal" data-target=".bd-example-modal-lg">
                        <img src="{{ asset('images/search.svg') }}" style="margin-right: 8px;">{{ __('app.nav.search_article') }}
                    </button>

                    <!-- <img src="{{ asset('images/notificationoff.svg') }}" style="margin-right: 9px; margin-left: 21px;"> -->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top: -23px; margin-right: 90px;">


                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <div class="idioma">{{ __('app.nav.language')}}</div>
                            <div style="width: 229px; height: 68px; align-items: center;">
                                    <img src="{{ asset('images/MEX.svg') }}" style="margin-right: 10px;">{{ __('app.nav.spanish')}} 
                                </a>
                            </div>
                            <div style="width: 229px; height: 68px; align-items: center;">
                                    <img src="{{ asset('images/united-states-of-america.svg') }}" style="margin-right: 10px;">{{ __('app.nav.english')}} 
                                </a>
                            </div>
                        </div>
                    </li>
                    <!-- <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" style="font-weight: normal; font-size: 12px;">Iniciar sesión</button> -->
                </div>
            </nav>


            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="searchmodal" aria-hidden="true" id="searchmodal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <div class="modal-header" style="background: #004990;">
                            <div class="p-5 mb-1 bg text-white">
                                <a style="margin-bottom: 23px;">{{ __('app.doyouneedhelp') }}</a>
                                <div class="input-group mb-3">
                                    <input type="text" id="searchField" onkeyup="searchFx();" class="form-control" placeholder="{{ __('app.search')}}">
                                    <div class="input-group-append">
                                        <button style="float: right; border: none; background: #004990;"><img src="{{ asset('images/search.svg') }}" style="margin-left: 10px; height: 36px; min-height: auto;"></button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body" style="padding: 0px;">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <a class="navbar-brand">{{ __('app.filter_results_by') }}</a>
                                <a class="navbar-toggler navbar-brand" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                    </svg>
                                </a>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto nav-pills nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link1 active" id="pills-all-tab" data-toggle="pill" href="#pills-all"     role="tab" aria-controls="pills-all" aria-selected="true">{{ __('app.see_all')}}</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link1" id="pills-network-tab" data-toggle="pill" href="#pills-network"    role="tab" aria-controls="pills-network" aria-selected="false">NETWORK UPDATES</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link1" id="pills-products-tab" data-toggle="pill" href="#pills-products"  role="tab" aria-controls="pills-products" aria-selected="false">PRODUCTS & SERVICES</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link1" id="pills-politics-tab" data-toggle="pill" href="#pills-politics"  role="tab" aria-controls="pills-politics" aria-selected="false">POLITICAS</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </nav>

                            


                            <div class="sectionmodal">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" style="background-color: white;">


                                        <script type="text/javascript">

                                            var hiddenArticles = [];

                                            function searchFx() {
                                                var input, filter, pills, inputhidden, a, i, txtValue;
                                                input = document.getElementById("searchField");
                                                filter = input.value.toUpperCase();
                                                pills = document.getElementById("pills-tabContent");
                                                inputhidden = pills.getElementsByTagName("input");
                                                var counterLimitToShow = 0;

                                                for (i = 0; i < inputhidden.length; i++) {
                                                    a = inputhidden[i].value;
                                                    txtValue = a;
                                                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                        counterLimitToShow++;

                                                        if(counterLimitToShow <= 7)
                                                            document.getElementById(inputhidden[i].id+'-all-element').style.display = "";
                                                        else
                                                            document.getElementById(inputhidden[i].id+'-all-element').style.display = "none";    
                                                    } else {
                                                        document.getElementById(inputhidden[i].id+'-all-element').style.display = "none";
                                                    }
                                                }
                                                console.log('very important data: ' + counterLimitToShow);
                                                if(input.value.length == 0){

                                                    for (var i = 0; i < hiddenArticles.length; i++) {
                                                        document.getElementById(hiddenArticles[i]).style.display = 'none';
                                                    }
                                                }

                                            }
                                        </script>




                                    </div>

                                    <!-- <div class="tab-pane fade" id="pills-network" role="tabpanel" aria-labelledby="pills-network-tab">
                                        <div>NETWORK UPDATES</div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-products" role="tabpanel" aria-labelledby="pills-products-tab">
                                        <div>PRODUCTS & SERVICES</div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-politics" role="tabpanel" aria-labelledby="pills-politics-tab">
                                        <div>POLITICAS</div>
                                    </div> -->
                                </div>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade bd-IATA-modal-lg" tabindex="-1" role="dialog" aria-labelledby="IATAmodal" aria-hidden="true" id="IATAmodal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <div class="modal-header" style="background: #004990;">
                            <div class="p-5 mb-1 bg text-white">
                                <a style="margin-bottom: 23px;">{{ __('app.message_iata') }}</a>
                                <div class="input-group mb-3">
                                    <input type="text" id="IATAField" class="form-control validanumericos" placeholder=" IATA " maxlength="8">
                                    <br/><!--<div id="ErrorMessageChat" style="color: red;"></div>-->
                                    <div class="input-group-append">
                                        <!-- <button style="float: right; border: none; background: #004990;" onclick="loadDoc();">
                                            <img src="{{ asset('images/search.svg') }}" style="margin-left: 10px; height: 36px; min-height: auto;">
                                        </button> -->
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body" >

                            <center>
                                <div id="ErrorMessageChat" style="color: #E91B2F;"></div>
                                <br>
                                <button type="button" class="btn-primary" onclick="loadDoc();">
                                    CHAT
                                </button>
                            </center>
                        </div>

                    </div>
                </div>
            </div>

        @show


            @yield('content')



        @section('footer')
            <div class="footer">
                <footer class="text-white" style="background: #0B2343 !important;">
                    <div class="container2 p-4">
                        <div class="row">
                            <div class="col-lg-4" style="border-right: 1px solid rgba(255, 255, 255, 0.2);">
                               <!-- <p class="bigtex" style="color: white;">{{ __('app.footer.title') }} </p>
                                <a class="textf">{{ __('app.footer.subtitle') }}</a> -->
                                 
                                <!--<button type="button" class="btn-primary">
                                    <img style="width: 15px;" src="{{ asset('images/chat.png') }}" />&nbsp;&nbsp;&nbsp; {{ __('app.commning_soon') }}
                                </button>-->
                                <!-- onclick=" showtextBoxIata(); "  data-toggle="modal" data-target=".bd-IATA-modal-lg"  -->
                                <br/><br/>

                                <!--<div id="textBoxIata" style="display: none;">
                                    <a class="textf">Proporciona el No. de IATA:</a><br/>
                                    <input type="text" class="form-field" name="IATA" id="IATA">
                                </div> -->

                                <div style="margin-top: 70px; border-top: 1px solid rgba(255, 255, 255, 0.2);">
                                    <a class="textf2">{{ __('app.footer.follow_us') }}</a>


                                    <div>
                                        <a href="https://www.facebook.com/AeromexicoMX" target="_blank">
                                            <img src="{{ asset('images/footer/icon/3.svg') }}" style="margin-right: 20px;">
                                        </a>
                                        <a href="https://twitter.com/aeromexico" target="_blank">
                                            <img src="{{ asset('images/footer/icon/4.svg') }}" style="margin-right: 20px;">
                                        </a>
                                        <a href="https://www.instagram.com/aeromexico/" target="_blank">
                                            <img src="{{ asset('images/footer/icon/5.svg') }}" style="margin-right: 20px;">
                                        </a>
                                        <a href="https://www.linkedin.com/company/aeromexico" target="_blank">
                                            <img src="{{ asset('images/footer/icon/6.svg') }}" style="margin-right: 20px;">
                                        </a>
                                        <a href="https://www.youtube.com/user/AeromexicoTV" target="_blank">
                                            <img src="{{ asset('images/footer/icon/7.svg') }}">
                                        </a>
                                    </div>
                                </div> 

                            </div>
                            <div class="col-lg-4" style="border-right: 1px solid rgba(255, 255, 255, 0.2);">
                                <a style="font-size: 12px;">{{ __('app.footer.about_aeromexico') }}</a>

                                <ul class="list-unstyled">
                                    <li>
                                        <a class="textcol3" href="https://aeromexico.com/es-mx/inversionistas" target="_blank" style="font-size: 12px;">{{ __('app.footer.investors') }}</a>
                                    </li>
                                    <li>
                                        <a class="textcol3" href="https://aeromexico.com/es-mx/vuela-con-nosotros/otras-alianzas" target="_blank" style="font-size: 12px;">{{ __('app.footer.business_alliances') }}</a>
                                    </li>
                                    <li>
                                        <a class="textcol3" href="https://compliance.aeromexico.com/?_ga=2.154051640.1628337106.1608067820-361651239.1599170126" target="_blank" style="font-size: 12px;">{{ __('app.footer.compliance') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <a style="font-size: 12px;">{{ __('app.footer.your_interest') }}</a>

                                <ul class="list-unstyled">
                                    <li>
                                        <a class="textcol3" href="https://aeromexico.com/es-mx/vuela-con-nosotros" target="_blank" style="font-size: 12px;">{{ __('app.footer.fly_with_us') }}</a>
                                    </li>
                                    <li>
                                        <a class="textcol3" href="https://aeromexico.com/es-mx/vuela-con-nosotros/flota-aeromexico" target="_blank" style="font-size: 12px;">{{ __('app.footer.our_fleet') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                    <div class="p-3" style="background-color:#0B2343;border-top: 1px solid rgba(255, 255, 255, 0.2);">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a class="textf">{{ __('app.footer.legal_words') }}</a>
                            </div>
                            <!--<div>
                                <a class="textf">{{ __('app.footer.certificated_by') }}<img src="{{ asset('images/PCI1.svg') }}" style="margin-left: 10px;"></a>
                            </div>-->
                        </div>
                    </div>
                </footer>
            </div>
        @show


        <!--Esto valida el input IATA con solo numericos-->
        <script type="text/javascript">
            $(function(){
    
                $('.validanumericos').keypress(function(e) {
                  if(isNaN(this.value + String.fromCharCode(e.charCode))) 
                   return false;
                })
                .on("cut copy paste",function(e){
                  e.preventDefault();
                });
              
              });
        </script>    
        <script type="text/javascript">
            $('#IATA').bind('input propertychange', function() {

                var ltg = $(this).val();
                
                console.log(ltg.length + ':' + $(this).val())

                if(ltg == '10572461' || ltg == '10563744' || ltg == '10526526' ){
                    CXBus.command('WebChat.open', { 
                    userData: { customerId: ltg }, 
                        form: { 
                            autoSubmit: false, 
                            firstname: '', 
                            lastname: '', 
                            email: 'user@mail.com' 
                        } 
                    });
                    $(this).prop( "disabled", true );
                }else{

                }
                    

            });
            function showtextBoxIata() {
                document.getElementById('textBoxIata').style.display = 'block';
            }

            function loadDoc() {
                var xhttp = new XMLHttpRequest();
                document.getElementById('ErrorMessageChat').innerHTML = '';
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var response = JSON.parse(this.responseText);
                        console.log(response);
                        if(response.length > 0){
                            CXBus.command('WebChat.open', { 
                            userData: { customerId: document.getElementById('IATAField').value }, 
                                form: { 
                                    autoSubmit: false, 
                                    firstname: '', 
                                    lastname: '', 
                                    email: 'user@mail.com' 
                                } 
                            });
                            $('#IATAmodal').modal('hide');
                            document.getElementById('IATAField').value = '';
                        }else{
                            document.getElementById('ErrorMessageChat').innerHTML = '{{ __('app.alert_iata') }}';
                            document.getElementById('IATAField').value = '';
                        }

                    }
                };

                if(document.getElementById('IATAField').value.length > 7){
                    xhttp.open("GET", "/IATA/"+document.getElementById('IATAField').value, true);
                    xhttp.send();
                }else{
                    document.getElementById('ErrorMessageChat').innerHTML = '{{ __('app.valididty_iata') }}';
                }

            }

        </script>

        
    </body>
</html>
