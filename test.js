function update () {
$.ajax({
    type:'GET',
    url:'main.php',
    data:'display',
    success: function(data){
            $('#res').html(data);
    }
});

}