<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regsitro Mensalidade</title>
    <!--CDN Bootstrap -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="estilo.css" rel="stylesheet">

</head>
<body>

    <h1 style=" text-align: center; margin-top: 10px;">Registro de Estudantes</h1>

    <div class="container" id="tamanho" style="margin-top: 40px;">
        
        <form action="inserir_dados.php" method="post">
            <div class="mb-3">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Insira o nome do curso" required>          
            </div>
            <div class="mb-3">
                <label>Ano</label>
                <input type="number" class="form-control" name="ano" placeholder="Insira o ano em curso" required>          
            </div>
            <div class="mb-3">
                <label>Curso</label>  
                <select class="form-control" name="curso" required>
                    <option>IT</option>
                    <option>Contabilidade</option>
                    <option>Recursos Humanos</option>
                    <option>Gestao Portuaria</option>
                </select>        
            </div>
            <div class="mb-3">
                <label>Metodo Pagamento</label>  
                <select class="form-control" name="pagamento" required>
                    <option>Deposito</option>
                    <option>BIM</option>
                    <option>Smart Izi</option>
                </select>        
            </div>
            <div class="mb-3">
                <label>Valor</label>
                <input type="number" class="form-control" name="valor" placeholder="Insira o valor da mensalidade" required>          
            </div>
            <div class="mb-3">
            <label>Modalidade</label>  
                <select class="form-control" name="modalidade" required>
                    <option>Mensal</option>
                    <option>Trimestral</option>
                    <option>Anual</option>
                </select>           
            </div>
            <button type="submit" class="btn btn-success ">Registrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>