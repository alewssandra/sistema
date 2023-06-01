    <section class="container">
      <div class="my-5 text-center">
        <span class="h6 d-block">POSSUI ALGUMA DÚVIDA?</span>
        <h1 class="display-4 text-primary">Fale Conosco</h1>
      </div>
      <div class="row">
        <div class="col-lg mb-5">
          <form class="bg-light rounded p-4 box-shadow" id="contact-form">
            <div class="form-group">
              <label for="clienteNome">Nome</label>
              <input type="text" class="form-control" id="clienteNome" name="nome">
            </div>
            <div class="form-group">
              <label for="clienteEmail">Email</label>
              <input type="email" class="form-control" id="clienteEmail" name="email">
            </div>
            <div class="form-group">
              <label for="clientephone">Telefone</label>
              <input type="phone" class="form-control" id="clientephone" name="phone">
            </div>
            <div class="form-group">
              <label for="clienteMensagem">Mensagem</label>
              <textarea id="clienteMensagem" class="form-control" rows="4" name="descricao"></textarea>
            </div>
          </form>
            <button class="btn btn-primary" id="button-test">Enviar Mensagem</button>
        </div>
        <div class="col-lg">
          <h2 class="h6">NOSSO ENDEREÇO</h2>
          <a href="#"><img class="img-fluid box-shadow rounded mb-4" src="<?php echo $url; ?>/assets/img/mapa.png" alt="Endereço da Empresa"></a>
          
          <h2 class="h6">DADOS DE CONTATO</h2>
          <ul class="list-unstyled text-secondary">
            <li>caravan@caravan.com.br</li>
            <li>21 99999-9999</li>
            <li>De Seg. à Sex. das 8h às 18h</li>
          </ul>
          
          <h2 class="h6">REDES SOCIAIS</h2>
          <ul class="list-unstyled" style="max-width: 260px">
            <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#" >Facebook</a></li>
            <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#">Twitter</a></li>
            <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#">Youtube</a></li>
          </ul>
        </div>
      </div>
    </section>
    
    <section class="container">
      <div class="my-5 text-center">
        <span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
        <h2 class="display-4 text-primary">Perguntas Frequentes</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6" id="perguntasFrequentes" data-children=".pergunta">
          <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta1" aria-expanded="true" aria-controls="pergunta1">→ É possível cancelar a viagem?</a>
            <div id="pergunta1" class="collapse show" role="tabpanel">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta2" aria-expanded="true" aria-controls="pergunta2">→ Qual a garantia que tenho se perder o voo?</a>
            <div id="pergunta2" class="collapse" role="tabpanel">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta3" aria-expanded="true" aria-controls="pergunta3">→ Qual a principal forma de viagem?</a>
            <div id="pergunta3" class="collapse" role="tabpanel">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta4" aria-expanded="true" aria-controls="pergunta4">→ Qual o melhor destino de viagem?</a>
            <div id="pergunta4" class="collapse" role="tabpanel">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta5" aria-expanded="true" aria-controls="pergunta5">→ Vocês dão descontos para grupos grandes?</a>
            <div id="pergunta5" class="collapse" role="tabpanel">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
        </div>
      </div>
    </section>