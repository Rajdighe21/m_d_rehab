@include('mobility.header')
@php
    use Illuminate\Support\Facades\Session;
@endphp
<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">

        <!-- /top-wizard -->
        <form id="wrapped" class="indexClass" method="POST" action="{{ route('mobilityTestFive') }}">
            @csrf
            <input id="website" name="website" type="text" value="">
            <div id="middle-wizard">
                            <div style="font-size: 18px; color: #007bff; font-weight: bold;">
                    Cardio Rescue
                </div>
                <div class="step">
                    @if ($information)
                        <input type="hidden" value="{{ $information['patientname'] }}" name="patientname">
                        <input type="hidden" value="{{ $information['patientphone'] }}" name="patientphone">
                        <input type="hidden" value="{{ $information['patientemail'] }}" name="patientemail">
                    @endif
                    @if (!empty($data))
                        @foreach ($data as $item)
                            <input type="hidden" value="{{ $item }}" name="suffering_data[]">
                            @if ($item === '1')
                                <h3 class="main_question">Which Side of the body does paralysis exist</h3>
                                <div class="condition-item">
                                    @foreach ($paralysis as $para)
                                        <label class="container_check" style="margin-bottom: 10px;">{{ $para['name'] }}
                                            <input type="checkbox" name="SufferingPara[]" value="{{ $para['name'] }}"
                                                class="required" style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif
                            @if ($item === '2')
                                <br>
                                <h3 class="main_question">Which Leg You Are Suffering From Knee Pain</h3>
                                <div class="condition-item">
                                    @foreach ($knee_join_pain as $kneeJoin)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $kneeJoin['name'] }}
                                            <input type="checkbox" name="SufferingKnee[]"
                                                value="{{ $kneeJoin['name'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif
                            @if ($item === '17')
                                <br>
                                <h3 class="main_question">Current position of the patient due to Parkinson</h3>
                                <div class="condition-item">
                                    @foreach ($parkinson_disease as $parkinson)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $parkinson['name'] }}
                                            <input type="checkbox" name="SufferingParkinson[]"
                                                value="{{ $parkinson['name'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '18')
                                <br>

                                <h3 class="main_question">Which Side is the Cervical Pain</h3>
                                <div class="condition-item">
                                    @foreach ($cervical_pain as $cervical)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $cervical['name'] }}
                                            <input type="checkbox" name="SufferingCervical[]"
                                                value="{{ $cervical['name'] }}" class="PatientSuffering required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '19')
                                <br>
                                <h3 class="main_question">Which Side is the Lower Back Pain?</h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($lower_back_pain as $lower_back)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $lower_back['name'] }}
                                            <input type="checkbox" name="SufferingLowerBack[]"
                                                value="{{ $lower_back['name'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '20')
                                <br>
                                <h3 class="main_question">Current position of the patient Due To Muscular Dystrophy ?
                                </h3>
                                <div class="condition-item">
                                    @foreach ($muscular_dystrophy as $muscular)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $muscular['name'] }}
                                            <input type="checkbox" name="SufferingMusculars[]"
                                                value="{{ $muscular['name'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif
                            @if ($item === '21')
                                <br>
                                <h3 class="main_question">Current position of the patient Due To Motor Neuron Disease ?
                                </h3>
                                <div class="condition-item">
                                    @foreach ($motor_neuron_disease as $motor_neuron)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $motor_neuron['name'] }}
                                            <input type="checkbox" name="SufferingMotorNeuron[]"
                                                value="{{ $motor_neuron['name'] }}" class="PatientSuffering required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '22')
                                <br>
                                <h3 class="main_question">Current position of the patient Due To G-B-S ?
                                </h3>
                                <div class="condition-item">
                                    @foreach ($guillain_barre_syndrome as $gbs)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $gbs['name'] }}
                                            <input type="checkbox" name="SufferingGuillain[]"
                                                value="{{ $gbs['name'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif
                        @endforeach
                    @else
                    @endif

                </div>
            </div>

        </form>
        <div id="bottom-wizard">
            <a href="{{ route('ThirdTest') }}"> <button type="button" name="backward"
                    class="backward">Prev</button></a>
            <button type="button" name="forward" class="forward" onclick="indexsubmit(this.value)">Next</button>

        </div>
    </div>
</div>
</div>
<!-- /step last-->

</div>



@include('mobility.footer')
