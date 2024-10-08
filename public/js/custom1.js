$(document).ready(function () {

  $('input[type="radio"]').click(function () {

    var nQuestions = $('h3.SufferingFrom').length;
    var $checkedItems = $('input[type="radio"]:checked');

    if ($checkedItems.length == nQuestions) {  // All answered

      var sum = 0;
      $checkedItems.each(function () {
        sum += Number($(this).data('weight'));
      });

      $('p.result').hide();
      if (sum == nQuestions)
        $('p#SufferingParalysis').show();
      else
        $('p#SufferingJointPain').show();
    }
  });
});


function Submit(values) {
  if(values !== " ")
  {
    $('#wrapped').submit();

    
  }
}


// 