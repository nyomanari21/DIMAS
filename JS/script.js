function passwordCheck()
{
    const pass = document.getElementById("password");

    if(pass.value.length >= 8)
    {
        valid.setCustomValidity("");
    }
    else
    {
        valid.setCustomValidity("Password harus mempunyai setidaknya 8 karakter!");
    }
}

function usernameCheck()
{
    const user = document.getElementById("username");

    if(user.value.length >= 8)
    {
        valid.setCustomValidity("");
    }
    else
    {
        valid.setCustomValidity("User harus mempunyai setidaknya 8 karakter!");
    }
}