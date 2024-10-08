@include('header')
<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">
        <div id="top-wizard">
            <span id="location"></span>
            <div id="progressbar"></div>
        </div>
        <!-- /top-wizard -->
        <form id="wrapped" method="post" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf
            <input id="website" name="website" type="text" value="">

            <!-- Leave for security protection, read docs for details -->
            <!-- /step1-->

            <div id="middle-wizard">
                <div class="margingb50">
                    <h1 class="h2">Health Test, Get Quick Result</h1>
                </div>

                <div class="step" >
                    @if(session('basic_info'))
                    <div class="form-group add_top_30">
                        <input type="text" name="patientname" style="display: none" value="{{ session('basic_info')->patientname }}" id="name" class="form-control required"
                            onchange="getVals(this, 'name_field');">
                    </div>
                    <div class="form-group">
                        <input type="text" name="patientphone" style="display: none" value="{{ session('basic_info')->patientphone }}" id="phone" class="form-control required"
                            maxlength="10">
                    </div>
                    <div class="form-group add_top_30">

                        <input type="email" name="patientemail" style="display: none" value="{{ session('basic_info')->patientemail}}" id="email" class="form-control required">
                    </div>
                    @endif
                
                    <h3 class="main_question">Demographic Information:</h3>
                    <div class="form-group add_top_30">
                        <label for="age">Age of the Patient</label>
                        <input type="text" name="patientage" id="age" class="form-control required">
                    </div>
                    <div class="form-group add_top_20">
                        <label for="weight">Approximate Weight of the Patient</label>
                        <input type="text" name="patientweight" id="weight" class="form-control required">
                    </div>
                    <div class="form-group add_top_30">
                        <label for="age">Gender of Patient:</label> <br>
                        <label class="container_radio version_2">Male
                            <input type="radio" name="patientgender" value="male" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">Female
                            <input type="radio" name="patientgender" value="female" class="required">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <!-- /step3-->

                @php
                    $conditionsArray = $conditions->toArray();
                    $halfCount = ceil(count($conditionsArray) / 2);
                    $firstHalf = array_slice($conditionsArray, 0, $halfCount);
                    $secondHalf = array_slice($conditionsArray, $halfCount);
                @endphp

                <div class="step">
                    <h3 class="main_question">What is Patient Suffering from?</h3>
                    <div class="row" id="conditions">
                        <div class="col-md-6">
                            @foreach ($firstHalf as $condition)
                                <div class="form-group">
                                    <label class="container_check">{{ $condition['name'] }}
                                        <input type="checkbox" id="{{ $condition['sub_name'] }}" name="PatientSuffering"
                                            value="{{ $condition['id'] }}" class="PatientSuffering required"
                                            data-condition-name="{{ $condition['name'] }}"
                                            onchange="getVals(this, 'patient_suffering_field');">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @foreach ($secondHalf as $condition)
                                <div class="form-group">
                                    <label class="container_check">{{ $condition['name'] }}
                                        <input type="checkbox" id="{{ $condition['sub_name'] }}" name="PatientSuffering"
                                            value="{{ $condition['id'] }}" class="PatientSuffering required"
                                            data-condition-name="{{ $condition['name'] }}"
                                            onchange="getVals(this, 'patient_suffering_field');">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <input type="hidden" id="inputText" name="sufferingFrom">
                </div>
                <!-- /step4-->


                <div class="step">
                    <h3 class="main_question aapends"></h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group wichside">

                            </div>
                        </div>
                    </div>

                </div>


                <!-- /step  5-->

                <div class="step">
                    <h3 class="main_question which_area"></h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group wicharea">

                            </div>
                        </div>

                    </div>

                </div>


                <!-- /step  5-->


                <div class="step">
                    <h3 class="main_question sit_stand_title"></h3>
                    <div class="form-group sitstand add_top_30 ">

                    </div>
                </div>
                <!-- /step  6-->



                <div class="step">
                    <h3 class="main_question walking_title"></h3>
                    <div class="form-group waliking add_top_30">

                    </div>
                </div>

                <!-- /step  7-->

                <div class="step">
                    <h3 class="main_question finger_title"></h3>
                    <div class="form-group finger add_top_30">

                    </div>
                </div>


                <!-- /step  8-->

                <div class="step">
                    <h3 class="main_question elebow_title"></h3>
                    <div class="form-group elebow add_top_30">

                    </div>
                </div>

                <!-- /step  9-->


                <div class="step">
                    <h3 class="main_question shoulder_title"></h3>
                    <div class="form-group shoulder add_top_30">

                    </div>
                </div>

                <!-- /step  10-->

                <div class="step">
                    <h3 class="main_question">How Long Patient is Suffering?</h3>
                    <div class="form-group">
                        <label class="container_radio version_2">Less than 1 Year
                            <input type="radio" name="SufferingDuration" value="Less Than 1 Year"
                                onchange="getVals(this, 'suffering_duration_field');">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">1 Year
                            <input type="radio" name="SufferingDuration" value="1 Year"
                                onchange="getVals(this, 'suffering_duration_field');" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">2 Years
                            <input type="radio" name="SufferingDuration" value="2 Years"
                                onchange="getVals(this, 'suffering_duration_field');" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">3 Years
                            <input type="radio" name="SufferingDuration" value="3 Years"
                                onchange="getVals(this, 'suffering_duration_field');" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">4 Years
                            <input type="radio" name="SufferingDuration" value="4 Years"
                                onchange="getVals(this, 'suffering_duration_field');" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">5 Years
                            <input type="radio" name="SufferingDuration" value="5 Years"
                                onchange="getVals(this, 'suffering_duration_field');" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">Above 5 Years
                            <input type="radio" name="SufferingDuration" value="Above 5 Years"
                                onchange="getVals(this, 'suffering_duration_field');" class="required">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>


                <!-- /step16-->

                <div class="step">
                    <h3 class="main_question">What's your most Important Goal Currently?</h3>
                    <div class="form-group">
                        <label class="container_check version_2">Improve Mobility
                            <input type="checkbox" name="PatientGoalMobility" value="Mobility"
                                class="chkPatientGoal" onchange="getVals(this, 'patient_goal_field');"
                                data-ptag="trPatientGoalMobility">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_check version_2">Increase Range of Motion
                            <input type="checkbox" name="PatientGoalMotion" value="Range of Motion"
                                class="chkPatientGoal" onchange="getVals(this, 'patient_goal_field');"
                                data-ptag="trPatientGoalMotion">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_check version_2">Pain Reduction
                            <input type="checkbox" name="PatientGoalReduction" value="Pain Reduction"
                                class="chkPatientGoal" onchange="getVals(this, 'patient_goal_field');"
                                data-ptag="trPatientGoalReduction">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_check version_2">Improving Day to Day Functional Activities
                            <input type="checkbox" name="PatientGoalActivities"
                                value="Day to Day Functional Activities" class="chkPatientGoal"
                                onchange="getVals(this, 'patient_goal_field');" data-ptag="trPatientGoalActivities">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>

                <!-- /step 11-->

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

                <!-- /step 12-->

                <div class="step">
                    <h3 class="main_question">How Stressed is Patient?</h3>
                    <div class="form-group">
                        <label class="container_radio version_2">Not at All
                            <input type="radio" name="patient_stressed" value="Not at All" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">Low
                            <input type="radio" name="patient_stressed" value="Low" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">Moderate
                            <input type="radio" name="patient_stressed" value="Moderate" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">High
                            <input type="radio" name="patient_stressed" value="High" class="required">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>


                <!-- /step13-->

                <div class="step">
                    <h3 class="main_question">Do Patient have Vitamin Deficiency that you are Aware Off?</h3>
                    <div class="form-group">
                        <label class="container_radio version_2">Yes
                            <input type="radio" name="VitaminDeficiency" value="Yes Vitamin Deficiency"
                                class="required" onchange="getVals(this, 'vitamin_deficiency_field');">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">No
                            <input type="radio" name="VitaminDeficiency" value="No Vitamin Deficiency"
                                class="required" onchange="getVals(this, 'vitamin_deficiency_field');">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">Not Sure
                            <input type="radio" name="VitaminDeficiency" value="Not Sure" class="required"
                                onchange="getVals(this, 'vitamin_deficiency_field');">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>


                <!-- /step14-->

                <div class="step">
                    <h3 class="main_question">Have Patient Experienced any of the below?</h3>
                    <div class="form-group">
                        <label class="container_check version_2">Severe Illness (Dengue, Malaria, Thyphoid or Covid)
                            <input type="checkbox" name="below_suffering"
                                value="Severe Illness (Dengue, Malaria, Thyphoid or Covid)" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_check version_2">Surgery or Any Heavy Medication
                            <input type="checkbox" name="below_suffering" value="Surgery or Any Heavy Medication"
                                class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_check version_2">None
                            <input type="checkbox" name="below_suffering" value="None" class="required">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>

                <!-- /step15-->



                <div class="step">
                    <h3 class="main_question">How Well does Patient Sleep?</h3>
                    <div class="form-group">
                        <label class="container_radio version_2">Peacefully for 6-8 Hours
                            <input type="radio" name="sleep_time" value="Peacefully for 6-8 Hours"
                                onclick="Submit(this.value)" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">Distrubed Sleep, I Wake Up Atleast Once in the Night
                            <input type="radio" name="sleep_time" onclick="Submit(this.value)"
                                value="Distrubed Sleep, I Wake Up Atleast Once in the Night" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">Have Difficulty Falling Asleep
                            <input type="radio" name="sleep_time" value="Have Difficulty Falling Asleep"
                                onclick="Submit(this.value)" class="required">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>


                <!-- /step17-->

                <div class="submit step" id="end">
                    <div class="">
                        <div class="wrapper">
                            <h4>Hi , <strong class="name_field"></strong></h4>
                            <p>Thank you for taking Eligibility Test. Based on your responses, we have identify the
                                following:</p>
                            <p>
                            <ul class="bulleted-list">
                                <li> <strong class="name_field"></strong> you are Suffering from <strong
                                        class="which_side_suffering"></strong> of <strong
                                        class="patient_suffering_field"></strong> From Past <strong
                                        style="font-size:1.2rem" id="suffering_duration_field"></strong>.</li>
                                <li>
                                    The <strong class="patient_suffering_field"></strong> has a greter impact on
                                    <strong class="which_side_suffering"></strong> <strong
                                        id="area_affected"></strong> .
                                </li>
                                <li>Your <strong class="hand_finger_condition"></strong> Experience due to <strong
                                        class="patient_suffering_field"></strong> , </li>
                                <li>
                                    There's <strong class="elebow_condition"></strong> .
                                </li>
                                <li>
                                    <strong class="shoulder_condition"></strong> because of <strong
                                        class="patient_suffering_field"></strong>
                                </li>
                            </ul>




                            </p>
                            <p>
                                <strong class="name_field"></strong> is <strong id="physical_problem_field"></strong>
                                with History of <strong id="health_quality_field"></strong>
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
                                            <td id="tdPatientGoalMobility"></td>
                                            <td class="txtaligncenter">
                                                <div class="progress-bar">
                                                    <div class="pateintMobility"><span>90%</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="skills" id="leg">
                                            <td id="tdareaaffected"></td>
                                            <td class="txtaligncenter">
                                                <div class="progress-bar">
                                                    <div class="arealeg"><span>90%</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="skills" id="trPatientGoalMotion">
                                            <td id="tdPatientGoalMotion"></td>
                                            <td class="txtaligncenter">
                                                <div class="progress-bar">
                                                    <div class="patientMotion"><span>90%</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="skills" id="trPationGoalReduction">
                                            <td id="tdPatientGoalReduction"></td>
                                            <td class="txtaligncenter">
                                                <div class="progress-bar">
                                                    <div class="patientReduction"><span>90%</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="skills" id="trPatientGoalActivities">
                                            <td id="tdPatientGoalActivities"></td>
                                            <td class="txtaligncenter">
                                                <div class="progress-bar">
                                                    <div class="patientActivities"><span>90%</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="skills">
                                            <td id="vitamin_deficiency_field"></td>
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

                            <div id="paralysisAssessment">
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
                            </div>

                            <div id="gulianBarrySyndromeAssessment">
                                <p>
                                    <strong class="name_field"></strong> Understanding your kind of
                                    <strong>Guillain-Barré Syndrome</strong>,
                                </p>
                                <p>
                                    Certainly, addressing Guillain-Barré Syndrome (GBS) requires a comprehensive
                                    approach, and the CMSE test on the first day serves as a crucial diagnostic tool.
                                    The expertise of our doctors and specialists ensures targeted muscle strengthening,
                                    unlocking the path to remarkable recovery for GBS patients.
                                </p>
                            </div>

                            <div class="plan">
                                <h4><strong class="name_field"></strong>, There are three alternative plans for the
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

                                        <a href="#" data-bs-toggle="modal" onclick="Submit(this.value)"><strong
                                                class="font-size-2">Click Here</strong></a>
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
                                        <a href="#" data-bs-toggle="modal"><strong class="font-size-2">Click
                                                Here</strong></a>
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
                                        <a href="#" data-bs-toggle="modal" onclick="Submit(this.value)"><strong
                                                class="font-size-2">Click Here</strong></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /step last-->

            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <button type="button" name="backward" class="backward">Prev</button>
                <button type="button" name="forward" class="forward">Next</button>
            </div>
            <!-- /bottom-wizard -->


        </form>
    </div>
    <!-- /Wizard container -->
</div>
<!-- /content-right-->

@include('footer')
