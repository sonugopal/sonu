


$(document).ready(function(){
    
    
    $('#dist_list').on('change', function(){
   var selected = $('#dist_list').val();
   
   
   
   $.ajax({
        url: "getdata.php",
        method: "POST",
        data: {
                "dist_id": selected
            },
        
        success: function(data, textStatus, jqXHR) {
            console.log("succes");
            console.log(data);
          $("#town_list").html(data);
          
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("error");
        }
    });
   
});
});










