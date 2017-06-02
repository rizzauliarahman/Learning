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

            <div class="box box-primary">
                <p></p>
                TAMPILKAN DATA INSTRUCTOR
                <div class="box-body">
                    <table id="tabel1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Instructor ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $b = $this->user->get_all("instructor");
                        $data2 = $b->result_array();

                        $arrlength2 = count($data2);

                        for($x2 = 0; $x2 < $arrlength2; $x2++) {
                            ?>
                            <tr>
                                <td><?php echo $data2[$x2]['Instructor_ID'] ?></td>
                                <td><?php echo $data2[$x2]['Name'] ?></td>
                                <td><?php echo $data2[$x2]['Username'] ?></td>
                                <td>


                                    <a href="<?php echo base_url('admin#view-instructor') ?>" onclick="deleteini2(<?php echo $x2?>)" >Del</a>


                                </td>
                            </tr>
                            <?php
                        }

                        ?>
                        <?php
                        function deleteini2($x2){
                            $where = array('Username' => $data2[$x2]['Username']);
                            $this->user->delete_user("instructor",$where);
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
