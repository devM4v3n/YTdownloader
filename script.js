$(document).ready(function(){
$('#url_form').submit(function(){
$('#response').html("<h4>Loading from server...</h4>");
$.ajax({
type: 'POST',
url: 'youtube-dl.php',
data: $(this).serialize() 
})
.done(function(data){ 
$('#response').html(data);
})
.fail(function() { 
alert("No response from server. Please retry"); });
return false ;});
});