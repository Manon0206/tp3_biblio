<?php include "header.php";
include "connexionpdo.php";
$req=$monPdo->prepare("select * from auteur");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesAuteurs=$req->fetchAll();
?>



<div class="container mt-5">

    <div class="row pt-3">
       <div class="col-9"><h2>Liste des auteurs</h2></div>
       <div class="col-3"><a href="formAuteurs.php?action=Ajouter" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer un auteur</a></div>
    </div>  

<table class="table table-hover table-striped">
<thead>
  <thead class="thead-dark">
    <tr class="d-flex">
    <th scope="col" class="col-md-3">Numéro</th>
    <th scope="col" class="col-md-3">Nom</th>
    <th scope="col" class="col-md-3">Prénom</th>
    <th scope="col" class="col-md-3">Actions</th>
    </tr>
  </thead>
  <tbody>
<?php
    foreach($lesAuteurs as $auteur){
        echo "<tr class='d-flex'>";
        echo "<td class='col-md-3'>$auteur->num</td>";
        echo "<td class='col-md-3'>$auteur->nom</td>";
        echo "<td class='col-md-3'>$auteur->prenom</td>";
        echo "<td class='col-md-3'>
        <a href='formAuteurs.php?action=Modifier&num=$auteur->num' class='btn btn-primary'><i class='fas fa-pen'></i></a>
        <a href='supprimerAuteur.php?num=$auteur->num' class='btn btn-danger'><i class='fas fa-trash-alt'></i></a>
    </td>";
    echo "</tr>";
    }
?>
  </tbody>
</table>


</div>  
</main>

<?php include "footer.php";

?>
