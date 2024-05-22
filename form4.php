<form method="post" enctype="multipart/form-data">
  <div class="fields">
    <div class="input-field">
      <label>Type de piéce :</label>
      <select id="selectItems" name="type_piece">
        <option>CNI (Obligatoire)</option>
        <option>Photo (Obligatoire)</option>
        <option>Certificat de Scolarité (Obligatoire)</option>
      </select>
    </div>
    <div class="input-field">
      <label for="file1">Fichier 1 :</label>
      <input type="file" id="file1" name="file1">
      <label for="file2">Fichier 2 :</label>
      <input type="file" id="file2" name="file2">
      <label for="file3">Fichier 3 :</label>
      <input type="file" id="file3" name="file3">
    </div>
  </div>

</form>