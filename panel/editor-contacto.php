<div class="row bg-light border rounded w-100 mx-auto p-3 mt-5">
            <div class="col">
                <form action="editor.php?id=<?php echo $consulta['id']?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="cont-originalimg">Imagen original</label>
                        <div class="w-100 rounded overflow-hidden" style="height:200px;">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($consulta['imagen']);?>" class="card-img" alt="...">
                            <input class="btn btn btn-light position-absolute border-dark btns" style="top:175px; right:35px;" type="submit" value="Descargar imagen" name="btnDescargar">
                        </div>
                    </div>    
                    <div class="form-group">
                        <label for="cont-fileinput">Nueva imagen</label>
                        <input type="file" name="imagen" id="imagen" class="form-control h-auto py-5 pl-5"> 
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                        <div class="bg-light w-100 p-3 mt-2 text-center">
                          <img src="img/infoimagen.png" class="d-inline mb-1" style="width:90px;" alt="">
                          <small id="descripcionhp" class="form-text text-muted">Se recomienda usar imagenes a la medida, el sobrante no sera visible</small>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="id">Identificador</label>
                        <input type="text" class="form-control" id="id" name="n-id" value="<?php echo $consulta['id'];?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="n-titulo" value="<?php echo $consulta['titulo'];?>">
                        <small id="titulohp" class="form-text text-muted">Opcional</small>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="n-descripcion"><?php echo $consulta['descripcion'];?></textarea>
                        <small id="descripcionhp" class="form-text text-muted">Opcional</small>
                    </div>
                    <div class="float-right mb-0">
                        <button onclick="location.href='panel.php'" type="button" class="btn btn-secondary">Cancelar</button>
                        <input class="btn btn-danger" type="submit" value="Eliminar slider" name="btnEliminar">
                        <input class="btn btn-primary" type="submit" value="Guardar edicion" name="btnEditar">
                    </div>
                </form>
            </div>
        </div>
        