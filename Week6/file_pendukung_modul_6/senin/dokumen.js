submit = document.getElementsByTagName("button")[0];
hapus = document.getElementsByTagName("button")[1];
submit.addEventListener("click", enter);
hapus.addEventListener("click", clear);

function enter() {
  namaPengirim = document.getElementsByTagName("input")[0]; // pengirim
  isiChat = document.getElementsByTagName("textarea")[0]; // isi chat
  console.log(namaPengirim.value);
  if (namaPengirim.value.length == 0 | isiChat.value.length == 0) {
    alert("Maaf Anda perlu mengisi semua kolom");
  } else {
    send();
  }
}

function send() {
  chatBoxBesar = document.createElement("div");
  chatBox = document.createElement("div"); // div baru
  anchor = document.createElement("a");
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
  chatBox.appendChild(spasi)
  chatBox.appendChild(anakTxtChat);
  chatBox.appendChild(spasidua);
  // append ke chatBoxBesar
  // append chatbox
  rumah = document.getElementById("chatbox");
  rumah.prepend(chatBox);
}

function clear() {
  var el = document.getElementById('chatbox');
  while (el.firstChild) el.removeChild(el.firstChild);
}
