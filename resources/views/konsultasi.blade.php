@extends('layouts.main')

@section('container')
<table id="tableHeader" style="width: 100%; margin:10px; margin-top:100px;">
  <tr>
    <td class="header" colspan="2">Konsultasi Taman</td>
  </tr>
  <tr>
    <td colspan="2">Klik dibawah ini untuk memilih tanggal & waktu yang tersedia untuk memanggil konsultan kami</td>
  </tr>
  <tr>
    <td class="col d-flex justify-content-center" colspan="2">
      
      <div class="row">
        <div class="col-sm-5">
          <div class="card" style="border-radius: 10px;">
            <div class="card-body">
              <form action="#" class="row">
                <div class="col-md-12">
                  <div id="inline_cal"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="card" style="border-radius: 10px;">
            <div class="card-body">
              <div class="headerTime">
                <h5>Thursday</h5>
                <p>October 8, 2020</p>
              </div>
              <div class="chooseTime">
                <table id="tableTime" style="width: 100%">
                  <tr>
                    <td colspan="2" style="padding-bottom: 0; width: 100%; text-align:start;">
                      <h5>Pilih Waktu</h5>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" style="padding-top: 0; width: 100%; text-align:start;">
                      <p>Durasi Konsultasi 30 menit</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50%"><button>09:00</button></td>
                    <td style="width: 50%"><button>13:00</button></td>
                  </tr>
                  <tr>
                    <td><button>10:00</button></td>
                    <td><button>14:00</button></td>
                  </tr>
                  <tr>
                    <td><button>11:00</button></td>
                    <td><button>15:00</button></td>
                  </tr>
                  <tr>
                    <td><button>12:00</button></td>
                    <td><button>16:00</button></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </td>
  </tr>
