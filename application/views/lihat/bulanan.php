<!-- ==============================================
Konten (isi)
=============================================== -->
<section class="content-wrapper">
  <div class="content-header">
    <h1>
      Rekap Bulanan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </div>

  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border bg-gray">
            <div class="row">
              <div class="col-md-6">
                <h3 class="box-title">Rekapitulasi Laporan Bulanan</h3>
              </div>

              <form action="" method="post" class="col-md-6">
                <button type="submit" class="btn btn-primary pull-right">Pilih</button>
                <div class="pull-right form-group">
                  <select class="form-control">
                    <option name="bulan" value="0" >- Pilih Bulan -</option>
                    <option name="bulan" value="1" >Januari</option>
                    <option name="bulan" value="2" >Februari</option>
                    <option name="bulan" value="3" >Maret</option>
                    <option name="bulan" value="4" >April</option>
                    <option name="bulan" value="5" >Mei</option>
                    <option name="bulan" value="6" >Juni</option>
                    <option name="bulan" value="7" >Juli</option>
                    <option name="bulan" value="8" >Agustus</option>
                    <option name="bulan" value="9" >September</option>
                    <option name="bulan" value="10" >Oktober</option>
                    <option name="bulan" value="11" >November</option>
                    <option name="bulan" value="12" >Desember</option>
                  </select>
                </div>
              </form>
            </div>
          </div>

          <!-- /.box-header -->
          <div class="box-body">
            <a href="<?= base_url(); ?>cetak/bulanan" target="_blank" class="btn btn-primary">Print Laporan</a>
              <h5><div class="text-center">REKAPITULASI BULANAN CAPAIAN PRESTASI KERJA ASN <br> PEMERINTAH KABUPATEN MANOKWARI</div></h5 >

              <div>
                <div class="row">
                  <div class="col-md-8">
                    <table>
                      <tr>
                        <td>NAMA</td>
                        <td>&nbsp;&nbsp; : &nbsp;</td>
                        <td class="font-bolt"><?= $pegawai[0]['peg_nama']; ?></td>
                      </tr>
                      <tr>
                        <td>NIP</td>
                        <td>&nbsp;&nbsp; : &nbsp;</td>
                        <td class="font-bolt"><?= $pegawai[0]['peg_nip']; ?></td>
                      </tr>
                      <tr>
                        <td>PANGKAT (GOL/RUANG)</td>
                        <td>&nbsp;&nbsp; : &nbsp;</td>
                        <td class="font-bolt"><?= $pegawai[0]['peg_pangkat']; ?></td>
                      </tr>
                      <tr>
                        <td>UNIT KERJA</td>
                        <td>&nbsp;&nbsp; : &nbsp;</td>
                        <td class="font-bolt"><?= $pegawai[0]['peg_unit_kerja']; ?></td>
                      </tr>
                      <tr>
                        <td>JABATAN</td>
                        <td>&nbsp;&nbsp; : &nbsp;</td>
                        <td class="font-bolt"><?= $pegawai[0]['peg_jabatan']; ?></td>
                      </tr>
                    </table>
                  </div>

                  <div class="col-md-4">
                    <table>
                        <tr>
                          <td>Bulan</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                          <td>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>Jumlah Hari Kerja</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                          <td>1 (satu) hari kerja</td>
                        </tr>
                      </table>
                    </div>
                  </div>
              </div>

              <div class="table-responsive">
                  <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th class="text-center">No</th>
                          <th class="text-center">Hari/Tanggal</th>
                          <th class="text-center">Jumlah Waktu Kerja Terpakai</th>
                          <th class="text-center">Keterangan Kehadiran</th>
                          <th class="text-center">Ket</th>
                        </tr>
                      </thead>
                       <tbody>
                        <tr>
                          <td class="text-center">1</td>
                          <td class="text-center">2</td>
                          <td class="text-center">3</td>
                          <td class="text-center">4</td>
                          <td class="text-center">5</td>
                        </tr>

                        </tr>
                        <?php $i=1; foreach($laporanpegin as $lprn) : ?>
                          <tr>
                            <td style="width: 10px"><?= $i; $i++?></td>
                            <td><?= $lprn['lap_tanggal'] ?></td>
                            <td><?= $lprn['lap_jam_mulai']." - ".$lprn['lap_jam_selesai'] ?></td>
                            <td><?= $lprn['lap_kegiatan'] ?></td>
                            <td> HADIR </td>
                          </tr>
                        <?php endforeach; ?>

                        <!-- <?php $i=""; foreach ($rekapan as $rekap) : ?>
                          <tr>
                            <td style="width: 10px"><?= $i; $i++ ?></td>
                            <td class="text-center"><?php $i = 1; echo $i; $i++ ?></td>
                            <td><?= $rekapan['rekap_tanggal']; ?></td>
                            <td><?= $rekapan['rekap_jamkerja']; ?></td>
                            <td><?= $rekap['lap_jumlah_satuan']; ?></td>
                            <td><?= $rekap['rekapket']; ?></td>
                          </tr>
                        <?php endforeach; ?> -->

                        <!-- <?php $i=1; foreach ($laporan as $lprn ) : ?>
                          <tr>
                            <td style="width: 10px"><?= $i; $i++ ?></td>
                            <td><?= $lprn['lap_jam_mulai']." - ".$lprn['lap_jam_selesai'] ?></td>
                            <td><?= $lprn['lap_jam_selesai'] - $lprn['lap_jam_mulai'] ?></td>
                            <td><?= $lprn['lap_kegiatan'] ?></td>
                            <td><?= $lprn['lap_satuan_kegiatan'] ?></td>
                            <td><?= $lprn['lap_jumlah_satuan'] ?></td>
                            <td><?= $lprn['lap_tempat_kegiatan'] ?></td>
                            <td><?= $lprn['lap_penyelenggara'] ?></td>
                            <td><?= $lprn['lap_keterangan'] ?></td>
                          </tr>
                        <?php endforeach; ?> -->
                        <!-- <tr>
                          <td class="text-center">2</td>
                          <td>Selasa, 02 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">3</td>
                          <td>Rabu, 03 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">4</td>
                          <td>Kamis, 04 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">5</td>
                          <td>Jum'at, 05 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">6</td>
                          <td>Senin, 08 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">7</td>
                          <td>Selasa, 09 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">8</td>
                          <td>Rabu, 10 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">9</td>
                          <td>Kamis, 11 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">10</td>
                          <td>Jum'at, 12 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">11</td>
                          <td>Senin, 15 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">12</td>
                          <td>Selasa, 16 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">13</td>
                          <td>Rabu, 17 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">14</td>
                          <td>Kamis, 18 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">15</td>
                          <td>Jum'at, 19 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">16</td>
                          <td>Senin, 22 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">17</td>
                          <td>Selasa, 23 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">18</td>
                          <td>Rabu, 24 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">19</td>
                          <td>Kamis, 25 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">20</td>
                          <td>Jum'at, 26 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">21</td>
                          <td>Senin, 29 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td class="text-center">22</td>
                          <td>Selasa, 30 April 2019</td>
                          <td>1 jam 00 menit</td>
                          <td>-</td>
                          <td>-</td>
                        </tr> -->
                      </tbody>
                    </table>
                        <div class="box-footer clearfix">
                      <?php echo $pagination; ?>
                    </div>
              </div>


              <div class="row">
                            <div class="col-md-8">
                              <div class="text-center" style="border: 1px solid black">
                                <u>Penilaian Atasan Langsung :</u><br>
                                <p>Sesuai fakta dan kepatuhan maka yang bersangkutan pada hari ini telah melaksanakan seluruh tugas selama <?= $rekap['rekap_tanggal']; ?> jam</p>
                                Mengetahui Atasan<br><br><br><br>

                                <?php if( !empty($pegawai[0]['peg_atasan']) ){ ?>
                                  <u class="info-box-text"><?= $pegawai[0]['peg_atasan'] ?></u>
                                  NIP. .....................
                                <?php } else { ?>
                                  <u class="info-box-text">............................................</u>
                                  NIP.
                                <?php } ?>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="text-center">
                                Manokwari, <?= date('d F Y') ?><br>
                                PNS Yang Bersangkuan<br><br><br><br>
                                <u><?= $pegawai[0]['peg_nama'] ?></u><br>
                                NIP. <?= $pegawai[0]['peg_nip'] ?>
                              </div>
                            </div>
                          </div>
                        </div>
        </div>
      </div>
    </div>
  </div>

</section>
