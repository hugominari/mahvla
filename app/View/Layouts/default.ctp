<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?php //echo $this->fetch('title'); ?>
        Mahvla :: Consultoria e Serviços em Tecnologia
    </title>
    <!-- Bootstrap Core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php echo $this->Html->css(array('bootstrap', 'font-awesome', 'slick', 'slick-theme', 'mahvla')); ?>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar nav1 navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <?php echo $this->Html->image('logo-light.png', array('alt' => 'logo-light.png')); ?>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#institucional">INSTITUCIONAL</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#solucoes">SOLUÇÕES</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#atas">ATAS DE REGISTRO</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#parceiros">PARCEIROS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contato">CONTATO</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>

        <div class="container">
            <div class="sliders">
                <div>
                    <?php echo $this->Html->image('banners/Banner_Melhor_Negocio.jpg'); ?>
                </div>
                <div>
                    <?php echo $this->Html->image('banners/Banner_Seguranca_Eletronica.jpg'); ?>
                </div>
                <div>
                    <?php echo $this->Html->image('banners/Banner_Seguranca_Informacao_r2_c2.jpg'); ?>
                </div>
                <div>
                    <?php echo $this->Html->image('banners/Banner_Video_Conferencia.jpg'); ?>
                </div>
            </div>
        </div>

    </header>

    <!-- Services Section -->
    <section id="institucional" class="fullheight">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2 class="section-heading" style="padding-top:26px;">PERFIL INSTITUCIONAL DO GRUPO MAHVLA</h2>
                </div>
            </div>
            <div class="row text-center">
                Grupo de empresas nacionais unidas pela paixão por inovação e tecnologia, utilizando as melhores práticas do mercado,
                atuante em todo o território nacional no segmento de Tecnologia e Comunicação. Com mais de 10 anos de existência,
                o grupo acumula larga experiência, oferecendo ao mercado soluções completas e convergentes, sedimentadas em parcerias sólidas,
                na competência dos nossos colaboradores e na satisfação dos nossos clientes.
            </div>

            <div class="row text-center" style="padding-top:60px; padding-bottom:90px;">

                    <div class="hidden-xs col-md-1 col-lg-1"></div>

                    <div class="col-xs-6 col-md-2 col-lg-2">
                        <?php echo $this->Html->image('perfil-foco.jpg'); ?><br/>
                        Focada nos seus Objetivos
                    </div>

                    <div class="col-xs-6 col-md-2 col-lg-2">
                        <?php echo $this->Html->image('perfil-compromisso.jpg'); ?><br/>
                        Comprometida com seus Clientes
                    </div>

                    <div class="col-xs-6 col-md-2 col-lg-2">
                        <?php echo $this->Html->image('perfil-solucoes.jpg'); ?><br/>
                        Produtos e Soluções Inovadores
                    </div>

                    <div class="col-xs-6 col-md-2 col-lg-2">
                        <?php echo $this->Html->image('perfil-parceiros.jpg'); ?><br/>
                        Bons Parceiros de Negócios
                    </div>

                    <div class="col-xs-6 col-md-2 col-lg-2">
                        <?php echo $this->Html->image('perfil-local.jpg'); ?><br/>
                        Atuação em todo Brasil
                    </div>

                    <div class="hidden-xs col-md-1 col-lg-1"></div>

            </div>

            <div class="row text-center">
                <?php echo $this->Html->link($this->Html->image('download-institucional.png'), '/files/Apresentacao_Institucioanal_Grupo_Mahvla.pdf', array('escape' => false, 'target' => '_blank'));?>
            </div>

        </div>
    </section>

    <!-- Soluções -->
    <section id="solucoes" class="hidden-xs hidden-sm fullheight">
        <div class="container big">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-heading">CONHEÇA NOSSAS SOLUÇÕES</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 text-center">

                    <div class="row" style="padding-top: 53px;">
                        <div class="col-xs-3 col-xs-offset-1" style="padding-left: 30px;">
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true"
                                    data-content="<ul>
                                                    <li>Proteção de Endpoint</li>
                                                    <li>Proteção de Perímetro</li>
                                                    <li>Acesso Remoto Seguro</li>
                                                    <li>Backup e Criptografia de Dados</li>
                                                    <li>NAC - Controle de Acesso</li>
                                                    <li>DLP - Data Loss Prevention</li>
                                                    <li>Gerenciamento de Logs e Correlação de Eventos</li>
                                                    <li>Filtro de Conteúdo WEB e Antispam</li>
                                                  </ul>">
                                SEGURANÇA DA <br/> INFORMAÇÃO
                            </button>
                        </div>
                        <div class="col-xs-3 col-xs-offset-3" style="padding-left: 120px;">
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true"
                                    data-content="<ul>
                                                    <li>Wireless Indoor e Outdoor</li>
                                                    <li>Aceleração e Otimização de Redes WAN</li>
                                                    <li>Gerenciamento de Configurações e Mudanças</li>
                                                    <li>Balanceadores de Carga e Link</li>
                                                    <li>Cloud Computing</li>
                                                    <li>Armazenamento</li>
                                                    <li>Ativos de Rede</li>
                                                    <li>Gerenciamento de Nível de Serviço (SLA)</li>
                                                  </ul>">
                                NETWORKING
                            </button>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 48px;">
                        <div class="col-md-3 col-md-offset-7" style="padding-left: 120px;">
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true"
                                    data-content="<ul>
                                                    <li>Telefonia IP</li>
                                                    <li>Videoconferência</li>
                                                    <li>Colaboração</li>
                                                  </ul>">
                                COMUNICAÇÕES <br/> UNIFICADAS
                            </button>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 58px;">
                        <div class="col-xs-3 col-xs-offset-2" style="padding-left: 30px;">
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true"
                                    data-content="<ul>
                                                    <li>Cabeamento Estruturado e Instalações Elétricas
                                                    <li>Controle de Acesso</li>
                                                    <li>Videomonitoramento</li>
                                                    <li>Sala Segura/Data Center</li>
                                                    <li>GPON – Redes Ópticas Passivas</li>
                                                    <li>Centro de Comando e Controle</li>
                                                    <li>Video Wall</li>
                                                    <li>Automação Predial</li>
                                                    <li>Sonorização</li>
                                                    <li>Proteção Perimetral</li>
                                                </ul>">
                                INFRAESTRUTURA DE TI
                            </button>
                        </div>
                        <div class="col-xs-3 col-xs-offset-2" style="padding-left: 180px;">
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true"
                                    data-content="<ul>
                                                    <li>Service Desk</li>
                                                    <li>Outsourcing</li>
                                                    <li>Consultoria</li>
                                                    <li>Serviços Especializados</li>
                                                  </ul>">
                                IT SERVICE
                            </button>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 90px;">
                        <div class="col-xs-3 col-xs-offset-5" style="padding-left: 140px;">
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-html="true"
                                    data-content="<ul>
                                                    <li>Consultoria Estratégica de TI abrangendo PETI e PDTI</li>
                                                    <li>Diagnóstico e Avaliação de Maturidade de Processos de TI</li>
                                                    <li>Criação de Catálogo de Serviços</li>
                                                    <li>Modelagem de Processos ITIL</li>
                                                    <li>Segurança da Informação</li>
                                                    <li>Gerenciamento de Projetos/Escritórios de Projetos</li>
                                                    <li>Implantação de Ferramentas de Gerenciamento de Serviços</li>
                                                    <li>Soluções de Visualização e Análise de Dados</li>
                                                </ul>">
                                GOVERNANÇA DE TI
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section id="solucoes2" class="hidden-md hidden-lg fullheight">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-heading">CONHEÇA NOSSAS SOLUÇÕES</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 text-center">

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading1">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        SEGURANÇA DA INFORMAÇÃO
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                                <div class="panel-body">
                                    <ul>
                                        <li>Proteção de Endpoint</li>
                                        <li>Proteção de Perímetro</li>
                                        <li>Acesso Remoto Seguro</li>
                                        <li>Backup e Criptografia de Dados</li>
                                        <li>NAC - Controle de Acesso</li>
                                        <li>DLP - Data Loss Prevention</li>
                                        <li>Gerenciamento de Logs e Correlação de Eventos</li>
                                        <li>Filtro de Conteúdo WEB e Antispam</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading2">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        NETWORKING
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                <div class="panel-body">
                                    <ul>
                                        <li>Wireless Indoor e Outdoor</li>
                                        <li>Aceleração e Otimização de Redes WAN</li>
                                        <li>Gerenciamento de Configurações e Mudanças</li>
                                        <li>Balanceadores de Carga e Link</li>
                                        <li>Cloud Computing</li>
                                        <li>Armazenamento</li>
                                        <li>Ativos de Rede</li>
                                        <li>Gerenciamento de Nível de Serviço (SLA)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading3">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        COMUNICAÇÕES UNIFICADAS
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                <div class="panel-body">
                                    <ul>
                                        <li>Telefonia IP</li>
                                        <li>Videoconferência</li>
                                        <li>Colaboração</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading5">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        INFRAESTRUTURA DE TI
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                <div class="panel-body">
                                    <ul>
                                        <li>Cabeamento Estruturado e Instalações Elétricas
                                        <li>Controle de Acesso</li>
                                        <li>Videomonitoramento</li>
                                        <li>Sala Segura/Data Center</li>
                                        <li>GPON – Redes Ópticas Passivas</li>
                                        <li>Centro de Comando e Controle</li>
                                        <li>Video Wall</li>
                                        <li>Automação Predial</li>
                                        <li>Sonorização</li>
                                        <li>Proteção Perimetral</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading6">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        IT SERVICE
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                <div class="panel-body">
                                    <ul>
                                        <li>Service Desk</li>
                                        <li>Outsourcing</li>
                                        <li>Consultoria</li>
                                        <li>Serviços Especializados</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading7">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                        GOVERNANÇA DE TI
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <ul>
                                        <li>Consultoria Estratégica de TI abrangendo PETI e PDTI</li>
                                        <li>Diagnóstico e Avaliação de Maturidade de Processos de TI</li>
                                        <li>Criação de Catálogo de Serviços</li>
                                        <li>Modelagem de Processos ITIL</li>
                                        <li>Segurança da Informação</li>
                                        <li>Gerenciamento de Projetos/Escritórios de Projetos</li>
                                        <li>Implantação de Ferramentas de Gerenciamento de Serviços</li>
                                        <li>Soluções de Visualização e Análise de Dados</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>




    <!-- About Section -->
    <section id="atas">

        <div class="row">
            <div class="col-md-12 col-lg-12 atas">
                <a href="#" id="openatas">
                    <p> FAÇA O DOWNLOAD DAS NOSSAS ATAS DE REGISTRO DE PREÇOS. <i class="arrow-down fa fa-sort-desc"></i> </p>
                </a>
            </div>
        </div>

        <div id="showatas">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2 class="section-heading">ATAS DE REGISTRO</h2>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <h4><b>O que é o Atas de Registro de Preços ?</b></h4>
                    <p>
                        É o conjunto de procedimentos para registro formal de preços relativos
                        a prestação de serviços, aquisição e locação de bens, para contratações
                        futuras, realizado por meio de uma única licitação, na modalidade de
                        concorrência ou pregão.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <h4><b>Faça a adesão a nossas Atas de Registro de Preços</b></h4>
                    <p>
                        O Grupo Mahvla disponibiliza aquisição de soluções em TI pelos
                        órgãos públicos através da modalidade Registro de Preços. A adoção
                        ao Sistema de Registro de Preços permite ganhos em agilidade,
                        segurança e economia, pois trata-se do sistema mais inovador
                        para compras e contratação de serviços ao setor público.
                    </p>
                </div>

                <div class="row">

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 class="section-heading text-center">ATAS DE REGISTRO DE PREÇOS PARA DOWNLOAD</h2> <br/><br/>
                        <div class="row text-center">
                            <p> <b> Nenhuma Ata cadastrada no momento. </b> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Team Section -->
    <section id="parceiros" class="bg-light-gray fullheight">

        <div class="container text-center">

            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-heading">PARCERIAS ESTRATÉGICAS</h2>
                </div>
            </div>

            <div class="parceiros">

                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/avaya.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/panduit.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/axis.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/infoblox.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/checkpoint.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/hid.jpg'); ?>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/symantec.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/bosh.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/mitel.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/aruba.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/furukawa.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/exinda.jpg'); ?>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/dell.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/polycom.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/sony.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/varonis.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/unify.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/milestone.jpg'); ?>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/a10.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/digifort.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/veritas.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/vmware.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/hp.jpg'); ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $this->Html->image('parceiros/extreme.jpg'); ?>
                </div>

            </div>

        </div>

    </section>

    <aside class="hidden-xs hidden-sm">
        <div class="escritorios"></div>
    </aside>

    <!-- Contact Section -->
    <section id="contato">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 text-center">
                    <h2 class="section-heading">ENTRE EM CONTATO</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">

                    <?php echo $this->Form->create('contact', array('novalidate')); ?>
                        <div class="row">
                            <div class="col-xs-6">

                                <div class="form-group">
                                    <?php echo $this -> Form -> input('nome', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Nome Completo')); ?>
                                </div>

                                <div class="form-group">
                                    <?php echo $this -> Form -> input('email', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Email válido')); ?>
                                </div>

                                <div class="form-group">
                                    <?php echo $this -> Form -> input('assunto', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Assunto')); ?>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <?php echo $this -> Form -> textarea('texto', array('class' => 'form-control', 'escape' => false, 'rows' => '9', 'placeholder' => 'Digite sua mensagem aqui!')); ?>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block" style="height: 56px">
                                        <?php echo __('Enviar'); ?>
                                    </button>
                                </div>
                            </div>

                        </div>
                    <?php echo $this -> Form -> end(); ?>

                </div>
            </div>
        </div>
    </section>


    <div class="row">
        <div class="col-md-12 col-lg-12 maps">
            <a href="#" id="maps">
                <p> VEJA NO GOOGLE MAPS ONDE ESTAMOS. <i class="arrow-down fa fa-sort-desc"></i> </p>
            </a>
        </div>
        <div id="googlemaps" class="col-md-12 col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21187.46210754753!2d-47.90183918910735!3d-15.797096411326077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3ae8ec10b009%3A0xdb856f07ce9699ab!2sMahvla+Telecomm+Cons+e+Serv+em+Tecnologia!5e1!3m2!1spt-BR!2sbr!4v1453938421920" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row primaria">

                <div class="col-md-12 col-lg-12">
                    <p class="text-size30" style="margin-top: 89px;"> +55 (61)2191-4900 </p>
                    <p class="text-size20"> SRTVS Q. 701 Ed. Assis Cheateaubriand Sala 08 <br/> 70.340-000 - Brasília - DF </p>
                </div>

                <div class="col-xs-12 col-lg-12 telefones" style="margin-top: 86px;">

                    <div class="hidden-xs col-md-1 col-lg-1"></div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        BELO HORIZONTE - MG <br/>
                        +55 |61| 9153-6570
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        VITÓRIA - ES <br/>
                        +55 |27| 3022-6119
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        SALVADOR - BA <br/>
                        +55 |71| 3011-0611
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        PALMAS - TO <br/>
                        +55 |63| 9276-0091
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        FORTALEZA - CE <br/>
                        +55 |61| 9153-6570
                    </div>

                    <div class="hidden-xs col-md-1 col-lg-1"></div>
                </div>
            </div>
        </div>
    </footer>

    <div class="footer-final">
        <div class="col-md-12 col-lg-12">
            <a class="page-scroll" href="#page-top">
                <?php echo $this->Html->image('to-top.png'); ?>
            </a>
        </div>
        <div class="col-md-12 col-lg-12">
            <br/>
            <?php echo $this->Html->image('logo-mahvla.png'); ?>
            <?php echo $this->Html->link($this->Html->image('webmail.jpg', array('width' => '64')), 'https://webmail.mahvla.com.br/owa', array('escape' => false, 'target' => '_blank', 'style' => 'position:absolute;right:0px;bottom:0px;'));?>
        </div>
        <div class="col-md-12 col-lg-12">
            <br/><br/>
            &copy; <?php echo date('Y'); ?> Todos os direitos reservados.
        </div>


    </div>

    <!-- jQuery -->
    <?php echo $this->Html->script(array('jquery.min', 'bootstrap.min', 'easing.min', 'slick.min', 'sticky', 'mahvla')); ?>

</body>

</html>
