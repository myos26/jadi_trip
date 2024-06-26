document.querySelector("#show-search").addEventListener("click", function(){
    document.querySelector(".box-search").classList.add("active");
});

document.querySelector("#close-search").addEventListener("click", function(){
    document.querySelector(".box-search").classList.remove("active");
});




document.addEventListener('click', function(event) {
    const targetElement = document.getElementById('show-search');
    const targetBox = document.getElementById('box-search');
    const isClickInside = targetElement.contains(event.target);
    const isClick = targetBox.contains(event.target);

    if (!isClickInside && !isClick) {
        document.querySelector(".box-search").classList.remove("active");
    }
});
