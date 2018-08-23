import sys from "./app_system";
import BulmaModal from "./bulma_modal"
import disableAutoCompleteAll from "./auto_complete"

document.addEventListener('DOMContentLoaded', () => {
    disableAutoCompleteAll();
    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach( el => {
            el.addEventListener('click', () => {

                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });
    }

});

var userModal = new BulmaModal("#user-modal");
var addUserbutton = document.querySelector(".add-new-user");
var saveUserButton = document.querySelector(".save-user");

addUserbutton.addEventListener('click', function () {
    userModal.show();
});

saveUserButton.addEventListener('click', function () {

    var userModalAlert = document.querySelector(".user-modal-alert");
    var userFormAlert = document.querySelector(".user-form-alert");

    var username = document.querySelector("[name='username']").value.trim();
    var email = document.querySelector("[name='email']").value.trim();
    var password = document.querySelector("[name='password']").value.trim();
    var confirmPassword = document.querySelector("[name='confirm-password']").value.trim();
    var isAdmin = document.querySelector("[name='is-admin']").checked;

    var data = new FormData();

    data.append('username', username);
    data.append('email', email);
    data.append('password', password);
    data.append('confirmPassword', confirmPassword);
    data.append('isAdmin', isAdmin);

    if(password !== confirmPassword || !(password.length >= 6 && confirmPassword.length >= 6)) {
        userModalAlert.classList.remove('is-hidden');
        userFormAlert.innerHTML = 'Passwords must be same and minimum lenght must be 6 characters.';

        return false
    } else {
        userModalAlert.classList.add('is-hidden');
        userFormAlert.innerHTML = '';
    }

    if(!username) {
        userModalAlert.classList.remove('is-hidden');
        userFormAlert.innerHTML = 'The name can\'t be blank';

        return false
    } else {
        userModalAlert.classList.add('is-hidden');
        userFormAlert.innerHTML = '';
    }

    if(!email) {
        userModalAlert.classList.remove('is-hidden');
        userFormAlert.innerHTML = 'The e-mail can\'t be blank';

        return false
    } else {
        userModalAlert.classList.add('is-hidden');
        userFormAlert.innerHTML = '';
    }

    fetch(`/users`, {
        method: 'POST',
        body: data,
        headers: new Headers({
            'X-CSRF-TOKEN': sys.csrf
        })
    }).then(resp => resp.json())
        .then(obj => {
            if(obj.error && obj.message) {
                userModalAlert.classList.remove('is-hidden');
                userFormAlert.innerHTML = obj.message;
            } else if (!obj.error && obj.message) {
                userModalAlert.classList.remove('is-hidden');
                userFormAlert.innerHTML = obj.message;

                setTimeout(function () {
                    window.location.reload()
                }, 1500)
            } else {
                userModalAlert.classList.add('is-hidden');
                userFormAlert.innerHTML = '';
            }
        })
        .catch(err => {
        })
});
