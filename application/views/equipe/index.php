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
                                    <tr>
                                        <th>Id</th>
                                        <th>Data</th>
                                        <th>Id Ambulância</th>
                                        <th>Equipe</th>
                                        <th>Id da Maca</th>
                                        <th>Ativo</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($equipe as $equipes) : ?>
                                    <tr>
                                        <td><?= $equipes['id'] ?></td>
                                        <td><?= $equipes['data'] ?></td>
                                        <td><?= $equipes['id_ambulancia'] ?></td>
                                        <td><?= $equipes['equipe'] ?></td>
                                        <td> <?= $equipes['id_maca'] ?> </td>
                                        <td class="text-center">
                                            <a data-toggle="tooltip" data-placement="bottom" title="Analisar <?php echo $this->router->fetch_class(); ?>" href="<?php echo base_url($this->router->fetch_class().'/core/'.$equipes['id']) ?>" class="btn btn-icon btn-primary"><i class="ik ik-airplay"></i></a>
                                        </td>
                                    </tr>

                                    <?php endforeach; ?>
                                    </tbody>
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
