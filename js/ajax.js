var url = document.location.href;

$(document).on('submit', '#form', function(e){
  e.preventDefault();
  var dataForm = new FormData(document.getElementById('form'));

  dataForm.append('insert', true);

  url = url.replace("admin/", "");

  $.ajax({
    url: url + 'php/actions.php',
    data: dataForm,
    processData: false,
    contentType: false,
    type: 'POST',
    success: function(data){
      if(data == 'Se registro correctamente.'){
        $('.result').html('<div class="alert alert-success">'+data+'</div>');
      }else {
        $('.result').html('<div class="alert alert-danger">'+data+'</div>');
      }
    }
  });
});
