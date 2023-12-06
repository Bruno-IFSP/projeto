<!DOCTYPE html>
<html lang="en" class="professor">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esse é o seu site de estudos">
    <meta name="keywords" content="Estudos, Vestibular, Faculdade">
    <meta name="author" content="Bruno Henrique">
    
    <link rel="icon" type="assetss/logo.png" href="http://example.com/image.png" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    

    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
    <script src="./script/headeInteration.js" defer></script>
    <script src="./script/forms.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    


    

    <title>EnemFudendo - Home</title>

</head>
 
<body>
<?php require('../PHP/topo professor.php');?>
  
     <section class="hero" id="hero">
      <div class="text-content">
        <h1>Bem vindo</h1>
      <h3>Esse é o site perfeito para estudar</h3>
      <a href="#conheca"><button>Conheça nosso site de estudos</button></a>
      </div>
      </section>

     <section class="beneficios" id="beneficios">
        <div class="container">
            <h2>Beneficios</h2>
            <div class="item">
                <div class="itemPhoto">
                    <img class="ImgItem" src="assetss/beneficioProf1.jpg" alt="beneficio 1">
                </div>
                <div class="Item-text">
                    <h3>Diversidade de questões</h3>
                    <p>Nosso site oferece um diversificado banco de questões abordando de diversas disciplinas, abrangendo áreas como Matemática, Ciências, Português, História, Geografia, Física, Química, entre outras. além da opção de  atribuir tarefas e acompanhar o progresso dos alunos.</p>
                </div>
            </div> 
            <div class="item reverse">
                <div class="itemPhotoRight">
                    <img class="ImgItem" src="assetss/beneficioProf2.jpg" alt="beneficio 2">
                </div>
                <div class="Item-text">
                    <h3>Estudar em casa</h3>
                    <p>Estudar em casa possibilita ao estudante o exercício da organização, disciplina, raciocínio e pesquisa, visando ajudar mais jovens a conseguir o ingresso ao ensino superior desenvolvemos esse site.</p>
                </div>
            </div>  
            <div class="item">
                <div class="itemPhoto">
                    <img class="ImgItem" src="assetss/beneficioProf3.jpg" alt="beneficio 3">
                </div>
                <div class="Item-text">
                    <h3>Suporte Técnico Dedicado</h3>
                    <p>Nosso site está no ar 24 horas por dia, caso ocorra algum problema contamos com uma equipe de suporte técnico especializado para resolver rapidamente problemas técnicos e oferecer treinamento adicional, se necessário.</p>
                </div>
            </div> 
        </div> 
     </section>

     <section id="materias" class="materias-escolares">
        <div class="container">
            <div class="materias-superiores">
                <div class="card">
                    <h3>Adicionar Alternativa</h3>
                    <div class="conteudo-card">
                        <q>Adicione alternativas ao nosso banco de dados</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Alternativa" src="../assetss/alternativa.png">
                            <div class="texto-conteudo-materia">
                                <h4>Alternativas</h4>    
                            </div>
                        </div>
                    </div>
                    <a href="../PHP/adicionar_alternativa.php" class="btn-simulados">Criar Alternativas</a>
                </div>
    
                <div class="card">
                    <h3>Perguntas</h3>
                    <div class="conteudo-card">
                        <q>Adicione perguntas ao nosso banco de dados</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Pergunta" src="../assetss/pergunta.png">
                            <div class="texto-conteudo-materia">
                                <h4>Perguntas</h4>                              
                            </div>
                        </div>
                    </div>
                    <a href="../PHP/adicionar_pergunta.php" class="btn-simulados">Criar Perguntas</a>
                </div>
    
                <div class="card">
                    <h3>Provas</h3>
                    <div class="conteudo-card">
                        <q>Adicione provas ao nosso banco de dados</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Prova" src="../assetss/prova.png">
                            <div class="texto-conteudo-materia">
                                <h4>Provas</h4>                               
                            </div>
                        </div>
                    </div>
                    <a href="../PHP/adicionar_prova.php" class="btn-simulados">Criar Provas</a>
                </div>    
    
                <div class="card">
                    <h3>Resultados</h3>
                    <div class="conteudo-card">
                        <q>Ver resultado das provas criadas</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Ver resultado" src="../assetss/resultadoprova.png">
                            <div class="texto-conteudo-materia">
                                <h4>Resultados</h4>                              
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn-simulados">Ver Resultados</a>
                </div>
            </div>
        </div>
    </section>
    
    
     <section id="conheca" class="conheca">
        <div class="container">
            <div class="text-content">
                <h2>Conheça nosso Portal de Estudos</h2>
                <p>Explore nossos recursos de estudo online</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="cardContent">
                        <img src="assetss/🦆 icon _clock_.svg">
                        <h3>Disponivel 24 horas</h3>
                    </div>
                </div> 
                <div class="card">
                    <div class="cardContent">
                        <img src="assetss/🦆 icon _calendar_.svg">
                        <h3>Todos os dias da semana</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="cardContent">
                        <img src="assetss/🦆 icon _library building_.svg">
                        <h3>Qualquer dúvida entre em contato</h3>
                    </div>
                </div>
            </div>
        </div>  
     </section>


     <section id="fotos" class="fotos">
        <div class="container">
            <div class="text-content">
                <h2>Ficar perto dos alunos independente da distância</h2>
            </div>
                <div class="listPhotos">
                    <img class="Photo" alt="foto de inspiração" src="assetss/fotoprof1.jpg">
                    <img class="Photo" alt="foto de inspiração" src="assetss/fotoprof2.jpg">
                    <img class="Photo" alt="foto de inspiração" src="assetss/fotoprof3.jpg">
                </div>
         </div>       
     </section>
     
     <section id="contato" class="contato">
        <div class="container">
            <div class=" text-content">
                <h2>fale conosco</h2>
            </div>
            <forma ação="https://formsubmit.co/140819224fd160d82e2e085e0a5fdd 52" method="POST">
                <div class="row">
                    <div class="input-field">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="name" required>
                    </div>
                    <div class="input-field">
                        <label for="lastName">Sobrenome:</label>
                         <input type="text" name="name" class="form-control" placeholder="last name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>

                    </div>
                    <div class="input-field">
                        <label for="phone">Telefone:</label>
                        <input placeholder="(xx) 9 9999-9999" maxlength="11" name="phone" class="form-control" placeholder="last name" required>
                   
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <label for="message">Sua mensagem:</label>
                        <textarea placeholder="Your Message" class="form-control" name="message" rows="10" required></textarea>
                    </div>
                </div> 
                <div class="buttonForm">
                    <button type="submit" >Enviar mensagem</button>
            
   
                </div>     
            </form>
        </div>
     </section> 
    </main>
    <footer>
        <div class="rowFooter">
            <div class="logoFooter">
                <img src="assetss/logo.png">
            </div>
            <div class="footerContent">
                <div class="links">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="#hero" target="_blank">inicio</a></li>
                        <li><a href="#beneficios">beneficios</a></li>
                        <li><a href="#materias">Matérias</a></li>
                        <li><a href="conheca">Sobre site</a></li>
                        <li><a href="contato">Contato</a></li>
                    </ul>
                </div>
                 

                <div class="contatoFooter">
                    <h3>Nosso contato</h3>
                    <ul>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                            enembemlegal@gmail.com
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                            (19) 4002 8922
                        </li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Campinas SP
                        </li>
                    </ul>
                    <ul class="socialMedia">
                        <li>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </li>
                    </ul>
                </div>
            </div>
           
        </div>
    </footer>
</body>
</html>