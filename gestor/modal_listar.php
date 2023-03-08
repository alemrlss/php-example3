
<button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm">Ver todos los Archivos</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <?php include('./listar.php')?>
    </div>
  </div>
</div>





<button type="button" href="#" class="btn btn-danger" onclick="ir()">Vaciar Carpeta</button>

<script>
  function ir(){
   window.location="vaciar.php";
}


</script>
