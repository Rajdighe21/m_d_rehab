<?php

namespace App\Http\Controllers;

use App\Models\condition;
use App\Models\paralysis;
use App\Mail\PatientsIssue;
use Illuminate\Http\Request;
use App\Models\cervical_pain;
use App\Models\Knee_join_pain;
use App\Models\lower_back_pain;
use App\Mail\MobilityResultMail;
use App\Models\basic_information;
use App\Models\parkinson_disease;
use App\Models\patient_condition;
use App\Models\muscular_dystrophy;
use App\Models\motor_neuron_disease;
use Illuminate\Support\Facades\Mail;
use App\Models\guillain_barre_syndrome;

class MobilityTestController extends Controller
{

    public function mobilityTest()
    {
        return view('mobility.mobilityTestSecond');
    }

    public function mobilitySecondStore(Request $request)
    {
        $information = $request->only(['patientname', 'patientphone', 'patientemail']);
        session()->put('information', $information);
        return redirect()->route('SecondTest');
    }

    // public function SecondTest()
    // {
    //     $information = session('information');
    //     return view('mobility.mobilityTestSecond', compact('information'));
    // }


    public function mobilityTestThird(Request $request)
    {
        $information = $request->only(['patientname', 'patientphone', 'patientemail', 'patientage', 'patientweight', 'patientgender']);
        session()->put('information', $information);
        return redirect()->route('ThirdTest');
    }

    public function ThirdTest()
    {
        $information = session('information');
        $conditions =  condition::all();
        $patientConditions = patient_condition::all();
        return view('mobility.mobilityTestThird', compact('conditions', 'patientConditions', 'information'));
    }

        public function mobilityTestFour(Request $request)
        {
            $information = $request->only(['patientname', 'patientphone', 'patientemail', 'patientage', 'patientweight', 'patientgender']);
            session()->put('information', $information);

            $selectedConditions = $request->input('PatientSuffering', []);
            $searializeArray = implode(',', $selectedConditions);

            $storeData = new basic_information();
            $storeData->patientname = $request->patientname;
            $storeData->patientphone = $request->patientphone;
            $storeData->patientemail = $request->patientemail;
            $storeData->age = $request->patientage;
            $storeData->gender = $request->patientgender;
            $storeData->suffering = $searializeArray;
            $storeData->save();

            $patient = (object) [
                'suffering' => $selectedConditions
            ];

            $mobilityData = [
                'title' => 'Cardio Rescue',
                'patient' => $storeData,
                'body' => $patient,
            ];
            session()->put('data', $selectedConditions);


            Mail::to('rajdighe16@gmail.com')->send(new PatientsIssue($mobilityData));
            return redirect()->route('ForthTest');
        }

        public function ForthTest(Request $request)
        {
            $information = session('information');
            $data = session('data');
            if (is_string($data)) {
                $data = json_decode($data, true);
            }
            if (!is_array($data)) {
                $data = [];
            }

            $paralysis = paralysis::all();
            $knee_join_pain = Knee_join_pain::all();
            $parkinson_disease = parkinson_disease::all();
            $cervical_pain = cervical_pain::all();
            $lower_back_pain = lower_back_pain::all();
            $muscular_dystrophy = muscular_dystrophy::all();
            $motor_neuron_disease = motor_neuron_disease::all();
            $guillain_barre_syndrome = guillain_barre_syndrome::all();

            return view('mobility.mobilityTestFour', compact('data', 'paralysis', 'knee_join_pain', 'parkinson_disease', 'cervical_pain', 'lower_back_pain', 'motor_neuron_disease', 'muscular_dystrophy', 'guillain_barre_syndrome', 'information'));
        }

        public function mobilityTestFive(Request $request)
        {
            $information = $request->only(['patientname', 'patientphone', 'patientemail']);
            session()->put('information', $information);



            //THIS IS FOR SUFFERING FOR
            $SufferingPara = $request->input('SufferingPara', []);
            session()->put('SufferingPara', $SufferingPara);

            $SufferingKnee = $request->input('SufferingKnee', []);
            session()->put('SufferingKnee', $SufferingKnee);

            $SufferingParkinson = $request->input('SufferingParkinson', []);
            session()->put('SufferingParkinson', $SufferingParkinson);

            $SufferingCervical = $request->input('SufferingCervical', []);
            session()->put('SufferingCervical', $SufferingCervical);

            $SufferingLowerBack = $request->input('SufferingLowerBack', []);
            session()->put('SufferingLowerBack', $SufferingLowerBack);

            $SufferingMusculars = $request->input('SufferingMusculars', []);
            session()->put('SufferingMusculars', $SufferingMusculars);

            $SufferingMotorNeuron = $request->input('SufferingMotorNeuron', []);
            session()->put('SufferingMotorNeuron', $SufferingMotorNeuron);

            $SufferingGuillain = $request->input('SufferingGuillain', []);
            session()->put('SufferingGuillain', $SufferingGuillain);
            //SUFFERING END

            $suffering_data = $request->input('suffering_data', []);
            session()->put('data', $suffering_data);
            return redirect()->route('FifthTest');
        }

        public function FifthTest(Request $request)
        {
            $information = session('information');
            $data = session('data');
            $SufferingPara = session('SufferingPara');
            $SufferingKnee = session('SufferingKnee');
            $SufferingParkinson = session('SufferingParkinson');
            $SufferingCervical = session('SufferingCervical');
            $SufferingLowerBack = session('SufferingLowerBack');
            $SufferingMusculars = session('SufferingMusculars');
            $SufferingMotorNeuron = session('SufferingMotorNeuron');
            $SufferingGuillain = session('SufferingGuillain');


            if (is_string($data)) {
                $data = json_decode($data, true);
            }
            if (!is_array($data)) {
                $data = [];
            }

            // Debug: Print the data
            $paralysis = paralysis::all();
            $knee_join_pain = Knee_join_pain::all();
            $parkinson_disease = parkinson_disease::all();
            $cervical_pain = cervical_pain::all();
            $lower_back_pain = lower_back_pain::all();
            $muscular_dystrophy = muscular_dystrophy::all();
            $motor_neuron_disease = motor_neuron_disease::all();
            $guillain_barre_syndrome = guillain_barre_syndrome::all();
            return view('mobility.mobilityTestFive', compact('data', 'paralysis', 'knee_join_pain', 'parkinson_disease', 'cervical_pain', 'lower_back_pain', 'motor_neuron_disease', 'muscular_dystrophy', 'guillain_barre_syndrome', 'information', 'SufferingPara', 'SufferingKnee', 'SufferingParkinson', 'SufferingCervical', 'SufferingLowerBack', 'SufferingMusculars', 'SufferingMotorNeuron', 'SufferingGuillain'));
        }

        public function mobilityTestSix(Request $request)
        {
            $information = $request->only(['patientname', 'patientphone', 'patientemail']);
            session()->put('information', $information);



            //THIS IS FOR SUFFERING FOR
            $SufferingPara = $request->input('SufferingPara', []);
            session()->put('SufferingPara', $SufferingPara);
            $SufferingKnee = $request->input('SufferingKnee', []);
            session()->put('SufferingKnee', $SufferingKnee);
            $SufferingParkinson = $request->input('SufferingParkinson', []);
            session()->put('SufferingParkinson', $SufferingParkinson);
            $SufferingCervical = $request->input('SufferingCervical', []);
            session()->put('SufferingCervical', $SufferingCervical);
            $SufferingLowerBack = $request->input('SufferingLowerBack', []);
            session()->put('SufferingLowerBack', $SufferingLowerBack);
            $SufferingMusculars = $request->input('SufferingMusculars', []);
            session()->put('SufferingMusculars', $SufferingMusculars);
            $SufferingMotorNeuron = $request->input('SufferingMotorNeuron', []);
            session()->put('SufferingMotorNeuron', $SufferingMotorNeuron);
            $SufferingGuillain = $request->input('SufferingGuillain', []);
            session()->put('SufferingGuillain', $SufferingGuillain);
            //SUFFERING END


            //AREA SUFFERING FOR
            $Which_areaParalysis = $request->input('Which_areaParalysis', []);
            session()->put('Which_areaParalysis', $Which_areaParalysis);
            $Which_areaKnee = $request->input('Which_areaKnee', []);
            session()->put('Which_areaKnee', $Which_areaKnee);
            $Which_areaParkinson = $request->input('Which_areaParkinson', []);
            session()->put('Which_areaParkinson', $Which_areaParkinson);
            $Which_areaCervical = $request->input('Which_areaCervical', []);
            session()->put('Which_areaCervical', $Which_areaCervical);
            $Which_areaLowerBack = $request->input('Which_areaLowerBack', []);
            session()->put('Which_areaLowerBack', $Which_areaLowerBack);
            $Which_areaMuscular = $request->input('Which_areaMuscular', []);
            session()->put('Which_areaMuscular', $Which_areaMuscular);
            $Which_areaMotorNeuron = $request->input('Which_areaMotorNeuron', []);
            session()->put('Which_areaMotorNeuron', $Which_areaMotorNeuron);
            $Which_areaGBS = $request->input('Which_areaGBS', []);
            session()->put('Which_areaGBS', $Which_areaGBS);
            //WHICH AREA SUFFERING END

            $suffering_data = $request->input('suffering_data', []);
            session()->put('data', $suffering_data);
            return redirect()->route('SixTest');
        }

