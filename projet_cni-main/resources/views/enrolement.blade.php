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

/*#videoContainer {
        position: relative;
        width: 300px;
        height: 200px;
        overflow: hidden;
    }
    #video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    #preview {
        display: none;
        width: 100%;
        height: 100%;
    }
    #captureBtn {
        margin-top: 10px;
    }*/
</style>
<body>
    @include('menu')
    <br>
    <h1 align="center"><font color="white">ENROLEMENT DE CNI</font></h1>
    <form  method="POST" action="{{route('enrolement')}}" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="enrolement_form">
            <div class="first_form">
            <label for="nom_enrolant">Nom
            <input type="text" placeholder="Entrer le nom du demandeur" name="nom">
        </label>
        <label for="prenom_enrolant">Prenoms
            <input type="text" placeholder="Entrer le prénom du demandeur" name="prenom">
        </label>
        <label for="datnaiss_enrolant">Date de naissance
            <input type="date" name="datenaissance">
        </label>
        <label for="heurenaiss_enrolant">Heure de naissance
            <input type="time" placeholder="Entrer le nom du demandeur" name="heurenaissance">
        </label>
        <label for="lieunaiss_enrolant">Lieu de naissance
            <input type="text" placeholder="Entrer le lieu de naissance" name="lieunaissance">
        </label>
        <label for="sexe_enrolant">Sexe
            <select name="idsexe">
                @foreach ($sexe as $sexe )
                <option value="{{$sexe->idsexe }}">{{ $sexe->libellesexe}}</option>
                @endforeach
        
            </select>
        </label>
        <label for="nationalite_enrolant">Nationalité
            <select name="idpays">
                @foreach ($pays as $pays ) 
                <option value="{{$pays->idpays}}">{{ $pays->libpays }}</option>
                @endforeach
                
            </select>
        </label>
        <label for="telephone_enrolant">Telephone 
            <input type="number" name="telephone">
            </label>
            <label for="profession_enrolant">Profession 
                <select name="idprofession">
                    @foreach ($profession as $profession ) 
                    <option value="{{$profession->idprofession}}">{{ $profession->libprofession }}</option>
                    @endforeach
                    
                </select>
            </label>
        
        <h4>
            Pere
        </h4>
        <label for="nom_pere">Pere
            <select name="idpere">
            @foreach ($pere as $pere ) 
            <option value="{{$pere->idpere}}">{{ $pere->nompere }}</option>
            @endforeach
            </select>
        </label>
        <label for="visa_enrolant">Visa
            <input type="text" name="visa">
        </label>
            </div>
           <div class="second_form">
        <!--    <div id="videoContainer">
                    <video id="video" autoplay></video>
                    <img id="preview">
                </div>
                <button id="captureBtn">Capturer</button>
                <input type="hidden" id="photoBase64Input" name="photoBase64">
                <input type="hidden" id="photoExtensionInput" name="photoExtension">
-->
       <label for="photo_enrolant">
            <input type="file" name="lienphoto">
        </label> 
        <label for="nni_enrolant">NNI
            <input type="number" name="nni">
        </label>
        
        <label for="taille_enrolant">Taille 
            <input type="number" name="taille">
            </label>
            <label for="empreinte_enrolant" >Empreinte
            <input type="file" name="lienempreinte">
        </label>
            <label for="signature_enrolant">Signature
            <input type="file" name="liensignature">
         </label>
        <h4>
            Mere
        </h4>
        <label for="nom_mere">Mere
            <select name="idmere">
                @foreach ($mere as $mere ) 
                <option value="{{$mere->idmere}}">{{ $mere->nommere }}</option>
                @endforeach
                </select>
        </label>
        
        <label for="date_enrolement">Date Enrolement
            <input type="date" name="dateenrole">
        </label>
    </div>
        </div>

        <button type="submit">Valider</button>
        
        
    </form>
    @include('footer')
    <!-- <script>
        var video = document.getElementById('video');
        var preview = document.getElementById('preview');
        var captureBtn = document.getElementById('captureBtn');
        var photoBase64Input = document.getElementById('photoBase64Input');
        var photoExtensionInput = document.getElementById('photoExtensionInput');
            // Start the camera when the page is loaded
    window.addEventListener('load', startCamera);

// Function to start the camera
function startCamera() {
    // Check if the browser supports the MediaDevices API
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        // Access the camera using the getUserMedia method
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                // Set the video source to the camera stream
                video.srcObject = stream;
            })
            .catch(function (error) {
                console.log('Error accessing the camera:', error);
            });
    } else {
        console.log('getUserMedia is not supported by this browser.');
    }
}

// Function to capture the photo
function capturePhoto() {
    // Create a canvas element to draw the video frame
    var canvas = document.createElement('canvas');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    var context = canvas.getContext('2d');

    // Draw the current video frame on the canvas
    context.drawImage(video, 0, 0, canvas.width, canvas.height);

    // Convert the canvas image to base64 format
    var dataURL = canvas.toDataURL('image/jpeg');
    var base64 = dataURL.replace(/^data:image\/jpeg;base64,/, '');

    // Set the captured photo in the preview element
    preview.src = dataURL;

    // Set the base64 and extension values in the hidden inputs
    photoBase64Input.value = base64;
    photoExtensionInput.value = 'jpeg';
}

// Event listener for the capture button
captureBtn.addEventListener('click', function () {
    capturePhoto();
});
</script> -->



</body>
</html>