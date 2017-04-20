$(document).ready(function(){
    
    
    $('#district').on('change', function(){
   var selected = $('#district').val();
   
   
   $.ajax({
        url: "getdata.php",
        method: "POST",
        data: {
                "dist_id": selected
            },
        
        success: function(data, textStatus, jqXHR) {
            console.log("succes");
            console.log(data);
          $("#townlist").html(data);
          
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("error");
        }
    });
   
});
});
