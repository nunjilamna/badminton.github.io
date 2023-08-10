<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>

	<div class="container">
		<div class="row">
	    <div class="col-sm-12 col-lg-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Home</a></li>
						<li class="breadcrumb-item active">Detail Riwayat Transaksi</li>
				  </ol>
				</nav>
	    </div>

	    <div class="col-lg-12"><h1>DETAIL RIWAYAT TRANSAKSI</h1><hr>
        <h4>Invoice NO. <?php echo $history_detail_row->id_invoice ?>
					<?php if($history_detail_row->status == '1'){ ?>
		        <font color='red'>(BELUM LUNAS)</font>
		      <?php }elseif($history_detail_row->status == '2'){ ?>
		        <font color='green'>(LUNAS)</font>
		      <?php } ?>
				</h4>
				<?php echo form_open('cart/download_invoice/'.$history_detail_row->id_trans) ?>
					<button type="submit" name="download_invoice" class="btn btn-sm btn-success">Download Invoice</button>
				<?php echo form_close() ?>
				<br>
				<div class="row">
				  <div class="col-lg-12">
	          <div class="box-body table-responsive padding">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
										<th style="text-align: center">No.</th>
										<th style="text-align: center">Lapangan</th>
										<th style="text-align: center">Harga</th>
										<th style="text-align: center">Tanggal</th>
	                  <th style="text-align: center">Jam Mulai</th>
										<th style="text-align: center">Durasi</th>
										<th style="text-align: center">Jam Selesai</th>
	                  <th style="text-align: center">Total</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($history_detail as $history){ ?>
                  <tr>
										<td style="text-align:center"><?php echo $no++ ?></a></td>
                    <td style="text-align:left"><?php echo $history->nama_lapangan ?></a></td>
										<td style="text-align:center"><?php echo $history->harga_jual ?></td>
                    <td style="text-align:center"><?php echo tgl_indo($history->tanggal) ?></td>
                    <td style="text-align:center"><?php echo $history->jam_mulai ?></td>
                    <td style="text-align:center"><?php echo $history->durasi ?></td>
                    <td style="text-align:center"><?php echo $history->jam_selesai ?></td>
										<td style="text-align:center"><?php echo number_format($history->total) ?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
	  			  </div>
	  			</div>
				</div>
		  </div>

			<div class="col-lg-12">
				<table class="table table-striped table-bordered">
		      <tbody>
						<tr>
							<th scope="row">SubTotal</th>
							<td align="right">Rp</td>
							<td align="right"><?php echo number_format($history_detail_row->subtotal) ?></td>
						</tr>
						<tr>
							<th scope="row">Grand Total</th>
							<td align="right">Rp</td>
							<td align="right"><b><?php echo number_format($history_detail_row->grand_total) ?></b></td>
						</tr>
		      </tbody>
		    </table>
			</div>
	  </div>
	</div>
<?php $this->load->view('front/footer'); ?>
