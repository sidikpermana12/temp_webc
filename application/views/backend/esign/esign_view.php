<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('list-esign')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> List Esign</a>
        <a href="#" onclick="printContent()" class="btn btn-primary" type="button"><i class="zmdi zmdi-print" style="color: white"> Print</i></a>

        <div class="actions">
            <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
            <a href="#" class="actions__item zmdi zmdi-check-all"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Refresh</a>
                    <a href="#" class="dropdown-item">Manage Widgets</a>
                    <a href="#" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
    </header>

    <div class="card">
        <div class="card-body">

        	<div class="table-responsive" id="cetak">

            	<table width="90%" border="5" style="background: white; color: #000000; font-size: 12px; margin-left: 40px; margin-top: 40px;">
            		<thead style="font-weight: bold; text-align: center; font-family: Times New Roman; font-size: 14px;">
            			<tr style="border: none;">
            				<td rowspan="4" ><br><img style="margin-left: 20px" width="130" src="<?=base_url()?>assets/img/form/bssn.png"></td>
            				<td><br>BADAN SIBER DAN SANDI NEGARA</td>
            			</tr>
            			<tr style="border: none;">
            				<td>Jalan Harsono R.M. Noomor 70, Ragunan, Pasar Minggu, Jakarta 12550</td>
            			</tr>
            			<tr style="border: none;">
            				<td>Telepon (021) 7805814, Faksimile (021) 78844104</td>
            			</tr>
            			<tr style="border: none;">
            				<td>Website: http://www.bssn.go.id, E-mail: <u style="color: #3055ba;">humas@bssn.go.id</u></td>
            			</tr>
            		</thead>
            		<tbody>
            			<tr style="border: none;">
            				<td colspan="2"><hr style="border-bottom: 4px solid #000000; width: 90%"><hr style="border-top: 2px solid #000000; width: 90%; margin-top: -12px;"></td>
            			</tr>
            			<tr style="border: none; font-weight: bold; text-align: center;">
            				<td colspan="2">SURAT REKOMENDASI PERMOHONAN PENERBITAN SERTIFIKAT ELEKTRONIK<br>OSD LEMSANEG</td>
            			</tr>
            			<tr style="border: none;">
            				<td colspan="2" style="padding-left: 50px">Saya yang pertanda tangan di bawah ini :</td>
            			</tr>
            			<tr style="border: none;">
            				<td colspan="2" style="text-align: center;">
            					<table border="2" style="font-weight: bold;" width="90%" align="center">
            						<tr style="border: none; text-align: left;">
            							<td width="10" style="padding-left: 10px; padding-top: 5px;">1.</td>
            							<td width="200">Nama Lengkap</td>
            							<td width="10">:</td>
            							<td><?=$esign['esn_recomen_fullname']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">2.</td>
            							<td>NIP</td>
            							<td>:</td>
            							<td><?=$esign['esn_recomen_nip']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">3.</td>
            							<td>NIK</td>
            							<td>:</td>
            							<td><?=$esign['esn_recomen_nik']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">4.</td>
            							<td>Pangkat/Golongan</td>
            							<td>:</td>
            							<td><?=$esign['esn_recomen_class']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">5.</td>
            							<td>Jabatan</td>
            							<td>:</td>
            							<td><?=$esign['esn_recomen_position']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">6.</td>
            							<td>Instansi</td>
            							<td>:</td>
            							<td><?=$esign['esn_recomen_institution']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">7.</td>
            							<td>Unit Kerja</td>
            							<td>:</td>
            							<td><?=$esign['esn_recomen_unitofwork']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px; padding-bottom: 5px;">2.</td>
            							<td>Alamat Email</td>
            							<td>:</td>
            							<td><?=$esign['esn_recomen_email']?></td>
            						</tr>
            					</table>
            				</td>
            			</tr>
            			<tr style="border: none;">
            				<td colspan="2" style="padding-left: 50px">Dengan ini memberikan rekomendasi kepada :</td>
            			</tr>
            			<tr style="border: none;">
            				<td colspan="2">
            					<table border="2" style="font-weight: bold;" width="90%" align="center">
            						<tr style="border: none; text-align: left;">
            							<td width="10" style="padding-left: 10px;">1.</td>
            							<td width="200">Nama Lengkap</td>
            							<td width="10">:</td>
            							<td><?=$esign['esn_fullname']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">2.</td>
            							<td>NIP</td>
            							<td>:</td>
            							<td><?=$esign['esn_nip']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">3.</td>
            							<td>NIK</td>
            							<td>:</td>
            							<td><?=$esign['esn_nik']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">4.</td>
            							<td>Pangkat/Golongan</td>
            							<td>:</td>
            							<td><?=$esign['esn_class']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">5.</td>
            							<td>Jabatan</td>
            							<td>:</td>
            							<td><?=$esign['esn_position']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">6.</td>
            							<td>Unit Kerja</td>
            							<td>:</td>
            							<td><?=$esign['esn_unitofwork']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">7.</td>
            							<td>Instansi</td>
            							<td>:</td>
            							<td><?=$esign['esn_institution']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;"></td>
            							<td>Kota</td>
            							<td>:</td>
            							<td><?=$esign['esn_city']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;"></td>
            							<td>Propinsi</td>
            							<td>:</td>
            							<td><?=$esign['esn_povince']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">8.</td>
            							<td>Alamat Email</td>
            							<td>:</td>
            							<td><?=$esign['esn_email']?></td>
            						</tr>
            						<tr style="border: none; text-align: left;">
            							<td style="padding-left: 10px;">9.</td>
            							<td>No. Telepon</td>
            							<td>:</td>
            							<td><?=$esign['esn_telp']?></td>
            						</tr>
            					</table>
            				</td>
            			</tr>
            			<tr style="border: none;">
            				<td colspan="2" style="padding-left: 50px;"><br>Untuk melakukan pendaftaran sertifikat elektronik sekalius mejadi pemegang sertifikat<br>elektronik yang digunakan pada:</td>
            			</tr>
            			<tr style="border: none;">
            				<td colspan="2" style="padding-left: 50px">
            					<table>
            						<tr>
            							<td>a.</td>
            							<td>Sistem</td>
            							<td>:</td>
            						</tr>
            						<tr>
            							<td>b.</td>
            							<td>Kegunaan</td>
            							<td>:</td>
            						</tr>
            					</table>
            				</td>
            			</tr>
            			<tr style="border: none;">
            				<td colspan="2" style="padding-left: 50px">Demikian surat rekomendasi ini saya buat, agar dapat digunakan sebagaimana mestinya.</td>
            			</tr>
            			<tr>
            				<td colspan="2"style="padding-left: 440px">
            					<br>
            					<br>
            					<table>
            						<tr>
            							<td>Ditanda tangani di</td>
            							<td>:</td>
            						</tr>
            						<tr>
            							<td>Tanggal</td>
            							<td>:</td>
            						</tr>
            						<tr>
            							<td colspan="2">Hormat Saya,</td>
            						</tr>
            						<tr>
            							<td colspan="2" height="100"> &nbsp;</td>
            						</tr>
            						<tr>
            							<td colspan="2">NIP.</td>
            						</tr>
            					</table>
            					<br>
            				</td>
            			</tr>
            		</tbody>
            	</table>

            </div>

        </div>
    </div>
</div>