      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          var massagez = $("#massage").val();
     var usernamex = $("#username").val();
    $.ajax({
      type: "POST",
      url: "post.php",
      data: { massage: massagez , username: usernamex}
    }).done(function( msg ) {
      
$("#massage").val("")
});

        });

      });
      
    $('#submit').click(function () {
    var massagez = $("#massage").val();
     var usernamex = $("#username").val();
    $.ajax({
      type: "POST",
      url: "post.php",
      data: { massage: massagez , username: usernamex}
    }).done(function( msg ) {
      alert( "Data Saved: " + msg );

});
});
      
      
      
      
      
      
      
      
      
      
      
      
      
function updateShouts(){
    // Assuming we have #shoutbox
    $('#shoutbox').load('get.php');
}
setInterval( "updateShouts()", 1000 ); 