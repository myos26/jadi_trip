const user = document.querySelector('#username');
const nohp = document.querySelector('#nohp');
const prov = document.querySelector('#provinsi');
const kab = document.querySelector('#kabupaten');
const kec = document.querySelector('#kecamatan');
const des = document.querySelector('#desa');
const pro = document.querySelector('#foto_profile');

let isHapus = false;

const hapus_photo = () => {
    isHapus = true;
    document.querySelector('#img').setAttribute('src', 'profile/images/noprofile.png')
}

window.onload = () => {

    // provinsi saat ini
    fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/provinces.json`)
        .then(response => response.json())
        .then(regencies => {
            for (const value in regencies) {
                if (Object.hasOwnProperty.call(regencies, value)) {
                    const element = regencies[value];

                    if (element.id == document.querySelector('#inprov').value) {
                        document.querySelector('#labelProv2').innerHTML = element.name
                    }
                }
            }
        });

    fetch(
            `https://bayik4.github.io/api-wilayah-indonesia/api/regencies/${document.querySelector('#inprov').value}.json`
        )
        .then(response => response.json())
        .then(regencies => {
            for (const value in regencies) {
                if (Object.hasOwnProperty.call(regencies, value)) {
                    const element = regencies[value];

                    if (element.id == document.querySelector('#inkab').value) {
                        document.querySelector('#labelKab2').innerHTML = element.name
                    }

                }
            }
        });

    // ID KABUPATEN
    fetch(
            `https://bayik4.github.io/api-wilayah-indonesia/api/districts/${document.querySelector('#inkab').value}.json`
        )
        .then(response => response.json())
        .then(districts => {
            for (const value in districts) {
                if (Object.hasOwnProperty.call(districts, value)) {
                    const element = districts[value];

                    if (element.id == document.querySelector('#inkec').value) {
                        document.querySelector('#labelKec2').innerHTML = element.name
                    }
                }
            }
        });

    // ID Kecamatan
    fetch(
            `https://bayik4.github.io/api-wilayah-indonesia/api/villages/${document.querySelector('#inkec').value}.json`
        )
        .then(response => response.json())
        .then(villages => {
            for (const value in villages) {
                if (Object.hasOwnProperty.call(villages, value)) {
                    const element = villages[value];

                    if (element.id == document.querySelector('#indes').value) {
                        document.querySelector('#labelDes2').innerHTML = element.name
                    }
                }
            }
        });

}


