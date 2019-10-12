
<?php

   if(isset($_GET['action']) && $_GET['action']=="add"){ 
          
        $id=intval($_GET['id']); 
          
        if(isset($_SESSION['carrito'][$id])){ 
              
            $_SESSION['carrito'][$id]['cantidad']++; 
            
              
        }else{ 
              
            $sql_s="SELECT * FROM producto 
                WHERE id_producto={$id}"; 
            $query_s=mysqli_query($conexion,$sql_s); 
            if(mysqli_num_rows($query_s)!=0){ 
                $fila_s=mysqli_fetch_array($query_s); 
                  
                $_SESSION['carrito'][$fila_s['id_producto']]=array( 
                        "cantidad" => 1, 
                        "precio" => $fila_s['precio'] 
                    ); 
                  
                  
            }else{ 
                  
                $mensaje="el id del producto es invalido!"; 
                  
            } 
              
        } 
        
        
    } 


?>

<h1>Lista de Productos</h1>    
<?php

if (isset($mensaje)) {
    echo "<p>$mensaje</p>";
}

?>


        <table>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Accion</th>
            </tr>

            <?php

            $consulta="select* from producto order by nombre ASC ";

            $query=mysqli_query($conexion,$consulta);
            
            
        

            while($fila=mysqli_fetch_assoc($query))
            {

            ?>
                <tr>
                    <td><?php echo $fila['nombre']?></td>
                    <td><?php echo $fila['descripcion']?></td>
                    <td><?php echo $fila['precio']?></td>
                    <td><a href="indexProducto-view.php?page=productos&action=add&id=<?php echo $fila['id_producto'] ?>">Agregar</a></td>

        </tr>


                </tr>

            <?php
            
            }

            ?>
            

        </table>