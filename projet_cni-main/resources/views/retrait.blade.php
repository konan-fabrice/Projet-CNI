<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrait</title>
    <style>
        .search_add_demand{
            display:flex;
            width:100%;
            justify-content: space-around
        }
        input[type="search"]{
            width:900px;
            height: 35px
        }
        button{
            background-color: skyblue;
            color: black;
            font-weight: bold;
            border: none;
            width: 90px;
            height:33px
        }
        table{
            width: 100%
        }
        thead{
            background-color: green;
            text-align: center
        }
        tbody tr{
    background-color: white;
  }
  
        .action-column {
    text-align: center;
    background-color: orange;
    justify-content: space-around;
  }
  tbody tr{
    background-color: white;
  }
    </style>
</head>
<body>
@include('menu')
<br>
    <h1 align="center" style="font-weight: bold"><font color="white">RETRAIT DE CNI</font></h1>

    <div class="search_add_demand">
    <form>
        <input type="search" placeholder="Entrer votre recherche">
        <button type="submit">Rechercher</button>
    </form>

   
        
    </div>
<br>
        <table>
            <thead>
                <td>N° CNI</td>
                <td>Nom</td>
                <td>Prenoms</td>
                <td>Sexe</td>
                <td>Date de naissance</td>
                <td>Date Enrolement</td>
                <td>Date Emission</td>
                <td>Date Expiration</td>
                <td>Actions</td>
            </thead>
            <tbody>
            @foreach($affichage as $enrolant)
    <tr>
      <td>{{ $enrolant->idenrolant }}</td>
      <td>{{ $enrolant->nom }}</td>
      <td>{{ $enrolant->prenom }}</td>
      <td>{{ $enrolant->sexe->libellesexe}}</td>
      <td>{{ $enrolant->datenaissance }}</td>
      <td>{{ $enrolant->dateenrolement }}</td>
      <td>{{ $enrolant->dateemission }}</td>
      <td>{{ $enrolant->dateexpiration }}</td>
      <td class="action-column">
        <a href="#"><i class="fas fa-check" color="black"></i> Valider</a>
        
      </td>
    </tr>
    @endforeach
   
  </tbody>
        </table>
        @include('footer')
</body>
</html>