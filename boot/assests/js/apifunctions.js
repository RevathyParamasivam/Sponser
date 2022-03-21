

function loginApi(username, password) {

    const apiData = {
        "username": username,
        "password": password
    }
    console.log("Credentials" + JSON.stringify(apiData));
    $.ajax({
        url: "https://dev.gemsbihar.info/api/api/v1/Auth/login",
        type: "POST",
        data: JSON.stringify(apiData),
        cache: false,
        dataType: "json",
        responseType: "JSON",
        success: function (data) {
            console.log(data);
            localStorage.setItem("token", data.result['token']);
            localStorage.setItem("sponserId", data.result['sponsor_id']);
            localStorage.setItem("userId", data.result['user_id']);
            //console.log("User_id" + data.result['user_id']);
            // $.POST('mysponsership.php', {'sponserId':data.result['sponsor_id'], function(data){  
            //}});

            window.location = 'ProfileController';
            alert("Login Successfull");
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr, thrownError);
            alert("Invalid Username/Passowrd");
        }
    });

}
function changePassword(apiData) {
    $.ajax({
        url: "https://dev.gemsbihar.info/api/api/v1/Auth/changePassword",
        type: "POST",
        data: JSON.stringify(apiData),
        cache: false,
        dataType: "json",
        responseType: "JSON",
        success: function (data) {
            console.log(data);
            alert("Password Changed Successfully");
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr, thrownError);
            alert("Internal Server Error");
        }
    });

}

function logout() {
    localStorage.clear();
    window.location = 'Home';
}

function saveSponserDetails(sponsorData) {
    $.ajax({
        url: "https://dev.gemsbihar.info/api/api/v1/sponsor/save",
        type: "POST",
        data: JSON.stringify(sponsorData),
        cache: false,
        dataType: "json",
        responseType: "JSON",
        success: function (data) {
            console.log(data);
            alert("Record added successfully");
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr, thrownError)
            alert('Error occured : ' + thrownError + '\najaxOptions : ' + ajaxOptions + '\nxhr : ' + xhr);
        }
    });
}
function saveSponsershipDetails(sponsorshipData) {
    $.ajax({
        url: "https://dev.gemsbihar.info/api/api/v1/sponsor/saveSponsorship",
        type: "POST",
        data: JSON.stringify(sponsorshipData),
        cache: false,
        dataType: "json",
        responseType: "JSON",
        success: function (data) {
            console.log(data);
            alert("Record added successfully");
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr, thrownError)
            alert('Error occured : ' + thrownError + '\najaxOptions : ' + ajaxOptions + '\nxhr : ' + xhr);
        }
    });

}
function getSponserDetails(sponsorId) {
    $.ajax({
        url: "https://dev.gemsbihar.info/api/api/v1/sponsor/getDetails/" + sponsorId,
        type: "GET",
        cache: false,
        dataType: "json",
        responseType: "JSON",
        success: function (data) {
            console.log(data);
            $("#name").text(data.result['name']);
            $("#email").text(data.result['email_id']);
            $("#mobile").text(data.result['mobile_no']);
            $("#country").text(data.result['countryName']);
            $("#state").text(data.result['stateName']);
            $("#district").text(data.result['districtName']);
            $("#dob").text(data.result['dob']);
            $("#dom").text(data.result['do_marraige']);
            $("#address").text(data.result['address']);
            $("#street").text(data.result['street']);
            $("#profileName").text(data.result['name']);
            $("#header_name").text(data.result['name']);
            $("#dropdown_name").text(data.result['name']);
            let gender = 'Male';
            if (data.result['gender'] == '2')
                gender = 'Female';
            $("#gender").text(gender);
            $("#pincode").text(data.result['pincode']);
            $("#language").text(data.result['langName']);
            //Edit Details
            $("#fullName").val(data.result['name']);
            $("#sponserGender").val(data.result['gender']);
            $("#sponserEmail").val(data.result['email_id']);
            $("#sponserMobile").val(data.result['mobile_no']);
            $("#sponserWhatsapp").val(data.result['whatsapp_number']);
            $("#sponserDob").val(dateconversion(data.result['dob']));
            $("#sponserDom").val(dateconversion(data.result['do_marraige']));
            $("#sponserStreet").val(data.result['street']);
            $("#sponserAddress").val(data.result['address']);
            $("#sponserPincode").val(data.result['pincode']);
            $("#sponserLanguage").val(data.result['langName']);
            //console.log("Country Id" + data.result['country_id'] + "StateName" + data.result['stateName']);
            updateState1('state', data.result['stateName'], data.result['countryName']);
            //console.log("State ID" + data.result['state_id'] + "District Name" + data.result['districtName']);
            let ele = document.getElementById('sponserState');
            //console.log("State id after state selection"+ele.value);//updateState(1,'Tamilnadu');
            updateState1('district', data.result['districtName'], data.result['stateName']);
            //updateDistrict(2, 'Cuddalore');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr, thrownError)
            //alert('Error occured : '+thrownError+'\najaxOptions : '+ajaxOptions+'\nxhr : '+xhr);
        }
    });
}
function dateconversion(inputdate) {
    let test = inputdate;
    var date = new Date(test);
    var year = date.getFullYear();
    var month = String(date.getMonth() + 1).padStart(2, '0');
    var todayDate = String(date.getDate()).padStart(2, '0');
    var datePattern = year + '-' + month + '-' + todayDate;
    return datePattern;
}