        public function SixTest(Request $request)
        {
            $information = session('information');
            $data = session('data');


            //THIS IS FOR SUFFERING FOR
            $SufferingPara = session('SufferingPara');
            $SufferingKnee = session('SufferingKnee');
            $SufferingParkinson = session('SufferingParkinson');
            $SufferingCervical = session('SufferingCervical');
            $SufferingLowerBack = session('SufferingLowerBack');
            $SufferingMusculars = session('SufferingMusculars');
            $SufferingMotorNeuron = session('SufferingMotorNeuron');
            $SufferingGuillain = session('SufferingGuillain');
            //SUFFERING END

            //AREA SUFFERING FOR
            $Which_areaParalysis = session('Which_areaParalysis');
            $Which_areaKnee = session('Which_areaKnee');
            $Which_areaParkinson = session('Which_areaParkinson');
            $Which_areaCervical = session('Which_areaCervical');
            $Which_areaLowerBack = session('Which_areaLowerBack');
            $Which_areaMuscular = session('Which_areaMuscular');
            $Which_areaMotorNeuron = session('Which_areaMotorNeuron');
            $Which_areaGBS = session('Which_areaGBS');
            //AREA SUFFERING END




            if (is_string($data)) {
                $data = json_decode($data, true);
            }
            if (!is_array($data)) {
                $data = [];
            }

            // Debug: Print the data
            $paralysis = paralysis::all();
            $knee_join_pain = Knee_join_pain::all();
            $parkinson_disease = parkinson_disease::all();
            $cervical_pain = cervical_pain::all();
            $lower_back_pain = lower_back_pain::all();
            $muscular_dystrophy = muscular_dystrophy::all();
            $motor_neuron_disease = motor_neuron_disease::all();
            $guillain_barre_syndrome = guillain_barre_syndrome::all();

            return view('mobility.mobilityTestSix', compact('data', 'paralysis', 'knee_join_pain', 'parkinson_disease', 'cervical_pain', 'lower_back_pain', 'motor_neuron_disease', 'muscular_dystrophy', 'guillain_barre_syndrome', 'information', 'SufferingPara', 'SufferingKnee', 'SufferingParkinson', 'SufferingCervical', 'SufferingLowerBack', 'SufferingMusculars', 'SufferingMotorNeuron', 'SufferingGuillain', 'Which_areaParalysis', 'Which_areaKnee', 'Which_areaParkinson', 'Which_areaCervical', 'Which_areaLowerBack', 'Which_areaMuscular', 'Which_areaMotorNeuron', 'Which_areaGBS'));
        }

        public function mobilityTestSeven(Request $request)
        {
            $information = $request->only(['patientname', 'patientphone', 'patientemail']);
            session()->put('information', $information);


            //THIS IS FOR SUFFERING FOR
            $SufferingPara = $request->input('SufferingPara', []);
            session()->put('SufferingPara', $SufferingPara);
            $SufferingKnee = $request->input('SufferingKnee', []);
            session()->put('SufferingKnee', $SufferingKnee);
            $SufferingParkinson = $request->input('SufferingParkinson', []);
            session()->put('SufferingParkinson', $SufferingParkinson);
            $SufferingCervical = $request->input('SufferingCervical', []);
            session()->put('SufferingCervical', $SufferingCervical);
            $SufferingLowerBack = $request->input('SufferingLowerBack', []);
            session()->put('SufferingLowerBack', $SufferingLowerBack);
            $SufferingMusculars = $request->input('SufferingMusculars', []);
            session()->put('SufferingMusculars', $SufferingMusculars);
            $SufferingMotorNeuron = $request->input('SufferingMotorNeuron', []);
            session()->put('SufferingMotorNeuron', $SufferingMotorNeuron);
            $SufferingGuillain = $request->input('SufferingGuillain', []);
            session()->put('SufferingGuillain', $SufferingGuillain);
            //SUFFERING END


            //AREA SUFFERING FOR
            $Which_areaParalysis = $request->input('Which_areaParalysis', []);
            session()->put('Which_areaParalysis', $Which_areaParalysis);
            $Which_areaKnee = $request->input('Which_areaKnee', []);
            session()->put('Which_areaKnee', $Which_areaKnee);
            $Which_areaParkinson = $request->input('Which_areaParkinson', []);
            session()->put('Which_areaParkinson', $Which_areaParkinson);
            $Which_areaCervical = $request->input('Which_areaCervical', []);
            session()->put('Which_areaCervical', $Which_areaCervical);
            $Which_areaLowerBack = $request->input('Which_areaLowerBack', []);
            session()->put('Which_areaLowerBack', $Which_areaLowerBack);
            $Which_areaMuscular = $request->input('Which_areaMuscular', []);
            session()->put('Which_areaMuscular', $Which_areaMuscular);
            $Which_areaMotorNeuron = $request->input('Which_areaMotorNeuron', []);
            session()->put('Which_areaMotorNeuron', $Which_areaMotorNeuron);
            $Which_areaGBS = $request->input('Which_areaGBS', []);
            session()->put('Which_areaGBS', $Which_areaGBS);
            //WHICH AREA SUFFERING END



            $suffering_data = $request->input('suffering_data', []);
            session()->put('data', $suffering_data);
            return redirect()->route('SevenTesT');
        }


        public function SevenTesT(Request $request)
        {
            $information = session('information');
            $data = session('data');



            //THIS IS FOR SUFFERING FOR
            $SufferingPara = session('SufferingPara');
            $SufferingKnee = session('SufferingKnee');
            $SufferingParkinson = session('SufferingParkinson');
            $SufferingCervical = session('SufferingCervical');
            $SufferingLowerBack = session('SufferingLowerBack');
            $SufferingMusculars = session('SufferingMusculars');
            $SufferingMotorNeuron = session('SufferingMotorNeuron');
            $SufferingGuillain = session('SufferingGuillain');
            //SUFFERING END

            //AREA SUFFERING FOR
            $Which_areaParalysis = session('Which_areaParalysis');
            $Which_areaKnee = session('Which_areaKnee');
            $Which_areaParkinson = session('Which_areaParkinson');
            $Which_areaCervical = session('Which_areaCervical');
            $Which_areaLowerBack = session('Which_areaLowerBack');
            $Which_areaMuscular = session('Which_areaMuscular');
            $Which_areaMotorNeuron = session('Which_areaMotorNeuron');
            $Which_areaGBS = session('Which_areaGBS');
            //AREA SUFFERING END



            if (is_string($data)) {
                $data = json_decode($data, true);
            }
            if (!is_array($data)) {
                $data = [];
            }

            // Debug: Print the data
            $paralysis = paralysis::all();
            $knee_join_pain = Knee_join_pain::all();
            $parkinson_disease = parkinson_disease::all();
            $cervical_pain = cervical_pain::all();
            $lower_back_pain = lower_back_pain::all();
            $muscular_dystrophy = muscular_dystrophy::all();
            $motor_neuron_disease = motor_neuron_disease::all();
            $guillain_barre_syndrome = guillain_barre_syndrome::all();

            return view('mobility.mobilityTestSeven', compact('data', 'paralysis', 'knee_join_pain', 'parkinson_disease', 'cervical_pain', 'lower_back_pain', 'motor_neuron_disease', 'muscular_dystrophy', 'guillain_barre_syndrome', 'information', 'SufferingPara', 'SufferingKnee', 'SufferingParkinson', 'SufferingCervical', 'SufferingLowerBack', 'SufferingMusculars', 'SufferingMotorNeuron', 'SufferingGuillain', 'Which_areaParalysis', 'Which_areaKnee', 'Which_areaParkinson', 'Which_areaCervical', 'Which_areaLowerBack', 'Which_areaMuscular', 'Which_areaMotorNeuron', 'Which_areaGBS'));
        }


