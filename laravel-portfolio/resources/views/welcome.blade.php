<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis">
        <link href="https://fonts.googleapis.com/css?family=Italianno|Julius+Sans+One|Satisfy|Staatliches|Voltaire" rel="stylesheet">
        <style>
        #jumbo{
            height:100vh;
            background-image:url("/img/IMG_4840 copy.JPG");
             background-size:cover;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            color:white;
            
        }
        #words{
            text-align:center;
            
            
        }
        #byline {
            font-family: 'Italianno', cursive;
        
        }

        .display-2 {
            font-family: "Voltaire", sans-serif;
            
        }
        #img-div{position:relative;
   padding-top:0px;
    z-index:0;
    
    
  }
        #image {
   display:block;
    margin-left: auto;
    margin-right: auto;
    margin-bottom:-50px;
    border-style:solid;
    border-radius:50%;
    border-color:white;
    border-width:10px;
    max-width:100% ;
    height:auto;}

    #app{
        padding: 20%;
    }
#nav{
   opacity: 100%;
   
}
        </style>
       <body>

</div>
        <div id="jumbo"class="jumbotron jumbotron-fluid">
                    <div id="nav">
                    <b-nav>
                        <b-nav-item>About | </b-nav-item>
                        <b-nav-item>Blog | </b-nav-item>
                        <b-nav-item>Portfolio | </b-nav-item>
                        <b-nav-item>Contact | </b-nav-item>
                        <b-nav-item>Resume | </b-nav-item>
                    </b-nav>
                    </div>
            <div id="words" class="container">
                <h1 class="display-2">Jaelyn Coles</h1>
                <h1 id="byline" class="display-2">Full-Stack Web Developer</h1>
                <div id="image-div">
                <img id="image" src="/img/IMG_0632 copy.jpg" height=10% width=30%/>
             </div>
             </div>
        </div>
        <div id="app">
       <blog-component> </blog-component>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
