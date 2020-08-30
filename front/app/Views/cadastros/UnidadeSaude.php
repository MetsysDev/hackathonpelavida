<div id="content-wrapper" class="d-flex flex-column">
    <div class="content-unidadeSaude">
        <form method="POST" class="form" id="cadastroUnidadeSaude">
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="unidadeSaude">Unidade Básica de Saúde</label>
                <input type="text" class="form-control" id="unidadeSaude" name="unidadeSaude" placeholder="Unidade Básica de Saúde">
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
                <div class="form-group col-md-5">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                </div>
                <div class="form-group col-md-4">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                </div>
                <div class="form-group col-md-3">
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
                <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                </div> 
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                </div>
            </div>
            <div class="form-group col-md-12">
                <label for="tipoUnidade">Selecione o status da Unidade</label>
                <select id="tipoUnidade" name="tipoUnidade" class="form-control">
                    <!-- for each do banco-->
                    <option selected></option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" id="btnSalvar">Salvar</button>
            <button type="submit" class="btn btn-primary" id="btnEditar">Editar</button>
            <button type="submit" class="btn btn-primary" id="btnExcluir">Excluir</button>
            <button type="submit" class="btn btn-primary" id="btnLimpar">Limpar</button>
            <button type="submit" class="btn btn-primary" id="btnRetornar">Retornar</button>
        </form>
    </div>
</div>