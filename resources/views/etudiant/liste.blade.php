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

    <div class="container text-center">
        <div class=" row ">
            <div>
                <h1>CRUD IN LARAVEL 10</h1>
                <hr>
                <a class="btn btn-primary" href="/ajouter">Ajouter Etudiant</a>
                <hr>
                <table class="table ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>classe</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mohamed</td>
                            <td>Negzaoui</td>
                            <td>2éme ingenieurie</td>
                            <td>
                                <a href="#" class="btn btn-info">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>salma</td>
                            <td>Negzaoui</td>
                            <td>2éme</td>
                            <td>
                                <a href="#" class="btn btn-info">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>ibtissem</td>
                            <td>Negzaoui</td>
                            <td>2éme ingenieurie</td>
                            <td>
                                <a href="#" class="btn btn-info">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>


                </table>
            </div>


        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>