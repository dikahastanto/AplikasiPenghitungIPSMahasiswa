var i = 1;
var j = 1;

            function additem() {
              j++;
//                menentukan target append
                var itemlist = document.getElementById('itemlist');

//                membuat element
                var row = document.createElement('tr');
                var jenis = document.createElement('td');
                var jumlah = document.createElement('td');
                var aksi = document.createElement('td');

//                meng append element
                itemlist.appendChild(row);
                row.appendChild(jenis);
                row.appendChild(jumlah);
                row.appendChild(aksi);

//                membuat element input
                var jenis_input = document.createElement('input');
                jenis_input.setAttribute('name', 'jenis_input[' + i + ']');
                jenis_input.setAttribute('class', 'form-control input-block-level');
                jenis_input.setAttribute('placeholder', 'SKS Mata Kuliah ' + j);

                var jumlah_input = document.createElement('input');
                jumlah_input.setAttribute('name', 'jumlah_input[' + i + ']');
                jumlah_input.setAttribute('class', 'form-control input-block-level');
                jumlah_input.setAttribute('placeholder', 'Nilai Mata Kuliah ' + j);

                var hapus = document.createElement('span');

//                meng append element input
                jenis.appendChild(jenis_input);
                jumlah.appendChild(jumlah_input);
                aksi.appendChild(hapus);

                hapus.innerHTML = '<button style="margin-top:5px;" class="btn btn-danger"><i class="fas fa-backspace"></i></i></button>';
//                membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };

                i++;
            }
