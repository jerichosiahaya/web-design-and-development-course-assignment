alert("Mari bermain tebak Angka");
var randomNumber = Math.floor(Math.random()*100+1);
var input = prompt("Tebak angka antara 0-100:");
  if (randomNumber == input) {
    alert("Makasih ya udah nyobain!");
    document.write("<p> PAS BANGET Tebakan kamu "+input+".</p>");
    document.write("<p> <img src='https://media1.tenor.com/images/ebeaabcec83f91ed26ffc14a91e38282/tenor.gif?itemid=5583481' alt='Okay'></p>");
  }
  else if (input < randomNumber) {
    alert("terlalu kecil");
    guessNumber();

  }
  else {
    alert("terlalu besar");
    document.write("<p>"+input+" terlalu besar. </p>");
    guessNumber();
  }

function guessNumber() {
  var randomNumber = Math.floor(Math.random()*100+1);
  var input = prompt("Tebak lagi?");
  if (randomNumber == input) {
    alert("Makasih ya udah nyobain!");
    document.write("<p> PAS BANGET Tebakan kamu "+input+".</p>");
    document.write("<p> <img src='https://media1.tenor.com/images/ebeaabcec83f91ed26ffc14a91e38282/tenor.gif?itemid=5583481' alt='Okay'></p>");
  }
  else if (input < randomNumber) {
    alert("terlalu kecil");
    document.write("<p>"+input+" terlalu kecil. </p>");
    guessNumber();
  }
  else {
    alert("terlalu besar");
    document.write("<p>"+input+" terlalu besar. </p>");
    guessNumber();
  }
}
