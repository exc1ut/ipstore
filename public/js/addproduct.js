function $(element){
    if(document.getElementById(element)){
        return document.getElementById(element);
    }
    else if(document.getElementsByClassName(element)){
        return document.getElementsByClassName(element);
    }    
    else if(document.getElementsByTagName(element)){
        return document.getElementsByTagName(element);
    }
    
    return null;
}




$("file").onchange = () => {

    let file = $("file").files[0];
    var {name, type, size} = file;
    console.log(name,size, type);

    var form = new FormData();
    form.append("myfile", file);

    $("progress")[0].style.display = "block";


    let ajax = new XMLHttpRequest();
    ajax.addEventListener("progress", progress);

    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == "200"){
            setTimeout(function(){
                var progress = $("progress-bar")[0];
                progress.style.width = 0 + "%";
                $("progress")[0].style.display = "none";
                progress.textContent = 0 + "%";
            }, 1000)


            $("fileuploadstatus")[0].innerHTML = "File is successfully uploaded";
        }
    }
    ajax.open( "POST", "uploadfile.php");
    ajax.send(form);



}


function progress(event){

    let precentage = event.loaded/event.total * 100;

    var progress = $("progress-bar")[0];
    progress.style.width = precentage + "%";
    progress.textContent = precentage + "%";

    progress.setAttribute("aria-valuenow", precentage);


}



var select = $("category_select");
select.addEventListener("click", function(){

    var options = this.getElementsByClassName("options")[0];

    if(window.getComputedStyle(options).display == "none"){
        options.style.display = "block";
    }
    else{
        options.style.display = "none";
    }
    

});

var options = select.getElementsByClassName("option");

for(var i = 0; i < options.length; i++){
    options[i].addEventListener("click", _select);
}

function _select(event){
    select.getElementsByTagName("label")[0].innerHTML = event.target.innerHTML;
    $("category").setAttribute("value", event.target.innerHTML);
}