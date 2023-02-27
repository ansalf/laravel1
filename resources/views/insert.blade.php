<!DOCTYPE html>  
<html>  
 <head>  
  <title>input data</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 </head>  
 <body> 
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
 </body>  
</html>  