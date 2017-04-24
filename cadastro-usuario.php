<?php
$page = 'cadastro-usuario';
$title = 'Cadastro de usuários';
include('header.php');
?>
<section class="cadastro">
  <div class="container">
    <form>
      <div class="row">
        <div class="form-group">
          <div class="col-sm-5  col-sm-offset-1">
            <input type="text" placeholder="nome completo" />
          </div>
          <div class="col-sm-3">
            <input type="text" placeholder="cpf" />
          </div>
          <div class="col-sm-3">
            <input type="text" placeholder="rg" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3  col-sm-offset-1">
            <input type="text" placeholder="data de nascimento" />
          </div>
          <div class="col-sm-4">
            <input type="tel" placeholder="telefone (xx) 99999-9999" />
          </div>
          <div class="col-sm-4">
            <input type="email" placeholder="e-mail" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3  col-sm-offset-1">
            <input type="text" placeholder="profissão" />
          </div>
          <div class="col-sm-4">
            <input type="text" placeholder="" />
          </div>
          <div class="col-sm-4">
            <input type="text" placeholder="como conheceu o casa ideia?" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3  col-sm-offset-1">
            <input type="text" placeholder="cep" />
          </div>
          <div class="col-sm-4 margin-ajuste">
            <small>não sabe seu CEP? <a href="#">clique aqui</a></small>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-6  col-sm-offset-1">
              <input type="text" placeholder="endereço" />
          </div>
          <div class="col-sm-1">
            <input type="text" placeholder="n&ordm;" />
          </div>
          <div class="col-sm-2">
            <input type="text" placeholder="complemento" />
          </div>
          <div class="col-sm-2">
            <input type="text" placeholder="bairro" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-2  col-sm-offset-1">
            <select>
              <option>país</option>
              <option>país 01</option>
              <option>país 02</option>
              <option>país 03</option>
              <option>país 04</option>
              <option>país 05</option>
            </select>
          </div>
          <div class="col-sm-2">
            <select>
              <option>uf</option>
              <option>uf 01</option>
              <option>uf 02</option>
              <option>uf 03</option>
              <option>uf 04</option>
              <option>uf 05</option>
            </select>
          </div>
          <div class="col-sm-3">
            <select>
              <option>cidade</option>
              <option>cidade 01</option>
              <option>cidade 02</option>
              <option>cidade 03</option>
              <option>cidade 04</option>
              <option>cidade 05</option>
            </select>
          </div>
          <div class="col-sm-2">
            <input type="password" placeholder="senha" />
          </div>
          <div class="col-sm-2">
            <input type="password" placeholder="confirmar senha" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2 col-sm-offset-10">
          <button type="submit" class="">Enviar</button>
        </div>
      </div>
    </form>
  </div>
</section>
<?php include('footer.php'); ?>