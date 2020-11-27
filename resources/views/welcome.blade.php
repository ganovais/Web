<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <form action="{{ url('dados') }}" method="POST" role="form">
                    <legend>Informe seus dados</legend>
                    @csrf
                    <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" name="name" class="form-control" id="" placeholder="Nome">
                    </div>

                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="email" name="email" class="form-control" id="" placeholder="E-mail">
                    </div>

                    <div class="form-group">
                        <label for="">Telefone</label>
                        <input type="tel" name="phone" class="form-control" id="" placeholder="Telefone">
                    </div>
                
                    <input type="hidden" name="accepted" value="0">
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
    
</body>
</html>