const edit = () => {
    // button simpan
    document.querySelector('#btn-simpan').style.display = 'block'

    // button edit
    document.querySelector('#btn-edit').style.display = 'none'

    // button hapus profile
    document.querySelector('#hapus_profile').style.display = 'block'

    // label user
    document.querySelector('#labelUser').style.display = 'block'
    document.querySelector('#labelUser2').style.display = 'none'
    // label nohp
    document.querySelector('#labelNohp').style.display = 'block'
    document.querySelector('#labelNohp2').style.display = 'none'
    // label provinsi
    document.querySelector('#labelProv').style.display = 'block'
    document.querySelector('#labelProv2').style.display = 'none'
    // label kabupaten
    document.querySelector('#labelKab').style.display = 'block'
    document.querySelector('#labelKab2').style.display = 'none'
    // label kecamatan
    document.querySelector('#labelKec').style.display = 'block'
    document.querySelector('#labelKec2').style.display = 'none'
    // label desa
    document.querySelector('#labelDes').style.display = 'block'
    document.querySelector('#labelDes2').style.display = 'none'
    // input foto
    pro.style.display = 'block'

    if (document.querySelector('#inprov').value != '') {
        // mereset semua elemen option di dalam select dengan id provinsi
        while (prov.lastElementChild) {
            prov.removeChild(prov.lastElementChild);
        }

        // mereset semua elemen option di dalam select dengan id kabupaten
        while (kab.lastElementChild) {
            kab.removeChild(kab.lastElementChild);
        }

        // mereset semua elemen option dalam select dengan id kecamatan
        while (kec.lastElementChild) {
            kec.removeChild(kec.lastElementChild);
        }

        // mereset semua elemen option di dalam select dengan id desa
        while (des.lastElementChild) {
            des.removeChild(des.lastElementChild);
        }

        // provinsi saat ini
        fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/provinces.json`)
            .then(response => response.json())
            .then(regencies => {
                for (const value in regencies) {
                    if (Object.hasOwnProperty.call(regencies, value)) {
                        const element = regencies[value];

                        if (element.id == document.querySelector('#inprov').value) {
                            // membuat element option provinsi
                            const opt = document.createElement('option');
                            const text = document.createTextNode(element.name);
                            opt.appendChild(text);
                            opt.value = element.id;
                            prov.appendChild(opt);
                        }
                    }
                }
            });

        // kabupaten saat ini
        fetch(
                `https://bayik4.github.io/api-wilayah-indonesia/api/regencies/${document.querySelector('#inprov').value}.json`
            )
            .then(response => response.json())
            .then(regencies => {
                for (const value in regencies) {
                    if (Object.hasOwnProperty.call(regencies, value)) {
                        const element = regencies[value];

                        if (element.id == document.querySelector('#inkab').value) {
                            // membuat element option kabupaten
                            const opt = document.createElement('option');
                            const text = document.createTextNode(element.name);
                            opt.appendChild(text);
                            opt.value = element.id;
                            kab.appendChild(opt);
                        }

                    }
                }
            });

        // kecamatan saat ini
        fetch(
                `https://bayik4.github.io/api-wilayah-indonesia/api/districts/${document.querySelector('#inkab').value}.json`
            )
            .then(response => response.json())
            .then(districts => {
                for (const value in districts) {
                    if (Object.hasOwnProperty.call(districts, value)) {
                        const element = districts[value];

                        if (element.id == document.querySelector('#inkec').value) {
                            // membuat element option kabupaten
                            const opt = document.createElement('option');
                            const text = document.createTextNode(element.name);
                            opt.appendChild(text);
                            opt.value = element.id;
                            kec.appendChild(opt);
                        }
                    }
                }
            });

        // desa saat ini
        fetch(
                `https://bayik4.github.io/api-wilayah-indonesia/api/villages/${document.querySelector('#inkec').value}.json`
            )
            .then(response => response.json())
            .then(villages => {
                for (const value in villages) {
                    if (Object.hasOwnProperty.call(villages, value)) {
                        const element = villages[value];

                        if (element.id == document.querySelector('#indes').value) {
                            // membuat element option kabupaten
                            const opt = document.createElement('option');
                            const text = document.createTextNode(element.name);
                            opt.appendChild(text);
                            opt.value = element.id;
                            des.appendChild(opt);
                        }
                    }
                }
            });


        // mengambil semua data provinsi
        fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/provinces.json`)
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
                        prov.appendChild(opt);
                    }
                }
            });

        prov.addEventListener('change', function() {
            // mereset semua elemen option di dalam select dengan id kabupaten
            while (kab.lastElementChild) {
                kab.removeChild(kab.lastElementChild);
            }

            // membuat element option kabupaten
            const optKab = document.createElement('option');
            const textKab = document.createTextNode('Pilih');
            optKab.appendChild(textKab);
            optKab.value = "";
            kab.appendChild(optKab);

            // mereset semua elemen option dalam select dengan id kecamatan
            while (kec.lastElementChild) {
                kec.removeChild(kec.lastElementChild);
            }

            const optKec = document.createElement('option');
            const textKec = document.createTextNode('Pilih');
            optKec.appendChild(textKec);
            optKec.value = "";
            kec.appendChild(optKec);

            // mereset semua elemen option di dalam select dengan id kota
            while (des.lastElementChild) {
                des.removeChild(des.lastElementChild);
            }

            const optDesa = document.createElement('option');
            const textDesa = document.createTextNode('Pilih');
            optDesa.appendChild(textDesa);
            optDesa.value = "";
            des.appendChild(optDesa);

            // ID Provinsi
            fetch(
                    `https://bayik4.github.io/api-wilayah-indonesia/api/regencies/${prov.value}.json`
                )
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
        });

        kab.addEventListener('change', function() {
            // mereset semua elemen option dalam select dengan id kecamatan
            while (kec.lastElementChild) {
                kec.removeChild(kec.lastElementChild);
            }

            const optKec = document.createElement('option');
            const textKec = document.createTextNode('Pilih');
            optKec.appendChild(textKec);
            optKec.value = "";
            kec.appendChild(optKec);

            // ID KABUPATEN
            fetch(
                    `https://bayik4.github.io/api-wilayah-indonesia/api/districts/${kab.value}.json`
                )
                .then(response => response.json())
                .then(districts => {
                    for (const value in districts) {
                        if (Object.hasOwnProperty.call(districts, value)) {
                            const element = districts[value];

                            // membuat element option kabupaten
                            const opt = document.createElement('option');
                            const text = document.createTextNode(element.name);
                            opt.appendChild(text);
                            opt.value = element.id;
                            kec.appendChild(opt);

                            //console.log(element.id, element.name);
                        }
                    }
                });
        });

        kec.addEventListener('change', function() {

            // mereset semua elemen option di dalam select dengan id kota
            while (des.lastElementChild) {
                des.removeChild(des.lastElementChild);
            }

            const optDesa = document.createElement('option');
            const textDesa = document.createTextNode('Pilih');
            optDesa.appendChild(textDesa);
            optDesa.value = "";
            des.appendChild(optDesa);

            // ID Kecamatan
            fetch(
                    `https://bayik4.github.io/api-wilayah-indonesia/api/villages/${kec.value}.json`
                )
                .then(response => response.json())
                .then(villages => {
                    for (const value in villages) {
                        if (Object.hasOwnProperty.call(villages, value)) {
                            const element = villages[value];

                            // membuat element option kabupaten
                            const opt = document.createElement('option');
                            const text = document.createTextNode(element.name);
                            opt.appendChild(text);
                            opt.value = element.id;
                            des.appendChild(opt);

                            //console.log(element.id, element.name);
                        }
                    }
                });
        });

    } else {
        // mengambil semua data kabuaten
        fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/provinces.json`)
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
                        prov.appendChild(opt);

                        //console.log(element.id, element.name);
                    }
                }
            });

        prov.addEventListener('change', function() {
            // mereset semua elemen option di dalam select dengan id kabupaten
            while (kab.lastElementChild) {
                kab.removeChild(kab.lastElementChild);
            }

            // membuat element option kabupaten
            const optKab = document.createElement('option');
            const textKab = document.createTextNode('Pilih');
            optKab.appendChild(textKab);
            optKab.value = "";
            kab.appendChild(optKab);

            // mereset semua elemen option dalam select dengan id kecamatan
            while (kec.lastElementChild) {
                kec.removeChild(kec.lastElementChild);
            }

            const optKec = document.createElement('option');
            const textKec = document.createTextNode('Pilih');
            optKec.appendChild(textKec);
            optKec.value = "";
            kec.appendChild(optKec);

            // mereset semua elemen option di dalam select dengan id kota
            while (des.lastElementChild) {
                des.removeChild(des.lastElementChild);
            }

            const optDesa = document.createElement('option');
            const textDesa = document.createTextNode('Pilih');
            optDesa.appendChild(textDesa);
            optDesa.value = "";
            des.appendChild(optDesa);

            // ID Provinsi
            fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/regencies/${prov.value}.json`)
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
        });

        kab.addEventListener('change', function() {
            // mereset semua elemen option dalam select dengan id kecamatan
            while (kec.lastElementChild) {
                kec.removeChild(kec.lastElementChild);
            }

            const optKec = document.createElement('option');
            const textKec = document.createTextNode('Pilih');
            optKec.appendChild(textKec);
            optKec.value = "";
            kec.appendChild(optKec);

            // ID KABUPATEN
            fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/districts/${kab.value}.json`)
                .then(response => response.json())
                .then(districts => {
                    for (const value in districts) {
                        if (Object.hasOwnProperty.call(districts, value)) {
                            const element = districts[value];

                            // membuat element option kabupaten
                            const opt = document.createElement('option');
                            const text = document.createTextNode(element.name);
                            opt.appendChild(text);
                            opt.value = element.id;
                            kec.appendChild(opt);

                            //console.log(element.id, element.name);
                        }
                    }
                });
        });

        kec.addEventListener('change', function() {

            // mereset semua elemen option di dalam select dengan id kota
            while (des.lastElementChild) {
                des.removeChild(des.lastElementChild);
            }

            const optDesa = document.createElement('option');
            const textDesa = document.createTextNode('Pilih');
            optDesa.appendChild(textDesa);
            optDesa.value = "";
            des.appendChild(optDesa);

            // ID Kecamatan
            fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/villages/${kec.value}.json`)
                .then(response => response.json())
                .then(villages => {
                    for (const value in villages) {
                        if (Object.hasOwnProperty.call(villages, value)) {
                            const element = villages[value];

                            // membuat element option kabupaten
                            const opt = document.createElement('option');
                            const text = document.createTextNode(element.name);
                            opt.appendChild(text);
                            opt.value = element.id;
                            des.appendChild(opt);

                            //console.log(element.id, element.name);
                        }
                    }
                });
        });

    }
}

