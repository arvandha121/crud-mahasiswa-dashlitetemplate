document.addEventListener('DOMContentLoaded', function() {
    var editForm = document.getElementById('editForm');

    editForm.addEventListener('submit', function(event) {
        var form = event.target;
        var hasError = false;

        if (!form.nama.value) {
            document.getElementById('namaAlert').innerText = 'Name field must be filled out.';
            hasError = true;
        } else {
            document.getElementById('namaAlert').innerText = '';
        }

        if (!form.email.value) {
            document.getElementById('emailAlert').innerText = 'Email field must be filled out.';
            hasError = true;
        } else {
            document.getElementById('emailAlert').innerText = '';
        }

        if (!form.password.value) {
            document.getElementById('passwordAlert').innerText = 'Password field must be filled out.';
            hasError = true;
        } else {
            document.getElementById('passwordAlert').innerText = '';
        }

        if (hasError) {
            event.preventDefault();
        }
    });
});