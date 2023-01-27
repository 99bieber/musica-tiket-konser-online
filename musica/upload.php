			<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
						<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Upload Konser</h3>
                                        </div>
                                        <hr>
                                        <form action="proses/uploadfile.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nama Konser</label>
                                                <input id="cc-pament" name="nama_tiket" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Jumlah Tiket</label>
                                                <input id="cc-pament" name="total_tiket" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Harga</label>
                                                <input id="cc-name" name="harga" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                            	<label for="cc-payment" class="control-label mb-1">Deskripsi</label>
                                            	<textarea id="oke" name="deskripsi"></textarea>	
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Upload Gambar</label>
                                                <input id="cc-pament" name="foto" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Lokasi</label>
                                                <input id="cc-pament" name="lokasi" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Tanggal Konser</label>
                                                        <input id="cc-exp" name="tanggal" type="date" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">No. WA</label>
                                                <input id="cc-pament" name="telp" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                   
                                                    <span id="payment-button-amount">Upload</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <script type="text/javascript" src="ckeditor/ckeditor.js"></script>	
                <script type="text/javascript">
                	window.onload=function(){
                		CKEDITOR.replace('oke');
                	}
                </script>		