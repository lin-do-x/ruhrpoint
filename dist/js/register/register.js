let switch_pass = document.getElementById('switch-pass');
let passInput = document.getElementById('password');
    switch_pass.addEventListener('click', function() {

        if(passInput.type === 'text') {
            passInput.type = 'password';
        }else if(passInput.type === 'password') {
            passInput.type = 'text';
        }
        
    })

document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    let username = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let accept_me = document.getElementById('accept-me');
    let accept_me_text = document.getElementById('accept-me-text');
    let accept_me_a = document.getElementById('accept-me-a');
    let u_error = document.getElementById('u_error');
    let e_error = document.getElementById('e_error');
    let p_error = document.getElementById('p_error');

    let errors = {};

    // Validate username
    if (!/^[a-zA-Z0-9]{3,15}$/.test(username)) {
        errors['username'] = "Username must be alphanumeric and between 3 to 15 characters long.";
    }

    // Validate email
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        errors['email'] = "Invalid email format.";
    }

    // Validate password
    if (!/^.{9,}$/.test(password)) {
        errors['password'] = "Das Passwort muss mindestens 9 Zeichen lang sein.";
    }

    function changeColor(item, color) {
        item.style.color = color;
    }

    if (accept_me.checked) {
        if (Object.keys(errors).length === 0) {
            console.log("Form data:", { username, email, password });
  

            const form = document.getElementById('registerForm');
            const formData = new FormData(form);
            
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'php/register/send.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    try {
                        const response = JSON.parse(xhr.responseText);
                        // alert(response.message);

                        if(response.message == false) {
                            e_error.innerHTML = "email ist vorhanden";
                            u_error.innerHTML = "";
                            p_error.innerHTML = "";    
                        }else if(response.message  == true){

                        document.getElementById("registerForm").reset();
                        window.location.replace(`php/send_active_code/send.php?email=${email}`);
                        u_error.innerHTML = "";
                        e_error.innerHTML = "";
                        p_error.innerHTML = "";
                        }
                        // window.location.href = `send.php?email=${email}`;

                    } catch (e) {
                        // alert('Form submission failed.');
                    }
                }
            };
            xhr.send(formData);
        } else {
            if (errors.username) {
                u_error.innerHTML = errors.username;
            } else {
                u_error.innerHTML = "";
            }

            if (errors.email) {
                e_error.innerHTML = errors.email;
            } else {
                e_error.innerHTML = "";
            }

            if (errors.password) {
                p_error.innerHTML = errors.password;
            } else {
                p_error.innerHTML = "";
            }
        }
        changeColor(accept_me_text, 'black');
        changeColor(accept_me_a, 'blue');
    } else {
        changeColor(accept_me_text, 'red');
        changeColor(accept_me_a, 'red');
        // alert('You must accept the terms and conditions.');
    }
});
