<div class="input-field">
  <input type="text" name="name" value="{{isset($registro->name) ? $registro->name : ''}}" require>
  <label>Nome</label>
</div>

<div class="input-field">
  <input type="email" name="email" value="{{isset($registro->email) ? $registro->email : ''}}" require>
  <label>Email</label>
</div>

<div class="input-field">
  <input type="password" name="password" value="" require>
  <label>Senha</label>
</div>

