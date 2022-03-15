<!doctype html>  
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title> GEMS Bihar</title>

        <meta name="description" content="GEMS Bihar">
       

        <!-- Open Graph Meta -->
        
        <!-- <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content=""> -->

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url();?>assets/media/favicons/favicong-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/media/favicons/apple-touch-gicon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

            
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/slick/slick.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/slick/slick-theme.css">

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
         <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap4.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css">  
        <!-- END Stylesheets -->

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   -->
        
      <!-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>   -->

      <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />   -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
      
      <script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>
<style>
body            
{
    margin:auto;
    width:1224px;
    padding:10px;
 
    font-size:14px;
    font-family:Verdana;
}
    .tabs{
    width:95%;
    height:auto;
    background-color:#fff;
    margin:0 auto;
}

/* tab list item */
.tabs .tabs-list{
    list-style:none;
    margin:0px;
    padding:0px;
}
.tabs .tabs-list li{
    width:100px;
    float:left;
    margin:0px;
    margin-right:2px;
    padding:10px 5px;
    text-align: center;
    background-color:cornflowerblue;
    border-radius:3px;
}
.tabs .tabs-list li:hover{
    cursor:pointer;
}
.tabs .tabs-list li a{
    text-decoration: none;
    color:white;
    
}

/* Tab content section */
.tabs .tab{
    display:none;
    width:100%;
    min-height:250px;
    height:auto;
    border-radius:3px;
    padding:20px 15px;
    background-color:#fff;
    color:darkslategray;
    clear:both;
}
.tabs .tab h3{
    border-bottom:3px solid cornflowerblue;
    letter-spacing:1px;
    font-weight:normal;
    padding:5px;
    
}
.tabs .tab p{
    line-height:20px;
    letter-spacing: 1px;
}

/* When active state */
.active{
    display:block !important;
}
.tabs .tabs-list li.active{
    background-color:#fff !important;
    color:black !important;
}
.active a{
    color:black !important;
}

/* media query */
@media screen and (max-width:360px){
    .tabs{
        margin:0;
        width:96%;
    }
    .tabs .tabs-list li{
        width:80px;
    }
}

.dataTables_filter, .dataTables_info,.dataTables { display: none; }
    </style>
<script>

 
$(document).ready(function(){

  $(".tabs-list li a").click(function(e){
     e.preventDefault();
  });

  $(".tabs-list li").click(function(){
     var tabid = $(this).find("a").attr("href");
     $(".tabs-list li,.tabs div.tab").removeClass("active");   // removing active class from tab

     $(".tab").hide();   // hiding open tab
     $(tabid).show();    // show tab
     $(this).addClass("active"); //  adding active class to clicked tab

  });

  $(function () {
  $('#dedication_date_time').datetimepicker();
});


});



function updateState()
{
var select = document.getElementById('country');
var dummyString = select.options[select.selectedIndex].value;
let dummySubstring = ".";
dummyString = dummyString.replace(dummySubstring,'');
let finalString =dummyString.replace(dummySubstring,'');
var request = new XMLHttpRequest();
var process={};
var arraylength=0;
request.open('GET', 'https://dev.gemsbihar.info/api/api/v1//get/state/['+finalString+']');
request.send();
request.onload = ()=>{
    process=JSON.parse(request.response);
    arraylength=process.result.length;
    var list1 = document.getElementById('state');
list1.options.length=0;
for(let i=0;i<arraylength;i++)
{
list1.options[i] = new Option(process.result[i].stateName,process.result[i].id);
}
}
}

