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
                                <?php

                                require_once("application/controllers/Calendario.php");
                                echo "<link rel='stylesheet' href='style.css'>";

                                echo "<header>";
                                echo '<a data-toggle="tooltip" data-placement="bottom" title="Anterior" class="btn btn-icon btn-primary" href="?month='.date('Y-m-d', strtotime("-1 month", $monthTime)).'"><i class="ik ik-arrow-left"></i></a>';
                                echo "<h1>" .date('F Y', $monthTime). " </h1>";
                                echo '<a data-toggle="tooltip" data-placement="bottom" title="Proximo" class="btn btn-icon btn-primary" href="?month='.date('Y-m-d', strtotime("+1 month", $monthTime)).'"><i class="ik ik-arrow-right"></i></a>';
                                echo "</header>";

                                echo "<table>";

                                echo "<thead>
    <tr>
        <th>DOM</th>
        <th>SEG</th>
        <th>TER</th>
        <th>QUA</th>
        <th>QUI</th>
        <th>SEX</th>
        <th>SAB</th>
    </tr>

    </thead>";

                                $startDate = strtotime("last sunday", $monthTime);

                                echo "<tbody>";

                                for($row = 0; $row<6; $row++){

                                    echo "<tr>";

                                    for ($column = 0; $column <7; $column++){

                                        if (date('Y-m', $startDate) !== date('Y-m', $monthTime)){
                                            echo "<td class='other-month'>";
                                        }else{
                                            echo "<td><a href='";
                                            echo base_url($this->router->fetch_class().'/core/'.date('j', $startDate));
                                            echo "'>";
                                        }

                                        echo date('j', $startDate);
                                        echo "</a></td>";

                                        //somando o calendario
                                        $startDate = strtotime("+1 day", $startDate);
                                    }

                                    echo "</tr>";

                                }

                                echo "</tbody>";

                                echo "</table>";

                                ?>

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
