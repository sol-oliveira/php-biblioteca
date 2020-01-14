<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    Materialize.updateTextFields();
    $(".button-collapse").sideNav();
  });

  $('#btn_atualizar').click(function(){     
   
    $("#imagem").removeAttr('required');
   
    var quantidade = $('input[name="quantidade"]').val();
   
    if(quantidade <= 0){

    $("#quantidade").css('margin', 0);

    $(".div_alert").removeClass('hide');
      
    return false;
    }
  });

  $('#btn_salvar').click(function(){

    var quantidade = $('input[name="quantidade"]').val();

    if(quantidade == 0){     

      $("#quantidade").css('margin', 0);

      $(".div_alert").removeClass('hide');     

       return false;
    }
  }); 
</script>
</body>
</html>

