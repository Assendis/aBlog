

<?php
        $this->load->view('Admin/_header');
        $this->load->view('Admin/_sidebar');
        $this->load->view('Admin/_bar');
?>

     
        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Striped Rows
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Yazar Adı</th>
                                            <th>Kategori</th>
                                             <th>Yazı Başlığı</th>
                                             <th>Yazı</th>
                                             <th>Resim</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td><?=$veri[0]->yazar?></td>
                                            <td><?=$veri[0]->kategori?></td>
                                            <td><?=$veri[0]->baslik?></td>
                                            <td><?=$veri[0]->yazi?></td>
                                            <td><img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" height="30" weight="30"></td>
                                           
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
               

<?php
        $this->load->view('Admin/_footer');
        
?>