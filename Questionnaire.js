function openQuest() {
    document.getElementById("choixmatin").style.display = "block";
}

function closeQuest() {
    document.getElementById("choixmatin").style.display = "none";
    document.getElementById("Produit Laitier").style.display = "none";
    document.getElementById("Fruit").style.display = "none";
    document.getElementById("Boisson1").style.display = "none";
    document.getElementById("Patisserie").style.display = "none";
}



$(document).ready(function () {

    $(".non").click(function () {
        $(".clear").prop("checked", false);
    });
});

function showPL(){
    if (document.getElementById("pl").checked==true)
    {
        document.getElementById("Produit Laitier").style.display = "block";
    }
    else
    {
        document.getElementById("Produit Laitier").style.display = "none";
    }
}
function showfruit() {

    if (document.getElementById("fru").checked== true) {
        document.getElementById("Fruit").style.display = "block";
    } else {
        document.getElementById("Fruit").style.display = "none";
    }
}

function showboisson1(){
    if(document.getElementById("bs1").checked==true){
        document.getElementById("Boisson1").style.display = "block";
}
    else{
        document.getElementById("Boisson1").style.display = "none"
    }
}

function showpatisserie() {
    if (document.getElementById("pts").checked == true) {
        document.getElementById("Patisserie").style.display = "block";
    } else {
        document.getElementById("Patisserie").style.display = "none"
    }
}
function showentree(){
    if (document.getElementById("ent").checked==true)
    {
        document.getElementById("Entree").style.display = "block";
    }
    else
    {
        document.getElementById("Entree").style.display = "none";
    }
}
function showviande(){
    if (document.getElementById("via").checked==true)
    {
        document.getElementById("Viande").style.display = "block";
    }
    else
    {
        document.getElementById("Viande").style.display = "none";
    }
}
function showpoisson(){
    if (document.getElementById("poi").checked==true)
    {
        document.getElementById("Poisson").style.display = "block";
    }
    else
    {
        document.getElementById("Poisson").style.display = "none";
    }
}

function showpates(){
    if (document.getElementById("pat").checked==true)
    {
        document.getElementById("Pates").style.display = "block";
    }
    else
    {
        document.getElementById("Pates").style.display = "none";
    }
}

function showcompose(){
    if (document.getElementById("com").checked==true)
    {
        document.getElementById("Compose").style.display = "block";
    }
    else
    {
        document.getElementById("Compose").style.display = "none";
    }
}
function showfromage(){
    if (document.getElementById("fro").checked==true)
    {
        document.getElementById("Fromage").style.display = "block";
    }
    else
    {
        document.getElementById("Fromage").style.display = "none";
    }
}
function showdessert(){
    if (document.getElementById("des").checked==true)
    {
        document.getElementById("Dessert").style.display = "block";
    }
    else
    {
        document.getElementById("Dessert").style.display = "none";
    }
}