<?php
session_start();
    include '../modelos/config.php';
    include '../modelos/conexion.php';
//consulta para llenar el row
    $query=$pdo->prepare("SELECT * FROM `tblproductos`");
    $query->execute();
    $listaProduc=$query->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProduc);

    $mensaje="";
    if(isset($_POST['btnAccion'])){
        switch($_POST['btnAccion']){

            case 'agregar':
                if(is_numeric($_POST['id'])){
                    $id=$_POST['id'];
                }else{
                    $mensaje.="no ok id incorrecto".$id;
                }
                if(is_string($_POST['nombre'])){
                    $nombre=$_POST['nombre'];
                }else{
                    $mensaje.="no ok nombre incorrecto".$nombre;
                }
                if(is_numeric($_POST['cantidad'])){
                    $cantidad=$_POST['cantidad'];
                }else{
                    $mensaje.="no ok cantidad incorrecto".$cantidad;
                }
                if(is_numeric($_POST['precio'])){
                    $precio=$_POST['precio'];
                }else{
                    $mensaje.="no ok precio incorrecto".$precio;
                }

                if(!isset($_SESSION['CARRITO'])){
                    $producto=array(
                        'id'=>$id,
                        'nombre'=>$nombre,
                        'cantidad'=>$cantidad,
                        'precio'=>$precio
                    );
                    $_SESSION['CARRITO'][0]=$producto;
                    $mensaje="Producto agregado al carrito";
                }else{
                    //debo hacer que guarde mas cantidad
                    $idProductos=array_column($_SESSION['CARRITO'],"id");
                    if(in_array($id,$idProductos)){
                    }else{
                        $numProduc=count($_SESSION['CARRITO']);
                        $producto=array(
                            'id'=>$id,
                            'nombre'=>$nombre,
                            'cantidad'=>$cantidad,
                            'precio'=>$precio
                        );
                        $_SESSION['CARRITO'][$numProduc]=$producto;
                        $mensaje="Producto agregado al carrito";
                    }
                }
            break;

            case 'eliminar':
                if(is_numeric($_POST['id'])){
                    $id=$_POST['id'];
                    
                    foreach($_SESSION['CARRITO'] as $indice=>$producto){
                        if($producto['id']==$id){
                            unset($_SESSION['CARRITO'][$indice]);
                            echo "<script>alert('Elemento borrado');</script>";
                        }
                    }
                }else{
                    $mensaje.="no ok id incorrecto".$id;
                }
            break;

            case 'vaciar':
                    unset($_SESSION['CARRITO']);
            break;         
        }
    }
?>