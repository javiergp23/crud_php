<h1>Lista de usuarios</h1>
<?php 
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){   
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Nombre</th>";
            print "<th>Email</th>";
            print "<th>Fecha de nacimiento</th>";
            print "<th>Acciones</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
                print "<td>".$row->id."</td>";
                print "<td>".$row->nombre."</td>";
                print "<td>".$row->email."</td>";
                print "<td>".$row->fecha_nac."</td>";
                print "<td>
                        <button class='btn btn-success'>Editar</button>
                        <button class='btn btn-danger'>Eliminar</button>
                    </td>";
            print "</tr>";
        
        }
        print "</table>";
    }else {
        print "<p class='alert alert-danger'> No encontramos resultados!</p>";
    }

?>