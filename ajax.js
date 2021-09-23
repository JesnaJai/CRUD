// $(document).on('click', "#formbtn", function (e) {
//     e.preventDefault();
//     let data = {
//         name: $('#name').val(),
//        designation: $('#designation').val(),
//         contact: $('#contact').val(),
//         email: $('#email').val()
//     }
//     $.ajax({
//         // url: 'create.php',
//         method: "POST",
//         data: data,
//         success: function (res) {
//             $('#name').val('');
//             $('#designation').val('');
//             $('#contact').val('');
//             $('#email').val('');
//             load_data();
//         }
//     })
// });




// <script type="text/javascript">
    //     $(document).ready(function(){
	// 	$('uploaduser').click(function(event){
	// 		event.preventDefault();
	// 		var	name = $('#name').val();
	// 		var	designation = $('#designation').val();
	// 		var	contact = $('#contact').val();
	// 		var	email = $('#email').val();
	// 		$.ajax({
	// 		    type: "POST",
	// 		    url: "create.php",
	// 		    data: { name:name, designation:designation, contact:contact, email:email },		    
	// 		    dataType: "json",
	// 		    success: function(result){
	// 		        			    }
	// 		});
	// 	});
	// });
    // </script>


    // <script type="text/javascript">
    //     $(document).ready(function(){
	// 	$('uploaduser').click(function(event){
	// 		event.preventDefault();
	// 		var	name = $('#name').val();
	// 		var	designation = $('#designation').val();
	// 		var	contact = $('#contact').val();
	// 		var	email = $('#email').val();
			
    //         $.ajax({
			   
	// 		    url: $(this).attr('action'),
    //             type: "POST",
	// 		    data: new FormData(this),		    
	// 		    contentType: false,
    //             cache: false,
    //             processData:false,
    //             success: function(data){
    //                 location.reload();
    //             };
                
	// 		        			    }
	// 		};
	// 	});
	// });
    // </script>   