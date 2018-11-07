 
    <br></br>
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bekleyen Yazılar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th><input type="checkbox" id="checkall" /></th>
         
         <th>Başlık</th>
         <th>Yazı</th>
         <th>Yayınla</th>
         
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
            
            <td><?=$rs->baslik?></td>
            <td><?=$rs->yazi?></td>

            <input name="uye_id" type="hidden" value="uye_id">

             <td><p><button onClick="parent.location='<?=base_url()?>Admin/bekleyen/yayinla/<?=$rs->id?>'" type="button" class="btn btn-primary"  >Yayınla<a></a></button></p></td>
            
            

            <td><p data-placement="top" data-toggle="tooltip" title="edit"><button onClick="parent.location='<?=base_url()?>Admin/bekleyen/bedit/<?=$rs->id?>'" type="button" class="btn btn-warning" data-title="edit" data-toggle="modal" data-target="#edit" >Düzenle<a></a></button></p></td>

            <td><a class="btn btn-danger" href="<?=base_url()?>Admin/bekleyen/bdelete/<?=$rs->id?>" onclick="return confirm('Silmek istediğinizden eminmisiniz?');"></i>Sil
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
            