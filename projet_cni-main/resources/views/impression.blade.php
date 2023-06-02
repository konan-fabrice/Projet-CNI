<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impression</title>
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
<h1 align="center" style="font-weight: bold"><font color="white">IMPRESSION DE CNI</font></h1>

<div class="search_add_demand">
    <form>
        <input type="search" placeholder="Entrer votre recherche">
        <button type="submit">Rechercher</button>
    </form>
</div>
<br>
<table>
    <thead>
        <tr>
            <th>N° CNI</th>
            <th>Nom</th>
            <th>Prenoms</th>
            <th>Sexe</th>
            <th>Date de naissance</th>
            <th>Date Enrolement</th>
            <th>Date Emission</th>
            <th>Date Expiration</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($affichage as $enrolant)
        <tr>
            <td>{{ $enrolant->idenrolant }}</td>
            <td>{{ $enrolant->nom }}</td>
            <td>{{ $enrolant->prenom }}</td>
            <td>{{ $enrolant->sexe->libellesexe }}</td>
            <td>{{ $enrolant->datenaissance }}</td>
            <td>{{ $enrolant->dateenrolement }}</td>
            <td>{{ $enrolant->dateemission }}</td>
            <td>{{ $enrolant->dateexpiration }}</td>
            <td class="action-column">
            <a href="{{ route('pdf.generate', ['id' => $enrolant->idenrolant]) }}"><i class="fa fa-print" color="black"></i> Imprimer</a>
 </td>
        </tr>
        @endforeach
    </tbody>
</table>

@include('footer')
</body>
</html>
