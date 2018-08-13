var choices;
var result_quer=[];
var extracted_name=[];
// var choice_names=[];
var view_data;
var words = [];
var newArr = [];



	// console.log(choice_names);

$(document).ready(function(){
	console.log("fuzzsearch working");
	getLocation();
});

function getLocation() {
	return;
// console.log('hi');
   $.ajax({

        type: "GET",
        url: "inc/api.php",
        dataType: "json", 
        success: function(jsondata){ 
            console.log(jsondata);
            choice_names = jsondata;
            
            // $.each(data, function( index, value ) {
            //   // console.log( index + ":junaid " + value );
            //         $('#abcdef')
            //         .append($("<option></option>")
            //             .attr("value",index)
            //             .text(value)); 
            // });
        }
    });
   function fetchData(data) {
   	console.log(data);
   }
}

// array seach to filter the results
function searchingFn(arr, query) {

	// console.log (query,arr);
	// console.log (arr);
	var a = arr.filter(function(item){
		return item.toLowerCase().includes(query.toLowerCase());
	    // return item === "Donnersbachwald, Austria";
	});
	return a;
}


	$("#destination").keyup(function(){
		// console.log("choice_names are", choice_names);
		var query = $("#destination").val();
		if (query != '' && query.length >= 2) {
			// options = {
			// 	scorer: fuzzball.partial_ratio,
			// 	processor: choice => choice,
			// 	limit: 10,
			// 	cutoff: 99,
			// 	unsorted: false
			// };

			// result_quer = fuzzball.extract(query, choice_names, options);
			// // fuzzball.extractAsync(query, choice_names, options, function(err, results) {
			// // 	console.log(err, results);
			// // }); 
			// // console.log("Result Query",result_quer)
			// // result_quer.join("");
			// var extracted_name = $.map(result_quer, function(n){
			// 	// console.log("value of n:", n)
			// 	return n[0];
			// });
			// // console.log(result_quer);
			// 
			

			//spliting the input query into words
			words = query.split(' ');
			newArr = choice_names;
			words.forEach(function(element) {
				newArr = searchingFn(newArr, element);
			});

			
			

			if (newArr.length >= 20 ) {
				newArr = newArr.slice(0, 20);
			} 


			$("#destination").autocomplete({
				source: function (request, response) {
					console.log(newArr);
					response(newArr);
				}
			});
		}
	});
