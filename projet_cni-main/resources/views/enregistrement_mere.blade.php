<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrolement</title>
</head>
<style>
      form {
        background-color: gray;
        border-radius: 20px;
        width: 75%;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0 auto; /* Ajout de la marge auto pour centrer horizontalement */
    }
    .enrolement_form {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
        width: 80%;
        height: 80%;
        border-radius: 20px;
        margin-top: 50px;
        
    }
    .first_form, .second_form{
        display: flex;
    flex-direction: column;
    align-items: flex-start;
    font-size: 16px;
    
    font-family: Franklin Gothic; 
    }
    .first_form label, .second_form label {
    margin: 20px 0px;
}
input[type="text"],[type="date"],[type="number"], select{
    width: 200px;
    height: 25px
}
button{
    height: 30px;
    width: 100px;
    margin: 10px 0px;
    border: none;
    font-weight: bold;
    color: white
}
button[type="submit"]{
    background-color: green
}
button[type="reset"]{
    background-color: red
}
</style>
<body>
    @include('menu')
    <br>
    <h1 align="center"><font color="white">ENROLEMENT DE CNI</font></h1>
    <form method="POST" action="{{route('enregistrementmere')}}">
        @csrf
        <br>
        <div class="enrolement_form">
            <div class="first_form">
            <h4>
            Mere
        </h4>
        <label for="nom_mere">Nom
            <input type="text" placeholder="Entrer le nom de la mère" name="nommere">
        </label>
        <label for="prenoms_mere">Prenoms
            <input type="text" placeholder="Entrer les prénoms de la mère" name="prenommere">
        </label>
            </div>
            <div class="second_form">
                 
        
     
        <label for="datenaiss_mere">Date de naissance
            <input type="date" name="datenaissmere">
        </label>
        <label for="profession_mere">Profession
            <select>
                @foreach ($profession as $profession)
                <option value="{{ $profession->idprofession }}">{{ $profession->libprofession }}</option>
                @endforeach
            </select>
        </label>
        
    </div>
        </div>

        <button type="submit">Suivant</button>
        
        
    </form>
    @include('footer')
</body>
</html>