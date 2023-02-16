<!-- Header -->
<?php $title = "Templates";
$header = "header header--none";
include 'include/header.php'; ?>

<!-- Editor -->
<div class="editor ">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                <div class="editor-sidebar">
                    <div class="editor-sidebar__header">
                        <ul class="nav sidebar-tab nav-pills" id="pills-tab" role="tablist">
                            <li>
                                <a class="active" id="sidebar-tab__template" data-toggle="pill" href="#tab-template" role="tab" aria-controls="tab-template" aria-selected="true"><img src='images/tab-template-img.png' alt='image' class='imgFluid'></a>
                            </li>
                            <li>
                                <a class="" id="sidebar-tab__signature" data-toggle="pill" href="#tab-signature" role="tab" aria-controls="tab-signature" aria-selected="false"><img src='images/tab-signature-img.png' alt='image' class='imgFluid'></a>
                            </li>
                            <li>
                                <a class="" id="sidebar-tab__style" data-toggle="pill" href="#tab-style" role="tab" aria-controls="tab-style" aria-selected="false"><img src='images/tab-Style-img.png' alt='image' class='imgFluid'></a>
                            </li>
                            <li>
                                <a class="" id="sidebar-tab__image" data-toggle="pill" href="#tab-image" role="tab" aria-controls="tab-image" aria-selected="false"><img src='images/tab-image-img.png' alt='image' class='imgFluid'></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content editor-sidebar__body" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="tab-template" role="tabpanel" aria-labelledby="sidebar-tab__template">
                            <div class="templates">
                                <h3 class="editor-title wow bounceInRight" data-wow-duration="0.6s">Select Your Template
                                </h3>
                                <div class="ownFreeSignature wow bounceInRight" data-wow-duration="0.8s">
                                    <span>Created With HubSpot</span>
                                    <input type="checkbox" id="ownFree">
                                    <label for="ownFree" class="ownFree"></label>
                                </div>
                                <ul class="templates-selection">
                                    <li class="templates-selection__single wow bounceInRight" data-wow-duration="1s">
                                        <h6>Template 1</h6>
                                        <input type="radio" id="template1" name="template">
                                        <label for="template1" class="templates-selection__singleImg">
                                            <img src='images/template-1-img.png' alt='image' class='imgFluid'>
                                        </label>
                                    </li>
                                    <li class="templates-selection__single wow bounceInRight" data-wow-duration="1.2s">
                                        <h6>Template 2</h6>
                                        <input type="radio" id="template2" name="template">
                                        <label for="template2" class="templates-selection__singleImg">
                                            <img src='images/template-2-img.png' alt='image' class='imgFluid'>
                                        </label>
                                    </li>
                                    <li class="templates-selection__single wow bounceInRight" data-wow-duration="1.4s">
                                        <h6>Template 3</h6>
                                        <input type="radio" id="template3" name="template">
                                        <label for="template3" class="templates-selection__singleImg">
                                            <img src='images/template-3-img.png' alt='image' class='imgFluid'>
                                        </label>
                                    </li>
                                    <li class="templates-selection__single wow bounceInRight" data-wow-duration="1.6s">
                                        <h6>Template 4</h6>
                                        <input type="radio" id="template4" name="template">
                                        <label for="template4" class="templates-selection__singleImg">
                                            <img src='images/template-4-img.png' alt='image' class='imgFluid'>
                                        </label>
                                    </li>
                                    <li class="templates-selection__single wow bounceInRight" data-wow-duration="1.8s">
                                        <h6>Template 5</h6>
                                        <input type="radio" id="template5" name="template">
                                        <label for="template5" class="templates-selection__singleImg">
                                            <img src='images/template-5-img.png' alt='image' class='imgFluid'>
                                        </label>
                                    </li>
                                    <li class="templates-selection__single wow bounceInRight" data-wow-duration="2s">
                                        <h6>Template 6</h6>
                                        <input type="radio" id="template6" name="template">
                                        <label for="template6" class="templates-selection__singleImg">
                                            <img src='images/template-6-img.png' alt='image' class='imgFluid'>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="editor-sidebar__footer">
                                <p>Copyright &copy; 2022 Lorem ipsum</p>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="tab-signature" role="tabpanel" aria-labelledby="sidebar-tab__signature">
                            <div class="signatures">
                                <h3 class="editor-title wow bounceInLeft" data-wow-duration="0.6s">Enter Your Signature
                                    Details</h3>
                                <div class="input-fieldsWrapper">
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="0.8s">
                                        <input type="text" placeholder="John" class="input-fields__input testInput">
                                        <label class="input-fields__label">First Name</label>
                                    </div>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="1s">
                                        <input type="text" placeholder="Smith" class="input-fields__input testInput1">
                                        <label class="input-fields__label">Last Name</label>
                                    </div>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="1.2s">
                                        <input type="text" placeholder="Marketer" class="input-fields__input testInput2">
                                        <label class="input-fields__label">Job Title</label>
                                    </div>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="1.4s">
                                        <input type="text" placeholder="Marketing" class="input-fields__input testInput3">
                                        <label class="input-fields__label">Department</label>
                                    </div>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="1.6s">
                                        <input type="text" placeholder="HubSpot" class="input-fields__input testInput4">
                                        <label class="input-fields__label">Company Name</label>
                                    </div>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="1.8s">
                                        <input type="text" placeholder="111 222 3333" class="input-fields__input testInput5">
                                        <label class="input-fields__label">Office Phone Number</label>
                                    </div>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="2s">
                                        <input type="text" placeholder="111 222 3333" class="input-fields__input testInput6">
                                        <label class="input-fields__label">Mobile Phone Number</label>
                                    </div>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="2.2s">
                                        <input type="text" placeholder="www.hubspot.com" class="input-fields__input testInput7">
                                        <label class="input-fields__label">Website URL</label>
                                    </div>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="2.4s">
                                        <input type="email" placeholder="john@smith.com" class="input-fields__input testInput8">
                                        <label class="input-fields__label">Email Address</label>
                                    </div>
                                    <div class="input-fields my-0 wow bounceInLeft" data-wow-duration="2.6s">
                                        <input type="text" placeholder="Address Line 1" class="input-fields__input input-fields__input--address testInput9">
                                        <label class="input-fields__label">Address</label>
                                    </div>
                                    <div class="input-fields my-0 wow bounceInLeft" data-wow-duration="2.8s">
                                        <input type="text" placeholder="Address Line 2" class="input-fields__input mt-2 testInput10">
                                        <label class="input-fields__label"></label>
                                    </div>
                                    <div class="input-fields my-0 wow bounceInLeft" data-wow-duration="3s">
                                        <input type="text" placeholder="Address Line 3" class="input-fields__input mt-2 testInput11">
                                        <label class="input-fields__label"></label>
                                    </div>
                                    <div class="input-fields my-0 wow bounceInLeft" data-wow-duration="3.2s">
                                        <input type="text" placeholder="Address Line 4" class="input-fields__input mt-2 testInput12">
                                        <label class="input-fields__label"></label>
                                    </div>
                                    <h3 class="editor-title editor-title--margin wow bounceInLeft" data-wow-duration="3.4s">Enter Your Social Links</h3>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="3.6s">
                                        <input type="text" placeholder="https://www.linkedin.com" class="input-fields__input testInput13">
                                        <label class="input-fields__label">LinkedIn</label>
                                    </div>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="3.8s">
                                        <input type="text" placeholder="https://www.facebook.com" class="input-fields__input testInput14">
                                        <label class="input-fields__label">Facebook</label>
                                    </div>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="4s">
                                        <input type="text" placeholder="https://www.twitter.com" class="input-fields__input testInput15">
                                        <label class="input-fields__label">Twitter</label>
                                    </div>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="4.2s">
                                        <input type="text" placeholder="https://www.instagram.com" class="input-fields__input testInput16">
                                        <label class="input-fields__label">Instagram</label>
                                    </div>
                                    <h3 class="editor-title editor-title--margin wow bounceInLeft" data-wow-duration="4.4s">Custom Field</h3>
                                    <div class="input-fields wow bounceInLeft" data-wow-duration="4.6s">
                                        <input type="text" placeholder="Bonus Content" class="input-fields__input testInput17">
                                        <label class="input-fields__label">Custom Field</label>
                                    </div>
                                </div>
                            </div>
                            <div class="editor-sidebar__footer">
                                <p>Copyright &copy; 2022 Lorem ipsum</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-style" role="tabpanel" aria-labelledby="sidebar-tab__style">
                            <div class="styles">
                                <h3 class="editor-title" id="font-change">Stylize Your Signature</h3>

                                <div id="fontFamily" class="font-selector">
                                    <h5>font</h5>

                                    <div class="dropDown-icon mt-4">
                                        <input id="font" type="text" />
                                        <span><i class="fa-solid fa-caret-down"></i></span>
                                    </div>
                                </div>

                                <div class="fontSize-selector font-selector">
                                    <h5>Font Size</h5>

                                    <input type="range" min="0" max="100" value="0" id="slider" step="1">

                                </div>
                                <div class="editor-sidebar__footer">
                                    <p>Copyright &copy; 2022 Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-image" role="tabpanel" aria-labelledby="sidebar-tab__image">
                            <div class="imageEdit">
                                <h3 class="editor-title">Upload Your Custom Signature Images</h3>
                                <div class="input-fieldsWrapper">
                                    <div class="input-fields">
                                        <input type="text" placeholder="https://example.com/images/" class="input-fields__input">
                                        <label class="input-fields__label">Profile Picture <i class='bx bx-question-mark' style='color:#fff7f7'></i> </label>
                                    </div>
                                    <div class="input-fields">
                                        <input type="text" placeholder="https://example.com/images/" class="input-fields__input">
                                        <label class="input-fields__label">Company Logo <i class='bx bx-question-mark' style='color:#fff7f7'></i> </label>
                                    </div>
                                    <h3 class="editor-title">Create a Custom CTA</h3>
                                    <div class="input-fields">
                                        <input type="text" placeholder="Find Out More" class="input-fields__input">
                                        <label class="input-fields__label">Custom CTA Copy <i class='bx bx-question-mark' style='color:#fff7f7'></i> </label>
                                    </div>
                                    <div class="input-fields">
                                        <input type="text" placeholder="www.hubspot.com" class="input-fields__input">
                                        <label class="input-fields__label">Custom CTA URL <i class='bx bx-question-mark' style='color:#fff7f7'></i> </label>
                                    </div>
                                    <div class="input-break">
                                        <div class="input-break__line">
                                            <span>or</span>
                                        </div>
                                    </div>
                                    <div class="input-fields">
                                        <input type="text" placeholder="https://example.com/images/" class="input-fields__input">
                                        <label class="input-fields__label">Custom CTA Image <i class='bx bx-question-mark' style='color:#fff7f7'></i> </label>
                                    </div>
                                    <div class="input-fields">
                                        <input type="text" placeholder="www.hubspot.com" class="input-fields__input">
                                        <label class="input-fields__label">Custom CTA URL</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="template-editor">
                    <div class="editor-form">
                        <div class="col-12 col-lg-7">
                            <div class="header-main">
                                <a href="index.php" class="header-main__logo">
                                    <img src="images/logo.png" alt="logo" class="imgFluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2">
                            <div class="dropdown">
                                <div class="select">
                                    <span class="select-title">English</span>
                                    <div class="arrow"></div>
                                </div>
                                <ul class="menu">
                                    <li>日本語</li>
                                    <li>Deutsch</li>
                                    <li>English</li>
                                    <li>Español</li>
                                    <li>Português</li>
                                    <li>Français</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="profile-header template--two">
                        <div class="col-12">
                            <div class="indicate">
                                <div class="profile-indicate"></div>
                                <div class="profile-indicate"></div>
                                <div class="profile-indicate"></div>
                            </div>
                            <div class="recipient"><span>To: <strong>Your Recipient</strong></span><span>Subject:
                                    <strong>Check out my new Email Signature</strong></span>
                            </div>
                            <div class="profile">
                                <div class="Profile-main">
                                    <div class="col-12 col-lg-7 center">
                                        <div class="row justify-content-center">

                                            <div class="col-12 col-lg-4">
                                                <div class="profile-img">
                                                    <div class="Profile-table__img">
                                                        <img src="images/placeholder-image.webp" alt="image" class="imgFluid">
                                                    </div>
                                                    <div class="Profile-table__img max-x">
                                                        <img src="images/placeholder-image1.png" alt="image" class="imgFluid">
                                                    </div>
                                                </div>

                                                <div class="profile-socialIcons">
                                                    <div class="socical-icons">
                                                        <ul>
                                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-6 offset-lg-1">
                                                <div class="profile-content">
                                                    <ul>
                                                        <li class="firstName">
                                                            <h3 id="name1">John</h3>
                                                        </li>
                                                        <li class="lastName">
                                                            <h3 id="name2">Smith</h3>
                                                        </li>
                                                    </ul>

                                                    <ul class="d-block">
                                                        <li class="marketer">
                                                            <p id="name3" class="marketer">Marketer</p>
                                                        </li>
                                                    </ul>

                                                    <ul>
                                                        <li class="marTeting">
                                                            <p id="name4" class="marTeting">Marketing</p>
                                                        </li>
                                                        &nbsp;|&nbsp;
                                                        <li class="hubSpot">
                                                            <p id="name5" class="hubSpot">HubSpot</p>
                                                        </li>
                                                    </ul>

                                                    <ul class="d-block">
                                                        <li class="custom-field">
                                                            <p id="name6" class="custom-field">He / Him</p>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="profile-line">
                                                </div>

                                                <div class="profile-information">
                                                    <ul>
                                                        <li>
                                                            <i class='bx bxs-phone' style='color:#F2557E '></i>
                                                        </li>
                                                        <li class="officeNumber">
                                                            <a href="tel:111 222 333" class="officeNumber">111 222 333</a>
                                                        </li>
                                                        <li>
                                                            <span>&nbsp;|&nbsp;</span>
                                                        </li>
                                                        <li class="mobileNumber">
                                                            <a href="tel:111 222 333" class="mobileNumber">111 222 333</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <i class='bx bxs-envelope' style='color:#F2557E'></i>
                                                        </li>
                                                        <li class="emailAddress">
                                                            <a href="mailto:" class="emailAddress">
                                                                john@smith.com
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <i class='bx bx-link-alt' style='color:#F2557E'></i>
                                                        </li>
                                                        <li class="websiteUrl">
                                                            <a href=" //" class="websiteUrl">
                                                                www.hubspot.com
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-location-dot" style='color:#F2557E'></i>
                                                        </li>
                                                        <li class="address1 pl-1">
                                                            <a href="#" class="address1">line 1</a>
                                                        </li>
                                                        ,
                                                        <li class="address2">
                                                            <a href="#" class="address2">line 2</a>
                                                        </li>
                                                        ,
                                                        <li class="address3">
                                                            <a href="#" class="address3">line 3</a>
                                                        </li>
                                                        ,
                                                        <li class="address4">
                                                            <a href="#" class="address4">line 4</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="ownSignature max-x">
                                                    <a href="#" target="_blank" rel="noopener noreferrer" class="ownSignature">Create Your Own Free Signature</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mt-5 text-center">
                        <a href="#" class="themeBtn themeBtn--secondary themeBtn--center">Create signature
                        </a>
                        <span class="clear-all mt-5">
                            <div class="reload"><span>
                                    <i class="fa-solid fa-rotate-right"></i>
                                </span></div>
                            Clear all input fields
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $footer = "footer footer--none";
include 'include/footer.php'; ?>

<script>

</script>