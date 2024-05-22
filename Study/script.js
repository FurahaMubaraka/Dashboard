function add(){
    var form = document.getElementById('adding');
    form.style.display = ( form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}
function cancel() {
    const formContainer = document.getElementById('adding');
    formContainer.style.display = 'none';
}