$afficherFormulaire = true;
const HTTP_UNPROCESSABLE_ENTITY = 422;
if (!empty($_GET)){
    echo "<pre>"; print_r($_GET); echo "</pre>";
    //if( !isset($_GET["prenom"]) || !isset($_GET["regime"])) {
    //    header('Location: _index.php'); die();}
    $erreurs = [];
    if(!isset($_GET["prenom"])) {
        $erreurs[] = 'Veuillez indiquer votre prénom';
    }
    if(!isset($_GET["regime"])) {
        $erreurs[] = 'Veuillez indiquer votre régime alimentaire';
    }
    $prenom = $_GET["prenom"] ?? '';
    $regime = $_GET["regime"] ?? '';
    
    if(! in_array($regime,['vegi','cani','paleo'],true)) {      
        http_response_code(HTTP_UNPROCESSABLE_ENTITY);
        die();
    }
    $afficherFormulaire = count($erreurs) > 0;
}