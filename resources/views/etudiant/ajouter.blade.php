<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container ">
        <div class=" row ">
            <div>
                <h1>Ajouter un etudiant -LARAVEL 10</h1>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="Nom" class="form-label"> Nom</label>
                        <input type="text" class="form-control" id="Nom" name="nom">

                    </div>
                    <div class="form-group">
                        <label for="Prenom"> Prenom</label>
                        <input type=" text" class="form-control" id="Prenom" name="Prenom">

                    </div>
                    <div class="form-group">
                        <label for="Classe"> Classe</label>
                        <input type=" text" class="form-control" id="Classe" name="classe">

                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Ajouter un etudiant </button>

                    <br> </br>
                    <a href="/etudiant" class="btn btn-danger">Revenir a la liste etudiants</a>


                </form>

            </div>


        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>