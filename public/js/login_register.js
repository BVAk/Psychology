const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

function stateCheck() {

    var e = document.getElementById("type");
    var type = e.options[e.selectedIndex].value;

    if (type == 'client') {
        document.getElementById("group").style.display = "block";
        document.getElementById("age").style.display = "block";
    } else if (type == 'psyсhologic') {
        document.getElementById("group").style.display = "none";
        document.getElementById("age").style.display = "none";
    }

}