<div id="content-wrapper" class="d-flex flex-column">
    <div class="content-acompanhmento" align="center">
        <form method="POST" class="form" id="formularioAcompanhamento">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="cns">CNS</label>
                    <input type="number" class="form-control" id="cns" name="cns" placeholder="CNS">
                </div>
                <div class="form-group col-md-9">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="dataNasc">Data de Nasc.</label>
                    <input type="date" class="form-control" id="dataNasc" name="dataNasc" placeholder="Data de Nasc.">
                </div>
                <div class="form-group col-md-4">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                </div>
                <div class="form-group col-md-4">
                    <label for="dataObito">Óbito</label>
                    <input type="date" class="form-control" id="dataObito" name="dataObito" placeholder="Óbito">
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
                    <label for="primeiraAvaliacao">Primeira Avaliação Médica</label>
                    <input type="text" class="form-control" id="primeiraAvaliacao" name="primeiraAvaliacao" placeholder="Primeira Avaliação Médica">
                </div>
                <div class="form-group col-md-6">
                    <label for="dataIsolamento">Isolamento até:</label>
                    <input type="date" class="form-control" id="dataIsolamento" name="dataIsolamento" placeholder="Isolamento até:">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="dataInicioSintomas">Data de Início dos Sintomas</label>
                    <input type="date" class="form-control" id="dataInicioSintomas" name="dataInicioSintomas" placeholder="Data de Início dos Sintomas">
                </div>
                <div class="form-group col-md-6">
                    <label for="dataColetaExame">Data da Coleta do Exame</label>
                    <input type="date" class="form-control" id="dataColetaExame" name="dataColetaExame" placeholder="Data da Coleta do Exame">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="unidadeSintomatica">Unidade Sintomática</label>
                    <select id="unidadeSintomatica" name="unidadeSintomatica" class="form-control">
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="convenio">Tipo de Convênio</label>
                    <select id="convenio" name="convenio" class="form-control">
                        <option value="sus">SUS</option>
                        <option value="particular">Particular</option>
                    </select>
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
                <div class="form-group col-md-4">
                    <label for="tipoExame">Tipo de exame</label>
                    <select id="tipoExame" name="tipoExame" class="form-control">
                        <option value="pcr_rt">PCRT-RT</option>
                        <option value="sorologia">Sorologia</option>
                        <option value="teste_rapido">Teste Rápido</option>                        
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="dataResultado">Data do Resultado</label>
                    <input type="date" class="form-control" id="dataResultado" name="dataResultado" placeholder="Data do Resultado">
                </div>
                <div class="form-group col-md-4">
                    <label for="resultadoExame">Resultado do Exame</label>
                    <select id="resultadoExame" name="resultadoExame" class="form-control">
                        <option value="positivo">Positivo</option>
                        <option value="negativo">Negativo</option>
                        <option value="aguardando_resultado">Aguardando Resultado</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="grupoRisco">Grupo de Risco</label>
                    <select id="grupoRisco" name="grupoRisco" class="form-control">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="dataLigacao">Data</label>
                    <input type="date" class="form-control" id="dataLigacao" name="dataLigacao" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="horaLigacao">Hora</label>
                    <input type="time" class="form-control" id="horaLigacao" name="horaLigacao" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="comorbidades">Comorbidades</label>
                    <select id="comorbidades" name="comorbidades" class="form-control">
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="isolamento">Em Isolamento</label>
                    <select id="isolamento" name="isolamento" class="form-control">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="orientacao">Orientação</label>
                    <select id="orientacao" name="orientacao" class="form-control">
                        <option value="bem">Bem</option>
                        <option value="confuso">Consufo</option>
                        <option value="sonolento">Sonolento</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="apetite">Apetite</label>
                    <select id="apetite" name="apetite" class="form-control">
                        <option value="bom">Bom</option>
                        <option value="diminuido">Diminuido</option>
                        <option value="anoretico">Anorético</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="sinais">Sinais</label>
                    <select id="sinais" name="sinais" class="form-control">
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="febre">Febre</label>
                    <select id="febre" name="febre" class="form-control">
                        <option value="ausente">Ausente</option>
                        <option value="pico_baixo">Um Pico Baixo</option>
                        <option value="persistente">Febre Persistente - 3 Picos por dia</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="tosse">Tosse</label>
                    <select id="tosse" name="tosse" class="form-control">
                        <option value="ausente">Ausente</option>
                        <option value="consegue_falar">Consegue falar sem tossir</option>
                        <option value="nao_fala">Não completa uma frase sem tossir</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="faltaArCansaco">Falta de Ar/Cansaço</label>
                    <select id="faltaArCansaco" name="faltaArCansaco" class="form-control">
                        <option value="ausente">Ausente</option>
                        <option value="presente">Presente ao esforço</option>
                        <option value="intensa">Intensa no repouso</option>
                    </select>
                </div>
            </div>

            <!-- 
                Situação da familia 
            -->

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="obsGerais">Observações Gerais</label>
                    <textarea class="form-control" id="obsGerais" name="obsGerais" placeholder="Observações gerais"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="btnSalvar" name="btnSalvar">Salvar Acompanhamento</button>
            <button type="submit" class="btn btn-primary" id="btnLimpar">Limpar</button>
            <button type="submit" class="btn btn-primary" id="btnRetornar">Retornar</button>
        </form>
    </div>
</div>
