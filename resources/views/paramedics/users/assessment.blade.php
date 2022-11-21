@extends('layouts.user')
@section('content')
    <div class="row mb-5">
        <div class="col-lg-3">
            @include('layouts.includes.user-nav')
        </div>
        <div class="col-lg-9 mt-lg-0 mt-4">
            <div class="row container">
                <div class="col-12">
                    <div class="multisteps-form">
                        <div class="row mt-6">
                            <div class="col-12 col-lg-12 mx-auto my-5">
                                <div class="multisteps-form__progress">
                                    <button class="multisteps-form__progress-btn js-active" type="button" title="Patient History">
                                        <span>Patient History</span>
                                        </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Primary Assessment">
                                        <span>Primary Assessment</span>
                                        </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Patient Assessment">
                                        <span>Patient Assessment</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-12 m-auto">
                                <form class="multisteps-form__form" method="POST" action="">
                                    @csrf
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                        <div class="row text-center">

                                        </div>
                                        <div class="multisteps-form__content">
                                            <div class="row text-start">
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Date of Injury</label>
                                                    <input class="multisteps-form__input form-control" type="date" name="date_of_injury" placeholder="" />
                                                </div>
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Time Of Injury</label>
                                                    <input class="multisteps-form__input form-control" type="time" name="time_of_injury" placeholder="" />
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Co-Respoders</label>
                                                    <select class="form-control" name="co_responders" id="Co-Respoders">
                                                        <option value="">select</option>
                                                        <option value="">Law Enforcement</option>
                                                        <option value="">Fire</option>
                                                        <option value="">Other First Responders</option>
                                                        <option value="">None</option>
                                                        </select>
                                                </div>
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Treatment Rendered</label>
                                                    <select class="form-control" name="treatment_rendered" id="treatment rendered">
                                                        <option value="">Yes</option>
                                                        <option value="">No</option>
                                                        </select>
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Patient Condition At Destination</label>
                                                    <select class="form-control" name="patient_condition_at_destination" id="choices-country">
                                                        <option value="">Select</option>
                                                        <option value="">Stable</option>
                                                        <option value="">Improved</option>
                                                        <option value="">Deteriorated</option>
                                                    </select>
                                                </div>

                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Patient Displacement</label>
                                                    <select class="form-control" name="patient_displacement" id="choices-country">
                                                        <option value="">Yes</option>
                                                        <option value="">No</option>
                                                        </select>
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Suspected Intoxication</label>
                                                    <select class="form-control" name="suspected_intoxication" id="choices-country">
                                                        <option value="">Select</option>
                                                        <option value="">Yes as reported by patient</option>
                                                        <option value="">Yes as reported by bystander</option>
                                                        <option value="">Yes as suspected by provider</option>
                                                        <option value="">Not suspected</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Chief Complaint</label>
                                                    <input class="multisteps-form__input form-control" type="text" name="chief_complaint" placeholder="" />
                                                </div>
                                            </div>

                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Vehicle details -->

                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                        <div class="row text-center">

                                        </div>
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Nero Responce</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Body Sytem</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Glascow & Pupil</button>
                                                <button class="nav-link" id="nav-general-tab" data-bs-toggle="tab" data-bs-target="#nav-general" type="button" role="tab" aria-controls="nav-general" aria-selected="false">General Assessment</button>
                                                <button class="nav-link" id="nav-airway-tab" data-bs-toggle="tab" data-bs-target="#nav-airway" type="button" role="tab" aria-controls="nav-airway" aria-selected="false">Airway</button>
                                                <button class="nav-link" id="nav-symptoms-tab" data-bs-toggle="tab" data-bs-target="#nav-symptoms" type="button" role="tab" aria-controls="nav-symptoms" aria-selected="false">Symptoms</button>

                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="row">

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" name="normal" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Normal
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="confused" id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                          Confused
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="combative" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Combative
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="dysphasia" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Dysphasia
                                                        </label>
                                                    </div>

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="hallucinations" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Hallucinations
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="seizures" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Seizures
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="lethargic" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Lethargic
                                                        </label>
                                                    </div>

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="tremors" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Tremors
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="others" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Others
                                                        </label>
                                                    </div>
                                                </div>



                                                <div class="row text-start">

                                                    <div class="col-12 col-md-12 ms-auto mt-3">
                                                        <label></label>
                                                        <textarea class="multisteps-form__input form-control" type="text" name="text_area" placeholder="Specify Other"></textarea>
                                                    </div>
                                                </div>

                                                <div class="button-row d-flex mt-4">
                                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                                </div>
                                            </div>

                                            <!-- Body System -->

                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                                                <div class="row text-center">

                                                </div>
                                                <div class="multisteps-form__content">
                                                    <div class="row">

                                                        <div class="col-12 col-md-4 ms-auto mt-6">
                                                            <input class="" type="checkbox" value="" name="cardiovascular" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                              Cardiovascular
                                                            </label>
                                                        </div>
                                                        <div class="col-12 col-md-4 ms-auto mt-6">
                                                            <input class="" type="checkbox" value="" name="central_nervous_system" id="flexCheckChecked">
                                                            <label class="form-check-label" for="flexCheckChecked">
                                                              Central Nervous Syetem
                                                            </label>
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-6">
                                                            <input class="" type="checkbox" value="" name="endocrine" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                              Endocrine
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-6 col-md-4 ms-auto mt-6">
                                                            <input class="" type="checkbox" value="" name="gi" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                              GI
                                                            </label>
                                                        </div>

                                                        <div class="col-6 col-md-4 ms-auto mt-6">
                                                            <input class="" type="checkbox" value="" name="musculoskeletal" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                              Musculoskeletal
                                                            </label>
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-6">
                                                            <input class="" type="checkbox" value="" name="integumentary" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                              Integumentary
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-6 col-md-4 ms-auto mt-6">
                                                            <input class="" type="checkbox" value="" name="reproductive" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                              Reproductive
                                                            </label>
                                                        </div>

                                                        <div class="col-6 col-md-4 ms-auto mt-6">
                                                            <input class="" type="checkbox" value="" name="respiratory" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                              Respiratory
                                                            </label>
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-6">
                                                            <input class="" type="checkbox" value="" name="renal" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                              Renal
                                                            </label>
                                                        </div>
                                                    </div>



                                                    <div class="button-row d-flex mt-4">
                                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                                Next
                                                            </button>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                                                <div class="multisteps-form__content">
                                                    <div class="row text-start">
                                                        <div class="col-6 col-md-6 ms-auto mt-3">
                                                            <label>Time Of Asseessment</label>
                                                            <input class="multisteps-form__input form-control" name="time_of_assessment" type="time" placeholder="Eg. Soft" />
                                                        </div>
                                                        <div class="col-6 col-md-6 ms-auto mt-3">
                                                            <label>Glascow Eye</label>
                                                            <select class="form-control" name="glascow_eye" id="Co-Respoders">
                                                                <option value="Spontaneously">Spontaneously</option>
                                                                <option value="To verbal command">To verbal command</option>
                                                                <option value="To Pain">To Pain</option>
                                                                <option value="No response">No response</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-6 col-md-6 ms-auto mt-3">
                                                            <label>Glascow Verbal</label>
                                                            <select class="form-control" name="glascow_verbal" id="Co-Respoders">
                                                                    <option value="Oriented and Converses">Oriented and Converses</option>
                                                                    <option value="Disoriented and Converses">Disoriented and Converses</option>
                                                                    </select>
                                                        </div>
                                                        <div class="col-6 col-md-6 ms-auto mt-3">
                                                            <label>Glascow Motor</label>
                                                            <select class="form-control" name="glascow_motor" id="Co-Respoders">
                                                                    <option value="Obeys">Obeys</option>
                                                                    <option value="Localize Pain">Localize Pain</option>
                                                                    <option value="Flexion (Withdrawal)">Flexion (Withdrawal)</option>
                                                                    <option value="Flexion (Abnormal - Decorticate Rigidity)">Flexion (Abnormal - Decorticate Rigidity)</option>
                                                                    <option value="Extension (Decerebrate Rigidity)">Extension (Decerebrate Rigidity)</option>
                                                                    <option value="No Response">No Response</option>
                                                                    </select>
                                                        </div>
                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-6 col-md-6 ms-auto mt-3">
                                                            <label>Right Pupil Size</label>
                                                            <input class="multisteps-form__input form-control" type="number" name="right_pupil_size" placeholder="2.5" />
                                                        </div>

                                                        <div class="col-6 col-md-6 ms-auto mt-3">
                                                            <label>Reactivity</label>
                                                            <select class="form-control" name="reactivity" id="treatment rendered">
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                                <option value="Abnormal">Abnormal</option>
                                                                <option value="Not assessed">Not assessed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-6 col-md-6 ms-auto mt-3">
                                                            <label>Left Pupil Size</label>
                                                            <input class="multisteps-form__input form-control" type="number" name="left_pupil_size" placeholder="3.1" />
                                                            </select>
                                                        </div>

                                                        <div class="col-6 col-md-6 ms-auto mt-3">
                                                            <label>Reactivity</label>
                                                            <select class="form-control" name="reactivity" id="treatment rendered">
                                                            <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                                <option value="Abnormal">Abnormal</option>
                                                                <option value="Not assessed">Not assessed</option>
                                                        </select>
                                                        </div>
                                                    </div>



                                                    <div class="button-row d-flex mt-4">
                                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                                Next
                                                            </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">


                                                <div class="row">

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input type="checkbox" value="" name="asthma" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Asthma
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input type="checkbox" value="" name="chf" id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                          CHF
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input type="checkbox" value="" name="diabetes" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Diabetes
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="hypertension" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Hypertension
                                                        </label>
                                                    </div>

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="seizure_disorder" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Seizure Disorder
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="stroke" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Stroke
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="cancer" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Cancer
                                                        </label>
                                                    </div>

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="copd" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          COPD
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="angina" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Angina
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="myocardial_infraction" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Myocardial Infraction
                                                        </label>
                                                    </div>

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="renal_disease" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Renal Disease
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="psychiatric_illness" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Psychiatric illness
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="dnr_order" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          DNR Order
                                                        </label>
                                                    </div>

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="other" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Other
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <label></label>
                                                        <textarea class="multisteps-form__input form-control" type="text" name="text_area" placeholder="Please Specify"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row text-start">
                                                    <div class="col-6 col-md-6 ms-auto mt-3">
                                                        <label>Allergies</label>    
                                                        <textarea class="multisteps-form__input form-control" type="text" name="allergies" placeholder=""></textarea>
                                                    </div>
                                                    <div class="col-6 col-md-6 ms-auto mt-3">
                                                        <label>Prescription Medications</label>
                                                        <textarea class="multisteps-form__input form-control" type="time" name="prescription_medications" placeholder=""></textarea>
                                                    </div>

                                                </div>

                                                <div class="button-row d-flex mt-4">
                                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                            Next
                                                        </button>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-airway" role="tabpanel" aria-labelledby="nav-airway-tab">

                                                <div class="row text-center">

                                                </div>
                                                <div class="multisteps-form__content">
                                                    <div class="row text-start">
                                                        <div class="col-6 col-md-6 ms-auto mt-3">
                                                            <label>Status</label>
                                                            <select class="form-control" name="status" id="Co-Responders">
                                                                <option value="Argentina">Claer</option>
                                                                <option value="Brasil">Completely Obstructed</option>
                                                                <option value="Brasil">Partly Obstructed</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6 col-md-6 ms-auto mt-3">
                                                            <label>Breathing Effort</label>
                                                            <select class="form-control" name="choices-country" name="breathing_effort" id="Co-Responders">
                                                                <option value="Argentina">Effortless</option>
                                                                <option value="Brasil">Laboured</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-6 col-md-12 ms-auto mt-3">
                                                            <label>Volume</label>
                                                            <select class="form-control" name="volume" id="Co-Respoders">
                                                                <option value="">Normaal</option>
                                                                <option value="">Deep</option>
                                                                <option value="">Shalloow</option>
                                                                    
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-6 col-md-6 ms-auto mt-3">
                                                            <label>Circulation</label>
                                                            <select class="form-control" name="choices-country" name="circulation" id="treatment rendered">
                                                                <option value="">Weak</option>
                                                                <option value="">Normal</option>
                                                                <option value="">Bounding</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-6 col-md-6 ms-auto mt-3">
                                                            <label>Cardiac Rhythm   </label>
                                                            <select class="form-control" name="cardiac_rhythm" id="treatment rendered">
                                                                <option value="">Normal Sinus Rhythm</option>
                                                                <option value="">Sinus Bradycardia</option>
                                                                <option value="">Agonal</option>
                                                                <option value="">Artifact</option>
                                                                <option value="">Atrial Fibrillation/ Flutter</option>
                                                                <option value="">AV Block (1st degree)</option>
                                                                <option value="">AV Block (2nd degree)</option>
                                                                <option value="">AV Block (3rd degree)</option>
                                                                <option value="">Junctional</option>
                                                                <option value="">Bundle Branch Block</option>
                                                                <option value="">Paced Rhythm</option>
                                                                <option value="">PACs</option>
                                                                <option value="">PVCs</option>
                                                                <option value="">Sinus Dysrhythmia</option>
                                                                <option value="">SVT</option>
                                                                <option value="">V-fibrillation</option>
                                                                <option value="">V-tachycardia</option>
                                                                <option value="">Unknown</option>
                                                                <option value="">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="button-row d-flex mt-4">
                                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                                Next
                                                            </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="nav-symptoms" role="tabpanel" aria-labelledby="nav-symptoms-tab">
                                                <div class="row">

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="none" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          None
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="bleeding" id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                          Bleeding
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="breathing_difficulties" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Breathing Difficulties
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="diarrhea" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Diarrhea
                                                        </label>
                                                    </div>

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="fever" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Fever
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="headache" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Headache
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="psychiatric" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Psychiatric
                                                        </label>
                                                    </div>

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="pain" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Pain
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="mental_status_change" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Mental Status Change
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="rash"id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Rash
                                                        </label>
                                                    </div>

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="nausea" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Nausea
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="vomiting" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Vomiting
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="wound" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Wound
                                                        </label>
                                                    </div>

                                                    <div class="col-6 col-md-4 ms-auto mt-6">
                                                        <input class="" type="checkbox" value="" name="other" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Other
                                                        </label>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-6">
                                                        <label></label>
                                                        <textarea class="multisteps-form__input form-control" type="text" name="text_area" placeholder="Please Specify"></textarea>
                                                    </div>
                                                </div>

                                                <div class="button-row d-flex mt-4">
                                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                            Next
                                                        </button>
                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                    <!-- Incident details -->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">

                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-respiration-tab" data-bs-toggle="tab" data-bs-target="#nav-respiration" type="button" role="tab" aria-controls="nav-respiration" aria-selected="true">Respiration</button>
                                                <button class="nav-link" id="nav-seizure-tab" data-bs-toggle="tab" data-bs-target="#nav-seizure" type="button" role="tab" aria-controls="nav-seizure" aria-selected="false">Seizure</button>
                                                <button class="nav-link" id="nav-toxic-tab" data-bs-toggle="tab" data-bs-target="#nav-toxic" type="button" role="tab" aria-controls="nav-toxic" aria-selected="false">Toxic Exposure</button>
                                                <button class="nav-link" id="nav-cardiac-tab" data-bs-toggle="tab" data-bs-target="#nav-cardiac" type="button" role="tab" aria-controls="nav-cardiac" aria-selected="false">Cardiac Arrest</button>
                                                <button class="nav-link" id="nav-chest-tab" data-bs-toggle="tab" data-bs-target="#nav-chest" type="button" role="tab" aria-controls="nav-chest" aria-selected="false">Chest Pain</button>
                                                <button class="nav-link" id="nav-neonatal-tab" data-bs-toggle="tab" data-bs-target="#nav-neonatal" type="button" role="tab" aria-controls="nav-neonatal" aria-selected="false">Neonatal</button>
                                                <button class="nav-link" id="nav-obstetric-tab" data-bs-toggle="tab" data-bs-target="#nav-obstetric" type="button" role="tab" aria-controls="nav-obstetric" aria-selected="false">Obstetric</button>
                                                <button class="nav-link" id="nav-trauma-tab" data-bs-toggle="tab" data-bs-target="#nav-trauma" type="button" role="tab" aria-controls="nav-trauma" aria-selected="false">Trauma</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-respiration" role="tabpanel" aria-labelledby="nav-respiration-tab">

                                                <div class="multisteps-form__content">
                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Name Of The pre-EMS Medication</label>
                                                        <input class="multisteps-form__input form-control" type="text" name="name_of_the_pre-ems_medication" placeholder="Eg. Soft" />
                                                        </div>
                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Responce To pre-EMS Medication</label>
                                                            <select class="form-control col-4 col-md-2" name="responce_to_pre-ems_medication" id="choose-race">
                                                        <option value="Black">Unchanged</option>
                                                        <option value="White">Improved</option>
                                                        <option value="Brown">Deteriorated</option>
                                                        </select>
                                                        </div>
                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Coughing</label>
                                                            <select class="form-control col-4 col-md-2" name="coughing" id="choose-race">
                                                        <option value="Black">No cough</option>
                                                        <option value="White">Productive (with phlegm)</option>
                                                        <option value="White">Non-productive (no phlegm)</option>
                                                        <option value="White">Not noted</option>
                                                        </select>
                                                        </div>
                                                    </div>

                                                    <div class="multisteps-form__content">
                                                        <div class="row text-start">
                                                            <div class="col-6 col-md-6 ms-auto mt-3">
                                                                <label>Tobacco</label>
                                                                <select class="form-control col-4 col-md-3" name="tobacco" id="choose-race">
                                                            <option value="Black">Yes</option>
                                                            <option value="White">No</option>
                                                            <option value="White">Unknown</option>
                                                        </select>
                                                            </div>
                                                            <div class="col-6 col-md-6 ms-auto mt-3">
                                                                <label>Allergen Exposure</label>
                                                                <select class="form-control col-4 col-md-3" name="allergen_exposure" id="choose-race">
                                                            <option value="Black">Yes</option>
                                                            <option value="White">No</option>
                                                            <option value="White">Unknown</option>
                                                        </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="multisteps-form__content">
                                                        <div class="row text-start">
                                                            <div class="col-6 col-md-6 ms-auto mt-3">
                                                                <label>Level Of Distress</label>
                                                                <select class="form-control col-4 col-md-3" name="level_of_distress" id="choose-race">
                                                            <option value="Black">Mild</option>
                                                            <option value="White">Moderate</option>
                                                            <option value="White">Severe</option>
                                                        </select>
                                                            </div>
                                                            <div class="col-6 col-md-6 ms-auto mt-3">
                                                                <label>Allergen Exposure</label>
                                                                <select class="form-control col-4 col-md-3" name="allergen_exposure" id="choose-race">
                                                            <option value="Black">Yes</option>
                                                            <option value="White">No</option>
                                                            <option value="White">Unknown</option>
                                                        </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="button-row d-flex mt-4 col-12">
                                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                                            Prev
                                                        </button>
                                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">
                                                            Send
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="tab-pane fade" id="nav-seizure" role="tabpanel" aria-labelledby="nav-seizure-tab">
                                                <div class="multisteps-form__content">
                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Witnessed Siezure</label>
                                                            <select class="form-control col-4 col-md-2" name="choose-race" id="choose-race">
                                                                <option value="Black">Yes</option>
                                                                <option value="White">No</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Witness Siezure</label>
                                                            <select class="form-control col-4 col-md-2" name="choose-race" id="choose-race">
                                                            <option value="Black">Family / Friend</option>
                                                                <option value="White">Bystander</option>
                                                                <option value="White">Fire service personnel</option>
                                                                <option value="White">Law enforcement personnel</option>
                                                                <option value="White">Other first responder</option>
                                                                <option value="White">Ambulance Crew</option>
                                                                <option value="White">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Type Of Siezure</label>
                                                            <select class="form-control col-4 col-md-2" name="choose-race" id="choose-race">
                                                            <option value="Black">Family / Friend</option>
                                                                <option value="White">Bystander</option>
                                                                <option value="White">Fire service personnel</option>
                                                                <option value="White">Law enforcement personnel</option>
                                                                <option value="White">Other first responder</option>
                                                                <option value="White">Ambulance Crew</option>
                                                                <option value="White">Other</option>
                                                        </select>
                                                        </div>
                                                    </div>

                                                    <div class="multisteps-form__content">
                                                        <div class="row text-start">
                                                            <div class="col-6 col-md-6 ms-auto mt-3">
                                                                <label>Length Of Siezure</label>
                                                                <input class="multisteps-form__input form-control" type="number" placeholder="Eg. Soft" />
                                                                </select>
                                                            </div>
                                                            <div class="col-6 col-md-6 ms-auto mt-3">
                                                                <label>Number Of Siezure</label>
                                                                <input class="multisteps-form__input form-control" type="number" placeholder="Eg. Soft" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="button-row d-flex mt-4 col-12">
                                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                                            Prev
                                                        </button>
                                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">
                                                            Send
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-toxic" role="tabpanel" aria-labelledby="nav-toxic-tab">
                                                <div class="multisteps-form__content">
                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Nature of Exposure</label>
                                                            <select class="form-control col-4 col-md-2" name="nature_of_exposure" id="choose-race">
                                                                <option value="Black">Accidental</option>
                                                                <option value="White">Intentional (self-inflicted)</option>
                                                                <option value="White">Unknown</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Type Of Substance</label>
                                                            <select class="form-control col-4 col-md-2" name="type_of_substance" id="choose-race">
                                                                <option value="Black">Unknown</option>
                                                                <option value="White">Medications</option>
                                                                <option value="Brown">Alcohol</option>
                                                                <option value="Brown">Chemicals</option>
                                                                <option value="Brown">Plants</option>
                                                                <option value="Brown">Food</option>
                                                                <option value="Brown">Venom</option>
                                                                <option value="Brown">Radioactive material</option>
                                                                <option value="Brown">Smoke / Gas</option>
                                                                <option value="Brown">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Route Of Entry</label>
                                                            <select class="form-control col-4 col-md-2" name="route_of_entry" id="choose-race">
                                                            <option value="Black">Unknown</option>
                                                            <option value="White">Ingestion</option>
                                                            <option value="White">Inhalation</option>
                                                            <option value="White">Absorption</option>
                                                            <option value="White">Injection</option>
                                                            <option value="White">Bite / Sting</option>
                                                            <option value="White">Other</option>
                                                        </select>
                                                        </div>
                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Type Of Reaction To Substance</label>
                                                            <select class="form-control col-4 col-md-2" name="type_of_reaction_to_substance" id="choose-race">
                                                                <option value="Black">Local reaction</option>
                                                                <option value="White">GI disturbances</option>
                                                                <option value="White">Respiratory distress</option>
                                                                <option value="White">Systemic symptoms</option>
                                                                <option value="White">Loss of consciousness</option>
                                                                <option value="White">Other</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Evidence Of Substance</label>
                                                            <select class="form-control col-4 col-md-2" name="type_of_reaction_to_substance" id="choose-race">
                                                                <option value="Black">Local reaction</option>
                                                                <option value="White">GI disturbances</option>
                                                                <option value="White">Respiratory distress</option>
                                                                <option value="White">Systemic symptoms</option>
                                                                <option value="White">Loss of consciousness</option>
                                                                <option value="White">Other</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="multisteps-form__content">
                                                        <div class="row text-start">
                                                            <div class="col-6 col-md-6 ms-auto mt-3">
                                                                <label>Amount Of Substance</label>
                                                                <input class="multisteps-form__input form-control" type="number" name="amount_of_substance" placeholder="Eg. Soft" />

                                                            </div>
                                                            <div class="col-6 col-md-6 ms-auto mt-3">
                                                                <label>Time Of Initial Exposure</label>
                                                                <input class="multisteps-form__input form-control" type="number" name="time_of_initial_exposure" placeholder="Eg. Soft" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="button-row d-flex mt-4 col-12">
                                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                                            Prev
                                                        </button>
                                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">
                                                            Send
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="nav-cardiac" role="tabpanel" aria-labelledby="nav-cardiac-tab">
                                                <div class="multisteps-form__content">
                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Arrest Classification</label>
                                                            <select class="form-control col-4 col-md-2" name="arrest_classification" id="choose-race">
                                                                <option value="Black">Cardiac</option>
                                                                <option value="White">Non-cardiac</option>
                                                                <option value="White">Unknown</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Witness Of Arrest</label>
                                                            <select class="form-control col-4 col-md-2" name="witness_of_arrest" id="choose-race">
                                                                <option value="Black">Not witnessed</option>
                                                                <option value="White">Family / Friend</option>
                                                                <option value="Brown">Bystander</option>
                                                                <option value="Brown">Fire service personnel</option>
                                                                <option value="Brown">Law enforcement personnel</option>
                                                                <option value="Brown">Other first responder</option>
                                                                <option value="Brown">Ambulance crew</option>
                                                                <option value="Brown">Other</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Time of First CPR</label>
                                                            <input class="multisteps-form__input form-control" name="time_of_first_cpr" type="time" placeholder="Eg. Soft" />
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Time Of Crew CPR</label>
                                                            <input class="multisteps-form__input form-control" type="time" name="time_of_crew_cpr" placeholder="Eg. Soft" />
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>First Of First Defib</label>
                                                            <input class="multisteps-form__input form-control" type="time" name="first_of_first_defib" placeholder="Eg. Soft" />
                                                        </div>

                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Deribrillation prior to Ambulance Arrival</label>
                                                            <select class="form-control col-4 col-md-2" name="deribrillation_prior-to_ambulance_arrival" id="choose-race">
                                                                <option value="Black">Yes</option>
                                                                <option value="White">No</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Number Of Defib Prior EMS</label>
                                                            <input class="multisteps-form__input form-control" text="number_of_defib_paior_ems" type="text" placeholder="Eg. Soft" />
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Time Of CRP Discount</label>
                                                            <input class="multisteps-form__input form-control" type="time" time="time_of_crp_discount" placeholder="Eg. Soft" />
                                                        </div>
                                                    </div>

                                                    <div class="multisteps-form__content">
                                                        <div class="row text-start">
                                                            <div class="col-6 col-md-4 ms-auto mt-3">
                                                                <label>Spont Circulation</label>
                                                                <input class="multisteps-form__input form-control" type="text" name="spont_circular" placeholder="Eg. Soft" />
                                                                </select>
                                                            </div>
                                                            <div class="col-6 col-md-4 ms-auto mt-3">
                                                                <label>Spont Respiration</label>
                                                                <input class="multisteps-form__input form-control" type="text" name="spont_respiration" placeholder="Eg. Soft" />
                                                            </div>
                                                            <div class="col-6 col-md-4 ms-auto mt-3">
                                                                <label>Pulse Rate At Destin</label>
                                                                <input class="multisteps-form__input form-control" type="text" name="pulse_rate_at_destin" placeholder="Eg. Soft" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Type Of Ambulance Defibrillatot</label>
                                                            <select class="form-control col-4 col-md-2" name="types+of_ambulance_deribrillator" id="choose-race">
                                                                <option value="Black">Unknown</option>
                                                                <option value="White">Monophasic</option>
                                                                <option value="Brown">Biphasic</option>
                                                                <option value="Brown">Manual</option>
                                                                <option value="Brown">Automated</option>
                                                                <option value="Brown">Semi-automated</option>
                                                                <option value="Brown">Other</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Reason CPR Disconti. in the field</label>
                                                            <select class="form-control col-4 col-md-2" name="reason_cpr_discount" id="choose-race">
                                                                <option value="Black">Protocol</option>
                                                                <option value="White">Order via online medical control</option>
                                                                <option value="Brown">Unsafe scene</option>
                                                                <option value="Brown">Other</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Reason Not Initating CPR</label>
                                                            <select class="form-control col-4 col-md-2" name="reason_not_initating_cpr" id="choose-race">
                                                                <option value="Black">Obivious death protocol criteria met</option>
                                                                <option value="White">valid 'Do Not Resuscitate' order</option>
                                                                <option value="Brown">Delayed resuscitation access to a patient with confirmed vital signs absent</option>
                                                                <option value="Brown">Other</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Peacemaker / impplant Defib</label>
                                                            <select class="form-control col-4 col-md-2" name="peacemaker_impplant_defib" id="choose-race">
                                                                <option value="Black">No</option>
                                                                <option value="White">Unknown</option>
                                                                <option value="Brown">Pacemaker</option>
                                                                <option value="Brown">Implanted Defibrillator</option>
                                                                <option value="Brown">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="button-row d-flex mt-4 col-12">
                                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                                            Prev
                                                        </button>
                                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">
                                                            Send
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="tab-pane fade" id="nav-chest" role="tabpanel" aria-labelledby="nav-chest-tab">
                                                <div class="multisteps-form__content">
                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Pain Severity</label>
                                                            <input class="multisteps-form__input form-control" type="number" name="pain_severity" placeholder="Eg. Soft" />
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Name Of The Pre-EMS Medication</label>
                                                            <input class="multisteps-form__input form-control" type="text" name="name_of_the_pre_ems_medication" placeholder="Eg. Soft" />
                                                        </div>

                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Medication Administered</label>
                                                            <select class="form-control col-4 col-md-2" name="medication_administered" id="choose-race">
                                                                <option value="Black">Yes</option>
                                                                <option value="White">No</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Responce To Medication</label>
                                                            <select class="form-control col-4 col-md-2" name="choose-race" id="choose-race">
                                                                <option value="Black">Unchanged</option>
                                                                <option value="White">Improved</option>
                                                                <option value="White">Deteriorated</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Type Of Pain</label>
                                                            <select class="form-control col-4 col-md-2" name="type_of_pain" id="choose-race">
                                                                <option value="Black">Dull</option>
                                                                <option value="White">Aching</option>
                                                                <option value="Black">Burning</option>
                                                                <option value="White">Sharp</option>
                                                                <option value="Black">Throbbing</option>
                                                                <option value="White">Cramping</option>
                                                                <option value="Black">Heavy</option>
                                                                <option value="White">Tearing</option>
                                                                <option value="Black">Other</option>
                                                                
                                                            </select>
                                                        </div>

                                                    </div>


                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Source Of Pain</label>
                                                            <select class="form-control col-4 col-md-2" name="source_pain" id="choose-race">
                                                                <option value="Black">Chest cardiac</option>
                                                                <option value="White">Chest respiratory</option>
                                                                <option value="Black">Chest musculoskeletal</option>
                                                                <option value="White">Other</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Pain Radiation Site</label>
                                                            <select class="form-control col-4 col-md-2" name="pain_reduction_site" id="choose-race">
                                                                <option value="Black">No radiation / Localized</option>
                                                                <option value="White">Head / Neck</option>
                                                                <option value="Brown">Chest</option>
                                                                <option value="Black">Abdomen</option>
                                                                <option value="White">Left arm</option>
                                                                <option value="Brown">Right arm</option>
                                                                <option value="Brown">Other</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>State At Onset</label>
                                                            <select class="form-control col-4 col-md-2" name="state_at_onset" id="choose-race">
                                                                <option value="Black">Inactive</option>
                                                                <option value="White">Mild activity</option>
                                                                <option value="Brown">Intense activity</option>
                                                                <option value="Black">Resting</option>
                                                                <option value="White">Sleeping</option>
                                                                <option value="Brown">Other</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Pacemaker / Implanted Defibrillator</label>
                                                            <select class="form-control col-4 col-md-2" name="pacemaker_implanted_defibrillator" id="choose-race">
                                                                <option value="Black">No</option>
                                                                <option value="White">Unknown</option>
                                                                <option value="Brown">Pacemaker</option>
                                                                <option value="White">Implanted Defibrillator</option>
                                                                <option value="Brown">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="button-row d-flex mt-4 col-12">
                                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                                            Prev
                                                        </button>
                                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">
                                                            Send
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="nav-neonatal" role="tabpanel" aria-labelledby="nav-neonatal-tab">
                                                <div class="multisteps-form__content">
                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-12 ms-auto mt-3">
                                                            <label>Infant Time Of Breathing</label>
                                                            <input class="multisteps-form__input form-control" type="time" name="infant_time_of_breathing" placeholder="Eg. Soft" />
                                                        </div>
                                                    </div>
     
                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <div class="d-flex justify-content-center">1 MUNITES</div>
                                                            <label>Heart Rate</label>
                                                            <select class="form-control col-4 col-md-2" name="heart_rate " id="choose-race">
                                                                <option value="Black">0 (absent)</option>
                                                                <option value="White">1 (slow <= 100)</option>
                                                                <option value="White">2 (normal >= 100)</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <div class="d-flex justify-content-center">5 MUNITES</div>
                                                            <label>Heart Rate</label>
                                                            <select class="form-control col-4 col-md-2" name="heart_rate" id="choose-race">
                                                            <option value="Black">0 (absent)</option>
                                                                <option value="White">1 (slow <= 100)</option>
                                                                <option value="White">2 (normal >= 100)</option>
                                                            </select>
                                                        </div>

                                                    </div>


                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Respiratory Effort</label>
                                                            <select class="form-control col-4 col-md-2" name="respiratory_effort" id="choose-race">
                                                                <option value="Black">Yes</option>
                                                                <option value="White">No</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Respiratory Effort</label>
                                                            <select class="form-control col-4 col-md-2" name="respiratory_effortt" id="choose-race">
                                                                <option value="Black">0 (absent)</option>
                                                                <option value="White">1 (slow, irregular, weak cry)</option>
                                                                <option value="Brown">2 (rapid, regular, strong cry)</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Muscle Tone</label>
                                                            <select class="form-control col-4 col-md-2" name="muscle_tone" id="choose-race">
                                                                <option value="Black">0 (limp)</option>
                                                                <option value="White">1 (some flexion of extremities)</option>
                                                                <option value="Brown">2 (well flexed)</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Muscle Tone</label>
                                                            <select class="form-control col-4 col-md-2" name="muscle_tone" id="choose-race">
                                                                <option value="Black">0 (limp)</option>
                                                                <option value="White">1 (some flexion of extremities)</option>
                                                                <option value="Brown">2 (well flexed)</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Reflax Irritability</label>
                                                            <select class="form-control col-4 col-md-2" name="reflax_irritability" id="chose-race">
                                                                <option value="Black">0 (No response)</option>
                                                                <option value="White">1 (slight motion, weak cry)</option>
                                                                <option value="Brown">2 (strong cry, extremity retraction)</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Reflax Irritability</label>
                                                            <select class="form-control col-4 col-md-2" name="reflax_irritabilityy" id="choose-race">
                                                                <option value="Black">0 (No response)</option>
                                                                <option value="White">1 (slight motion, weak cry)</option>
                                                                <option value="Brown">2 (strong cry, extremity retraction)</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Colour</label>
                                                            <select class="form-control col-4 col-md-2" name="colour" id="choose-race">
                                                                <option value="Black">0 (blue, pale)</option>
                                                                <option value="White">1 (body pink, extremities blue)</option>
                                                                <option value="Brown">2 (completely pink)</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Colour</label>
                                                            <select class="form-control col-4 col-md-2" name="colours" id="choose-race">
                                                                <option value="Black">0 (blue, pale)</option>
                                                                <option value="White">1 (body pink, extremities blue)</option>
                                                                <option value="Brown">2 (completely pink)</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="button-row d-flex mt-4 col-12">
                                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                                            Prev
                                                        </button>
                                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">
                                                            Send
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-obstetric" role="tabpanel" aria-labelledby="nav-obstetric-tab">
                                                <div class="multisteps-form__content">

                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Parity</label>
                                                            <input class="multisteps-form__input form-control" type="time" name="parity" placeholder="Eg. Soft" />
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Gravidity</label>
                                                            <input class="multisteps-form__input form-control" type="time" name="gravidity" placeholder="Eg. Soft" />
                                                        </div>

                                                        <div class="col-12 col-md-4 ms-auto mt-3">
                                                            <label>Gestation Stage</label>
                                                            <input class="multisteps-form__input form-control" type="time" name="gestation_stage" placeholder="Eg. Soft" />
                                                        </div>

                                                    </div>

                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Delivery</label>
                                                            <select class="form-control col-4 col-md-2" name="delivery" id="choose-race">
                                                                <option value="Black">No prehospital delivery</option>
                                                                <option value="White">At scene</option>
                                                                <option value="Brown">en route to hospital</option>
                                                                <option value="Brown">Other</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Baby Presentation</label>
                                                            <select class="form-control col-4 col-md-2" name="baby_presentation" id="choose-race">
                                                                <option value="Black">Head</option>
                                                                <option value="White">Arm</option>
                                                                <option value="Brown">Leg</option>
                                                                <option value="White">Breech</option>
                                                                <option value="Brown">Prolapsed cord</option>
                                                                <option value="White">Cord around neck</option>
                                                                <option value="Brown">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="multisteps-form__content">
                                                        <div class="row text-start">
                                                            <div class="col-6 col-md-6 ms-auto mt-3">
                                                                <label>Time Of Birth</label>
                                                                <input class="multisteps-form__input form-control" name="time_of_birth" type="time" placeholder="Eg. Soft" />
                                                                </select>
                                                            </div>
                                                            <div class="col-6 col-md-6 ms-auto mt-3">
                                                                <label>Time Of Placenta Delivery</label>
                                                                <input class="multisteps-form__input form-control" name="time)of_placenta_delivery" type="time" placeholder="Eg. Soft" />
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="button-row d-flex mt-4 col-12">
                                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                                            Prev
                                                        </button>
                                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">
                                                            Send
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-trauma" role="tabpanel" aria-labelledby="nav-trauma-tab">
                                                <div class="multisteps-form__content">

                                                    <div class="row text-start">
                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Work Related</label>
                                                            <select class="form-control col-4 col-md-2" name="work_related" id="choose-race">
                                                                <option value="Black">Yes</option>
                                                                <option value="White">No</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 ms-auto mt-3">
                                                            <label>Cause Of  Injury</label>
                                                            <select class="form-control col-4 col-md-2" name="cause_of_injury" id="choose-race">
                                                                <option value="Black">Motor vehicle traffic accident</option>
                                                                <option value="White">Pedestrian traffic accident</option>
                                                                <option value="Brown">Bicycle accident</option>
                                                                <option value="Black">Water transport accident</option>
                                                                <option value="White">Aircraft related accident</option>
                                                                <option value="Brown">Fall < 2 meters</option>
                                                                <option value="Black">Fall > 2 meters</option>
                                                                <option value="White">Fire and flames</option>
                                                                <option value="Black">Smoke inhalation</option>
                                                                <option value="White">Excessive heat</option>
                                                                <option value="Black">Excessive cold</option>
                                                                <option value="White">Bites</option>
                                                                <option value="Black">Lightning</option>
                                                                <option value="White">Improved</option>
                                                                <option value="Black">Drowning / near-drowning</option>
                                                                <option value="White">Mechanical suffocation</option>
                                                                <option value="White">Machinery accidents</option>
                                                                <option value="White">Electrocution (non-lightning)</option>
                                                                <option value="White">Firearm injury</option>
                                                                <option value="White">Sexual assault</option>
                                                                <option value="White">Stabbing</option>
                                                                <option value="White">Assault</option>
                                                                <option value="White">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="multisteps-form__content">
                                                        <div class="row text-start">
                                                            <div class="col-12 col-md-4 ms-auto mt-3">
                                                                <label>Human Factor</label>
                                                                <select class="form-control col-4 col-md-2" name="human_factor" id="choose-race">
                                                                    <option value="Black">Accidental</option>
                                                                    <option value="White">Intentional (self-inflicted)</option>
                                                                    <option value="Brown">Other</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-12 col-md-4 ms-auto mt-3">
                                                                <label>Nature Of  Resulting Injury</label>
                                                                <select class="form-control col-4 col-md-2" name="nature_of_resulting_injury" id="choose-race">
                                                                    <option value="Black">Blunt trauma</option>
                                                                    <option value="White">Penetrating trauma</option>
                                                                    <option value="Brown">Burn trauma</option>
                                                                    <option value="Brown">Other</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-12 col-md-4 ms-auto mt-3">
                                                                <label>Safey Protective Equipment</label>
                                                                <select class="form-control col-4 col-md-2" name="safty_protective_equipment" id="choose-race">
                                                                    <option value="Black">None</option>
                                                                    <option value="White">Lap belt</option>
                                                                    <option value="Brown">Shoulder belt</option>
                                                                    <option value="Black">Airbag deployed</option>
                                                                    <option value="White">Child safety seat</option>
                                                                    <option value="Brown">Helmet</option>
                                                                    <option value="Black">Eye protection</option>
                                                                    <option value="White">Protective clothing / gear</option>
                                                                    <option value="Brown">Personal floatation device</option>
                                                                    <option value="Black">Unknown</option>
                                                                    <option value="White">Unknown</option>
                                                                    
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="button-row d-flex mt-4 col-12">
                                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                                            Prev
                                                        </button>
                                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Submit">
                                                            Submit
                                                        </button>
                                                        </div>
                                                    </div>
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

    <span id="my-data" data-points="{{ json_encode($assessment, true) ?? '[]' }}"></span>
    <script>
        // Get Object literal from LocalStorage
        let memory = JSON.parse(localStorage.memory || "{}");

        var allData = document.getElementById("my-data")
        var data = JSON.parse(allData.getAttribute('data-points'));
        if(data.length != 0)
        {
            memory = data;
        }
        // Loop input elements on page
        [...document.querySelectorAll('input, textarea')].forEach(el => {

            // prepopulate from memory
            if (el.name in memory) {
                el.value = memory[el.name]
            }

            // save to memory
            el.addEventListener("input", () => {
                memory[el.name] = el.value;
                localStorage.memory = JSON.stringify(memory);
            });
        });
    </script>
@endsection