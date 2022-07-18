<!doctype html>
<html class="no-js" lang="zxx">
   @include('layouts.Navbar')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-7">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content text-center">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">List your home with the world's <br>
                                largest travel community</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START FORM AREA
================================= -->
<section class="listing-form section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="listing-header pb-4">
                    <h3 class="title font-size-28 pb-2">Add your Farm</h3>
                   
                    <p class="font-size-14"><a href="#" class="text-color">Read the complete Trizen policy for accommodations.</a></p>
                </div>
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-user mr-2 text-gray"></i>Your information</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Your Name</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Your name">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Your Email</label>
                                    <div class="form-group">
                                        <span class="la la-envelope-o form-icon"></span>
                                        <input class="form-control" type="email" name="email" placeholder="Your email">
                                    </div>
                                </div>
         
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-gear mr-2 text-gray"></i>Listing information for your accommodation</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Farm name</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Farm name">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Country</label>
                                    <div class="form-group select-contain w-100">
                                        <select class=" form-control select-contain" style="color: rgb(132,117,125);padding:10px;">
                                            <option value="">Select a city </option>
                                            <option value="Zarqa">Zarqa</option>
                                            <option value="Amman">Amman</option>
                                            <option value="Irbid">Irbid</option>
                                            <option value="Gersh">Gersh</option>
                                            <option value="Ajloun">Ajloun</option>
                                            <option value="Mafreq">Mafreq</option>
                                            <option value="Karak">Karak</option>
                                            <option value="Aqaba">Aqaba</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                           
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">City/Town, State/Province/Region</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="example: Deadsea">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Street address</label>
                                    <div class="form-group">
                                        <span class="la la-map-marker form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Building number and street name, example: 123 Main Street">
                                    </div>
                                </div>
                            </div><!-- end col-lg-8 -->
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Additional address information</label>
                                    <div class="form-group">
                                        <span class="la la-map-marker form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Suite number, intersection, plaza, square">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-map mr-2 text-gray"></i>Map Location</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Longitude</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input class="form-control" id="longitude" type="text" placeholder="Map Longitude">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Latitude</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input class="form-control" id="latitude" type="text" placeholder="Map Latitude">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">For precise location, drag the blue marker on the map.</label>
                                    <div class="form-group map-container">
                                        <iframe width="100%" height="600" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3492421.418466574!2d39.36652778990549!3d31.260386053877973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sjo!4v1656302091698!5m2!1sar!2sjo" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br />
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->
                            <div class="col-lg-12">
                                <label class="label-text">Or enter Coordinates (longitude and latitude) Manually.</label>
                            </div><!-- end col-lg-12 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Longitude</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input class="form-control" type="text" placeholder="40.731444531797315">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Latitude</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input class="form-control" type="text" placeholder="40.731444531797315">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-12">
                                <div class="btn-box">
                                    <button type="button" class="theme-btn theme-btn-small">Find on Map</button>
                                </div>
                            </div><!-- end col-lg-12 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-user mr-2 text-gray"></i>Contact Details</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Phone</label>
                                    <div class="form-group">
                                        <span class="la la-phone form-icon"></span>
                                        <input class="form-control" type="text" placeholder="+962 0777777">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Email</label>
                                    <div class="form-group">
                                        <span class="la la-envelope-o form-icon"></span>
                                        <input class="form-control" type="text" placeholder="Email for customer inquiries">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Your Website Address</label>
                                    <div class="form-group">
                                        <span class="la la-globe form-icon"></span>
                                        <input class="form-control" type="text" placeholder="https://www.techydevs.com/">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Facebook Page</label>
                                    <div class="form-group">
                                        <span class="la la-facebook form-icon"></span>
                                        <input class="form-control" type="text" placeholder="https://www.facebook.com/">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Instagram Page</label>
                                    <div class="form-group">
                                        <span class="la la-instagram form-icon"></span>
                                        <input class="form-control" type="text" placeholder="https://www.instagram.com/">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Twitter Page</label>
                                    <div class="form-group">
                                        <span class="la la-twitter form-icon"></span>
                                        <input class="form-control" type="text" placeholder="https://www.twitter.com/">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Linkedin Page</label>
                                    <div class="form-group">
                                        <span class="la la-linkedin form-icon"></span>
                                        <input class="form-control" type="text" placeholder="https://www.linkedin.com/">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                        </form>
                    </div>
                    <!-- end form-content -->

                </div><!-- end form-box -->
            <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-clock mr-2 text-gray"></i>Booking dates</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Day</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Example: day 1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">From</label>
                                    <div class="form-group">
                                        <span class="la la-clock form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="4:00 AM">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">To</label>
                                    <div class="form-group">
                                        <span class="la la-clock form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="8:00 PM">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-12">
                                <div class="file-upload-wrap file-upload-wrap-2">
                                    <input type="file" name="files[]" class="multi file-upload-input with-preview" multiple>
                                    <span class="file-upload-text"><i class="la la-upload mr-2"></i>Upload Image</span>
                                </div>
                            </div><!-- end col-lg-12 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                 <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-clock mr-2 text-gray"></i>Information about Farm hours</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-4">
                                <div class="input-box mb-4">
                                    <label class="label-text">Monday</label>
                                    <div class="form-group d-flex align-items-center">
                                        <input class="form-control pl-3" type="text" name="text">
                                        <span class="px-2">to</span>
                                        <input class="form-control pl-3" type="text" name="text">
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="allDay1">
                                        <label for="allDay1">Open 24 Hours</label>
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="input-box mb-4">
                                    <label class="label-text">Tuesday</label>
                                    <div class="form-group d-flex align-items-center">
                                        <input class="form-control pl-3" type="text" name="text">
                                        <span class="px-2">to</span>
                                        <input class="form-control pl-3" type="text" name="text">
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="allDay2">
                                        <label for="allDay2">Open 24 Hours</label>
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="input-box mb-4">
                                    <label class="label-text">Wednesday</label>
                                    <div class="form-group d-flex align-items-center">
                                        <input class="form-control pl-3" type="text" name="text">
                                        <span class="px-2">to</span>
                                        <input class="form-control pl-3" type="text" name="text">
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="allDay3">
                                        <label for="allDay3">Open 24 Hours</label>
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="input-box mb-4">
                                    <label class="label-text">Thursday</label>
                                    <div class="form-group d-flex align-items-center">
                                        <input class="form-control pl-3" type="text" name="text">
                                        <span class="px-2">to</span>
                                        <input class="form-control pl-3" type="text" name="text">
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="allDay4">
                                        <label for="allDay4">Open 24 Hours</label>
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="input-box mb-4">
                                    <label class="label-text">Friday</label>
                                    <div class="form-group d-flex align-items-center">
                                        <input class="form-control pl-3" type="text" name="text">
                                        <span class="px-2">to</span>
                                        <input class="form-control pl-3" type="text" name="text">
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="allDay5">
                                        <label for="allDay5">Open 24 Hours</label>
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="input-box mb-4">
                                    <label class="label-text">Saturday</label>
                                    <div class="form-group d-flex align-items-center">
                                        <input class="form-control pl-3" type="text" name="text">
                                        <span class="px-2">to</span>
                                        <input class="form-control pl-3" type="text" name="text">
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="allDay6">
                                        <label for="allDay6">Open 24 Hours</label>
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="input-box mb-4">
                                    <label class="label-text">Sunday</label>
                                    <div class="form-group d-flex align-items-center">
                                        <input class="form-control pl-3" type="text" name="text">
                                        <span class="px-2">to</span>
                                        <input class="form-control pl-3" type="text" name="text">
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="allDay7">
                                        <label for="allDay7">Open 24 Hours</label>
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-12">
                                <h3 class="title font-size-16 font-weight-medium text-gray pb-3">Recommended length of visit <span class="undo-btn ml-2">Undo</span></h3>
                                <a href="javascript:void(0)" class="recommended-tag theme-btn theme-btn-small theme-btn-gray font-weight-regular mr-2">&lt; 8 hour</a>
                                <a href="javascript:void(0)" class="recommended-tag theme-btn theme-btn-small theme-btn-gray font-weight-regular mr-2">9 hours</a>
                                <a href="javascript:void(0)" class="recommended-tag theme-btn theme-btn-small theme-btn-gray font-weight-regular mr-2">24 hours</a>
                                <a href="javascript:void(0)" class="recommended-tag theme-btn theme-btn-small theme-btn-gray font-weight-regular mr-2">More than 24 hours</a>
                            </div>
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-building-o mr-2 text-gray"></i>Information about Farm</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Total number of rooms </label>
                                    <div class="form-group">
                                        <span class="la la-pencil form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Total number of rooms">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Price range (per night)</label>
                                    <div class="form-group d-flex align-items-center">
                                        <input class="form-control pl-3" type="text" name="text" placeholder="Min">
                                        <span class="px-2">to</span>
                                        <input class="form-control pl-3" type="text" name="text" placeholder="Max">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text mb-0 line-height-20">Description of your Farm</label>
                                    <p class="font-size-13 mb-3 line-height-20">400 character limit</p>
                                    <div class="form-group">
                                        <span class="la la-pencil form-icon"></span>
                                        <textarea class="message-control form-control" name="message" placeholder=" "></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text text-color-6">Minimum stay* </label>
                                    <div class="form-group d-flex align-items-center">
                                        <label for="radio-1" class="radio-trigger mb-0 font-size-14 mr-3">
                                            <input type="radio" id="radio-1" name="radio">
                                            <span class="checkmark"></span>
                                            <span>3 nights or less</span>
                                        </label>
                                        <label for="radio-2" class="radio-trigger mb-0 font-size-14">
                                            <input type="radio" id="radio-2" name="radio">
                                            <span class="checkmark"></span>
                                            <span>More than 3 nights</span>
                                        </label>
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text text-color-6">Security *</label>
                                    <div class="form-group d-flex align-items-center">
                                        <label for="radio-3" class="radio-trigger mb-0 font-size-14 mr-3">
                                            <input type="radio" id="radio-3" name="radio">
                                            <span class="checkmark"></span>
                                            <span>On site</span>
                                        </label>
                                        <label for="radio-4" class="radio-trigger mb-0 font-size-14">
                                            <input type="radio" id="radio-4" name="radio">
                                            <span class="checkmark"></span>
                                            <span>None</span>
                                        </label>
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text text-color-6">have pool *</label>
                                    <div class="form-group d-flex align-items-center">
                                        <label for="radio-5" class="radio-trigger mb-0 font-size-14 mr-3">
                                            <input type="radio" id="radio-5" name="radio">
                                            <span class="checkmark"></span>
                                            <span>Yes</span>
                                        </label>
                                        <label for="radio-6" class="radio-trigger mb-0 font-size-14">
                                            <input type="radio" id="radio-6" name="radio">
                                            <span class="checkmark"></span>
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text text-color-6">have football Studim *</label>
                                    <div class="form-group d-flex align-items-center">
                                        <label for="radio-7" class="radio-trigger mb-0 font-size-14 mr-3">
                                            <input type="radio" id="radio-7" name="radio">
                                            <span class="checkmark"></span>
                                            <span>Yes</span>
                                        </label>
                                        <label for="radio-8" class="radio-trigger mb-0 font-size-14">
                                            <input type="radio" id="radio-8" name="radio">
                                            <span class="checkmark"></span>
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text text-color-6">Farm frequency *</label>
                                    <div class="form-group d-flex align-items-center">
                                        <label for="radio-9" class="radio-trigger mb-0 font-size-14 mr-3">
                                            <input type="radio" id="radio-9" name="radio">
                                            <span class="checkmark"></span>
                                            <span>Daily</span>
                                        </label>
                                        <label for="radio-10" class="radio-trigger mb-0 font-size-14 mr-3">
                                            <input type="radio" id="radio-10" name="radio">
                                            <span class="checkmark"></span>
                                            <span>Weekly</span>
                                        </label>
                                        <label for="radio-11" class="radio-trigger mb-0 font-size-14 mr-3">
                                            <input type="radio" id="radio-11" name="radio">
                                            <span class="checkmark"></span>
                                            <span>Monthly</span>
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text text-color-6">play area*</label>
                                    <div class="form-group d-flex align-items-center">
                                        <label for="radio-16" class="radio-trigger mb-0 font-size-14 mr-3">
                                            <input type="radio" id="radio-16" name="radio">
                                            <span class="checkmark"></span>
                                            <span>Yes</span>
                                        </label>
                                        <label for="radio-17" class="radio-trigger mb-0 font-size-14 mr-3">
                                            <input type="radio" id="radio-17" name="radio">
                                            <span class="checkmark"></span>
                                            <span>No</span>
                                        </label>
    
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-gear mr-2 text-gray"></i>Amenities</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="AirportTransportation">
                                    <label for="outdoor dining tables">outdoor dining tables</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="BarLounge">
                                    <label for="Outdoor bathrooms with shower">Outdoor bathrooms with shower</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="Beach">
                                    <label for="Barbecue place">Barbecue place</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="BeverageSelection">
                                    <label for="sun loungers">sun loungers</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="SwimmingPool">
                                    <label for="SwimmingPool">Swimming Pool</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="WIFI">
                                    <label for="WIFI">WI-FI</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="Coffee">
                                    <label for="Coffee">Coffee</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="AirConditioning">
                                    <label for="AirConditioning">Air Conditioning</label>
                                </div>
                             
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="WheelchairAccess">
                                    <label for="headphones ">External headphones with bluetooth</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="FitnessFacility">
                                    <label for="DJ">DJ</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="Breakfast">
                                    <label for="sterilized pool">Filtered and sterilized pool</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="HandicapAccessible">
                                    <label for="charging point">electric car charging point</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="PetsAllowed">
                                    <label for="PetsAllowed">Pets Allowed</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="SuitableForEvents">
                                    <label for="Children'sPool">Children's pool 13*5 with a depth of 1m</label>
                                </div>
                          
                            </div><!-- end col-lg-6 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-photo mr-2 text-gray"></i>Choose a photo to represent this listing</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-12">
                                <div class="file-upload-wrap">
                                    <input type="file" name="files[]" class="multi file-upload-input with-preview" multiple maxlength="3">
                                    <span class="file-upload-text"><i class="la la-upload mr-2"></i>Click or drag images here to upload</span>
                                </div>
                            </div><!-- end col-lg-12 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="submit-box">
                    <h3 class="title pb-3">Submit this listing</h3>
                    <div class="custom-checkbox">
                        <input type="checkbox" id="agreeChb">
                        <label for="agreeChb">Check this box to certify that you are an official representative of the property for which you are submitting this listing and that the information you have submitted is correct. In submitting a photo, you also certify that you have the right to use the photo on the web and agree to hold Trizen harmless for any and all copyright issues arising from your use of the image.</label>
                    </div>
                    <div class="btn-box pt-3">
                        <button type="submit" class="theme-btn">Submit Listing <i class="la la-arrow-right ml-1"></i></button>
                    </div>
                </div><!-- end submit-box -->
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end listing-form --

    END FORM AREA