function updateDistrict()
{
var select = document.getElementById('state');
var dummyString = select.options[select.selectedIndex].value;
let dummySubstring = ".";
dummyString = dummyString.replace(dummySubstring,'');
let finalString =dummyString.replace(dummySubstring,'');
var request = new XMLHttpRequest();
var process={};
var arraylength=0;
request.open('GET', 'https://dev.gemsbihar.info/api/api/v1//get/district/['+finalString+']');
request.send();
request.onload = ()=>{
    process=JSON.parse(request.response);
    console.log(process);
    arraylength=process.result.length;
    var list1 = document.getElementById('district');
list1.options.length=0;
for(let i=0;i<arraylength;i++)
{
list1.options[i] = new Option(process.result[i].districtName,process.result[i].id);
}
}
}
function updateSubDistrict()
{
var select = document.getElementById('district');
var dummyString = select.options[select.selectedIndex].value;
let dummySubstring = ".";
dummyString = dummyString.replace(dummySubstring,'');
let finalString =dummyString.replace(dummySubstring,'');
var request = new XMLHttpRequest();
var process={};
var arraylength=0;
request.open('GET', 'https://dev.gemsbihar.info/api/api/v1//get/subdistrict/['+finalString+']');
request.send();
request.onload = ()=>{
    process=JSON.parse(request.response);
    console.log(process);
    arraylength=process.result.length;
    var list1 = document.getElementById('subdistrict');
list1.options.length=0;
for(let i=0;i<arraylength;i++)
{
list1.options[i] = new Option(process.result[i].subDistrictName,process.result[i].id);
}
}
}

function displayHide(showorhide,status=false)
{
    console.log("Id received"+showorhide);
    if(status){
        document.getElementById(showorhide).style.display="none";       
    }else {
        document.getElementById(showorhide).style.display="block";       
    }
}

function toggleDiv(showorhide){
     if(document.getElementById(showorhide).style.display==="block"){
 document.getElementById(showorhide).style.display="none";
     }
 else{
 document.getElementById(showorhide).style.display="block";
 }
}
</script>
    </head>
    <body>

        <!-- Page Container -->


        


<main>                         
    <!-- Page Content -->
    <div class="content">
        <div class="row">

            <div class="col-md-6">
                <!-- Inline Form -->
                <div class="block block-rounded block-fx-shadow">
                    <div class="block-content block-content-full">
                        <div class="js-validation-bootstrap">
                            <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="text" class="form-control" id="name" required="true" name="name" placeholder="Enter Your Name">
                                        <span class="required-server"></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="email" class="form-control" id="email" required="true" name="email" placeholder="Enter Email id">
                                        <span class="required-server"></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-phoneus">Mobile Number <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input autocomplete="off" type="text" class="form-control" required="true" id="mobile" name="mobile" placeholder="Enter Mobile number">
                                        <span class="required-server"></span> 
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-11 col-form-label" for="whatsapp">Is it same whatsapp number ?</span></label>
                                    <div class="col-lg-1">
                                        <input type="checkbox" id="mobile" class="form-control" name="whatsapp" value="Yes" /> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-country">Country <span class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <select class="form-control" id="country" name="country" onChange="updateState()" required="true" >
                                        <option value="0">Select Country</option> 
                                        <?php
                                        $contents_donatefor = fopen("https://dev.gemsbihar.info/api/api/v1//get/country", "r");
                                        $json_donatefor = stream_get_contents($contents_donatefor);
                                        fclose($contents_donatefor);
                                        $data_donatefor = json_decode($json_donatefor);
                                        foreach($data_donatefor->result as $row)
                                        { 
                                        ?>
                                        <option value=".<?= $row->id; ?>."><?= $row->countryName; ?></option>
                                        
                                        <?php }?>
                                    </select>
                                    <span class="required-server"></span> 
                                </div>
                            </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-amount">Amount<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input autocomplete="off" type="text" class="form-control" required="true" id="main_amount" name="main_amount">
                                        <span class="required-server"></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="remarks">Remarks</label>
                                    <div class="col-lg-8">
                                        <textarea autocomplete="off" class="form-control" id="remarks" name="remarks" rows="2"  placeholder="Remarks "></textarea>
                                        <span class="required-server"></span> 
                                    </div>
                                </div>
                                
                                                           
                        </div>
                    </div>
                </div>
                            <!-- END Inline Form -->
                    <!-- Donation  Title -->
            </div>
            <div class="col-md-6">
                <!-- Inline Form -->
                <div class="block block-rounded block-fx-shadow">
                    <div class="block-content block-content-full">
                        <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="dob">Date of Birth <span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="date" class="form-control" id="dob" name="dob">
                                         
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-dom">Date of Marriage<span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="date" class="form-control" id="dom" name="dom">
                                         
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-plot">House No./ Plot <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                    <input  autocomplete="off" type="text" class="form-control" id="plot" name="plot" placeholder="House No./Plot ">
                                     
                                </div>
                            </div>

                                    <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-address">Address Line 1 <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                    <input  autocomplete="off" type="text" class="form-control" id="address1" name="address1" placeholder="Address">
                                    <span class="required-server"></span> 
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-state">State <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                    <select class="form-control" id="state" name="state" onChange="updateDistrict()">
                                        <option value="0">Select State</option>
                                    </select>
                                     
                                </div>
                            </div>    
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-district">District <span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                        <select class="form-control" id="district" name="district" onChange="updateSubDistrict()">
                                            <option value="0">Select District</option>
                                        </select>
                                        <span class="required-server"></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-sub-district">Sub-district <span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                        <select class="form-control" id="subdistrict" name="subdistrict">
                                            <option value="0">Select Sub-district</option>
                                        </select>
                                        <span class="required-server"></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-pincode">Pincode<span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="text" class="form-control" id="pin" name="pin" placeholder="pincode">
                                    <span class="required-server"></span> 
                                    </div>
                                </div>
                                
                                
                                    <div class="form-group row" style="display:none">
                                     <label class="col-md-4 col-form-label" for="miss_dedication_pre">Donation For  </label>
                                    <div class="col-md-8">
                                        <select class="form-control" id="purpose" name="purpose[]" onChange="showAttributes()" required="true">
                                        <option value="0">Select Donation For</option>
                                        <?php
                                        $contents_donatefor = fopen("https://dev.gemsbihar.info/api/api/v1//get/sponsorship_module/[]", "r");
                                        $json_donatefor = stream_get_contents($contents_donatefor);
                                        fclose($contents_donatefor);
                                        $data_donatefor = json_decode($json_donatefor);
                                        foreach($data_donatefor->result as $row)
                                        { 
                                        ?> 
                                        <option value=".<?= $row->id; ?>."><?= $row->name; ?></option> 
                                        <?php }?>
                                        </select>
                                        
                                     </div>
                                    </div>
                               </div>
                    </div>
                </div>
            </div>
        </div>

