function cancelt() {
    const formContainer = document.getElementById('onclickedt');
    formContainer.style.display = 'none';
}
function canceldltt() {
    const formContainer = document.getElementById('onclickeddltt');
    formContainer.style.display = 'none';
}
function cancelupdt() {
    const formContainer = document.getElementById('onclickedupdt');
    formContainer.style.display = 'none';
}
function addingt(){
    var form = document.getElementById('onclickedt');
    form.style.display = ( form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}
function delett(){
    var form = document.getElementById('onclickeddltt');
    form.style.display = ( form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}
function updatet(){
    var form = document.getElementById('onclickedupdt');
    form.style.display = ( form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}
