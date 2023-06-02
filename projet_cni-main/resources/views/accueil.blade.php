<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
              .dashbord_card{
                display: flex;
                width: 100%;
                justify-content: space-around;
                    height: 250px;
                    font-family: Bodoni MT;
                    margin-top:25px
            }
            .demand_stats{
              font-size:30px;
                width: 30%;
                height: 100%;
                text-align: center;
                background-color: white;
                opacity: 0.8;
                align-items: center
            }
            .prints_stats{
              font-size:30px;
                width: 30%;
                height: 100%;
                text-align: center;
                background-color: white;
                opacity: 0.8
            }
            .withdraw_stats{
              font-size:30px;
                width: 33%;
                height: 100%;
              text-align: center;
                background-color: white;
                opacity: 0.8
            }
    </style>
</head>
<body>
@include('menu')


<br>
<h1 align="center"><font color="white">ACCUEIL</font></h1>
    
<p align="center"><b>Bienvenue sur la plateforme de l'ONECI</b></p>
<br>

       <div class="dashbord_card">
        <div class="demand_stats">
          Demandes
          <h1 style="color: green"> {{ $enrolementCount }}</h1>
        </div>
        <div class="prints_stats">
          Impressions
        </div>
        <div class="withdraw_stats">
            Retraits
        </div>
        
       </div>
       @include('footer')
</body>
</html>