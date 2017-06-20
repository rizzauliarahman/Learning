<?php
/**
 * Created by PhpStorm.
 * User: Renesje
 * Date: 6/20/2017
 * Time: 2:29 PM
 */?>

<section class="content-header">
    <h1>
        Add Task
        <small> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Task</li>
    </ol>
</section>

<section class="content">
    <section class="col-lg-8">
        <div class="box box-primary">
            <form class="form-horizontal" action="sec-add-task.php" method="post">
                <div class="form-group has-feedback">
                    <label for="question" class="col-lg-3 control-label">Soal</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" maxlength="500" placeholder="masukkan link soal atau tulis pertanyaan disini">
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="answer" class="col-lg-3 control-label">Jawaban</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" rows="15" placeholder="Masukkan jawaban disini">
                    </div>
                </div>
            </form>
        </div>
    </section>
</section>
