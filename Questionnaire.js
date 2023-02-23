function openQuest() {
    document.getElementById("choixmatin").style.display = "block";
}

function closeQuest() {
    document.getElementById("choixmatin").style.display = "none";
}

$(document).ready(function () {

    $(".non").click(function () {
        $(".clear").prop("checked", false);
    });
});