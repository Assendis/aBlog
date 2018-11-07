 
 <tr>
     <td>
       <button onClick="parent.location='<?=base_url()?>Admin/Urunler/add'" type="button" class="btn btn-success" >YAZI EKLE<a></a></button>
     </td>
   </tr>   <br></br>
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Yazılar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th><input type="checkbox" id="checkall" /></th>
         <th>Yazar Adı</th>
         <th>Kategori</th>
         <th>Yazı Başlığı</th>
         <th>Yazı</th>
         <th>Açıklama</th>
         <th>Resim</th>
         <th>Galeri</th>
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
            <td><?=$rs->yazar?></td>
            <td><?=$rs->katadil?></td>
            <td><?=$rs->baslik?></td>
            <td><?=$rs->yazi?></td>
            <td><?=$rs->description?></td>
            <td>
            
            <?php if ($rs->resim) { ?>

            <a href="<?=base_url()?>Admin/urunler/resim_ekle/<?=$rs->id?>"> <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="30" weight="30"> </a>


            <?php } else { ?>
            <button onClick="parent.location='<?=base_url()?>Admin/Urunler/resim_ekle/<?=$rs->id?>'" type="button" class="btn btn-primary"  >Resim Ekle<a></a></button></p>
            <?php } ?>


            </td>
            <td>
                <button onClick="parent.location='<?=base_url()?>Admin/Urunler/galeri_ekle/<?=$rs->id?>'" type="button" class="btn btn-primary" > Galeri Ekle </button>
              

            </td>
            <td><p><button onClick="parent.location='<?=base_url()?>Admin/Urunler/view/<?=$rs->id?>'" type="button" class="btn btn-primary" > Görüntüle <a></a></button></p></td>

            <td><p data-placement="top" data-toggle="tooltip" title="edit"><button onClick="parent.location='<?=base_url()?>Admin/Urunler/edit/<?=$rs->id?>'" type="button" class="btn btn-warning" data-title="edit" data-toggle="modal" data-target="#edit" >Düzenle<a></a></button></p></td>

            <td><a class="btn btn-danger" href="<?=base_url()?>Admin/Urunler/delete/<?=$rs->id?>" onclick="return confirm('Silmek istediğinizden eminmisiniz?');"></i>Sil
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
            