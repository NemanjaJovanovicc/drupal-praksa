function genre(){
    $("#genre").on("change", function () {
        $.ajax({
            method: "GET",
            url: "movie-reservation?genre=" + $("#genre").val(),
            success: function () {
                window.location.href = "movie-reservation?genre=" + $("#genre").val();
            }
        });
    });
}
genre();
