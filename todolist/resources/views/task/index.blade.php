<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Aplicación Todo List en Laravel</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>

        <main class="container">
            <br>
            <h1>Lista de Tareas</h1>

            <div class="card">
                <div class="card-header">Tareas</div>
                    <div class="card-body">
                    <form action="{{ url('/') }}" method="POST">
        @csrf
        Tarea:
        <br>
        <input type="text" class="form-control" name="task" id="task">
        <br>
        <input type="submit" class="btn btn-primary" value="Agregar Tarea">

    </form>
    <br>
    <div
        class="table responsive-sm table-striped table-hover table-bordered"
    >
        <table
            class="table table"
        >
            <thead>
                <tr>
                    <th scope="col">Acción</th>
                    <th scope="col">Nombre de la Tarea</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr class="">
                    <td>
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Eliminar Tarea">
                        </form>
                    </td>
                    <td>{{ $task->task }}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    

                </div>
                <div class="card-footer text-muted"></div>
            </div>
            

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


