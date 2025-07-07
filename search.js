$(document).ready(function () {
    $("#search").keyup(function () {
        let query = $(this).val();
        if (query !== "") {
            $.ajax({
                url: "search.php",
                method: "POST",
                data: { query: query },
                success: function (data) {
                    $("#suggestion-box").fadeIn().html(data);
                }
            });
        } else {
            $("#suggestion-box").fadeOut();
        }
    });

    $(document).on("click", "#suggestion-box div", function () {
        $("#search").val($(this).text());
        $("#suggestion-box").fadeOut();
    });
});


 function search() {
      const keyword = $("#search").val().trim();

      if (keyword !== "") {
        $.ajax({
          url: "search_result.php",
          method: "POST",
          data: { query: keyword },
          success: function (response) {
            $("#result").html(response);
            $('#search').val('');
          },
          error: function () {
            $("#result").html('<div class="alert alert-danger">Error while searching.</div>');
          }
        });
      } else {
        $("#result").html('<div class="alert alert-warning">Please enter a search term.</div>');
      }
    }