<div class="tabs">
  <ul class="tabs-list">       <?php
                                        $contents_donatefor = fopen("https://dev.gemsbihar.info/api/api/v1//get/sponsorship_module/[]", "r");
                                        $json_donatefor = stream_get_contents($contents_donatefor);
                                        fclose($contents_donatefor);
                                        $data_donatefor = json_decode($json_donatefor);
                                        foreach($data_donatefor->result as $row)
                                        { 
                                        ?>
                                        <li><a href="#tab<?= $row->id; ?>" class="sponser active" name="<?= $row->name; ?>" id="<?= $row->id; ?>" value="<?= $row->id; ?>" ><button style="background-color: transparent;border:none"name="tabbutton" id="<?= $row->id; ?>" class="sponser"><?= $row->name; ?></button></a></li>                                   
                                        <?php }?>
       </ul>
<div id="tab6"  class="tab">
    <h3>General</h3>
    <div id="general">
        <div class="form-group row">
            <label class="col-lg-4 col-form-label" for="gen-amount">Amount <span class="text-danger">*</span></label>
            <div class="col-lg-8">
                <input  autocomplete="off" type="text" class="form-control" id="general_amount" required="true" name="general_amount" placeholder="Amount">
                <span class="required-server"></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-8" style="text-align:end">
                <button type="button" class="btn btn-default">Submit</button>
            </div> 
        </div> 
    </div>
