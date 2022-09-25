<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <title>Calculadora de IMC</title>
  </head>
  <body class="p-3">
    <div class="container border-bottom">
      <h3>IMC Calculadora</h3>
      <p>IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o peso ideal de cada pessoa.</p>
      <p>O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.</p>
      <p>Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela. Importante: siga os exemplos e use pontos como separadores.</p>
    </div>
    
    <div class="container p-3 mt-2">
      <form action="{{url('/gasto')}}" method="get">
        <div class="row">
          <div class="col mb-3">
            <label for="altura" class="form-label fw-bold">Digite a sua altura (ex.: 1,70):</label>      
            <input type="number" step="0.01" class="form-control p-3 rounded-pill" id="altura" name="altura">
          </div>
          <div class="col mb-3">
            <label for="peso" class="form-label fw-bold">Digite seu peso (ex.: 69,2):</label>      
            <input type="number" class="form-control p-3 rounded-pill" id="peso" name="peso">
          </div>
        </div>
        
        <div class="row">
          <div class="col mb-3">
            <button type="submit" class="btn btn-primary p-3 rounded-pill">Calcular</button>
          </div>   
        </div>  
      </form>
    </div>

    <div class="container rounded-3 mt-3 p-3">
      <div class="row mb-2">
        <div class="col bg-primary p-3 text-light rounded-pill">
          <h3 class="ms-3">VEJA A INTERPRETAÇÃO DO IMC</h3>
        </div>
      </div>
      <div class="row mb-2 border-bottom">
        <div class="col p-3 ms-3 fw-bold">IMC</div>
        <div class="col p-3 ms-3 fw-bold">CLASSIFICAÇÃO</div>
        <div class="col p-3 ms-3 fw-bold">OBESIDADE (GRAU)</div>
      </div>
      <div class="row mb-2 border-bottom">
        <div class="col p-3 ms-3">entre 18,6 e 24,9</div>
        <div class="col p-3 ms-3">Peso ideal</div>
        <div class="col p-3 ms-3">0</div>
      </div>
      <div class="row mb-2 border-bottom">
        <div class="col p-3 ms-3">entre 25,0 e 29,9</div>
        <div class="col p-3 ms-3">Levemente acima do peso</div>
        <div class="col p-3 ms-3">0</div>
      </div>
      <div class="row mb-2 border-bottom">
        <div class="col p-3 ms-3">entre 30,0 e 34,9</div>
        <div class="col p-3 ms-3">Obesidade I</div>
        <div class="col p-3 ms-3">I</div>
      </div>
      <div class="row mb-2 border-bottom">
        <div class="col p-3 ms-3">entre 35,0 e 39,9</div>
        <div class="col p-3 ms-3">Obesidade II(severa)</div>
        <div class="col p-3 ms-3">II</div>
      </div>
      <div class="row mb-2 border-bottom">
        <div class="col p-3 ms-3">acima de 40</div>
        <div class="col p-3 ms-3">Obesidade III(mórbida)</div>
        <div class="col p-3 ms-3">III</div>
      </div>
    </div>
     
  </body>
</html>