<section class="content">
  <!-- penampilan total record -->
  <!-- <div class="row">
    <div class='col-lg-4'>
      <div class='small-box bg-teal'>
        <div class='inner'><h3> Rp <?php echo number_format($omset_harian) ?> </h3><p><b>OMSET HARI INI</b></p></div>
        <div class='icon'><i class='fa fa-money'></i></div>
        <a href='<?php echo base_url('admin/transaksi') ?>' class='small-box-footer'>Selengkapnya <i class='fa fa-arrow-circle-right'></i></a>
      </div>
    </div>
    <div class='col-lg-4'>
      <div class='small-box bg-teal'>
        <div class='inner'><h3> Rp <?php echo number_format($omset_bulanan) ?> </h3><p><b>OMSET BULAN INI</b></p></div>
        <div class='icon'><i class='fa fa-money'></i></div>
        <a href='<?php echo base_url('admin/transaksi') ?>' class='small-box-footer'>Selengkapnya <i class='fa fa-arrow-circle-right'></i></a>
      </div>
    </div>
    <div class='col-lg-4'>
      <div class='small-box bg-teal'>
        <div class='inner'><h3> Rp <?php echo number_format($omset_tahunan) ?> </h3><p><b>OMSET TAHUN INI</b></p></div>
        <div class='icon'><i class='fa fa-money'></i></div>
        <a href='<?php echo base_url('admin/transaksi') ?>' class='small-box-footer'>Selengkapnya <i class='fa fa-arrow-circle-right'></i></a>
      </div>
    </div> -->
    
    <div class='col-lg-4'>
      <div class='small-box bg-green'>
        <div class='inner'><h3> <?php echo $total_lapangan ?> </h3><p><b>LAPANGAN</b></p></div>
        <div class='icon'><i class='fa fa-list'></i></div>
        <a href='<?php echo base_url('admin/lapangan') ?>' class='small-box-footer'>Selengkapnya <i class='fa fa-arrow-circle-right'></i></a>
      </div>
    </div>
   
    <div class='col-lg-4'>
      <div class='small-box bg-maroon'>
        <div class='inner'><h3> <?php echo $total_slider ?> </h3><p><b>SLIDER</b></p></div>
        <div class='icon'><i class='fa fa-credit-card'></i></div>
        <a href='<?php echo base_url('admin/slider') ?>' class='small-box-footer'>Selengkapnya <i class='fa fa-arrow-circle-right'></i></a>
      </div>
    </div>
    <div class='col-lg-4'>
      <div class='small-box bg-teal'>
        <div class='inner'><h3> <?php echo $total_customer ?> </h3><p><b>CUSTOMER</b></p></div>
        <div class='icon'><i class='fa fa-user'></i></div>
        <a href='<?php echo base_url('admin/auth') ?>' class='small-box-footer'>Selengkapnya <i class='fa fa-arrow-circle-right'></i></a>
      </div>
    </div>
  </div>
</section><!-- /.content -->