        public function mobilityTestEight(Request $request)
        {
            $information = $request->only(['patientname', 'patientphone', 'patientemail']);
            session()->put('information', $information);

            //THIS IS FOR SUFFERING FOR
            $SufferingPara = $request->input('SufferingPara', []);
            session()->put('SufferingPara', $SufferingPara);
            $SufferingKnee = $request->input('SufferingKnee', []);
            session()->put('SufferingKnee', $SufferingKnee);
            $SufferingParkinson = $request->input('SufferingParkinson', []);
            session()->put('SufferingParkinson', $SufferingParkinson);
            $SufferingCervical = $request->input('SufferingCervical', []);
            session()->put('SufferingCervical', $SufferingCervical);
            $SufferingLowerBack = $request->input('SufferingLowerBack', []);
            session()->put('SufferingLowerBack', $SufferingLowerBack);
            $SufferingMusculars = $request->input('SufferingMusculars', []);
            session()->put('SufferingMusculars', $SufferingMusculars);
            $SufferingMotorNeuron = $request->input('SufferingMotorNeuron', []);
            session()->put('SufferingMotorNeuron', $SufferingMotorNeuron);
            $SufferingGuillain = $request->input('SufferingGuillain', []);
            session()->put('SufferingGuillain', $SufferingGuillain);
            //SUFFERING END


            //AREA SUFFERING FOR
            $Which_areaParalysis = $request->input('Which_areaParalysis', []);
            session()->put('Which_areaParalysis', $Which_areaParalysis);
            $Which_areaKnee = $request->input('Which_areaKnee', []);
            session()->put('Which_areaKnee', $Which_areaKnee);
            $Which_areaParkinson = $request->input('Which_areaParkinson', []);
            session()->put('Which_areaParkinson', $Which_areaParkinson);
            $Which_areaCervical = $request->input('Which_areaCervical', []);
            session()->put('Which_areaCervical', $Which_areaCervical);
            $Which_areaLowerBack = $request->input('Which_areaLowerBack', []);
            session()->put('Which_areaLowerBack', $Which_areaLowerBack);
            $Which_areaMuscular = $request->input('Which_areaMuscular', []);
            session()->put('Which_areaMuscular', $Which_areaMuscular);
            $Which_areaMotorNeuron = $request->input('Which_areaMotorNeuron', []);
            session()->put('Which_areaMotorNeuron', $Which_areaMotorNeuron);
            $Which_areaGBS = $request->input('Which_areaGBS', []);
            session()->put('Which_areaGBS', $Which_areaGBS);
            //WHICH AREA SUFFERING END

            $suffering_data = $request->input('suffering_data', []);
            session()->put('data', $suffering_data);
            return redirect()->route('EightTest');
        }

        public function EightTest(Request $request)
        {
            $information = session('information');
            //THIS IS FOR SUFFERING FOR
            $SufferingPara = session('SufferingPara');
            $SufferingKnee = session('SufferingKnee');
            $SufferingParkinson = session('SufferingParkinson');
            $SufferingCervical = session('SufferingCervical');
            $SufferingLowerBack = session('SufferingLowerBack');
            $SufferingMusculars = session('SufferingMusculars');
            $SufferingMotorNeuron = session('SufferingMotorNeuron');
            $SufferingGuillain = session('SufferingGuillain');
            //SUFFERING END

            //AREA SUFFERING FOR
            $Which_areaParalysis = session('Which_areaParalysis');
            $Which_areaKnee = session('Which_areaKnee');
            $Which_areaParkinson = session('Which_areaParkinson');
            $Which_areaCervical = session('Which_areaCervical');
            $Which_areaLowerBack = session('Which_areaLowerBack');
            $Which_areaMuscular = session('Which_areaMuscular');
            $Which_areaMotorNeuron = session('Which_areaMotorNeuron');
            $Which_areaGBS = session('Which_areaGBS');
            //AREA SUFFERING END

            $data = session('data');
            if (is_string($data)) {
                $data = json_decode($data, true);
            }
            if (!is_array($data)) {
                $data = [];
            }

            // Debug: Print the data
            $paralysis = paralysis::all();
            $knee_join_pain = Knee_join_pain::all();
            $parkinson_disease = parkinson_disease::all();
            $cervical_pain = cervical_pain::all();
            $lower_back_pain = lower_back_pain::all();
            $muscular_dystrophy = muscular_dystrophy::all();
            $motor_neuron_disease = motor_neuron_disease::all();
            $guillain_barre_syndrome = guillain_barre_syndrome::all();

            return view('mobility.mobilityTestEight', compact('data', 'paralysis', 'knee_join_pain', 'parkinson_disease', 'cervical_pain', 'lower_back_pain', 'motor_neuron_disease', 'muscular_dystrophy', 'guillain_barre_syndrome', 'information', 'SufferingPara', 'SufferingKnee', 'SufferingParkinson', 'SufferingCervical', 'SufferingLowerBack', 'SufferingMusculars', 'SufferingMotorNeuron', 'SufferingGuillain', 'Which_areaParalysis', 'Which_areaKnee', 'Which_areaParkinson', 'Which_areaCervical', 'Which_areaLowerBack', 'Which_areaMuscular', 'Which_areaMotorNeuron', 'Which_areaGBS'));
        }


        public function mobilityTestNine(Request $request)
        {
            $information = $request->only(['patientname', 'patientphone', 'patientemail']);
            session()->put('information', $information);

            //THIS IS FOR SUFFERING FOR
            $SufferingPara = $request->input('SufferingPara', []);
            session()->put('SufferingPara', $SufferingPara);
            $SufferingKnee = $request->input('SufferingKnee', []);
            session()->put('SufferingKnee', $SufferingKnee);
            $SufferingParkinson = $request->input('SufferingParkinson', []);
            session()->put('SufferingParkinson', $SufferingParkinson);
            $SufferingCervical = $request->input('SufferingCervical', []);
            session()->put('SufferingCervical', $SufferingCervical);
            $SufferingLowerBack = $request->input('SufferingLowerBack', []);
            session()->put('SufferingLowerBack', $SufferingLowerBack);
            $SufferingMusculars = $request->input('SufferingMusculars', []);
            session()->put('SufferingMusculars', $SufferingMusculars);
            $SufferingMotorNeuron = $request->input('SufferingMotorNeuron', []);
            session()->put('SufferingMotorNeuron', $SufferingMotorNeuron);
            $SufferingGuillain = $request->input('SufferingGuillain', []);
            session()->put('SufferingGuillain', $SufferingGuillain);
            //SUFFERING END


            //AREA SUFFERING FOR
            $Which_areaParalysis = $request->input('Which_areaParalysis', []);
            session()->put('Which_areaParalysis', $Which_areaParalysis);
            $Which_areaKnee = $request->input('Which_areaKnee', []);
            session()->put('Which_areaKnee', $Which_areaKnee);
            $Which_areaParkinson = $request->input('Which_areaParkinson', []);
            session()->put('Which_areaParkinson', $Which_areaParkinson);
            $Which_areaCervical = $request->input('Which_areaCervical', []);
            session()->put('Which_areaCervical', $Which_areaCervical);
            $Which_areaLowerBack = $request->input('Which_areaLowerBack', []);
            session()->put('Which_areaLowerBack', $Which_areaLowerBack);
            $Which_areaMuscular = $request->input('Which_areaMuscular', []);
            session()->put('Which_areaMuscular', $Which_areaMuscular);
            $Which_areaMotorNeuron = $request->input('Which_areaMotorNeuron', []);
            session()->put('Which_areaMotorNeuron', $Which_areaMotorNeuron);
            $Which_areaGBS = $request->input('Which_areaGBS', []);
            session()->put('Which_areaGBS', $Which_areaGBS);
            //WHICH AREA SUFFERING END


            //CONDITION THREE FOR
            session()->put('conditionThreeParalysis', $request->input('conditionThreeParalysis'));
            session()->put('conditionThreeKnee', $request->input('conditionThreeKnee', []));
            session()->put('conditionThreeParkinson', $request->input('conditionThreeParkinson', []));
            session()->put('conditionTheeCervical', $request->input('conditionTheeCervical', []));
            session()->put('conditionThreeLowerBack', $request->input('conditionThreeLowerBack', []));
            session()->put('conditionThreeMuscular', $request->input('conditionThreeMuscular', []));
            session()->put('conditionThreeMND', $request->input('conditionThreeMND', []));
            session()->put('conditionThreeGBS', $request->input('conditionThreeGBS', []));
            //CONDITION THREE END


            $suffering_data = $request->input('suffering_data', []);
            session()->put('data', $suffering_data);
            return redirect()->route('NineTest');
        }


        public function NineTest(Request $request)
        {
            $information = session('information');
            $data = session('data');

            //THIS IS FOR SUFFERING FOR
            $SufferingPara = session('SufferingPara');
            $SufferingKnee = session('SufferingKnee');
            $SufferingParkinson = session('SufferingParkinson');
            $SufferingCervical = session('SufferingCervical');
            $SufferingLowerBack = session('SufferingLowerBack');
            $SufferingMusculars = session('SufferingMusculars');
            $SufferingMotorNeuron = session('SufferingMotorNeuron');
            $SufferingGuillain = session('SufferingGuillain');
            //SUFFERING END

            //AREA SUFFERING FOR
            $Which_areaParalysis = session('Which_areaParalysis');
            $Which_areaKnee = session('Which_areaKnee');
            $Which_areaParkinson = session('Which_areaParkinson');
            $Which_areaCervical = session('Which_areaCervical');
            $Which_areaLowerBack = session('Which_areaLowerBack');
            $Which_areaMuscular = session('Which_areaMuscular');
            $Which_areaMotorNeuron = session('Which_areaMotorNeuron');
            $Which_areaGBS = session('Which_areaGBS');
            //AREA SUFFERING END

            //CONDITION THREE
            $conditionThreeParalysis = session('conditionThreeParalysis');
            $conditionThreeKnee = session('conditionThreeKnee');
            $conditionThreeParkinson = session('conditionThreeParkinson');
            $conditionTheeCervical = session('conditionTheeCervical');
            $conditionThreeLowerBack = session('Which_areaLowerBack');
            $conditionThreeMuscular = session('conditionThreeMuscular');
            $conditionThreeMND = session('conditionThreeMND');
            $conditionThreeGBS = session('conditionThreeGBS');
            //CONDITION THREE END




            if (is_string($data)) {
                $data = json_decode($data, true);
            }
            if (!is_array($data)) {
                $data = [];
            }

            // Debug: Print the data
            $paralysis = paralysis::all();
            $knee_join_pain = Knee_join_pain::all();
            $parkinson_disease = parkinson_disease::all();
            $cervical_pain = cervical_pain::all();
            $lower_back_pain = lower_back_pain::all();
            $muscular_dystrophy = muscular_dystrophy::all();
            $motor_neuron_disease = motor_neuron_disease::all();
            $guillain_barre_syndrome = guillain_barre_syndrome::all();

            return view('mobility.mobilityTestNine', compact('data', 'paralysis', 'knee_join_pain', 'parkinson_disease', 'cervical_pain', 'lower_back_pain', 'motor_neuron_disease', 'muscular_dystrophy', 'guillain_barre_syndrome', 'information', 'SufferingPara', 'SufferingKnee', 'SufferingParkinson', 'SufferingCervical', 'SufferingLowerBack', 'SufferingMusculars', 'SufferingMotorNeuron', 'SufferingGuillain', 'Which_areaParalysis', 'Which_areaKnee', 'Which_areaParkinson', 'Which_areaCervical', 'Which_areaLowerBack', 'Which_areaMuscular', 'Which_areaMotorNeuron', 'Which_areaGBS', 'conditionThreeParalysis', 'conditionThreeKnee', 'conditionThreeParkinson', 'conditionTheeCervical', 'conditionThreeLowerBack', 'conditionThreeMuscular', 'conditionThreeMND', 'conditionThreeGBS'));
        }



