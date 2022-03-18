 
 <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>GEMS</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https:///bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https:///bootstrapmade.com/nice-admin-/bootstrap-admin-html-template/ -->
      Designed by <a href="https:///bootstrapmade.com/">Infotech</a>
    </div>
  </footer><!-- End Footer -->
  <div class="modal fade" id="NewSponsershipModal" tabindex="-1">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New Sponsership</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
            <div class="col-md-12" style="font-size: 15px;">
                <div class="block block-rounded block-fx-shadow">
                    <div class="block-content block-content-full">
                        <div class="js-validation-bootstrap alignCenter">
                                <div class="form-group row " style="background-color:#99BADD;margin-top:-20px;">
                                    <label class="col-lg-3 col-form-label" for="val-cause"><h5>Cause</h5></label>
                                    <label class="col-lg-2 col-form-label" for="val-amount"><h5>Amount</h5></label>
                                    <label class="col-lg-2 col-form-label" for="val-count"><h5>Count</h5></label>
                                    <label class="col-lg-2 col-form-label" for="val-schedule"><h5>Schedule</h5></label>
                                    <label class="col-lg-3 col-form-label" for="val-remarks"><h5>Remarks</h5></label>
                                </div>
                                <form action="" method="post" id="new_sponsership_form">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="val-general">General</label>
                                    <div class="col-lg-2">
                                    <input autocomplete="off" type="text" class="form-control" onblur="totalDonation();" id="general_amount" name="general_amount">
                                    </div>
                                    <label class="col-lg-2 col-form-label" style="text-align:center">---</label>
                                    <label class="col-lg-2 col-form-label">---</label>
                                    <div class="col-lg-3">
                                    <input autocomplete="off" type="text" class="form-control" id="general_remarks " name="general_remarks">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <label class="col-lg-3 col-form-label"></label>
                                    <label class="col-lg-2 col-form-label"></label>
                                    <label class="col-lg-2 col-form-label"></label>
                                    <label class="col-lg-2 col-form-label"></label>
                                    <label class="col-lg-3 col-form-label" >(If particular, kindly mention the purpose like Evangelism, Discipleship, Training, Medical, Welfare etc)</label>

                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="val-missionary">Missionary Support</label>
                                    <div class="col-lg-2">
                                        <input autocomplete="off" type="text" class="form-control" onblur="totalDonation();" id="missionary_amount" name="missionary_amount"> 
                                    </div>
                                    <div class="col-lg-2">
                                        <input autocomplete="off" type="number" value="1" class="form-control"  id="missionary_count" name="missionary_count"> 
                                    </div>
                                    <div class="col-lg-2">
                                        <label class="col-lg-6 form-check-label"><input name="missionary_one_time" id="missionary_one_time" class="form-check-input" type="checkbox" onchange="toggleCheck('missionary_monthly')" value="Yes">One-time</label> 
                                        <label class="col-lg-6 form-check-label"><input name="missionary_monthly" id="missionary_monthly" class="form-check-input" type="checkbox" onchange="toggleCheck('missionary_one_time')" value="Yes">Monthly</label>
                                    </div>
                                    <label class="col-lg-3 col-form-label">(Single missionary Rs. 4000 per month)</label>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="val-child">Child Support</label>
                                    <div class="col-lg-2">
                                        <input autocomplete="off" type="text" class="form-control" onblur="totalDonation();" id="child_amount" name="child_amount"> 
                                    </div>
                                    <div class="col-lg-2">
                                        <input autocomplete="off" type="number" value="1" class="form-control" id="child_count" name="child_count"> 
                                    </div>
                                    <div class="col-lg-2">
                                        <label class="col-lg-6 form-check-label"><input name="child_one_time" id="child_one_time" class="form-check-input" type="checkbox" onchange="toggleCheck('child_monthly')" value="Yes">One-time</label> 
                                        <label class="col-lg-6 form-check-label"><input name="child_monthly" id="child_monthly" class="form-check-input" type="checkbox" onchange="toggleCheck('child_one_time')" value="Yes">Monthly</label>
                                    </div>
                                    <label class="col-lg-3 col-form-label">(Single child average Rs. 1500 per month - Any amount can be donated)</label>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="val-church">Church Project</label>
                                    <div class="col-lg-2">
                                    <input autocomplete="off" type="text" class="form-control" onblur="totalDonation();" id="church_amount" name="church_amount">
                                    </div>
                                    <label class="col-lg-2 col-form-label" style="text-align:center">---</label>
                                    <label class="col-lg-2 col-form-label">---</label>
                                    <div class="col-lg-3">
                                    <input autocomplete="off" type="text" class="form-control" id="church_remarks " name="church_remarks">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"></label>
                                    <label class="col-lg-2 col-form-label"></label>
                                    <label class="col-lg-2 col-form-label"></label>
                                    <label class="col-lg-2 col-form-label"></label>
                                    <label class="col-lg-3 col-form-label">(Church building is of 1000 sq ft and parsonage 500 sq ft @ Rs. 1000 per square feet. Land extra. Any amount can be donated. We will combine sponsors if needed)</label>     
                                </div>
                                <div class="form-group row" style="background-color:#99BADD;margin-bottom:-20px;">
                                    <label class="col-lg-3 col-form-label"><h5>Total</h5></label>
                                    <span class="col-lg-2 col-form-label" name="total" id="total"><h5>Rs. </h5></span>     
                                </div>
                    </div>
                </div>
            </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div><!-- End Extra Large Modal-->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="boot\assests\vendor\apexcharts\apexcharts.min.js"></script>
  <script src="boot\assests\vendor\bootstrap\js\bootstrap.bundle.min.js"></script>
  <script src="boot\assests\vendor\chart.js\chart.min.js"></script>
  <script src="boot\assests\vendor\echarts\echarts.min.js"></script>
  <script src="boot\assests\vendor\quill\quill.min.js"></script>
  <script src="boot\assests\vendor\simple-datatables\simple-datatables.js"></script>
  <script src="boot\assests\vendor\tinymce\tinymce.min.js"></script>
  <script src="boot\assests\vendor\php-email-form\validate.js"></script>

  <!-- Template Main JS File -->
  <script src="boot\assests\js\main.js"></script>
  <script src="boot\assests\js\apifunctions.js"></script>
   <script>
     $('#new_sponsership_form').on('submit', function(event){
      let missionary_count=document.getElementById('missionary_count').value;
      let child_count=document.getElementById('child_count').value;
       missionary_count_int=parseInt(missionary_count);
       child_count_int=parseInt(child_count);
       let error='';
       console.log("Error"+error);
                      console.log("Error"+error);
        let missionary_amount=0,child_amount=0;
        if(document.getElementById("missionary_amount").value!='')
            {
            missionary_amount = parseInt(document.getElementById("missionary_amount").value);
            }
             if(document.getElementById("child_amount").value!='')
            {
            child_amount = parseInt(document.getElementById("child_amount").value);
            }
        
       let missionary_one_time=document.getElementById("missionary_one_time");
       let missionary_monthly=document.getElementById("missionary_monthly"); 
         console.log("Error"+error);
          if(document.getElementById("child_amount").value!='')
            {
            child_amount = parseInt(document.getElementById("child_amount").value);
            }
             if(document.getElementById("child_amount").value!='')
            {
            child_amount = parseInt(document.getElementById("child_amount").value);
            }
            if(missionary_amount!=0) 
            {
       if(missionary_count_int<1)
        error+="Missionaries count should not be less than 1 ";
        }
         if(child_amount!=0) 
            {
       if(child_count_int<1)
        error+="Children count should not be less than 1 ";
        }
        if(missionary_amount!=0 && !missionary_one_time.checked && !missionary_monthly.checked)
         error+='\nPlease Check either One-time or Monthly for Missionary Support';
      
       let child_one_time=document.getElementById("child_one_time");
       let child_monthly=document.getElementById("child_monthly"); 
        if(child_amount!=0 && !child_one_time.checked && !child_monthly.checked)
         error+='\nPlease Check either One-time or Monthly for Child Support';
               console.log("Error"+error);
         if(error!='')
         {
            alert(error);
            event.preventDefault(0);
        }
        else
            alert("Form Submitted Succefully");

  });

               
        function totalDonation() {
            let general_amount=0,missionary_amount=0,child_amount=0,church_amount=0;
            if(document.getElementById("general_amount").value!='')
            {
            general_amount = parseInt(document.getElementById("general_amount").value);
            }
            
            if(document.getElementById("missionary_amount").value!='')
            {
            missionary_amount = parseInt(document.getElementById("missionary_amount").value);
            }
             if(document.getElementById("child_amount").value!='')
            {
            child_amount = parseInt(document.getElementById("child_amount").value);
            }
             if(document.getElementById("church_amount").value!='')
            {
            church_amount = parseInt(document.getElementById("church_amount").value);
            }
            
            let todalDonatin=0;
            todalDonatin=general_amount+missionary_amount+child_amount+church_amount;
            let total = document.getElementById("total");
            let str = todalDonatin.toString();
            str='<h5>Rs. '+str+'</h5>';

            console.log("Total"+todalDonatin+'  '+str);
            total.innerHTML=str;
        }
        function toggleCheck(element)
        {
            let elementId = document.getElementById(element);
            $(elementId).prop("checked", false);
        }

          
    </script>

</body>

</html>