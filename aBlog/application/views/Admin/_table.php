 
 <tr>
     <td>
       <button onClick="parent.location='<?=base_url()?>Admin/Members/add'" type="button" class="btn btn-success" >Kullanıcı Ekle<a></a></button>
     </td>
   </tr>   <br></br>
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kullanıcılar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th><input type="checkbox" id="checkall" /></th>
         <th>Adı</th>
         <th>Soyadı</th>
         <th>Kullanıcı Adı</th>
         <th>E-mail</th>
         <th>İletişim</th>
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
            <td><?=$rs->ad?></td>
            <td><?=$rs->soyad?></td>
            <td><?=$rs->kul_adi?></td>
            <td><?=$rs->email?></td>
            <td><?=$rs->iletisim?></td>
            <td><p><button onClick="parent.location='<?=base_url()?>Admin/Members/view/<?=$rs->id?>'" type="button" class="btn btn-primary"  >Görüntüle<a></a></button></p></td>

            <td><p data-placement="top" data-toggle="tooltip" title="edit"><button onClick="parent.location='<?=base_url()?>Admin/Members/edit/<?=$rs->id?>'" type="button" class="btn btn-warning" data-title="edit" data-toggle="modal" data-target="#edit" >Düzenle<a></a></button></p></td>

            <td><a class="btn btn-danger" href="<?=base_url()?>Admin/Members/delete/<?=$rs->id?>" onclick="return confirm('Silmek istediğinizden eminmisiniz?');"></i>Sil
                </a>
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
            