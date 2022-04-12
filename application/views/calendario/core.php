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

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <form class="forms-sample" name="form_core" method="post">

                                <div class="form-group row">

                                    <div class="col-md-12 mb-20">
                                        <label>Solicitação</label>
                                        <select class="form-control" name="perfil">

                                            <?php if(isset($usuario)): ?>

                                                <option value="2" <?php echo($perfil_usuario->id==2 ? 'selected' : '') ?>>Atendente</option>
                                                <option value="1" <?php echo($perfil_usuario->id==1 ? 'selected' : '') ?>>Administrador</option>

                                            <?php else: ?>

                                                <option value="2">Trocar plantão</option>
                                                <option value="1">Ferias</option>

                                            <?php endif; ?>

                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <label>Nome</label>
                                        <input type="text" class="form-control" name="first_name" value=" <?php echo(isset($usuario) ? $usuario->first_name : set_value('first_name')) ; ?> ">
                                        <?php echo form_error('first_name', '<div class="text-danger">', '</div>');?>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <label>Sobrenome</label>
                                        <input type="text" class="form-control" name="last_name" value=" <?php echo(isset($usuario) ? $usuario->last_name : set_value('last_name')) ; ?> ">
                                        <?php echo form_error('last_name', '<div class="text-danger">', '</div>');?>
                                    </div>

                                   </div>

                                <div class="form-group row">

                                    <div class="col-md-6 mb-20">
                                        <label>Usuario</label>
                                        <input type="text" class="form-control" name="username" value=" <?php echo(isset($usuario) ? $usuario->username : set_value('username')) ; ?> ">
                                        <?php echo form_error('username', '<div class="text-danger">', '</div>');?>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <label>Email (Login)</label>
                                        <input type="text" class="form-control" name="email" value=" <?php echo(isset($usuario) ? $usuario->email : set_value('email')) ; ?> ">
                                        <?php echo form_error('email', '<div class="text-danger">', '</div>');?>
                                    </div>

                                   </div>

                                <div class="form-group row">

                                    <div class="col-md-12 mb-20">
                                        <label>Descrição da solicitação</label>
                                        <textarea class="form-control" name="sistema_texto_ticket"><?php echo(isset($sistema) ? $sistema->sistema_texto_ticket : set_value('sistema_texto_ticket')); ?></textarea>
                                        <?php echo form_error('sistema_texto_ticket', '<div class="text-danger">', '</div>');?>
                                    </div>

                                </div>

                                <div class="form-group row">




                                    <?php if (isset($usuario)) : ?>
                                    <div class="form-group row">
                                    <div class="col-md-12">

                                        <input type="hidden" class="form-control" name="usuario_id" value=" <?php echo $usuario->id; ?> ">
                                    </div>

                                </div>
                                    <?php endif; ?>

                                </div>

                                <button data-toggle="tooltip" title="Enviar" type="submit" class="btn btn-primary mr-2">Enviar</button>
                                <a data-toggle="tooltip" title="Voltar" class="btn btn-info" href="<?php echo base_url($this->router->fetch_class()); ?>">Voltar</a>
                            </form>

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
