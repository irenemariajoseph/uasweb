window.onload = function () {
  // your code
  let loginForm = document.querySelector('.login-form');

  document.querySelector('#login-btn').onclick = () => {
    loginForm.classList.toggle('active');
    registform.classList.remove('active');
    navbar.classList.remove('active');
    forgetpass.classList.remove('active');
    shoppingCart.classList.remove('active');
  }

  let shoppingCart = document.querySelector('.shopping-cart');

  document.querySelector('#shop-btn').onclick = () => {
    shoppingCart.classList.toggle('active');
    loginForm.classList.remove('active');
    registform.classList.remove('active');
    navbar.classList.remove('active');
    forgetpass.classList.remove('active');

  }

  let navbar = document.querySelector('.navbar');

  document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
  }

  let registform = document.querySelector('.regist-form');

  document.querySelector('#regist-btn').onclick = () => {
    loginForm.classList.remove('active');
    registform.classList.toggle('active');
    navbar.classList.remove('active');
    shoppingCart.classList.remove('active');
    forgetpass.classList.remove('active');

  }
  document.querySelector('#login-regist-btn').onclick = () => {
    registform.classList.remove('active');
    loginForm.classList.toggle('active');
    navbar.classList.remove('active');
    forgetpass.classList.remove('active');
    shoppingCart.classList.remove('active');


  }

  let forgetpass = document.querySelector('.forget-form');

  document.querySelector('#forget-btn').onclick = () => {
    registform.classList.remove('active');
    loginForm.classList.remove('active');
    forgetpass.classList.toggle('active');
    navbar.classList.remove('active');
    shoppingCart.classList.remove('active');
  }

};

function equalsIgnoringCase(text, other) {
  return text.localeCompare(other, undefined, {
    sensitivity: 'base'
  }) === 0;
}

function clearhistory() {
  var chatfill = document.getElementById("simulate-result");
  chatfill.remove();
}

function simulate() {
  let run = 0;

  var waktu1 = 0;
  var waktu2 = 0;
  var waktu3 = 0;
  var waktu4 = 0;
  var hasiljam = 0;

  const arrJenisProduk = ["paper","sticker","largeformat","product"];
  const arrUkuran = ["a4","f4","4r","small","large"];
  const arrJenisKertas = ["matte","glossy"];

  var jenisProduk = document.getElementById("jenisproduk").value;
  var ukuran = document.getElementById("ukuran").value;
  var jenisKertas = document.getElementById("jeniskertas").value;
  var jumlahCetakan = document.getElementById("jumlahcetakan").value;

  if (arrJenisProduk.indexOf(jenisProduk) < 0){
    window.alert("Produk yang anda masukkan tidak ada");
  } else {
    run = run + 1;
    switch (jenisProduk) {
      case "paper":
        waktu1 = waktu1 + 1;
        break;
      case "sticker":
        waktu1 = waktu1 + 1;
        break;
      case "largeformat":
        waktu1 = waktu1 + 3;
        break;
      case "product":
        waktu1 = waktu1 + 4;
        break;
      default:
        waktu2 = 0;
        break;
    }
  }

  if (arrJenisKertas.indexOf(jenisKertas) < 0){
    window.alert("Kertas yang anda masukkan tidak ada");
  } else {
    run = run + 1;
    switch (jenisKertas) {
      case "matte":
        waktu2 = waktu2 + 2;
        break;
      case "glossy":
        waktu2 = waktu2 + 3;
        break;
      default:
        waktu2 = 0;
        break;
    }
  }

  if (arrUkuran.indexOf(ukuran) < 0){
    window.alert("Ukuran yang anda masukkan tidak ada");
  } else {
    run = run + 1;
    switch (ukuran) {
      case "a4":
        waktu3 = waktu3 + 2;
        break;
      case "f4":
        waktu3 = waktu3 + 3;
        break;
      case "4r":
        waktu3 = waktu3 + 3;
        break;
      case "small":
        waktu3 = waktu3 + 2;
        break;
      case "large":
        waktu3 = waktu3 + 4;
        break;
      default:
        waktu3 = 0;
        break;
    }
  }




  if (jumlahCetakan == 0) {
    window.alert("Masukkan jumlah cetakan");
  } else if (jumlahCetakan <= 50){
    run = run + 1;
    waktu4 = 1;
  } else if (jumlahCetakan <= 100){
    run = run + 1;
    waktu4 = 2;
  } else if (jumlahCetakan <= 500){
    run = run + 1;
    waktu4 = 4;
  }

  if (run == 4){
    hasiljam = waktu1 + waktu2 + waktu3 + waktu4;

    var elemName = document.createElement("div");
    elemName.innerHTML = "<div id = simulate-result><h1>Your Product Would Be Done In</h1><u><b><h2>" + hasiljam + " hours</h2></b></u><img class=img-simulate src=images/simulateit.png> <br> <br> <div class=produkbutton> <button type=button onclick= clearhistory()>I understand</button> </div>";
    document.getElementById("resulthours").appendChild(elemName);
  }
}

// Script for formregist.php
function verifikasiData(event) {
  if (document.getElementById("pwd").value == "") {
    alert("Password empty, please enter the password!");
    event.preventDefault();
  } else if (document.getElementById("pwd").value.length < 8) {
    alert("Password too short, please create another password!");
    event.preventDefault();
  } else if (document.getElementById("pwd").value.length > 15) {
    alert("Password too long, please create another password!");
    event.preventDefault();
  } else if (document.getElementById("telp").value == "") {
    alert("Phone number is empty, please enter the phone number!");
    event.preventDefault();
  } else if (document.getElementById("telp").value.length < 12) {
    alert("Phone number too short, please enter another phone number!");
    event.preventDefault();
  } else if (document.getElementById("telp").value.length > 13) {
    alert("Phone number too long, please enter another phone number!");
    event.preventDefault();
  } else {
    return true;
  }
}

// Script for checkout.php
function checkingOut(event) {
  if (document.getElementById("notelp").value == "") {
    alert("Phone number is empty, please enter the phone number!");
    event.preventDefault();
  } else if (document.getElementById("notelp").value.length < 12) {
    alert("Phone number too short, please enter another phone number!");
    event.preventDefault();
  } else if (document.getElementById("notelp").value.length > 13) {
    alert("Phone number too long, please enter another phone number!");
    event.preventDefault();
  } else {
    return true;
  }
}

// Script for show_cart.php
function validateCO(event) {
  var element = (parseInt(document.getElementById("subTotal").innerText));
  if (element == 0) {
    alert("Cart Empty");
    event.preventDefault();
  } else { //success story
    location.href = 'checkout.php';
  }
}

// Script for formchangepw.php and forget_pass.php
function validChangePW(event) {
  if (document.getElementById("new_pwd").value == "") {
    alert("Password empty, please enter the password!");
    event.preventDefault();
  } else if (document.getElementById("new_pwd").value.length < 8) {
    alert("Password too short, please create another password!");
    event.preventDefault();
  } else if (document.getElementById("new_pwd").value.length > 15) {
    alert("Password too long, please create another password!");
    event.preventDefault();
  } else {
    return true;
  }
}