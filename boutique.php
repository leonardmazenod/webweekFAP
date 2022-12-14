<!DOCTYPE html>
<!-- FORMULAIRE BOUTIQUE -->
<html lang="fr">
    <head>
        <!-- Titre de la page -->
        <title>Ajouter une boutique</title>
        <!-- Encodage -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header></header>
        <!-- titre du formulaire -->
        <h1>Ajouter une boutique</h1>
        <!-- Formulaire  -->
        <form method="post" action="mailto:">
            <div class="row g-3">
                <!-- Nom -->
                <div class="col-md-4">
                    <label for="inputname" class="form-label">Nom de la boutique</label>
                    <input type="text" class="form-control" placeholder="Boutique" aria-label="Nom">
                </div>
                <!-- Type -->
                <div class="col-md-4">
                    <label for="selecttype" class="form-label">Type de boutique</label>
                    <select class="form-select" aria-label="selecttype">
                        <option selected disabled>Selectionner le type</option>
                        <option value="1">Textile</option>
                        <option value="2">Sculpture</option>
                        <option value="3">Travail du bois et des plantes</option>
                        <option value="4"></option>
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <!-- Coordonnées Y -->
                <div class="col-md-4">
                    <label for="inputloc" class="form-label">Coordonnées Y</label>
                    <input type="number" class="form-control" placeholder="15.0000" id="inputloc">
                </div>
                <!-- Coordonnées X -->
                <div class="col-md-4">
                    <label for="inputloc2" class="form-label">Coordonnées X</label>
                    <input type="number" class="form-control" placeholder="15.0000" id="inputloc2">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-8">
                    <label for="floatingTextarea">Description de la boutique</label>
                    <textarea class="form-control" placeholder="Decrivez la boutique ici" id="floatingTextarea"></textarea>
                </div>
                <div class="col-md-4">
                    <label for="formFile" class="form-label">Photo de la boutique</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="horaireboutique">Horaire d'ouverture</label>
                    <input type="time" class="form-control" id="horaireboutique">
                </div>
                <div class="col-md-4">
                    <label for="horaireboutique2">Horaire de fermeture</label>
                    <input type="time" class="form-control" id="horaireboutique2">
                </div>
                <div class="col-md-4">
                    <label for="telboutique">Numéro de téléphone</label>
                    <input type="tel" class="form-control" placeholder="07 77 77 77 77" id="telboutique">
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>
    </body>
</html>
