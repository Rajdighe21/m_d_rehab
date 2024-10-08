@include('mobility.header')
@php
    use Illuminate\Support\Facades\Session;
@endphp
<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">

        <!-- /top-wizard -->
        <form id="wrapped" class="indexClass" method="POST" action="{{ route('mobilityTestSix') }}">
            @csrf
            <input id="website" name="website" type="text" value="">
            <div id="middle-wizard">

                <div style="font-size: 18px; color: #007bff; font-weight: bold;">
                    9th
                </div>
                <div class="step">
                    @if ($information)
                        <input type="hidden" value="{{ $information['patientname'] }}" name="patientname">
                        <input type="hidden" value="{{ $information['patientphone'] }}" name="patientphone">
                        <input type="hidden" value="{{ $information['patientemail'] }}" name="patientemail">
                    @endif
                    @foreach ($SufferingPara as $item)
                        <input type="hidden" value="{{ $item }}" name="SufferingPara[]">
                    @endforeach
                    @foreach ($SufferingKnee as $item)
                        <input type="hidden" value="{{ $item }}" name="SufferingKnee[]">
                    @endforeach
                    @foreach ($SufferingParkinson as $item)
                        <input type="hidden" value="{{ $item }}" name="SufferingParkinson[]">
                    @endforeach
                    @foreach ($SufferingCervical as $item)
                        <input type="hidden" value="{{ $item }}" name="SufferingCervical[]">
                    @endforeach
                    @foreach ($SufferingLowerBack as $item)
                        <input type="hidden" value="{{ $item }}" name="SufferingLowerBack[]">
                    @endforeach
                    @foreach ($SufferingMusculars as $item)
                        <input type="hidden" value="{{ $item }}" name="SufferingMusculars[]">
                    @endforeach
                    @foreach ($SufferingMotorNeuron as $item)
                        <input type="hidden" value="{{ $item }}" name="SufferingMotorNeuron[]">
                    @endforeach
                    @foreach ($SufferingGuillain as $item)
                        <input type="hidden" value="{{ $item }}" name="SufferingGuillain[]">
                    @endforeach



                    @if (!empty($data))
                        @foreach ($data as $item)
                            <input type="hidden" value="{{ $item }}" name="suffering_data[]">
                            @if ($item === '1')
                                <h3 class="main_question">Which part of the body is more impacted Due To Paralysis</h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($paralysis as $para)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $para['which_area'] }}
                                            <input type="checkbox" name="Which_areaParalysis[]"
                                                value="{{ $para['which_area'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif
                            @if ($item === '2')
                                <br>

                                <h3 class="main_question">How severe is your knee pian </h3>
                                <div class="condition-item">
                                    @foreach ($knee_join_pain as $kneeJoin)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $kneeJoin['which_area'] }}
                                            <input type="checkbox" name="Which_areaKnee[]"
                                                value="{{ $kneeJoin['which_area'] }}" class=" required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif
                            @if ($item === '17')
                                <br>
                                <h3 class="main_question">How is the Body movement Due to Parkinson Disease</h3>
                                <div class="condition-item">
                                    @foreach ($parkinson_disease as $parkinson)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $parkinson['which_area'] }}
                                            <input type="checkbox" name="Which_areaParkinson[]"
                                                value="{{ $parkinson['which_area'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '18')
                                <br>

                                <h3 class="main_question">How server is the pain Due to Cervical Pain</h3>
                                <div class="condition-item">
                                    @foreach ($cervical_pain as $cervical)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $cervical['which_area'] }}
                                            <input type="checkbox" name="Which_areaCervical[]"
                                                value="{{ $cervical['which_area'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '19')
                                <br>
                                <h3 class="main_question">Hand Position Due to Lower Back Pain</h3>
                                <div class="condition-item">
                                    @foreach ($lower_back_pain as $lower_back)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $lower_back['which_area'] }}
                                            <input type="checkbox" name="Which_areaLowerBack[]"
                                                value="{{ $lower_back['which_area'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '20')
                                <br>
                                <h3 class="main_question">Hand Position Due to Muscular Dystrophy</h3>
                                <div class="condition-item">
                                    @foreach ($muscular_dystrophy as $muscular)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $muscular['which_area'] }}
                                            <input type="checkbox" name="Which_areaMuscular[]"
                                                value="{{ $muscular['which_area'] }}"
                                                class="PatientSuffering required" style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '21')
                                <br>
                                <h3 class="main_question">Hand Position Due to Motor Neuron Disease </h3>
                                <div class="condition-item">
                                    @foreach ($motor_neuron_disease as $motor_neuron)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $motor_neuron['which_area'] }}
                                            <input type="checkbox" name="Which_areaMotorNeuron[]"
                                                value="{{ $motor_neuron['which_area'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '22')
                                <br>
                                <h3 class="main_question">Hand Position Due to Guillain Barre Syndrome</h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($guillain_barre_syndrome as $gbs)
                                        <label class="container_check"
                                            style="margin-bottom: 10px;">{{ $gbs['which_area'] }}
                                            <input type="checkbox" name="Which_areaGBS[]"
                                                value="{{ $gbs['which_area'] }}" class="required"
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
            <a href="{{ route('ForthTest') }}"> <button type="button" name="backward"
                    class="backward">Prev</button></a>
            <button type="button" name="forward" class="forward" onclick="indexsubmit(this.value)">Next</button>

        </div>
    </div>
</div>
</div>
<!-- /step last-->

</div>



@include('mobility.footer')
