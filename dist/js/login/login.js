
let switch_pass = document.getElementById('switch-pass');
let passInput = document.getElementById('password');
    switch_pass.addEventListener('click', function() {

        if(passInput.type === 'text') {
            passInput.type = 'password';
        }else if(passInput.type === 'password') {
            passInput.type = 'text';
        }
        
    })

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
    let token = '';
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let error = document.getElementById('error');
    let e_error = document.getElementById('e_error');
    let p_error = document.getElementById('p_error');
  

    let errors = {};



    // Validate email
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        errors['email'] = "Invalid email format.";
    }

    // Validate password
    if (!/^.{9,}$/.test(password)) {
        errors['password'] = "Das Passwort muss mindestens 9 Zeichen lang sein.";
    }


  
        if (Object.keys(errors).length === 0) {
            console.log("Form data:", {email, password });
  
            e_error.innerHTML = "";
            p_error.innerHTML = "";  
            const form = document.getElementById('loginForm');
            const formData = new FormData(form);
            
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'php/login/send.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    try {
                        const response = JSON.parse(xhr.responseText);
                        // alert(response.message);

                        if(response.status == true) {
                            error.innerHTML = "";
                            e_error.innerHTML = "";
                            p_error.innerHTML = "";  
                            console.log(response.message) 
                            token = response.token;
                            localStorage.setItem('token', token)
                            console.log(token)         
                            console.log(localStorage.getItem('token'))         
                            document.getElementById("loginForm").reset();
                            window.location.replace(`prudact_liste.php`);
                        }else if(response.status  == false){
                        // alert(response.message);

                                error.innerHTML = response.message;
                                e_error.innerHTML = "";
                                p_error.innerHTML = ""; 
                                console.log(response.message)
                        }
                        // window.location.href = `send.php?email=${email}`;

                    } catch (e) {
                        // alert('Form submission failed.');
                    }
                }
            };
            xhr.send(formData);
        } else {
          

            if (errors.email) {
                e_error.innerHTML = errors.email;
                console.log(errors.email)
            } else {
                e_error.innerHTML = "";
            }

            if (errors.password) {
                p_error.innerHTML = errors.password;
                console.log(errors.password)

            } else {
                p_error.innerHTML = "";
            }
        }
    
  
});
