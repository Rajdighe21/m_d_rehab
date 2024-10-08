@include('mobility.header')

<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">

        <!-- /top-wizard -->
        <form id="wrapped" class="indexClass" method="POST" action="{{ route('mobilityTestFour') }}">
            @csrf
            <input id="website" name="website" type="text" value="">
            <div id="middle-wizard">
                <div style="font-size: 18px; color: #007bff; font-weight: bold;">
                    Cardio Rescue
                </div>
                @php
                    $conditionsArray = $conditions->toArray();
                    $halfCount = ceil(count($conditionsArray) / 2);
                    $firstHalf = array_slice($conditionsArray, 0, $halfCount);
                    $secondHalf = array_slice($conditionsArray, $halfCount);
                @endphp

                <div class="step">
                    <h3 class="main_question">What is Patient Suffering from?</h3>
                    <form method="POST" action="{{ route('mobilityTestFour') }}">
                        @csrf
                        <div class="row" id="conditions">
                            <div class="col-md-6">
                                @if ($information)
                                    <input type="hidden" value="{{ $information['patientname'] }}" name="patientname">
                                    <input type="hidden" value="{{ $information['patientphone'] }}"
                                        name="patientphone">
                                    <input type="hidden" value="{{ $information['patientemail'] }}"
                                        name="patientemail">
                                    <input type="hidden" value="{{ $information['patientage'] }}" name="patientage">
                                    <input type="hidden" value="{{ $information['patientweight'] }}"
                                        name="patientweight">
                                    <input type="hidden" value="{{ $information['patientgender'] }}"
                                        name="patientgender">
                                @endif
                                @foreach ($firstHalf as $condition)
                                    <div class="form-group">
                                        <label class="container_check">{{ $condition['name'] }}
                                            <input type="checkbox" id="{{ $condition['sub_name'] }}"
                                                name="PatientSuffering[]" value="{{ $condition['id'] }}"
                                                class="PatientSuffering required"
                                                data-condition-name="{{ $condition['name'] }}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                @foreach ($secondHalf as $condition)
                                    <div class="form-group">
                                        <label class="container_check">{{ $condition['name'] }}
                                            <input type="checkbox" id="{{ $condition['sub_name'] }}"
                                                name="PatientSuffering[]" value="{{ $condition['id'] }}"
                                                class="PatientSuffering required"
                                                data-condition-name="{{ $condition['name'] }}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <button type="submit">Submit</button>

                </div>
                <div class="submit step" id="end">
                    <div class="">
                        <div class="wrapper">

                        </div>
                    </div>
                </div>
                <!-- /step last-->
                <div id="bottom-wizard">
                    <button type="button" name="forward" class="forward"
                        onclick="indexsubmit(this.value)">Next</button>
                </div>
            </div>
        </form>

        <!-- /middle-wizard -->

        <!-- /bottom-wizard -->


        </form>
    </div>
    <!-- /Wizard container -->
</div>


@include('mobility.footer')