        public function mobilityTestTen(Request $request)
        {
            $information = $request->only(['patientname', 'patientphone', 'patientemail']);
            session()->put('information', $information);


            //THIS IS FOR SUFFERING FOR
            $SufferingPara = $request->input('SufferingPara', []);
            session()->put('SufferingPara', $SufferingPara);
            $SufferingKnee = $request->input('SufferingKnee', []);
            session()->put('SufferingKnee', $SufferingKnee);
            $SufferingParkinson = $request->input('SufferingParkinson', []);
            session()->put('SufferingParkinson', $SufferingParkinson);
            $SufferingCervical = $request->input('SufferingCervical', []);
            session()->put('SufferingCervical', $SufferingCervical);
            $SufferingLowerBack = $request->input('SufferingLowerBack', []);
            session()->put('SufferingLowerBack', $SufferingLowerBack);
            $SufferingMusculars = $request->input('SufferingMusculars', []);
            session()->put('SufferingMusculars', $SufferingMusculars);
            $SufferingMotorNeuron = $request->input('SufferingMotorNeuron', []);
            session()->put('SufferingMotorNeuron', $SufferingMotorNeuron);
            $SufferingGuillain = $request->input('SufferingGuillain', []);
            session()->put('SufferingGuillain', $SufferingGuillain);
            //SUFFERING END


            //AREA SUFFERING FOR
            $Which_areaParalysis = $request->input('Which_areaParalysis', []);
            session()->put('Which_areaParalysis', $Which_areaParalysis);
            $Which_areaKnee = $request->input('Which_areaKnee', []);
            session()->put('Which_areaKnee', $Which_areaKnee);
            $Which_areaParkinson = $request->input('Which_areaParkinson', []);
            session()->put('Which_areaParkinson', $Which_areaParkinson);
            $Which_areaCervical = $request->input('Which_areaCervical', []);
            session()->put('Which_areaCervical', $Which_areaCervical);
            $Which_areaLowerBack = $request->input('Which_areaLowerBack', []);
            session()->put('Which_areaLowerBack', $Which_areaLowerBack);
            $Which_areaMuscular = $request->input('Which_areaMuscular', []);
            session()->put('Which_areaMuscular', $Which_areaMuscular);
            $Which_areaMotorNeuron = $request->input('Which_areaMotorNeuron', []);
            session()->put('Which_areaMotorNeuron', $Which_areaMotorNeuron);
            $Which_areaGBS = $request->input('Which_areaGBS', []);
            session()->put('Which_areaGBS', $Which_areaGBS);
            //WHICH AREA SUFFERING END



            //CONDITION THREE FOR
            session()->put('conditionThreeParalysis', $request->input('conditionThreeParalysis'));
            session()->put('conditionThreeKnee', $request->input('conditionThreeKnee', []));
            session()->put('conditionThreeParkinson', $request->input('conditionThreeParkinson', []));
            session()->put('conditionTheeCervical', $request->input('conditionTheeCervical', []));
            session()->put('conditionThreeLowerBack', $request->input('conditionThreeLowerBack', []));
            session()->put('conditionThreeMuscular', $request->input('conditionThreeMuscular', []));
            session()->put('conditionThreeMND', $request->input('conditionThreeMND', []));
            session()->put('conditionThreeGBS', $request->input('conditionThreeGBS', []));
            //CONDITION THREE END


            //CONDITION FOUR FOR
            session()->put('conditionFourParalysis', $request->input('conditionFourParalysis'));
            session()->put('conditionFourKnee', $request->input('conditionFourKnee', []));
            session()->put('conditionFourParkinson', $request->input('conditionFourParkinson', []));
            session()->put('conditionFourCervical', $request->input('conditionFourCervical', []));
            session()->put('conditionFourLowerBack', $request->input('conditionFourLowerBack', []));
            session()->put('conditionFourMuscular', $request->input('conditionFourMuscular', []));
            session()->put('conditionFourMNU', $request->input('conditionFourMNU', []));
            session()->put('conditionFourGBS', $request->input('conditionFourGBS', []));
            //CONDITION FOUR END


            $suffering_data = $request->input('suffering_data', []);
            session()->put('data', $suffering_data);

            return redirect()->route('TenTest');
        }


        public function TenTest(Request $request)
        {
            $information = session('information');
            $data = session('data');

            //THIS IS FOR SUFFERING FOR
            $SufferingPara = session('SufferingPara');
            $SufferingKnee = session('SufferingKnee');
            $SufferingParkinson = session('SufferingParkinson');
            $SufferingCervical = session('SufferingCervical');
            $SufferingLowerBack = session('SufferingLowerBack');
            $SufferingMusculars = session('SufferingMusculars');
            $SufferingMotorNeuron = session('SufferingMotorNeuron');
            $SufferingGuillain = session('SufferingGuillain');
            //SUFFERING END

            //AREA SUFFERING FOR
            $Which_areaParalysis = session('Which_areaParalysis');
            $Which_areaKnee = session('Which_areaKnee');
            $Which_areaParkinson = session('Which_areaParkinson');
            $Which_areaCervical = session('Which_areaCervical');
            $Which_areaLowerBack = session('Which_areaLowerBack');
            $Which_areaMuscular = session('Which_areaMuscular');
            $Which_areaMotorNeuron = session('Which_areaMotorNeuron');
            $Which_areaGBS = session('Which_areaGBS');
            //AREA SUFFERING END

            //CONDITION THREE
            $conditionThreeParalysis = session('conditionThreeParalysis');
            $conditionThreeKnee = session('conditionThreeKnee');
            $conditionThreeParkinson = session('conditionThreeParkinson');
            $conditionTheeCervical = session('conditionTheeCervical');
            $conditionThreeLowerBack = session('Which_areaLowerBack');
            $conditionThreeMuscular = session('conditionThreeMuscular');
            $conditionThreeMND = session('conditionThreeMND');
            $conditionThreeGBS = session('conditionThreeGBS');
            //CONDITION THREE END


            //CONDITION FOUR
            $conditionFourParalysis = session('conditionFourParalysis');
            $conditionFourKnee = session('conditionFourKnee');
            $conditionFourParkinson = session('conditionFourParkinson');
            $conditionFourCervical = session('conditionFourCervical');
            $conditionFourLowerBack = session('conditionFourLowerBack');
            $conditionFourMuscular = session('conditionFourMuscular');
            $conditionFourMND = session('conditionFourMND');
            $conditionFourGBS = session('conditionFourGBS');
            //CONDITION FOUR END


            if (is_string($data)) {
                $data = json_decode($data, true);
            }
            if (!is_array($data)) {
                $data = [];
            }

            // Debug: Print the data
            $paralysis = paralysis::all();
            $knee_join_pain = Knee_join_pain::all();
            $parkinson_disease = parkinson_disease::all();
            $cervical_pain = cervical_pain::all();
            $lower_back_pain = lower_back_pain::all();
            $muscular_dystrophy = muscular_dystrophy::all();
            $motor_neuron_disease = motor_neuron_disease::all();
            $guillain_barre_syndrome = guillain_barre_syndrome::all();

            return view('mobility.mobilityTestTen', compact(
                'data',
                'paralysis',
                'knee_join_pain',
                'parkinson_disease',
                'cervical_pain',
                'lower_back_pain',
                'motor_neuron_disease',
                'muscular_dystrophy',
                'guillain_barre_syndrome',
                'information',
                'SufferingPara',
                'SufferingKnee',
                'SufferingParkinson',
                'SufferingCervical',
                'SufferingLowerBack',
                'SufferingMusculars',
                'SufferingMotorNeuron',
                'SufferingGuillain',
                'Which_areaParalysis',
                'Which_areaKnee',
                'Which_areaParkinson',
                'Which_areaCervical',
                'Which_areaLowerBack',
                'Which_areaMuscular',
                'Which_areaMotorNeuron',
                'Which_areaGBS',
                'conditionThreeParalysis',
                'conditionThreeKnee',
                'conditionThreeParkinson',
                'conditionTheeCervical',
                'conditionThreeLowerBack',
                'conditionThreeMuscular',
                'conditionThreeMND',
                'conditionThreeGBS',
                'conditionFourParalysis',
                'conditionFourKnee',
                'conditionFourParkinson',
                'conditionFourCervical',
                'conditionThreeLowerBack',
                'conditionFourMuscular',
                'conditionFourMND',
                'conditionFourGBS'
            ));
        }