function updateState1(apiName, id = '', mapId = '') {
    cond = [];
    let ele, list;
    //console.log("apiName" + apiName);
    //console.log("id" + id);
    //console.log("id" + mapId);
    //console.log("before switch");
    switch (apiName) {
        case 'country':
            list = document.getElementById('sponserCountry');
            cond = [];
            break;
        case 'state':
            ele = document.getElementById('sponserCountry');
            list = document.getElementById('sponserState');
            //console.log("Ele.val"+ele.value);
            cond = !mapId ? [ele.value] : [];
            break;
        case 'district':
            ele = document.getElementById('sponserState');
            list = document.getElementById('sponserDistrict');
            //console.log("Ele.val"+ele.value);
            cond = !mapId ? [ele.value] : [];
            break;
        default:
            break;
    }

    let argToBePassed = JSON.stringify(cond);
    var request = new XMLHttpRequest();
    var process = {};
    var arraylength = 0;
    console.log('https://dev.gemsbihar.info/api/api/v1//getfull/' + apiName + '/' + argToBePassed);
    request.open('GET', 'https://dev.gemsbihar.info/api/api/v1//getfull/' + apiName + '/' + argToBePassed);
    request.send();
    request.onload = () => {
        process = JSON.parse(request.response);
        if (Array.isArray(process.result)) {
            arraylength = process.result.length;
            const result = process.result;
            //console.log(JSON.stringify(process.result));
            list.length = 0;
            if (list) {
                for (let i = 0; i < arraylength; i++) {
                    if (apiName == 'state') {
                        list.options[i] = new Option(result[i].stateName, result[i].id);
                    }
                    if (apiName == 'district') {
                        list.options[i] = new Option(result[i].districtName, result[i].id);
                    }
                    if (apiName == 'country') {
                        list.options[i] = new Option(result[i].countryName, result[i].id);
                    }
                    //console.log("list1.options"+list.options[i].text);
                    if (id != '') {
                        if (list.options[i].text == id)
                            list[i].selected = true
                    }
                }

                list.text = id;
            }
        }
    }
}
function updateDistrict(district_id, districtName) {
    var list1 = document.getElementById('sponserDistrict');
    if (district_id == '') {
        let district = document.getElementById('sponserState');
        district_id = district.options[district.selectedIndex].value;
    }
    let finalString = [district_id];
    let argToBePassed = JSON.stringify(finalString);
    var request = new XMLHttpRequest();
    var process = {};
    var arraylength = 0;
    console.log('https://dev.gemsbihar.info/api/api/v1//get/district/' + argToBePassed);
    request.open('GET', 'https://dev.gemsbihar.info/api/api/v1//get/district/' + argToBePassed);
    request.send();
    request.onload = () => {
        process = JSON.parse(request.response);
        //console.log(process);
        arraylength = process.result.length;

        for (let i = 0; i < arraylength; i++) {
            list1.options[i] = new Option(process.result[i].districtName, process.result[i].id);
            //console.log("list1.options"+list1.options[i].text);
            if (districtName != '') {
                if (list1.options[i].text == districtName)
                    list1[i].selected = true
            }
        }
    }
}


