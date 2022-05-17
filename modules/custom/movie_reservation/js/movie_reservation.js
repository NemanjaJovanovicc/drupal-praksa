function genre(){
    $("#genre").on("change", function () {
        var genre = $(this).val();
        console.log(genre);
        $.ajax({
            method: "GET",
            url: "movie-reservation?genre=" + $("#genre").val(),
            success: function () {
                window.location.href = "movie-reservation?genre=" + $("#genre").val();
            }
        });
        console.log($("#genre").val());
    });
}
genre();
