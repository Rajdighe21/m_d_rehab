</div>
<!-- /row-->
</div>
<!-- /container-fluid -->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
<!-- /cd-overlay-content -->

<!-- Modal terms -->
<div class="modal fade bookAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei
                    ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne
                    quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam
                    dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt
                    sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum
                    accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum
                    sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam
                    dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt
                    sensibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- COMMON SCRIPTS -->
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/common_scripts.min.js"></script>
<script src="js/velocity.min.js"></script>
<script src="js/common_functions.js"></script>
<script src="js/file-validator.js"></script>

<!-- Wizard script-->
<script src="js/func_1.js"></script>
<script src="js/custom.js"></script>


<script>
    $('.PatientSuffering').change(function() {

        var conditions_id = $(this).val();



        $.ajax({
            url: "{{ url('/patient-condition/') }}/" + conditions_id,
            type: 'get',
            datatype: 'json',
            success: function(response) {



                $(".wichside").find("checkbox").remove();
                $.each(response['patientCondition'], function(key, item) {

                    if ($('.PatientSuffering').is(':checked')) {
                        $('.aapends').append(` ${item.title} `);
                        $('.which_area').append(` ${item.which_area_title} `);
                        $('.sit_stand_title').append(` ${item.sit_stand_title} `);
                        $('.walking_title').append(` ${item.walking_title} `);
                        $('.finger_title').append(` ${item.hand_finger_title} `);
                        $('.elebow_title').append(` ${item.elbow_title} `);
                        $('.shoulder_title').append(` ${item.shoulder_title} `);


                        $(".wichside").append(`<label class="container_check"> ${item.which_side}
                                    <input type="checkbox"  name="whichsidesuffering" value="${item.which_side}"
                                        class="required" onchange="getVals(this, 'which_side_suffering');">
                                    <span class="checkmark"></span>
                                </label>`)

                        $(".wicharea").append(`<label class="container_check"> ${item.which_area}
                                    <input type="checkbox" id="leg" name="areaaffected[]" value="${item.which_area}"
                                        class="required" onchange="getVals(this, 'area_affected');" data-ptag="leg">
                                    <span class="checkmark"></span>
                                </label>`)

                        if (item.sit_to_stand.trim() !== "") {
                            $(".sitstand").append(`<label class="container_radio version_2">${item.sit_to_stand}
                            <input type="radio" name="condition" value="${item.sit_to_stand}" class="required">
                            <span class="checkmark"></span>
                        </label>`)
                        }
                        if (item.walking_condition.trim() !== "") {
                            $(".waliking").append(`<label class="container_radio version_2">${item.walking_condition}
                            <input type="radio" name="walking_condition" value="${item.walking_condition}"
                                class="required">
                            <span class="checkmark"></span>
                        </label>`)
                        }

                        if (item.hand_finger_condition.trim() !== "") {
                            $(".finger").append(`<label class="container_radio version_2">${item.hand_finger_condition}
                            <input type="radio" name="hand_finger"
                                onchange="getVals(this, 'hand_finger_condition');" id="completefinger"
                                value="${item.hand_finger_condition}" class="required">
                            <span class="checkmark"></span>
                        </label>`)
                        }

                        if (item.elebow_condition.trim() !== "") {
                            $(".elebow").append(`<label class="container_radio version_2">${item.elebow_condition}
                            <input type="radio" onchange="getVals(this, 'elebow_condition');"
                                id="fullrangeofmotion" name="elebow_condition"
                                value="${item.elebow_condition}" class="required">
                            <span class="checkmark"></span>
                        </label>`)
                        }

                        if (item.shoulder_condition.trim() !== "") {
                            $(".shoulder").append(`<label class="container_radio version_2">${item.shoulder_condition}
                            <input type="radio" onchange="getVals(this, 'shoulder_condition');" id="completerange"
                                name="shoulder_condition" value="${item.shoulder_condition}"
                                class="required">
                            <span class="checkmark"></span>
                        </label>`)
                        }

                    } else {
                        $('.aapends').empty();
                        $(".wichside").empty();
                        $(".wicharea").empty();
                        $(".sitstand").empty();
                        $(".waliking").empty();
                        $(".shoulder").empty();
                        $(".finger").empty();
                        $(".elebow").empty();
                        $(".which_area").empty();
                        $(".sit_stand_title").empty();
                        $(".walking_title").empty();
                        $(".finger_title").empty();
                        $(".elebow_title").empty();
                        $(".shoulder_title").empty();

                        

                    }
                })
            }

        })
    })
</script>

<script>
    $(document).ready(function() {
        $('#myform').on('submit', function(event) {
             JQuery.ajax({

                url:"{{ url('ajaxupload') }}",
                data:jQuery('#myform').serialize(),
                type:post,
                

             })
        })
    })
</script>
<script>const slides = document.querySelectorAll('.slides img');
    let currentSlide = 0;
    
    function showSlide() {
        slides.forEach(slide => slide.classList.remove('active'));
        slides[currentSlide].classList.add('active');
        currentSlide = (currentSlide + 1) % slides.length;
    }
    
    setInterval(showSlide, 1500);</script>

</body>

</html>







