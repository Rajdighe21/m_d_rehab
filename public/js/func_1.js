/*  Wizard */
jQuery(function ($) {
    "use strict";
    // Chose below which method to send the email, available:
    // Simple phpmail text/plain > send_email_1.php (default)
    // PHPMailer text/html > phpmailer/send_email_1_phpmailer.php
    // PHPMailer text/html SMTP > phpmailer/send_email_1_phpmailer_smtp.php
    // PHPMailer with html template > phpmailer/send_email_1_phpmailer_template.php
    // PHPMailer with html template SMTP > phpmailer/send_email_1_phpmailer_template_smtp.php
    // $('form#wrapped').attr('action', 'phpmailer/send_email_1_phpmailer_template_smtp.php');
    $("#wizard_container").wizard({
        stepsWrapper: "#wrapped",
        submit: ".submit",
        unidirectional: false,
        beforeSelect: function (event, state) {
            if ($('input#website').val().length != 0) {
                return false;
            }
            if (!state.isMovingForward)
                return true;
            var inputs = $(this).wizard('state').step.find(':input');
            return !inputs.length || !!inputs.valid();
        }
    }).validate({
        errorPlacement: function (error, element) {
            if (element.is(':radio') || element.is(':checkbox')) {
                error.insertBefore(element.next());
            } else {
                error.insertAfter(element);
            }
        }
    });
    //  progress bar
    $("#progressbar").progressbar();
    $("#wizard_container").wizard({
        afterSelect: function (event, state) {
            $("#progressbar").progressbar("value", state.percentComplete);
            $("#location").text("" + state.stepsComplete + " of " + state.stepsPossible + " completed");
        }
    });
});

$("#wizard_container").wizard({
    transitions: {
        branchtype: function ($step, action) {
            var branch = $step.find(":checked").val();
            if (!branch) {
                $("form").valid();
            }
            return branch;
        }
    }
});



/* File upload validate size and file type - For details: https://github.com/snyderp/jquery.validate.file*/
$("form#wrapped")
    .validate({
        rules: {
            fileupload: {
                fileType: {
                    types: ["pdf", "application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"]
                },
                maxFileSize: {
                    "unit": "KB",
                    "size": 150
                },
                minFileSize: {
                    "unit": "KB",
                    "size": "2"
                }
            }
        }
    });

