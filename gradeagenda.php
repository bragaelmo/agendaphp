<h1>Agenda</h1>
<hr>
<div>
<i class="fa fa-arrow-left" aria-hidden="true"></i>
<a href="./" class="btn btn-primary btn-sm"> Home </a>
</div>
<div class="container">
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Contato</th>
                <th>Usuário</th>
                <th>Data</th>
                <th>Compromisso</th>
                <th>É importante?</th>
                <th><a href="?controller=AgendaController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($agenda) {
                foreach ($agenda as $agendas) {
                    ?>
                    <tr>
                        <td><?php echo $agendas->nome; ?></td>
                        <td><?php echo $agendas->usuario; ?></td>
                        <td><?php echo $agendas->dtcom; ?></td>
                        <td><?php echo $agendas->compromisso; ?></td>
                        <td><?php echo $agendas->importante==1 ? "Sim" : "Não" ?></td>
                        <td>
                            <a href="?controller=AgendaController&method=editar&id=<?php echo $agendas->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=AgendaController&method=excluir&id=<?php echo $agendas->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
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