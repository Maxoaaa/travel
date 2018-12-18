
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">    
      <!-- Main row -->
      <div class="row">

        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edit posting
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <?php
              $atribut = array(
                  'class' => 'form-horizontal',
                  'id'=>'formuser'
              );
                //echo form_open('list/adddocument/savedok',$atribut);
                echo form_open_multipart('admin/Dashboard/updatedok',$atribut);
                 foreach ($query as $rou) {    
                 echo form_hidden('id',$rou->id);
            ?>
              <div class="box-body">              
                <div class="form-group">
                  <label class="col-sm-2 control-label">Judul Headlines</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $rou->judul; ?>" />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kategori</label>
                  <div class="col-sm-6">                 
                    <select class="form-control selecto" style="width: 100%;" data-placeholder="Pilih Jenis Dokumen" name="kategori">
                      <option><?php echo $rou->kategori; ?></option>                      
                      <?php 
                        foreach($get_kategori_post as $row){
                      ?>  
                      <option><?php echo $row->nama_kategori; ?></option>                      
                      <?php
                         }
                      ?>                    
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-9">                 
                    <textarea id="editor2" name="editor2" rows="10" cols="80"><?php echo $rou->deskripsi; ?></textarea> 
                  </div>
                </div>               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">                                
                <button type="button" onclick="window.history.back()" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Batal</button>
                <button type="submit" class="btn btn-info btn-md" name="btnUpload" value="Upload">Update</button>
              </div>
              <!-- /.box-footer -->
            <?php
                }
                echo form_close();
              ?>
            </div>
          </div>
        </div>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  