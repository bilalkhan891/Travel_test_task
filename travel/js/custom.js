
// datepicker 
$(function() {
    $( ".datepicker" ).datepicker();
});



	// hotel form js for childs age count

	// Every time someone updates either selected option fire a callback
	$('#childs').change(function () {

		var gettingages = "";

		console.log("value changed");

		// if value is selected it will show the childs age else not
		if (this.value > 0 && this.value != "" && this.value.length) { 
			console.log("value is: " + this.vale)
			$('#childs-age-section').css("display", "block"); 
		} else {
			$('#childs-age-section').css("display", "none");
		}// if ended



		var container = $('#child-ages');
	    container.empty();
	    console.log(container, " is empty");

	    for(var i = 0; i< this.value; i++){
	    	console.log('<p> index: '+ i +" <br> value: "+ this.value +'</p>');
	    	var text1 = '<optgroup label="Childage' + (i+1)+ '">\
			   <option value="1">1</option>\
	           <option value="2">2</option>\
	           <option value="3">3</option>\
	           <option value="4">4</option>\
	           <option value="5">5</option>\
	           <option value="6">6</option>\
	           <option value="7">7</option>\
	           <option value="8">8</option>\
	           <option value="9">9</option>\
	           <option value="10">10</option>\
	           <option value="11">11</option>\
	           <option value="12">12</option>\
	           <option value="13">13</option>\
	           <option value="14">14</option>\
	           <option value="15">15</option>\
	           <option value="16">16</option>\
	           <option value="17">17</option>\
          </optgroup>';
	    	container.append(text1);
	    }
	    // multiple select option hotal form
	    $("#child-ages").multipleSelect({
	        filter: true,
	        multiple: true,

	        onClick:  function(view) {

	    	
	        

	        console.log("label: "+view.label+"  / checked: "+view.checked);

	    	gettingages = $('button.ms-choice span').text();

	    	console.log("it's called: "+gettingages);

	    	$('#childernsage').val(gettingages); 

	    }
	    }).multipleSelect("uncheckAll");
	   
	});
