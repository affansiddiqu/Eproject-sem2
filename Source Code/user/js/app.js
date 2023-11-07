const submit_button = document.querySelector(".button");
submit_button.onclick = (e) =>{
    e.preventDefault();
    const fname = document.getElementById('fname').value;
    const lname = document.getElementById('lname').value;
    const email = document.getElementById('email').value;
    const pass = document.getElementById('pass').value;
    const cpass = document.getElementById('cpass').value;

    localStorage.setItem('FirstName', fname);
    localStorage.setItem('LastName', lname);
    localStorage.setItem('Email', email);
    localStorage.setItem('Password', pass);
    localStorage.setItem('CPassword', cpass);

    if(fname == "" && lname == "" && email == "" && pass == "" && cpass == ""){
        swal("opps..!", "input field has no value!", "error");
    }
    else{
        if(pass !== cpass){
            swal("opps..!", "password not matching!", "error");
        }else{
            swal("Good job!", "Registration is successful!", "success");
        }
    }
}