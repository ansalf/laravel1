<!DOCTYPE html>  
<html>  
 <head>  
  <title>input data</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 </head>  
 <body>  
  
  <div class="container" style="width:700px;"> 
   <div class="table-responsive">
    <div align="right">
     <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Tambah Data Barang</button>
    </div>
    <br />
    <div id="employee_table">
     <table class="table table-bordered">
      <tr>
       <th width="55%">Nama Barang</th>  
       <th width="15%">Kode</th>
       <th width="15%">jumlah barang</th>
       <th width="15%">Edit</th>
       <th width="15%">Hapus</th>
      </tr>
      
      <tr class="table-info">
        <th>buku</th>
        <td>b001</td>
        <td>201</td>
        <td><button type="button" class="btn btn-warning">edit</button></td>
        <td><button type="button" class="btn btn-danger">hapus</button></td>
      </tr>

    <tr class="table-info">
        <th>buku</th>
        <td>b001</td>
        <td>100</td>
        <td><button type="button" class="btn btn-warning">edit</button></td>
        <td><button type="button" class="btn btn-danger">hapus</button></td>
      </tr>

    <tr class="table-info">
        <th>buku</th>
        <td>b001</td>
        <td>500</td>
        <td><button type="button" class="btn btn-warning">edit</button></td>
        <td><button type="button" class="btn btn-danger">hapus</button></td>
      </tr>

    <tr class="table-info">
        <th>buku</th>
        <td>b001</td>
        <td>20</td>
        <td><button type="button" class="btn btn-warning">edit</button></td>
        <td><button type="button" class="btn btn-danger">hapus</button></td>
      </tr>

    <tr class="table-info">
        <th>buku</th>
        <td>b001</td>
        <td>12</td>
        <td><button type="button" class="btn btn-warning">edit</button></td>
        <td><button type="button" class="btn btn-danger">hapus</button></td>
      </tr>

     </table>
    </div>
   </div> 
  </div>
 </body>  
</html>  
 
<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
     <label>Nama Barang</label>
     <input type="text" name="nama" id="nama" class="form-control" />
     <br />
     <label>Jenis Barang</label>
     <textarea name="jenis" id="jenis" class="form-control"></textarea>
     <br />
     <label>Kode Barang</label>
     <textarea name="kode" id="kode" class="form-control"></textarea>
     <br />  
     <label>Jumlah Barang</label>
     <input type="text" name="jumlah" id="jumalh" class="form-control" />
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
 
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
 
<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Detail Data Barang</h4>
   </div>
   <div class="modal-body" id="detail_barang">
     
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
 
 
<div id="editModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Edit Data Barang</h4>
   </div>
   <div class="modal-body" id="form_edit">
     
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>