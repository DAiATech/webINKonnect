
<!--  descricao, estilo, tatuadorId -->
<link rel="stylesheet" href="../views/css/style.css">
<div class="container">
<form action="../controllers/criarpostagem.php" enctype="multipart/form-data" method="post">

    <h3 class="p-3 menu-label"> Cadastrar</h3>

    <label class="form-label">Descição</label>
    <input class="form-control p-3" type="text" name="descricao" >

    <label class="form-label">Estilo</label>
    <input class="form-control p-2" type="text" name="estilo"> <br>
    <br>

    <input type="hidden" name="MAX_FILE_SIZE" value="99999999">
    <input type="file" name="arquivo" multiple="" />
    <br>
    <input class="btn btn-success mt-3 ms-1" type="submit" value="Cadastrar">

</form>
</div>