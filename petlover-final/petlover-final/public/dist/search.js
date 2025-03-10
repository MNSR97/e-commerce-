        $(document).ready(function(){
            $("#search").on("keyup", function(){
                let query = $(this).val();
                if (query.length > 0) {
                    $.ajax({
                        url: "search.php",
                        method: "POST",
                        data: { search: query },
                        success: function(data) {
                            $("#result").html(data);
                        }
                    });
                } else {
                    $("#result").html("");
                }
            });

            $(document).on("click", ".result-item", function(){
                $("#search").val($(this).text());
                $("#result").html("");
            });
        });
