// show and hide top navigation for breadcrumbs
var scrollpos = window.scrollY;
var header = document.getElementById("breadcrumbs");

function add_class_on_scroll() {
    header.classList.add("show");
}

function remove_class_on_scroll() {
    header.classList.remove("show");
}

window.addEventListener('scroll', function(){ 
    //Here you forgot to update the value
    scrollpos = window.scrollY;

    if(scrollpos > 100){
        add_class_on_scroll();
    }
    else {
        remove_class_on_scroll();
    }
    console.log(scrollpos);
});