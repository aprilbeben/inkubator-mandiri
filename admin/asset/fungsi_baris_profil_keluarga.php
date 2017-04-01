<script type="text/javascript">
  
  $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"<td><input name='nama' type='text'  placeholder='Name' class='span10'/>"+
      "</td>"+
      "<td><input type='date' name='tgl_lahir_keluarga' placeholder='tanggal lahir' class='span8'/>"+
      "</td>"+
      "<td><input name='hubungan' type='text' class='span8' placeholder='hubungan'/>"+
      "</td>"+
    "<td>"+
    "<select name='status_martial' class='span8'>"+
                        "<option value='Lajang'>Lajang</option>"+
                        "<option value='Menikah'>Menikah</option>"+
                        "<option value='Duda'>Duda</option>"+
                        "<option value='Janda'>Janda</option>"+
                    "</select>"+
                    "</td>"+
    "<td><input name='pekerjaan_utama' type='text' class='span8'  placeholder='pekerjaan utama' class='span10'/>"+
      "</td>"+
    "<td><input name='pekerjaan_sampingan' type='text' class=span10'  placeholder='pekerjaan sampingan'/>"+
      "</td>"+
    "<td>"+
    "<select name='pendidikan' class='span8'>"+
                        "<option value='Tidak Sekolah'>Tidak Sekolah</option>"+
                        "<option value='SD'>SD</option>"+
                        "<option value='SMP'>SMP</option>"+
                        "<option value='SMA'>SMA</option>"+
                        "<option value='S1'>S1</option>"+
                        "<option value='S2'>S2</option>"+
                        "<option value='S3'>S3</option>"+
                    "</select></td>"+
    "<td><input name='keterangan' type='text' class='span8' placeholder='keterangan'/>"+
      "</td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
       if(i>1){
     $("#addr"+(i-1)).html('');
     i--;
     }
   });

});
</script>
