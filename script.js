let count = 7;
const show_image= document.getElementById("image1");
let heading= document.getElementById("heading1");
let box = document.getElementById("box_1");
let like= document.getElementById("like");
let greet = document.getElementById("thanku");
let long = document.getElementById("long");
let lat = document.getElementById("lat");
let Name = document.getElementById("name");

function geoLocation(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(position,showError);
    }
}
const position=(position)=>{
    long.value= position.coords.longitude;
    lat.value = position.coords.latitude;
}
const showError = (error)=>{
    switch(error.code){
        case error.PERMISSION_DENIED:
            alert("please allow location");
            location.reload();
            break;
            default:
                location.reload();  
            }
        }
        
        
        
        function no(){
            const check= confirm("are you sure about that you love me ?");
            if(check==true){
                alert("then click 'YES' ");
            }
            else{
                alert("you clicked to NO convert it to 'YES' .");
            }
        }
        show_image.style="display:block";
        heading.style.display="none";
        heading.innerHTML="this is for you";
        greet.style="display:none";
        greet.innerHTML= "spreading love for you";

        function open_page(){
                count--;
                show_image.style="display:none";
                document.getElementById("timer").innerHTML= "wait my heart responding .."+count;
                if(count>0){
                    setTimeout(open_page,1000);
                }
                if(count==0){
                    document.getElementById("timer").style="display:none";
                    show_image.style="display:block; transition: 2s all linear;";
                    heading.style.display="block";
                    greet.style="display:block";
                }
            }