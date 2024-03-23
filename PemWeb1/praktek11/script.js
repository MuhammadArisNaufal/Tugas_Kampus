function hitung() {
    let jarijari = document.getElementById("jariJari").value

    let hasilLuas = document.getElementById("hasilLuas")
    let hasilKeliling = document.getElementById("hasilKeliling")

    let hasilLuasLingkaran = 3.14 * jarijari**2
    let hasilKelilingLingkaran = 2 * 3.14 * jarijari

    hasilLuas.innerHTML = hasilLuasLingkaran
    console.log(hasilKelilingLingkaran)
    hasilKeliling.innerHTML = hasilKelilingLingkaran
    
}


function parkirfee() {
    let feeMasuk = document.getElementById("Masuk").value
    let feeKeluar = document.getElementById("Keluar").value

    let hasildurasi = document.getElementById("hasilDurasi")
    let hasilbiaya = document.getElementById("hasilBiaya")

    let durasi = feeKeluar - feeMasuk
    let biaya = 3000

    if (durasi>2){
        biaya += (durasi-2) *1000
    }

    console.log (biaya)

    hasilbiaya.innerHTML = biaya
    hasildurasi.innerHTML = durasi
    
}