function getData(query){
    $.getJSON("project_responder.php", {"query": query}, function(data){
        $("#description").html(data.description);
        $("#project-holder").attr("src", data.iframe);
    });
}
