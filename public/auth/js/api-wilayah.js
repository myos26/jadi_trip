const prov = document.getElementById('provinsi');
const kab = document.getElementById('kabupaten');
const kec = document.getElementById('kecamatan');
const desa = document.getElementById('desa');

// provinsi saat ini
fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/provinces.json`)
.then(response => response.json())
.then(regencies => {
    for (const value in regencies) {
        if (Object.hasOwnProperty.call(regencies, value)) {
            const element = regencies[value];
                // membuat element option provinsi
                const opt = document.createElement('option');
                const text = document.createTextNode(element.name);
                opt.appendChild(text);
                opt.value = element.id;
                prov.appendChild(opt);
        }
    }
});

// handle data provinsi
prov.addEventListener('change', function() {
  if (prov.value != "") {
      kab.disabled = false;

      // mereset semua elemen option di dalam select dengan id kabupaten
      while (kab.lastElementChild) {
          kab.removeChild(kab.lastElementChild);
      }

      // membuat element option kabupaten
      const optKab = document.createElement('option');
      const textKab = document.createTextNode('Kabupaten/Kota');
      optKab.appendChild(textKab);
      optKab.value = "";
      kab.appendChild(optKab);

      // mereset semua elemen option dalam select dengan id kecamatan
      while (kec.lastElementChild) {
        kec.removeChild(kec.lastElementChild);
      }

      const optKec = document.createElement('option');
      const textKec = document.createTextNode('Kecamatan');
      optKec.appendChild(textKec);
      optKec.value = "";
      kec.appendChild(optKec);

    // mereset semua elemen option di dalam select dengan id desa
    while (desa.lastElementChild) {
      desa.removeChild(desa.lastElementChild);
    }

    const optKota = document.createElement('option');
    const textKota = document.createTextNode('Kelurahan/Desa');
    optKota.appendChild(textKota);
    optKota.value = "";
    desa.appendChild(optKota);

      // mengambil semua data kabuaten
      fetch(`https://Bayik4.github.io/api-wilayah-indonesia/api/regencies/${prov.value}.json`)
          .then(response => response.json())
          .then(regencies => {
              for (const value in regencies) {
                  if (Object.hasOwnProperty.call(regencies, value)) {
                      const element = regencies[value];

                      // membuat element option kabupaten
                      const opt = document.createElement('option');
                      const text = document.createTextNode(element.name);
                      opt.appendChild(text);
                      opt.value = element.id;
                      kab.appendChild(opt);

                      //console.log(element.id, element.name);
                  }
              }
          });
  } else {
      // menghapus semua elemen option dalam select dengan id kabupaten
      while (kab.lastElementChild) {
          kab.removeChild(kab.lastElementChild);
      }

      const optKab = document.createElement('option');
      const textKab = document.createTextNode('Kabupaten/Kota');
      optKab.appendChild(textKab);
      optKab.value = "";
      kab.appendChild(optKab);

      kab.disabled = true;
      kab.selectedIndex = 0;

      kec.disabled = true;
      kec.selectedIndex = 0;

      desa.disabled = true;
      desa.selectedIndex = 0;
  }
});

// handle data kabupaten
kab.addEventListener('change', function() {
  if (kab.value != "") {
      kec.disabled = false;

      // mereset semua elemen option dalam select dengan id kecamatan
      while (kec.lastElementChild) {
          kec.removeChild(kec.lastElementChild);
      }

      const optKec = document.createElement('option');
      const textKec = document.createTextNode('Kecamatan');
      optKec.appendChild(textKec);
      optKec.value = "";
      kec.appendChild(optKec);

      // mereset semua elemen option di dalam select dengan id desa
      while (desa.lastElementChild) {
        desa.removeChild(desa.lastElementChild);
      }

      const optKota = document.createElement('option');
      const textKota = document.createTextNode('Kelurahan/Desa');
      optKota.appendChild(textKota);
      optKota.value = "";
      desa.appendChild(optKota);

      fetch(`https://Bayik4.github.io/api-wilayah-indonesia/api/districts/${kab.value}.json`)
          .then(response => response.json())
          .then(districts => {
              for (const key in districts) {
                  if (Object.hasOwnProperty.call(districts, key)) {
                      const element = districts[key];

                      // membuat element option kecamatan
                      const opt = document.createElement('option');
                      const text = document.createTextNode(element.name);
                      opt.appendChild(text);
                      opt.value = element.id;
                      kec.appendChild(opt);
                  }
              }
          });
  } else {
      // menghapus semua elemen option dalam select dengan id kecamatan
      while (kec.lastElementChild) {
          kec.removeChild(kec.lastElementChild);
      }

      const optKec = document.createElement('option');
      const textKec = document.createTextNode('Kecamatan');
      optKec.appendChild(textKec);
      optKec.value = "";
      kec.appendChild(optKec);

      kec.disabled = true;
      kec.selectedIndex = 0;

      desa.disabled = true;
      desa.selectedIndex = 0;
  }
});

// handle data kecamatan
kec.addEventListener('change', function() {
  if (kec.value != "") {
      desa.disabled = false;

      // mereset semua elemen option di dalam select dengan id desa
      while (desa.lastElementChild) {
          desa.removeChild(desa.lastElementChild);
      }

      const optKota = document.createElement('option');
      const textKota = document.createTextNode('Kelurahan/Desa');
      optKota.appendChild(textKota);
      optKota.value = "";
      desa.appendChild(optKota);

      fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kec.value}.json`)
          .then(response => response.json())
          .then(villages => {
              for (const key in villages) {
                  if (Object.hasOwnProperty.call(villages, key)) {
                      const element = villages[key];

                      // membuat element option desa
                      const opt = document.createElement('option');
                      const text = document.createTextNode(element.name);
                      opt.appendChild(text);
                      opt.value = element.id;
                      desa.appendChild(opt);
                  }
              }
          });
  } else {
      // menghapus semua elemen option dalam select dengan id desa
      while (desa.lastElementChild) {
          desa.removeChild(desa.lastElementChild);
      }

      const optKota = document.createElement('option');
      const textKota = document.createTextNode('Kelurahan/Desa');
      optKota.appendChild(textKota);
      optKota.value = "";
      desa.appendChild(optKota);

      desa.disabled = true;
      desa.selectedIndex = 0;
  }
});