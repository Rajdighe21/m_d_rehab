@include('mobility.header')

<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">

        <!-- /top-wizard -->
        <form id="wrapped" class="indexClass" method="POST" action="{{route('mobilityTestThird')}}">
            @csrf
            <input id="website" name="website" type="text" value="">
            <div id="middle-wizard">

                <div style="font-size: 18px; color: #007bff; font-weight: bold;">
                    M D Rehab
                </div>
                <h3 class="main_question">Before We Start Need Some Basic Informations</h3>

                <div class="step">
                    <div class="form-group add_top_30">
                        <label for="name">Patient Name</label>
                        <input type="text" name="patientname" id="name" class="form-control required"
                            onchange="getVals(this, 'name_field');">
                    </div>
                    <div class="form-group">
                        <label for="phone">Patient Phone</label>
                        <input type="text" name="patientphone" id="phone" class="form-control required"
                            maxlength="10">
                    </div>
                    <div class="form-group add_top_30">
                        <label for="email">Email Address</label>
                        <input type="email" name="patientemail" id="email" class="form-control required">
                    </div>
                    {{-- @if ($information)
                        <input type="hidden" value="{{ $information['patientname'] }}" name="patientname">
                        <input type="hidden" value="{{ $information['patientphone'] }}" name="patientphone">
                        <input type="hidden" value="{{ $information['patientemail'] }}" name="patientemail">
                    @endif --}}
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
                <button type="button" name="forward" class="forward" onclick="indexsubmit(this.value)">Next</button>
            </div>
            <!-- /bottom-wizard -->


        </form>
    </div>
    <!-- /Wizard container -->
</div>


@include('mobility.footer')