const simpan = () => {

    if (user.value != '' && nohp.value != '' && prov.value != '' && kab.value != '' && kec.value != '' && des
        .value != '') {

        if (isHapus) {
            // aksi mengirim data
            document.querySelector('#old_photo').value = 'noprofile.png'
            document.querySelector('#form-profile').submit();
        } else {
            document.querySelector('#form-profile').submit();
        }

        // button simpan
        document.querySelector('#btn-simpan').style.display = 'none'
        // button edit
        document.querySelector('#btn-edit').style.display = 'block'
        // button hapus profile
        document.querySelector('#hapus_profile').style.display = 'none'

        // label username
        document.querySelector('#labelUser').style.display = 'none'
        document.querySelector('#labelUser2').style.display = 'block'
        // label nohp
        document.querySelector('#labelNohp').style.display = 'none'
        document.querySelector('#labelNohp2').style.display = 'block'
        // label provinsi
        document.querySelector('#labelProv').style.display = 'none'
        document.querySelector('#labelProv2').style.display = 'block'
        // label kabupaten
        document.querySelector('#labelKab').style.display = 'none'
        document.querySelector('#labelKab2').style.display = 'block'
        // label kecamatan
        document.querySelector('#labelKec').style.display = 'none'
        document.querySelector('#labelKec2').style.display = 'block'
        // label desa
        document.querySelector('#labelDes').style.display = 'none'
        document.querySelector('#labelDes2').style.display = 'block'
        // input foto
        pro.style.display = 'none'
    } else {
      Swal.fire({
          title: "Gagal!",
          text: 'Semua field harus di isi',
          icon: "error"
      });
    }

}