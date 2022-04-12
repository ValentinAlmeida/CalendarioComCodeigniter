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

                            <form class="forms-sample" name="form_index" method="post">

                                <div class="form-group row">

                                    <div class="col-md-12 mb-20">
                                        <label>Texto a ser enviado para o grupo</label>
                                        <textarea class="form-control" name="sistema_texto_ticket" id="txtMensagem"></textarea>
                                    </div>

                                </div>


                                <button data-toggle="tooltip" title="Enviar" type="submit" class="btn btn-primary mr-2" id="btnEnviar">Enviar</button>
                                <a data-toggle="tooltip" title="Voltar" class="btn btn-info" href="<?php echo base_url('/'); ?>">Voltar</a>
                                <a data-toggle="tooltip" data-placement="bottom" title="Olhar mensagens do grupo do telegram" class="btn btn-warning" href="<?php echo base_url($this->router->fetch_class().'/core/'); ?>">Mensagens do telegram</a>

                        </div>

                        </form>

                        <script src="script.js"></script>

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
