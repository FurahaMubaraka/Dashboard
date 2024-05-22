function cancel() {
    const formContainer = document.getElementById('onclicked');
    formContainer.style.display = 'none';
}
function canceldlt() {
    const formContainer = document.getElementById('onclickeddlt');
    formContainer.style.display = 'none';
}
function cancelupd() {
    const formContainer = document.getElementById('onclickedupd');
    formContainer.style.display = 'none';
}
function adding(){
    var form = document.getElementById('onclicked');
    form.style.display = ( form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}
function delet(){
    var form = document.getElementById('onclickeddlt');
    form.style.display = ( form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}
function update(){
    var form = document.getElementById('onclickedupd');
    form.style.display = ( form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}
