      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'post.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });
      
    $('#submit').click(function () {
    var massagez = $("#massage").val();


    $.ajax({
      type: "POST",
      url: "post.php",
      data: { massage: massagez }
    }).done(function( msg ) {
      alert( "Data Saved: " + msg );
});
});
      
      
      
      
      
      
      
      
      
      
      
      
      
function updateShouts(){
    // Assuming we have #shoutbox
    $('#shoutbox').load('test.php');
}
setInterval( "updateShouts()", 1000 ); 