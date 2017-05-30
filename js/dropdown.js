$(document).ready(function(){
    
    
    $('#district').on('change', function(){
   var selected = $('#district').val();
   $('#load').show();
   
   
   
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
          $('#load').hide();
          
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("error");
        }
    });
   
});
});

//home dropdown

$(document).ready(function(){
    
    
    $('#home_dist').on('change', function(){
   var selected = $('#home_dist').val();
   $('#load').show();
   
   
   
   $.ajax({
        url: "getdata.php",
        method: "POST",
        data: {
                "dist": selected
            },
        
        success: function(data, textStatus, jqXHR) {
            console.log("succes");
            console.log(data);
          $("#townlist").html(data);
          $('#load').hide();
          
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("error");
        }
    });
   
});
});










