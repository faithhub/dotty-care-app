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
                                    <button class="multisteps-form__progress-btn js-active" type="button" title="Patient Details"><span>Patient Details</span></button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Vircle Details"><span>Vital Sign</span></button>
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
                                                    <label>Procedure Start Time</label>
                                                    <input class="multisteps-form__input form-control" name="procedure_start_time" type="time" placeholder="Start time" />
                                                </div>
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Type of procedure</label>
                                                    <select class="form-control" name="type_of_procedure" id="choices">
                                                        <option value="">None</option>
                                                        <option value="">Airway cleared</option>
                                                        <option value="">Airway patency maintained</option>
                                                        <option value="">IV access</option>
                                                        <option value="">Blood sample drawn</option>
                                                        <option value="">Chest compressions</option>
                                                        <option value="">Ventilations </option>
                                                        <option value="">Delivery </option>
                                                        <option value="">Bleeding control </option>
                                                        <option value="">Extremity immobilization </option>
                                                        <option value="">Spinal immobilization </option>
                                                        <option value="">MAST </option>
                                                        <option value="">Emergency rapid extrication </option>
                                                        <option value="">Physical restraint </option>
                                                        <option value="">Other </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Treatment End Time</label>
                                                    <input class="multisteps-form__input form-control" name="treatment_end_time" type="time" placeholder="End time" />
                                                </div>
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Device / Method</label>
                                                    <select class="form-control" name="choices-country" name="device_method" id="choices">
                                                        <option value="Test">Test</option>
                                                        <option value="New">New</option>
                                                        <option value="Fo">Fo</option>
                                                        <option value="Co">Co</option>
                                                        </select>
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-3 ms-auto mt-3">
                                                    <label>Technician ID</label>
                                                    <input class="multisteps-form__input form-control" name="technician_id" type="text" placeholder="" />
                                                </div>
                                                <div class="col-6 col-md-3 ms-auto mt-3">
                                                    <label>Device Size</label>
                                                    <select class="form-control" name="device_size" id="choices-country">
                                                        <option value="Test">Test</option>
                                                        <option value="New">New</option>
                                                        <option value="Fo">Fo</option>
                                                        <option value="Co">Co</option> 
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-3 ms-auto mt-3">
                                                    <label>Outcome</label>
                                                    <select class="form-control" name="outcome" id="choices-country">
                                                        <option value="">Stable</option>
                                                        <option value="">Improved</option>
                                                        <option value="">Deteriorated</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-md-3 ms-auto mt-3">
                                                    <label>Successful</label>
                                                    <select class="form-control" name="successful" id="choices-country">
                                                    <option value="">yes</option>
                                                    <option value="">No</option> 
                                                </select>
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-3 ms-auto mt-2">
                                                    <label>Treatment</label>
                                                    <input class="multisteps-form__input form-control" name="treatment" type="text" placeholder="Technician ID" />
                                                </div>
                                                <div class="col-6 col-md-3 ms-auto mt-2">
                                                    <label>Total Time</label>
                                                    <input class="multisteps-form__input form-control" type="total_time" placeholder="Eg. Tokyo" />
                                                </div>
                                                <div class="col-12 col-md-3 ms-auto mt-3">
                                                    <label></label>
                                                    <input class="multisteps-form__input form-control" type="dosage" placeholder="Dosage" />
                                                </div>
                                                <div class="col-12 col-md-3 ms-auto mt-3">
                                                    <label></label>
                                                    <input class="multisteps-form__input form-control" type="amount_unit" placeholder="Amount Unit" />
                                                </div>
                                            </div>

                                            <div class="row text-start">
                                                <div class="col-6 col-md-6 ms-auto mt-3">
                                                    <label>Type Of Treatment</label>
                                                    <select class="form-control" name="type_of_treatment" id="choices">
                                                        <option value="">Medication</option>
                                                        <option value="">IV Fluid</option>
                                                        <option value="">Oxygen</option>
                                                        <option value="">Defibrillation</option>
                                                        <option value="">No Treatment</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-6 ms-auto mt-3">
                                                    <label>Administration Route</label>
                                                    <select class="form-control" name="administration_route" id="choices">
                                                        <option value="Test">Test</option>
                                                        <option value="New">New</option>
                                                        <option value="Fo">Fo</option>
                                                        <option value="Co">Co</option> 
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

                                    <!-- Incident details -->

                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                        <div class="row text-center">

                                        </div>
                                        <div class="multisteps-form__content">
                                            <div class="row text-start">
                                                <div class="col-12 col-md-6 ms-auto mt-3">
                                                    <label>Time Of Assessment</label>
                                                    <input class="multisteps-form__input form-control" type="time" name="time_of_assessment" placeholder="Time Of Assessment" />
                                                </div>

                                                <div class="col-12 col-md-6 ms-auto mt-3">
                                                    <label>Level of Consciousness</label>
                                                    <select class="form-control col-4 col-md-2" name="level_of_consciousness" id="choose-race">
                                                    <option value="">select</option>
                                                    <option value="">Verbal</option>
                                                    <option value="">Alert</option>
                                                    <option value="">Painful</option>
                                                    <option value="">Unresponsive</option>
                                                </select>
                                                </div>
                                            </div>

                                            <div class="multisteps-form__content">
                                                <div class="row text-start">
                                                    <div class="col-12 col-md-6 ms-auto mt-3">
                                                        <label>Pulse Rate</label>
                                                        <input class="multisteps-form__input form-control" name="pulse_rate" type="number" placeholder="Pulse Rate" />
                                                    </div>
                                                    <div class="col-12 col-md-6 ms-auto mt-3">
                                                        <label>Site Of Pulse Check</label>
                                                        <select class="form-control col-4 col-md-2" name="site_of_pulse_check" id="choose-race">
                                                        <option value="">select</option>
                                                        <option value="">Radial</option>
                                                        <option value="">Brachial</option>
                                                        <option value="">Femoral</option>
                                                        <option value="">Carotid</option>
                                                        <option value="">Pedal</option>
                                                        <option value="">Apical</option>
                                                        <option value="">Others</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="multisteps-form__content">
                                                <div class="row text-start">
                                                    <div class="col-12 col-md-6 ms-auto mt-3">
                                                        <label>Temperature</label>
                                                        <input class="multisteps-form__input form-control" name="temperature" type="text" placeholder="Temperature" />
                                                    </div>
                                                    <div class="col-12 col-md-6 ms-auto mt-3">
                                                        <label>Site Of Temperature Check</label>
                                                        <select class="form-control col-4 col-md-2" name="choose-race" id="choose-race">
                                                        <option value="">select</option>
                                                        <option value="">Oral</option>
                                                        <option value="">Rectal</option>
                                                        <option value="">Tympanic</option>
                                                        <option value="">Axilla</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="multisteps-form__content">
                                                <div class="row text-start">
                                                    <div class="col-12 col-md-4 ms-auto mt-3">
                                                        <label>Skin Color</label>
                                                        <select class="form-control col-4 col-md-2" name="skin_color" id="skincolor">
                                                            <option value="">select</option>
                                                            <option value="">Normal</option>
                                                            <option value="">Pale</option>
                                                            <option value="">Cyanotic</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-12 col-md-4 ms-auto mt-3">
                                                        <label>Temperature</label>
                                                        <select class="form-control col-4 col-md-2" name="temperaturee" id="choose-race">
                                                            <option value="">select</option>
                                                            <option value="">Normal</option>
                                                            <option value="">Warm</option>
                                                            <option value="">Cool</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-md-4 ms-auto mt-3">
                                                        <label>Moisture</label>
                                                        <select class="form-control col-4 col-md-2" name="moisture" id="choose-race">
                                                            <option value="">select</option>
                                                            <option value="">Moist</option>
                                                            <option value="">Dry</option>
                                                            <option value="">Diaphoretic</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="multisteps-form__content">
                                                <div class="row text-start">
                                                    <div class="col-12 col-md-6 ms-auto mt-2">
                                                        <label>Blood Pressure</label>
                                                        <input class="multisteps-form__input form-control" type="systolic" placeholder="Systolic" />
                                                    </div>
                                                    <div class="col-12 col-md-6 ms-auto mt-3">
                                                        <label> </label>
                                                        <input class="multisteps-form__input form-control" name="diastolic" type="text" placeholder="Diastolic" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="multisteps-form__content">
                                                <div class="row text-start">
                                                    <div class="col-12 col-md-6 ms-auto mt-2">
                                                        <label>Respiration</label>
                                                        <input class="multisteps-form__input form-control" type="text" name="respiration" placeholder="Respiration" />
                                                    </div>
                                                    <div class="col-12 col-md-6 ms-auto mt-3">
                                                        <label>Blood Glucose</label>
                                                        <input class="multisteps-form__input form-control" type="text" name="blood_glucose" placeholder="Blood Glucose" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="multisteps-form__content">
                                                <div class="row text-start">
                                                    <div class="col-12 col-md-6 ms-auto mt-2">
                                                        <label>Oxygen Saturation</label>
                                                        <input class="multisteps-form__input form-control" type="text" name="pre_oxygen" placeholder="Pre-Oxygen" />
                                                    </div>
                                                    <div class="col-12 col-md-6 ms-auto mt-3">
                                                        <label></label>
                                                        <input class="multisteps-form__input form-control" name="post_oxygen" type="text" placeholder="Post-Oxygen" />
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        // Get Object literal from LocalStorage
        let memory = JSON.parse(localStorage.memory || "{}");

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