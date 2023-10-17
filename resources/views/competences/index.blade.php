<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link bootstrap 5 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <title>gestion Competences</title>
</head>
<body class="bg-light">

    <main class="container mt-5">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Gestion des Compétences</h2>
                        <div class="card-tools">
                            <a href="{{ route("competences.create")}}" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if (session('danger'))
                        <div class="alert alert-danger text-center">
                            {{ session('danger') }}
                        </div>
                    @endif
                    
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th >Référence</th>
                                    <th >Code</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th style="width: 12%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($competences as $competence)                                    
                                    <tr>
                                        <td>{{$competence->Reference}}</td>
                                        <td>{{$competence->Code}}</td>
                                        <td>{{$competence->Name}}</td>
                                        <td>{{$competence->Description}}</td>

                                        <td class="row">
                                            <a href="{{ route('competences.edit', ['id' => $competence->id])}}" class="btn btn-primary col-md-4"><i class="fas fa-edit"></i> </a>
                                            <form action="{{ route('competences.destroy', ['id' => $competence->id])}}" method="POST" class="col-md-6">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                <!-- en skills -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

            <!-- main Js -->
            <script src="./asset/JS/main.js"></script>
            <!-- jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <!-- Bootstrap 5 JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
    {{-- LINK BOOTSTRAP 5 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>