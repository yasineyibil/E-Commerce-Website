ScrollReveal().reveal('.scroll');
ScrollReveal().reveal('.scrollin', { 
  distance: '500px',
  origin: 'left',
  easing: 'ease-in',
  delay: 300,
});




const allHoverImages = document.querySelectorAll('.hover-container div img');
const imgContainer = document.querySelector('.img-container');



allHoverImages.forEach((image) => {
    image.addEventListener('mouseover', () =>{
        imgContainer.querySelector('img').src = image.src;
        resetActiveImg();
      
    });
});



/* ---------------------   */


(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()



/*  menuuu  */

let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.add('active');
}

document.querySelector('#nav-close').onclick = () =>{
    navbar.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.add('active');
}

document.querySelector('#close-search').onclick = () =>{
    searchForm.classList.remove('active');
}


window.onscroll = () =>{
    navbar.classList.remove('active');

    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active');
        //document.getElementsByClassName('.header').style.add('active');
        document.getElementById("logorenk").style.color = "#000";
    }else{
        document.querySelector('.header').classList.remove('active');
       //document.getElementsByClassName('.header').style.remove('active');
        document.getElementById("logorenk").style.color = "#fff";
    }
};


window.onload = () =>{
    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active');
        
        document.getElementById("logorenk").style.color = "#000";
    }else{
        document.querySelector('.header').classList.remove('active');
        document.getElementById("logorenk").style.color = "#fff";
    }
};

/*  urunler  */
  $('.tab-content').hide();
  $('#tab-1').show();
  
  $('#select-box').change(function () {
     dropdown = $('#select-box').val();
    $('.tab-content').hide();
    $('#' + "tab-" + dropdown).show();                                    
  });





/*  Urunler sepete ekleme   */



// Diğer Projeler de kullanilabilir SILME

/*
$('.addToCartBtn').click(function(){

  var eleman = $(this);
  var productid = eleman.data("productid");
  $.ajax({
    type: "POST",
    url: "lib/cart_db.php",
    data: {"productid":productid},
    dataType: "json",
    success: function(cevap){
      if (cevap.hata=="yok"){
        console.log(cevap.id);
        console.log("hatalı sonuç");
      } else {
        console.log(cevap);
        console.log("hata yok");
      }
    }
  });

})
*/


/* ------------------  MUTFAK  ------------------ */

$(document).ready(function(){

  $(".addToCartBtn").click(function(){
    
    var url="lib/cart_db.php";
    var data = {
      p : "addToCart",
      product_id : $(this).attr("productid"),
    }
    $.post(url, data, function(response){
      console.log(response);
    })

  })


  $(".removeFromCartBtn").click(function(){
    
    var url="lib/cart_db.php";
    var data = {
      p : "removeFromCart",
      product_id : $(this).attr("productid"),
    }
    $.post(url, data, function(response){

      window.location.reload();

    })

  })



})

/* ------------------  OBJE  ------------------ */

$(document).ready(function(){

  $(".addToCartBtnn").click(function(){
    
    var url="lib/cart_db.php";
    var data = {
      pt : "addToCart",
      product_id : $(this).attr("productid"),
    }
    $.post(url, data, function(response){
      console.log(response);
    })

  })


  $(".removeFromCartBtnn").click(function(){
    
    var url="lib/cart_db.php";
    var data = {
      pt : "removeFromCart",
      product_id : $(this).attr("productid"),
    }
    $.post(url, data, function(response){

      window.location.reload();

    })

  })



})

/* ------------------  İPEK  ------------------ */

$(document).ready(function(){

  $(".addToCartBtnnn").click(function(){
    
    var url="lib/cart_db.php";
    var data = {
      ptk : "addToCart",
      product_id : $(this).attr("productid"),
    }
    $.post(url, data, function(response){
      console.log(response);
    })

  })


  $(".removeFromCartBtn").click(function(){
    
    var url="lib/cart_db.php";
    var data = {
      ptk : "removeFromCart",
      product_id : $(this).attr("productid"),
    }
    $.post(url, data, function(response){

      window.location.reload();

    })

  })



})

/* ------------------  KETEN  ------------------ */

$(document).ready(function(){

  $(".addToCartBtnnnn").click(function(){
    
    var url="lib/cart_db.php";
    var data = {
      ptt : "addToCart",
      product_id : $(this).attr("productid"),
    }
    $.post(url, data, function(response){
      console.log(response);
    })

  })


  $(".removeFromCartBtn").click(function(){
    
    var url="lib/cart_db.php";
    var data = {
      ptt : "removeFromCart",
      product_id : $(this).attr("productid"),
    }
    $.post(url, data, function(response){

      window.location.reload();

    })

  })



})

/*  #Urunler sepete ekleme   */