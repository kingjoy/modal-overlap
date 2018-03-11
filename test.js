<script>
$('.modal-child').on('show.bs.modal', function () {
    var modalParent = $(this).attr('data-modal-parent');

    $('.modal-child').draggable();

    $(modalParent).css('opacity', 1);
});
 
$('.modal-child').on('hidden.bs.modal', function () {
    var modalParent = $(this).attr('data-modal-parent');
    $(modalParent).css('opacity', 1);
});


$(function() {
  $('#submit').click(function() {

    var name = $('#text2').val();
    //alert('hhhhhhh');
    $.ajax({
    type: "POST",
    url: 'demo.php',
    data: {name: name},
    success: function(result){
        // var obj = jQuery.parseJSON( '{ "name": "John" }' );
        alert(result);
        //$("#text1").val(result);
        },
    error: function(){
        alert('try');
    }    
    });

    });
});

</script>