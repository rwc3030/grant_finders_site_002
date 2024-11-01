function makeAjaxRequest(url, data) {
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function(response) {
            // Handle success
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("An error occurred: " + textStatus);
            console.error("Error details: ", errorThrown);
        }
    });
}
