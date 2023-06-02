<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <title>Page avec Footer Fixé</title>
    
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 150vh;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .footer {
            background-color: #f5f5f5;
            padding: 20px;
            text-align: center;
            height: 250px;
            margin-top: 20px
        }
        
        .main_footer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            height:90%
        }
        
        .footer-column {
            flex-basis: 30%;
            margin-bottom: 20px;
            
        }
        
        .footer-column ul {
            display: flex;
            flex-wrap: wrap;
            list-style-type: none;
            padding: 0;
        }
        
        .footer-column li {
           
            margin-bottom: 10px
        }
        .footer-column h3{
            color: orange
        }
       .footer_icon{
color: green
       }
       .titre{
        color: orange
       }
    </style>
</head>
<body>
    <div class="content">
        <!-- Contenu de la page -->
    </div>
    <div class="footer">
        <!-- Contenu du footer -->
        <div class="main_footer">
            <div class="footer-column">
                <h3>QUI SOMMES-NOUS</h3>
                <p><b>L'Office National de l'Etat Civil et de l'Identification
                     (ONECI)</b> a été créé en 2019 par le décret <b>
                        N° 2019-458 du 22 mai 2019</b> en lieu et place de 
                        <b>l'Office National de l'Identification (ONI)</b>
                         dissout conformément au décret N°2019-459 du 22 mai 2019.</p> </div>
            <div class="footer-column">
                <h3>OU NOUS TROUVER</h3>
                <ul>
                <li><i class="fa-solid fa-box-archive footer_icon"></i><b> Adresse Postale</b> :  BP V168 Abidjan 19 </li>
                    <li><i class="fas fa-map-marker-alt footer_icon"></i><b> Siège</b> : Boulevard Botreau Roussel, Abidjan-Plateau</li>
                    <li><i class="fa-solid fa-calendar-days footer_icon"></i><b> Horaires</b> :  08h00 à 12h00 / 13h00 à 17h00</li>
                    
                </ul>
            </div>
            <div class="footer-column">
                <h3>NOUS CONTACTER</h3>
                <ul>
                    
                    <li><i class="fa-solid fa-phone-volume footer_icon"></i><b> Téléphone</b> :  (+225) 27 20 30 79 00 /<br> 27 20 25 45 59</li>
                    <li><i class="fa-brands fa-intercom footer_icon"></i><b> Call Center</b> :  (+225) 27 20 23 96 60 /<br> 27 20 30 79 40 / 1340</li>
                    <li><i class="fa-solid fa-fax footer_icon"></i><b> Fax </b> :  (+225) 27 20 24 29 13</li><br>
                    <li><i class="fa-solid fa-envelope footer_icon"></i><b> Mail </b> : standard_accueil@oneci.ci</li>
                   
                </ul>
            </div>
        </div>
        <p>© 2023 SEREINO Technology & Digital Technology. Tous droits réservés.</p>
    </div>
</body>
</html>
