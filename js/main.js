$(function() {

    $('#show-form').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-btn").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#hide-form').click(function(e) {
		$("#register-btn").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
    });

});

function toggle_visibility(id)
{
    var e = document.getElementById(id);
    if(e.style.display == 'block')
        e.style.display = 'none';
    else
        e.style.display = 'block';
}

$("button").click(function()
{
    $("p").toggle();
});


//Search in table
function myFunction()
{
	// Declare variables 
	var input, filter, table, tr, td, i, txtValue;
	input = document.getElementById("myInput");
	filter = input.value.toUpperCase();
	table = document.getElementById("myTable");
	tr = table.getElementsByTagName("tr");
  
	// Loop through all table rows, and hide those who don't match the search query
	for (i = 0; i < tr.length; i++)
	{
	  td = tr[i].getElementsByTagName("td")[0];
	  if (td) {
		txtValue = td.textContent || td.innerText;
		if (txtValue.toUpperCase().indexOf(filter) > -1)
		{
		  tr[i].style.display = "";
		} else {
		  tr[i].style.display = "none";
		}
	  } 
	}
}