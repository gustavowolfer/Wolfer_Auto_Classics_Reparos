<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oficína/Cliente info.</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
  </head>
  <body>
  <div id="principal">
  <header>
    <div class="top-bar-container">
      <div id="top-bar"></div>

      <div id="top-bar2"><p>Funcionamento Segunda-Sexta 8:00 - 18:00</p></div>
    </div>
    <section>
        <img src="../assets/logo.PNG" alt="LogodaOficína" id="logoimagem"/>
        <div id="telefone">
          <div class="telefone-linha">&#9743; <span>(55) 99xxx790</span></div>
          <div class="telefone-linha"><img src="../assets/zap.PNG" alt="WhatsApp" id="zap"/><span>(55) 55 9xxx790</span></div>
        </div>

    </section>
    <div class="top-bar-container">
      <div id="top-bar3"><hr /></div>
      <div id="top-bar4">
          <nav id="menu">
              <button
                class="menu-toggle"
                type="button"
                aria-controls="menu-list"
                aria-expanded="false"
                onclick="
                  const m = document.getElementById('menu-list')
                  const a = !m.classList.contains('aberto')
                  m.classList.toggle('aberto', a)
                  this.setAttribute('aria-expanded', String(a))
                "
              >
                Menu ☰
              </button>
              <ul id="menu-list">
                <li><a href="../index.html">Home</a></li>
                <li><a href="../sobre.html">Sobre nós</a></li>
                <li><a href="../servicos.html">Serviços</a></li>
                <li><a href="../formulario.html">Agendar online</a></li>
                <li>
                  <a href="../saiba.html"
                    >Saiba mais sobre oficinas</a
                  >
                </li>
              </ul>
            </nav>
      </div>
    </div>
  </header>
    <main style="background-color: #f7f2e7;"><br>
        <div id="detalhemain">

          <div id="detalhe1" style="margin-left:50px;">
          <p>WOLFER AUTO CLASSICS REPAROS</p>

         <p>CONFIRMAÇÃO DE AGENDAMENTO</p>
         </div>


          </div>
         
    <?php

        $nome=$_POST['Nome'];
        $contato=$_POST['Contato'];
        $zap=$_POST['zap'] ?? null;
        $email=$_POST['Email']  ?? null;
        $marcaCarro=$_POST['MarcadC'];
        $modelo=$_POST['Modelo'];
        $anoCarro=$_POST['AnoCarro'];
        $motor=$_POST['Motor'];
        $descricao=$_POST['descricao'];


    ?>



            <fieldset style="margin-top: 30px;
  margin-left: 50px;
  margin-right: 50px;
  font-size: 18px;
   margin-bottom:20px;">
         <legend>Informações do cliente</legend>    

             <?php  echo "<p class='mensagem'><b>Nome</b>: $nome</p>";
                    echo "<p class='mensagem'><b>Telefone</b>: $contato</p>";
                    echo "<p class='mensagem'><b>WhatsApp</b>: $zap</p>";
                    echo "<p class='mensagem'><b>Email</b>: $email</p>";
                   
            ?>
                
</fieldset>

<fieldset style="margin-top: 30px;
  margin-left: 50px;
  margin-right: 50px;
  font-size: 18px;
   margin-bottom:20px;"> <legend>Informações do Veículo</legend>

             <?php  echo "<p class='mensagem'><b>Marca</b>: $marcaCarro</p>";
                    echo "<p class='mensagem'><b>Modelo</b>: $modelo</p>";
                    echo "<p class='mensagem'><b>Ano</b>: $anoCarro</p>";
                     echo "<p class='mensagem'><b>Motor</b>: $motor</p>";
                       echo "<p class='mensagem'><b>Descrição</b>: $descricao</p>";
               
            ?>

</fieldset>
        
        <p align="center" style="background-color: #363638;
         color:white;
         font-size:18px;">Entraremos em contato em até
            2 dias úteis (por telefone, WhatsApp ou Email).
         </p>
              <br>
                
             <p align="center"> <a href="/" id="voltar" >Voltar</a></p>
              
            <br><br>
    </main>
</div>
    <footer>Copyright © 2026 Wolfer Auto Classics Reparos</footer>
    
  </body>
</html>
