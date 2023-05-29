// untuk form send wa
function wa() {
  let nama = document.getElementById("nama").value;
  let email = document.getElementById("email").value;
  let pesan = document.getElementById("pesan").value;

  let waUrl = "https://wa.me/6283851744849/?text=" + "Nama : " + nama + "%0a" + "Email : " + email + "%0a" + "Pesan : " + pesan;

  if (nama == "" || email == "" || pesan == "") {
    window.alert("Silahkan lengkapi form terlebih dahulu");
  } else {
    window.open(waUrl);
    document.getElementById("nama").value = "";
    document.getElementById("email").value = "";
    document.getElementById("pesan").value = "";
  }
}
