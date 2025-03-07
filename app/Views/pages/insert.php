<?php echo $this->extend('include/base') ?>
    <?php echo $this->section('title')?>
    <?php echo $title?>
    <?php echo $this->endSection()?>
    <?php echo $this->section('base')?>

    <?php $validation=\Config\Services::validation();?>

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-8">
                                <a href="<?php echo base_url('/')?>" class="btn btn-danger btn-sm rounded">Back</a>
                            </div>
                            <div class="col-sm-4">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="container-fluid">

                                <form action="<?php echo('insert')?>" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name <span class="text-danger">
                                                    *</span>
                                            </label>
                                            <input type="text" id="name" name="name" class="form-control <?= $validation->getError('name')?'is-invalid':'' ?>" 
                                                value=""  >
                                                <?php 
                                                    if($validation->getError('name')){?>
                                                <div class="invalid-feedback"><?php echo $validation->getError('name');?></div>
                                                        <?php   }
                                                ?>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="mobile" class="form-label">Mobile<span
                                                    class="text-danger"> *</span></label>
                                            <input type="text" id="mobile" name="mobile"
                                                class="form-control <?= $validation->getError('mobile')?'is-invalid':'' ?>" value=""  >
                                                <?php 
                                                    if($validation->getError('mobile')){?>
                                                <div class="invalid-feedback"><?php echo $validation->getError('mobile');?></div>
                                                        <?php   }
                                                ?>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email<span
                                                    class="text-danger"> *</span></label>
                                            <input type="text" id="email" name="email"
                                                class="form-control <?= $validation->getError('email')?'is-invalid':'' ?>" value=""  >
                                                <?php 
                                                    if($validation->getError('email')){?>
                                                <div class="invalid-feedback"><?php echo $validation->getError('email');?></div>
                                                        <?php   }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $this->endSection()?>