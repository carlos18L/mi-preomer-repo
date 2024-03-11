document.addEventListener("DOMContentLoaded", function() {
    var searchInput = document.getElementById("searchInput");
    var tableRows = document.querySelectorAll(".table tbody tr");

    searchInput.addEventListener("input", function() {
        var searchText = searchInput.value.trim().toLowerCase();

        tableRows.forEach(function(row) {
            var rowData = row.textContent.trim().toLowerCase();
            if (rowData.includes(searchText)) {
                row.style.display = "table-row";
            } else {
                row.style.display = "none";
            }
        });
    });
});
