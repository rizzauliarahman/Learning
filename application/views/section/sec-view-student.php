<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02/06/2017
 * Time: 13:41
 */
?>
<section class="content-header">
    <h1>
        View Student
        <small> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Student</li>
    </ol>
</section>
<section class="content">
    <!-- Small boxes (Stat box) -->

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->

            <!-- TO DO List -->
            <div class="box box-primary">
                <p></p>
                TAMPILKAN DATA STUDENT
                <div class="box-body">
                    <table id="tabel1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Studen ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $a = $this->user->get_all("student");
                        $data = $a->result_array();

                        $arrlength = count($data);

                        for($x = 0; $x < $arrlength; $x++) {
                            ?>
                            <tr>
                                <td><?php echo $data[$x]['Student_ID'] ?></td>
                                <td><?php echo $data[$x]['Name'] ?></td>
                                <td><?php echo $data[$x]['username'] ?></td>
                                <td>
                                    <?php
                                    function deleteini(){
                                        $where = array('username' => $data[$x]['username']);
                                        $this->user->delete_user("student",$where);
                                    }
                                    ?>

                                    <a href="<?php echo base_url('admin#view-student') ?>" onclick="deleteini()" >Del</a>


                                </td>
                            </tr>
                            <?php
                        }

                        ?>

                        </tbody>



                    </table>

                </div>
            </div><!-- /.box -->


        </section><!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">


        </section><!-- right col -->
    </div><!-- /.row (main row) -->

</section><!-- /.content -->
