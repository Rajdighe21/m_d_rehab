@include('mobility.header')

<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">

        <!-- /top-wizard -->
            <input id="website" name="website" type="text" value="">
            <div id="middle-wizard">
                <div class="margingb50">
                    <h1 class="h2">Health Test, Get Quick Result</h1>
                </div>


                <div class="submit step" id="end">
                    <div class="">
                        <div class="wrapper">
                            <h4>Hi, <strong class="name_field">{{ $information['patientname'] }}</strong></h4>
                            <p>Thank you for taking Eligibility Test. Based on your responses, we have identify the
                                following:</p>
                            <p>{{ $information['patientname'] }} is a @foreach ($data as $item)
                                    @if ($item === '1')
                                        Paralysis,
                                    @elseif($item === '2')
                                        Knee Join Pain,
                                    @elseif($item === '17')
                                        Parkinson Disease,
                                    @elseif($item === '18')
                                        Cervical Pain,
                                    @elseif($item === '19')
                                        Lower Back Pain,
                                    @elseif($item === '20')
                                        Muscular Dystrophy,
                                    @elseif($item === '21')
                                        Motor Neuron Disease,
                                    @elseif($item === '22')
                                        Guillain-Barre Syndrome,
                                    @endif
                                @endforeach patient with a history of complete mobility test
                                results :</p>
                            <p>
                            <ul class="bulleted-list">

                                <li>
                                    <strong class="name_field">{{ $information['patientname'] }}</strong>, you are
                                    suffering from
                                    <strong class="">
                                        @foreach ($SufferingPara as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingKnee as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingParkinson as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingCervical as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingLowerBack as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingMusculars as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingMotorNeuron as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingGuillain as $item)
                                            {{ $item }},
                                        @endforeach
                                    </strong>
                                    of
                                    <strong class="patient_suffering_field">
                                        @foreach ($data as $item)
                                            @if ($item === '1')
                                                Paralysis,
                                            @elseif($item === '2')
                                                Knee Joint Pain,
                                            @elseif($item === '17')
                                                Parkinson Disease,
                                            @elseif($item === '18')
                                                Cervical Pain,
                                            @elseif($item === '19')
                                                Lower Back Pain,
                                            @elseif($item === '20')
                                                Muscular Dystrophy,
                                            @elseif($item === '21')
                                                Motor Neuron Disease,
                                            @elseif($item === '22')
                                                Guillain-Barre Syndrome,
                                            @endif
                                        @endforeach
                                    </strong>.
                                    <br>
                                    You have been suffering from these conditions for the past
                                    <strong style="font-size:1rem"
                                        id="suffering_duration_field">{{ $information['SufferingDuration'] }}</strong>.
                                </li>
                                <li>
                                    The <strong class="patient_suffering_field">
                                        @foreach ($data as $item)
                                            @if ($item === '1')
                                                Paralysis,
                                            @elseif($item === '2')
                                                Knee Joint Pain,
                                            @elseif($item === '17')
                                                Parkinson Disease,
                                            @elseif($item === '18')
                                                Cervical Pain,
                                            @elseif($item === '19')
                                                Lower Back Pain,
                                            @elseif($item === '20')
                                                Muscular Dystrophy,
                                            @elseif($item === '21')
                                                Motor Neuron Disease,
                                            @elseif($item === '22')
                                                Guillain-Barre Syndrome,
                                            @endif
                                        @endforeach
                                    </strong>
                                    has a greter impact on
                                    <strong class="which_side_suffering">
                                        @foreach ($SufferingPara as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingKnee as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingParkinson as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingCervical as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingLowerBack as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingMusculars as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingMotorNeuron as $item)
                                            {{ $item }},
                                        @endforeach
                                        @foreach ($SufferingGuillain as $item)
                                            {{ $item }},
                                        @endforeach
                                    </strong> of<strong id="area_affected">
                                        @foreach ($Which_areaParalysis as $item)
                                            {{ $item }}
                                        @endforeach
                                        @foreach ($Which_areaKnee as $item)
                                            <{{ $item }} @endforeach
                                                @foreach ($Which_areaParkinson as $item)
                                        <{{ $item }} @endforeach
                                                @foreach ($Which_areaCervical as $item)
                                        {{ $item }} @endforeach
                                                @foreach ($Which_areaLowerBack as $item)
                                        {{ $item }} @endforeach
                                                @foreach ($Which_areaMuscular as $item)
                                        {{ $item }} @endforeach
                                                @foreach ($Which_areaMotorNeuron as $item)
                                        {{ $item }} @endforeach
                                                @foreach ($Which_areaGBS as $item)
                                        {{ $item }} @endforeach
                                    </strong>
                                    .
                                </li>
                                <li>Your <strong class="hand_finger_condition">
                                        @if (session()->has('conditionThreeParalysis'))

                                            @php
                                                $conditionThreeParalysis = session('conditionThreeParalysis');
                                            @endphp
                                            @if (is_array($conditionThreeParalysis))
                                                @foreach ($conditionThreeParalysis as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionThreeParalysis, ENT_QUOTES, 'UTF-8') }},
                                            @endif
                                        @endif

                                        @if (session()->has('conditionThreeKnee'))
                                            @php
                                                $conditionThreeKnee = session('conditionThreeKnee');
                                            @endphp
                                            @if (is_array($conditionThreeKnee))
                                                @foreach ($conditionThreeKnee as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionThreeKnee, ENT_QUOTES, 'UTF-8') }},
                                            @endif
                                        @endif

                                        @if (session()->has('conditionThreeParkinson'))
                                            @php
                                                $conditionThreeParkinson = session('conditionThreeParkinson');
                                            @endphp
                                            @if (is_array($conditionThreeParkinson))
                                                @foreach ($conditionThreeParkinson as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionThreeParkinson, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionTheeCervical'))
                                            @php
                                                $conditionTheeCervical = session('conditionTheeCervical');
                                            @endphp
                                            @if (is_array($conditionTheeCervical))
                                                @foreach ($conditionTheeCervical as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionTheeCervical, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionThreeLowerBack'))
                                            @php
                                                $conditionThreeLowerBack = session('conditionThreeLowerBack');
                                            @endphp
                                            @if (is_array($conditionThreeLowerBack))
                                                @foreach ($conditionThreeLowerBack as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionThreeLowerBack, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionThreeMuscular'))
                                            @php
                                                $conditionThreeMuscular = session('conditionThreeMuscular');
                                            @endphp
                                            @if (is_array($conditionThreeMuscular))
                                                @foreach ($conditionThreeMuscular as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionThreeMuscular, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionThreeMND'))
                                            @php
                                                $conditionThreeMND = session('conditionThreeMND');
                                            @endphp
                                            @if (is_array($conditionThreeMND))
                                                @foreach ($conditionThreeMND as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionThreeMND, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionThreeGBS'))
                                            @php
                                                $conditionThreeGBS = session('conditionThreeGBS');
                                            @endphp
                                            @if (is_array($conditionThreeGBS))
                                                @foreach ($conditionThreeGBS as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionThreeGBS, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif
                                    </strong> Experience due to <strong class="patient_suffering_field">
                                        @foreach ($data as $item)
                                            @if ($item === '1')
                                                Paralysis,
                                            @elseif($item === '2')
                                                Knee Joint Pain,
                                            @elseif($item === '17')
                                                Parkinson Disease,
                                            @elseif($item === '18')
                                                Cervical Pain,
                                            @elseif($item === '19')
                                                Lower Back Pain,
                                            @elseif($item === '20')
                                                Muscular Dystrophy,
                                            @elseif($item === '21')
                                                Motor Neuron Disease,
                                            @elseif($item === '22')
                                                Guillain-Barre Syndrome,
                                            @endif
                                        @endforeach
                                    </strong>
                                </li>
                                <li>
                                    There's <strong class="elebow_condition">
                                        @if (session()->has('conditionFourParalysis'))
                                            @php
                                                $conditionFourParalysis = session('conditionFourParalysis');
                                            @endphp
                                            @if (is_array($conditionFourParalysis))
                                                @foreach ($conditionFourParalysis as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFourParalysis, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif
                                        @if (session()->has('conditionFourKnee'))
                                            @php
                                                $conditionFourKnee = session('conditionFourKnee');
                                            @endphp
                                            @if (is_array($conditionFourKnee))
                                                @foreach ($conditionFourKnee as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFourKnee, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif
                                        @if (session()->has('conditionFourParkinson'))
                                            @php
                                                $conditionFourParkinson = session('conditionFourParkinson');
                                            @endphp
                                            @if (is_array($conditionFourParkinson))
                                                @foreach ($conditionFourParkinson as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFourParkinson, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif
                                        @if (session()->has('conditionFourCervical'))
                                            @php
                                                $conditionFourCervical = session('conditionFourCervical');
                                            @endphp
                                            @if (is_array($conditionFourCervical))
                                                @foreach ($conditionFourCervical as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFourCervical, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionThreeLowerBack'))
                                            @php
                                                $conditionThreeLowerBack = session('conditionThreeLowerBack');
                                            @endphp
                                            @if (is_array($conditionThreeLowerBack))
                                                @foreach ($conditionThreeLowerBack as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionThreeLowerBack, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionFourMuscular'))
                                            @php
                                                $conditionFourMuscular = session('conditionFourMuscular');
                                            @endphp
                                            @if (is_array($conditionFourMuscular))
                                                @foreach ($conditionFourMuscular as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFourMuscular, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionFourMND'))
                                            @php
                                                $conditionFourMND = session('conditionFourMND');
                                            @endphp
                                            @if (is_array($conditionFourMND))
                                                @foreach ($conditionFourMND as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFourMND, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionFourGBS'))
                                            @php
                                                $conditionFourGBS = session('conditionFourGBS');
                                            @endphp
                                            @if (is_array($conditionFourGBS))
                                                @foreach ($conditionFourGBS as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFourGBS, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif
                                    </strong>
                                    .
                                </li>
                                <li>
                                    <strong class="shoulder_condition">
                                        @if (session()->has('conditionFiveParalysis'))
                                            @php
                                                $conditionFiveParalysis = session('conditionFiveParalysis');
                                            @endphp
                                            @if (is_array($conditionFiveParalysis))
                                                @foreach ($conditionFiveParalysis as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFiveParalysis, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif
                                        @if (session()->has('conditionFiveKnee'))
                                            @php
                                                $conditionFiveKnee = session('conditionFiveKnee');
                                            @endphp
                                            @if (is_array($conditionFiveKnee))
                                                @foreach ($conditionFiveKnee as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFiveKnee, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif
                                        @if (session()->has('conditionFiveParkinson'))
                                            @php
                                                $conditionFiveParkinson = session('conditionFiveParkinson');
                                            @endphp
                                            @if (is_array($conditionFiveParkinson))
                                                @foreach ($conditionFiveParkinson as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFiveParkinson, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif
                                        @if (session()->has('conditionFiveCervical'))
                                            @php
                                                $conditionFiveCervical = session('conditionFiveCervical');
                                            @endphp
                                            @if (is_array($conditionFiveCervical))
                                                @foreach ($conditionFiveCervical as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFiveCervical, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionFiveLowerBack'))
                                            @php
                                                $conditionFiveLowerBack = session('conditionFiveLowerBack');
                                            @endphp
                                            @if (is_array($conditionFiveLowerBack))
                                                @foreach ($conditionFiveLowerBack as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFiveLowerBack, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionFiveMuscular'))
                                            @php
                                                $conditionFiveMuscular = session('conditionFiveMuscular');
                                            @endphp
                                            @if (is_array($conditionFiveMuscular))
                                                @foreach ($conditionFiveMuscular as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFiveMuscular, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionFiveMND'))
                                            @php
                                                $conditionFiveMND = session('conditionFiveMND');
                                            @endphp
                                            @if (is_array($conditionFiveMND))
                                                @foreach ($conditionFiveMND as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFiveMND, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                        @if (session()->has('conditionFiveGBS'))
                                            @php
                                                $conditionFiveGBS = session('conditionFiveGBS');
                                            @endphp
                                            @if (is_array($conditionFiveGBS))
                                                @foreach ($conditionFiveGBS as $condition)
                                                    {{ htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') }}
                                                @endforeach
                                            @else
                                                {{ htmlspecialchars($conditionFiveGBS, ENT_QUOTES, 'UTF-8') }}
                                            @endif
                                        @endif

                                    </strong> because of <strong class="patient_suffering_field">
                                        @foreach ($data as $item)
                                            @if ($item === '1')
                                                Paralysis,
                                            @elseif($item === '2')
                                                Knee Joint Pain,
                                            @elseif($item === '17')
                                                Parkinson Disease,
                                            @elseif($item === '18')
                                                Cervical Pain,
                                            @elseif($item === '19')
                                                Lower Back Pain,
                                            @elseif($item === '20')
                                                Muscular Dystrophy,
                                            @elseif($item === '21')
                                                Motor Neuron Disease,
                                            @elseif($item === '22')
                                                Guillain-Barre Syndrome,
                                            @endif
                                        @endforeach
                                    </strong>
                                </li>
                            </ul>
                            </p>

                            <p>Let's get started!</p>

                            <div class="patient-summary table-responsive-sm ">
                                <table name="tblPatientSummary" class="table">
                                    <thead>
                                        <tr>
                                            <th>Summary</th>
                                            <th class="txtaligncenter">We Can Definitely Help</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="skills" id="trPatientGoalMobility">
                                            <td id="tdPatientGoalMobility">Mobility</td>
                                            <td class="txtaligncenter">
                                                <div class="progress-bar">
                                                    <div class="pateintMobility"><span>90%</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- <tr class="skills" id="trPatientGoalMotion">
                                            <td id="tdPatientGoalMotion"></td>
                                            <td class="txtaligncenter">
                                                <div class="progress-bar">
                                                    <div class="patientMotion"><span>90%</span></div>
                                                </div>
                                            </td>
                                        </tr> --}}
                                        <tr class="skills" id="trPationGoalReduction">
                                            <td id="tdPatientGoalReduction">
                                                @foreach ($SufferingPara as $item)
                                                    {{ $item }},
                                                @endforeach
                                                @foreach ($SufferingKnee as $item)
                                                    {{ $item }},
                                                @endforeach
                                                @foreach ($SufferingParkinson as $item)
                                                    {{ $item }},
                                                @endforeach
                                                @foreach ($SufferingCervical as $item)
                                                    {{ $item }},
                                                @endforeach
                                                @foreach ($SufferingLowerBack as $item)
                                                    {{ $item }},
                                                @endforeach
                                                @foreach ($SufferingMusculars as $item)
                                                    {{ $item }},
                                                @endforeach
                                                @foreach ($SufferingMotorNeuron as $item)
                                                    {{ $item }},
                                                @endforeach
                                                @foreach ($SufferingGuillain as $item)
                                                    {{ $item }},
                                                @endforeach
                                            </td>
                                            <td class="txtaligncenter">
                                                <div class="progress-bar">
                                                    <div class="patientReduction"><span>90%</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="skills" id="trPatientGoalActivities">
                                            <td id="tdPatientGoalActivities">
                                                @foreach ($Which_areaParalysis as $item)
                                                    {{ $item }}
                                                @endforeach
                                                @foreach ($Which_areaKnee as $item)
                                                    <{{ $item }} @endforeach
                                                        @foreach ($Which_areaParkinson as $item)
                                            <{{ $item }} @endforeach
                                                        @foreach ($Which_areaCervical as $item)
                                            {{ $item }} @endforeach
                                                        @foreach ($Which_areaLowerBack as $item)
                                            {{ $item }} @endforeach
                                                        @foreach ($Which_areaMuscular as $item)
                                            {{ $item }} @endforeach
                                                        @foreach ($Which_areaMotorNeuron as $item)
                                            {{ $item }} @endforeach
                                                        @foreach ($Which_areaGBS as $item)
                                            {{ $item }} @endforeach
                                            </td>
                                            <td class="txtaligncenter">
                                                <div class="progress-bar">
                                                    <div class="patientActivities"><span>90%</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="skills">
                                            <td id="vitamin_deficiency_field">Vitamin Deficiency
                                            </td>
                                            <td class="txtaligncenter">
                                                <div class="progress-bar">
                                                    <div class="patientVitamin"><span>60%</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="skills">
                                            <td>Health Status <br /> (Diabetes, Blood Pressure, Thyroid, Cancer, Genetic
                                                Disorders)</td>
                                            <td>
                                                <div class="progress-bar">
                                                    <div class="patientHealthStatus"><span>30%</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @foreach ($data as $item)
                                @if ($item === '1')
                                    <div id="paralysisAssessment">
                                        <p>
                                            <strong class="name_field"></strong> Understanding your kind of
                                            <strong>Paralysis</strong>,
                                        </p>
                                        <p>
                                            Based on the assessment, we recommend following personalized treatment plan.
                                            To
                                            address the specific needs and limitations of you. This plan may include of
                                            CMSE
                                            test that is muscle testing which will be carried out at your home by our
                                            doctor and
                                            expert's. This examination we help us to identify weak muscles, stiff muscle
                                            as well
                                            as non active muscles on your affected side. Which will help doctor to make
                                            treatment more accurate and result oriented.
                                        </p>
                                    </div>
                                @elseif($item === '2')
                                    <div id="kneePainAssessment">
                                        <p>
                                            <strong class="name_field"></strong> Understanding your kind of
                                            <strong>Knee
                                                Pain</strong>,
                                        </p>
                                        <p>
                                            Based on our assessment, it appears that your knee pain might be linked to
                                            arthritis, and there's a possibility that certain muscles around the knee
                                            have
                                            weakened. Strengthening these muscles could significantly alleviate your
                                            pain and
                                            potentially prevent further degeneration of the knee joint. Our proposed
                                            plan
                                            involves a CMSE test, a muscle testing procedure conducted by our doctors
                                            and
                                            experts in the comfort of your home. This examination aims to pinpoint weak,
                                            stiff,
                                            and inactive muscles on the affected side, allowing the doctor to tailor a
                                            more
                                            precise and effective treatment plan for you.
                                        </p>
                                    </div>
                                @elseif($item === '17')
                                    <div id="parkinsonsAssessment">
                                        <p>
                                            <strong class="name_field"></strong> Understanding your kind of
                                            <strong>Parkinson's</strong>,
                                        </p>
                                        <p>
                                            Based on our assessment, it appears that you may be experiencing symptoms
                                            associated
                                            with parkinsonism. There could be potential concerns about tumors,
                                            manifesting as
                                            difficulties in balance, walking, and slowed body movements. Our proposed
                                            course of
                                            action involves a CMSE muscle test, conducted by our medical professionals
                                            in the
                                            comfort of your home. This test aims to identify stiffness, inactivity, and
                                            other
                                            issues in major muscle groups, such as the neck, upper and lower back, legs,
                                            and
                                            hands. The results will enable the doctor to tailor a more precise and
                                            effective
                                            treatment plan.
                                        </p>
                                    @elseif($item === '18')
                                        <p>
                                            <strong class="name_field"></strong> Understanding your kind of
                                            <strong>Cervical Pain</strong>,
                                        </p>
                                        <p>
                                            Based on our assessment, it appears that you may be experiencing symptoms
                                            associated with cervical pain. This condition could lead to concerns such as
                                            neck stiffness, headaches, and discomfort radiating to the shoulders and
                                            arms. Our proposed course of action involves a CMSE muscle test, conducted
                                            by our medical professionals in the comfort of your home. This test aims to
                                            identify stiffness, inactivity, and other issues in major muscle groups,
                                            such as the neck, upper and lower back, and shoulders. The results will
                                            enable the doctor to tailor a more precise and effective treatment plan.
                                        </p>
                                    @elseif($item === '19')
                                        <div id="lowerBackAssessment">
                                            <p>
                                                <strong class="name_field"></strong> Understanding your kind of
                                                <strong>Lower Back
                                                    Pain</strong>,
                                            </p>
                                            <p>
                                                Based on our evaluation, it seems you're experiencing lower back
                                                discomfort,
                                                possibly due to a slipped disc. The lumbar region, consisting of five
                                                vertebrae and
                                                the triangular sacral vertebra, may have weakened muscles. Strengthening
                                                these
                                                muscles could alleviate your pain and prevent further disc degeneration.
                                                Our
                                                proposed plan includes a CMSE test, a muscle assessment performed by our
                                                doctor to
                                                identify weak, stiff, and inactive muscles in the lumbar and leg areas,
                                                enhancing
                                                the accuracy and effectiveness of your treatment.
                                            </p>
                                        </div>
                                    @elseif($item === '20')
                                        <div id="muscularDystrophyAssessment">
                                            <p>
                                                <strong class="name_field"></strong> Understanding your kind of
                                                <strong>Muscular
                                                    Dystrophy</strong>,
                                            </p>
                                            <p>
                                                According to our evaluation, it appears that you are dealing with
                                                muscular
                                                dystrophy, a condition where many muscles undergo degeneration. Over
                                                time, mobility
                                                challenges may arise, potentially leading to the need for a wheelchair.
                                                Our proposed
                                                intervention aims to enhance muscle strength, potentially alleviating
                                                your symptoms.
                                                Our plan involves a CMSE test, a muscle assessment conducted at your
                                                home by our
                                                medical professionals. This evaluation will pinpoint areas of muscle
                                                weakness,
                                                stiffness, and inactivity on the affected side, enabling our doctors to
                                                tailor a
                                                precise and effective treatment strategy.
                                            </p>
                                        </div>
                                    @elseif($item === '21')
                                        <div id="motorNeuroneDiseaseAssessment">
                                            <p>
                                                <strong class="name_field"></strong> Understanding your kind of
                                                <strong>Motor
                                                    Neurone Disease</strong>,
                                            </p>
                                            <p>
                                                Based on our evaluation, it seems that you are dealing with motor
                                                neurone disease
                                                (MND)
                                                , a condition that progressively affects the nervous system. You may
                                                experience
                                                discomfort, spasms, weakness, or alterations in your hands, arms, legs,
                                                and voice.
                                                Fatigue may also occur due to muscle degeneration and weight loss. We
                                                can assist you
                                                in strengthening your muscles to alleviate symptoms. Our proposed
                                                strategy involves
                                                a CMSE test, a muscle assessment conducted at your residence by our
                                                skilled medical
                                                team. This examination will pinpoint weakened, strained, and inactive
                                                muscles on the
                                                affected side, enabling our doctors to tailor a more precise and
                                                effective treatment
                                                plan.
                                            </p>
                                        </div>
                                    @elseif($item === '22')
                                        <div id="gulianBarrySyndromeAssessment">
                                            <p>
                                                <strong class="name_field"></strong> Understanding your kind of
                                                <strong>Guillain-Barré Syndrome</strong>,
                                            </p>
                                            <p>
                                                Certainly, addressing Guillain-Barré Syndrome (GBS) requires a
                                                comprehensive
                                                approach, and the CMSE test on the first day serves as a crucial
                                                diagnostic tool.
                                                The expertise of our doctors and specialists ensures targeted muscle
                                                strengthening,
                                                unlocking the path to remarkable recovery for GBS patients.
                                            </p>
                                        </div>
                                @endif
                            @endforeach
                            {{-- <div id="paralysisAssessment">
                                <p>
                                    <strong class="name_field"></strong> Understanding your kind of
                                    <strong>Paralysis</strong>,
                                </p>
                                <p>
                                    Based on the assessment, we recommend following personalized treatment plan. To
                                    address the specific needs and limitations of you. This plan may include of CMSE
                                    test that is muscle testing which will be carried out at your home by our doctor and
                                    expert's. This examination we help us to identify weak muscles, stiff muscle as well
                                    as non active muscles on your affected side. Which will help doctor to make
                                    treatment more accurate and result oriented.
                                </p>
                            </div>

                            <div id="kneePainAssessment">
                                <p>
                                    <strong class="name_field"></strong> Understanding your kind of <strong>Knee
                                        Pain</strong>,
                                </p>
                                <p>
                                    Based on our assessment, it appears that your knee pain might be linked to
                                    arthritis, and there's a possibility that certain muscles around the knee have
                                    weakened. Strengthening these muscles could significantly alleviate your pain and
                                    potentially prevent further degeneration of the knee joint. Our proposed plan
                                    involves a CMSE test, a muscle testing procedure conducted by our doctors and
                                    experts in the comfort of your home. This examination aims to pinpoint weak, stiff,
                                    and inactive muscles on the affected side, allowing the doctor to tailor a more
                                    precise and effective treatment plan for you.
                                </p>
                            </div>

                            <div id="upperBackAssessment">
                                <p>
                                    <strong class="name_field"></strong> Understanding your kind of <strong>Upper Back
                                        Pain</strong>,
                                </p>
                                <p>
                                    There are a total of 12 vertebrae in the upper back. If you're experiencing upper
                                    back pain, it could be attributed to incorrect posture or prolonged sitting. To
                                    address this discomfort, an initial step is CMSE muscle testing. This diagnostic
                                    method helps identify weakened muscles in the upper back contributing to your pain.
                                    Once identified, healthcare professionals can then work on strengthening these
                                    muscles to alleviate your upper back discomfort.
                                </p>
                            </div>

                            <div id="lowerBackAssessment">
                                <p>
                                    <strong class="name_field"></strong> Understanding your kind of <strong>Lower Back
                                        Pain</strong>,
                                </p>
                                <p>
                                    Based on our evaluation, it seems you're experiencing lower back discomfort,
                                    possibly due to a slipped disc. The lumbar region, consisting of five vertebrae and
                                    the triangular sacral vertebra, may have weakened muscles. Strengthening these
                                    muscles could alleviate your pain and prevent further disc degeneration. Our
                                    proposed plan includes a CMSE test, a muscle assessment performed by our doctor to
                                    identify weak, stiff, and inactive muscles in the lumbar and leg areas, enhancing
                                    the accuracy and effectiveness of your treatment.
                                </p>
                            </div>

                            <div id="parkinsonsAssessment">
                                <p>
                                    <strong class="name_field"></strong> Understanding your kind of
                                    <strong>Parkinson's</strong>,
                                </p>
                                <p>
                                    Based on our assessment, it appears that you may be experiencing symptoms associated
                                    with parkinsonism. There could be potential concerns about tumors, manifesting as
                                    difficulties in balance, walking, and slowed body movements. Our proposed course of
                                    action involves a CMSE muscle test, conducted by our medical professionals in the
                                    comfort of your home. This test aims to identify stiffness, inactivity, and other
                                    issues in major muscle groups, such as the neck, upper and lower back, legs, and
                                    hands. The results will enable the doctor to tailor a more precise and effective
                                    treatment plan.
                                </p>
                            </div>

                            <div id="muscularDystrophyAssessment">
                                <p>
                                    <strong class="name_field"></strong> Understanding your kind of <strong>Muscular
                                        Dystrophy</strong>,
                                </p>
                                <p>
                                    According to our evaluation, it appears that you are dealing with muscular
                                    dystrophy, a condition where many muscles undergo degeneration. Over time, mobility
                                    challenges may arise, potentially leading to the need for a wheelchair. Our proposed
                                    intervention aims to enhance muscle strength, potentially alleviating your symptoms.
                                    Our plan involves a CMSE test, a muscle assessment conducted at your home by our
                                    medical professionals. This evaluation will pinpoint areas of muscle weakness,
                                    stiffness, and inactivity on the affected side, enabling our doctors to tailor a
                                    precise and effective treatment strategy.
                                </p>
                            </div>

                            <div id="motorNeuroneDiseaseAssessment">
                                <p>
                                    <strong class="name_field"></strong> Understanding your kind of <strong>Motor
                                        Neurone Disease</strong>,
                                </p>
                                <p>
                                    Based on our evaluation, it seems that you are dealing with motor neurone disease
                                    (MND), a condition that progressively affects the nervous system. You may experience
                                    discomfort, spasms, weakness, or alterations in your hands, arms, legs, and voice.
                                    Fatigue may also occur due to muscle degeneration and weight loss. We can assist you
                                    in strengthening your muscles to alleviate symptoms. Our proposed strategy involves
                                    a CMSE test, a muscle assessment conducted at your residence by our skilled medical
                                    team. This examination will pinpoint weakened, strained, and inactive muscles on the
                                    affected side, enabling our doctors to tailor a more precise and effective treatment
                                    plan.
                                </p>
                            </div>

                            <div id="hipPainAssessment">
                                <p>
                                    <strong class="name_field"></strong> Understanding your kind of <strong>Hip
                                        Pain</strong>,
                                </p>
                                <p>
                                    According to our evaluation it appears that your dealing with hip pain might be
                                    linked with muscles stiffness around the hip or could be due to hip arthritis and
                                    there is a possibility were certain muscles around the hip joint would have weakned
                                    strengthening this muscles good significantly alleviate your pain and potential
                                    prevent for the degeneration of the hip joint. Our proposed plan involves CMSE test
                                    a muscle testing procedure conducted by our doctor and exports in the comfort of
                                    your home. This examination aims to pinpoint with strip and inactive muscles on the
                                    affected side of your hip joint comma allowing doctor to tailor a more precise and
                                    effective treatment plan for your hip joint.
                                </p>
                            </div>

                            <div id="neckPainAssessment">
                                <p>
                                    <strong class="name_field"></strong> Understanding your kind of <strong>Neck
                                        Pain</strong>,
                                </p>
                                <p>
                                    Understanding your neck pain is crucial for effective treatment. It could be
                                    attributed to muscle stiffness, nerve pinch, or cervical spondylitis. Addressing
                                    weak muscles through at-home CMSE tests conducted by our experts can provide
                                    targeted solutions, potentially reducing pain and preventing further issues like
                                    cervical slip disc degeneration. Identifying specific muscle weaknesses enables a
                                    more tailored and effective treatment approach for improved results.
                                </p>
                            </div>

                            <div id="shoulderPainAssessment">
                                <p>
                                    <strong class="name_field"></strong> Understanding your kind of <strong>Shoulder
                                        Pain</strong>,
                                </p>
                                <p>
                                    It seems like you're dealing with shoulder pain, possibly due to muscle stiffness or
                                    shoulder arthritis. Strengthening weak muscles is a recommended option to alleviate
                                    pain and improve shoulder mobility. Our proposed plan includes a CMSE test, a muscle
                                    testing procedure conducted at home by our experts, which helps identify specific
                                    inactive muscles in your affected shoulder. This allows our doctors to tailor a more
                                    precise and effective treatment plan for your shoulder joint.
                                </p>
                            </div>

                            <div id="anklePainAssessment">
                                <p>
                                    <strong class="name_field"></strong> Understanding your kind of <strong>Ankle
                                        Pain</strong>,
                                </p>
                                <p>
                                    Addressing ankle discomfort, potentially stemming from a sprain or muscle stiffness,
                                    entails fortifying weakened muscles as a paramount strategy to alleviate pain and
                                    enhance ankle mobility. Our innovative approach introduces the CMSE test, an
                                    advanced at-home muscle testing procedure administered by our experts. This
                                    distinctive method identifies inactive muscles within the afflicted ankle joint,
                                    empowering our skilled physicians to craft a meticulously tailored, highly effective
                                    treatment plan for optimal recovery.
                                </p>
                            </div> --}}



                            <div class="plan">
                                <h4><strong class="name_field">{{ $information['patientname'] }}</strong>, There are
                                    three alternative plans for the
                                    initial treatment.</h4>
                                <div class="approach1">
                                    <h5>Treatment Approach 1: We Recommend</h5>
                                    <div class="col-md-6">
                                        <table class="table table-striped table-sm table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Cost (Rs.)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Consultation Fee</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr>
                                                    <td>Treatment Cost</td>
                                                    <td>3000</td>
                                                </tr>
                                                <tr>
                                                    <td>Travel Charges</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr class="txtbold">
                                                    <td>Subtotal</td>
                                                    <td>5000</td>
                                                </tr>
                                                <tr class="txtbold">
                                                    <td>Temporary Discount</td>
                                                    <td>-2000</td>
                                                </tr>
                                                <tr class="txtbold">
                                                    <td>Total After Discount</td>
                                                    <td>3000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p>
                                        <strong>Take Immediate Action:</strong> Secure your booking by making a
                                        <strong>Rs. 100</strong> advance payment.
                                        {{-- <button type="submit"><a href="#" data-bs-toggle="modal"
                                                onchange="Submit(this.value)"
                                                data-bs-target=".bookAppointmentModal">Click Here</a></button> --}}


                                        <a href="{{ url('/payment') }}" target="_blank" class="button_pay">Click Here</a>

                                    </p>
                                </div>
                                <div class="approach2">
                                    <h5>Treatment Approach 2: We Highly Recommend</h5>
                                    <div class="col-md-6">
                                        <table class="table table-striped table-sm table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Cost (Rs.)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Consultation Fee</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr>
                                                    <td>CMSE Muscle Examination</td>
                                                    <td>9000</td>
                                                </tr>
                                                <tr>
                                                    <td>Treatment Cost</td>
                                                    <td>3000</td>
                                                </tr>
                                                <tr>
                                                    <td>Travel Charges</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr class="txtbold">
                                                    <td>Subtotal</td>
                                                    <td>14000</td>
                                                </tr>
                                                <tr class="txtbold">
                                                    <td>Temporary Discount</td>
                                                    <td>-6000</td>
                                                </tr>
                                                <tr class="txtbold">
                                                    <td>Total After Discount</td>
                                                    <td>8000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p>
                                        <strong>Take Immediate Action:</strong> Secure your booking by making a
                                        <strong>Rs. 250</strong> advance payment.
                                        <a href="{{ url('/payment') }}" target="_blank" class="button_pay">Click Here</a>

                                    </p>
                                </div>
                                <div class="approach3">
                                    <h5>Treatment Approach 3</h5>
                                    <div class="col-md-6">
                                        <table class="table table-striped table-sm table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Cost (Rs.)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Consultation Fee</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr>
                                                    <td>CMSE Muscle Examination</td>
                                                    <td>9000</td>
                                                </tr>
                                                <tr>
                                                    <td>Clinical Assessment Charges</td>
                                                    <td>4500</td>
                                                </tr>
                                                <tr>
                                                    <td>Treatment Cost</td>
                                                    <td>3000</td>
                                                </tr>
                                                <tr>
                                                    <td>Travel Charges</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr class="txtbold">
                                                    <td>Subtotal</td>
                                                    <td>18500</td>
                                                </tr>
                                                <tr class="txtbold">
                                                    <td>Temporary Discount</td>
                                                    <td>-6500</td>
                                                </tr>
                                                <tr class="txtbold">
                                                    <td>Total After Discount</td>
                                                    <td>12000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p>
                                        <strong>Take Immediate Action:</strong> Secure your booking by making a
                                        <strong>Rs. 500</strong> advance payment.

                                        <a href="{{ url('/payment') }}" type="button" name="forward" class="button_pay"
                                        onclick="indexsubmit(this.value)" target="_blank">Click Here</a>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit step" id="end">
                    <div class="">
                        <div class="wrapper">

                        </div>
                    </div>
                </div>
                <!-- /step last-->

            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                                    <a href="{{route('index')}}"><button type="button" name="forward" class="forward"
                        onclick="indexsubmit(this.value)">Home</button></a>
            </div>
            <!-- /bottom-wizard -->


    </div>
    <!-- /Wizard container -->
</div>


@include('mobility.footer')