// Input name and email value
function getVals(formControl, controlType) {
    switch (controlType) {

        case 'name_field':
            // Get the value for input
            var value = $(formControl).val();
            $(".name_field").text(value);
            break;

        case 'email_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#email_field").text(value);
            break;

        case 'patient_suffering_field':
            /* Attach All values in Array*/
            // Get the value for input
            var value = $("input[name='PatientSuffering']:checked").map(function (_, el) {
                return $(el).data('condition-name');
            }).toArray();

            
            var inputText = document.getElementById('inputText');
            inputText.value = value;

            // Show the checked values in the label
            $('.patient_suffering_field').text(value.join(', '));
            /* Show / Hide Div */
            // Get the checkbox Paralysis
            var checkbox = $("#chkParalysis");
            // Get the div Paralysis
            var paralysisAssessment = $('#paralysisAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                paralysisAssessment.show();
            } else {
                // Hide the table cell
                paralysisAssessment.hide();
            }

            // Get the checkbox Knee Pain
            var checkbox = $("#chkKneeJointPain");

            // Get the div Knee Pain
            var kneePainAssessment = $('#kneePainAssessment');


            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                kneePainAssessment.show();

            } else {
                // Hide the table cell
                kneePainAssessment.hide();
            }

            // Get the checkbox Upper Back Pain
            var checkbox = $("#chkUpperBackPain");

            // Get the div Lower Back Pain
            var upperBackAssessment = $('#upperBackAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                upperBackAssessment.show();
            } else {
                // Hide the table cell
                upperBackAssessment.hide();
            }

            // Get the checkbox Lower Back Pain
            var checkbox = $("#chkLowerBackPain");

            // Get the div Lower Back Pain
            var lowerBackAssessment = $('#lowerBackAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                lowerBackAssessment.show();
            } else {
                // Hide the table cell
                lowerBackAssessment.hide();
            }

            // Get the checkbox Parkinson's
            var checkbox = $("#chkParkinsons");

            // Get the div Parkinson's
            var parkinsonsAssessment = $('#parkinsonsAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                parkinsonsAssessment.show();
            } else {
                // Hide the table cell
                parkinsonsAssessment.hide();
            }

            // Get the checkbox Muscular Dystrophy
            var checkbox = $("#chkMuscularDystrophy");

            // Get the div Muscular Dystrophy
            var muscularDystrophyAssessment = $('#muscularDystrophyAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                muscularDystrophyAssessment.show();
            } else {
                // Hide the table cell
                muscularDystrophyAssessment.hide();
            }

            // Get the checkbox Motor Neurone Disease
            var checkbox = $("#chkMotorNeuronDisease");

            // Get the div Motor Neurone Disease
            var motorNeuroneDiseaseAssessment = $('#motorNeuroneDiseaseAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                motorNeuroneDiseaseAssessment.show();
            } else {
                // Hide the table cell
                motorNeuroneDiseaseAssessment.hide();
            }

            // Get the checkbox Hip Pain
            var checkbox = $("#chkHipPain");

            // Get the div Hip Pain
            var hipPainAssessment = $('#hipPainAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                hipPainAssessment.show();
            } else {
                // Hide the table cell
                hipPainAssessment.hide();
            }

            // Get the checkbox Neck Pain
            var checkbox = $("#chkNeckPain");

            // Get the div Hip Pain
            var neckPainAssessment = $('#neckPainAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                neckPainAssessment.show();
            } else {
                // Hide the table cell
                neckPainAssessment.hide();
            }

            // Get the checkbox Shoulder Pain
            var checkbox = $("#chkShoulderPain");

            // Get the div Shoulder Pain
            var shoulderPainAssessment = $('#shoulderPainAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                shoulderPainAssessment.show();
            } else {
                // Hide the table cell
                shoulderPainAssessment.hide();
            }

            // Get the checkbox Ankle Pain
            var checkbox = $("#chkAnklePain");

            // Get the div Ankle Pain
            var anklePainAssessment = $('#anklePainAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                anklePainAssessment.show();
            } else {
                // Hide the table cell
                anklePainAssessment.hide();
            }

            // Get the checkbox Guillain-Barré Syndrome
            var checkbox = $("#chkGulianBarrySyndrome");

            // Get the div Guillain-Barré Syndrome
            var gulianBarrySyndromeAssessment = $('#gulianBarrySyndromeAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                gulianBarrySyndromeAssessment.show();
            } else {
                // Hide the table cell
                gulianBarrySyndromeAssessment.hide();
            }
            break;

        case 'which_side_suffering':
            /* Attach All values in Array*/
            // Get the value for input
            var value = $("input[name='whichsidesuffering']:checked").map(function (_, el) {
                return $(el).val();
            }).toArray();

            // Show the checked values in the label
            $('.which_side_suffering').text(value.join(', '));

            /* Show / Hide Div */
            // Get the checkbox Paralysis
            var checkbox = $("#rightside");

            // Get the div Paralysis
            var rightsideAssessment = $('.rightsideAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                rightsideAssessment.show();
            } else {
                // Hide the table cell
                rightsideAssessment.hide();
            }

            var checkbox = $("#leftside");

            // Get the div Knee Pain
            var leftsideAssessment = $('#leftsideAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                leftsideAssessment.show();
            } else {
                // Hide the table cell
                leftsideAssessment.hide();
            }

            var checkbox = $("#bothside");

            // Get the div Knee Pain
            var bothsideAssessment = $('#bothsideAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                bothsideAssessment.show();
            } else {
                // Hide the table cell
                bothsideAssessment.hide();
            }
            break;



        case 'area_affected':
            /* Attach All values in Array*/
            // Get the value for input
            var value = $("input[name='areaaffected']:checked").map(function (_, el) {
                return $(el).val();
            }).toArray();

            // Show the checked values in the label
            $('#area_affected').text(value.join(', '));

            /* Show / Hide Div */
            // Get the checkbox Paralysis
            var checkbox = $("#leg");

            // Get the div Paralysis
            var legAssessment = $('#legAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                legAssessment.show();
            } else {
                // Hide the table cell
                legAssessment.hide();
            }

            var checkbox = $("#hand");

            // Get the div Knee Pain
            var handAssessment = $('#handAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                handAssessment.show();
            } else {
                // Hide the table cell
                handAssessment.hide();
            }

            var checkbox = $("#face");

            // Get the div Knee Pain
            var faceAssessment = $('#faceAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                faceAssessment.show();
            } else {
                // Hide the table cell
                faceAssessment.hide();
            }


            var value = $("input[name='areaaffected']:checked").val();
            $('#tdareaaffected').text(value);

            break;

        case 'hand_finger_condition':
            /* Attach All values in Array*/
            // Get the value for input
            var value = $("input[name='hand_finger']:checked").map(function (_, el) {
                return $(el).val();
            }).toArray();

            // Show the checked values in the label
            $('.hand_finger_condition').text(value.join(', '));

            /* Show / Hide Div */
            // Get the checkbox Paralysis
            var checkbox = $("#completefinger");

            // Get the div Paralysis
            var completefingerAssessment = $('.completefingerAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                completefingerAssessment.show();
            } else {
                // Hide the table cell
                completefingerAssessment.hide();
            }

            var checkbox = $("#nomobility");

            // Get the div Knee Pain
            var nomobilityAssessment = $('#nomobilityAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                nomobilityAssessment.show();
            } else {
                // Hide the table cell
                nomobilityAssessment.hide();
            }

            var checkbox = $("#limitedfinger");

            // Get the div Knee Pain
            var limitedfingerAssessment = $('#limitedfingerAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                limitedfingerAssessment.show();
            } else {
                // Hide the table cell
                limitedfingerAssessment.hide();
            }
            break;

        case 'elebow_condition':
            /* Attach All values in Array*/
            // Get the value for input
            var value = $("input[name='elebow_condition']:checked").map(function (_, el) {
                return $(el).val();
            }).toArray();

            // Show the checked values in the label
            $('.elebow_condition').text(value.join(', '));

            /* Show / Hide Div */
            // Get the checkbox Paralysis
            var checkbox = $("#fullrangeofmotion");

            // Get the div Paralysis
            var fullrangeAssessment = $('.fullrangeAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                fullrangeAssessment.show();
            } else {
                // Hide the table cell
                fullrangeAssessment.hide();
            }

            var checkbox = $("#nomovementintheelebow");

            // Get the div Knee Pain
            var nomotionAssessment = $('#nomotionAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                nomotionAssessment.show();
            } else {
                // Hide the table cell
                nomotionAssessment.hide();
            }

            var checkbox = $("#partialrangeofmotion");

            // Get the div Knee Pain
            var partialrangeAssessment = $('#partialrangeAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                partialrangeAssessment.show();
            } else {
                // Hide the table cell
                partialrangeAssessment.hide();
            }
            break;
        case 'shoulder_condition':
            /* Attach All values in Array*/
            // Get the value for input
            var value = $("input[name='shoulder_condition']:checked").map(function (_, el) {
                return $(el).val();
            }).toArray();

            // Show the checked values in the label
            $('.shoulder_condition').text(value.join(', '));

            /* Show / Hide Div */
            // Get the checkbox Paralysis
            var checkbox = $("#completerange");

            // Get the div Paralysis
            var completeAssessment = $('.completeAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                completeAssessment.show();
            } else {
                // Hide the table cell
                completeAssessment.hide();
            }

            var checkbox = $("#nomovement");

            // Get the div Knee Pain
            var nomovementAssessment = $('#nomovementAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                nomovementAssessment.show();
            } else {
                // Hide the table cell
                nomovementAssessment.hide();
            }

            var checkbox = $("#remainsdespite");

            // Get the div Knee Pain
            var remainsAssessment = $('#remainsAssessment');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                remainsAssessment.show();
            } else {
                // Hide the table cell
                remainsAssessment.hide();
            }
            break;


        case 'suffering_duration_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#suffering_duration_field").text(value);
            break;

        case 'physical_problem_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#physical_problem_field").text(value);
            break;

        case 'health_quality_field':
            // Get the value for input
            var value = $("input[name='HealthQuality']:checked").map(function (_, el) {
                return $(el).val();
            }).toArray();

            // Show the checked values in the label
            $('#health_quality_field').text(value.join(', '));
            break;



        case 'patient_goal_field':
            /* Show / Hide Values */
            // Get the checkbox Mobility
            var checkbox = $("input[name='PatientGoalMobility']");

            // Get the table row Mobility
            var trMobility = $('#trPatientGoalMobility');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                trMobility.show();
            } else {
                // Hide the table cell
                trMobility.hide();
            }

            var checkbox = $("input[name='PatientGoalMotion']");
            // Get the table row Motion
            var trMotion = $('#trPatientGoalMotion');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                trMotion.show();
            } else {
                // Hide the table cell
                trMotion.hide();
            }

            var checkbox = $("input[name='PatientGoalReduction']");
            // Get the table row Reduction
            var trReduction = $('#trPationGoalReduction');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                trReduction.show();
            } else {
                // Hide the table cell
                trReduction.hide();
            }

            var checkbox = $("input[name='PatientGoalActivities']");
            // Get the table row Reduction
            var trActivities = $('#trPatientGoalActivities');

            // Check if the checkbox is checked
            if (checkbox.is(':checked')) {
                // Show the table cell
                trActivities.show();
            } else {
                // Hide the table cell
                trActivities.hide();
            }

            var value = $("input[name='PatientGoalMobility']:checked").val();
            $('#tdPatientGoalMobility').text(value);

            var value = $("input[name='PatientGoalMotion']:checked").val();
            $('#tdPatientGoalMotion').text(value);

            var value = $("input[name='PatientGoalReduction']:checked").val();
            $('#tdPatientGoalReduction').text(value);

            var value = $("input[name='PatientGoalActivities']:checked").val();
            $('#tdPatientGoalActivities').text(value);
            break;

        case 'current_status_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#current_status_field").text(value);
            break;

        case 'vitamin_deficiency_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#vitamin_deficiency_field").text(value);
            break;


    }
}



