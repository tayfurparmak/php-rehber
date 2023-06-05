<div class="card mb-1">
  <div class="card-header">Düzenle</div>
  <div class="card-body">
    <form action="." method="post">
      <input type="hidden" name="duzenleKaydetId" value="<?= $duzenleData["id"] ?>">
      <div class="input-group mb-3">
        <span class="input-group-text">Ad</span>
        <input name="ad" type="text" class="form-control" value="<?= $duzenleData["ad"] ?>" />
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">Telefon</span>
        <input name="telefon" type="text" class="form-control" value="<?= $duzenleData["telefon"] ?>" />
      </div>
      <div class="text-end">
        <input type="submit" value="Kaydet" class="btn btn-primary" />
      </div>
    </form>
  </div>
</div>