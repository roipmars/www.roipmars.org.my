<!DOCTYPE html>
<html lang='ms-MY' data-bs-theme='auto'>

<head>
	<title>Jadual Aktiviti & Program</title>
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/combine/npm/datatables.net-bs5/css/dataTables.bootstrap5.min.css,npm/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css,npm/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css,npm/datatables.net-searchpanes-bs5/css/searchPanes.bootstrap5.min.css,npm/datatables.net-select-bs5/css/select.bootstrap5.min.css' crossorigin='anonymous'>
	<link rel='stylesheet' href='/assets/css/ncsimg.css' crossorigin='anonymous'>
</head>

<body>
	<?php require_once 'header.php' ?>
	<div class='container-fluid'>
		<div class='row text-center'>
			<div class='col my-2 jumbotron-fluid'>
				<h1 class='h1-responsive'>Aktiviti &amp; Program RoIPMARS</h1>
			</div>
		</div>
	</div>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-6 d-block text-center'>
				<h4>Net Mingguan RoIPMARS</h4>
				<!-- <p>Aktiviti mingguan dihentikan sementara pada Ramadan 1446H dan akan bersambung pada Ambang Aidilfitri 1446H</p> -->
				<table class='table table-bordered text-center align-middle'>
					<thead>
						<th>Hari</th>
						<th>Masa</th>
						<th>Program</th>
					</thead>
					<tbody>
						<tr class='opacity-25'>
							<td>Isnin</td>
							<td>&mdash;</td>
							<td>&mdash;</sup></td>
						</tr>
						<tr class='opacity-25'>
							<td>Selasa</td>
							<td>&mdash;</td>
							<td>&mdash;</td>
						</tr>
						<tr class='table-success'>
							<td>Wednesday</td>
							<td>1300z &vert; 2100myt</td>
							<td>RoIPMARS Learning English Net</td>
						</tr>
						<tr class='opacity-25'>
							<td>Khamis</td>
							<td>&mdash;</td>
							<td>&mdash;</td>
						</tr>
						<tr class='opacity-25'>
							<td>Jumaat</td>
							<td>&mdash;</td>
							<td>&mdash;</td>
						</tr>
						<tr class='table-primary'>
							<td>Sabtu</td>
							<td>1300z &vert; 2100myt</td>
							<td>RoIPMARS Net Hujung Minggu</td>
						</tr>
						<tr class='opacity-25'>
							<td>Ahad</td>
							<td>&mdash;</td>
							<td>&mdash;</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class='col-lg-6 align-self-center'>
				<div class='row text-center'>
					<div class='col-xxl'>Waktu Tempatan:<br><span id='UserTime'></span></div>
					<div class='col-xxl'>Waktu UTC:<br><span id='ZuluTime'></span></div>
				</div>
				<div id='gcal'></div>
			</div>
			<div class='col-12'>
				<p class='text-center my-2'>Sekiranya berhasrat untuk menjalankan sebarang aktiviti ataupun menyampaikan hebahan semasa aktiviti berlansung, sila berhubung terus dengan;</p>
				<div class='d-grid gap-2 col-10 mx-auto'>
					<a class='btn btn-success' role='button' href='https://wa.me/60148453456'><i class='bi-whatsapp'></i> Pegawai Siaraya RoIPMARS</a>
				</div>
			</div>
			<div class='col-12 my-3 text-center'>
				<h4>Barisan Petugas Bahagian Siaraya &amp; Aktiviti</h4>
				<div class='marquee rounded-pill clearfix w-75 mx-auto'>
					<div class='marquee-content scroll gap-5'>
						<div class='position-relative mx-5 px-5'>
							<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/member/025.png' alt='9W2AYP'>
							<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>9W2AYP<br><span class='fw-bold'>SABRI</span><br><span class='fw-light'>Pegawai Wilayah Malaysia</span></p>
						</div>
						<!-- <div class='position-relative mx-5 px-5'>
								<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/ncs/9m2sfl.png' alt='9M2SFL'>
								<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>9M2SFL<br><span class='fw-bold'>SAIFUL</span></p>
							</div> -->
						<!-- <div class='position-relative mx-5 px-5'>
								<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/ncs/9w2orl.png' alt='9W2ORL'>
								<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>9W2ORL<br><span class='fw-bold'>RAHIM</span></p>
							</div> -->
						<div class='position-relative mx-5 px-5'>
							<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/ncs/9m6jay.png' alt='9M6JAY'>
							<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>9M6JAY<br><span class='fw-bold'>JOHN JR.</span></p>
						</div>
						<!-- <div class='position-relative mx-5 px-5'>
								<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/member/010.png' alt='9M6AUA'>
								<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>9M6AUA<br><span class='fw-bold'>JEOFREY</span></p>
							</div> -->
						<!-- <div class='position-relative mx-5 px-5'>
								<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/member/017.png' alt='9M6RDY'>
								<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>9M6RDY<br><span class='fw-bold'>RUDY</span></p>
							</div> -->
						<div class='position-relative mx-5 px-5'>
							<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/ncs/9w6rhn.png' alt='9W6RHN'>
							<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>9W6RHN<br><span class='fw-bold'>ROSLAN</span></p>
						</div>
						<!-- <div class='position-relative mx-5 px-5'>
								<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/member/032.png' alt='V85AFF'>
								<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>V85AFF<br><span class='fw-bold'>MAHATHIR</span><br><span class='fw-light'>Pegawai Wilayah Brunei</span></p>
							</div> -->
						<!-- <div class='position-relative mx-5 px-5'>
								<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/member/037.png' alt='V85PZ'>
								<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>V85PZ<br><span class='fw-bold'>PENGIRAN AZIZ</span></p>
							</div> -->
						<!-- <div class='position-relative mx-5 px-5'>
								<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/ncs/yd4dta.png' alt='YD4DTA'>
								<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>YD4DTA<br><span class='fw-bold'>DITA</span><br><span class='fw-light'>Pegawai Wilayah Indonesia</span></p>
							</div>
							<div class='position-relative mx-5 px-5'>
								<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/ncs/yc4aum.png' alt='YC4AUM'>
								<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>YC4AUM<br><span class='fw-bold'>INDRA</span></p>
							</div>
							<div class='position-relative mx-5 px-5'>
								<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/ncs/yc8hbq.png' alt='YC8HBQ'>
								<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>YC8HBQ<br><span class='fw-bold'>ABDULLAH</span></p>
							</div>
							<div class='position-relative mx-5 px-5'>
								<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/ncs/yf5nzl.png' alt='YF5NZL'>
								<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>YF5NZL<br><span class='fw-bold'>NUZUL</span></p>
							</div>
							<div class='position-relative mx-5 px-5'>
								<img class='marquee-image img-fluid rounded-circle w-100 mx-auto' loading='lazy' src='https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/ncs/yf5wco.png' alt='YF5WCO'>
								<p class='position-absolute bottom-0 start-50 translate-middle-x bg-body rounded-3 lh-1 p-1 mb-3 fs-5'>YF5WCO<br><span class='fw-bold'>ISMAIL</span></p>
							</div> -->
					</div>
				</div>
			</div>
		</div>
		<!-- <div class='row'>
			<h4 class='text-center'>Suapan Langsung Rangkaian RoIPMARS</h4>
			<div class='col-lg-6 text-center'>
				<div id='hamlive'>
					<div class='spinner-border my-3' role='status'><span class='visually-hidden'>Memuatkan...</span></div>
				</div>
				<div id='hamlive-audio'></div>
			</div>
			<hr class='d-lg-none w-75 mx-auto my-2'>
			<div class='col-lg-6 text-center'>
				<div id='cblive'>
					<div class='spinner-border my-3' role='status'><span class='visually-hidden'>Memuatkan...</span></div>
				</div>
				<div id='cblive-audio'></div>
			</div>
		</div> -->
		<hr>
		<div class='row'>
			<div class='col-12 my-1 text-center'>
				<h2 class='font-weight-bold'>Takwim Program</h2>
			</div>
			<div class='table'>
				<table class='table table-striped text-center align-middle user-select-none' id='takwim'>
					<caption class='text-center'>
						<ul class='list-group'>
							<li class='list-group-item list-group-item-secondary'>&sup1; Tertakluk kepada Pengisytiharaan Penyimpan Mohor Besar Raja-Raja Melayu</li>
							<li class='list-group-item list-group-item-secondary'>&sup2; Pilihan Acara oleh NCS</li>
						</ul>
						<ul class='list-group list-group-horizontal'>
							<li class='list-group-item list-group-item-danger flex-fill'><i class='bi-person-slash text-danger'></i> Pengawal gagal hadir</li>
							<li class='list-group-item list-group-item-danger flex-fill'><i class='bi-envelope-slash text-danger'></i> Laporan gagal dihantar</li>
							<li class='list-group-item list-group-item-danger flex-fill'><i class='bi-send-slash text-danger'></i> Laporan belum diterima</li>
						</ul>
						</capton>
				</table>
				<div class='modal fade' id='netrep' tabindex='-1' aria-labelledby='netreport' aria-hidden='true'>
					<div class='modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg'>
						<div class='modal-content shadow'>
							<div class='modal-header'>
								<h4 class='modal-title text-center mx-auto lh-1' id='netreport'>Laporan Aktiviti</h4>
								<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
							</div>
							<div class='modal-body'>
								<div class='toast-container position-fixed top-50 start-50 translate-middle p-3 z-3'>
									<div id='prog-info' class='toast text-bg-info' role='status' aria-live='polite' aria-atomic='true'></div>
									<div id='prog-success' class='toast text-bg-success' role='status' aria-live='polite' aria-atomic='true'></div>
									<div id='prog-danger' class='toast text-bg-danger' role='alert' aria-live='assertive' aria-atomic='true'></div>
								</div>
								<div class='row text-center d-flex align-items-center justify-content-center'>
									<div class='col-lg-5'>
										<table class='table table-sm table-striped table-bordered' id='netRepCall'></table>
									</div>
									<div class='col-lg-7 pb-lg-3 h-100'>
										<canvas id='netRepCallGraph' loading='lazy' alt='NetCallGraph'></canvas>
									</div>
									<div class='col-lg-5'>
										<table class='table table-sm table-striped table-bordered' id='netRepMod'></table>
									</div>
									<div class='col-lg-7 pt-lg-3 h-100'>
										<canvas id='netRepModGraph' loading='lazy' alt='NetMoTGraph'></canvas>
									</div>
								</div>
								<hr class='my-3'>
								<div class='row text-center'>
									<table class='table table-striped align-middle text-uppercase text-nowrap user-select-none caption-top' id='netRep'>
										<caption class='text-lowercase text-center text-wrap p-0'>Klik pada Tanda Panggilan anda untuk mendapatkan Sijil Penyertaan</caption>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class='row'>
			<div class='col-12 my-2 d-block mx-auto'>
				<h2 class='text-center'>Statistik Program</h2>
				<p class='text-center'>&quot;Penyertaan &amp; Sokongan Anda adalah Kebanggaan Kita Semua&quot;</p>
			</div>
			<div class='col-lg-6 figure my-2'><canvas id='byTime' loading='lazy' alt='NetGraphTime'></canvas></div>
			<div class='col-lg-6 figure my-2'><canvas id='byDate' loading='lazy' alt='NetGraphDaily'></canvas></div>
			<div class='col-lg-6 figure my-2'><canvas id='byDay' loading='lazy' alt='NetGraphDay'></canvas></div>
			<div class='col-lg-6 figure my-2'><canvas id='byWeekDay' loading='lazy' alt='NetGraphWeekDay'></canvas></div>
			<div class='col-lg-6 figure my-2'><canvas id='byWeek' loading='lazy' alt='NetGraphWeekly'></canvas></div>
			<div class='col-lg-6 figure my-2'><canvas id='byMonth' loading='lazy' alt='NetGraphMonthly'></canvas></div>
			<div class='col-lg-6 figure my-2'><canvas id='byQuarter' loading='lazy' alt='NetGraphQuarterly'></canvas></div>
			<div class='col-lg-6 figure my-2'><canvas id='byMode' loading='lazy' alt='NetGraphMode'></canvas></div>
			<div class='col-lg-6 figure my-2'><canvas id='byCSLocaleDays' loading='lazy' alt='NetGraphCallerDays'></canvas></div>
			<div class='col-lg-6 figure my-2'><canvas id='byCSLocaleWeek' loading='lazy' alt='NetGraphCallerWeek'></canvas></div>
			<div class='col-lg-6 figure my-2'><canvas id='byCSLocaleMonth' loading='lazy' alt='NetGraphCallerMonth'></canvas></div>
			<div class='col-lg-6 figure my-2'><canvas id='byCSLocaleQuarter' loading='lazy' alt='NetGraphCallerQuarter'></canvas></div>
			<div class='col-lg-9 figure my-2 align-items-center'><canvas id='byCountry' loading='lazy' alt='NetGraphMap'></canvas></div>
			<div class='col-lg-3 align-self-center'>
				<table class='table table-sm table-striped text-center align-middle' id='uniq-ham-origin'></table>
			</div>
		</div>
		<hr>
		<div class='row my-1'>
			<div class='col-12'>
				<h3 class='text-center'>Kedudukan Kategori Jalur Amatur</h3>
			</div>
			<div class='col-12'>
				<h4 class='text-center'>RoIPMARS HAM Net</h4>
				<div class='row'>
					<div class='col-lg-6'>
						<h5 class='text-center'>Pengawal Tertinggi</h5>
						<table class='table table-sm table-striped text-center align-middle' id='all-ncs-rank'></table>
					</div>
					<div class='col-lg-6'>
						<h5 class='text-center'>Stesen Aktif</h5>
						<table class='table table-sm table-striped text-center align-middle' id='all-stn-rank'></table>
					</div>
				</div>
			</div>
			<div class='col-lg-6'>
				<h4 class='text-center'>RoIPMARS HAM Net Bahasa Inggeris</h4>
				<div class='row'>
					<div class='col-lg-12'>
						<h5 class='text-center'>Pengawal Tertinggi</h5>
						<table class='table table-sm table-striped text-center align-middle' id='en-ncs-rank'></table>
					</div>
					<div class='col-lg-12'>
						<h5 class='text-center'>Stesen Aktif</h5>
						<table class='table table-sm table-striped text-center align-middle' id='en-stn-rank'></table>
					</div>
				</div>
			</div>
			<div class='col-lg-6'>
				<h4 class='text-center'>RoIPMARS HAM Net Bahasa Melayu</h4>
				<div class='row'>
					<div class='col-lg-12'>
						<h5 class='text-center'>Pengawal Tertinggi</h5>
						<table class='table table-sm table-striped text-center align-middle' id='ms-ncs-rank'></table>
					</div>
					<div class='col-lg-12'>
						<h5 class='text-center'>Stesen Aktif</h5>
						<table class='table table-sm table-striped text-center align-middle' id='ms-stn-rank'></table>
					</div>
				</div>
			</div>
			<!-- <div class='col-lg-4'>
					<h4 class='text-center'>RoIPMARS HAM Net Bahasa Indonesia</h4>
					<div class='row'>
						<div class='col-lg-12'>
							<h5 class='text-center'>Pengawal Tertinggi</h5>
							<table class='table table-sm table-striped text-center align-middle' id='id-ncs-rank'></table>
						</div>
						<div class='col-lg-12'>
							<h5 class='text-center'>Stesen Aktif</h5>
							<table class='table table-sm table-striped text-center align-middle' id='id-stn-rank'></table>
						</div>
					</div>
				</div> -->
		</div>
		<!-- <div class='row my-1'>
				<div class='col-lg-6'>
					<h3 class='text-center'>Kedudukan Kategori Jalur Rakyat</h3>
					<h4 class='text-center'>RoIPMARS CB Net Bahasa Melayu</h4>
					<div class='row'>
						<div class='col-lg-6'>
							<h5 class='text-center'>Pengawal Tertinggi</h5>
							<table class='table table-sm table-striped text-center align-middle' id='cb-ncs-rank'></table>
						</div>
						<div class='col-lg-6'>
							<h5 class='text-center'>Stesen Paling Aktif</h5>
							<table class='table table-sm table-striped text-center align-middle' id='cb-stn-rank'></table>
						</div>
					</div>
				</div>
				<div class='col-lg-6'>
					<h3 class='text-center'>Kedudukan Kategori Terbuka &lpar;VoIP&rpar;</h3>
					<h4 class='text-center'>RoIPMARS OpenVoIP Net Bahasa Melayu</h4>
					<div class='row'>
						<div class='col-lg-6'>
							<h5 class='text-center'>Pengawal Tertinggi</h5>
							<table class='table table-sm table-striped text-center align-middle' id='voi-ncs-rank'></table>
						</div>
						<div class='col-lg-6'>
							<h5 class='text-center'>Stesen Paling Aktif</h5>
							<table class='table table-sm table-striped text-center align-middle' id='voi-stn-rank'></table>
						</div>
					</div>
				</div>
			</div> -->
		<hr>
		<div class='row my-1'>
			<div class='col-12'>
				<h3 class='text-center'>Pemenang Bertuah Rangkaian RoIPMARS</h3>
			</div>
			<div class='col-lg-12'>
				<h4 class='text-center'>Ulang Tahun RoIPMARS 2024</h4>
				<table class='table table-bordered table-sm table-responsive-sm text-center align-middle'>
					<thead>
						<th>No</th>
						<th>Stesen</th>
					</thead>
					<tbody>
						<tr>
							<td>1<sup>st</sup></td>
							<td>YC8HBQ</td>
						</tr>
						<tr>
							<td>2<sup>nd</sup></td>
							<td>9W2ESR</td>
						</tr>
						<tr>
							<td>3<sup>rd</sup></td>
							<td>9W6LLV</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class='col-lg-6'>
				<h4 class='text-center'>Hadiah Misteri Petugas Aktiviti 2023</h4>
				<table class='table table-bordered table-sm table-responsive-sm text-center align-middle'>
					<thead>
						<th>No</th>
						<th>Stesen</th>
						<th>Kategori</th>
					</thead>
					<tbody>
						<tr>
							<td>1<sup>st</sup></td>
							<td>9M2SFL</td>
							<td>Rekod <sup>2nd</sup>, Tugasan <sup>2nd</sup>, KPI <sup>2nd</sup></td>
						</tr>
						<tr>
							<td>2<sup>nd</sup></td>
							<td>9W6RHN</td>
							<td>Tugasan <sup>3rd</sup>, KPI <sup>3rd</sup></td>
						</tr>
						<tr>
							<td>3<sup>rd</sup></td>
							<td>9M6JAY</td>
							<td>KPI <sup>4th</sup></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class='col-lg-6'>
				<h4 class='text-center'>Saguhati Petugas Aktiviti 2023</h4>
				<table class='table table-bordered table-sm table-responsive-sm text-center align-middle'>
					<thead>
						<th>No</th>
						<th>Stesen</th>
						<th>Sokongan</th>
					</thead>
					<tbody>
						<tr>
							<td>1<sup>st</sup></td>
							<td>9W2AYP</td>
							<td>99%</td>
						</tr>
						<tr>
							<td>2<sup>nd</sup></td>
							<td>V85AFF</td>
							<td>76%</td>
						</tr>
						<tr>
							<td>3<sup>rd</sup></td>
							<td>9W6MOZ</td>
							<td>63%</td>
						</tr>
						<tr>
							<td>4<sup>th</sup></td>
							<td>9W2SNN</td>
							<td>59%</td>
						</tr>
						<tr>
							<td>5<sup>th</sup></td>
							<td>9W2YBT</td>
							<td>58%</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class='col-lg-6'>
				<h4 class='text-center'>HAM Net Khas Ambang Tahun Baru Cina 2023</h4>
				<table class='table table-bordered table-sm table-responsive-sm text-center align-middle'>
					<thead>
						<th>No</th>
						<th>Stesen</th>
					</thead>
					<tbody>
						<tr>
							<td>1<sup>st</sup></td>
							<td>9W2EVQ</td>
						</tr>
						<tr>
							<td>2<sup>nd</sup></td>
							<td>9M2RAN</td>
						</tr>
						<tr>
							<td>3<sup>rd</sup></td>
							<td>9W2JCP</td>
						</tr>
						<tr>
							<td>4<sup>th</sup></td>
							<td>9W2ESR</td>
						</tr>
						<tr>
							<td>5<sup>th</sup></td>
							<td>V85AFF</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class='col-lg-6'>
				<h4 class='text-center'>CB Net Khas Sambutan Tahun Baru Cina 2023</h4>
				<table class='table table-bordered table-sm table-responsive-sm text-center align-middle'>
					<thead>
						<th>No</th>
						<th>Stesen</th>
					</thead>
					<tbody>
						<tr>
							<td>1<sup>st</sup></td>
							<td>91DATHP</td>
						</tr>
						<tr>
							<td>2<sup>nd</sup></td>
							<td>113MSSAM</td>
						</tr>
						<tr>
							<td>3<sup>rd</sup></td>
							<td>113DANDI</td>
						</tr>
						<tr>
							<td>4<sup>th</sup></td>
							<td>91DAGBW</td>
						</tr>
						<tr>
							<td>5<sup>th</sup></td>
							<td>91KMAGP</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class='col-lg-6'>
				<h4 class='text-center'>HAM Net Khas Ambang Tahun Baru 2023</h4>
				<table class='table table-bordered table-sm table-responsive-sm text-center align-middle'>
					<thead>
						<th>No</th>
						<th>Stesen</th>
					</thead>
					<tbody>
						<tr>
							<td>1<sup>st</sup></td>
							<td>9W6AFF</td>
						</tr>
						<tr>
							<td>2<sup>nd</sup></td>
							<td>YD5NCU</td>
						</tr>
						<tr>
							<td>3<sup>rd</sup></td>
							<td>9W6MOZ</td>
						</tr>
						<tr>
							<td>4<sup>th</sup></td>
							<td>9W2YJT</td>
						</tr>
						<tr>
							<td>5<sup>th</sup></td>
							<td>YC3RDY</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class='col-lg-6'>
				<h4 class='text-center'>CB Net Khas Sambutan Tahun Baru 2023</h4>
				<table class='table table-bordered table-sm table-responsive-sm text-center align-middle'>
					<thead>
						<th>No</th>
						<th>Stesen</th>
					</thead>
					<tbody>
						<tr>
							<td>1<sup>st</sup></td>
							<td>113DAHRY</td>
						</tr>
						<tr>
							<td>2<sup>nd</sup></td>
							<td>113DAZIK</td>
						</tr>
						<tr>
							<td>3<sup>rd</sup></td>
							<td>225BSLIM</td>
						</tr>
						<tr>
							<td>4<sup>th</sup></td>
							<td>113DAISS</td>
						</tr>
						<tr>
							<td>5<sup>th</sup></td>
							<td>113MSUZL</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php require_once 'footer.php' ?>
	<script src='https://cdn.jsdelivr.net/combine/npm/pdfmake,npm/pdfmake/build/vfs_fonts.min.js,npm/datatables.net,npm/datatables.net-bs5,npm/datatables.net-buttons,npm/datatables.net-buttons-bs5,npm/datatables.net-buttons/js/buttons.html5.min.js,npm/datatables.net-responsive,npm/datatables.net-responsive-bs5,npm/datatables.net-searchpanes,npm/datatables.net-searchpanes-bs5,npm/datatables.net-select,npm/datatables.net-select-bs5' crossorigin='anonymous'></script>
	<script src='https://cdn.jsdelivr.net/npm/jspdf/dist/jspdf.umd.min.js' crossorigin='anonymous'></script>
	<script src='https://cdn.jsdelivr.net/combine/npm/chart.js,npm/chartjs-chart-geo,npm/chartjs-plugin-annotation,npm/chartjs-plugin-datalabels,npm/chartjs-plugin-deferred' crossorigin='anonymous'></script>
	<script src='https://cdn.jsdelivr.net/npm/chartjs-plugin-watermark/chartjs-plugin-watermark.min.js' crossorigin='anonymous'></script>
	<script src='/assets/js/keys.js'></script>
	<script src='/assets/js/program.js'></script>
	<script src='/assets/js/stats.js'></script>
	<script src='/assets/js/bcfy-stat.js'></script>
</body>

</html>