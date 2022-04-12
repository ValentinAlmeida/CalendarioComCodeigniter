<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="<?php echo base_url('/') ?>">
            <div class="logo-img">

                <img src="<?php echo base_url('public/src/img/brand-white.svg')?>" class="header-brand-img" alt="lavalite">
            </div>
            <span class="text">Samu192</span>
        </a>
        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-lavel">Navegação</div>
                <div class="nav-item active">
                    <a data-toggle="tooltip" data-placement="right" title="Dashboards" href="<?php echo base_url('/') ?>"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                </div>
                <div class="nav-item">
                    <a data-toggle="tooltip" data-placement="right" title="Navegação" href="<?php echo base_url('/')?>"><i class="ik ik-menu"></i><span>Navegação</span> <span class="badge badge-success">New</span></a>
                </div>
                <div class="nav-item has-sub">
                    <a data-toggle="tooltip" data-placement="right" title="Widgets" href="javascript:void(0)"><i class="ik ik-layers"></i><span>Widgets</span> <span class="badge badge-danger">150+</span></a>
                    <div class="submenu-content">
                        <a href="<?php echo base_url('/')?>" class="menu-item">Basic</a>
                        <a href="<?php echo base_url('/')?>" class="menu-item">Statistic</a>
                        <a href="<?php echo base_url('/')?>" class="menu-item">Data</a>
                        <a href="<?php echo base_url('/')?>" class="menu-item">Chart Widget</a>
                    </div>
                </div>
                <div class="nav-lavel">Administração</div>
                <div class="nav-item">
                    <a data-toggle="tooltip" data-placement="right" title="Gerenciar usuarios" href="<?php echo base_url('usuarios')?>"><i class="ik ik-users"></i><span>Usuarios</span></a>
                </div>
                <div class="nav-item">
                    <a data-toggle="tooltip" data-placement="right" title="Gerenciar sistema" href="<?php echo base_url('sistema')?>"><i class="ik ik-settings"></i><span>Sistema</span></a>
                </div>
                <div class="nav-item">
                    <a data-toggle="tooltip" data-placement="right" title="Lista de equipes" href="<?php echo base_url('equipe')?>"><i class="ik ik-activity"></i><span>Equipes</span></a>
                </div>
                <div class="nav-item">
                    <a data-toggle="tooltip" data-placement="right" title="Enviar mensagens no Telegram" href="<?php echo base_url('telegram')?>"><i class="ik ik-message-circle"></i><span></span>Telegram</a>
                </div>
                <div class="nav-item">
                    <a data-toggle="tooltip" data-placement="right" title="Calendario" href="<?php echo base_url('calendario')?>"><i class="ik ik-calendar"></i><span></span>Calendario</a>
                </div>

            </nav>
        </div>
    </div>
</div>