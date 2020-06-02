/* wrapper div */
divSatu = document.getElementById("wrapper");
textNama = document.createElement("p");
textNama.textContent = "Nama:";
divSatu.appendChild(textNama);

/* buat kolom nama */
var nama = document.createElement("input");
nama.setAttribute("type", "text");
nama.setAttribute("name", "iptNama");
nama.setAttribute("placeholder", "Masukkan nama...");
divSatu.appendChild(nama);

/* buat satu paragraf */
var txtChat = document.createElement("p");
txtChat.textContent = "Chat:";
divSatu.appendChild(txtChat);

/* kolom chat */
var chat = document.createElement("textarea");
chat.setAttribute("name", "Text1");
chat.setAttribute("placeholder", "Tulis chat...");
chat.setAttribute("rows", "5");
divSatu.appendChild(chat);

/* button send */
var sendBtn = document.createElement("button");
sendBtn.setAttribute("type", "button");
sendBtn.setAttribute("name", "buttonSend");
sendBtn.textContent = "SEND";
divSatu.appendChild(sendBtn);

/* button clear */
var clearBtn = document.createElement("button");
clearBtn.setAttribute("type", "button");
clearBtn.setAttribute("name", "buttonClear");
clearBtn.textContent = "CLEAR!";
divSatu.appendChild(clearBtn);

clearBtn.style.marginLeft = "10px";

submit = document.getElementsByTagName("button")[0];
hapus = document.getElementsByTagName("button")[1];
kolomNama = document.getElementsByTagName("input")[0];
kolomChat = document.getElementsByTagName("textarea")[0];
submit.addEventListener("click", enter); // untuk tambah chat
hapus.addEventListener("click", clear); // untuk hapus chat
kolomNama.addEventListener("keydown", klikEnter); // untuk submit pake enter
kolomChat.addEventListener("keydown", klikEnter); // untuk submit pake enter

function klikEnter(klik) {
  if (klik.keyCode == 13) {
    enter();
  }
}

function enter() {
  namaPengirim = document.getElementsByTagName("input")[0]; // pengirim
  isiChat = document.getElementsByTagName("textarea")[0]; // isi chat
  console.log(namaPengirim.value);
  if ((namaPengirim.value.length == 0) | (isiChat.value.length == 0)) {
    alert("Maaf Anda perlu mengisi semua kolom");
  } else {
    send();
  }
}

function send() {
  chatBoxBesar = document.createElement("div"); // div baru lagi
  chatBox = document.createElement("div"); // div baru
  anchor = document.createElement("a"); // anchor utk underline
  spasi = document.createElement("br"); // element baru
  spasidua = document.createElement("br"); // element baru (lagi hehe)
  namaPengirim = document.getElementsByTagName("input")[0]; // pengirim
  isiChat = document.getElementsByTagName("textarea")[0]; // isi chat
  // txt node
  txtNama = namaPengirim.value;
  txtChat = isiChat.value;
  anakTxtNama = document.createTextNode(txtNama);
  anakTxtChat = document.createTextNode(txtChat);
  anchor.appendChild(anakTxtNama);
  // append div baru
  chatBox.appendChild(anchor);
  chatBox.appendChild(spasi);
  chatBox.appendChild(anakTxtChat);
  chatBox.appendChild(spasidua);
  // append ke chatBoxBesar
  // append chatbox
  rumah = document.getElementById("chatbox");
  rumah.prepend(chatBox);
}

function clear() {
  var el = document.getElementById("chatbox");
  while (el.firstChild) el.removeChild(el.firstChild);
}

/**
 __          __                       _          _____
 \ \        / /                      | |        / ____|
  \ \  /\  / /_ _ ___ _ __   __ _  __| | __ _  | |     ___  _ __ ___  _ __   __ _
   \ \/  \/ / _` / __| '_ \ / _` |/ _` |/ _` | | |    / _ \| '__/ _ \| '_ \ / _` |
    \  /\  / (_| \__ \ |_) | (_| | (_| | (_| | | |___| (_) | | | (_) | | | | (_| |
     \/  \/ \__,_|___/ .__/ \__,_|\__,_|\__,_|  \_____\___/|_|  \___/|_| |_|\__,_|
                     | |
                     |_|
*/