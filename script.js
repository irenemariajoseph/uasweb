window.onload = function () {
    // your code
    let loginForm = document.querySelector('.login-form');

    document.querySelector('#login-btn').onclick = () => {
        loginForm.classList.toggle('active');
        shoppingCart.classList.remove('active');
        navbar.classList.remove('active');
    }


    let shoppingCart = document.querySelector('.shopping-cart');

    document.querySelector('#shop-btn').onclick = () => {
        shoppingCart.classList.toggle('active');
        navbar.classList.remove('active');
        loginForm.classList.remove('active');

    }

    let navbar = document.querySelector('.navbar');

    document.querySelector('#menu-btn').onclick = () => {
        navbar.classList.toggle('active');
        shoppingCart.classList.remove('active');
        loginForm.classList.remove('active');
    }
};

function equalsIgnoringCase(text, other) {
    return text.localeCompare(other, undefined, { sensitivity: 'base' }) === 0;
}

function simulate() {
    // var waktu1;
    // var waktu2;
    // var waktu3;
    // var waktu4;
    // var hasiljam;
    //
    // var jenisProduk = document.getElementById("jenisproduk").value;
    // var ukuran = document.getElementById("ukuran").value;
    // var jenisKertas = document.getElementById("jeniskertas").value;
    // var jumlahCetakan = document.getElementById("jumlahcetakan").value;
    //
    // switch (jenisProduk) {
    //   case "paper":
    //     waktu1 = waktu1 + 1;
    //     break;
    //   case "sticker":
    //     waktu1 = waktu1 + 1;
    //     break;
    //   case "largeformat":
    //     waktu1 = waktu1 + 1;
    //     break;
    //   case "product":
    //     waktu1 = waktu1 + 1;
    //     break;
    //   default:
    //     waktu1 = 0;
    //     break;
    // }
    //
    // switch (jenisKertas) {
    //   case "art paper":
    //     waktu2 = waktu2 + 1;
    //     break;
    //   case "art cartoon":
    //     waktu2 = waktu2 + 2;
    //     break;
    //   case "hvs":
    //     waktu2 = waktu2 + 3;
    //     break;
    //   case "bw cartoon":
    //     waktu2 = waktu2 + 4;
    //     break;
    //   case "linen jepang":
    //     waktu2 = waktu2 + 5;
    //     break;
    //   default:
    //     waktu2 = 0;
    //     break;
    // }
    //
    // switch (ukuran) {
    //   case "a1":
    //     waktu3 = waktu3 + 1;
    //     break;
    //   case "a2":
    //     waktu3 = waktu3 + 2;
    //     break;
    //   case "a3":
    //     waktu3 = waktu3 + 3;
    //     break;
    //   case "a4":
    //     waktu3 = waktu3 + 4;
    //     break;
    //   case "a5":
    //     waktu3 = waktu3 + 5;
    //     break;
    //   default:
    //     waktu3 = 0;
    //     break;
    // }
    //
    // if (jumlahCetakan >= 50){
    //   waktu4 = 1;
    // } else {
    //   waktu4 = 0;
    // }

    // hasiljam = waktu1 + waktu2 + waktu3 + waktu4;

    var hasiljam = 12;

    var elemName = document.createElement("p");
    elemName.innerHTML = "<h1>Your Product Would Be Done In</h1><u><b><h2>" + hasiljam + " hours</h2></b></u><img class=img-simulate src=images/simulateit.png>";
    document.getElementById("resulthours").appendChild(elemName);

}
