<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Editar Senha de Usuario</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin/users">Usuarios</a></li>
                <li class="breadcrumb-item active">Editar Senha</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Editar Senha do Usuário</h3>
                </div>
                <!-- /.card-header -->

                <?php if( $msgError != '' ){ ?>
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-ban"></i> Erro!</h5>
                        <p><?php echo htmlspecialchars( $msgError, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                    </div>
                </div>
                <?php } ?>

                <?php if( $msgSuccess != '' ){ ?>
                <div class="card-body">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-check"></i> Sucesso!</h5>
                        <p><?php echo htmlspecialchars( $msgSuccess, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                    </div>
                </div>
                <?php } ?>

                <!-- form start -->
                <form role="form" action="/admin/users/<?php echo htmlspecialchars( $user["id_user"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/password" method="post">
                <div class="card-body">
                    <div class="form-group">
                    <label for="senha">Nova Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Nova Senha">
                    </div>
                    <div class="form-group">
                    <label for="senha-confirmada">Conforme a senha</label>
                    <input type="password" class="form-control" id="senha-confirmada" name="senha-confirmada" placeholder="Confirme a nova senha">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
            <!-- /.card -->
            </div>
            <!--/.col  -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->