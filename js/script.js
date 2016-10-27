//Ejecuto validate
$.validate();

function submitForm(){
  $('#loginForm').submit();
}


$(document).ready(function(){
  $('#registers-table').DataTable();

  $('.dataTables_filter input').addClass('form-control form-control-xs');
  $('#registers-table_length select').addClass('form-control form-control-xs');
  $('#registers-table_length select').css('width', '75px');
});


$(document).on('click', '.switch-lang a', function(e){
  e.preventDefault();
  $('.switch-lang a').removeClass('active');
  $(this).addClass('active');
})
