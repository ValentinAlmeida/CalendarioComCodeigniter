<?php
$this->load->view('layout/navbar');
?>
    <div class="page-wrap">
        <?php
        $this->load->view('layout/sidebar');
        ?>
        <div class="main-content">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                               <i class="<?php echo $icone_view;?> bg-blue"></i>
                                <div class="d-inline">
                                    <h5><?php echo $titulo?></h5>
                                    <span><?php echo $sub_titulo ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <nav class="breadcrumb-container" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a data-toggle="tooltip" data-placement="bottom" title="Home" href="<?php echo base_url('/')?>"><i class="ik ik-home"></i></a>
                                    </li>
                                    <li data-toggle="tooltip" data-placement="bottom" class="breadcrumb-item active" aria-current="page"><?php echo $titulo?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <?php if($message = $this->session->flashdata('success')) : ?>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert bg-success alert-success text-white alert-dismissible fade show" role="alert">
                                <strong> <?php $message ?> </strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="ik ik-x"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>

                <?php if($message = $this->session->flashdata('danger')) : ?>

                    <div class="row">
                        <div class="col-md-12">
                                    <div class="alert bg-danger alert-danger text-white alert-dismissible fade show" role="alert">
                                        <strong> <?php $message ?> </strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="ik ik-x"></i>
                                        </button>
                                    </div>
                        </div>
                    </div>

                <?php endif; ?>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table data-table">
                                    <thead>
                                    <?php if($equipe != NULL) : ?>
                                    <tr>
                                        <th>Id</th>
                                        <th>Id Despacho</th>
                                        <th>Id Equipe</th>
                                        <th>Chegada</th>
                                        <th>Saída</th>
                                        <th>Chegada Local</th>
                                        <th>Saída Local</th>
                                        <th>Chegada Hospital</th>
                                        <th>Saida Hospital</th>
                                        <th>Designação</th>

                                    </tr>
                                    </thead>



                                    <tbody>
                                    <?php foreach ($equipe as $equipes) : ?>
                                        <tr>
                                            <td><?= $equipes['id'] ?></td>
                                            <td><?= $equipes['id_despacho'] ?></td>
                                            <td><?= $equipes['id_equipe'] ?></td>
                                            <td><?= $equipes['chegada'] ?></td>
                                            <td> <?= $equipes['saida'] ?> </td>
                                            <td> <?= $equipes['chegadalocal'] ?> </td>
                                            <td> <?= $equipes['saidalocal'] ?> </td>
                                            <td> <?= $equipes['chegadahospital'] ?> </td>
                                            <td> <?= $equipes['saidahospital'] ?> </td>
                                            <td> <?= $equipes['designacao'] ?> </td>
                                        </tr>

                                    <?php endforeach; ?>
                                    </tbody>

                                    <?php else : ?>

                                    <tbody>

                                    <tr>
                                        Não tiveram atividades nos ultimos 120 dias!
                                    </tr>

                                    </tbody>

                                    <?php endif; ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="w-100 clearfix">
            </div>
        </footer>

    </div>
