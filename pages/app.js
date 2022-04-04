
// contact array
const info = [
    { id:1,
        icon:"pages/files_asorec/map_marker.png",
        details:"Port Harcourt, Nigeria",
       },
       { id:2,
       icon:"pages/files_asorec/phone.png",
       details: "+2349079523857",
      },
      { id:3,
       icon:"pages/files_asorec/mail.png",
       details:"info@asorec.com",
      },
];
 
let singleitem = info.map(function(item){
    (...item) => item;
    let mycontact = ` <li > <span class="c_icon"><img src="${item.icon}"/></span> ${item.details}</li>`;
// console.log(mycontact);
  return mycontact;
  
}).join("");

let footer_contact = document.querySelector(".f_contact");
let contact = document.querySelector(".cont");


contact.innerHTML = singleitem;
footer_contact.innerHTML = singleitem;

// end of contact array


// navigation list array

const nav_list = [
    {
        id: 1,
        name: "HOME",
        url: "index.php",
    },
{
        id: 2,
        name: "ABOUT",
        url: "about.php",
    },
    
{
        id: 3,
        name: "PROJECTS",
        url: "project.php",
    },
{
        id: 4,
        name: "SERVICES",
        url: "services.php",
    },

    {
        id: 5,
        name: "CONTACT",
        url: "contact.php",
    },

    {
        id: 6,
        name: "DRAWING",
        url: "architectural drawing.php",
    },
    
];

let singlenav = nav_list.map(function(nav){
(...nav) => nav;
let mynav = `<li > <a href="${nav.url}">${nav.name}</a></li>`;

return mynav;
}).join("");

let navitem = document.querySelector(".nav_list");
navitem.innerHTML = singlenav;

// console.log(singlenav);

// end navigation list array

//  slider 

let slides =  document.querySelectorAll(".slides");

slides.forEach(function(slide, index){
slide.style.left = `${index * 100}%`;
});


let counter = 0;
setInterval(changeslide, 5000);

function changeslide(){
    counter++;
    if(counter === slides.length){counter = 0; };

    slides.forEach(function(slide){

slide.style.transform = `translateX(-${counter * 100}%)`;
});

};
// end of slider

// services array

const services = [
    {
        id: 1,
        title:"Building",
        desc:"some dummy text about the services goes here, some dummy text about the services goes here, some other dummy text",
        icon:"pages/files_asorec/icon1.png",
    },
{
        id: 2,
        title:"Architecture",
        desc:"some dummy text about the services goes here, some dummy text about the services goes here, some other dummy text",
        icon:"pages/files_asorec/icon2.png",
    },
{
        id: 3,
        title:"Renovation",
        desc:"some dummy text about the services goes here, some dummy text about the services goes here, some other dummy text",
        icon:"pages/files_asorec/icon3.png",
    },
    {
        id: 4,
        title:"Interioir",
        desc:"some dummy text about the services goes here, some dummy text about the services goes here, some other dummy text",
        icon:"pages/files_asorec/icon4.png",
    },

];



let service = services.map(function(item, index){
    (...item) => item;
// console.log(item);
return `<article class="service_item" key=${index}> 
<div class="s_title">
    <span class="s_icon"><img src ="${item.icon}"/></span>
    <span> ${item.title}</span>
 </div>
<div class="s_desc"> 
    <p>${item.desc} </P>
</div>
</article>`;

}).join("");
// console.log(service);
let div_element = document.querySelector(".b_service_div");
div_element.innerHTML = `${service}`;
// 

// quote js
let project_btn = document.querySelector(".project");
let project_value = document.getElementById("project");
let room_value = document.getElementById("room");
let roof_value = document.getElementById("roof");
let room_btn = document.querySelector(".room");
let roof_btn = document.querySelector(".roof");
let dropelements = document.querySelectorAll(".quote_item");
 
// //////////////////////////////////
project_btn.addEventListener("click", function(e){
    e.preventDefault();
   dropelements.forEach(function(element){

       let element_id = element.dataset.id;
// if start
       if(element_id === "project"){
           element.innerHTML = `<ul>
           <li class="q_category" data-id="Duplex">Duplex</li>
           <li class="q_category"data-id="Bungalow">Bungalow</li>
   </ul>`;
let q_category = document.querySelectorAll(".q_category");
q_category.forEach(function(btn){
    btn.addEventListener("click",function(e){
        element.classList.remove("show_dropdown");
        let p_value = e.currentTarget.dataset.id;
        project_value.value = p_value.toString();
    
    });
});
element.classList.toggle("show_dropdown");
window.addEventListener("scroll", function(){
    element.classList.remove("show_dropdown");
});
       } //end if
        
   });
//    end of foreach 
});
// end of event

// //////////////////////////////////
room_btn.addEventListener("click", function(e){
    e.preventDefault();
   dropelements.forEach(function(element){

       let element_id = element.dataset.id;
// if start
       if(element_id === "room"){
           element.innerHTML = `<ul>
           <li class="q_category" data-id="1">1</li>
           <li class="q_category"data-id="2">2</li>
            <li class="q_category"data-id="3">3</li>
           <li class="q_category"data-id="4">4</li>
<li class="q_category"data-id="5">5</li>
<li class="q_category"data-id="6">6</li>
  <li class="q_category"data-id="7">7</li>         
   </ul>`;
let q_category = document.querySelectorAll(".q_category");
q_category.forEach(function(btn){
    btn.addEventListener("click",function(e){
        element.classList.remove("show_dropdown");
        let p_value = e.currentTarget.dataset.id;
        room_value.value = p_value.toString();
    });
});
element.classList.toggle("show_dropdown");
window.addEventListener("scroll", function(){
    element.classList.remove("show_dropdown");
});
       } //end if
        
   });
//    end of foreach 
});
// end of event

