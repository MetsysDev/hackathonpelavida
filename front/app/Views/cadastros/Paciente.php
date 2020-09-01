<div class="content-paciente">
    <form method="POST" class="form" id="cadastroPaciente">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cns">CNS</label>
                <input type="number" class="form-control" id="cns" name="cns" placeholder="CNS">
            </div>                  
            <div class="form-group col-md-8">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>                
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="data">Data de Nasc.</label>
                <input type="date" class="form-control" id="data" name="data" placeholder="Data de Nasc.">
            </div>
            <div class="form-group col-md-4">
                <label for="cpf">CPF</label>
                <input type="number" class="form-control" id="cpf" name="cpf" placeholder="CPF">
            </div> 
            <div class="form-group col-md-5">
                <label for="convenio">Tipo de Convênio</label>
                <select id="convenio" name="convenio" class="form-control">
                    <option value="sus">SUS</option>
                    <option value="particular">Particular</option>
                </select>
            </div>                   
        </div>   
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
            </div>
            <div class="form-group col-md-8">
                <label for="dataColetaExame">E-mail</label>
                <input type="email" class="form-control" id="dataColetaExame" name="dataColetaExame" placeholder="E-mail">
            </div>
        </div>                 
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cep">CEP</label>
                <input type="number" class="form-control" id="cep" name="cep" placeholder="CEP">
            </div>
            <div class="form-group col-md-7">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
            </div>
            <div class="form-group col-md-1">
                <label for="numero">Nº</label>
                <input type="number" class="form-control" id="numero" name="numero" placeholder="Nº">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
            </div>
            <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
            </div>
            <div class="form-group col-md-3">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
            </div>
            <div class="form-group col-md-2">
                <label for="uf">UF</label>
                <select id="uf" name="uf" class="form-control">
                    <option></option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="dataInicioSintomas">Data de Início dos Sintomas</label>
                <input type="date" class="form-control" id="dataInicioSintomas" name="dataInicioSintomas" placeholder="Data de Início dos Sintomas">
            </div>
            <div class="form-group col-md-4">
                <label for="dataColetaExame">Data da Coleta do Exame</label>
                <input type="date" class="form-control" id="dataColetaExame" name="dataColetaExame" placeholder="Data da Coleta do Exame">
            </div>
            <div class="form-group col-md-4">
                <label for="dataObito">Óbito </label>
                <input type="date" class="form-control" id="dataObito" name="dataObito" placeholder="Óbito">
            </div>
        </div>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="descAvaliacao">Descrição Avaliação</label>
                <input type="text" class="form-control" id="descAvaliacao" name="descAvaliacao" placeholder="Descrição Avaliação">
            </div>
            <div class="form-group col-md-6">
                <label for="dataInicioIsolamento">Inicio do isolamento</label>
                <input type="date" class="form-control" id="dataInicioIsolamento" name="dataInicioIsolamento" placeholder="Inicio do Isolamento">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="btnSalvar">Salvar</button>
        <button type="submit" class="btn btn-primary" id="btnEditar">Editar</button>
        <button type="submit" class="btn btn-primary" id="btnExcluir">Excluir</button>
        <button type="submit" class="btn btn-primary" id="btnLimpar">Limpar</button>
        <button type="submit" class="btn btn-primary" id="btnRetornar">Retornar</button>
        </form>
</div>
