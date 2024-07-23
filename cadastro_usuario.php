<?php include ("templates/header.php"); ?>


<p>Preencha os campos abaixo para realizar cadastro na plataforma </p>

<form action="processa_cadastro.php" method="POST">
    <div class="mb-3">
        <label for="NomeUsuario" class="form-label">Insira Nome de Usuario *</label>
        <input type="text" class="form-control" id="NomeUsuario" placeholder="Nome" name="nomeUsuario" required>
    </div>
    <div class="mb-3">
        <label for="EmailUsuario" class="form-label">Insira email de Usuario *</label>
        <input type="email" class="form-control" id="EmailUsuario" placeholder="email@.com" name="emailUsuario"
            required>
    </div>
    <div class="mb-3">
        <label for="SenhaUsuario" class="form-label">Insira senha de Usuario *</label>
        <small> Minimo de 8 caracteres </small>
        <input type="password" class="form-control" id="SenhaUsuario" placeholder="" name="senhaUsuario" minlength="8"
            required>
    </div>
    <div class="mb-3">
        <input type="submit" value="Enviar" class="btn outline btn-success">
    </div>

</form>

<?php include ("templates/footer.php"); ?>