// //////////////////////////////////
roof_btn.addEventListener("click", function(e){
    e.preventDefault();
   dropelements.forEach(function(element){

       let element_id = element.dataset.id;
// if start
       if(element_id === "roof"){
           element.innerHTML = `<ul>
           <li class="q_category" data-id="Adbestos">Adbestos</li>
           <li class="q_category"data-id="Stone coated">Stone coated</li>
            <li class="q_category"data-id="Step tiles">Step tiles</li>         
   </ul>`;
let q_category = document.querySelectorAll(".q_category");
q_category.forEach(function(btn){
    btn.addEventListener("click",function(e){
        element.classList.remove("show_dropdown");
        let p_value = e.currentTarget.dataset.id;
        roof_value.value = p_value.toString();
    });
});
element.classList.toggle("show_dropdown");

window.addEventListener("scroll", function(){
    element.classList.remove("show_dropdown");
});

       } //end if
        
   });
//    end of foreach 
});
// end of event


// /////////////////////////////////////

// project array

const project = [
    {
id: 1,
category:"Building",
img:"pages/files_asorec/pj_img1.png",

    },
 {
id:2,
category:"Building",
img:"pages/files_asorec/pj_img2.png",

    },
{
id:3,
category:"Building",
img:"pages/files_asorec/pj_img3.png",

    },
{
id:4,
category:"Building",
img:"pages/files_asorec/pj_img4.png",

    },
{
id:5,
category:"Interior",
img:"pages/files_asorec/pj_img5.png",

    },
{
id:6,
category:"Building",
img:"pages/files_asorec/pj_img6.png",

    },
{
id:7,
category:"Interior",
img:"pages/files_asorec/pj_img7.png",

    },
{
id:8,
category:"Interior",
img:"pages/files_asorec/pj_img8.png",

    },
{
id:9,
category:"Interior",
img:"pages/files_asorec/pj_img9.png",

    },


    
];

let project_nav = document.querySelector(".p_nav");
let project_display_parent = document.querySelector(".project_display_div");
// /////////////////////////domloaded start/////////////////////////////////////
window.addEventListener("DOMContentLoaded", function(){
displayproject(project);


   const categories = project.reduce(function(values, item){
if(!values.includes(item.category)){
    values.push(item.category);
};

return values;

},[]); 
// console.log(categories);
// /////////////////////////////////////////////
let singlecategory = categories.map(function(item){
    (...item)=>item;
    return `<div class="p_nav_item" data-id="${item}"> ${item}</div>`;
}).join("");

project_nav.innerHTML = singlecategory;
// ///////////////////////////////////////////
const navbtns = document.querySelectorAll(".p_nav_item");
// ///////////////start foreach//////////////////////////////////
navbtns.forEach(function(btn){
    
    btn.addEventListener("click", function(e){

        let my_btn = e.currentTarget;

        // /////////////////////////try o fix this later//////
        my_btn.classList.add("active");
       
        // ///////////////////////////////////////////////

        const oneCategory= e.currentTarget.dataset.id;
        const menucategory = project.filter(function(menuitem){
            if(menuitem.category === oneCategory){
                return menuitem;}
        });

        displayproject(menucategory);
    });
    // //////////////////////////////////////////////////
});
// //////////////////end of for each///////////////
});
// //////////////////domloaded end///////////////////
 


// ////////////////////////////////
function displayproject(pro){
    let myproject = pro.map(function(item){
        (...item)=> item;

        return `<article class="project_item"> <img src="${item.img}" alt="${item.category}"/></article>`;
    }).join("");

    project_display_parent.innerHTML = myproject;
}
// ///////////////////////////////////


// testimonial array element
const testimonials= [
    {
        id:1,
        name:"Mr marcus",
        info:"Dummy text about the client’s satisfaction in asorec resources. and more other dummy lorem ipsum.",
        avatar:"pages/files_asorec/avatar1.png",
    },
{
        id:2,
        name:"Mr Promise",
        info:"Dummy text about the client’s satisfaction in asorec resources. and more other dummy lorem ipsum.",
        avatar:"pages/files_asorec/avatar1.png",
    },
{
        id:3,
        name:"Mr Kpaliku",
        info:"Dummy text about the client’s satisfaction in asorec resources. and more other dummy lorem ipsum.",
        avatar:"pages/files_asorec/avatar1.png",
    },

];

let t_parent = document.querySelector(".testimonial_element");

let singleperson = testimonials.map(function(person){
    (...person)=>person;

    return `<article class="testimonial_item">
    <div class="testimonial_item_child avatar" 
    style="background:url('${person.avatar}');
     background-repeat:no-repeat; background-size: 100% 100%"></div>
<!--  -->
    <div class="testimonial_item_child">
        <h5><quote>${person.info}</quote></h5>
        <p> ${person.name}</p>
    </div>
    </article> `;
}).join("");

t_parent.innerHTML = singleperson;


// copyright

let date = new Date().getFullYear();

// console.log(date);

let copy_cont = document.querySelector(".copyright_div");
copy_cont.innerHTML = 
`<h4> <a> Asorec Resources</a> &copy; ${date} all rights reserved.| Designed by <a>Lapearl Services</a></h4>`;