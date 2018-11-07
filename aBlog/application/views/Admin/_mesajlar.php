 
    <br></br>
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mesajlar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th><input type="checkbox" id="checkall" /></th>
         
         <th>Ad Soyad</th>
         <th>E Mail</th>
         <th>Telefon</th>
         <th>Mesaj</th>
       
         <th>Ekle</th>
         <th>Düzenle</th>
         <th>Sil</th>
                                    </thead>
                                    <tbody>

                                        <?php
        foreach($veri as $rs)
        {
          ?>
          <tr>
            <td><input type="checkbox" class="checkthis" /></td>
            
             <td><?=$rs->adsoy?></td>
            <td><?=$rs->email?></td>
            <td><?=$rs->telefon?></td>
            <td><?=$rs->mesaj?></td>
            

            


            </td>
            <td><p><button onClick="parent.location='<?=base_url()?>Admin/mesajlar/detay/<?=$rs->Id?>'" type="button" class="btn btn-primary"  >Yayınla<a></a></button></p></td>
            
            

            <td><p data-placement="top" data-toggle="tooltip" title="edit"><button onClick="parent.location='<?=base_url()?>admin/mesajlar/detay/<?=$rs->Id?>'" type="button" class="btn btn-warning" data-title="edit" data-toggle="modal" data-target="#edit" >Düzenle<a></a></button></p></td>

            <td><a class="btn btn-danger" href="<?=base_url()?>admin/mesajlar/sil/<?=$rs->Id?>" onclick="return confirm('Silmek istediğinizden eminmisiniz?');"></i>Sil
             </td>
           

          </tr>
          <?php
        }
        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            