
function openQuest() {

    document.getElementById("choixmatin").style.display = "block";
}

function closeQuest() {
    document.getElementById("choixmatin").style.display = "none";
}

suivantmatin = document.getElementById("suivantmatin");
suivantmatin.onclick = function () {
    {
        document.getElementById("matin").style.display = "none";
        document.getElementById("choixmatin").style.display = "none";
        document.getElementById("diner").style.display = "block";
        document.getElementById("suivantmatin").style.display = "none";
        const btnList = document.getElementsByClassName("btn");
        for (const btn of btnList) {
            btn.style.display = "block";

        }

    }
}
