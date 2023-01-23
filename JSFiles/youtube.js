const profilepic=document.getElementById('profile-pic');
let profileinfo=document.querySelector('.profile-info'); 
let close=document.getElementById('close');
const menuicon=document.getElementById('menu-icon');
let sidebar=document.querySelector('.sidebar');
console.log(profilepic);
profilepic.addEventListener('click',()=>{
    profileinfo.classList.toggle('active');
});
close.addEventListener('click',()=>{
 profileinfo.classList.remove('active')
});

menuicon.addEventListener('click',()=>{
sidebar.classList.toggle("active");
});