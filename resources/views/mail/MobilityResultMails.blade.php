<!DOCTYPE html>
<html>

<head>
    <title>{{ $mobilityResultData['title'] }}</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <div style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
        <h1 style="text-align: center; color: #333;">{{ $mobilityResultData['title'] }}</h1>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">Name:
                </td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $mobilityResultData['information']['patientname'] }}
                </td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">Phone:
                </td>
                <td style="padding: 8px; border: 1px solid #ddd;">
                    {{ $mobilityResultData['information']['patientphone'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">Email:
                </td>
                <td style="padding: 8px; border: 1px solid #ddd;">
                    {{ $mobilityResultData['information']['patientemail'] }}</td>
            </tr>

        </table>

        <h2 style="text-align: center; margin-top: 20px;">Suffering Data</h2>
        <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                    Suffering Duration:</td>
                <td style="padding: 8px; border: 1px solid #ddd;">
                    {{ $mobilityResultData['information']['SufferingDuration'] }}</td>
            </tr>

            @if (!empty($mobilityResultData['sufferingData']['SufferingPara']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Paralysis:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['sufferingData']['SufferingPara']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['sufferingData']['SufferingKnee']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Knee:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['sufferingData']['SufferingKnee']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['sufferingData']['SufferingParkinson']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Parkinson:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['sufferingData']['SufferingParkinson']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['sufferingData']['SufferingCervical']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Cervical:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['sufferingData']['SufferingCervical']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['sufferingData']['SufferingLowerBack']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Lower Back:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['sufferingData']['SufferingLowerBack']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['sufferingData']['SufferingMusculars']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Muscular:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['sufferingData']['SufferingMusculars']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['sufferingData']['SufferingMotorNeuron']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Motor Neuron:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['sufferingData']['SufferingMotorNeuron']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['sufferingData']['SufferingGuillain']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Guillain:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['sufferingData']['SufferingGuillain']) }}</td>
                </tr>
            @endif



            {{-- Condition Two --}}

            @if (!empty($mobilityResultData['areaSufferingData']['Which_areaParalysis']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        impacted Due To Paralysis:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['areaSufferingData']['Which_areaParalysis']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['areaSufferingData']['Which_areaKnee']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Severe is your knee pian</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['areaSufferingData']['Which_areaKnee']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['areaSufferingData']['Which_areaParkinson']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Movement Due to Parkinson Disease:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['areaSufferingData']['Which_areaParkinson']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['areaSufferingData']['Which_areaCervical']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Due to Cervical Pain:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['areaSufferingData']['Which_areaCervical']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['areaSufferingData']['Which_areaLowerBack']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Due to Lower Back Pain:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['areaSufferingData']['Which_areaLowerBack']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['areaSufferingData']['Which_areaMuscular']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Position Due to Muscular Dystrophy:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['areaSufferingData']['Which_areaMuscular']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['areaSufferingData']['Which_areaMotorNeuron']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Due to Motor Neuron Disease:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['areaSufferingData']['Which_areaMotorNeuron']) }}</td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['areaSufferingData']['Which_areaGuillain']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Due to G-B-S:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', $mobilityResultData['areaSufferingData']['Which_areaGuillain']) }}</td>
                </tr>
            @endif





            {{-- Condition Three --}}


            @if (!empty($mobilityResultData['conditionData']['conditionThree']['Paralysis']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Hand Finger Condition:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionThree']['Paralysis']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionThree']['Knee']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        limping while walking Due To Knee:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionThree']['Knee']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionThree']['Parkinson']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        limping while walking To Parkinson:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionThree']['Parkinson']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionThree']['Cervical']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        stiffness is there in the neck:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionThree']['Cervical']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionThree']['LowerBack']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Limping while walking Due To Lower Back:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionThree']['LowerBack']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionThree']['Muscular']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Foot drop Due To Muscular:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionThree']['Muscular']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionThree']['MND']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Foot drop Due To Due To MND:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionThree']['MND']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionThree']['GBS']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Foot drop Due To Due To GBS:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionThree']['GBS']) }}
                    </td>
                </tr>
            @endif




            {{-- Condition Four --}}


            @if (!empty($mobilityResultData['conditionData']['conditionFour']['Paralysis']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Elbow Condition Due to Paralysis:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFour']['Paralysis']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFour']['Knee']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        pain while walking Due To Knee:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFour']['Knee']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFour']['Parkinson']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Dopamine medicine:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFour']['Parkinson']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFour']['Cervical']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Movement in the neck:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFour']['Cervical']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFour']['LowerBack']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Stiffness in any of your one or both the legs:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFour']['LowerBack']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFour']['Muscular']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Numbness sensation Due to Muscular:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFour']['Muscular']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFour']['MND']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Numbness sensation Due to MND:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFour']['MND']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFour']['GBS']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Numbness sensation Due to GBS:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFour']['GBS']) }}
                    </td>
                </tr>
            @endif


            {{-- Condition Five --}}


            @if (!empty($mobilityResultData['conditionData']['conditionFive']['Paralysis']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Shoulder Condition:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFive']['Paralysis']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFive']['Knee']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Shoulder Condition Due To Knee:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFive']['Knee']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFive']['Parkinson']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Hand movements Due To Parkinson:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFive']['Parkinson']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFive']['Cervical']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Not able to hand up Due to Cervical:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFive']['Cervical']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFive']['LowerBack']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Sensation in your both or any of the one leg Due To Lower Back:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFive']['LowerBack']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFive']['Muscular']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Limping while walking Due To Muscular:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFive']['Muscular']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFive']['MND']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Limping while walking Due To MND:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFive']['MND']) }}
                    </td>
                </tr>
            @endif
            @if (!empty($mobilityResultData['conditionData']['conditionFive']['GBS']))
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">
                        Limping while walking Due To GBS:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">
                        {{ implode(', ', (array) $mobilityResultData['conditionData']['conditionFive']['GBS']) }}
                    </td>
                </tr>
            @endif



        </table>

        {{-- <h2 style="text-align: center; margin-top: 20px;">Area Suffering Data</h2>
        <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
           
        </table> --}}

        <p style="text-align: center; color: #999; margin-top: 20px;">MOBILITY TEST</p>
    </div>
</body>

</html>
