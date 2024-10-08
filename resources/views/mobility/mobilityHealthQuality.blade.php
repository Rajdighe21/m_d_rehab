@include('mobility.header')
@php
    use Illuminate\Support\Facades\Session;
@endphp
<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">
        <form id="wrapped" class="indexClass" method="POST" action="{{ route('results') }}">
            @csrf
            <input id="website" name="website" type="text" value="">
            <div id="middle-wizard">

                <div style="font-size: 18px; color: #007bff; font-weight: bold;">
                    1th
                </div>
                @if ($information)
                    <input type="hidden" value="{{ $information['patientname'] }}" name="patientname">
                    <input type="hidden" value="{{ $information['patientphone'] }}" name="patientphone">
                    <input type="hidden" value="{{ $information['patientemail'] }}" name="patientemail">
                    <input type="hidden" value="{{ $information['SufferingDuration'] }}" name="SufferingDuration">
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








                {{-- //CONDITION FIVE --}}
                @if (session()->has('conditionFiveParalysis'))
                    @php
                        $conditionFiveParalysis = session('conditionFiveParalysis');
                    @endphp
                    @if (is_array($conditionFiveParalysis))
                        @foreach ($conditionFiveParalysis as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFiveParalysis[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionFiveParalysis, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFiveParalysis">
                    @endif
                @endif
                @if (session()->has('conditionFiveKnee'))
                    @php
                        $conditionFiveKnee = session('conditionFiveKnee');
                    @endphp
                    @if (is_array($conditionFiveKnee))
                        @foreach ($conditionFiveKnee as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFiveKnee[]">
                        @endforeach
                    @else
                        <input type="hidden" value="{{ htmlspecialchars($conditionFiveKnee, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFiveKnee">
                    @endif
                @endif
                @if (session()->has('conditionFiveParkinson'))
                    @php
                        $conditionFiveParkinson = session('conditionFiveParkinson');
                    @endphp
                    @if (is_array($conditionFiveParkinson))
                        @foreach ($conditionFiveParkinson as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFiveParkinson[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionFiveParkinson, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFiveParkinson">
                    @endif
                @endif
                @if (session()->has('conditionFiveCervical'))
                    @php
                        $conditionFiveCervical = session('conditionFiveCervical');
                    @endphp
                    @if (is_array($conditionFiveCervical))
                        @foreach ($conditionFiveCervical as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFiveCervical[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionFiveCervical, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFiveCervical">
                    @endif
                @endif

                @if (session()->has('conditionFiveLowerBack'))
                    @php
                        $conditionFiveLowerBack = session('conditionFiveLowerBack');
                    @endphp
                    @if (is_array($conditionFiveLowerBack))
                        @foreach ($conditionFiveLowerBack as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFiveLowerBack[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionFiveLowerBack, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFiveLowerBack">
                    @endif
                @endif

                @if (session()->has('conditionFiveMuscular'))
                    @php
                        $conditionFiveMuscular = session('conditionFiveMuscular');
                    @endphp
                    @if (is_array($conditionFiveMuscular))
                        @foreach ($conditionFiveMuscular as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFiveMuscular[]">
                        @endforeach
                    @else
                        <input type="hidden"
                            value="{{ htmlspecialchars($conditionFiveMuscular, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFiveMuscular">
                    @endif
                @endif

                @if (session()->has('conditionFiveMND'))
                    @php
                        $conditionFiveMND = session('conditionFiveMND');
                    @endphp
                    @if (is_array($conditionFiveMND))
                        @foreach ($conditionFiveMND as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFiveMND[]">
                        @endforeach
                    @else
                        <input type="hidden" value="{{ htmlspecialchars($conditionFiveMND, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFiveMND">
                    @endif
                @endif

                @if (session()->has('conditionFiveGBS'))
                    @php
                        $conditionFiveGBS = session('conditionFiveGBS');
                    @endphp
                    @if (is_array($conditionFiveGBS))
                        @foreach ($conditionFiveGBS as $condition)
                            <input type="hidden" value="{{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}"
                                name="conditionFiveGBS[]">
                        @endforeach
                    @else
                        <input type="hidden" value="{{ htmlspecialchars($conditionFiveGBS, ENT_QUOTES, 'UTF-8') }}"
                            name="conditionFiveGBS">
                    @endif
                @endif

                {{-- //CONDITION FIVE END --}}



                @foreach ($data as $item)
                    <input type="hidden" value="{{ $item }}" name="suffering_data[]">
                @endforeach
                <div class="step">
                    <h3 class="main_question">Describe Patient's Health Quality</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="container_check">Diabetes
                                    <input type="checkbox" name="HealthQuality" value="Diabetes"
                                        class="HealthQualityCheckbox required"
                                        onchange="getVals(this, 'health_quality_field');">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="container_check">Blood Pressure
                                    <input type="checkbox" name="HealthQuality" value="Blood Pressure"
                                        class="HealthQualityCheckbox required"
                                        onchange="getVals(this, 'health_quality_field');">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="container_check">Thyroid
                                    <input type="checkbox" name="HealthQuality" value="Thyroid"
                                        class="HealthQualityCheckbox required"
                                        onchange="getVals(this, 'health_quality_field');">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="container_check">Cancer
                                    <input type="checkbox" name="HealthQuality" value="Cancer"
                                        class="HealthQualityCheckbox required"
                                        onchange="getVals(this, 'health_quality_field');">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="container_check">Genetic Disorders
                                    <input type="checkbox" name="HealthQuality" value="Genetic Disorders"
                                        class="HealthQualityCheckbox required"
                                        onchange="getVals(this, 'health_quality_field');">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="container_check">None
                                    <input type="checkbox" name="HealthQuality" value="None"
                                        class="HealthQualityCheckbox required"
                                        onchange="getVals(this, 'health_quality_field');">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>

    </form>
    <div id="bottom-wizard">
        <a href="{{ route('ThirdTest') }}"> <button type="button" name="backward"
                class="backward">Prev</button></a>
        <button type="button" name="forward" class="forward" onclick="indexsubmit(this.value)">Next</button>

    </div>
</div>



@include('mobility.footer')
