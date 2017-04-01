

function tambah_soal() {
 var tblSoal = document.getElementById("tabel_soal");
 var rowSoal = tblSoal.insertRow(tblSoal.rows.length);

 var td0 = document.createElement("td");
 var td1 = document.createElement("td");
 var td2 = document.createElement("td");

 td0.appendChild(generateIndex(rowSoal.rowIndex));
 td1.appendChild(generateCheckBox(rowSoal.rowIndex));
 td2.appendChild(generateSoal(rowSoal.rowIndex));
 
 rowSoal.appendChild(td0);
 rowSoal.appendChild(td1);
 rowSoal.appendChild(td2);
}

function generateIndex(indexSoal) {
 var idz = document.createElement("input");
 idz.type = "hidden";
 idz.name = "index[ ]";
 idz.id = "index["+indexSoal+"]";
 idz.value = "index";

 return idz;
}

function generateCheckBox(indexSoal) {
 var checkSoal = document.createElement("input");
 checkSoal.type = "checkbox";
 checkSoal.name = "check[ ]";
 checkSoal.id = "check["+indexSoal+"]";

 return checkSoal;
}

function generateSoal(indexSoal) {
 var idz = document.createElement("textarea");
 idz.name = "soal[ ]";
 idz.id = "soal["+indexSoal+"]";
 idz.style="width:80%;";

 return idz;
}

function pilihSemua() {
  var checked = false;
  if (document.getElementById("clickAll").checked == true)
    checked = true;

  var tblSoal = document.getElementById("tabel_soal");
  var rowLenSoal = tblSoal.rows.length;
  for (var idz = 1; idz < rowLenSoal; idz++) {
    var rowSoal = tblSoal.rows[idz];
    var cellSoal = rowSoal.cells[1];
    var nodeSoal = cellSoal.lastChild;
    nodeSoal.checked = checked;
  }
}

function deleteRowSoal() {
  var tblSoal = document.getElementById("tabel_soal");
  var error = false;

  if (document.getElementById("clickAll").checked == false)
    error = true;

  var tblSoal = document.getElementById("tabel_soal");
  var rowLenSoal = tblSoal.rows.length;
  for (var idx = 1; idx < rowLenSoal; idx++) {
    var rowSoal = tblSoal.rows[idx];
    var cellSoal = rowSoal.cells[1];
    var nodeSoal = cellSoal.lastChild;
    if (nodeSoal.checked == true) {
      error = false;
      break;
    }
  }

  if (error == true) {
    alert ("Checkbox tidak di cek, proses tidak dapat dilanjutkan");
    return;
  }

  if (document.getElementById("clickAll").checked == true) {
    deleteAllSoal();
    document.getElementById("clickAll").checked = false;
  } else {
    var tabel_soal = document.createElement("table");
    bufferRowSoal(tabel_soal);
    deleteAllSoal();
    reIndexSoal(tabel_soal);
  }
}

function deleteAllSoal() {
  var tbl = document.getElementById("tabel_soal");
  var rowLen = tbl.rows.length - 1;
  for (var idx = rowLen; idx > 0; idx--){
    tbl.deleteRowSoal(idx);
  }
}

function bufferRowSoal(table) {
  var tbl = document.getElementById("tabel_soal");
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
     
      rowNew.appendChild(td0);
      rowNew.appendChild(td1);
      rowNew.appendChild(td2);
     
  }
}
}

function reIndexSoal(table) {
  var tbl = document.getElementById("tabel_soal");
  var rowLen = table.rows.length;
  for (var idx=0;idx < rowLen;idx++) {
    var row = table.rows[idx];
    var rowTbl = tbl.insertRow(tbl.rows.length);

    var td0 = document.createElement("td");
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");
   
    td0.appendChild(row.cells[0].lastChild);
    td1.appendChild(row.cells[1].lastChild);
    td2.appendChild(row.cells[2].lastChild);
   
    rowTbl.appendChild(td0);
    rowTbl.appendChild(td1);
    rowTbl.appendChild(td2);
    }
}