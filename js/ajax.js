var url = document.location.href;

$(document).on('submit', '#form', function(e){
  e.preventDefault();

  var dataForm = new FormData(document.getElementById('form'));

  url = url.replace("admin/", "");

  $.ajax({
    url: url + '/php/actions.php',
    data: dataForm,
    processData: false,
    contentType: false,
    type: 'POST',
    success: function(data){
      $('.result').html(data);
    }
  });
});