function updateState(country_id, stateName) {
    var list1 = document.getElementById('sponserState');
    if (country_id == '') {
        document.getElementById('sponserCountry').val(country_id);
        //country_id=country.value;   
    }
    let finalString = [country_id];
    let argToBePassed = JSON.stringify(finalString);
    var request = new XMLHttpRequest();
    var process = {};
    var arraylength = 0;
    //console.log('https://dev.gemsbihar.info/api/api/v1//get/state/'+argToBePassed);
    request.open('GET', 'https://dev.gemsbihar.info/api/api/v1//get/state/' + argToBePassed);
    request.send();
    request.onload = () => {
        process = JSON.parse(request.response);
        //console.log(process);
        arraylength = process.result.length;

        for (let i = 0; i < arraylength; i++) {
            list1.options[i] = new Option(process.result[i].stateName, process.result[i].id);
            //console.log("list1.options"+list1.options[i].text);
            if (stateName != '') {
                if (list1.options[i].text == stateName)
                    list1[i].selected = true
            }
        }
    }
}
function updateDistrict(district_id, districtName) {
    var list1 = document.getElementById('sponserDistrict');
    if (district_id == '') {
        let district = document.getElementById('sponserState');
        district_id = district.options[district.selectedIndex].value;
    }
    let finalString = [district_id];
    let argToBePassed = JSON.stringify(finalString);
    var request = new XMLHttpRequest();
    var process = {};
    var arraylength = 0;
    //console.log('https://dev.gemsbihar.info/api/api/v1//get/district/'+argToBePassed);
    request.open('GET', 'https://dev.gemsbihar.info/api/api/v1//get/district/' + argToBePassed);
    request.send();
    request.onload = () => {
        process = JSON.parse(request.response);
        arraylength = process.result.length;
        for (let i = 0; i < arraylength; i++) {
            list1.options[i] = new Option(process.result[i].districtName, process.result[i].id);
            //console.log("list1.options"+list1.options[i].text);
            if (districtName != '') {
                if (list1.options[i].text == districtName)
                    list1[i].selected = true
            }
        }
    }
}

function show_Sponsership() {
    let URL = "https://dev.gemsbihar.info/api/api/v1/sponsorship/getAll/" + localStorage.getItem("sponserId");
    console.log("URL" + URL);
    $.ajax({
        url: URL,
        type: "GET",
        cache: false,
        dataType: "json",
        responseType: "JSON",
        success: function (data) {
            console.log(data);
            var html = '';
            var i;
            var dataTableData=[];
            let arraylength = data.result.length;
            const result = data.result;
            for (i = 0; i < arraylength; i++) {
                html += '<tr>' +
                    '<td>' + (i+1) + '</td>' +
                    '<td>'+dateconversion(result[i].created_at)+'</td>'+
                    '<td>' + result[i].sponsorship_module + '</td>' +
                    '<td>' + isRecurring(result[i].is_monthly) + '</td>' +
                    '<td>' + result[i].amount + '</td>' + 
                    '<td>' + statusChecking(result[i].status) + '</td>' +                  
                    '<td>' +'</td>' +
                    '</tr>';
                    dataTableData.push({
                        "sno":(i+1),
                        "dateCreated":dateconversion(result[i].created_at),
                        "module":result[i].sponsorship_module,
                        "recurring":isRecurring(result[i].is_monthly),
                        "amount":result[i].amount,
                        "status": statusChecking(result[i].status) 
                    });
            }
            
           $('#show_data').html(html);
           
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr, thrownError);
            alert("Internal Server Error");
        }
    });
}
function statusChecking(data)
{
    switch (data) {
        case '0':
            return 'Cancelled';
            break;
        case '1':
            return 'Completed';
            break;
        case '2':
            return 'Active';
            break;
        case '3':
            return 'Pending';
            break;
        default:
            break;
    }

}
function isRecurring(data)
{
    switch (data) {
        case '0':
            return 'No';
            break;
        case '1':
            return 'Monthly';
            break;
        default:
            break;
    }
}