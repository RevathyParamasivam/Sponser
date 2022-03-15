

function loginApi(username, password)
{
    alert("Username"+username+"Password"+password);
    const apiData= {
        "username":username,
        "password":password
    }

    $.ajax({
        url: "https://dev.gemsbihar.info/api/api/v1/Auth/login",
        type: "POST",
        data: JSON.stringify(apiData),
        cache: false,
        dataType:"json",
        responseType : "JSON",
        success: function(data) {
            //window.location = 'DashboardController';
            console.log(data.result['token']);
            alert("Login Successfull");  
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(xhr ,thrownError);
            alert("Invalid Username/Passowrd");
        }
     });

}