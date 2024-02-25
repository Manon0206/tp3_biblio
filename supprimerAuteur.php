<?php include "header.php";
include "connexionpdo.php";
$num=$_GET['num'];

    $req=$monPdo->prepare("delete from auteur where num = :num");
    $req->bindParam(':num', $num);
    $nb=$req->execute();

echo '<div class="container mt-5">';
echo '<div class="row">
       <div class="col mt-5">';

if($nb == 1) {
    echo '<div class="alert alert-success" role="alert">
        L\'auteur a bien été supprimée  </div>';
}else{
    echo '<div class="alert alert-danger" role="alert">
        L\'auteur n\'a pas été supprimée  </div>';
}
?>
<a href="listeAuteurs.php" class="btn btn-dark"> Revenir à la liste des auteurs </a>
</div>  


<?php include "footer.php";

?>
