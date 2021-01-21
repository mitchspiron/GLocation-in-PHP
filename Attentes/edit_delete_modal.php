<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background: #003329;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="color: white;">Modifier cette liste d'attente</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Nom" value="<?php echo $row['Nom']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Téléphone:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Tel" value="<?php echo $row['Tel']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Université:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Univ" value="<?php echo $row['Univ']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer" style="background: #003329;">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Modifier</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background: #661400;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="color: white;">Retirer un résidant</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sûre de vouloir retirer cette personne de la liste d'attente ?</p>
				<h2 class="text-center"><?php echo $row['Nom']; ?></h2>
			</div>
            <div class="modal-footer" style="background: #661400;">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Oui</a>
            </div>

        </div>
    </div>
</div>