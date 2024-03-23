function convertion() {
    let dollar = document.getElementById("dollar").value
    let konversi = document.getElementById("konversi")
    
    let nilaiTukar = 14650
    let hasil = (dollar * nilaiTukar)
    konversi.innerHTML = hasil
}

function calculate() {
    let num1 = document.getElementById("num1").value
    let num2 = document.getElementById("num2").value
    let numInt1 = parseInt(num1)
    let numInt2 = parseInt(num2)
    let result = numInt1 + numInt2
    
    let hasilPerhitungan = document.querySelector('#result')
    hasilPerhitungan.innerHTML = result
}
