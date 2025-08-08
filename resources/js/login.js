document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('login-form');
    const signUpForm = document.getElementById('sign-up-form');
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');

    signUpButton.addEventListener('click', function (e) {
        e.preventDefault();
        loginForm.classList.add('hidden');
        signUpForm.classList.remove('hidden');
    });

    signInButton.addEventListener('click', function (e) {
        e.preventDefault();
        signUpForm.classList.add('hidden');
        loginForm.classList.remove('hidden');
    });
});