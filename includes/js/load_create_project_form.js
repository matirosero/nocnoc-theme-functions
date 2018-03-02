jQuery(function($){

	var loadForm = $('.load-project-form'),
		selectType = $('.select-project-type'),
		loadBtn = $('.load-form-button'),
		formContainer = $('#create-project-form'),
		type,
		plan,
		nonce;

	$(document).ready(function() {
		// loadBtn.prop('disabled', true);

	});

	selectType.change(function() {
		console.log('Change selection');
		type = $(this).attr('value');
		console.log('Selected '+type);
		$(this).closest(loadForm).attr('data-project-type', type);
	});

	loadForm.submit(function( event ) {
		console.log( "Handler for .submit() called." );
		event.preventDefault();

		nonce = $(this).attr("data-nonce");
		type = $(this).attr("data-project-type");
		plan = $(this).attr("data-plan");

		console.log('Plan = '+plan+' | Type = '+type+' | nonce = '+nonce);

		jQuery.ajax({
			type : "post",
			dataType : "html",
			url : myAjax.ajaxurl,
			data : {
				action: "noc_get_new_project_form",
				plan: plan,
				type: type,
				nonce: nonce
			},
			beforeSend : function(){
				console.log('About to Send: nonce = '+nonce+'; plan = '+plan+'; type = '+type);
			},
			success: function(response) {
	            // if(response.type == "success") {
               		formContainer.html(data);
            	// } else {
            	// 	alert("No se pudo eliminar el suscriptor.");
            	// }
            },
            error: function(jqXHR, textStatus, errorThrown) {
            	alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
	});
/*
	confirmDeleteBtn.on('click', function(e) {

		e.preventDefault();

		nonce = $(this).attr("data-nonce");
		email = $(this).attr("data-email");

		modal.foundation('close');

		jQuery.ajax({
			type : "post",
			dataType : "json",
			url : ajax_object.ajax_url,
			data : {
				action: "cit_mc_unsubscribe",
				email : email,
				nonce: nonce
			},
			beforeSend : function(){
				// console.log('About to Send: nonce = '+nonce+'; email = '+email);
			},
			success: function(response) {
	            if(response.type == "success") {
               		tableContainer.html(response.message+response.replace);
            	} else {
            		alert("No se pudo eliminar el suscriptor.");
            	}
            },
            error: function(jqXHR, textStatus, errorThrown) {
            	alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
	});

	deleteBtn.on('click', function(e) {
		
		e.preventDefault();
		
		email = $(this).data('email');
		nonce = $(this).data('nonce');

		modal.find('.confirm-email').html(email);

		link = ajax_object.ajax_url + '?action=cit_mc_unsubscribe&email=' + encodeURIComponent(email) + '&nonce=' + nonce;

		// link = admin_url('admin-ajax.php?action=mc_unsubscribe&email='.urlencode($member['email']).'&nonce='.$nonce);

		modal.find('.button.confirm-unsubscribe').attr('href', link).attr('data-email', email).attr('data-nonce', nonce);

		// alert(modal.find('.button.confirm-unsubscribe').data('action'));
	});
*/


});