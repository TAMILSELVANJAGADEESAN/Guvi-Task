// register.js
$(document).ready(function() {
    $('register.html').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'register.php',
            data: formData,
            success: function(response) {
                alert(response);
            }
        });
    });
});

// login.js
$(document).ready(function() {
    $('login.html').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: formData,
            success: function(response) {
                if (response.trim() == 'Login successful') {
                    window.location.href = 'update.html';
                } else {
                    $('error').text('Invalid email or password');
                }
            }
        });
    });
});
