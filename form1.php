<form method="post">
  <div class="text">
    <p>
      Bienvenue sur la plateforme d’inscription en ligne de l’OFPPT. En quelques étapes, vous pouvez vous inscrire
      à la formation de votre choix, parmi un large éventail de formations, tous secteurs confondus. Avant
      d’entamer la démarche d’inscription, munissez-vous de quoi noter. <br>
      Assurez-vous aussi de disposer de : <br>
      - Votre Numéro d'identité nationale (CNI). <br>
      - Votre code national de l'étudiant (CNE) ou code MASSAR. <br>
      - La note obtenue au baccalauréat (pour les candidats au niveau Technicien Spécialisé). <br>
      - Un numéro de téléphone portable valide. Ce numéro doit commencer par 06 ou 07. <br>
      - Une adresse électronique (e-mail) valide. <br>
    </p>
  </div>

      <div class="fields">
        <div class="input-field">
          <label>CNI :</label>
          <input type="text" name="cni" value="<?php echo isset($_POST['cni']) ? htmlspecialchars($_POST['cni']) : ''; ?>">
        </div>
        <div class="input-field">
          <label>CNE / Massar :</label>
          <input type="text" name="cne" value="<?php echo isset($_POST['cne']) ? htmlspecialchars($_POST['cne']) : ''; ?>">
        </div>
        <div class="input-field">
          <label>Date de naissance :</label>
          <input type="date" name="date_naiss" value="<?php echo isset($_POST['date_naiss']) ? htmlspecialchars($_POST['date_naiss']) : ''; ?>">
        </div>
        <div class="input-field">
          <label>Nationalité :</label>
          <select name="nationalite" id="id_Nationalite">
            <option value="2" <?php echo (isset($_POST['nationalite']) && $_POST['nationalite'] == '2') ? 'selected' : ''; ?>>Marocain</option>
            <option value="3" <?php echo (isset($_POST['nationalite']) && $_POST['nationalite'] == '3') ? 'selected' : ''; ?>>Afghane</option>
            <option value="4" <?php echo (isset($_POST['nationalite']) && $_POST['nationalite'] == '4') ? 'selected' : ''; ?>>Albanaise</option>
            <option value="5" <?php echo (isset($_POST['nationalite']) && $_POST['nationalite'] == '5') ? 'selected' : ''; ?>>Algérienne</option>
            <option value="6" <?php echo (isset($_POST['nationalite']) && $_POST['nationalite'] == '6') ? 'selected' : ''; ?>>Allemande</option>
            <option value="7" <?php echo (isset($_POST['nationalite']) && $_POST['nationalite'] == '7') ? 'selected' : ''; ?>>Américaine</option>
            <option value="8" <?php echo (isset($_POST['nationalite']) && $_POST['nationalite'] == '8') ? 'selected' : ''; ?>>Andorrane</option>
            <option value="9" <?php echo (isset($_POST['nationalite']) && $_POST['nationalite'] == '9') ? 'selected' : ''; ?>>Angolaise</option>
            <option value="10" <?php echo (isset($_POST['nationalite']) && $_POST['nationalite'] == '10') ? 'selected' : ''; ?>>Argentine</option>
            <option value="11" <?php echo (isset($_POST['nationalite']) && $_POST['nationalite'] == '11') ? 'selected' : ''; ?>>Espagnole</option>
          </select>
        </div>
      </div>

</form>