Runner.buttonEvents["New_Button"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button';
	
	if ( !pageObj.buttonEventBefore['New_Button'] ) {
		pageObj.buttonEventBefore['New_Button'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire({
  title: '¡Información!',
  text: 'Direccionar a la página principal',
  icon: 'success'
}).then(function() {
  // Redirecciona a la página deseada
  window.location.href = '../_Athena/index.html';
});
    



		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button'] ) {
		pageObj.buttonEventAfter['New_Button'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="New_Button"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button" + "_" + Runner.genId();
		
		// create object
		var button_New_Button = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button"
		});
		
		// init
		button_New_Button.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

