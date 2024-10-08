@include('mobility.header')
@php
    use Illuminate\Support\Facades\Session;
@endphp
<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">

        <!-- /top-wizard -->
        <form id="wrapped" class="indexClass" method="POST" action="{{ route('PastYears') }}">
            @csrf
            <input id="website" name="website" type="text" value="">
            <div id="middle-wizard">

                <div style="font-size: 18px; color: #007bff; font-weight: bold;">
                    4th
                </div>
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



                {{-- //CONDITION THREE --}}
                @if (session()->has('conditionThreeParalysis'))
                    @php
                        $conditionThreeParalysis = session('conditionThreeParalysis');
                    @endphp
                    @if (is_array($conditionThreeParalysis))
                        @foreach ($conditionThreeParalysis as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionThreeParalysis[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionThreeParalysis, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionThreeParalysis">
                    @endif
                @endif

                @if (session()->has('conditionThreeKnee'))
                    @php
                        $conditionThreeKnee = session('conditionThreeKnee');
                    @endphp
                    @if (is_array($conditionThreeKnee))
                        @foreach ($conditionThreeKnee as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionThreeKnee[]">
                        @endforeach
                    @else
                        <input type="hidden" value="{{ htmlspecialchars($conditionThreeKnee, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionThreeKnee">
                    @endif
                @endif

                @if (session()->has('conditionThreeParkinson'))
                    @php
                        $conditionThreeParkinson = session('conditionThreeParkinson');
                    @endphp
                    @if (is_array($conditionThreeParkinson))
                        @foreach ($conditionThreeParkinson as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionThreeParkinson[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionThreeParkinson, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionThreeParkinson">
                    @endif
                @endif

                @if (session()->has('conditionTheeCervical'))
                    @php
                        $conditionTheeCervical = session('conditionTheeCervical');
                    @endphp
                    @if (is_array($conditionTheeCervical))
                        @foreach ($conditionTheeCervical as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionTheeCervical[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionTheeCervical, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionTheeCervical">
                    @endif
                @endif

                @if (session()->has('conditionThreeLowerBack'))
                    @php
                        $conditionThreeLowerBack = session('conditionThreeLowerBack');
                    @endphp
                    @if (is_array($conditionThreeLowerBack))
                        @foreach ($conditionThreeLowerBack as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionThreeLowerBack[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionThreeLowerBack, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionThreeLowerBack">
                    @endif
                @endif

                @if (session()->has('conditionThreeMuscular'))
                    @php
                        $conditionThreeMuscular = session('conditionThreeMuscular');
                    @endphp
                    @if (is_array($conditionThreeMuscular))
                        @foreach ($conditionThreeMuscular as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionThreeMuscular[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionThreeMuscular, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionThreeMuscular">
                    @endif
                @endif

                @if (session()->has('conditionThreeMND'))
                    @php
                        $conditionThreeMND = session('conditionThreeMND');
                    @endphp
                    @if (is_array($conditionThreeMND))
                        @foreach ($conditionThreeMND as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionThreeMND[]">
                        @endforeach
                    @else
                        <input type="hidden" value="{{ htmlspecialchars($conditionThreeMND, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionThreeMND">
                    @endif
                @endif

                @if (session()->has('conditionThreeGBS'))
                    @php
                        $conditionThreeGBS = session('conditionThreeGBS');
                    @endphp
                    @if (is_array($conditionThreeGBS))
                        @foreach ($conditionThreeGBS as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionThreeGBS[]">
                        @endforeach
                    @else
                        <input type="hidden" value="{{ htmlspecialchars($conditionThreeGBS, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionThreeGBS">
                    @endif
                @endif
                {{-- //CONDITION THREE END --}}





                {{-- //CONDITION FOUR --}}
                @if (session()->has('conditionFourParalysis'))
                    @php
                        $conditionFourParalysis = session('conditionFourParalysis');
                    @endphp
                    @if (is_array($conditionFourParalysis))
                        @foreach ($conditionFourParalysis as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFourParalysis[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionFourParalysis, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFourParalysis">
                    @endif
                @endif
                @if (session()->has('conditionFourKnee'))
                    @php
                        $conditionFourKnee = session('conditionFourKnee');
                    @endphp
                    @if (is_array($conditionFourKnee))
                        @foreach ($conditionFourKnee as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFourKnee[]">
                        @endforeach
                    @else
                        <input type="hidden" value="{{ htmlspecialchars($conditionFourKnee, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFourKnee">
                    @endif
                @endif
                @if (session()->has('conditionFourParkinson'))
                    @php
                        $conditionFourParkinson = session('conditionFourParkinson');
                    @endphp
                    @if (is_array($conditionFourParkinson))
                        @foreach ($conditionFourParkinson as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFourParkinson[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionFourParkinson, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFourParkinson">
                    @endif
                @endif
                @if (session()->has('conditionFourCervical'))
                    @php
                        $conditionFourCervical = session('conditionFourCervical');
                    @endphp
                    @if (is_array($conditionFourCervical))
                        @foreach ($conditionFourCervical as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFourCervical[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionFourCervical, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFourCervical">
                    @endif
                @endif

                @if (session()->has('conditionThreeLowerBack'))
                    @php
                        $conditionThreeLowerBack = session('conditionThreeLowerBack');
                    @endphp
                    @if (is_array($conditionThreeLowerBack))
                        @foreach ($conditionThreeLowerBack as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionThreeLowerBack[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionThreeLowerBack, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionThreeLowerBack">
                    @endif
                @endif

                @if (session()->has('conditionFourMuscular'))
                    @php
                        $conditionFourMuscular = session('conditionFourMuscular');
                    @endphp
                    @if (is_array($conditionFourMuscular))
                        @foreach ($conditionFourMuscular as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFourMuscular[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionFourMuscular, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFourMuscular">
                    @endif
                @endif

                @if (session()->has('conditionFourMND'))
                    @php
                        $conditionFourMND = session('conditionFourMND');
                    @endphp
                    @if (is_array($conditionFourMND))
                        @foreach ($conditionFourMND as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFourMND[]">
                        @endforeach
                    @else
                        <input type="hidden" value="{{ htmlspecialchars($conditionFourMND, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFourMND">
                    @endif
                @endif

                @if (session()->has('conditionFourGBS'))
                    @php
                        $conditionFourGBS = session('conditionFourGBS');
                    @endphp
                    @if (is_array($conditionFourGBS))
                        @foreach ($conditionFourGBS as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFourGBS[]">
                        @endforeach
                    @else
                        <input type="hidden" value="{{ htmlspecialchars($conditionFourGBS, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFourGBS">
                    @endif
                @endif
                {{-- //CONDITION FOUR END --}}





                <div class="step">



                    @if (!empty($data))
                        @foreach ($data as $item)
                            <input type="hidden" value="{{ $item }}" name="suffering_data[]">
                            @if ($item === '1')
                                <h3 class="main_question">Patients Shoulder Condition </h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($paralysis as $para)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $para['condition_five'] }}
                                            <input type="radio" name="conditionFiveParalysis"
                                                value="{{ $para['condition_five'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif
                            @if ($item === '2')
                                <br>

                                <h3 class="main_question">Patients Shoulder Condition </h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($knee_join_pain as $kneeJoin)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $kneeJoin['condition_five'] }}
                                            <input type="radio" name="conditionFiveKnee"
                                                value="{{ $kneeJoin['condition_five'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif
                            @if ($item === '17')
                                <br>
                                <h3 class="main_question">How are the hand movements</h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($parkinson_disease as $parkinson)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $parkinson['condition_five'] }}
                                            <input type="radio" name="conditionFiveParkinson"
                                                value="{{ $parkinson['condition_five'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '18')
                                <br>

                                <h3 class="main_question">Due to neck disorder you are not able to hand up </h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($cervical_pain as $cervical)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $cervical['condition_five'] }}
                                            <input type="radio" name="conditionFiveCervical"
                                                value="{{ $cervical['condition_five'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '19')
                                <br>

                                <h3 class="main_question">Is there numbness and burning sensation in your both or
                                    any of
                                    the one leg?</h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($lower_back_pain as $lower_back)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $lower_back['condition_five'] }}
                                            <input type="radio" name="conditionFiveLowerBack"
                                                value="{{ $lower_back['condition_five'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '20')
                                <br>

                                <h3 class="main_question">How much limping while walking </h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($muscular_dystrophy as $muscular)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $muscular['condition_five'] }}
                                            <input type="radio" name="conditionFiveMuscular"
                                                value="{{ $muscular['condition_five'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '21')
                                <br>
                                <h3 class="main_question">How Much Limping while walking</h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($motor_neuron_disease as $motor_neuron)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $motor_neuron['condition_five'] }}
                                            <input type="radio" name="conditionFiveMND"
                                                value="{{ $motor_neuron['condition_five'] }}" class="required"
                                                style="margin-right: 5px;">
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif

                            @if ($item === '22')
                                <br>
                                <h3 class="main_question">How Much Limping while walking</h3>
                                <div class="condition-item">
                                    <!-- Loop through and display checkboxes for knee joint pain data -->
                                    @foreach ($guillain_barre_syndrome as $gbs)
                                        <label class="container_radio version_2"
                                            style="margin-bottom: 10px;">{{ $gbs['condition_five'] }}
                                            <input type="radio" name="conditionFiveGBS"
                                                value="{{ $gbs['condition_five'] }}" class="required"
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
            <a href="{{ route('NineTest') }}"> <button type="button" name="backward"
                    class="backward">Prev</button></a>
            <button type="button" name="forward" class="forward" onclick="indexsubmit(this.value)">Next</button>

        </div>
    </div>
</div>
</div>
<!-- /step last-->

</div>



@include('mobility.footer')
