@extends('frontend')
@section('content')

<style>
    /* Text Bounce  */
    h1 {
  color: #000000;
  padding-top: 30px;
  font-family: 'Coiny', cursive;
  text-align: center;
  font-size: 70px;
-webkit-animation: bounce .4s ease infinite alternate;
}

@-webkit-keyframes bounce {
  0% {
      text-shadow:
                  0 5px 0 #ccc,
                  0 2px 3px rgba(0, 0, 0, 1);
  }
  100% {
    transform:translateY(-20px);
    text-shadow:  0 50px 0 #black,
                  0 0px 20px rgba(0, 0, 0, .8);
  }
}

    /* Pre Tag  */
    pre {
    display: block;
    overflow-y: scroll;

    font-family : monospace;
    font-weight : 400;
    text-align  : left;
    line-height : 1.6em;
    white-space : pre;

    padding       : 1em 2%;
    margin-top    : 1em;
    margin-right  : 5%;
    margin-bottom : 1em;
    margin-left   : 5%;

    border: solid 2px #ccc;
    border-radius : 0.25em;

    background-color : #202020;
    /* color: rgba(155, 220, 100, 1); */
    color: rgb(255, 255, 255);
}

    /* hr styles  */
    .trans--grow{
  -webkit-transition: width 1s ease-out; /* For Safari 3.1 to 6.0 */
  transition: width 1s  ease-out;
  width : 0%;
}
.grow{
  width:100%;
}
.hr1{
  margin-left:0;
}
.hr2{
  margin-right:0;
}
hr{
  margin-top: 20px;
  padding: 2px 0;
  border: none;
  background-color: rgb(2, 2, 2);
  letter-spacing: 5px;
}

/* Image Fade In  */
.fade-in {
  animation: fadeIn ease 10s;
  -webkit-animation: fadeIn ease 10s;
  -moz-animation: fadeIn ease 10s;
  -o-animation: fadeIn ease 10s;
  -ms-animation: fadeIn ease 10s;
}
@keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

@-moz-keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

@-webkit-keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

@-o-keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

@-ms-keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

    /* Back Next Arrow  */



</style>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<div class="container mt-3 mb-3">
    <div class="row">
        {{-- <div class="col-md-6">
            <img src="https://www.e-spincorp.com/wp-content/uploads/2020/06/laravel-php-framework.jpg" alt="..." class=" img-fluid  fade-in " style=" height: 250px; width: 250xp;">
        </div>

        <div class="col-md-6 position-relative">
           <h1 class="position-absolute top-50 start-50 translate-middle">Laravel CRUD</h1>
        </div> --}}

                <center>
                    <a href="{{ url()->previous() }}" class="btn btn btn-primary"><</a>
                    {{-- <a href="{{ url('/code/more')}}" class="btn btn  btn-primary">></a> --}}
                </center>
        <div class="col-md-12">
            <hr class="trans--grow hr1">
            <h2 class="text-center">Laravel CRUD</h2>
            <hr class="trans--grow hr2">
            <pre>
                var UI = require('ui');
                var ajax = require('ajax');
                var d = new Date();
                var n = d.getTime();
                var api_key = "myapikey";
                // Create a Card with title and subtitle
                var card = new UI.Card({
                  title:'Linode Servers',
                  subtitle:'Fetching...'
                });

                // Display the Card
                card.show();

                // Construct URL
                var URL = "https://api.linode.com/?api_key=" + api_key + "&amp;api_action=linode.list";
                ajax(
                  {
                    url: URL,
                    method: 'get',
                    type: 'json',
                    crossDomain: true
                  },
                  function(data) {
                    // Success!
                    console.log("Successfull maybe!");
                    card.body(data.DATA[0].LINODEID);
                  },
                  function(error) {
                    console.log(n);
                    console.log('Failed to Auth: ', error);
                    if(error.unauthorized){
                    console.log(error.unauthorized.message);
                    console.log(error.unauthorized.code);
                    }
                    console.log(error);
                    console.log(JSON.stringify(error));
                    console.log(n);
                  }
                );
                </pre>


        </div>

        <div class="col-md-12">
            <center><button  class="btn btn-success" style="font-size: 22px;">Thanks!</button></center>
        </div>



    </div>
</div>

<script>
    // hr style
    jQuery(document).ready(function($){
    setTimeout(function(){
        $('.trans--grow').addClass('grow');
    }, 275);
});

</script>

@endsection
