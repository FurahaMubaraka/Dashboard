function cancell() {
    const formContainer = document.getElementById('onclickedl');
    formContainer.style.display = 'none';
}
function canceldltl() {
    const formContainer = document.getElementById('onclickeddltl');
    formContainer.style.display = 'none';
}
function cancelupdl() {
    const formContainer = document.getElementById('onclickedupdl');
    formContainer.style.display = 'none';
}
function addingl(){
    var form = document.getElementById('onclickedl');
    form.style.display = ( form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}
function deletl(){
    var form = document.getElementById('onclickeddltl');
    form.style.display = ( form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}
function updatel(){
    var form = document.getElementById('onclickedupdl');
    form.style.display = ( form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}
