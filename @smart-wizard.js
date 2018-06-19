    $(document).ready(function() {
      // Smart Wizard
      $('#wizard').smartWizard({
		labelNext:'Далее', // label for Next button
		labelPrevious:'Вернуться', // label for Previous button
		labelFinish:'Зарегистрировать',  // label for Finish button
		onFinish: onFinishCallback,
		onLeaveStep:leaveAStepCallback,
		keyNavigation:false  // disable arrow step navigation
	  });
	
	function leaveAStepCallback(obj, context){
		// alert("Leaving step " + context.fromStep + " to go to step " + context.toStep);
		// return false to stay on step and true to continue navigation 
        return validateSteps(context.fromStep); // return false to stay on step and true to continue navigation 
	}
	
	function validateSteps(stepnumber){
		var isStepValid = true;
		if(stepnumber == 2){
			$('#wizardForm #step-2 input').each(function (){
				if ( !$(this).val() ) {
					$(this).addClass('warning');
					isStepValid = false;
				} else {$(this).removeClass('warning');}
			})
			$('#wizardForm #step-2 textarea').each(function (){
				if ( !$(this).val() ) {
					$(this).addClass('warning');
					isStepValid = false;
				} else {$(this).removeClass('warning');}
			})
		} else if (stepnumber == 3){
			$('#wizardForm #step-3 input').each(function (){
				if ( !$(this).val() ) {
					$(this).addClass('warning');
					isStepValid = false;
				} else {$(this).removeClass('warning');}
			})
		} else if (stepnumber == 4){
			$('#wizardForm #step-4 input').each(function (){
				if ( !$(this).val() ) {
					$(this).addClass('warning');
					isStepValid = false;
				} else {$(this).removeClass('warning');}
			})
		} else if (stepnumber == 5){
			$('#wizardForm #step-5 input[type=text]').each(function (){
				if ( !$(this).val() ) {
					$(this).addClass('warning');
					isStepValid = false;
				} else {$(this).removeClass('warning');}
			})
		}
		return isStepValid;
	}
	
      function onFinishCallback() {
		  if (validateSteps(5)){
			alert('здесь вызов отправки формы');
		  }
      }
    });