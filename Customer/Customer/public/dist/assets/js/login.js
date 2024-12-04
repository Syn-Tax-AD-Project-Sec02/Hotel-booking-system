const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


    document.getElementById('role').addEventListener('change', function() {
        var role = this.value;
        var matricField = document.getElementById('matric-staff-number');

        // Show matric field for 'Student' or 'Staff', hide for 'Public'
        if (role === 'Student' || role === 'Staff') {
            matricField.style.display = 'inline';
        } else {
            matricField.style.display = 'none';
        }
    });
