

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Contact - Brand</title>
        <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}" />
        <!--<link rel="stylesheet" href="{{ secure_asset('bootstrap.min.css') }}" />-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
        <link rel="stylesheet" href="{{ asset('ionicons.min.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
        <style> 
            #map {
            height: 100%;
            width: 50%;
          }
        </style> 
    </head>
    
    <body>
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
            <div class="container"><a class="navbar-brand logo" href="#">Salesforce</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    
                </div>
            </div>
        </nav>
        <main class="page contact-page">
            <section class="portfolio-block contact">
                <div class="container">
                    <div class="heading">
                        <h2>New Account</h2>
                    </div>
                    <form>
                        
                        <div class="form-group"><label for="name">Name</label><input class="form-control item" type="text" id="name"></div>
                        <div class="form-group"><label for="lastname">LastName</label><input class="form-control item" type="text" id="lastname" required></div>
                        <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email"></div>
                        <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit">Save Account</button></div>
                    </form>
                </div>
            </section>
        </main>
        
        <footer class="page-footer">
            <div class="container">
                
            </div>
        </footer>
        <script src="{{ asset('jquery.min.js') }}"/>
        <script src="{{ asset('bootstrap.min.js') }}"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
        <script src="{{ asset('theme.js') }}"/>
    </body>
</html>
