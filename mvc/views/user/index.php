
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-users"></i> <?=$this->lang->line('panel_title')?></h3>

       
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_user')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <?php 
                    $usertype = $this->session->userdata("usertype");
                    if($usertype == "Admin") {
                ?>
                    <h5 class="page-header">
                        <a href="<?php echo base_url('user/add') ?>">
                            <i class="fa fa-plus"></i> 
                            <?=$this->lang->line('add_title')?>
                        </a>
                    </h5>
                <?php } ?>

                <div id="hide-table">
                    <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead>
                            <tr>
                                <th class="col-lg-2"><?=$this->lang->line('slno')?></th>
                                <th class="col-lg-2"><?=$this->lang->line('user_photo')?></th>
                                <th class="col-lg-2"><?=$this->lang->line('user_name')?></th>
                                <th class="col-lg-2"><?=$this->lang->line('user_email')?></th>
                                <th class="col-lg-2"><?=$this->lang->line('user_type')?></th>
                                <th class="col-lg-2"><?=$this->lang->line('action')?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($users)) {$i = 1; foreach($users as $user) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('user_photo')?>">
                                        <?php $array = array(
                                                "src" => base_url('uploads/images/'.$user->photo),
                                                'width' => '35px',
                                                'height' => '35px',
                                                'class' => 'img-rounded'

                                            );
                                            echo img($array); 
                                        ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('user_name')?>">
                                        <?php echo $user->name; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('user_email')?>">
                                        <?php echo $user->email; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('user_type')?>">
                                        <?=$this->lang->line($user->usertype)?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('action')?>">
                                        <?php echo btn_view('user/view/'.$user->userID, $this->lang->line('view')) ?>
                                        <?php echo btn_edit('user/edit/'.$user->userID, $this->lang->line('edit')) ?>
                                        <?php echo btn_delete('user/delete/'.$user->userID, $this->lang->line('delete')) ?>
                                    </td>
                                </tr>
                            <?php $i++; }} ?>
                        </tbody>
                    </table>
                </div>


            </div> <!-- col-sm-12 -->
        </div><!-- row -->
    </div><!-- Body -->
</div><!-- /.box -->
