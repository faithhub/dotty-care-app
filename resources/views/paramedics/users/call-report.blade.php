@extends('layouts.user')
@section('content')
    <div class="row mb-5">
        <div class="col-lg-3">
            <div class="card position-sticky top-1">
                <ul class="nav flex-column bg-white border-radius-lg p-3">
                    <li class="nav-item mb-2 {{ request()->is('add-user') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center" href="{{ route('add-user') }}">
                            <i class="ni ni-single-02 me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Add New User</span>
                        </a>
                    <li class="nav-item mb-2 {{ request()->is('call-details') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center"
                            href="{{ route('call-details') }}">
                            <i class="ni ni-ui-04 me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Call Details</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2 {{ request()->is('assessment') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center"
                            href="{{ route('assessment') }}">
                            <i class="ni ni-paper-diploma me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Assessment</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2 {{ request()->is('treatement') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center"
                            href="{{ route('treatement') }}">
                            <i class="ni ni-spaceship me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Treatment</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2 {{ request()->is('call-report') ? 'nav-item-active' : '' }}">
                        <a class="nav-link text-body d-flex align-items-center"
                            href="{{ route('call-report') }}">
                            <i class="ni ni-collection me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Call Report</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 mt-lg-0 mt-4">
            <div class="row container">
                <div class="col-12">
                    <div class="multisteps-form">
                        <div class="row mt-6">
                            <div class="col-12 col-lg-12 mx-auto">
                                <div class="multisteps-form__progress">
                                    <button class="multisteps-form__progress-btn js-active" type="button"
                                        title="User Info">
                                        <span>Patient Details</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Address">
                                        <span>Vehicle Details</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                                        <span>Incident Details</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-12 m-auto">
                                <form class="multisteps-form__form mb-5">
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
                                        data-animation="FadeIn">
                                        <div class="row text-center">

                                        </div>
                                        <div class="multisteps-form__content">
                                            <div class="row text-start">
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Surname</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="Surname" />
                                                </div>
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>First Name</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="First Name" />
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Street</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="" />
                                                </div>
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>City</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="" />
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-5 ms-auto mt-3">
                                                    <label>Province</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="" />
                                                </div>
                                                <div class="col-6 col-md-5 ms-auto mt-3">
                                                    <label for="country">Country</label>
                                                    <!--span style="color: red !important; display: inline; float: none;">*</span-->

                                                    <select id="country" name="country" class="form-control">
                                                        <option value="Afghanistan">Select</option>
                                                        <option value="Åland Islands">Åland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda
                                                        </option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian
                                                            Ocean Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                        </option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                        <option value="India">India</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-2 ms-auto mt-3">
                                                    <label>Postal Code</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="" />
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-5 ms-auto mt-3">
                                                    <label>Telephone</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="" />
                                                </div>
                                                <div class="col-6 col-md-5 ms-auto mt-3">
                                                    <label>Date Of Birth</label>
                                                    <input class="multisteps-form__input form-control" type="date"
                                                        placeholder="" />
                                                </div>
                                                <div class="col-12 col-md-2 ms-auto mt-3">
                                                    <label>Race</label>
                                                    <select class="form-control col-4 col-md-2" name="choose-race"
                                                        id="choose-race">
                                                        <option value="">select</option>
                                                        <option value="Black">Black</option>
                                                        <option value="White">White</option>
                                                        <option value="Brown">Brown</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-4 ms-auto mt-3">
                                                    <label>Age</label>
                                                    <input class="multisteps-form__input form-control" type="number"
                                                        placeholder="Age" />
                                                </div>
                                                <div class="col-6 col-md-4 ms-auto mt-3">
                                                    <label>Gender</label>
                                                    <!--input class="multisteps-form__input form-control" type="text" placeholder="Gender" /-->
                                                    <select class="multisteps-form__input form-control" name="gender">
                                                        <option value="none" selected>select</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Non-binary</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-4 ms-auto mt-3">
                                                    <label>MediCare</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="" />
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Temporary ID</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="" />
                                                </div>
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Hospital Chart#</label>
                                                    <input class="multisteps-form__input form-control" type="number"
                                                        placeholder="" />
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-12 col-md-12 ms-auto mt-3">
                                                    <label>Comments</label>
                                                    <textarea class="multisteps-form__input form-control" type="text" placeholder=""></textarea>
                                                </div>
                                            </div>

                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                    type="button" title="Next">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Vehicle details -->

                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <div class="row text-center"></div>
                                        <div class="multisteps-form__content">
                                            <div class="row text-start">
                                                <div class="col-6 col-md-3 ms-auto mt-2">
                                                    <h6> </h6>
                                                    <label>Time Notified</label>
                                                    <input class="multisteps-form__input form-control" type="time"
                                                        placeholder="Notified" />
                                                </div>
                                                <div class="col-6 col-md-3 ms-auto mt-3">
                                                    <label>Time En Route</label>
                                                    <input class="multisteps-form__input form-control" type="time"
                                                        placeholder="En Route" />
                                                </div>
                                                <div class="col-6 col-md-3 ms-auto mt-3">
                                                    <label>Time At Scence</label>
                                                    <input class="multisteps-form__input form-control" type="time"
                                                        placeholder="At Scence" />
                                                </div>
                                                <div class="col-6 col-md-3 ms-auto mt-3">
                                                    <label>Crew Patient</label>
                                                    <input class="multisteps-form__input form-control" type="time"
                                                        placeholder="Crew Patient" />
                                                </div>
                                                <div class="col-6 col-md-3 ms-auto mt-3">
                                                    <label>Time Out of Scence</label>
                                                    <input class="multisteps-form__input form-control" type="time"
                                                        placeholder="Left Scence" />
                                                </div>
                                                <div class="col-6 col-md-3 ms-auto mt-3">
                                                    <label>Time At Destination</label>
                                                    <input class="multisteps-form__input form-control" type="time"
                                                        placeholder="At Destination" />
                                                </div>
                                                <div class="col-6 col-md-3 ms-auto mt-3">
                                                    <label>Available</label>
                                                    <input class="multisteps-form__input form-control" type="time"
                                                        placeholder="Available" />
                                                </div>
                                                <div class="col-6 col-md-3 ms-auto mt-3">
                                                    <label>Back Area</label>
                                                    <input class="multisteps-form__input form-control" type="time"
                                                        placeholder="Back Area" />
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-12 col-md-6 ms-auto mt-3">
                                                    <label>Responce to Scence</label>
                                                    <select class="form-control col-4 col-md-2" name="choose-race"
                                                        id="choose-race">
                                                        <option value="">Type</option>
                                                        <option value="HOT">HOT</option>
                                                        <option value="COLD">COLD</option>
                                                    </select>
                                                </div>

                                                <div class="col-12 col-md-6 ms-auto mt-3">
                                                    <label visibility="hidden"> . </label>
                                                    <select class="form-control col-4 col-md-2" name="choose-race"
                                                        id="choose-race">
                                                        <option value="">Change in Response</option>
                                                        <option value="HOT">HOT</option>
                                                        <option value="COLD">COLD</option>
                                                    </select>
                                                </div>

                                                <div class="col-6 col-md-6 ms-auto mt-2">
                                                    <label>Responce From Scene</label>
                                                    <select class="form-control col-4 col-md-2" name="choose-race"
                                                        id="choose-race">
                                                        <option value="">Type</option>
                                                        <option value="HOT">HOT</option>
                                                        <option value="COLD">COLD</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label></label>
                                                    <select class="form-control col-4 col-md-2" name="choose-race"
                                                        id="choose-race">
                                                        <option value="">Change in Response</option>
                                                        <option value="HOT">HOT</option>
                                                        <option value="COLD">COLD</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-4 ms-auto mt-2">
                                                    <label>Crew Type</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="Driver" />
                                                </div>

                                                <div class="col-6 col-md-4 ms-auto mt-3">
                                                    <label></label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="Attendant" />
                                                </div>

                                                <div class="col-12 col-md-4 ms-auto mt-3">
                                                    <label></label>
                                                    <input class="multisteps-form__input form-control" type="number"
                                                        placeholder="Assisting Personal" />
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-4 ms-auto mt-2">
                                                    <label>Mileage </label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="Out" />
                                                </div>
                                                <div class="col-6 col-md-4 ms-auto mt-3">
                                                    <label></label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="In" />
                                                </div>
                                                <div class="col-6 col-md-4 ms-auto mt-3">
                                                    <label></label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="At Scene" />
                                                </div>
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label></label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="At Destination" />
                                                </div>
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label></label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="Total" />
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Patient Contact</label>
                                                    <input class="multisteps-form__input form-control" type="number"
                                                        placeholder="" />
                                                </div>
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Destination Determinant</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="" />
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-4 ms-auto mt-3">
                                                    <label>Document Start Date</label>
                                                    <input class="multisteps-form__input form-control" type="date"
                                                        placeholder="" />
                                                </div>
                                                <div class="col-6 col-md-4 ms-auto mt-3">
                                                    <label>Document Finished Date</label>
                                                    <input class="multisteps-form__input form-control" type="date"
                                                        placeholder="" />
                                                </div>
                                                <div class="col-12 col-md-4 ms-auto mt-3">
                                                    <label>Date Notified</label>
                                                    <input class="multisteps-form__input form-control" type="date"
                                                        placeholder="" />
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                    title="Prev">
                                                    Prev
                                                </button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                    type="button" title="Next">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Incident details -->

                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <div class="multisteps-form__content">
                                            <div class="row text-start">
                                                <div class="col-12 col-md-3 ms-auto mt-3">
                                                    <label>Service Code</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="" />
                                                </div>
                                                <div class="col-12 col-md-3 ms-auto mt-3">
                                                    <label>Service Type</label>
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="" />
                                                </div>
                                                <div class="col-12 col-md-3 ms-auto mt-3">
                                                    <label>Date Of Incident</label>
                                                    <input class="multisteps-form__input form-control" type="date"
                                                        placeholder="" />
                                                </div>
                                                <div class="col-12 col-md-3 ms-auto mt-3">
                                                    <label>Time Of Incident</label>
                                                    <input class="multisteps-form__input form-control" type="time"
                                                        placeholder="" />
                                                </div>
                                            </div>

                                            <div class="multisteps-form__content">
                                                <div class="row text-start">
                                                    <div class="col-12 col-md-5 ms-auto mt-2">
                                                        <label>Incident Location</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Street" />
                                                    </div>
                                                    <div class="col-12 col-md-3 ms-auto mt-3">
                                                        <label></label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="City" />
                                                    </div>
                                                    <div class="col-12 col-md-2 ms-auto mt-3">
                                                        <label></label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Province" />
                                                    </div>
                                                    <div class="col-12 col-md-2 ms-auto mt-3">
                                                        <label></label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Postal Code" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="multisteps-form__content">
                                                <div class="row text-start">
                                                    <div class="col-12 col-md-4 ms-auto mt-3">
                                                        <label>Destination Determination</label>
                                                        <select class="form-control col-4 col-md-2" name="choose-race"
                                                            id="choose-race">
                                                            <option value="" selected="true">select</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-md-4 ms-auto mt-3">
                                                        <label>Graphic Locator</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Graphic Locator" />
                                                    </div>
                                                    <div class="col-12 col-md-4 ms-auto mt-3">
                                                        <label>Scene Location Type</label>
                                                        <select class="form-control col-4 col-md-2" name="choose-race"
                                                            id="choose-race">
                                                            <option value="" selected="true">select</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="multisteps-form__content">
                                                <div class="row text-start">
                                                    <div class="col-12 col-md-4 ms-auto mt-2">
                                                        <label>Destination Facility Code</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Destination Facility Code" />
                                                    </div>
                                                    <div class="col-12 col-md-4 ms-auto mt-3">
                                                        <label>Scene Facility Code</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Scene Facility Code" />
                                                    </div>
                                                    <div class="col-12 col-md-4 ms-auto mt-3">
                                                        <label>Dest Location Type</label>
                                                        <select class="form-control col-4 col-md-2" name="choose-race"
                                                            id="choose-race">
                                                            <option value="" selected="true">select</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="yes">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="multisteps-form__content">
                                                <div class="row text-start">
                                                    <div class="col-12 col-md-5 ms-auto mt-2">
                                                        <label>Destination Location</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Street" />
                                                    </div>
                                                    <div class="col-12 col-md-3 ms-auto mt-3">
                                                        <label></label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="City" />
                                                    </div>
                                                    <div class="col-12 col-md-2 ms-auto mt-3">
                                                        <label></label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Province" />
                                                    </div>
                                                    <div class="col-12 col-md-2 ms-auto mt-3">
                                                        <label></label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Postal Code" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="multisteps-form__content">
                                                <div class="row text-start">
                                                    <div class="col-12 col-md-6 ms-auto mt-2">
                                                        <label>Service Payment</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Responsiblity" />
                                                    </div>
                                                    <div class="col-12 col-md-6 ms-auto mt-3">
                                                        <label></label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            placeholder="Number" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="multisteps-form__content">
                                                <div class="row text-start">
                                                    <div class="col-12 col-md-6 ms-auto mt-2">
                                                        <label>Factors Affecting EMS</label>
                                                        <textarea class="multisteps-form__input form-control" type="text" placeholder="Factors Affecting EMS"></textarea>
                                                    </div>
                                                    <div class="col-12 col-md-6 ms-auto mt-3">
                                                        <label>Patient Disposition</label>
                                                        <select class="form-control col-4 col-md-2" name="choose-race"
                                                            id="choose-race">
                                                            <option value="" selected="true">select</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="button-row d-flex mt-4 col-12">
                                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                        title="Prev">
                                                        Prev
                                                    </button>
                                                    <button class="btn bg-gradient-dark ms-auto mb-0" type="button"
                                                        title="Send">
                                                        Send
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