        public function PastYears(Request $request)
        {
            $information = $request->only(['patientname', 'patientphone', 'patientemail']);
            session()->put('information', $information);

            //THIS IS FOR SUFFERING FOR
            $SufferingPara = $request->input('SufferingPara', []);
            session()->put('SufferingPara', $SufferingPara);
            $SufferingKnee = $request->input('SufferingKnee', []);
            session()->put('SufferingKnee', $SufferingKnee);
            $SufferingParkinson = $request->input('SufferingParkinson', []);
            session()->put('SufferingParkinson', $SufferingParkinson);
            $SufferingCervical = $request->input('SufferingCervical', []);
            session()->put('SufferingCervical', $SufferingCervical);
            $SufferingLowerBack = $request->input('SufferingLowerBack', []);
            session()->put('SufferingLowerBack', $SufferingLowerBack);
            $SufferingMusculars = $request->input('SufferingMusculars', []);
            session()->put('SufferingMusculars', $SufferingMusculars);
            $SufferingMotorNeuron = $request->input('SufferingMotorNeuron', []);
            session()->put('SufferingMotorNeuron', $SufferingMotorNeuron);
            $SufferingGuillain = $request->input('SufferingGuillain', []);
            session()->put('SufferingGuillain', $SufferingGuillain);
            //SUFFERING END


            //AREA SUFFERING FOR
            $Which_areaParalysis = $request->input('Which_areaParalysis', []);
            session()->put('Which_areaParalysis', $Which_areaParalysis);
            $Which_areaKnee = $request->input('Which_areaKnee', []);
            session()->put('Which_areaKnee', $Which_areaKnee);
            $Which_areaParkinson = $request->input('Which_areaParkinson', []);
            session()->put('Which_areaParkinson', $Which_areaParkinson);
            $Which_areaCervical = $request->input('Which_areaCervical', []);
            session()->put('Which_areaCervical', $Which_areaCervical);
            $Which_areaLowerBack = $request->input('Which_areaLowerBack', []);
            session()->put('Which_areaLowerBack', $Which_areaLowerBack);
            $Which_areaMuscular = $request->input('Which_areaMuscular', []);
            session()->put('Which_areaMuscular', $Which_areaMuscular);
            $Which_areaMotorNeuron = $request->input('Which_areaMotorNeuron', []);
            session()->put('Which_areaMotorNeuron', $Which_areaMotorNeuron);
            $Which_areaGBS = $request->input('Which_areaGBS', []);
            session()->put('Which_areaGBS', $Which_areaGBS);
            //WHICH AREA SUFFERING END



            //CONDITION THREE FOR
            session()->put('conditionThreeParalysis', $request->input('conditionThreeParalysis'));
            session()->put('conditionThreeKnee', $request->input('conditionThreeKnee', []));
            session()->put('conditionThreeParkinson', $request->input('conditionThreeParkinson', []));
            session()->put('conditionTheeCervical', $request->input('conditionTheeCervical', []));
            session()->put('conditionThreeLowerBack', $request->input('conditionThreeLowerBack', []));
            session()->put('conditionThreeMuscular', $request->input('conditionThreeMuscular', []));
            session()->put('conditionThreeMND', $request->input('conditionThreeMND', []));
            session()->put('conditionThreeGBS', $request->input('conditionThreeGBS', []));
            //CONDITION THREE END


            //CONDITION FOUR FOR
            session()->put('conditionFourParalysis', $request->input('conditionFourParalysis'));
            session()->put('conditionFourKnee', $request->input('conditionFourKnee', []));
            session()->put('conditionFourParkinson', $request->input('conditionFourParkinson', []));
            session()->put('conditionFourCervical', $request->input('conditionFourCervical', []));
            session()->put('conditionFourLowerBack', $request->input('conditionFourLowerBack', []));
            session()->put('conditionFourMuscular', $request->input('conditionFourMuscular', []));
            session()->put('conditionFourMNU', $request->input('conditionFourMNU', []));
            session()->put('conditionFourGBS', $request->input('conditionFourGBS', []));
            //CONDITION FOUR END



            //CONDITION FIVE FOR
            session()->put('conditionFiveParalysis', $request->input('conditionFiveParalysis'));
            session()->put('conditionFiveKnee', $request->input('conditionFiveKnee', []));
            session()->put('conditionFiveParkinson', $request->input('conditionFiveParkinson', []));
            session()->put('conditionFiveCervical', $request->input('conditionFiveCervical', []));
            session()->put('conditionFiveLowerBack', $request->input('conditionFiveLowerBack', []));
            session()->put('conditionFiveMuscular', $request->input('conditionFiveMuscular', []));
            session()->put('conditionFiveMND', $request->input('conditionFiveMND', []));
            session()->put('conditionFiveGBS', $request->input('conditionFiveGBS', []));
            //CONDITION FIVE END


            $suffering_data = $request->input('suffering_data', []);
            session()->put('data', $suffering_data);
            return redirect()->route('FromPastYears');
        }

        public function FromPastYears()
        {
            $information = session('information');

            //THIS IS FOR SUFFERING FOR
            $SufferingPara = session('SufferingPara');
            $SufferingKnee = session('SufferingKnee');
            $SufferingParkinson = session('SufferingParkinson');
            $SufferingCervical = session('SufferingCervical');
            $SufferingLowerBack = session('SufferingLowerBack');
            $SufferingMusculars = session('SufferingMusculars');
            $SufferingMotorNeuron = session('SufferingMotorNeuron');
            $SufferingGuillain = session('SufferingGuillain');
            //SUFFERING END

            //AREA SUFFERING FOR
            $Which_areaParalysis = session('Which_areaParalysis');
            $Which_areaKnee = session('Which_areaKnee');
            $Which_areaParkinson = session('Which_areaParkinson');
            $Which_areaCervical = session('Which_areaCervical');
            $Which_areaLowerBack = session('Which_areaLowerBack');
            $Which_areaMuscular = session('Which_areaMuscular');
            $Which_areaMotorNeuron = session('Which_areaMotorNeuron');
            $Which_areaGBS = session('Which_areaGBS');
            //AREA SUFFERING END

            //CONDITION THREE
            $conditionThreeParalysis = session('conditionThreeParalysis');
            $conditionThreeKnee = session('conditionThreeKnee');
            $conditionThreeParkinson = session('conditionThreeParkinson');
            $conditionTheeCervical = session('conditionTheeCervical');
            $conditionThreeLowerBack = session('Which_areaLowerBack');
            $conditionThreeMuscular = session('conditionThreeMuscular');
            $conditionThreeMND = session('conditionThreeMND');
            $conditionThreeGBS = session('conditionThreeGBS');
            //CONDITION THREE END


            //CONDITION FOUR
            $conditionFourParalysis = session('conditionFourParalysis');
            $conditionFourKnee = session('conditionFourKnee');
            $conditionFourParkinson = session('conditionFourParkinson');
            $conditionFourCervical = session('conditionFourCervical');
            $conditionFourLowerBack = session('conditionFourLowerBack');
            $conditionFourMuscular = session('conditionFourMuscular');
            $conditionFourMND = session('conditionFourMND');
            $conditionFourGBS = session('conditionFourGBS');
            //CONDITION FOUR END


            //CONDITION FIVE
            $conditionFiveParalysis = session('conditionFiveParalysis');
            $conditionFiveKnee = session('conditionFiveKnee');
            $conditionFiveParkinson = session('conditionFiveParkinson');
            $conditionFiveCervical = session('conditionFiveCervical');
            $conditionFiveLowerBack = session('conditionFiveLowerBack');
            $conditionFiveMuscular = session('conditionFiveMuscular');
            $conditionFiveMND = session('conditionFiveMND');
            $conditionFiveGBS = session('conditionFiveGBS');
            //CONDITION FIVE END

            $data = session('data');
            return view('mobility.mobilityHowLong', compact(
                'data',
                'information',
                'SufferingPara',
                'SufferingKnee',
                'SufferingParkinson',
                'SufferingCervical',
                'SufferingLowerBack',
                'SufferingMusculars',
                'SufferingMotorNeuron',
                'SufferingGuillain',
                'Which_areaParalysis',
                'Which_areaKnee',
                'Which_areaParkinson',
                'Which_areaCervical',
                'Which_areaLowerBack',
                'Which_areaMuscular',
                'Which_areaMotorNeuron',
                'Which_areaGBS',
                'conditionThreeParalysis',
                'conditionThreeKnee',
                'conditionThreeParkinson',
                'conditionTheeCervical',
                'conditionThreeLowerBack',
                'conditionThreeMuscular',
                'conditionThreeMND',
                'conditionThreeGBS',
                'conditionFourParalysis',
                'conditionFourKnee',
                'conditionFourParkinson',
                'conditionFourCervical',
                'conditionThreeLowerBack',
                'conditionFourMuscular',
                'conditionFourMND',
                'conditionFourGBS',
                'conditionFiveParalysis',
                'conditionFiveKnee',
                'conditionFiveParkinson',
                'conditionFiveCervical',
                'conditionFiveLowerBack',
                'conditionFiveMuscular',
                'conditionFiveMND',
                'conditionFiveGBS',
            ));
        }

