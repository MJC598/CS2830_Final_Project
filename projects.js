function getData(query){
    $("#description").html("Loading...");
    $("#project-holder").attr("src", "index.php");
    $.getJSON("project_responder.php", {"info": query}, function(data){
        $("#description").html(data.description);
        $("#project-holder").attr("href", data.link);
    });
}

