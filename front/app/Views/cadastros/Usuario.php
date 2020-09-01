<div class="content-usuario">
    <form method="POST" class="form" id="cadastroUsuario">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cpf">CPF</label>
                <input type="number" class="form-control" id="cpf" name="cpf" placeholder="CPF">
            </div>      
            <div class="form-group col-md-8">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" na placeholder="Nome">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="cargo">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo">
                </div>  
        </div> 
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="unidadeReferencia">Unidade de Referência</label>
                <select id="unidadeReferencia" name="unidadeReferencia" class="form-control">
                </select>
            </div>
        </div>      
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="usuario">Usuário</label>
                <input type="text"  id="usuario" name="usuario" class="form-control" placeholder="Usuário">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
            </div>  
        </div>
        <div class="form-row col-md-12">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="municipal" name="municipal" class="custom-control-input">
                <label class="custom-control-label" for="municipal">Perfil Municipal</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="monitoramento" name="monitoramento" class="custom-control-input">
                <label class="custom-control-label" for="monitoramento">Perfil Monitoramento</label>
            </div>
        </div>           
        <button type="submit" class="btn btn-primary" id="btnSalvar">Salvar</button>
        <button type="submit" class="btn btn-primary" id="btnEditar">Editar</button>
        <button type="submit" class="btn btn-primary" id="btnExcluir">Excluir</button>
        <button type="submit" class="btn btn-primary" id="btnLimpar">Limpar</button> 
        <button type="submit" class="btn btn-primary" id="btnRetornar">Retornar</button>         
    </form>
</div>
