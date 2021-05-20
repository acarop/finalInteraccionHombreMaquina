<?php
    session_start();
    include "site-config/environment.php";
    $title = "Login | YourWebsite";
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        include "modulos/head.php";
    ?>

    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">

    </head>
    <body>
        <?php
            include "modulos/header.php";
        ?>

        <div class="container-fluid">
            <div class="row">
            
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <h4>Sube un nuevo producto</h4>
                                </div>
                            
                                
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-8">
                                    <form>
                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Ingresa el título:</label> 
                                        <div class="col-12">
                                        <input id="tituloProducto" name="tituloProducto" placeholder="Ingresa el título" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Precio:</label> 
                                        <div class="col-12">
                                        <input id="precioProducto" name="precioProducto" placeholder="$0000" class="form-control here" required="required" type="number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="textarea" class="col-12 col-form-label">Ingresa una descripción</label> 
                                        <div class="col-12">
                                        <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div> 
                                    </form>

                                    <input type="submit" value="Agregar" class="boton boton-verde">

                                    
                                </div>
                                <div class="col-md-4 ">
                                    <div class="card mb-3" style="max-width: 18rem;">
                                        <div class="card-header bg-light ">Publicar</div>
                                        <div class="card-body">
                                        
                                        </div>
                                        <div class="card-footer bg-light">
                                            <button type="button" class="btn btn-outline-secondary btn-sm">Previa</button>
                                            <button type="button" class="btn btn-info btn-sm">Guardar</button>
                                            <button type="button" class="btn btn-primary btn-sm">Publicar</button>
                                        </div>
                                        </div>
                                    <div class="card mb-3" style="max-width: 18rem;">
                                    
                                    
                                    <div class="card mb-3" style="max-width: 18rem;">
                                        <div class="card-header bg-light ">Categorías</div>
                                        <div class="card-body">
                                            <form>
                                            <div class="form-group row">
                                                <div class="col-9">
                                                <input id="tags" name="tags" placeholder=" " required="required" class="form-control here" type="text">
                                                </div>
                                                <div class=" col-2">
                                                <button name="submit" type="submit" class="btn btn-light">Nueva</button>
                                                </div>
                                                
                                            </div> 
                                            </form>
                                            <form>
                                            <div class="form-group row">
                                                <label for="select" class="col-12 col-form-label">Selecciona una categoría</label> 
                                                <div class="col-8">
                                                <select id="select" name="select" class="custom-select" required="required">
                                                    <option value="rabbit">Seleccionar</option>
                                                    <option value="rabbit">Ventas</option>
                                                    <option value="duck">Educación</option>
                                                    <option value="fish">Foro</option>
                                                    <option value="fish">Blog</option>
                                                    <option value="fish">Viajes</option>
                                                </select>
                                                </div>
                                            </div> 
                                            </form>
                                        </div>
                                        
                                        </div>
                                    <div class="card mb-3" style="max-width: 18rem;">
                                        <div class="card-header bg-light ">Imagen</div>
                                        <div class="card-body">
                                            

                                        </div>
                                        <div class="card-footer bg-light">
                                            <a href="#">Sube una imagen</a>
                                        </div>
                                        </div>    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <?php
        include "modulos/footer.php";
    ?>     
</html>