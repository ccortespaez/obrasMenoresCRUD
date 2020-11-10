function validar(){
var texto = document.getElementById('descripcion-txt').value;
  if (texto.length === 0) {
    alert('Ingrese una descripcion');
    break;
  }else{
    submit();
  }
}