</div>
  <div id="tab1" class="tab active">
      
        <form method="post" id="missionary_form">
             <h3>Missionary</h3>
                <div id="missionary">
                        <div class="form-group row">
                            <label class="col-lg-8 col-form-label" for="missionary_schedule">Schedule for Monthly?</label>
                            <div class="col-lg-4">
                                <input type="checkbox" class="form-control" name="missionary_schedule" id="missionary_schedule" value="Yes" onchange="toggleDiv('missionary_recurring')"/> 
                            </div>
                        </div>
                        
                        <div id="missionary_recurring" style="display:none">
                            <div class="form-group row" class="view_missionary_recurring" id="view_missionary_recurring">
                                <label  class="col-lg-4 col-form-label" for="missionary_count">No. of Missionary? <span class="text-danger">*</span></label>   
                                <input  autocomplete="off" type="text" class="col-lg-2 form-control" id="missionary_count"  name="missionary_count" placeholder="numbers"/>
                                <label class="col-lg-3 col-form-label" for="missionary_preference">Preference <span class="text-danger"></span></label>   
                                <input  autocomplete="off" type="text" class="col-lg-3 form-control" id="missionary_preference"  name="missionary_preference" placeholder="preference"/>
                            </div>
                            <div class="form-group view_dedication_process" id="dedication_require">
                                <label class="col-lg-8 col-form-label" for="missionary_dedication">Dedication Service at Sponsers Place?</label>
                                <div class="col-lg-4">
                                    <input type="checkbox" class="form-control" id="missionary_dedication" name="missionary_dedication" value="Yes" onchange="toggleDiv('dedication_process')"/> 
                                </div>
                            </div> 
                            <div id="dedication_process" style="display:none" class="view_dedication_process">
                                <div class="form-group row">
                                    <label  class="col-lg-12 col-form-label" for="missionary_travel">Travel Request <span class="text-danger">*</span></label>
                                </div>
                               
                                <div class="form-group row">
                                    <label  class="col-lg-3 col-form-label" for="missionary_dedication_place">Dedication Place? <span class="text-danger">*</span></label>   
                                    <input  autocomplete="off" type="text" class="col-lg-3 form-control" id="dedication_place"  name="dedication_place">
                                    <label class="col-lg-3 col-form-label" for="dedication_date">Date & Time <span class="text-danger"></span></label>   
                                    <div class="containter mt-5 mb-5" style="width: 400px;">
                                    <input type="datetime-local" class="col-lg-3 form-control" id="dedication_date_time"  name="dedication_date_time"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-lg-3 col-form-label" for="arrival_date">Arrival Date <span class="text-danger">*</span></label>   
                                    <input  autocomplete="off" type="date" class="col-lg-3 form-control" id="arrival_date"  name="arrival_date">
                                    <label class="col-lg-3 col-form-label" for="departure_date">Departure Date <span class="text-danger"></span></label>   
                                    <input  autocomplete="off" type="date" class="col-lg-3 form-control" id="departure_date"  name="departure_date">
                                </div>                                                               
                            </div>
                        </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-username">Amount <span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input  autocomplete="off" type="text" class="form-control" id="missionary_amount" required="true" name="missionary_amount" placeholder="Amount">
                            <span class="required-server"></span>
                        </div>
                    </div> 
                </div>        
            
            <div class="footer">
                <input type="hidden" name="hidden_id" id="hidden_id"/>
                <input type="hidden" name="array_id" id="array_id"/>
                <input type="hidden" name="action" id="action" value="missionary_add" />
                <input type="submit" name="submit" id="add_button" class="btn btn-success" value="Add" />
                
            </div>
        
        </form>
        
     
  </div>
  <div id="tab2" class="tab">
    <form method="post" id="child_form">  
    <h3>Child</h3>
    <div id="child">
        <div class="form-group row">
            <label class="col-lg-8 col-form-label" for="val-whatsapp">Schedule for Monthly?</span></label>
            <div class="col-lg-4">
                <input type="checkbox" class="form-control" name="child_schedule" id="child_schedule" value="Yes" onchange="displayHide('child_recurring')"/> 
            </div>
        </div>
        <div id="child_recurring" style="display:none">
            <div class="form-group row">
                <label  class="col-lg-4 col-form-label" for="val-username">No. of Children? <span class="text-danger">*</span></label>   
                    <input  autocomplete="off" type="text" class="col-lg-2 form-control" id="child_count" name="child_count" placeholder="numbers">
                    <label class="col-lg-3 col-form-label" for="val-username">Preference <span class="text-danger"></span></label>   
                    <input  autocomplete="off" type="text" class="col-lg-3 form-control" id="child_preference" name="child_preference" placeholder="preference">
            </div>                                      
        </div>
        <div class="form-group row">
            <label class="col-lg-4 col-form-label" for="val-username">Amount <span class="text-danger">*</span></label>
                <div class="col-lg-8">
                    <input  autocomplete="off" type="text" class="form-control" id="child_amount" required="true" name="child_amount" placeholder="Amount">
                    <span class="required-server"></span>
                </div>
        </div> 
        <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-reportlang">Report Language <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select class="form-control" id="reportlang_child" name="reportlang_child" required="true" >
                                        <option value="0">Select Language</option>
                                        <?php
                                        $contents_donatefor = fopen("https://dev.gemsbihar.info/api/api/v1//get/lang/[]", "r");
                                        $json_donatefor = stream_get_contents($contents_donatefor);
                                        fclose($contents_donatefor);
                                        $data_donatefor = json_decode($json_donatefor);
                                        foreach($data_donatefor->result as $row)
                                        { 
                                        ?>
                                        <option value=".<?= $row->id; ?>."><?= $row->langName; ?></option> 
                                        <?php }?>
                                        </select>
                                        <span class="required-server"></span> 
                                    </div>
                                </div>
    </div>
   <div class="footer">
                <input type="hidden" name="hidden_id" id="hidden_id"/>
                <input type="hidden" name="array_id" id="array_id"/>
                <input type="hidden" name="action" id="action" value="child_add" />
                <input type="submit" name="submit" id="add_button" class="btn btn-success" value="Add" />
                
            </div>
        
    </form> 
  </div>
  <div id="tab7" class="tab">
   <h3>Others</h3>
    <div id="others">
        <div class="form-group row">
            <label class="col-lg-4 col-form-label" for="val-username">Amount <span class="text-danger">*</span></label>
            <div class="col-lg-8">
                <input  autocomplete="off" type="text" class="form-control" id="others_amount" required="true" name="others_amount" placeholder="Amount">
                <span class="required-server"></span>
            </div>
        </div> 
    </div>
 
   </div>
  <div id="tab4" class="tab">
    <form id="discipleship_form">
    <h3>Discipleship & Training</h3>
    <div id="discipleship">
        <div class="form-group row">
            <label class="col-lg-4 col-form-label" for="val-username">Amount <span class="text-danger">*</span></label>
            <div class="col-lg-8">
                <input  autocomplete="off" type="text" class="form-control" id="discipleship_amount" required="true" name="discipleship_amount" placeholder="Amount">
                <span class="required-server"></span>
            </div>
        </div> 
        
    </div>
  <div class="footer">
                <input type="hidden" name="hidden_id" id="hidden_id"/>
                <input type="hidden" name="array_id" id="array_id"/>
                <input type="hidden" name="action" id="action" value="discipleship_add" />
                <input type="submit" name="submit" id="add_button" class="btn btn-success" value="Add" />
                
            </div>
        
    </form>  
  </div>
  <div id="tab5" class="tab">
    <h3>Medical</h3>
        <div id="medical">
            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-username">Amount <span class="text-danger">*</span></label>
                <div class="col-lg-8">
                    <input  autocomplete="off" type="text" class="form-control" id="medical_amount" required="true" name="medical_amount" placeholder="Amount">
                    <span class="required-server"></span>
                </div>
            </div> 
        </div>
    
  </div>
  

 </div>
    <section>
    <div style="height:100px">

    </div>   
    <div class="card">
      <div class="card-header">
         <label><b>SELECTION DETAILS</b></label>
      </div>
      <div class="card-body" style="text-align:center">
        <div class="table-responsive">
          <table class="table table-bordered" id="sample_table">
            
          </table>
        </div>
      </div>
    </section>
    <br>
    
    <div style="text-align:center">                         
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-alt-primary">Submit</button>
                                    </div>
                                </div>
    </div>    

