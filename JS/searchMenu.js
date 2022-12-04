function applySearch() {

    let search = document.querySelector("#search").value;

    $('#menu-container').load("form.php?search=" + search + " #menu");
}

function setupEvents() {
    const button = document.querySelector("#submitSearch");
    button.addEventListener("click", applySearch);
}

window.onload=setupEvents;