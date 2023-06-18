<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
     <div class="modal-dialog modal-lg" role="document">
         <form action="" method="post" class="form-horizontal">
             @csrf
             @method('post')
 
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                             aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title"></h4>
                 </div>
                 <div class="modal-body">
                     <div class="form-group row">
                         <label for="nama_barang" class="col-lg-2 col-lg-offset-1 control-label">Nama</label>
                         <div class="col-lg-6">
                             <input type="text" name="nama_barang" id="nama_barang" class="form-control" required autofocus>
                             <span class="help-block with-errors"></span>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="harga" class="col-lg-2 col-lg-offset-1 control-label">Harga</label>
                         <div class="col-lg-6">
                             <input type="number" name="harga" id="harga" class="form-control" required>
                             <span class="help-block with-errors"></span>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="stok" class="col-lg-2 col-lg-offset-1 control-label">Stok</label>
                         <div class="col-lg-6">
                             <input type="number" name="stok" id="stok" class="form-control" required value="0">
                             <span class="help-block with-errors"></span>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="foto" class="col-lg-2 col-lg-offset-1 control-label">Foto</label>
                         <div class="col-lg-6">
                             <input type="file" name="foto" id="nama_barang" class="form-control" required autofocus>
                             <span class="help-block with-errors"></span>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="deskripsi" class="col-lg-2 col-lg-offset-1 control-label">Deskripsi</label>
                         <div class="col-lg-6">
                             <input type="text" name="deskripsi" id="deskripsi" class="form-control" required autofocus>
                             <span class="help-block with-errors"></span>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan</button>
                     <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Batal</button>
                 </div>
             </div>
         </form>
     </div>
 </div>