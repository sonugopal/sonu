function add_town(){
    document.getElementById('tow').style.display='block';
}
$(document).ready(function(){
    
    
    $('#add_t').on('click', function(){
   var selected = $('#district').val();
   var town = $('#town_name').val();
   
   
   
   $.ajax({
        url: "add_town.php",
        method: "POST",
        data: {
                "dist_id": selected,
                "town": town
            },
        
        success: function(data, textStatus, jqXHR) {
            console.log("success");
            console.log(data);
            $("#status").html(data);
            
          
          
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("error");
        }
    });
   
});
});
