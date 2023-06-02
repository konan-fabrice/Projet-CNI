<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aperçu CNI</title>
    <style>
        .contour {
            height: 220px;
            width: 400px;
            border: 1px solid black;
            border-radius: 10px;
            background-image: url('cni_logo14.jpg');
            background-size: 100%
        }
        .colonne {
            float: left;
            width: 50%;
            height: 100%;
        }
        .infos {
            height: 75%;
            float: right;
            margin-top: -22px;
            width: 80%
        }
        .verso{
            height: 100%;
            float: left;
            margin-top: -20px;
            width: 50%;
        }
        .photo {
            width: 20%;
            height: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 20px
        }
        .page-break {
            page-break-after: always;
        }
        .colonne ul li{
            list-style: none;
            line-height:20px;
            font-size: 12px
        }
        .titre_cni{
            margin-top: -15px;
        }
        .logo_armoirie{
            margin-top: 10px;
            margin-left:55px;
            justify-content: space-around
        }
        .logo_oneci{
            margin-left: 150px
        }
    </style>
</head>
<body>
    
    <div class="contour">
    
    <div class="entete_cni">
        <div class="logo_armoirie"> 
            <img src="cni_logo.png" width="10%" height="14%"> 
            <b> <font color="black" size="12px">
                 REPUBLIQUE DE COTE D'IVOIRE 
                </font></b> 
                <img src="flag.png" width="9%" height="9%"></div>
   <div class="titre_cni">
    <h5 align="center" style="color: orange; font-weight: bold; font-size: 10px ">
           CARTE NATIONALE D'IDENTITE<font color="green"> 
            <br>
            <b>n° {{ $enrolant->idenrolant }} </b></font>
        </h5>
    <font color="white"> </div>
   <div class="logo_pays"></div>
    </div>

        <div class="colonne photo">
    <img src="{{ public_path('enrolant_images/' . $enrolant->lienphoto) }}" width="100%" height="100%">
</div>

        <div class="colonne infos">
            <ul>
            <li><b>Prenom (s) </b> : {{ $enrolant->prenom }} </li>
            <li><b>Nom</b>  : {{ $enrolant->nom }}</li>
            <li><b>Naissance</b> : {{ $enrolant->datenaissance }} à {{ $enrolant->lieunaissance }}</li> 
            <li><b>Sexe</b> : {{ $enrolant->sexe->libellesexe }}</li>
            <li><b>Taille</b> : {{ $enrolant->taille }} m</li>
            <li><b>Nationalité</b> : {{ $enrolant->pays->libpays }} </li>
            
            </ul>
        </div>
    </div>

    <div class="page-break"></div>

    <div class="contour">
        <div class="logo_oneci">
            <img src="logo.png" width="35%" height="23%">
        </div>
        <div class="colonne verso">
            <ul>
            <li><b>NNI</b>  <br> {{ $enrolant->nni }}</li><br>
            <li><b>Profession</b>  <br>{{ $enrolant->profession->libprofession }} </li><br>
            <li><b>Signature</b> 
        <div class="enrolant_signature">
        <img src="{{ public_path('enrolant_signatures/' . $enrolant->liensignature) }}" width="45%" height="55%">
        </div> </li>
            </ul>
        </div>

        <div class="colonne verso">
            <ul>
            <li><b>Date Emission</b>   <br> {{ $enrolant->dateemission }} </li> <br>
            <li><b>Date Expiration</b>   <br> {{ $enrolant->dateexpiration }} </li> <br>
            <li><b>Signataire</b> <br> </li>
            </ul>
        </div>
       
    </div>
</body>
</html>
