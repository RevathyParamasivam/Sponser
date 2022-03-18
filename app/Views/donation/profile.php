  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="boot\assests\img\profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2><span id="profileName"></span></h2>
              
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><span id="name"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Gender</div>
                    <div class="col-lg-9 col-md-8"><span id="gender"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Mobile Number</div>
                    <div class="col-lg-9 col-md-8"><span id="mobile"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">E-Mail</div>
                    <div class="col-lg-9 col-md-8"><span id="email"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date of Birth</div>
                    <div class="col-lg-9 col-md-8"><span id="dob"></span></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date of Marriage</div>
                    <div class="col-lg-9 col-md-8"><span id="dom"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Street</div>
                    <div class="col-lg-9 col-md-8"><span id="street"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><span id="address"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">District</div>
                    <div class="col-lg-9 col-md-8"><span id="district"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">State</div>
                    <div class="col-lg-9 col-md-8"><span id="state"></span></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8"><span id="country"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pincode</div>
                    <div class="col-lg-9 col-md-8"><span id="pincode"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Language</div>
                    <div class="col-lg-9 col-md-8"><span id="language"></span></div>
                  </div>
                  
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="boot\assests\img\profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="sponserGender" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-control" id="sponserGender" name="sponserGender" required="true" >
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        </select>
                    </div>
                    </div>
                    <div class="row mb-3">
                      <label for="sponserMobile" class="col-md-4 col-lg-3 col-form-label">Mobile Number</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="sponserMobile" type="text" class="form-control" id="sponserMobile" value="" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="sponserEmail" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="sponserEmail" type="email" class="form-control" id="sponserEmail" value="">
                      </div>
                    </div>
                    <div class="row mb-3" style="display:none">
                        <label for="sponserWhatsapp" class="col-md-4 col-lg-3 col-form-label">Whatsapp Number</label>
                        <div class="col-md-8 col-lg-9">
                        <input name="sponserWhatsapp" type="text" class="form-control" id="sponserWhatsapp" value="">
                        </div>             
                    </div>
                    <div class="row mb-3">
                      <label for="dob" class="col-md-4 col-lg-3 col-form-label">Date of Birth</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="sponserDob" type="date" class="form-control" id="sponserDob" >
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="sponserdom" class="col-md-4 col-lg-3 col-form-label">Date of Marriage</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="sponserDom" type="date" class="form-control" id="sponserDom" >
                      </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sponserStreet" class="col-md-4 col-lg-3 col-form-label">Street</label>
                        <div class="col-md-8 col-lg-9">
                        <input name="sponserStreet" type="text" class="form-control" id="sponserStreet" value="">
                        </div>             
                    </div>
                    <div class="row mb-3">
                      <label for="sponserAddress" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="sponserAddress" type="text" class="form-control" id="sponserAddress" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="sponserCountry" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-control" id="sponserCountry" name="sponserCountry" onChange="updateState('','')" required="true" >
                                        <?php
                                        $contents_donatefor = fopen("https://dev.gemsbihar.info/api/api/v1//get/country", "r");
                                        $json_donatefor = stream_get_contents($contents_donatefor);
                                        fclose($contents_donatefor);
                                        $data_donatefor = json_decode($json_donatefor);
                                        foreach($data_donatefor->result as $row)
                                        { 
                                        ?>
                                        <option value="<?= $row->id;?>"><?= $row->countryName; ?></option>
                                        
                                        <?php }?>
                                    </select>
                      </div>
                    </div>                    
                    <div class="row mb-3">
                                <label for="sponserState" class="col-md-4 col-lg-3 col-form-label">State</label>
                                <div class="col-md-8 col-lg-9">
                                    <select class="form-control" id="sponserState" name="sponserState" onChange="updateDistrict('','')" required="true">
                                    <option value="0">Select State</option>
                                    </select>
                                  </div>
                      </div>
                      <div class="row mb-3">
                                <label for="sponserDistrict" class="col-md-4 col-lg-3 col-form-label">District</label>
                                <div class="col-md-8 col-lg-9">
                                    <select class="form-control" id="sponserDistrict" name="sponserDistrict">
                                    <option value="0">Select District</option>  
                                  </select>
                                  </div>
                      </div>
                      <div class="row mb-3">
                      <label for="sponserPincode" class="col-md-4 col-lg-3 col-form-label">Pincode</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="sponserPincode" type="text" class="form-control" id="sponserPincode" value="">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="sponserLanguage" class="col-md-4 col-lg-3 col-form-label">Language</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="sponserLanguage" type="text" class="form-control" id="sponserLanguage" value="" readonly>
                      </div>
                    </div>
                    <div class="text-center">
                      <button ID="submit" type="button" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

               

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <script>
        
        
        $("#submit").on("click", function(event){
            
            let sponser_name=document.getElementById("fullName").value;
            let sponser_email=document.getElementById("sponserEmail").value;
            let genderId=document.getElementById("sponserGender");
            let sponserGender=genderId.options[genderId.selectedIndex].value; 
            //let sponser_mobile=document.getElementById("sponserMobile").value;
            let sponserDob=document.getElementById("sponserDob").value;
            let sponserDom=document.getElementById("sponserDom").value;
            let sponserStreet=document.getElementById("sponserStreet").value;
            let sponserAddress=document.getElementById("sponserAddress").value;
            let sponserCountry=document.getElementById("sponserCountry");
            let countryId=sponserCountry.options[sponserCountry.selectedIndex].value; 
            let sponserState=document.getElementById("sponserState");
            let stateId=sponserState.options[sponserState.selectedIndex].value; 
            let sponserDistrict=document.getElementById("sponserDistrict");
            let districtId=sponserDistrict.options[sponserDistrict.selectedIndex].value; 
            let sponserPincode=document.getElementById("sponserPincode").value;
            let sponserLanguage=document.getElementById("sponserLanguage").value;
            let sponserId=localStorage.getItem("sponserId");
            let countryCode='91';
            console.log("Gender",sponserGender);
            console.log("Country ID",countryId);
            console.log("Street",sponserStreet);
            console.log("pincode",sponserPincode);
            const apiData=    {
                sponsor_id:sponserId,
                name:sponser_name,
                gender:sponserGender,
                email_id:sponser_email,
                country_code:countryCode,
                dob: sponserDob,
                do_marraige:sponserDom,
                street:sponserStreet,
                address:sponserAddress,
                country:countryId,
                state:stateId,
                district:districtId,
                pincode:sponserPincode,
                langName:sponserLanguage,
                sponsorship : [] 
            }  
            console.log('apiData'+JSON.stringify(apiData));
            
            saveSponserDetails(apiData);
  });

    </script>
