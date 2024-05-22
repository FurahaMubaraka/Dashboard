function view(){
    var form = document.getElementById('onclicked');
    form.style.display = ( form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}
function reset() {
    const formContainer = document.getElementById('onclicked');
    formContainer.style.display = 'none';
}