
<table class="table">
  <tr>
    <td colspan="3"><strong>KEPEMILIKAN HARTA </strong></td>
  </tr>
  <tr align="center" valign="middle">
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>1</strong></p>
      </blockquote>
    </div></td>
    <td  rowspan="2"><blockquote>
      <p align="center"><strong>KEBUN / SAWAH </strong></p>
      </blockquote></td>
    </tr>
    <tr>
      <td colspan="2" ><strong>
        <label>
        <input type="radio" name="kebun" value="1" />
        TIDAK ADA </label>
      </strong><strong>
      <label>
      <input type="radio" name="kebun" value="2"  />
      &lt; 1000 M2 </label>
      </strong><strong>
      <label>
      <input type="radio" name="kebun" value="3"  />
      1000-5000 M2 </label>
      </strong><strong>
      <label>
      <input type="radio" name="kebun" value="4"  />
      &gt; 5000 M2 </label>
      </strong> </td>
    </tr>
  

  <tr align="center" valign="middle">
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>2</strong></p>
      </blockquote>
    </div></td>
    <td  rowspan="2"><blockquote>
      <p align="center"><strong>ELEKTRONIK 
      </blockquote>    </td>
    </tr>
   <tr>
      <td colspan="2"><strong>
        <label >
        <input type="checkbox" name="elektronik[]" value="tidak ada" id="tdk_elektronik"/>
        Tidak ada</label>
      </strong> 
      <strong>
      <label id="radio">
        <input type="checkbox" name="elektronik[]" value="radio" class="cb_elektronik" />
        radio</label>
  
      </strong><strong>
      <label id="tv">
        <input type="checkbox" name="elektronik[]" value="TV" class="cb_elektronik" />
        Televisi</label>
  
      </strong><strong>
      <label id="cd">
        <input type="checkbox" name="elektronik[]" value="CD" class="cb_elektronik"/>
        CD PLAYER</label>
  
      </strong><strong>
      <label id="mesin">
        <input type="checkbox" name="elektronik[]" value="mesin cuci" class="cb_elektronik" />
        MESIN CUCI</label>
  
      </strong><strong>
      <label id="kulkas">
        <input type="checkbox" name="elektronik[]" value="kulkas" class="cb_elektronik" />
        KULKAS</label>
  
      </strong></td>
    </tr>
  


  <tr align="center" valign="middle">
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>3</strong></p>
      </blockquote>
    </div></td>
    <td  rowspan="2"><blockquote>
      <p align="center"><strong>KENDARAAN</strong></p>
      </blockquote>    </td>
    </tr>
   <tr>
      <td colspan="2"><strong>
        <label >
        <input type="checkbox" name="kendaraan[]"  value="tidak ada" id="tdk_kendaraan"/>
        Tidak ada</label>
      </strong> 
      <strong>
      <label id="sepeda">
        <input type="checkbox" name="kendaraan[]" value="sepeda" class="cb_kendaraan"  />
        SEPEDA</label>
  
      </strong><strong>
      <label id="motor">
        <input type="checkbox" name="kendaraan[]" value="motor" class="cb_kendaraan" />
        MOTOR</label>
  
      </strong><strong>
      <label id="mobil">
        <input type="checkbox" name="kendaraan[]" value="mobil" class="cb_kendaraan" />
       MOBIL</label>
</td>
    </tr>
  

  <tr align="center" valign="middle">
    <td rowspan="7"><div align="center">
      <blockquote>
        <p><strong>4</strong></p>
      </blockquote>
    </div></td>
    <td rowspan="7"><div align="center">
      <blockquote>
        <p><strong>TERNAK</strong></p>
      </blockquote>
    </div></td>
  </tr>
     <tr>
       <td>
          <label >
        <input type="checkbox" name="ternak[]"  value="tidak ada" id="tdk_ternak" onClick="cek_ternak(this,0)"/>
        Tidak ada</label>
        </td>
        <td>
         <input type="hidden" name="jumlah_ternak[]" id="jumlah_ternak0" disabled class="txtjumlah_ternak">
        </td>
    </tr>
    <tr>
       <td>
          <label >
        <input type="checkbox" name="ternak[]" value="unggas" class="cb_ternak" onClick="cek_ternak(this,1)"  />
        Unggas</label>
  
        </td>
        <td>
        <label>
        <input type="number" name="jumlah_ternak[]" id="jumlah_ternak1" disabled class="txtjumlah_ternak"> &nbsp /EKOR</label>
       </td>
    </tr>
    <tr>
       <td>
          <label >
        <input type="checkbox" name="ternak[]" value="kambing" class="cb_ternak" onClick="cek_ternak(this,2)"  >
        Kambing</label>
  
        </td>
        <td><label>
        <input type="number" name="jumlah_ternak[]" id="jumlah_ternak2"  disabled class="txtjumlah_ternak">&nbsp /EKOR</label>
        </td>
    </tr>
    <tr>
       <td>
          <label >
        <input type="checkbox" name="ternak[]" value="domba" class="cb_ternak" onClick="cek_ternak(this,3)">
        domba</label>
  
        </td>
        <td><label>
        <input type="number" name="jumlah_ternak[]" id="jumlah_ternak3"  disabled class="txtjumlah_ternak">&nbsp /EKOR</label>
       </td>
    </tr>
        <tr>
       <td>
          <label >
        <input type="checkbox" name="ternak[]" value="domba" class="cb_ternak" onClick="cek_ternak(this,4)">
        Sapi</label>
  
        </td>
        <td><label>
        <input type="number" name="jumlah_ternak[]" id="jumlah_ternak4"  disabled class="txtjumlah_ternak">&nbsp /EKOR</label>
       </td>
    </tr>
        <tr>
       <td>
          <label >
        <input type="checkbox" name="ternak[]" value="domba" class="cb_ternak" onClick="cek_ternak(this,5)">
        Kerbau</label>
  
        </td>
        <td><label>
        <input type="text" name="jumlah_ternak[]" id="jumlah_ternak5"  disabled class="txtjumlah_ternak">&nbsp /EKOR</label>
       </td>
    </tr>
  

<tr align="center" valign="middle">
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>5</strong></p>
      </blockquote>
    </div></td>
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>SIMPANAN / TABUNGAN </strong></p>
      </blockquote>
    </div></td>
  </tr>
  <td> 
    <label >
        <input type="checkbox" name="simpanan"  value="tidak ada" id="tdk_simpanan"/>
        Tidak ada</label>
        </td>
        <td>
         <input type="text" name="jumlah_simpanan" id="jumlah_simpanan0" class="txt_ternak" disabled>
        </td>
    </tr>

  

<tr align="center" valign="middle">
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>6</strong></p>
      </blockquote>
    </div></td>
    <td  rowspan="2"><blockquote>
      <p align="center"><strong>LAIN LAIN </strong></p>
    </blockquote></td>
  </tr>
    <tr>
      <td colspan="2" ><textarea name="lain_lain"></textarea></td>
    </tr>
</table>