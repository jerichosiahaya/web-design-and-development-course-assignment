window.onload = function() { fungsiSaya(); }

function fungsiSaya() {

	/* DI BAWAH INI MERUPAKAN CONTOH PENGGUNAAN DOCUMENT OBJECT MODEL (DOM) */
	a = document.getElementsByTagName("title")[0].firstChild;
	a.nodeValue = "UMN";

	b = document.getElementById("footer").getElementsByTagName("p")[0].firstChild;
	b.nodeValue = "&copy;2019 UMN Students";

	document.getElementById("intro").innerHTML = "Selamat datang di Universitas Multimedia Nusantara, Kampus Lokal dengan Kualitas Internasional";
	document.getElementsByClassName("title")[0].innerHTML = "<a href='#'>Jurusan Sistem Informasi</a>";
	document.getElementsByClassName("title")[1].innerHTML = "<a href='#'>Jurusan Teknik Informatika</a>";

	document.getElementsByClassName("post-attachment")[0].src = "images/jurusan_si.jpg";
	document.getElementsByClassName("post-attachment")[1].src = "images/jurusan_ti.jpg";

	document.getElementsByClassName("post")[0].getElementsByTagName("p")[0].innerHTML = "Jurusan ini mempelajari tentang bagaimana membangun dan menerapkan teknologi informasi dengan proses bisnis yang ada saat ini, sehingga suatu bisnis akan dapat dengan efektif mencapai tujuannya dengan menerapkan IT dalam bisnis.";
	document.getElementsByClassName("post")[0].getElementsByTagName("p")[1].innerHTML = null;
	document.getElementsByClassName("post")[1].getElementsByTagName("p")[0].innerHTML = "Jurusan ini mempelajari tentang bagaimana mengembangkan computer vision, robotica, intelligence system, dan hal-hal lainnya yang terkait dengan pengembangan komputer di masa yang akan datang.";
	document.getElementsByClassName("post")[1].getElementsByTagName("p")[1].innerHTML = null;

	document.getElementsByClassName("sidebox")[0].getElementsByTagName("h5")[0].innerHTML = "<h5>Pencarian</h5>";
	document.getElementsByClassName("sidebox")[1].getElementsByTagName("h5")[0].innerHTML = "<h5>Jurusan</h5>";

	document.getElementsByClassName("list")[0].getElementsByTagName("a")[0].innerHTML = "Sistem Informasi";
	document.getElementsByClassName("list")[0].getElementsByTagName("a")[1].innerHTML = "Teknik Informatika";
	document.getElementsByClassName("list")[0].getElementsByTagName("a")[2].innerHTML = "Ilmu Komunikasi";

	var one = document.createElement("li");
	var two = document.createElement("li");
	var three = document.createElement("li");
	one.appendChild(document.createTextNode("Akuntansi"));
	two.appendChild(document.createTextNode("Manajemen"));
	three.appendChild(document.createTextNode("Broadcasting"));
	document.getElementsByClassName("list")[0].appendChild(one);
	document.getElementsByClassName("list")[0].appendChild(two);
	document.getElementsByClassName("list")[0].appendChild(three);

	document.getElementsByClassName("sidebox")[2].getElementsByTagName("h5")[0].innerHTML = "<h5>Lowongan Pekerjaan</h5>";
	document.getElementsByClassName("tag-list")[0].getElementsByTagName("a")[0].innerHTML = "Programmer";
	document.getElementsByClassName("tag-list")[0].getElementsByTagName("a")[1].innerHTML = "Designer";
	document.getElementsByClassName("tag-list")[0].getElementsByTagName("a")[2].innerHTML = "Konsultan";
	document.getElementsByClassName("tag-list")[0].getElementsByTagName("a")[3].innerHTML = "Analyst";

	document.getElementsByClassName("sidebox")[3].getElementsByTagName("h5")[0].innerHTML = "<h5>UMN</h5>";
	document.getElementsByClassName("sidebox")[3].getElementsByTagName("p")[0].innerHTML = "UMN adalah kampus terbaik di Tangerang. Ayo bergabung dengan keluarga besar UMN.";
	document.getElementsByClassName("sidebox")[3].getElementsByTagName("p")[1].innerHTML = null;

	/* TULISKAN SCRIPT ANDA DI SINI */
	var home = document.getElementById("menu").getElementsByTagName("a")[0].firstChild;
	home.nodeValue = "Utama";

	// tanpa variable
	document.getElementById('menu').getElementsByTagName('a')[1].firstChild.nodeValue = "Prodi";
	document.getElementById('menu').getElementsByTagName('a')[2].firstChild.nodeValue = "Akademis";
	document.getElementById('menu').getElementsByTagName('a')[3].firstChild.nodeValue = "Beasiswa";
	document.getElementById('menu').getElementsByTagName('a')[4].firstChild.nodeValue = "Kegiatan";
	document.getElementById('menu').getElementsByTagName('a')[5].firstChild.nodeValue = "Berita";

	// bikin slot dulu untuk list baru diappend sama ul
	var list = document.createElement('li');
	var ul = document.getElementsByTagName("ul")[0];
	ul.append(list);

	// bikin anchor yang diappend sama slot list baru
	var anchor = document.createElement('a');
	var text = document.createTextNode('Kontak');
	anchor.setAttribute('href', "#");
	anchor.appendChild(text);
	document.getElementById("menu").getElementsByTagName('li')[6].append(anchor);

}
