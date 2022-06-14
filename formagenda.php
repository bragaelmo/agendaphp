<div class="container">
    <form action="?controller=AgendaController&<?php echo isset($agenda->id) ? "method=atualizar&id={$agenda->id}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Cadastrar Compromissos</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
            <label class="col-sm-2 col-form-label text-right">Usuário:</label>
                <select class="" name="user" id="user">
                        <?php
                       foreach ($usuario as $usuarios => $teste):
                            echo '<option value="' . $teste['id'] . '">' . $teste['id'] . ' (' . $teste['usuario']  . ')</option>';
                        endforeach
                        ?>
                </select>
            </div>
            <div class="form-group form-row">                            
            <label class="col-sm-2 col-form-label text-right">Contato:</label>
                <select class="" name="contato" id="contato">
                        <?php
                        print_r($contato);
                       foreach ($contato as $contatos => $key):
                            echo '<option value="' . $key['id'] . '">' . $key['id'] . ' (' . $key['nome']  . ')</option>';
                        endforeach
                        ?>
                </select>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Compromisso:</label>
                <input type="text" class="form-control col-sm-8" name="comp" id="comp" value="<?php
                echo isset($agenda->compromisso) ? $agenda->compromisso : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Data:</label>
                <input type="date" class="form-control col-sm-8" name="data" id="data" value="<?php
                echo isset($agenda->dtcom) ? $agenda->dtcom : null;
                ?>" />
            </div>
            <div class="form-group form-row">  
                <label class="col-sm-2 col-form-label text-right">É Importante?</label>              
                <input type="checkbox" id="importante" name="importante" value="<?php                
                echo isset($agenda->importante) ? $agenda->importante : null;
                ?>" <?php echo isset($agenda->importante) ?  $agenda->importante==1 ? 'checked' : '' : null ?>>              
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($agenda->id) ? $agenda->id : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <button class="btn btn-secondary">Limpar</button>
                <a class="btn btn-danger" href="?controller=AgendaController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>