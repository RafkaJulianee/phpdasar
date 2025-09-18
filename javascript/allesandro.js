// ===============================
// 1. Bikin "cetak biru" manusia
// ===============================
class Manusia {
  // constructor = tukang bikin (kayak pabrik)
  constructor(nama, umur) {
    this.nama = nama; // property = identitas, ibarat KTP: ada nama
    this.umur = umur; // property = identitas lain, umur
  }

  // method = kemampuan / aksi manusia
  sapa() {
    console.log(`Halo, namaku ${this.nama}, umurku ${this.umur} tahun`);
    // kayak orang beneran bisa ngomong
  }
}

// ===============================
// 2. Bikin "object manusia nyata"
// ===============================
const orang1 = new Manusia("Rafka", 17); 
// ibarat pabrik bikin manusia dengan nama Rafka, umur 17

const orang2 = new Manusia("Budi", 18);
// bikin manusia lain dengan nama Budi, umur 18

// ===============================
// 3. Gunakan kemampuan object
// ===============================
orang1.sapa(); 
// Output: Halo, namaku Rafka, umurku 17 tahun
// ibarat Rafka beneran ngomong

orang2.sapa(); 
// Output: Halo, namaku Budi, umurku 18 tahun
// ibarat Budi beneran ngomong
