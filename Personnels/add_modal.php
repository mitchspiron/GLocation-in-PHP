
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background: #004d80;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="color: white;">Formulaire des nouveaux personnels</h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            <form method="POST" action="add.php">
                        <label class="w3-label w3-left">Nom et prénom</label>
                        <input class="w3-input w3-border w3-round-large" type="text" name="Nom" placeholder="Entrez votre nom et prénom">

                        <label class="w3-label w3-left">Date de naissance</label>
                        <input class="w3-input w3-border w3-round-large" type="date" name="Naissance" placeholder="Entrez votre date de naissance">

                        <label class="w3-label w3-left">Téléphone</label>
                        <input class="w3-input w3-border w3-round-large" name="Tel" type="text" placeholder="Entrez votre numéro de téléphone">

                        <label class="w3-label w3-left">Adresse</label>
                        <input class="w3-input w3-border w3-round-large" name="Adresse" type="text" placeholder="Entrez votre adresse">

                        <label class="w3-label w3-left">Poste occupée</label>
                        <input class="w3-input w3-border w3-round-large" name="Poste" type="text" placeholder="Quelle est votre poste ?">
            </div> 
                
            </div>
            <div class="modal-footer" style="background: #004d80;">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Enregistrer</a>
            </form>
            </div>
        </div>
    </div>
</div>
