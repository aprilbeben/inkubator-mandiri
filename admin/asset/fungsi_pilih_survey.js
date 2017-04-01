
function displayAlert(frm){   
 var selectedbuah="";
    for (i = 0; i < frm.peserta.length; i++){   
  if (frm.peserta[i].checked){   
   selectedbuah += frm.peserta[i].value +", ";
   $('#data_dipilih').dataTable().fnAddData( [
   	frm.peserta[i].value,
   	frm.peserta[i].value,
   	frm.peserta[i].value 
   	]);
  }
    }
    }
