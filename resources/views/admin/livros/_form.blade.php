<div class="input-field">
  <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}" required>
  <label>Título</label>
</div>
<div class="input-field">
  <input id="quantidade"  type="text" pattern="[0-9]+" name="quantidade" value="{{isset($registro->quantidade) ? $registro->quantidade : ''}}" required>
  <input type="hidden" name="disponivel" value="{{isset($registro->disponivel) ? $registro->disponivel : ''}}">
  <label>Quantidade</label>
  <div class="div_alert hide">
    <span class="msg_alert">
      o número deve ser maior que zero
    </span>
  </div>
</div>
<div class="file-field  input-field">
  <div class="btn blue">
    <span>Imagem</span>
    <input id="imagem" type="file" name="imagem" required>
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>
@if(isset($registro->imagem))
<div class="input-field">
  <img width="150" src="{{asset($registro->imagem)}}" />
</div>
@endif
<br><br>


