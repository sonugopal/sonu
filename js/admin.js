

$(document).ready(function () {
    $("#add_town").on('click', function () {
        $("#tow").show();
        $("#del_tow").hide();
        $("#user_add").hide();
        $("#user_del").hide();

    });
});

$(document).ready(function () {
    $("#del_town").on('click', function () {
        $("#del_tow").show();
        $("#tow").hide();
        $("#user_add").hide();
        $("#user_del").hide();
    });
});

$(document).ready(function () {
    $("#add_user").on('click', function () {
        $("#user_add").show();
        $("#tow").hide();
        $("#del_tow").hide();
        $("#user_del").hide();
    });
});

$(document).ready(function () {
    $("#del_user").on('click', function () {
        $("#user_del").show();
        $("#tow").hide();
        $("#user_add").hide();
        $("#del_tow").hide();
    });
});


//add town
$(document).ready(function () {


    $('#add_t').on('click', function () {
        var selected = $('#dist').val();
        var town = $('#town_n').val();



        $.ajax({
            url: "add_town.php",
            method: "POST",
            data: {
                "dist_id": selected,
                "town": town
            },

            success: function (data, textStatus, jqXHR) {
                console.log("success");
                console.log(data);
                $('#status').html(data);


                $("#town_n").focus();



            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("error");
                $('#status').html(data);
            }
        });

    });
});

//delete town
$(document).ready(function () {


    $('#del').on('click', function () {
        var selected = $('#townlist').val();




        $.ajax({
            url: "del_town.php",
            method: "POST",
            data: {
                "town_id": selected

            },

            success: function (data, textStatus, jqXHR) {
                console.log("success");
                console.log(data);






            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("error");
            }
        });

    });
});

//add donor

$(document).ready(function () {


    $('#add_d').on('click', function () {
        var town = $('#town_list').val();
        var dist = $('#dist_list').val();
        var name = $('#name').val();
        var mob = $('#mob').val();
        var blood = $('#blood').val();





        $.ajax({
            url: "add_donor.php",
            method: "POST",
            data: {
                "town_id": town,
                "dist_id": dist,
                "name": name,
                "mob": mob,
                "blood": blood


            },

            success: function (data, textStatus, jqXHR) {
                console.log("success");
                console.log(data);






            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("error");
            }
        });

    });
});

//delete donor
$(document).ready(function () {
    $('#del_d').on('click', function () {
        var mob = $('#mobi').val();

        $.ajax({
            url: "del_donor.php",
            method: "POST",
            data: {
                "mob": mob
            },
            success: function (data, textStatus, jqXHR) {
                console.log("success");
                console.log(data);

            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("error");
            }

        });
    });
});