</main>
                        <!-- END Page Content -->


<script type="text/javascript" language="javascript">
    

$(document).ready(function(){
   
  $(document).on('click', '.sponser', function(){
      var id = $(this).attr("id");
      console.log('Inside sponser class'+id);
      if(id=="1")
      {      console.log(id); 
    $('#missionary_form')[0].reset();
    $('#action').val('missionary_add');
    $('#hidden_id').val('1');
    $('#add_button').val('Add');
    }

  });


var  sponsorship= [];
var array_id=0;
var index=0;
function selectedSponsershipDetails()
{
    const totalProps = sponsorship.reduce((a, obj) => a + Object.keys(obj).length, 0);
    console.log(totalProps);
    if(totalProps!=0)
    {
        var tablehtml='<thead><tr><th>Donate For</th><th>Recurring</th><th>Amount</th><th>No. of Person</th><th>Update</div></th><th>Delete</th></tr></thead>';
        var rowcount=0;
        var table = document.getElementById ("sample_table");
            let i=0;
        sponsorship.forEach(a=>{
            i++;
            var sponsership_for='';let recurring='';let person_count='';let amount='';
            //Variable setting for missionay data display
            if((a.action=='missionary_add') || (a.action=='missionary_edit'))
            {
                sponsership_for='Missionary';
                if(a.missionary_count=='')
                    person_count='No';
                else
                    person_count=a.missionary_count;
                if(a.missionary_schedule!='Yes' || a.missionary_schedule!='Yes')
                    recurring='No';
                else
                    recurring='Yes';
                amount=a.missionary_amount;   
            }
            //Variable setting for child data display
            if((a.action=='child_add') || (a.action=='child_edit'))
            {
                
                sponsership_for='Child';
                if(a.child_count=='')
                    person_count='No';
                else
                    person_count=a.child_count;
                if(a.child_schedule!='Yes' || a.child_schedule!='Yes')
                    recurring='No';
                else
                    recurring='Yes';
                amount=a.child_amount;
                resetChildForm(); 
                  
            }
            if((a.action=='discipleship_add') || (a.action=='discipleship_edit'))
            {
                
                sponsership_for='Discipleship & Training';
                amount=a.discipleship_amount;
                recurring='NA';
                person_count='NA';
                $('#discipleship_amount').val(''); 
                  
            }
            tablehtml+='<tr><td>'+sponsership_for+'</td>'+'<td>'+recurring+'</td>';
            tablehtml+='<td>'+amount+'</td>'+'<td>'+person_count+'</td>';
            console.log('array _id in table', i);
            tablehtml+= '<td><button type="button" name="'+sponsership_for+'" id="'+i+'" class="btn btn-warning btn-xs update">Update</button></td>';  
            tablehtml+= '<td><button type="button" name="'+sponsership_for+'" id="'+i+'" class="btn btn-danger btn-xs delete">Delete</button></td></tr>';      
            
            
        });
        const list = document.getElementById("sample_table");
        list.innerHtml="";
        $('#sample_table').html(tablehtml);
        
    }
    else
    {
        $('#sample_table').html('');
    }
    
    
}

function resetMissionaryForm()
{

    displayHide("missionary_recurring",true);
    $('#missionary_schedule').prop("checked", false);
    $('#missionary_dedication').prop("checked", false);
        displayHide('dedication_process',true);
        $('#missionary_count').val('');
        $('#missionary_preference').val('');
        $('#dedication_place').val('');
        $('#dedication_date').val('');
        $('#arrival_date').val('');
        $('#departure_date').val('');
        $('#missionary_amount').val('');
        $('#array_id').val('');
        $('#add_button').val('Add');
}
function resetChildForm()
{

    displayHide("child_recurring",true);
    $('#child_schedule').prop("checked", false);
    
        $('#child_count').val('');
        $('#child_preference').val('');
        $('#child_amount').val('');
        $('#array_id').val('');
        $('#reportlang_child').val(0);
        $('#add_button').val('Add');
}


function validateFields(objectForm)
{
        console.log(objectForm);
        let recurring_status=objectForm.missionary_schedule;
        let innerHtml='';
        if(recurring_status==='Yes')
        {
        let personCount=objectForm.missionary_count;
        if(personCount==='')
        {
            innerHtml+='Enter No. of Missionaries';
        } 
        }
        let dedication_status=objectForm.missionary_dedication;
        let dedication_date='';let arrival_date='';let departure_date='';
        if(dedication_status==='Yes')
        {
        
        let dedication_place=objectForm.dedication_place;
        console.log('dedication  Date'+objectForm.dedication_date);
        if(objectForm.dedication_date ==='null'  || objectForm.dedication_date ==='')
        {
            try{
        dedication_date=objectForm.dedication_date;
        }
         catch (e)
            {
            innerHtml+='Enter Dedication Date & Time';
            }
        }
        else
        {
        innerHtml+='Enter Dedication Date & Time';
        
        }
        //if(objectForm.arrival_date!='null' || objectForm.arrival_date!='')
        console.log('Arrival Date'+objectForm.arrival_date);
        if(objectForm.arrival_date!="")
        {
            
        }
        else
        {
            innerHtml+='Enter Arrival Date';
            
        }
        //if(objectForm.departure_date!= 'null' || objectForm.departure_date!= '')
        console.log('Departure Date'+objectForm.departure_date);

        if(objectForm.departure_date!="")
        {
            
        }
        else
        {
             
             innerHtml+='Enter Departure Date';
        }
        if(dedication_place=='')
        {
            innerHtml+='<span>Enter Dedication Place</span>';
        }
        
}
console.log(innerHtml);
return innerHtml;
}

function deleteSponsership(index)
{
    console.log('deletiing...' , index, sponsorship);
    sponsorship.splice(index,1);
    console.log('after deletiing...' , sponsorship)
}
function setChildForm(a,array_key)
{
    console.log('Set Child Form');
    if(a.child_count!='')
                {
                $('#child_schedule').prop("checked", true);
                displayHide('child_recurring');
                }
     $('#child_count').val(a.child_count);
     $('#child_preference').val(a.child_preference);
     $('#child_amount').val(a.child_amount);
     $('#reportlang_child').val(a.reportlang_child);
     $('#tab2').show();
     hideTabs(2)
     $('#action').val('child_edit');
    $('#hidden_id').val('2');
    //array_id=array_id+1;
    $('#array_id').val(array_key);

    $('#add_button').val('edit');
    $('#add_button').attr('enabled', 'enabled');           
    
}
function hideTabs(tabindex)
{
    for(let i=1; i<8;i++)
    {
        if(i!=tabindex && i!=3)
        {
            $('#tab'+i).hide();
        }
    }
}
function setMissionaryForm(a,array_key)
{
    if(a.missionary_count!='')
                {
                $('#missionary_schedule').prop("checked", true);
                displayHide('missionary_recurring');
                }
        $('#missionary_count').val(a.missionary_count);

        $('#missionary_preference').val(a.missionary_preference);
        if(a.dedication_place!='')
                {
                $('#missionary_dedication').prop("checked", true);
                displayHide('dedication_process');
                }
        $('#missionary_dedication').val(a.missionary_dedication);

        $('#dedication_place').val(a.dedication_place);
        if(!a.dedication_date_time)
        {
        $('#dedication_date').val('');
        }
        else{    
        $('#dedication_date').val(a.dedication_date_time);
        }
        if(!a.arrival_date)
        {
        $('#arrival_date').val('');
        }
        else
        {
             $('#arrival_date').val(a.arrival_date);
        }
        if(!a.departure_date)
        {
        $('#departure_date').val('');
        }
        else
        {
            $('#departure_date').val(a.departure_date);
        }
        $('#missionary_amount').val(a.missionary_amount);
        $('#tab1').show();
        hideTabs(1)
         $('#action').val('missionary_edit');
    $('#hidden_id').val('1');
    //array_id=array_id+1;
    $('#array_id').val(array_key);

    $('#add_button').val('edit');
    $('#add_button').attr('enabled', 'enabled');
}

function setForm(action,data,array_key)
{
    $('#tab'+action).show();
        hideTabs(action)
         $('#action').val('discipleship_edit');
    $('#hidden_id').val(action);
    //array_id=array_id+1;
    $('#array_id').val(array_key);

    $('#add_button').val('edit');
    $('#add_button').attr('enabled', 'enabled');
}
$('#discipleship_form').on('submit', function(event){
      var action=document.getElementById('action').value;
       let form_array_id=document.getElementById('array_id').value;
       form_array_id=parseInt(form_array_id);
       // array_id=parseInt(array_id);
      console.log('action'+action);
     // console.log('Golbal Array Id'+array_id);  
        let objectForm={};
        let formData = $(this).serializeArray();
        formData.forEach(a => {
            objectForm["a.name"] =a.value;
        });
       //cehck form action
      if(!form_array_id)
        {
        //objectForm['array_id']=array_id;
        console.log('object form'+objectForm['array_id']);    
        sponsorship.push(objectForm);
            
        }else{
        //sponsorship[array_id-1]= objectForm;   
        console.log(sponsorship);         
        deleteSponsership(form_array_id-1);
        sponsorship.push(objectForm);
        
        }
        
        selectedSponsershipDetails();
        event.preventDefault();
        resetMissionaryForm();
  });


    $('#child_form').on('submit', function(event){
      var action=document.getElementById('action').value;
       let form_array_id=document.getElementById('array_id').value;
       form_array_id=parseInt(form_array_id);
       // array_id=parseInt(array_id);
      console.log('action'+action);
     // console.log('Golbal Array Id'+array_id);  
        let objectForm={};
        let formData = $(this).serializeArray();
        formData.forEach(a => {
            objectForm[a.name] =a.value;
        });
    // validate form
        let validationResult=validateFields(objectForm);
        //console.log(validationResult);
       if(validationResult!=''){
           alert(validationResult);
           return ;
       }
        
       //cehck form action
      if(!form_array_id)
        {
        //objectForm['array_id']=array_id;
        console.log('object form'+objectForm['array_id']);    
        sponsorship.push(objectForm);
            
        }else{
        //sponsorship[array_id-1]= objectForm;   
        console.log(sponsorship);         
        deleteSponsership(form_array_id-1);
        sponsorship.push(objectForm);
        
        }
        
        selectedSponsershipDetails();
        event.preventDefault();
        resetMissionaryForm();
  });


  $('#missionary_form').on('submit', function(event){
      var action=document.getElementById('action').value;
       let form_array_id=document.getElementById('array_id').value;
       form_array_id=parseInt(form_array_id);
       // array_id=parseInt(array_id);
      console.log('action'+action);
      console.log('Golbal Array Id'+array_id);  
        let objectForm={};
        let formData = $(this).serializeArray();
        formData.forEach(a => {
            if(a.name=='dedication_date')
            a.value=new Date(a.value);
            objectForm[a.name] =a.value;
        });
        console.log('Object form in missioanry'+objectForm);
    // validate form
        let validationResult=validateFields(objectForm);
        
       if(validationResult!=''){
           alert(validationResult);
           return ;
       }
        
       //cehck form action
      if(!form_array_id)
        {
        //objectForm['array_id']=array_id;
        console.log('object form'+objectForm['array_id']);    
        sponsorship.push(objectForm);
            
        }else{
        //sponsorship[array_id-1]= objectForm;   
        console.log(sponsorship);         
        deleteSponsership(form_array_id-1);
        sponsorship.push(objectForm);
        
        }
        selectedSponsershipDetails();
        event.preventDefault();
        resetMissionaryForm();
  });

  $(document).on('click', '.update', function(){

    let array_key = $(this).attr("id");
    let actionForm = $(this).attr("name");

    console.log('Inside Update'+array_key+'actionForm'+actionForm);

    var tablehtml='';
    var index='';
    let data;
    if(array_key){
        data = sponsorship[array_key-1];
        if(actionForm=='Missionary')    
        setMissionaryForm(data,array_key);
        if(actionForm=='Child')
        setChildForm(data,array_key);
        if(actionForm=='Discipleship & Training')
        setForm('4',data,array_key);
    }
  }); 

  $(document).on('click', '.delete', function(){

    
    var id = $(this).attr("id");
    //let form_array_id=document.getElementById('array_id').value;
       id=parseInt(id);
    
    if(confirm("Are you sure you want to remove it?"))
    {

    deleteSponsership(id-1);
    selectedSponsershipDetails();
         
    }
     //event.preventDefault();

  });

});

</script>

