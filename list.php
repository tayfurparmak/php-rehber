<div class="card mb-1">
  <div class="card-header">Kayıtlar</div>
  <div class="card-body p-0">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Ad</th>
          <th>Telefon</th>
          <th class="text-end">İşlem</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = GetAll();
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
              <td><?php echo $row["id"]; ?></td>
              <td><?php echo $row["ad"]; ?></td>
              <td><?php echo $row["telefon"]; ?></td>
              <td class="text-end">
                <a class="btn btn-primary" href="?duzenleId=<?php echo $row["id"]; ?>">
                  Düzenle
                </a>
                <a onclick="return confirm('Emin misiniz?')" class="btn btn-danger" href="?silId=<?php echo $row["id"]; ?>">
                  Sil
                </a>
              </td>
            </tr>
        <?php
          }
        } else {
          echo "<tr><td class='text-center' colspan='4'>Kayıt yok!</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>