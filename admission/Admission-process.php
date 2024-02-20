<!DOCTYPE html>
<html dir="ltr" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <?php include('./layouts/hed.php'); ?>
  <?php include('./layouts/head.php'); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body class="bg-color-lightblue">
  <div id="wrapper" class="clearfix">

    <!-- Start main-content -->
    <div class="main-content">


      <section>
        <div class="container-fluid">
          <div class="row mapsec">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="images/1.jpg" alt="Los Angeles" style="width:100%;">
                </div>
             
              </div>

              
            </div>
          </div>
        </div>
      </section>



      <!-- Section: latest news --><br>
      <!--latest news scrolling-->
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
              <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-theme-colored py-2 text-white px-1 news">
                <span class="d-flex align-items-center text-bolder">&nbsp;Announcements</span>
              </div>
              <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" class="text-navy pt-10">
                <p>All who applied for admission into Veritas University Abuja as undergraduate are on this note be reminded of the screening
                   excercise on the 4th of Ausgut 2039 at the University Multipurpose hall. Avail yourself with your origininal credentials</p>
              </marquee>
              </marquee>
            </div>
          </div>
        </div>
      </div>
      <!----------------navbutton--------------->
      <section>
        <div class="container-fluid pt-20 pb-20 bg-color-white">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2">
              <div class="vertical-tab">
                <a class="btn bg-colorbtnlightgreen btn-flat btn-lg  text-bolder hvr-bubble-float-right" href="#tab1" data-toggle="tab"><i class="fas fa-book-open"></i> | Undergraduate</a>
                <a class="btn bg-colorbtnlightgreen btn-flat btn-lg  text-bolder hvr-bubble-float-right" href="#tab2" data-toggle="tab"><i class="fas fa-chalkboard-teacher"></i> | Sandwich</a>
                <a class="btn bg-colorbtnlightgreen btn-flat btn-lg   text-bolder hvr-bubble-float-right" href="#tab3" data-toggle="tab"><i class="fas fa-user-graduate"></i> | JUPEB</a>
                <a class="btn bg-colorbtnlightgreen btn-flat btn-lg  text-bolder hvr-bubble-float-right" href="#tab4" data-toggle="tab"><i class="fas fa-school"></i> | IJAMB</a>
                <a class="btn bg-colorbtnlightgreen btn-flat btn-lg  text-bolder hvr-bubble-float-right" href="#tab5" data-toggle="tab"><i class="fas fa-folder-open"></i> | Postgraduate</a>
              </div>
            </div>
            <div class="col-md-10">
              <div class="tab-content">
                <!--------tab1 stars here---------->
                <div class="tab-pane fade in active mt-0" id="tab1">
                  <section class="mt-0 pt-0">
                    <div class="container pb-0">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 ">
                          <div class="thumb">
                            <img src="../public/image/3.JPG" class="img-fullwidth" height="320" alt="">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 shodow5">
                          <h2 class="text-uppercase font-weight-600 mt-0 mb-2 font-20 line-bottom text-navy">Who can Apply
                            for Undergraduate Programme</h2>
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="text-justify ovaflowprofile mb-10">
                                <ul class="list-icon bg-color-white square">
                                  <li class="text-bolder text-black text-format"><i class="fa fa-arrow-right btn-bg-color"></i>Candidate who made Veritas University
                                    their first and second choice</li>
                                  <li class="text-bolder text-black text-format"><i class="fa fa-arrow-right btn-bg-color"></i>Candidate who score minimum of 170 in the
                                    last UTME examination</li>
                                  <li class="text-bolder text-black text-format"><i class="fa fa-arrow-right btn-bg-color"></i>Candidates who didnt choose Veritas
                                    University in the last UTME Exams</li>
                                  <li class="text-bolder text-black text-format"><i class="fa fa-arrow-right btn-bg-color"></i>Transfer candidates from other higher
                                    institution</li>
                                  <li class="text-bolder text-black text-format"><i class="fa fa-arrow-right btn-bg-color"></i>Direct entry candidate</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section id="cd-timeline" class="cd-container">
                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-picture">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">1</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Start Application</h4>
                            <p class="text-bolder text-format">Visit the Admissions portal, and register with a valid
                              email address to create an account.</p>
                            <a class="btn btn-bg-color btn-flat btn-lg mt-10 mb-sm-30 text-bolder" href="admission.html">Apply Now →</a>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-movie">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">2</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder text-format">Pay Application Fee</h4>
                            <p class="text-bolder text-format">On the admissions portal, you will be requested to pay an
                              Application fee of Four thousand five hundred Naira only (N 7000.00) for Undergraduate
                              students </p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-picture">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">3</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder text-format">Fill out forms</h4>
                            <p class="text-bolder text-format">Fill out the forms by providing the appropriate information
                              required. Please ensure that you review your forms properly before submission.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-location">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">4</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder text-format">Review of Submissions</h4>
                            <p class="text-bolder text-format">Your submissions will be reviewed by a panel made up of
                              members of the Central Admissions Committee at Veritas University, to ascertain your
                              eligibility to study with us.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-location">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">5</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder text-format">Interviewing Process</h4>
                            <p class="text-bolder text-format">After the review, you will be scheduled for an online or
                              physical Interview with a member of the Central Admissions Committee.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content --->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-movie">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">6</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder text-format">Final Decision</h4>
                            <p class="text-bolder text-format">Upon completion of the Interview process, successful
                              candidates will be contacted and issued admission letters.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->
                  </section>
                </div>
                <!------------------tab2 starts here------->
                <div class="tab-pane fade" id="tab2">
                  <section class="mt-0 pt-0">
                    <div class="container pb-0">
                      <div class="row">
                        <div class="col-md-4 ">
                          <div class="thumb">
                            <img src="../public/image/4.JPG" class="img-fullwidth" alt="sandwish_image">
                          </div>
                        </div>
                        <div class="col-md-8 shodow5">
                          <h2 class="text-uppercase font-weight-600 mt-0 mb-2 font-20 line-bottom text-navy text-format">
                            Who can Apply for Sandwich Programme</h2>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="text-justify ovaflowprofile mb-10">
                                <ul class="list-icon bg-color-white square">
                                  <li class="text-bolder text-black text-format"><i class="fa fa-arrow-right btn-bg-color"></i>Candidate with N. C. E certificate</li>
                                  <li class="text-bolder text-black text-format"><i class="fa fa-arrow-right btn-bg-color"></i>Candidate with OND National Diploma</li>
                                  <li class="text-bolder text-black text-format"><i class="fa fa-arrow-right btn-bg-color"></i>Candidates with other higher degree</li>
                                  <li class="text-bolder text-black text-format"><i class="fa fa-arrow-right btn-bg-color"></i>Candidates from other higher institution
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section id="cd-timeline" class="cd-container">
                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-picture">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">1</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder text-format">Start Application</h4>
                            <p class="text-bolder text-format">Visit the Admissions portal, and register with a valid
                              email address to create an account.</p>
                            <a class="btn btn-bg-color btn-flat btn-lg mt-10 mb-sm-30 text-bolder" href="admission.html">Apply Now →</a>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-movie">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">2</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder text-format">Pay Application Fee</h4>
                            <p class="text-bolder text-format">On the admissions portal, you will be requested to pay an
                              Application fee of Four thousand five hundred Naira only (N 4500.00) for Undergraduate
                              students </p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-picture">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">3</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text-bolder">Fill out forms</h4>
                            <p class="text-bolder text-format">Fill out the forms by providing the appropriate information
                              required. Please ensure that you review your forms properly before submission.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-location">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">4</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text-bolder">Review of Submissions</h4>
                            <p class="text-bolder text-format">Your submissions will be reviewed by a panel made up of
                              members of the Central Admissions Committee at Veritas University, to ascertain your
                              eligibility to study with us.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-location">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">5</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text-bolder">Interviewing Process</h4>
                            <p class="text-bolder text-format">After the review, you will be scheduled for an online or
                              physical Interview with a member of the Central Admissions Committee.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-movie">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">6</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text-bolder">Final Decision</h4>
                            <p class="text-bolder text-format">Upon completion of the Interview process, successful
                              candidates will be contacted and issued admission letters.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->
                  </section>
                </div>
                <!---------tab3 startes here-------------->
                <div class="tab-pane fade" id="tab3">
                  <section class="mt-0 pt-0">
                    <div class="container pb-0">
                      <div class="row">
                        <div class="col-md-4 ">
                          <div class="thumb">
                            <img src="../public/image/6.JPG" class="img-fullwidth" height="380" alt="jupeb_image">
                          </div>
                        </div>
                        <div class="col-md-8 shodow5">
                          <h2 class="text-uppercase font-weight-600 mt-0 mb-2 font-20 line-bottom text-navy">JUPEB
                            Requirements</h2>
                          <p class="text-bolder text-black">The programme is open to all intrested candidate nation wide
                            and any course can be offered be it Science, Art or Social sciencs</p>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="text-justify ovaflowprofile mb-10 ">
                                <ul class="list-icon bg-color-white square">
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>candidates are expected to possess at
                                    least five credit passes in their O/level results including (English language and
                                    Mathematics at not more than 2 sittings in the SSCE/GCE organized by WAEC, NECO,
                                    NABTEB and should include the major subjects of study)</li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>Four
                                    (4) Passport photograph, birth certificate and certificate of state of origin</li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>No
                                    JAMB/PUTME is required for admission</li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>No
                                    JAMB/PUTME is required for admission</li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>Awaiting result candidate can also apply
                                  </li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>Straight admission without screnning</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section id="cd-timeline" class="cd-container">
                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-picture">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">1</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text-bolder">Start Application</h4>
                            <p class="text-bolder text-format"> Visit https://jupeb.veritas.edu.ng/applynow.php</p>
                            <a class="btn btn-bg-color btn-flat btn-lg mt-10 mb-sm-30 text-bolder" href="https://ecampus.veritas.org.ng/jupep_apply">Apply Now →</a>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-movie">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">2</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text-bolder">Pay Application Fee</h4>
                            <p class="text-bolder text-format">Download the Application form </p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-picture">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">3</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text-bolder">Fill out forms</h4>
                            <p class="text-bolder text-format">Fill the application form</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-location">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">4</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text-bolder">Review of Submissions</h4>
                            <p class="text-bolder text-format">Send scanned copies of form and your credentials
                              and send to jupeb@veritas.edu.ng</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-location">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">5</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text-bolder">Interviewing Process</h4>
                            <p class="text-bolder text-format">You can also submit the application forms at the Veritas
                              University JUPEB Foundation School secretariat. </p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-movie">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">6</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text-bolder">Final Decision</h4>
                            <p class="text-bolder text-format">Application complete</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->
                  </section>
                </div>
                <!--------------------tab4------------->
                <div class="tab-pane fade" id="tab4">
                  <section class="mt-0 pt-0">
                    <div class="container pb-0">
                      <div class="row">
                        <div class="col-md-4 ">
                          <div class="thumb">
                            <img src="../public/image/2.JPG" class="img-fullwidth" height="320" alt="ijamb_image">
                          </div>
                        </div>
                        <div class="col-md-8 shodow5">
                          <h2 class="text-uppercase font-weight-600 mt-0 mb-2 font-20 line-bottom text-navy">Requirement
                            for IJAMB Admission</h2>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="text-justify ovaflowprofile mb-10">
                                <ul class="list-icon bg-color-white square">
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>candidates are expected to possess at
                                    least five credit passes in their O/level results including (English language and
                                    Mathematics at not more than 2 sittings)</li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>Four
                                    (4) Passport photograph, birth certificate and certificate of state of origin</li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>No
                                    JAMB/PUTME is required for admission</li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>Awaiting result candidate can also apply
                                  </li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>Straight admission without screnning</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section id="cd-timeline" class="cd-container">
                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-picture">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">1</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Start Application</h4>
                            <p class="text-bolder">Visit the Admissions portal, and register with a valid email address to
                              create an account.</p>
                            <a class="btn btn-bg-color btn-flat btn-lg mt-10 mb-sm-30 text-bolder" href="admission.html">Apply Now →</a>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-movie">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">2</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Pay Application Fee</h4>
                            <p class="text-bolder">On the admissions portal, you will be requested to pay an Application
                              fee of Four thousand five hundred Naira only (N 4500.00) for Undergraduate students </p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-picture">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">3</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Fill out forms</h4>
                            <p class="text-bolder">Fill out the forms by providing the appropriate information required.
                              Please ensure that you review your forms properly before submission.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-location">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">4</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Review of Submissions</h4>
                            <p class="text-bolder">Your submissions will be reviewed by a panel made up of members of the
                              Central Admissions Committee at Veritas University, to ascertain your eligibility to study
                              with us.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-location">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">5</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Interviewing Process</h4>
                            <p class="text-bolder">After the review, you will be scheduled for an online or physical
                              Interview with a member of the Central Admissions Committee.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-movie">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">6</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Final Decision</h4>
                            <p class="text-bolder">Upon completion of the Interview process, successful candidates will be
                              contacted and issued admission letters.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->
                  </section>
                </div>
                <!---------tab5 startes here-------------->
                <div class="tab-pane fade" id="tab5">
                  <section class="mt-0 pt-0">
                    <div class="container pb-0">
                      <div class="row">
                        <div class="col-md-4 ">
                          <div class="thumb">
                            <img src="../public/image/1.JPG" class="img-fullwidth" height="320" alt="postgraduate_image">
                          </div>
                        </div>
                        <div class="col-md-8 shodow5">
                          <h2 class="text-uppercase font-weight-600 mt-0 mb-2 font-20 line-bottom text-navy">How to Apply
                            for Postgraduate Programme</h2>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="text-justify ovaflowprofile mb-10">
                                <ul class="list-icon bg-color-white square">
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>Candidate who made Veritas University
                                    their first and second choice</li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>Candidate who score minimum of 170 in the
                                    last UTME examination</li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>Candidates who didnt choose Veritas
                                    University in the last UTME Exams</li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>Transfer candidates from other higher
                                    institution</li>
                                  <li class="text-bolder text-black"><i class="fa fa-arrow-right btn-bg-color"></i>Direct
                                    entry candidate</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section id="cd-timeline" class="cd-container">
                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-picture">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">1</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Start Application</h4>
                            <p class="text-bolder">Visit the Admissions portal, and register with a valid email address to
                              create an account.</p>
                            <a class="btn btn-bg-color btn-flat btn-lg mt-10 mb-sm-30 text-bolder" href="admission.html">Apply Now →</a>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-movie">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">2</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Pay Application Fee</h4>
                            <p class="text-bolder">On the admissions portal, you will be requested to pay an Application
                              fee of Four thousand five hundred Naira only (N 4500.00) for Undergraduate students </p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-picture">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">3</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Fill out forms</h4>
                            <p class="text-bolder">Fill out the forms by providing the appropriate information required.
                              Please ensure that you review your forms properly before submission.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-location">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">4</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Review of Submissions</h4>
                            <p class="text-bolder">Your submissions will be reviewed by a panel made up of members of the
                              Central Admissions Committee at Veritas University, to ascertain your eligibility to study
                              with us.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-location">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">5</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Interviewing Process</h4>
                            <p class="text-bolder">After the review, you will be scheduled for an online or physical
                              Interview with a member of the Central Admissions Committee.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-movie">
                        <i class="fa-solid fa-user-graduate fa-2x mt-20 ml-15 mt-5 text-navy text-bolder"></i>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <div class="row">
                          <div class="col-md-2">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <strong class="fa-stack-1x">6</strong>
                            </span>
                          </div>
                          <div class="col-md-10">
                            <h4 class="text-navy text bolder">Final Decision</h4>
                            <p class="text-bolder">Upon completion of the Interview process, successful candidates will be
                              contacted and issued admission letters.</p>
                          </div>
                        </div>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Contact -->

      <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
 
    <script src="js/custom.js"></script>
</body>


</html>