        public function Goal(Request $request)
        {
            $information = $request->only(['patientname', 'patientphone', 'patientemail', 'SufferingDuration']);
            session()->put('information', $information);

            //THIS IS FOR SUFFERING FOR
            $SufferingPara = $request->input('SufferingPara', []);
            session()->put('SufferingPara', $SufferingPara);
            $SufferingKnee = $request->input('SufferingKnee', []);
            session()->put('SufferingKnee', $SufferingKnee);
            $SufferingParkinson = $request->input('SufferingParkinson', []);
            session()->put('SufferingParkinson', $SufferingParkinson);
            $SufferingCervical = $request->input('SufferingCervical', []);
            session()->put('SufferingCervical', $SufferingCervical);
            $SufferingLowerBack = $request->input('SufferingLowerBack', []);
            session()->put('SufferingLowerBack', $SufferingLowerBack);
            $SufferingMusculars = $request->input('SufferingMusculars', []);
            session()->put('SufferingMusculars', $SufferingMusculars);
            $SufferingMotorNeuron = $request->input('SufferingMotorNeuron', []);
            session()->put('SufferingMotorNeuron', $SufferingMotorNeuron);
            $SufferingGuillain = $request->input('SufferingGuillain', []);
            session()->put('SufferingGuillain', $SufferingGuillain);
            //SUFFERING END


            //AREA SUFFERING FOR
            $Which_areaParalysis = $request->input('Which_areaParalysis', []);
            session()->put('Which_areaParalysis', $Which_areaParalysis);
            $Which_areaKnee = $request->input('Which_areaKnee', []);
            session()->put('Which_areaKnee', $Which_areaKnee);
            $Which_areaParkinson = $request->input('Which_areaParkinson', []);
            session()->put('Which_areaParkinson', $Which_areaParkinson);
            $Which_areaCervical = $request->input('Which_areaCervical', []);
            session()->put('Which_areaCervical', $Which_areaCervical);
            $Which_areaLowerBack = $request->input('Which_areaLowerBack', []);
            session()->put('Which_areaLowerBack', $Which_areaLowerBack);
            $Which_areaMuscular = $request->input('Which_areaMuscular', []);
            session()->put('Which_areaMuscular', $Which_areaMuscular);
            $Which_areaMotorNeuron = $request->input('Which_areaMotorNeuron', []);
            session()->put('Which_areaMotorNeuron', $Which_areaMotorNeuron);
            $Which_areaGBS = $request->input('Which_areaGBS', []);
            session()->put('Which_areaGBS', $Which_areaGBS);
            //WHICH AREA SUFFERING END



            //CONDITION THREE FOR
            session()->put('conditionThreeParalysis', $request->input('conditionThreeParalysis'));
            session()->put('conditionThreeKnee', $request->input('conditionThreeKnee', []));
            session()->put('conditionThreeParkinson', $request->input('conditionThreeParkinson', []));
            session()->put('conditionTheeCervical', $request->input('conditionTheeCervical', []));
            session()->put('conditionThreeLowerBack', $request->input('conditionThreeLowerBack', []));
            session()->put('conditionThreeMuscular', $request->input('conditionThreeMuscular', []));
            session()->put('conditionThreeMND', $request->input('conditionThreeMND', []));
            session()->put('conditionThreeGBS', $request->input('conditionThreeGBS', []));
            //CONDITION THREE END


            //CONDITION FOUR FOR
            session()->put('conditionFourParalysis', $request->input('conditionFourParalysis'));
            session()->put('conditionFourKnee', $request->input('conditionFourKnee', []));
            session()->put('conditionFourParkinson', $request->input('conditionFourParkinson', []));
            session()->put('conditionFourCervical', $request->input('conditionFourCervical', []));
            session()->put('conditionFourLowerBack', $request->input('conditionFourLowerBack', []));
            session()->put('conditionFourMuscular', $request->input('conditionFourMuscular', []));
            session()->put('conditionFourMNU', $request->input('conditionFourMNU', []));
            session()->put('conditionFourGBS', $request->input('conditionFourGBS', []));
            //CONDITION FOUR END



            //CONDITION FIVE FOR
            session()->put('conditionFiveParalysis', $request->input('conditionFiveParalysis'));
            session()->put('conditionFiveKnee', $request->input('conditionFiveKnee', []));
            session()->put('conditionFiveParkinson', $request->input('conditionFiveParkinson', []));
            session()->put('conditionFiveCervical', $request->input('conditionFiveCervical', []));
            session()->put('conditionFiveLowerBack', $request->input('conditionFiveLowerBack', []));
            session()->put('conditionFiveMuscular', $request->input('conditionFiveMuscular', []));
            session()->put('conditionFiveMND', $request->input('conditionFiveMND', []));
            session()->put('conditionFiveGBS', $request->input('conditionFiveGBS', []));
            //CONDITION FIVE END


            $suffering_data = $request->input('suffering_data', []);
            session()->put('data', $suffering_data);
            return redirect()->route('mobilityGoal');
        }

        public function mobilityGoal()
        {
            $information = session('information');
            $data = session('data');


            //THIS IS FOR SUFFERING FOR
            $SufferingPara = session('SufferingPara');
            $SufferingKnee = session('SufferingKnee');
            $SufferingParkinson = session('SufferingParkinson');
            $SufferingCervical = session('SufferingCervical');
            $SufferingLowerBack = session('SufferingLowerBack');
            $SufferingMusculars = session('SufferingMusculars');
            $SufferingMotorNeuron = session('SufferingMotorNeuron');
            $SufferingGuillain = session('SufferingGuillain');
            //SUFFERING END

            //AREA SUFFERING FOR
            $Which_areaParalysis = session('Which_areaParalysis');
            $Which_areaKnee = session('Which_areaKnee');
            $Which_areaParkinson = session('Which_areaParkinson');
            $Which_areaCervical = session('Which_areaCervical');
            $Which_areaLowerBack = session('Which_areaLowerBack');
            $Which_areaMuscular = session('Which_areaMuscular');
            $Which_areaMotorNeuron = session('Which_areaMotorNeuron');
            $Which_areaGBS = session('Which_areaGBS');
            //AREA SUFFERING END

            //CONDITION THREE
            $conditionThreeParalysis = session('conditionThreeParalysis');
            $conditionThreeKnee = session('conditionThreeKnee');
            $conditionThreeParkinson = session('conditionThreeParkinson');
            $conditionTheeCervical = session('conditionTheeCervical');
            $conditionThreeLowerBack = session('Which_areaLowerBack');
            $conditionThreeMuscular = session('conditionThreeMuscular');
            $conditionThreeMND = session('conditionThreeMND');
            $conditionThreeGBS = session('conditionThreeGBS');
            //CONDITION THREE END


            //CONDITION FOUR
            $conditionFourParalysis = session('conditionFourParalysis');
            $conditionFourKnee = session('conditionFourKnee');
            $conditionFourParkinson = session('conditionFourParkinson');
            $conditionFourCervical = session('conditionFourCervical');
            $conditionFourLowerBack = session('conditionFourLowerBack');
            $conditionFourMuscular = session('conditionFourMuscular');
            $conditionFourMND = session('conditionFourMND');
            $conditionFourGBS = session('conditionFourGBS');
            //CONDITION FOUR END


            //CONDITION FIVE
            $conditionFiveParalysis = session('conditionFiveParalysis');
            $conditionFiveKnee = session('conditionFiveKnee');
            $conditionFiveParkinson = session('conditionFiveParkinson');
            $conditionFiveCervical = session('conditionFiveCervical');
            $conditionFiveLowerBack = session('conditionFiveLowerBack');
            $conditionFiveMuscular = session('conditionFiveMuscular');
            $conditionFiveMND = session('conditionFiveMND');
            $conditionFiveGBS = session('conditionFiveGBS');
            //CONDITION FIVE END

            return view('mobility.mobilityGoal', compact(
                'data',
                'information',
                'SufferingPara',
                'SufferingKnee',
                'SufferingParkinson',
                'SufferingCervical',
                'SufferingLowerBack',
                'SufferingMusculars',
                'SufferingMotorNeuron',
                'SufferingGuillain',
                'Which_areaParalysis',
                'Which_areaKnee',
                'Which_areaParkinson',
                'Which_areaCervical',
                'Which_areaLowerBack',
                'Which_areaMuscular',
                'Which_areaMotorNeuron',
                'Which_areaGBS',
                'conditionThreeParalysis',
                'conditionThreeKnee',
                'conditionThreeParkinson',
                'conditionTheeCervical',
                'conditionThreeLowerBack',
                'conditionThreeMuscular',
                'conditionThreeMND',
                'conditionThreeGBS',
                'conditionFourParalysis',
                'conditionFourKnee',
                'conditionFourParkinson',
                'conditionFourCervical',
                'conditionThreeLowerBack',
                'conditionFourMuscular',
                'conditionFourMND',
                'conditionFourGBS',
                'conditionFiveParalysis',
                'conditionFiveKnee',
                'conditionFiveParkinson',
                'conditionFiveCervical',
                'conditionFiveLowerBack',
                'conditionFiveMuscular',
                'conditionFiveMND',
                'conditionFiveGBS',
            ));
        }

