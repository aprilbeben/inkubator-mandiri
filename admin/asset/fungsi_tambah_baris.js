

function tambah_baris() {
 var tbl = document.getElementById("tabel_pengalaman");
 var row = tbl.insertRow(tbl.rows.length);

 var td0 = document.createElement("td");
 var td1 = document.createElement("td");
 var td2 = document.createElement("td");
 var td3 = document.createElement("td");
 var td4 = document.createElement("td");
 var td5 = document.createElement("td");

 td0.appendChild(generateIndexBaris(row.rowIndex));
 td1.appendChild(generateCheckBoxBaris(row.rowIndex));
 td2.appendChild(generateJenis_usaha(row.rowIndex));
 td3.appendChild(generatePerusahaan(row.rowIndex));
 td4.appendChild(generatePosisi(row.rowIndex));
 td5.appendChild(generateTahun(row.rowIndex));

 row.appendChild(td0);
 row.appendChild(td1);
 row.appendChild(td2);
 row.appendChild(td3);
 row.appendChild(td4);
 row.appendChild(td5);
}

function generateIndexBaris(index) {
 var idx = document.createElement("input");
 idx.type = "hidden";
 idx.name = "index[ ]";
 idx.id = "index["+index+"]";
 idx.value = index;

 return idx;
}

function generateCheckBoxBaris(index) {
 var check = document.createElement("input");
 check.type = "checkbox";
 check.name = "check[]";
 check.id = "check["+index+"]";

 return check;
}

function generateJenis_usaha(index) {
 var idx = document.createElement("input");
 idx.type = "text";
 idx.name = "jenis_usaha[]";
 idx.id = "jenis_usaha["+index+"]";
 idx.size = "10";
 idx.class="span4";

 return idx;
}

function generatePerusahaan(index) {
 var idx = document.createElement("input");
 idx.type = "text";
 idx.name = "perusahaan[]";
 idx.id = "perusahaan["+index+"]";
 idx.size = "10";
 idx.class="span4";
 return idx;
}

function generatePosisi(index) {
 var idx = document.createElement("input");
 idx.type = "text";
 idx.name = "posisi[]";
 idx.id = "posisi["+index+"]";
 idx.size = "10";
 idx.class="span4";

 return idx;
}

function generateTahun(index) {
 var idx = document.createElement("input");
 idx.type = "text";
 idx.name = "tahun[]";
 idx.id = "tahun["+index+"]";
 idx.size = "4";
idx.class="span4";
 return idx;
}

function clickAll() {
  var checked = false;
  if (document.getElementById("pilih_semua").checked == true)
    checked = true;

  var tbl = document.getElementById("tabel_pengalaman");
  var rowLen = tbl.rows.length;
  for (var idx = 1; idx < rowLen; idx++) {
    var row = tbl.rows[idx];
    var cell = row.cells[1];
    var node = cell.lastChild;
    node.checked = checked;
  }
}

function deleteRow() {
  var tbl = document.getElementById("tabel_pengalaman");
  var error = false;

  if (document.getElementById("pilih_semua").checked == false)
    error = true;

  var tbl = document.getElementById("tabel_pengalaman");
  var rowLen = tbl.rows.length;
  for (var idx = 1; idx < rowLen; idx++) {
    var row = tbl.rows[idx];
    var cell = row.cells[1];
    var node = cell.lastChild;
    if (node.checked == true) {
      error = false;
      break;
    }
  }

  if (error == true) {
    alert ("Checkbox tidak di cek, proses tidak dapat dilanjutkan");
    return;
  }

  if (document.getElementById("pilih_semua").checked == true) {
    deleteAll();
    document.getElementById("pilih_semua").checked = false;
  } else {
    var table = document.createElement("table");
    bufferRow(table);
    deleteAll();
    reIndex(table);
  }
}

function deleteAll() {
  var tbl = document.getElementById("tabel_pengalaman");
  var rowLen = tbl.rows.length - 1;
  for (var idx = rowLen; idx > 0; idx--)
    tbl.deleteRow(idx)
}

function bufferRow(table) {
  var tbl = document.getElementById("tabel_pengalaman");
  var rowLen = tbl.rows.length;
  for (var idx=1;idx<rowLen;idx++) {
    var row = tbl.rows[idx];
    var cell = row.cells[1];
    var node = cell.lastChild;
    if (node.checked == false) {
      var rowNew = table.insertRow(table.rows.length);

      var td0 = document.createElement("td");
      var td1 = document.createElement("td");
      var td2 = document.createElement("td");
      var td3 = document.createElement("td");
      var td4 = document.createElement("td");
      var td5 = document.createElement("td");



      td0.appendChild(row.cells[0].lastChild);
      td1.appendChild(row.cells[1].lastChild);
      td2.appendChild(row.cells[2].lastChild);
      td3.appendChild(row.cells[3].lastChild);
      td4.appendChild(row.cells[4].lastChild);
      td5.appendChild(row.cells[5].lastChild);

      rowNew.appendChild(td0);
      rowNew.appendChild(td1);
      rowNew.appendChild(td2);
      rowNew.appendChild(td3);
      rowNew.appendChild(td4);
      rowNew.appendChild(td5);
    }
  }
}

function reIndex(table) {
  var tbl = document.getElementById("tabel_pengalaman");
  var rowLen = table.rows.length;
  for (var idx=0;idx < rowLen;idx++) {
    var row = table.rows[idx];
    var rowTbl = tbl.insertRow(tbl.rows.length);

    var td0 = document.createElement("td");
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");
    var td3 = document.createElement("td");
    var td4 = document.createElement("td");
    var td5 = document.createElement("td");

    td0.appendChild(row.cells[0].lastChild);
    td1.appendChild(row.cells[1].lastChild);
    td2.appendChild(row.cells[2].lastChild);
    td3.appendChild(row.cells[3].lastChild);
    td4.appendChild(row.cells[4].lastChild);
    td5.appendChild(row.cells[5].lastChild);

    rowTbl.appendChild(td0);
    rowTbl.appendChild(td1);
    rowTbl.appendChild(td2);
    rowTbl.appendChild(td3);
    rowTbl.appendChild(td4);
    rowTbl.appendChild(td5);
  }
}

