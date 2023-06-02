<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    
    <style>
            body {
                font-family: 'Nunito', sans-serif;
                width: 100%;
                overflow-x: hidden;
                background-image: url('fond.jpg');
                background-size: 100%;
                opacity: 0.9
            }
            .main_menu{
                display: flex;
                justify-content: space-between;
                background-color: white;
                align-items: center;  
                margin: -7px;  
                height: 140px
            }
            .logo{
        width:30%;
        height: 80%
    }
    .menu_title{
        width: 50%;
        align-items: center
    }
            .menu{
                margin: -16px -7px
            }
        .menu ul{
                display: flex;
                justify-content: space-around;
                list-style: none;
                background-color: orange;
                height: 50px
            }
     .menu ul li{
                margin: 10px 0;
            }
            a{
                text-decoration: none;
                color: white;
                font-weight: bold
            }

            .account_deconnexion{
        width: 15%;
        height: 100%;
       
    }
            
            .account{
                display: flex;
                justify-content: space-between;
                height: 60%;
                margin-top: 15px
                
            }
            
            .account_photo {
        width: 30%;
        height: 60px;
        border-radius: 50%;
        overflow: hidden;
    }
            .account_photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
            .account_info{
               width: 66%;
                margin:5px 0px;
                
            }
            .deconnexion{
                width: 50%;
                margin-bottom:10px;
                margin-left: 50px;
                height: 25px;
                text-align: center;
                
            }
            .deconnexion a{
                color: green
            }
        </style>
</head>

<body class="antialiased">

    <div class="main_menu">
        <div class="logo">
            <a href="/accueil"><img src="logo.png" width="60%" height="100%"></a>
        
        </div>
        <div class="menu_title">
            <h2>Plateforme de Gestion des Cartes Nationales d'Identité</h2>
        </div>
        <div class="account_deconnexion">
            <div class="account">
            <div class="account_photo">
    <img src="photo.jpg" alt="Photo" />
</div>
                <div class="account_info"> Bienvenue 
                    <br>
                <font color="orange"><b>Kouamé Enock</b></font>
            </div>
            </div>
            <div class="deconnexion">
                <a href="/">DECONNEXION</a>
            </div>
        </div>
        </div>
       <div class="menu">
        <ul>
            <li><a href="/accueil">Accueil</a></li>
            <li><a href="/enregistrementpere">Enrolement</a></li>
            <li><a href="/renouvellement">Renouvellement</a></li>
            <li><a href="/demande">Demande</a></li>
            <li><a href="/impression">Impression</a></li>
            <li><a href="/retrait">Retrait</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
       </div>

</body>

</html>