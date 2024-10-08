@include('mobility.header')
@php
    use Illuminate\Support\Facades\Session;
@endphp
<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">

        <!-- /top-wizard -->
        <form id="wrapped" class="indexClass" method="POST" action="{{ route('mobilityTestSeven') }}">
            @csrf
            <input id="website" name="website" type="text" value="">
            <div id="middle-wizard">

                <div style="font-size: 18px; color: #007bff; font-weight: bold;">
                    8th
                </div>
                <div class="step">
                    @if ($information)
                        <input type="hidden" value="{{ $information['patientname'] }}" name="patientname">
                        <input type="hidden" value="{{ $information['patientphone'] }}" name="patientphone">
                        <input type="hidden" value="{{ $information['patientemail'] }}" name="patientemail">
                    @endif


                    {{-- THIS IS FOR SUFFERING FOR  --}}
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

                    {{-- SUFFERING END          --}}



                    {{-- //AREA SUFFERING FOR --}}
                    @foreach ($Which_areaParalysis as $item)
                        <input type="hidden" value="{{ $item }}" name="Which_areaParalysis[]">
                    @endforeach
                    @foreach ($Which_areaKnee as $item)
                        <input type="hidden" value="{{ $item }}" name="Which_areaKnee[]">
                    @endforeach
                    @foreach ($Which_areaParkinson as $item)
                        <input type="hidden" value="{{ $item }}" name="Which_areaParkinson[]">
                    @endforeach
                    @foreach ($Which_areaCervical as $item)
                        <input type="hidden" value="{{ $item }}" name="Which_areaCervical[]">
                    @endforeach
                    @foreach ($Which_areaLowerBack as $item)
                        <input type="hidden" value="{{ $item }}" name="Which_areaLowerBack[]">
                    @endforeach
                    @foreach ($Which_areaMuscular as $item)
                        <input type="hidden" value="{{ $item }}" name="Which_areaMuscular[]">
                    @endforeach
                    @foreach ($Which_areaMotorNeuron as $item)
                        <input type="hidden" value="{{ $item }}" name="Which_areaMotorNeuron[]">
                    @endforeach
                    @foreach ($Which_areaGBS as $item)
                        <input type="hidden" value="{{ $item }}" name="Which_areaGBS[]">
                    @endforeach
                    {{-- //AREA SUFFERING END --}}





                    @if (!empty($data))

                        @foreach ($data as $item)
                            <input type="hidden" value="{{ $item }}" name="suffering_data[]">
                            @if ($item === '1')
                                <h3 class="main_question">Patient Sit-To-Stand-Condition </h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($paralysis as $para)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $para['condition_one'] }}
                                            <input type="radio" name="conditionOnePara"
                                                value="{{ $para['condition_one'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif
                            @if ($item === '2')
                                <br>

                                <h3 class="main_question">Leg Position Due to Knee Pain</h3>
                                <div class="condition-item">
                                    @foreach ($knee_join_pain as $kneeJoin)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $kneeJoin['condition_one'] }}
                                            <input type="radio" name="conditionOneKnee"
                                                value="{{ $kneeJoin['condition_one'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif
                            @if ($item === '17')
                                <br>
                                <h3 class="main_question">How Much stiffness is there in all the join while
                                    walking
                                </h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($parkinson_disease as $parkinson)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $parkinson['condition_one'] }}
                                            <input type="radio" name="conditionOneParkinson"
                                                value="{{ $parkinson['condition_one'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '18')
                                <br>

                                <h3 class="main_question">Pain Radiation Due to Cervical Pain</h3>
                                <div class="condition-item">
                                    @foreach ($cervical_pain as $cervical)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $cervical['condition_one'] }}
                                            <input type="radio" name="conditionOneCervical"
                                                value="{{ $cervical['condition_one'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '19')
                                <br>

                                <h3 class="main_question">Pain Radiation Due to Lower Back Pain</h3>
                                <div class="condition-item">
                                    @foreach ($lower_back_pain as $lower_back)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $lower_back['condition_one'] }}
                                            <input type="radio" name="conditionOneLowerBack"
                                                value="{{ $lower_back['condition_one'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '20')
                                <br>

                                <h3 class="main_question">Finger Position Due to Muscular Dystrophy</h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($muscular_dystrophy as $muscular)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $muscular['condition_one'] }}
                                            <input type="radio" name="conditionOneMuscular"
                                                value="{{ $muscular['condition_one'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '21')
                                <br>
                                <h3 class="main_question">Finger Position Due to Motor Neuron Disease </h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($motor_neuron_disease as $motor_neuron)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $motor_neuron['condition_one'] }}
                                            <input type="radio" name="conditionOneMNU"
                                                value="{{ $motor_neuron['condition_one'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '22')
                                <br>
                                <h3 class="main_question">Finger Position Due to Guillain Barre Syndrome</h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($guillain_barre_syndrome as $gbs)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $gbs['condition_one'] }}
                                            <input type="radio" name="conditionOneGBS"
                                                value="{{ $gbs['condition_one'] }}" class="required"
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
            <a href="{{ route('FifthTest') }}"> <button type="button" name="backward"
                    class="backward">Prev</button></a>
            <button type="button" name="forward" class="forward" onclick="indexsubmit(this.value)">Next</button>

        </div>
    </div>
</div>
</div>
<!-- /step last-->

</div>



@include('mobility.footer')