</table>
<div class="col d-flex justify-content-center">

  <div class="col-sm-9" style="margin-left: 20px;">
    <div class="card" style="border-radius: 10px;">
      <div class="card-body">
        <form action="#" class="row">
          <div class="col-md-12">
            <div class="headerDesc" style="text-align:left; padding:7px;">
              <h3><b>Informasi Data Diri</b></h3>
            </div>
         <table style="width: 100%;">
          <tr>
            <td id="inputData" >Nama Lengkap</td>
            <td id="inputData" >No HP</td>
          </tr>
          <tr>
            <td style="padding-left: 7px;"><input id="" type="text" name=""></td>
            <td style="padding-left: 7px;"><input id="" type="text" name=""></td>
          </tr>
          <tr>
            <td colspan="2" style="padding-top: 30px; padding-left:7px;">
              <label id="inputData" for="alamat">Alamat</label>&nbsp;&nbsp;&nbsp;
              <textarea name="alamat" id="alamat" rows="6" cols="80"></textarea>
            </td>
          </tr>
         </table>
          </div>
        </form>
      </div>
      <hr>
      <div class="card-body" style="height: 200px;">
        <form action="#" class="row" style="padding-top:0px;">
        <div class="headerInformation">
          <h3 style="padding-bottom: 10px;"><b>Informasi Konsultasi Taman</b></h3>
        <table style="width: 100%">
          <tr>
            <td><b><h5 style="font-weight: bold; font-size:20px;">Lahan Taman</h5></b></td>
          </tr>
          <tr>
            <td style="font-weight: 300; font-size:12px;">Pilih jumlah lahan taman yang akan dibuat.</td>
          </tr>
          <tr class="col d-flex" style="padding-left: 0;">
            <td><button id="buttonGarden">1 Lahan Taman</button></td>
            <td><button id="buttonGarden">2 Lahan Taman</button></td>
            <td><button id="buttonGarden">Lebih dari 2 Lahan Taman</button></td>
          </tr>
        </table>
        </div>
      </form>
      </div>
      <div class="card-body">
        <form action="#" class="row" style="padding-top: 0px;">
      <table>
        <tr>
          <td><h5><b style="font-weight: bold; font-size:20px; padding-left:15px;">Tema Taman</b></h5></td>
        </tr>
        <tr>
          <td style="font-weight: 300; font-size:12px; padding-left:15px;">Pilih teman yang akan dibuat.</td>
        </tr>
      </table>
      <div class="note" style="width: 60%; background-color:rgb(255,242,209); border-radius:10px; margin:13px; text-align:left;">
        <p id="noted"><b>Catatan:</b> Jika anda belum memiliki inspirasi tema taman maka anda 
          bisa melewati tahap ini, konsultan kami akan memberikan rekomendasi terbaik untuk taman anda.</p>
      </div>
      <div class="card-group" style="padding-top: 25px;">
        <div class="card" style="margin: 10px; border-radius:10px;">
          <img class="card-img-top" src="img/gambar1.png" alt="Card image cap">
          <div class="card-body" style="text-align: left">
            <h5 class="card-title" style="margin-bottom: 0; font-weight:bold;">Taman Minimalis</h5>
            <p class="card-text" style="font-size:12px; font-weight:300;">Taman yang indah dilahan yang sempit.</p>
            <p class="card-text" style="text-align: right"><a href="#" style="color:#1B6A19; font-size:14px; font-weight:500"><u>Pilih</u></a></p>
          </div>
        </div>
        <div class="card" style="margin: 10px; border-radius:10px;">
          <img class="card-img-top" src="img/gambar2.png" alt="Card image cap">
          <div class="card-body" style="text-align: left">
            <h5 class="card-title" style="margin-bottom: 0; font-weight:bold;">Taman Kering</h5>
            <p class="card-text" style="font-size:12px; font-weight:300;">Taman yang dirancang untuk menghasilkan suasana alam di dalam dan diluar rumah.</p>
            <p class="card-text" style="text-align: right"><a href="#" style="color:#1B6A19; font-size:14px; font-weight:500"><u>Pilih</u></a></p>
          </div>
        </div>
        <div class="card" style="margin: 10px; border-radius:10px;">
          <img class="card-img-top" src="img/gambar3.png" alt="Card image cap">
          <div class="card-body" style="text-align: left">
            <h5 class="card-title" style="margin-bottom: 0; font-weight:bold;">Taman Tropis</h5>
            <p class="card-text" style="font-size:12px; font-weight:300;">Taman yang paling sesuai dengan iklim di indonesia.</p>
            <p class="card-text" style="text-align: right;"><a href="#" style="color:#1B6A19; font-size:14px; font-weight:500;"><u>Pilih</u></a></p>
          </div>
        </div>
      </div>
      <table style="width: 100%; margin:20px;">
        <tr>
          <td><b><h5 style="font-weight: bold; font-size:20px;">Lahan Taman</h5></b></td>
        </tr>
        <tr>
          <td style="font-weight: 300; font-size:12px;">Pilih jumlah lahan taman yang akan dibuat.</td>
        </tr>
        <tr class="col d-flex" style="padding-left: 0;">
          <td><button id="buttonGarden"> < 10m<sup>2</button></td>
          <td><button id="buttonGarden">11-20m<sup>2</button></td>
          <td><button id="buttonGarden">21-30m<sup>2</button></td>
          <td><button id="buttonGarden">31-40m<sup>2</button></td>
          <td><button id="buttonGarden">41-50m<sup>2</button></td>
          <td><button id="buttonGarden">51-60m<sup>2</button></td>
          <td><button id="buttonGarden">> 100<sup>2</button></td>
        </tr>
      </table>
      <div class="final">
        <table style="float:right; margin:50px; margin-bottom:0px;">
          <tr>
            <td><button class="batal">Batal</button></td>
            <td><button class="oke">Oke</button></td>
          </tr>
        </table>
      </div>
    </form>
    </div>
    </div>
  </div>
</div>

