$(document).ready(function () {
    console.log("ajax.ready");

    $("body").on("click", "#Gardu", function () {
        $("#DataTable tbody").empty();
        var baseurl = window.location.origin;

        var gardu_id = $(this).attr("data-id");
        var fnc = "/databay/show/" + gardu_id;
        var url = baseurl + fnc;

        // alert(url);

        // alert(gardu_id);
        $.get(url, function (data) {
            // var jmlData = data.data;

            var length = Object.keys(data).length;
            console.log("data : " + data.data[0].id);

            for (let i = 0; i < data.data.length; i++) {
                added_row =
                    '<tr class="text-center">' +
                    '<td class="sm:p-3 py-2 px-1 border-b border-gray-200">' +
                    data.data[i].id +
                    "</td>" +
                    '<td class="sm:p-3 py-2 px-1 border-b border-gray-200">' +
                    data.data[i].name_bay +
                    "</td>" +
                    '<td class="sm:p-3 py-2 px-1 border-b border-gray-200 md:table-cell">' +
                    data.data[i].long +
                    "</td>" +
                    '<td class="sm:p-3 py-2 px-1 border-b border-gray-200 text-red-500">' +
                    data.data[i].lat +
                    "</td>" +
                    "</tr>";
                $("#DataTable").append(added_row);
            }
        });
    });
});
