  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
              <h2>Kevin Anderson</h2>
              
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
                    <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">E-Mail</div>
                    <div class="col-lg-9 col-md-8">test@gmail.com</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Mobile Number</div>
                    <div class="col-lg-9 col-md-8">1234567890</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">India</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date of Birth</div>
                    <div class="col-lg-9 col-md-8">xx-xx-xxxx</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date of Marriage</div>
                    <div class="col-lg-9 col-md-8">xx-xx-xxxx</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
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
                        <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Mobile Number</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="company" value="1234567890">
                      </div>
                    </div>
                    <div class="row mb-3"">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Whatsapp Number</label>
                        <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="company" value="1234567890">
                        </div>             
                      </div>
                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-control" id="country" name="country" onChange="updateState()" required="true" >
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
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="dob" class="col-md-4 col-lg-3 col-form-label">Date of Birth</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="dob" type="date" class="form-control" id="dob" >
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="dom" class="col-md-4 col-lg-3 col-form-label">Date of Marriage</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="dom" type="date" class="form-control" id="dom" >
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Address1" class="col-md-4 col-lg-3 col-form-label">House No./Plot</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address1" type="text" class="form-control" id="address1" value="A108">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Address2" class="col-md-4 col-lg-3 col-form-label">Street, City</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address2" type="text" class="form-control" id="address2" value="Adam Street">
                      </div>
                    </div>
                    <div class="row mb-3">
                                <label for="state" class="col-md-4 col-lg-3 col-form-label">State</label>
                                <div class="col-md-8 col-lg-9">
                                    <select class="form-control" id="state" name="state">
                                        <option value="0">Select State</option>
                                    </select>
                                  </div>
                      </div>
                      <div class="row mb-3">
                                <label for="district" class="col-md-4 col-lg-3 col-form-label">District</label>
                                <div class="col-md-8 col-lg-9">
                                    <select class="form-control" id="district" name="district">
                                        <option value="0">Select District</option>
                                    </select>
                                  </div>
                      </div>
                      <div class="row mb-3">
                      <label for="Address2" class="col-md-4 col-lg-3 col-form-label">Pincode</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="pin" type="text" class="form-control" id="pin" value="000000">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
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

