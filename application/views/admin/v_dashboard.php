
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <div class="box">
            <div class="box-header">              
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Post</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Kategori</th>
                  <th>Author </th>
                  <th>Url Image</th>
                  <th>Aksi
                  </th>
                </tr>
                </thead>
                <tbody>
          <?php
          $no = 1; 
          foreach($query as $row){                   
          ?> 
                <tr>
                  <!-- <td><?php echo $no++ ?></td> -->
                  <td><?php echo $row->id; ?></td>
                  <td><?php echo $row->judul; ?></td>
                  <td><?php echo substr($row->deskripsi,0,250); ?></td>
                  <td><?php echo $row->kategori; ?></td>
                  <td><?php echo $row->author; ?></td>
                  <td><a href="<?php echo site_url()."assett/img/culinaries/".$row->url_image; ?>"><?php echo site_url()."assett/img/culinaries/".$row->url_image; ?></a></td>
                  <td>
                   <a type="button" class="btn btn-xs btn-warning" href="<?php echo site_url()."admin/Dashboard/editdok/".$row->id; ?>"><i class="fa fa-edit"></i></a>
                   <a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url()."admin/Dashboard/deletedok/".$row->id; ?>"><i class="fa fa-close"></i></a>
                  </td>
                </tr>
          <?php
           }
          ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Kategori</th>
                  <th>Author </th>
                  <th>Url Image</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">        
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  