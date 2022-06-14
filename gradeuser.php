<h1>Usuários</h1>
<hr>
<div>
<i class="fa fa-arrow-left" aria-hidden="true"></i>
<a href="./" class="btn btn-primary btn-sm"> Home </a>
</div>
<div class="container">
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Senha</th>
                <th>Email</th>
                <th><a href="?controller=UsuarioController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($usuario) {
                foreach ($usuario as $user) {
                    ?>
                    <tr>
                        <td><?php echo $user->usuario; ?></td>
                        <td>***</td>
                        <td><?php echo $user->email; ?></td>
                        <td>
                            <a href="?controller=UsuarioController&method=editar&id=<?php echo $user->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=UsuarioController&method=excluir&id=<?php echo $user->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>