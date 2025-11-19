const tak = document.getElementById("tak");

tak.addEventListener("invalid", function (){
    tak.setCustomValidity("A przetwarzanie danych to co?");
});

tak.addEventListener("input", function(){
    tak.setCustomValidity("");
});