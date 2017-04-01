  <table border='1' class="table" >
  <thead>
    <tr>
    <td width="47" rowspan="2"><div align="center">NO</div></td>
    <td width="122" rowspan="2"><div align="center">NAMA</div></td>
    <td width="71" rowspan="2"><div align="center">TGL LAHIR </div></td>
    <td width="140" rowspan="2"><div align="center">HUBUNGAN</div></td>
    <td width="95" rowspan="2"><div align="center">STATUS</div></td>
    <td colspan="2"><div align="center">PEKERJAAN</div></td>
    <td width="95" rowspan="2"><div align="center">PENDIDIKAN</div></td>
    <td width="95" rowspan="2"><div align="center">KET</div></td>
  </tr>
  <tr>
    <td width="95"><div align="center">UTAMA</div></td>
    <td width="95"><div align="center">SAMPINGAN</div></td>
  </tr>
  </thead>
  <tbody id="tab_logic">
    <tr id='addr0'>
      <td> 1 </td>
      <td><input name='nama_keluarga[]' type="text"  placeholder='Name' class="span10"/>
      </td>
      <td><input type="date" name='tgl_lahir_keluarga[]' placeholder='tanggal lahir' class="span8"/>
      </td>
      <td>
      <select name="hubungan[]" class="span8">
                        <option value="adik">adik</option>
                        <option value="kaka">kaka</option>
                        <option value="ayah">ayah</option>
                        <option value="ibu">ibu</option>
                        <option value="sepupu">sepupu</option>
                        <option value="paman">paman</option>
                        <option value="bibi">bibi</option>
                        <option value="kakek">kakek</option>
                        <option value="nenek">nenek</option>
                      </select>
                    </td>
    <td>
    <select name="status_martial[]" class="span8">
                        <option value="Lajang">Lajang</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Duda">Duda</option>
                        <option value="Janda">Janda</option>
                    </select>
                    </td>
    <td><input name='pekerjaan_utama[]' type="text" class="span8"  placeholder='pekerjaan utama' class="span10"/>
      </td>
    <td><input name='pekerjaan_sampingan[]' type="text" class="span10"  placeholder='pekerjaan sampingan'/>
      </td>
    <td>
    <select name="pendidikan[]" class="span8">
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select></td>
    <td><input name='keterangan_keluarga[]' type="text" class="span8" placeholder='keterangan'/>
      </td>
    </tr>
                    <tr id='addr1'></tr>
        </tbody>
      </table>