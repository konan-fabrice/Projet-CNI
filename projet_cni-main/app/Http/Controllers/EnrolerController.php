<?php
namespace App\Http\Controllers;

use App\Models\Enroler;
//use App\Http\Controllers\Controller\PereController;
//use App\Http\Controllers\Controller\PaysController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnrolerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $pereController = new PereController();
        $pere = $pereController->pere();
        $mereController = new MereController();
        $mere=$mereController->mere();
        $professionController= new ProfessionController();
        $profession=$professionController->index1();
        $paysController = new PaysController();
        $pays = $paysController->index1(); 
        $sexe = $paysController->index2();
        return view('enrolement', compact('pere', 'pays', 'sexe','mere','profession'));
     /* $pere = $this->pere(); 
      $pays = $this->indx1(); 
      $sexe = $this->indx2();
      return view('enrolement', compact('pere', 'pays', 'sexe'));*/
      
    }

    public function affichage_renouvellement()
    {       
        $affichage= Enroler::all();
        return view('renouvellement', compact('affichage'));
    }

    public function affichage_impression()
    {
      
        $affichage= Enroler::all();
        return view('impression', compact('affichage'));
    }
    public function affichage_demande()
    {
      
        $affichage= Enroler::all();
        return view('demande', compact('affichage'));
    }
    public function affichage_retrait()
    {
      
        $affichage= Enroler::all();
        return view('retrait', compact('affichage'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)

    {
        
        $enroler = new Enroler();
        $enroler->nom=request('nom');
        $enroler->prenom=request('prenom');
        $enroler->datenaissance=request('datenaissance');
        $enroler->heurenaissance=request('heurenaissance');
        $enroler->lieunaissance=request('lieunaissance');
           // Récupérer le fichier image
   $photo = $request->file('lienphoto');

    // Vérifier si un fichier a été téléchargé
    if ($photo) {
        // Récupérer le nom original du fichier
        $nomImage = $photo->getClientOriginalName();

        // Déplacer le fichier vers le dossier de stockage approprié
        $photo->move(public_path('enrolant_images'), $nomImage);

        // Enregistrer le nom de l'image dans la base de données
        $enroler->lienphoto = $nomImage;
    } else {
        // Utiliser un avatar par défaut si aucune image n'est téléchargée
        $enroler->lienphoto = 'moi.jpg'; // Remplacez 'avatar.jpg' par le nom de votre fichier d'avatar par défaut
    }
    $empreinte = $request->file('lienempreinte');

    // Vérifier si un fichier a été téléchargé
    if ($empreinte) {
        // Récupérer le nom original du fichier
        $nomEmpreinte = $empreinte->getClientOriginalName();

        // Déplacer le fichier vers le dossier de stockage approprié
        $empreinte->move(public_path('enrolant_empreintes'), $nomEmpreinte);

        // Enregistrer le nom de l'image dans la base de données
        $enroler->lienempreinte = $nomEmpreinte;
    } else {
        // Utiliser un avatar par défaut si aucune image n'est téléchargée
        $enroler->lienempreinte = 'example.png'; // Remplacez 'avatar.jpg' par le nom de votre fichier d'avatar par défaut
    }

    $signature = $request->file('liensignature');

    // Vérifier si un fichier a été téléchargé
    if ($signature) {
        // Récupérer le nom original du fichier
        $nomSignature = $signature->getClientOriginalName();

        // Déplacer le fichier vers le dossier de stockage approprié
        $signature->move(public_path('enrolant_signatures'), $nomSignature);

        // Enregistrer le nom de l'image dans la base de données
        $enroler->liensignature = $nomSignature;
    } else {
        // Utiliser un avatar par défaut si aucune image n'est téléchargée
        $enroler->liensignature = 'example.png'; // Remplacez 'avatar.jpg' par le nom de votre fichier d'avatar par défaut
    }
/*
 // Vérifier si une image est envoyée depuis la caméra en encodage base64
 if ($request->has('photo_base64')) {
    $imageData = $request->input('photo_base64');
    $extension = $request->input('photo_extension');
    $nomImage = 'image_' . uniqid() . '.' . $extension;
    $path = public_path('enrolant_images') . '/' . $nomImage;
    $data = base64_decode($imageData);
    file_put_contents($path, $data);
    $enroler->lienphoto = $nomImage;
} else { // Utiliser un avatar par défaut si aucune image n'est téléchargée
    $enroler->lienphoto = 'moi.jpg'; // Remplacez 'avatar.jpg' par le nom de votre fichier d'avatar par défaut
} */
        $enroler->nni=request('nni');
        $enroler->taille=request('taille');
        $enroler->visa=request('visa');
        $enroler->signataire=request('signataire');
        $enroler->dateemission=request('dateemission');
        $enroler->dateexpiration=request('dateexpiration');
        $enroler->dateenrolement=request('dateenrole');
        $enroler->telephone=request('telephone');
        $enroler->idstatut=1;
        $enroler->idpays=request('idpays');
        $enroler->idsexe=request('idsexe');
        $enroler->idprofession=request('idprofession');
        $enroler->idmere=request('idmere');
        $enroler->idpere=request('idpere');
        $enroler->save();
        return redirect('impression');
    }

   /* public function countByStatut()
    {
        $statusCounts = Enroler::select('statut', DB::raw('count(*) as total'))
            ->groupBy('statut')
            ->get();
        
        // Faire quelque chose avec les résultats
        
        return view('demande.count', compact('statusCounts'));
    }*/
    public function count()
    {
        $enrolementCount = Enroler::count();
        
        return view('accueil', compact('enrolementCount'));
    }
    public function search(Request $request)
{
    $keyword = $request->input('keyword');

    $results = DB::table('enrolers')
        ->leftJoin('sexes', 'enrolers.idsexe', '=', 'sexes.idsexe')
        ->when($keyword, function ($query, $keyword) {
            return $query->where(function ($query) use ($keyword) {
                $query->where('enrolers.idenrolant', 'LIKE', "%$keyword%")
                    ->orWhere('enrolers.nom', 'LIKE', "%$keyword%")
                    ->orWhere('enrolers.prenom', 'LIKE', "%$keyword%");
                    // Ajoutez plus de champs ici, selon vos besoins
            });
        })
        ->orWhereNull('enrolers.idenrolant')
        ->select('enrolers.*', 'sexes.libellesexe')
        ->get();

    return view('demande', compact('results'));
}

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   /* public function store(Request $request)
    {
        //
    }*/

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enroler  $enroler
     * @return \Illuminate\Http\Response
     */
    public function show(Enroler $enroler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enroler  $enroler
     * @return \Illuminate\Http\Response
     */
    public function edit(Enroler $enroler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enroler  $enroler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enroler $enroler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enroler  $enroler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enroler $enroler)
    {
        //
    }
}
