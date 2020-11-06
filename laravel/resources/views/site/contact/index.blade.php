@extends('site.layout')

@section('title')
Entre em contato
@endsection

@section('content')
<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="box-contact">
                <i class="fas fa-map-marker-alt"></i>
                <h2 class="text-orange">Endereço</h2>
                <p>
                    <a href="https://goo.gl/maps/ewSNXWeKfuV1ZE8G8" target="_blank"> Rua Santana, 820 </a>
                </p>
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="box-contact">
                <i class="fas fa-envelope"></i>
                <h2 class="text-orange">E-mails</h2>
                <p>
                    <a href="mailto:gabriel@email.com.br">
                        {{ $config['email'] }}
                    </a>
                </p>
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="box-contact">
                <i class="fas fa-phone-alt"></i>
                <h2 class="text-orange">Telefones</h2>
                <p>
                    <a href="tel:+55{{ StringHelper::cleanNumber(Value::get('phone')) }}"> 
                    {{ Value::get('phone') }}
                    </a>
                </p>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Nome</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Nome" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">E-mail</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" placeholder="Endereço" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="assunto">Assunto</label>
                        <input type="text" class="form-control" id="assunto" placeholder="Assunto" />
                    </div>

                    <div class="form-group col-md-12">
                        <label for="mensagem">Mensagem</label>
                        <textarea id="mensagem" class="form-control"></textarea>
                    </div>
                    
                </div>
                
                <button type="submit" class="btn btn-primary">
                    Enviar
                    <i class="fas fa-paper-plane"></i>
                </button>

                <button disabled type="submit" class="d-none btn btn-primary">
                    Enviando
                    <i class="fas fa-spinner fa-pulse"></i>
                    <!-- <i class="fas fa-spinner fa-spin"></i>
                    <i class="fas fa-circle-notch fa-spin"></i>
                    <i class="fas fa-sync fa-spin"></i>
                    <i class="fas fa-cog fa-spin"></i>
                    <i class="fas fa-spinner fa-pulse"></i>
                    <i class="fas fa-stroopwafel fa-spin"></i> -->
                </button>
            </form>
        </div>

        <div class="col-6 mt-3 d-none">
            <div class="alert alert-success" role="alert">
                E-mail enviado com sucesso!!
            </div>
            <div class="alert alert-warning" role="alert">
                Erro ao enviar e-mail, tente novamente mais tarde!
            </div>
        </div>
    </div>
</div>

<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.1753782443634!2d-50.16169768499249!3d-25.095923983943436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e81a41718a814f%3A0xece0b0771f47ff85!2sSoftGRAF%20Computer%20Graphics%20and%20Advanced%20Courses!5e0!3m2!1sen!2sbr!4v1602288366013!5m2!1sen!2sbr"
    height="250"
    frameborder="0"
    style="border: 0; width: 100%"
    allowfullscreen=""
    aria-hidden="false"
    tabindex="0"
></iframe>
@endsection