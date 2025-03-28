<!DOCTYPE html>
<html lang='ms-MY' data-bs-theme='auto'>

<head>
  <title>Soalan Lazim</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/combine/npm/datatables.net-bs5/css/dataTables.bootstrap5.min.css,npm/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css,npm/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css,npm/datatables.net-searchpanes-bs5/css/searchPanes.bootstrap5.min.css,npm/datatables.net-select-bs5/css/select.bootstrap5.min.css' crossorigin='anonymous'>
</head>

<body>
  <?php require_once 'header.php' ?>
  <div class='container'>
    <h1 class='h1 text-center'>Soalan Lazim</h1>
    <div class='row'>
      <div class='col-xl-8'>
        <div class='col-auto mb-3'>
          <h3 class='text-capitalize text-center text-primary-emphasis'>Rangkaian RoIPMARS</h3>
          <div class='accordion' id='rmsfaq'>
            <div class='accordion-item'>
              <div class='accordion-header' id='rms1'>
                <button type='button' class='accordion-button collapsed bg-primary-subtle text-primary-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapserms1' aria-expanded='false' aria-controls='collapserms1'><i class='bi-1-circle-fill text-primary-emphasis fs-5 pe-3'></i>Bagaimana cara untuk menjadi ahli RoIPMARS?</button>
              </div>
              <div id='collapserms1' class='accordion-collapse collapse' aria-labelledby='rms1' data-bs-parent='#rmsfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Anda boleh layari laman <a class='text-muted' href='member'>Ahli</a> dan dapatkan borang keahlian disana. Terdapat 2 kaedah pengisian borang iaitu melalui Google Form, atau fail PDF. Anda dikehendaki kembalikan borang tersebut dengan lengkap kepada Setiausaha Agung, Persatuan Peminat Radio Komunikasi &lpar;ROIP&rpar; bersama dengan bukti yuran pendaftaran, salinan pengenalan diri, dan sekeping gambar berukuran pasport.</p>
                </div>
              </div>
            </div>
            <div class='accordion-item'>
              <div class='accordion-header' id='rms2'>
                <button type='button' class='accordion-button collapsed bg-primary-subtle text-primary-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapserms2' aria-expanded='false' aria-controls='collapserms2'><i class='bi-2-circle-fill text-primary-emphasis fs-5 pe-3'></i>Saya telah berdaftar sebagai Ahli CB RoIPMARS, adakah saya secara sah menjadi Ahli Persatuan?</button>
              </div>
              <div id='collapserms2' class='accordion-collapse collapse' aria-labelledby='rms2' data-bs-parent='#rmsfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Tidak sama sekali. Identiti ahli CB dan ahli RoIPMARS adalah berbeza. Anda mendaftar sebagai ahli CB rangkaian kami hanya sebagai rekod bagi mengelakkan pertindihan isyarat panggilan jalur rakyat yang digunakan.</p>
                  <p class='m-0'>Antara awalan isyarat panggilan yang digunakan oleh CB Rangkaian RoIPMARS adalah:</p>
                  <table class='table table-sm table-bordered text-center align-middle m-0'>
                    <tbody>
                      <tr class='fw-bold text-primary-emphasis'>
                        <td>&lbrack;🇲🇾&rbrack; 113MSA₁A₂A₃</td>
                        <td>&lbrack;🇲🇾&rbrack; 58MSA₁A₂A₃</td>
                        <td>&lbrack;🇮🇩&rbrack; 91MSA₁A₂A₃</td>
                        <td>&lbrack;🇹🇭&rbrack; 153MSA₁A₂A₃</td>
                        <td>&lbrack;🇧🇳&rbrack; 225MSA₁A₂A₃</td>
                      </tr>
                    </tbody>
                    <caption class='fw-bold text-center'>A₁A₂A₃ hendaklah mewakili sebarang abjad A hingga Z</caption>
                  </table>
                  <p class='m-0'>Anda digalakkan untuk berdaftar sebagai Ahli Persatuan yang mempunyai pelbagai kelebihan berbanding Ahli CB kami.</p>
                </div>
              </div>
            </div>
            <div class='accordion-item'>
              <div class='accordion-header' id='rms3'>
                <button type='button' class='accordion-button collapsed bg-primary-subtle text-primary-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapserms3' aria-expanded='false' aria-controls='collapserms3'><i class='bi-3-circle-fill text-primary-emphasis fs-5 pe-3'></i>Mengapa sambungan ke pelayan TeamSpeak3 selain RoIPMARS gagal pada peranti saya?</button>
              </div>
              <div id='collapserms3' class='accordion-collapse collapse' aria-labelledby='rms3' data-bs-parent='#rmsfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Pelayan TeamSpeak3 milik <abbr title='roipmars.org.my'>Rangkaian RoIPMARS</abbr> merupakan sebuah penyedia perkhidmatan berlesen yang dibiaya oleh ahli-ahli Persatuan Peminat Radio Komunikasi &lpar;ROIP&rpar;. Tambahan lagi, pelayan milik Rangkaian RoIPMARS menyokong sambungan dari semua versi pengguna.</p>
                  <p class='m-0'>Terdapat beberapa faktor yang tidak membenarkan anda masuk ke pelayan selain Rangkaian RoIPMARS, antaranya:</p>
                  <table class='table table-sm table-bordered text-center align-middle my-2'>
                    <thead>
                      <tr>
                        <th>Ralat</th>
                        <th>Penerangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class='fw-bold fst-italic'>server outdated</td>
                        <td class='text-start'>&ensp;pelayan tidak menyokong sambungan melalui perisian yang anda gunakan &lpar;pengguna&rpar;</td>
                      </tr>
                      <tr>
                        <td class='fw-bold fst-italic'>client outdated</td>
                        <td class='text-start'>&ensp;perisian yang anda gunakan tidak disokong oleh pelayan &lpar;pengguna&rpar;</td>
                      </tr>
                      <tr>
                        <td class='fw-bold fst-italic'>TSDNS error</td>
                        <td class='text-start'>
                          <ol class='m-0' type='i'>
                            <li>kesilapan alamat pelayan &lpar;pengguna&rpar;</li>
                            <li>ralat tetapan DNS &lpar;penyedia perkhidmatan&rpar;</li>
                          </ol>
                        </td>
                      </tr>
                      <tr>
                        <td class='fw-bold fst-italic'>flood prevention</td>
                        <td class='text-start'>&ensp;ralat tetapan pelayan &lpar;penyedia perkhidmatan&rpar;</td>
                      </tr>
                      <tr>
                        <td class='fw-bold fst-italic'>server blacklisted</td>
                        <td class='text-start'>&ensp;pelayan disenarai hitam &lpar;menurut TeamSpeak, ini bukan sahaja untuk memerangi perisian cetak rompak, tetapi juga untuk perlindungan terhadap pelayan yang menyebarkan perisian hasad&rpar;</td>
                      </tr>
                      <tr>
                        <td class='fw-bold fst-italic'>connection error</td>
                        <td class='text-start'>
                          <ol class='m-0' type='i'>
                            <li>kesilapan alamat/ip pelayan &lpar;pengguna&rpar;</li>
                            <li>tidak beroperasi &lpar;penyedia perkhidmatan&rpar;</li>
                          </ol>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <p class='m-0'>Sekiranya anda tidak berjaya log masuk ke pelayan Rangkaian RoIPMARS &lbrack;<a href='ts3server://roipmars.org.my'>roipmars.org.my</a>&rbrack;, berkemungkinan sumber perisian yang digunakan tidak menyokong fungsi &apos;DNS <span class='fw-light fst-italic'>&lpar;Domain Name System&rpar;</span>&apos;.</p>
                  <p class='m-0'>Disarankan untuk memasang aplikasi dari <a href='https://play.google.com/store/apps/details?id=com.teamspeak.ts3client' target='_blank'>Google Play Store</a> / <a href='https://itunes.apple.com/app/teamspeak-3/id577628510' target='_blank'>Apple App Store</a> / <a href='https://apps.microsoft.com/detail/xpdcj80kgnrvss' target='_blank'>Microsoft Store</a>.</p>
                  <p class='m-0'>Bagi pengguna Android, anda boleh mencuba perisian fungsi terhad dengan memuat turun disini: <a href='https://dl.roipmars.org.my/files/downloads/android/teamspeak/roipmars-ts-3.0.3.1.apk' download>ts-3.0.3.1.apk</a></p>
                  <p class='m-0'>Pihak Pentadbir Rangkaian RoIPMARS komited menyediakan perkhidmatan terbaik kepada semua pengguna.</p>
                  <div id='tsServer'></div>
                </div>
              </div>
            </div>
            <div class='accordion-item'>
              <div class='accordion-header' id='rms4'>
                <button type='button' class='accordion-button collapsed bg-primary-subtle text-primary-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapserms4' aria-expanded='false' aria-controls='collapserms4'><i class='bi-4-circle-fill text-primary-emphasis fs-5 pe-3'></i>Mengapa saya gagal memasang &apos;apk&apos; TeamSpeak3 yang diberikan rakan pada peranti iOS saya?</button>
              </div>
              <div id='collapserms4' class='accordion-collapse collapse' aria-labelledby='rms4' data-bs-parent='#rmsfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Sistem operasi dan perisian yang digunakan pada kedua dua peranti iOS dan Android adalah berbeza. iOS menggunakan kod sumber tertutup yang dibangunkan sendiri oleh Apple Inc., manakala Android pula menggunakan kod sumber terbuka yang dimiliki oleh Google LLC.</p>
                  <p>Tahap keselamatan perisian dari pihak Apple tidak membenarkan pemasangan mana-mana aplikasi selain daripada Apple App Store.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='col-auto mb-3'>
          <h3 class='text-capitalize text-center text-secondary-emphasis'>Gerbang Audio / Radio</h3>
          <div class='accordion' id='gwfaq' aria-multiselectable='true'>
            <div class='accordion-item'>
              <div class='accordion-header' id='gw1'>
                <button type='button' class='accordion-button collapsed bg-secondary-subtle text-secondary-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapsegw1' aria-expanded='false' aria-controls='collapsegw1'><i class='bi-1-circle-fill text-secondary-emphasis fs-5 pe-3'></i>Mengapa kualiti audio mempunyai kelewatan dan tidak jernih?</button>
              </div>
              <div id='collapsegw1' class='accordion-collapse collapse' aria-labelledby='gw1' data-bs-parent='#gwfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Segala gerbang yang disediakan adalah kepunyaan INDIVIDU sepenuhnya. Pelbagai faktor perlu diambil kira untuk menyediakan gerbang tersebut, antaranya:</p>
                  <ol class='m-0' type='i'>
                    <li>spesifikasi &amp; kestabilan peranti</li>
                    <li>kelajuan, kependaman &amp; kestabilan sambungan</li>
                  </ol>
                </div>
              </div>
            </div>
            <div class='accordion-item'>
              <div class='accordion-header' id='gw2'>
                <button type='button' class='accordion-button collapsed bg-secondary-subtle text-secondary-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapsegw2' aria-expanded='false' aria-controls='collapsegw2'><i class='bi-2-circle-fill text-secondary-emphasis fs-5 pe-3'></i>Bolehkah saya membuat sambungan ke RoIPMARS?</button>
              </div>
              <div id='collapsegw2' class='accordion-collapse collapse' aria-labelledby='gw2' data-bs-parent='#gwfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Segala sambungan dari/ke komuniti/kumpulan lain adalah dialu-alukan. Namun yang demikian, pemilik gerbang wajib menetapkan &apos;nickname&apos; berpandukan pada format ini;</p>
                  <p class='m-0 text-center fw-bold font-monospace user-select-none'>CALLSIGN&lt;jarak&gt;FREKUENSI/ALAMAT&lt;jarak&gt;LOKAL</p>
                  <p class='m-0 text-center'>contoh: <span class='fst-italic font-monospace user-select-none'>9W4GPA 144.8250MHz KUALA SELANGOR</span></p>
                  <p class='m-0'>Pihak RoIPMARS tidak akan bertanggungjawab keatas segala kejadian yang tidak diingini semasa sambungan berlansung. Ianya adalah tanggungjawab sepenuhnya pemilik sambugan itu sendiri.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='col-auto mb-3'>
          <h3 class='text-capitalize text-center text-success-emphasis'>Jalur Amatur</h3>
          <div class='accordion' id='hamfaq' aria-multiselectable='true'>
            <div class='accordion-item'>
              <div class='accordion-header' id='ham1'>
                <button type='button' class='accordion-button collapsed bg-success-subtle text-success-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapseham1' aria-expanded='false' aria-controls='collapseham1'><i class='bi-1-circle-fill text-success-emphasis fs-5 pe-3'></i>Bagaimana cara untuk menyertai aktiviti net yang dijalankan?</button>
              </div>
              <div id='collapseham1' class='accordion-collapse collapse' aria-labelledby='ham1' data-bs-parent='#hamfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Anda boleh dapatkan maklumat pemasangan aplikasi di <a class='text-muted' href='howto'>Tutorial</a> dan sertai aktiviti dalam talian kami disana.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='col-auto mb-3'>
          <h3 class='text-capitalize text-center text-danger-emphasis'>Jalur Rakyat</h3>
          <div class='accordion' id='cbfaq' aria-multiselectable='true'>
            <div class='accordion-item'>
              <div class='accordion-header' id='cb1'>
                <button type='button' class='accordion-button collapsed bg-danger-subtle text-danger-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapsecb1' aria-expanded='false' aria-controls='collapsecb1'><i class='bi-1-circle-fill text-danger-emphasis fs-5 pe-3'></i>Adakah lesen dari MCMC (SKMM) diperlukan untuk penggunaan CB RADIO?</button>
              </div>
              <div id='collapsecb1' class='accordion-collapse collapse' aria-labelledby='cb1' data-bs-parent='#cbfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Anda tidak perlu memohon sebarang lesen seperti RADIO AMATUR atau Komersial yang lain asalkan ianya mengunakan jalur CB atau jalur PRS kerana anda dibenarkan menggunakan jalur tersebut tanpa lesen.</p>
                  <div class='alert alert-light' role='alert'>
                    <p class='h5'>Jalur frekuensi</p>
                    <p>Peranti perkhidmatan radio peribadi hanya boleh menggunakan mana-mana jalur frekuensi berikut yang ditetapkan untuk tugasan kelas ini, antara kegunaan lain, atas dasar bukan eksklusif yang dikongsi:</p>
                    <ol type='i'>
                      <li>26.965 MHz ke 27.405 MHz</li>
                      <li>446.00625 MHz ke 446.196875 MHz</li>
                      <li class='text-decoration-line-through opacity-25'>>477.0125 MHz ke 477.4875 MHz</li>
                      <li class='text-decoration-line-through opacity-25'>>477.5250 MHz ke 477.9875 MHz</li>
                    </ol>
                    <hr>
                    <p class='h5'>Tugasan kelas</p>
                    <p>Tugasan kelas ini memberikan hak kepada mana-mana orang untuk mengendalikan peranti PRS tertakluk kepada:</p>
                    <ol type='a'>
                      <li>syarat-syarat seperti yang dinyatakan dalam perenggan 4 jadual ini; dan</li>
                      <li>peranti yang beroperasi dalam jalur frekuensi seperti yang dinyatakan dalam lajur kedua Jadual 4-1, 4-2, dan 4-3.</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <div class='accordion-item'>
              <div class='accordion-header' id='cb2'>
                <button type='button' class='accordion-button collapsed bg-danger-subtle text-danger-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapsecb2' aria-expanded='false' aria-controls='collapsecb2'><i class='bi-2-circle-fill text-danger-emphasis fs-5 pe-3'></i>Adakah perlu pendaftaran dengan mana-mana kelab atau SKMM untuk mendapatkan Isyarat Panggilan?</button>
              </div>
              <div id='collapsecb2' class='accordion-collapse collapse' aria-labelledby='cb2' data-bs-parent='#cbfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Anda tidak perlu memohon, mendaftar atau membayar apa-apa bayaran untuk isyarat panggilan kerana pengguna CB RADIO tidak memerlukan sebarang isyarat panggilan yang khusus seperti Radio Amatur. Anda boleh cipta sendiri isyarat panggilan yang diperlukan sebagai pengenalan kepada rakan-rakan kumpulan anda atau ahli keluarga anda bagi memudahkan perhubungan melalui radio dua hala atau CB RADIO.</p>
                  <p class='alert alert-danger m-0'>Namun begitu, permohonan diwajibkan sekiranya kelab atau organisasi tersebut memerlukannya bagi mengelakkan pertindihan sesama ahli.</p>
                  <p class='m-0'>Antara sebutan fonetik yang digunakan oleh stesen seluruh dunia adalah seperti diatas</p>
                  <p class='h5 m-0'>Penggunaan Isyarat Panggilan</p>
                  <p class='m-0'>Tiada isyarat panggilan digunakan selain dalam bidang operasi di mana isyarat panggilan tersebut diperlukan.</p>
                </div>
              </div>
            </div>
            <div class='accordion-item'>
              <div class='accordion-header' id='cb3'>
                <button type='button' class='accordion-button collapsed bg-danger-subtle text-danger-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapsecb3' aria-expanded='false' aria-controls='collapsecb3'><i class='bi-3-circle-fill text-danger-emphasis fs-5 pe-3'></i>Dimana saya boleh membeli peralatan CB RADIO?</button>
              </div>
              <div id='collapsecb3' class='accordion-collapse collapse' aria-labelledby='cb3' data-bs-parent='#cbfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Anda boleh membeli melalui e-dagang di Malaysia, melalui rakan-rakan CB atau kedai Radio Amatur samada di Jalan Pasar, Plaza Low Yatt, atau Plaza Digital Mall. Yang penting ianya adalah CB RADIO yang jalurnya telah diaturkan seperti diatas. Kami mencadangkan anda tidak membeli melalui e-dagang luar negara kerana nanti anda akan kerugian masa, wang dan sebagainya di atas kerenah birokrasi yang bermacam-macam samada dari pihak kastam ataupun pihak SIRIM mengenai peralatan radio.</p>
                </div>
              </div>
            </div>
            <div class='accordion-item'>
              <div class='accordion-header' id='cb4'>
                <button type='button' class='accordion-button collapsed bg-danger-subtle text-danger-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapsecb4' aria-expanded='false' aria-controls='collapsecb4'><i class='bi-4-circle-fill text-danger-emphasis fs-5 pe-3'></i>Berapa harga sebuah CB RADIO jenis Handy atau jenis Rig?</a>
              </div>
              <div id='collapsecb4' class='accordion-collapse collapse' aria-labelledby='cb4' data-bs-parent='#cbfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Harga purata kebanyakan CB Radio adalah mengikut jenis samada Handy atau Rig dan multimode atau hanya mode AM dan FM sahaja. Untuk jenis Handy mode AM dan FM purata harganya adalah sekitar RM 50.00 ke RM 400.00 manakala untuk jenis Rig mode AM dan FM harganya sekitar RM 200.00 ke RM 1,000.00. Untuk CB RADIO jenis mobile multimode agak mahal sedikit kerana kebanyakan jenis multimode mempunyai berbagai kelebihan seperti frequency counter, echo, scanning dan sebagainya seperti peralatan HAM RADIO. Harganya boleh mencapai sehingga RM 3,000.00. Tujuan radio dua hala adalah untuk perhubungan maka asas CB Radio pun sudah memadai tidak perlu membeli peralatan yang canggih dengan berbagai fungsi sedangkan kita tidak menggunakan fungsi tersebut semasa berbual atau berhubung dengan rakan-rakan CB.</p>
                </div>
              </div>
            </div>
            <div class='accordion-item'>
              <div class='accordion-header' id='cb5'>
                <button type='button' class='accordion-button collapsed bg-danger-subtle text-danger-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapsecb5' aria-expanded='false' aria-controls='collapsecb5'><i class='bi-5-circle-fill text-danger-emphasis fs-5 pe-3'></i>Masih adakah pengguna CB RADIO di Malaysia?</button>
              </div>
              <div id='collapsecb5' class='accordion-collapse collapse' aria-labelledby='cb5' data-bs-parent='#cbfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Tidak ramai yang tahu mengenai CB RADIO kerana tidak ada usaha promosi dibuat untuk penggemar CB Radio. Orang ramai lebih suka mempromosikan Radio Amatur kerana merasakan CB RADIO ini untuk golongan yang kurang berkemampuan dan hanya menggunakan radio dua hala sebagai hobi sahaja tidak seperti Radio Amatur yang mempunyai kelebihan seperti perlu mengambil peperiksaan, membayar lesen, mempunyai isyarat panggilan khusus yang diberikan oleh pihak SKMM dan sebagainya. Jika ada hobi menggunakan radio dua hala secara murah untuk permulaan, kenapa kita tidak gunakan, yang penting boleh digunakan untuk berhubung di antara satu sama lain sama juga dengan fungsi Radio Amatur. Namun demikian, akan ada kelab atau komuniti yang mempromosi atau memperkenalkan CB RADIO kepada orang ramai sebagai alat perhubungan alternatif atau pilihan kedua selain telefon pintar atau radio amatur. CB RADIO juga bagus untuk kegunaan pemandu lori kontena yang berkonvoi semasa perjalanan malam, pemandu bas ekspres untuk mengelak dari mengantuk atau boleh dijadikan sebagai peralatan pemberi amaran awal sekiranya rakan pemandu melihat atau ternampak sesuatu yang mencurigakan di jalan raya. Semasa acara sukan, camping, atau kenapa tidak anda memulakan penggunaan CB RADIO sebagai alat perhubungan anda dan keluarga anda semasa konvoi dan sebagainya selagi pengunaanya selari dengan peraturan yang tertera di dalam peruntukan kelas (Class Assignment).</p>
                  <div class='alert alert-light' role='alert'>
                    <h4 class='text-center'>COMMUNICATIONS AND MULTIMEDIA ACT 1998</h4>
                    <h5 class='text-center'>CLASS ASSIGNMENT NO. 2 OF 2022</h5>
                    <p>IN exercise of the powers conferred by section 169 of the Communications and Multimedia Act 1998 [Act 588] ("Act"), the Commission issues class assignments which confers rights on any person to use the frequency bands for the following devices:</p>
                    <p>(4) personal radio service ("PRS") device as specified in the Fourth Schedule;</p>
                    <a href='https://www.mcmc.gov.my/skmmgovmy/media/General/registers/cma/Class-Assignment-No-2-of-2022.pdf#page=5' target='_blank'>Baca Lanjut...</a>
                    <hr>
                    <h4 class='text-center'>FOURTH SCHEDULE</h4>
                    <h5 class='text-center'>Class Assignment for Personal Radio Service Device</h5>
                    <p>1. Definition</p>
                    <p>(1) In this class assignment, "PRS device" means a two-way radiocommunications device operating in the designated frequency bands.</p>
                    <p>(2) Subject to subparagraph 1(1) of this schedule, all terminologies of an absolute technical nature shall have the same meaning as provided in the International Telecommunication Convention.</p>
                    <a href='https://www.mcmc.gov.my/skmmgovmy/media/General/registers/cma/Class-Assignment-No-2-of-2022.pdf#page=23' target='_blank'>Baca Lanjut...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class='accordion-item'>
              <div class='accordion-header' id='cb6'>
                <button type='button' class='accordion-button collapsed bg-danger-subtle text-danger-emphasis fs-5' data-bs-toggle='collapse' data-bs-target='#collapsecb6' aria-expanded='false' aria-controls='collapsecb6'><i class='bi-6-circle-fill text-danger-emphasis fs-5 pe-3'></i>Berapa jarak perhubungan yang boleh di capai menggunakan CB RADIO atau PRS RADIO?</button>
              </div>
              <div id='collapsecb6' class='accordion-collapse collapse' aria-labelledby='cb6' data-bs-parent='#cbfaq'>
                <div class='accordion-body'>
                  <p class='m-0'>Jarak purata komunikasi CB RADIO 27MHz adalah sekitar 5 ke 200 KM manakala untuk PMR RADIO 446MHz adalah sekitar 5 ke 20 KM bergantung kepada banyak faktor antaranya bentuk permukaan bumi, halangan seperti bangunan tinggi, hutan yang tebal, atau keadaan cuaca, dan sebagainya. Namun demikian sekiranya keadaan propagasi membuka dengan menggunakan CB RADIO 27Mhz USB anda akan terkejut apabila operator dari Indonesia atau Australia menjawab panggilan anda, bayangkan perasaan anda ketika itu. Oleh itu, CB Radio 27MHz LSB juga boleh mencapai ribuan kilometer sekiranya propagasi cuaca membuka atau sebagainya.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='col-xl-4 text-center'>
        <table class='table table-bordered table-striped text-center align-middle mb-3'>
          <thead class='align-middle'>
            <tr>
              <th rowspan='2'>Abjad</th>
              <th colspan='2'>Fonetik</th>
              <th colspan='2'>Morse</th>
            </tr>
            <tr>
              <th>English</th>
              <th>Melayu</th>
              <th>Visual</th>
              <th>Audio</th>
            </tr>
          </thead>
          <tbody class='font-monospace'>
            <tr>
              <td>A</td>
              <td>Alfa</td>
              <td>Agas</td>
              <td>&bull;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/f/f3/A_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>B</td>
              <td>Bravo</td>
              <td>Bola</td>
              <td>&ndash;&bull;&bull;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/b/b1/B_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>C</td>
              <td>Charlie</td>
              <td>Ciku</td>
              <td>&ndash;&bull;&ndash;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/2/25/C_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>D</td>
              <td>Delta</td>
              <td>Duku</td>
              <td>&ndash;&bull;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/9/92/D_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>E</td>
              <td>Echo</td>
              <td>Elok</td>
              <td>&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/e/e7/E_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>F</td>
              <td>Foxtrot</td>
              <td>Fajar</td>
              <td>&bull;&bull;&ndash;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/6/63/F_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>G</td>
              <td>Golf</td>
              <td>Gagak</td>
              <td>&ndash;&ndash;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/7/72/G_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>H</td>
              <td>Hotel</td>
              <td>Handal</td>
              <td>&bull;&bull;&bull;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/9/93/H_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>I</td>
              <td>India</td>
              <td>Intan</td>
              <td>&bull;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/d/d9/I_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>J</td>
              <td>Juliett</td>
              <td>Jala</td>
              <td>&bull;&ndash;&ndash;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/9/9e/J_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>K</td>
              <td>Kilo</td>
              <td>Kota</td>
              <td>&ndash;&bull;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/6/6a/K_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>L</td>
              <td>Lima</td>
              <td>Laju</td>
              <td>&bull;&ndash;&bull;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/a/a8/L_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>M</td>
              <td>Mike</td>
              <td>Merah</td>
              <td>&ndash;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/9/97/M_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>N</td>
              <td>November</td>
              <td>Nuri</td>
              <td>&ndash;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/5/5a/N_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>O</td>
              <td>Oscar</td>
              <td>Ombak</td>
              <td>&ndash;&ndash;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/4/41/O_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>P</td>
              <td>Papa</td>
              <td>Palang</td>
              <td>&bull;&ndash;&ndash;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/c/c6/P_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>Q</td>
              <td>Quebec</td>
              <td>Quen</td>
              <td>&ndash;&ndash;&bull;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/f/f0/Q_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>R</td>
              <td>Romeo</td>
              <td>Rakit</td>
              <td>&bull;&ndash;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/e/ea/R_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>S</td>
              <td>Sierra</td>
              <td>Singa</td>
              <td>&bull;&bull;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/d/d8/S_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>T</td>
              <td>Tango</td>
              <td>Tari</td>
              <td>&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/b/ba/T_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>U</td>
              <td>Uniform</td>
              <td>Udang</td>
              <td>&bull;&bull;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/3/34/U_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>V</td>
              <td>Victor</td>
              <td>Victor</td>
              <td>&bull;&bull;&bull;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/3/37/V_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>W</td>
              <td>Whiskey</td>
              <td>Wayang</td>
              <td>&bull;&ndash;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/6/68/W_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>X</td>
              <td>X-ray</td>
              <td>X-ray</td>
              <td>&ndash;&bull;&bull;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/b/be/X_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>Y</td>
              <td>Yankee</td>
              <td>Yakin</td>
              <td>&ndash;&bull;&ndash;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/5/5d/Y_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>Z</td>
              <td>Zulu</td>
              <td>Zaman</td>
              <td>&ndash;&ndash;&bull;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/7/7a/Z_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>0</td>
              <td>Zero</td>
              <td>Kosong</td>
              <td>&ndash;&ndash;&ndash;&ndash;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/5/5d/0_number_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>1</td>
              <td>One</td>
              <td>Satu</td>
              <td>&bull;&ndash;&ndash;&ndash;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/9/9b/1_number_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Two</td>
              <td>Dua</td>
              <td>&bull;&bull;&ndash;&ndash;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/e/ee/2_number_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Three</td>
              <td>Tiga</td>
              <td>&bull;&bull;&bull;&ndash;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/f/fd/3_number_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Four</td>
              <td>Empat</td>
              <td>&bull;&bull;&bull;&bull;&ndash;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/5/5c/4_number_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>5</td>
              <td>Five</td>
              <td>Lima</td>
              <td>&bull;&bull;&bull;&bull;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/5/52/5_number_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>6</td>
              <td>Six</td>
              <td>Enam</td>
              <td>&ndash;&bull;&bull;&bull;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/4/4d/6_number_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>7</td>
              <td>Seven</td>
              <td>Tujuh</td>
              <td>&ndash;&ndash;&bull;&bull;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/1/14/7_number_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>8</td>
              <td>Eight</td>
              <td>Lapan</td>
              <td>&ndash;&ndash;&ndash;&bull;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/3/3a/8_number_morse_code.ogg'></audio></td>
            </tr>
            <tr>
              <td>9</td>
              <td>Nine</td>
              <td>Sembilan</td>
              <td>&ndash;&ndash;&ndash;&ndash;&bull;</td>
              <td><audio class='rounded-pill w-75' controls preload='metadata' src='https://upload.wikimedia.org/wikipedia/commons/4/44/9_number_morse_code.ogg'></audio></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php require_once 'footer.php' ?>
  <script src='https://cdn.jsdelivr.net/combine/npm/pdfmake,npm/pdfmake/build/vfs_fonts.min.js,npm/datatables.net,npm/datatables.net-bs5,npm/datatables.net-buttons,npm/datatables.net-buttons-bs5,npm/datatables.net-buttons/js/buttons.html5.min.js,npm/datatables.net-responsive,npm/datatables.net-responsive-bs5,npm/datatables.net-searchpanes,npm/datatables.net-searchpanes-bs5,npm/datatables.net-select,npm/datatables.net-select-bs5' crossorigin='anonymous'></script>
  <script src='/assets/js/faq.js'></script>
</body>

</html>