        public function health(Request $request)
        {
            $information = $request->only(['patientname', 'patientphone', 'patientemail', 'SufferingDuration']);
            session()->put('information', $information);

            //THIS IS FOR SUFFERING FOR
            $SufferingPara = $request->input('SufferingPara', []);
            session()->put('SufferingPara', $SufferingPara);
            $SufferingKnee = $request->input('SufferingKnee', []);
            session()->put('SufferingKnee', $SufferingKnee);
            $SufferingParkinson = $request->input('SufferingParkinson', []);
            session()->put('SufferingParkinson', $SufferingParkinson);
            $SufferingCervical = $request->input('SufferingCervical', []);
            session()->put('SufferingCervical', $SufferingCervical);
            $SufferingLowerBack = $request->input('SufferingLowerBack', []);
            session()->put('SufferingLowerBack', $SufferingLowerBack);
            $SufferingMusculars = $request->input('SufferingMusculars', []);
            session()->put('SufferingMusculars', $SufferingMusculars);
            $SufferingMotorNeuron = $request->input('SufferingMotorNeuron', []);
            session()->put('SufferingMotorNeuron', $SufferingMotorNeuron);
            $SufferingGuillain = $request->input('SufferingGuillain', []);
            session()->put('SufferingGuillain', $SufferingGuillain);
            //SUFFERING END


            //AREA SUFFERING FOR
            $Which_areaParalysis = $request->input('Which_areaParalysis', []);
            session()->put('Which_areaParalysis', $Which_areaParalysis);
            $Which_areaKnee = $request->input('Which_areaKnee', []);
            session()->put('Which_areaKnee', $Which_areaKnee);
            $Which_areaParkinson = $request->input('Which_areaParkinson', []);
            session()->put('Which_areaParkinson', $Which_areaParkinson);
            $Which_areaCervical = $request->input('Which_areaCervical', []);
            session()->put('Which_areaCervical', $Which_areaCervical);
            $Which_areaLowerBack = $request->input('Which_areaLowerBack', []);
            session()->put('Which_areaLowerBack', $Which_areaLowerBack);
            $Which_areaMuscular = $request->input('Which_areaMuscular', []);
            session()->put('Which_areaMuscular', $Which_areaMuscular);
            $Which_areaMotorNeuron = $request->input('Which_areaMotorNeuron', []);
            session()->put('Which_areaMotorNeuron', $Which_areaMotorNeuron);
            $Which_areaGBS = $request->input('Which_areaGBS', []);
            session()->put('Which_areaGBS', $Which_areaGBS);
            //WHICH AREA SUFFERING END



            //CONDITION THREE FOR
            session()->put('conditionThreeParalysis', $request->input('conditionThreeParalysis'));
            session()->put('conditionThreeKnee', $request->input('conditionThreeKnee', []));
            session()->put('conditionThreeParkinson', $request->input('conditionThreeParkinson', []));
            session()->put('conditionTheeCervical', $request->input('conditionTheeCervical', []));
            session()->put('conditionThreeLowerBack', $request->input('conditionThreeLowerBack', []));
            session()->put('conditionThreeMuscular', $request->input('conditionThreeMuscular', []));
            session()->put('conditionThreeMND', $request->input('conditionThreeMND', []));
            session()->put('conditionThreeGBS', $request->input('conditionThreeGBS', []));
            //CONDITION THREE END


            //CONDITION FOUR FOR
            session()->put('conditionFourParalysis', $request->input('conditionFourParalysis'));
            session()->put('conditionFourKnee', $request->input('conditionFourKnee', []));
            session()->put('conditionFourParkinson', $request->input('conditionFourParkinson', []));
            session()->put('conditionFourCervical', $request->input('conditionFourCervical', []));
            session()->put('conditionFourLowerBack', $request->input('conditionFourLowerBack', []));
            session()->put('conditionFourMuscular', $request->input('conditionFourMuscular', []));
            session()->put('conditionFourMNU', $request->input('conditionFourMNU', []));
            session()->put('conditionFourGBS', $request->input('conditionFourGBS', []));
            //CONDITION FOUR END



            //CONDITION FIVE FOR
            session()->put('conditionFiveParalysis', $request->input('conditionFiveParalysis'));
            session()->put('conditionFiveKnee', $request->input('conditionFiveKnee', []));
            session()->put('conditionFiveParkinson', $request->input('conditionFiveParkinson', []));
            session()->put('conditionFiveCervical', $request->input('conditionFiveCervical', []));
            session()->put('conditionFiveLowerBack', $request->input('conditionFiveLowerBack', []));
            session()->put('conditionFiveMuscular', $request->input('conditionFiveMuscular', []));
            session()->put('conditionFiveMND', $request->input('conditionFiveMND', []));
            session()->put('conditionFiveGBS', $request->input('conditionFiveGBS', []));
            //CONDITION FIVE END


            $suffering_data = $request->input('suffering_data', []);
            session()->put('data', $suffering_data);
            return redirect()->route('mobilityHealth');
        }



        public function mobilityHealth()
        {
            $information = session('information');
            $data = session('data');

            //THIS IS FOR SUFFERING FOR
            $SufferingPara = session('SufferingPara');
            $SufferingKnee = session('SufferingKnee');
            $SufferingParkinson = session('SufferingParkinson');
            $SufferingCervical = session('SufferingCervical');
            $SufferingLowerBack = session('SufferingLowerBack');
            $SufferingMusculars = session('SufferingMusculars');
            $SufferingMotorNeuron = session('SufferingMotorNeuron');
            $SufferingGuillain = session('SufferingGuillain');
            //SUFFERING END

            //AREA SUFFERING FOR
            $Which_areaParalysis = session('Which_areaParalysis');
            $Which_areaKnee = session('Which_areaKnee');
            $Which_areaParkinson = session('Which_areaParkinson');
            $Which_areaCervical = session('Which_areaCervical');
            $Which_areaLowerBack = session('Which_areaLowerBack');
            $Which_areaMuscular = session('Which_areaMuscular');
            $Which_areaMotorNeuron = session('Which_areaMotorNeuron');
            $Which_areaGBS = session('Which_areaGBS');
            //AREA SUFFERING END

            //CONDITION THREE
            $conditionThreeParalysis = session('conditionThreeParalysis');
            $conditionThreeKnee = session('conditionThreeKnee');
            $conditionThreeParkinson = session('conditionThreeParkinson');
            $conditionTheeCervical = session('conditionTheeCervical');
            $conditionThreeLowerBack = session('Which_areaLowerBack');
            $conditionThreeMuscular = session('conditionThreeMuscular');
            $conditionThreeMND = session('conditionThreeMND');
            $conditionThreeGBS = session('conditionThreeGBS');
            //CONDITION THREE END


            //CONDITION FOUR
            $conditionFourParalysis = session('conditionFourParalysis');
            $conditionFourKnee = session('conditionFourKnee');
            $conditionFourParkinson = session('conditionFourParkinson');
            $conditionFourCervical = session('conditionFourCervical');
            $conditionFourLowerBack = session('conditionFourLowerBack');
            $conditionFourMuscular = session('conditionFourMuscular');
            $conditionFourMND = session('conditionFourMND');
            $conditionFourGBS = session('conditionFourGBS');
            //CONDITION FOUR END


            //CONDITION FIVE
            $conditionFiveParalysis = session('conditionFiveParalysis');
            $conditionFiveKnee = session('conditionFiveKnee');
            $conditionFiveParkinson = session('conditionFiveParkinson');
            $conditionFiveCervical = session('conditionFiveCervical');
            $conditionFiveLowerBack = session('conditionFiveLowerBack');
            $conditionFiveMuscular = session('conditionFiveMuscular');
            $conditionFiveMND = session('conditionFiveMND');
            $conditionFiveGBS = session('conditionFiveGBS');
            //CONDITION FIVE END

            return view('mobility.mobilityHealthQuality', compact(
                'data',
                'information',
                'SufferingPara',
                'SufferingKnee',
                'SufferingParkinson',
                'SufferingCervical',
                'SufferingLowerBack',
                'SufferingMusculars',
                'SufferingMotorNeuron',
                'SufferingGuillain',
                'Which_areaParalysis',
                'Which_areaKnee',
                'Which_areaParkinson',
                'Which_areaCervical',
                'Which_areaLowerBack',
                'Which_areaMuscular',
                'Which_areaMotorNeuron',
                'Which_areaGBS',
                'conditionThreeParalysis',
                'conditionThreeKnee',
                'conditionThreeParkinson',
                'conditionTheeCervical',
                'conditionThreeLowerBack',
                'conditionThreeMuscular',
                'conditionThreeMND',
                'conditionThreeGBS',
                'conditionFourParalysis',
                'conditionFourKnee',
                'conditionFourParkinson',
                'conditionFourCervical',
                'conditionThreeLowerBack',
                'conditionFourMuscular',
                'conditionFourMND',
                'conditionFourGBS',
                'conditionFiveParalysis',
                'conditionFiveKnee',
                'conditionFiveParkinson',
                'conditionFiveCervical',
                'conditionFiveLowerBack',
                'conditionFiveMuscular',
                'conditionFiveMND',
                'conditionFiveGBS',
            ));
        }

