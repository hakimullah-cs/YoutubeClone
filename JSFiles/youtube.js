const profilepic=document.getElementById('profile-pic');
let profileinfo=document.querySelector('.profile-info'); 
let close=document.getElementById('close');
const menuicon=document.getElementById('menu-icon');
let sidebar=document.querySelector('.sidebar');
const navlinktext=document.querySelectorAll('.navlink-text');
const navlink=document.querySelectorAll('.nav-link');
const maincontainer=document.getElementById('main');
console.log(maincontainer);



console.log(profilepic);
profilepic.addEventListener('click',()=>{
    profileinfo.classList.toggle('active');
});
close.addEventListener('click',()=>{
 profileinfo.classList.remove('active')
});

menuicon.addEventListener('click',()=>{
    maincontainer.classList.toggle('apply');
navlinktext.forEach((ele)=>{
    ele.classList.toggle("active");
});
});

navlink.forEach((item)=>{
item.addEventListener('click',()=>{
    navlink.forEach((shift)=>{
     shift.classList.remove('active');
    });
    item.classList.add('active');
});
});