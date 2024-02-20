function searchContentNews() {
    var searchInput = document.getElementById("searchInput").value.toLowerCase();
    var items = document.querySelectorAll('[id$="_content"]');

    if (searchInput === "") {
        items.forEach(function (item) {
            item.style.display = 'block'; // Restaura a visibilidade dos elementos
        });
    } else {
        items.forEach(function (item) {
            var content = item.innerText.toLowerCase();
            if (content.includes(searchInput)) item.style.display = 'block';
            else item.style.display = 'none';
        });
    }
}
