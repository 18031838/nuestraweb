<?php
    include '../controladores/ctrcafes.php';
    include '../modelos/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/navboos.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>ElCafedetusOjos</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark" style="background-color: #99582A; ">
            <img src="" alt="" class="logo">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home"
                                    width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFE6A7"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </div>
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./cafes.php">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-brand-snapseed" width="56" height="56"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFE6A7" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M8.152 3.115a.46 .46 0 0 0 -.609 0c-2.943 2.58 -4.529 5.441 -4.543 8.378c0 2.928 1.586 5.803 4.543 8.392a.46 .46 0 0 0 .61 0c2.957 -2.589 4.547 -5.464 4.547 -8.392c0 -2.928 -1.6 -5.799 -4.548 -8.378z" />
                                    <path
                                        d="M8 20l12.09 -.011c.503 0 .91 -.434 .91 -.969v-6.063c0 -.535 -.407 -.968 -.91 -.968h-7.382" />
                                </svg>
                            </div>
                            Cafés
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./snack.html">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cookie" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFE6A7" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M8 13v.01" />
                                    <path d="M12 17v.01" />
                                    <path d="M12 12v.01" />
                                    <path d="M16 14v.01" />
                                    <path d="M11 8v.01" />
                                    <path d="M13.148 3.476l2.667 1.104a4 4 0 0 0 4.656 6.14l.053 .132a3 3 0 0 1 0 2.296c-.497 .786 -.838 1.404 -1.024 1.852c-.189 .456 -.409 1.194 -.66 2.216a3 3 0 0 1 -1.624 1.623c-1.048 .263 -1.787 .483 -2.216 .661c-.475 .197 -1.092 .538 -1.852 1.024a3 3 0 0 1 -2.296 0c-.802 -.503 -1.419 -.844 -1.852 -1.024c-.471 -.195 -1.21 -.415 -2.216 -.66a3 3 0 0 1 -1.623 -1.624c-.265 -1.052 -.485 -1.79 -.661 -2.216c-.198 -.479 -.54 -1.096 -1.024 -1.852a3 3 0 0 1 0 -2.296c.48 -.744 .82 -1.361 1.024 -1.852c.171 -.413 .391 -1.152 .66 -2.216a3 3 0 0 1 1.624 -1.623c1.032 -.256 1.77 -.476 2.216 -.661c.458 -.19 1.075 -.531 1.852 -1.024a3 3 0 0 1 2.296 0z" />
                                  </svg>
                            </div>
                            Snacks
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" 
                                    width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFE6A7" fill="none" 
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 17h-11v-14h-2" />
                                    <path d="M6 5l14 1l-1 7h-13" />
                                  </svg>
                            </div>
                            Carrito(
                                <?php
                                    echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);    
                                ?>
                            )
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aboutUs.html">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-keyframe"
                                    width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFE6A7"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M13.225 18.412a1.595 1.595 0 0 1 -1.225 .588c-.468 0 -.914 -.214 -1.225 -.588l-4.361 -5.248a1.844 1.844 0 0 1 0 -2.328l4.361 -5.248a1.595 1.595 0 0 1 1.225 -.588c.468 0 .914 .214 1.225 .588l4.361 5.248a1.844 1.844 0 0 1 0 2.328l-4.361 5.248z" />
                                </svg>
                            </div>
                            Sobre Nosotros
                        </a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" style="color: #3c2416; border-color: #3c2416;"
                        type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <h3>Lista del carrito</h3>
        <?php
            if(!empty($_SESSION['CARRITO'])) {
        ?>

        <table class="table table-dark table-bordered text-center table-striped">
            <tbody>
                <tr>
                    <th with="40%">Descripción</th>
                    <th with="15%">Cantidad</th>
                    <th with="20%">Precio</th>
                    <th with="20%">Total</th>
                    <th with="5%">Opciones</th>
                </tr>
                <?php 
                    $total=0;
                    foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
                <tr>
                    <td with="40%"><?php echo $producto['nombre']?></td>
                    <td with="15%"><?php echo $producto['cantidad']?></td>
                    <td with="20%"><?php echo $producto['precio']?></td>
                    <td with="20%"><?php echo number_format($producto['precio']*$producto['cantidad'],2)?></td>
                    <td with="5%">
                        <form action="" method="post">
                            <input type="hidden" name ="id" id="id" value="<?php echo $producto['id'];?>">
                            <button class="btn btn-danger" type="submit" name="btnAccion" id="btnAccion" value="eliminar">Eliminar</button>
                        </form> 
                    </td>
                </tr>
                <?php 
                    $total=$total+($producto['precio']*$producto['cantidad']);
                    }?>
                <tr>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-light" name="btnAccion" value="vaciar" id="btnAccion" type="submit">Vaciar Carrito</button></td>
                        </form>
                    <td colspan="2" align="right"><h4>Total</h4></td>
                    <td align="right"><h4>$<?php echo number_format($total,2)?></h4></td>
                    <td></td>
                </tr>
                
            </tbody>

        </table>

        <?php }else{ ?>

            <div class="alert alert-dark">
                NO HAY PRODUCTOS EN EL CARRITO
            </div>

        <?php }?>
    </main>
</body>
</html>