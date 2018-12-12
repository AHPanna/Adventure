function update () {
$.ajax({
    type:'GET',
    url:'main.php',
    data:'',
    success: function(data){
            $('#res').html(data);
    }
});

}