        public function results(Request $request)
        {
            $information = $request->only(['patientname', 'patientphone', 'patientemail', 'SufferingDuration']);
            session()->put('information', $information);

            // Collect all suffering data into an array
            $sufferingData = [
                'SufferingPara' => $request->input('SufferingPara', []),
                'SufferingKnee' => $request->input('SufferingKnee', []),
                'SufferingParkinson' => $request->input('SufferingParkinson', []),
                'SufferingCervical' => $request->input('SufferingCervical', []),
                'SufferingLowerBack' => $request->input('SufferingLowerBack', []),
                'SufferingMusculars' => $request->input('SufferingMusculars', []),
                'SufferingMotorNeuron' => $request->input('SufferingMotorNeuron', []),
                'SufferingGuillain' => $request->input('SufferingGuillain', [])
            ];
            session()->put('sufferingData', $sufferingData);

            // Collect all area suffering data into an array
            $areaSufferingData = [
                'Which_areaParalysis' => $request->input('Which_areaParalysis', []),
                'Which_areaKnee' => $request->input('Which_areaKnee', []),
                'Which_areaParkinson' => $request->input('Which_areaParkinson', []),
                'Which_areaCervical' => $request->input('Which_areaCervical', []),
                'Which_areaLowerBack' => $request->input('Which_areaLowerBack', []),
                'Which_areaMuscular' => $request->input('Which_areaMuscular', []),
                'Which_areaMotorNeuron' => $request->input('Which_areaMotorNeuron', []),
                'Which_areaGBS' => $request->input('Which_areaGBS', [])
            ];
            session()->put('areaSufferingData', $areaSufferingData);

            // Collect all condition data into an array
            $conditionData = [
                'conditionThree' => [
                    'Paralysis' => (array) $request->input('conditionThreeParalysis', []),
                    'Knee' => (array) $request->input('conditionThreeKnee', []),
                    'Parkinson' => (array) $request->input('conditionThreeParkinson', []),
                    'Cervical' => (array) $request->input('conditionTheeCervical', []),
                    'LowerBack' => (array) $request->input('conditionThreeLowerBack', []),
                    'Muscular' => (array) $request->input('conditionThreeMuscular', []),
                    'MND' => (array) $request->input('conditionThreeMND', []),
                    'GBS' => (array) $request->input('conditionThreeGBS', []),
                ],
                'conditionFour' => [
                    'Paralysis' => $request->input('conditionFourParalysis', []),
                    'Knee' => $request->input('conditionFourKnee', []),
                    'Parkinson' => $request->input('conditionFourParkinson', []),
                    'Cervical' => $request->input('conditionFourCervical', []),
                    'LowerBack' => $request->input('conditionFourLowerBack', []),
                    'Muscular' => $request->input('conditionFourMuscular', []),
                    'MNU' => $request->input('conditionFourMNU', []),
                    'GBS' => $request->input('conditionFourGBS', []),
                ],
                'conditionFive' => [
                    'Paralysis' => $request->input('conditionFiveParalysis', []),
                    'Knee' => $request->input('conditionFiveKnee', []),
                    'Parkinson' => $request->input('conditionFiveParkinson', []),
                    'Cervical' => $request->input('conditionFiveCervical', []),
                    'LowerBack' => $request->input('conditionFiveLowerBack', []),
                    'Muscular' => $request->input('conditionFiveMuscular', []),
                    'MND' => $request->input('conditionFiveMND', []),
                    'GBS' => $request->input('conditionFiveGBS', []),
                ]
            ];
            session()->put('conditionData', $conditionData);

            $mobilityResultData = [
                'title' => 'COMPLETED ASSESSMENT',
                'information' => $information,
                'sufferingData' => $sufferingData,
                'areaSufferingData' => $areaSufferingData,
                'conditionData' => $conditionData,
            ];

            Mail::to('rajdighe16@gmail.com')->send(new MobilityResultMail($mobilityResultData));
            return redirect()->route('FinalResult');
        }


        public function FinalResult()
        {
            $information = session('information');
            $data = session('data');

            //THIS IS FOR SUFFERING FOR
            $SufferingPara = session('SufferingPara');
            $SufferingKnee = session('SufferingKnee');
            $SufferingParkinson = session('SufferingParkinson');
            $SufferingCervical = session('SufferingCervical');
            $SufferingLowerBack = session('SufferingLowerBack');
            $SufferingMusculars = session('SufferingMusculars');
            $SufferingMotorNeuron = session('SufferingMotorNeuron');
            $SufferingGuillain = session('SufferingGuillain');
            //SUFFERING END

            //AREA SUFFERING FOR
            $Which_areaParalysis = session('Which_areaParalysis');
            $Which_areaKnee = session('Which_areaKnee');
            $Which_areaParkinson = session('Which_areaParkinson');
            $Which_areaCervical = session('Which_areaCervical');
            $Which_areaLowerBack = session('Which_areaLowerBack');
            $Which_areaMuscular = session('Which_areaMuscular');
            $Which_areaMotorNeuron = session('Which_areaMotorNeuron');
            $Which_areaGBS = session('Which_areaGBS');
            //AREA SUFFERING END

            //CONDITION THREE
            $conditionThreeParalysis = session('conditionThreeParalysis');
            $conditionThreeKnee = session('conditionThreeKnee');
            $conditionThreeParkinson = session('conditionThreeParkinson');
            $conditionTheeCervical = session('conditionTheeCervical');
            $conditionThreeLowerBack = session('Which_areaLowerBack');
            $conditionThreeMuscular = session('conditionThreeMuscular');
            $conditionThreeMND = session('conditionThreeMND');
            $conditionThreeGBS = session('conditionThreeGBS');
            //CONDITION THREE END


            //CONDITION FOUR
            $conditionFourParalysis = session('conditionFourParalysis');
            $conditionFourKnee = session('conditionFourKnee');
            $conditionFourParkinson = session('conditionFourParkinson');
            $conditionFourCervical = session('conditionFourCervical');
            $conditionFourLowerBack = session('conditionFourLowerBack');
            $conditionFourMuscular = session('conditionFourMuscular');
            $conditionFourMND = session('conditionFourMND');
            $conditionFourGBS = session('conditionFourGBS');
            //CONDITION FOUR END


            //CONDITION FIVE
            $conditionFiveParalysis = session('conditionFiveParalysis');
            $conditionFiveKnee = session('conditionFiveKnee');
            $conditionFiveParkinson = session('conditionFiveParkinson');
            $conditionFiveCervical = session('conditionFiveCervical');
            $conditionFiveLowerBack = session('conditionFiveLowerBack');
            $conditionFiveMuscular = session('conditionFiveMuscular');
            $conditionFiveMND = session('conditionFiveMND');
            $conditionFiveGBS = session('conditionFiveGBS');
            //CONDITION FIVE END

            return view('mobility.mobilityTestResult', compact(
                'data',
                'information',
                'SufferingPara',
                'SufferingKnee',
                'SufferingParkinson',
                'SufferingCervical',
                'SufferingLowerBack',
                'SufferingMusculars',
                'SufferingMotorNeuron',
                'SufferingGuillain',
                'Which_areaParalysis',
                'Which_areaKnee',
                'Which_areaParkinson',
                'Which_areaCervical',
                'Which_areaLowerBack',
                'Which_areaMuscular',
                'Which_areaMotorNeuron',
                'Which_areaGBS',
                'conditionThreeParalysis',
                'conditionThreeKnee',
                'conditionThreeParkinson',
                'conditionTheeCervical',
                'conditionThreeLowerBack',
                'conditionThreeMuscular',
                'conditionThreeMND',
                'conditionThreeGBS',
                'conditionFourParalysis',
                'conditionFourKnee',
                'conditionFourParkinson',
                'conditionFourCervical',
                'conditionThreeLowerBack',
                'conditionFourMuscular',
                'conditionFourMND',
                'conditionFourGBS',
                'conditionFiveParalysis',
                'conditionFiveKnee',
                'conditionFiveParkinson',
                'conditionFiveCervical',
                'conditionFiveLowerBack',
                'conditionFiveMuscular',
                'conditionFiveMND',
                'conditionFiveGBS',
            ));
        }

        public function identify($conditions_id)
        {
            $patientCondition = patient_condition::where('conditions_id', $conditions_id)
                ->orderBy('which_side', 'ASC')
                ->get();

            return response()->json([
                'status' => true,
                'patientCondition' => $patientCondition
            ]);
        }


        public function booking()
        {
            $user_info = session('user_info');
            return view('booking')->with('user_info', $user_info);
        }

        public function payment()
        {
            return view('mobility.payment');
        }


}