================================= -->
 <footer>
       <!-- Footer Start-->
       <div class="footer-area black-bg footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-30">
                         <!-- logo -->
                         <div class="footer-logo">
                           <a href="index.html"><img src="assets/img/logo/logoo.png" alt=""></a>
                         </div>
                         <div class="footer-social footer-social2">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fas fa-globe"></i></a>
                             <a href="#"><i class="fab fa-behance"></i></a>
                         </div>
                         <div class="footer-pera">
                              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="" target="_blank">Esraa</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Quick Links</h4>
                               <ul>
                                   <li><a href="#">About Farms</a></li>
                                   <li><a href="#">Our Best Farm</a></li>
                                   <li><a href="#">search</a></li>
                                   <li><a href="#">contact</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Reservations</h4>
                               <ul>
                                   <li><a href="#">Tel: +96207755555</a></li>
                                   <li><a href="#">Skype:esraakh</a></li>
                                   <li><a href="#">esraa.khalilah@gmail.com</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Our Location</h4>
                               <ul>
                                   <li><a href="#">AlGheish St,</a></li>
                                   <li><a href="#">Zarqa</a></li>
                               </ul>
                               <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                              <button type="submit" name="submit" id="newsletter-submit"
                                              class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.jpg" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->



<!-- Template JS Files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.countTo.min.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/jquery.multi-file.min.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYzby4yYDVaXPmtu4jZAGR258K6IYwjIY&amp;libraries"></script>
<script src="js/map-add.js"></script>
<script src="js/main.js"></script>
<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
</body>

</html>