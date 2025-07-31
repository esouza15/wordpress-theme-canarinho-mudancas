<?php /* Template Name: Landing Page Canarinho */ ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Empresa de Mudança em Campo Grande, MS. Especialistas em mudanças residenciais com segurança e agilidade. Orçamento rápido e sem compromisso via WhatsApp!">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

    <script src="script.js"></script>
    
    
    <title>Canarinho Mudanças - Segurança e Agilidade em Campo Grande</title>
 
</head>

<body>
    <header class="main-header">
        <nav class="navbar-container">
            <a href="#" class="logo">
                <img src="https://mudancacampograndems.com.br/wp-content/uploads/2025/06/logo-site-beta-03.png" alt="Logotipo Canarinho Mudanças">
            </a>
            <button id="menu-toggle" class="menu-toggle" aria-controls="nav-menu" aria-expanded="false">
                <span class="bar"></span><span class="bar"></span><span class="bar"></span>
            </button>
            <ul id="nav-menu" class="nav-menu">
                <li><a href="https://mudancacampograndems.com.br/">Início</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#testimonials">Depoimentos</a></li>
                <li><a href="https://mudancacampograndems.com.br/blog/">Blog</a></li>
                <li><a href="#contact">Contato</a></li>
                <li><a href="#how-it-works">Como Funciona</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="hero-container">
                <h1>Canarinho Mudanças - Segurança e Agilidade</h1>
                <p>Somos especialistas em serviço de mudança em Campo Grande MS e para todo o Brasil, oferecendo transporte de móveis com equipe qualificada e experiente.</p>
                <a href="https://wa.me/5567992482547" class="cta-button">Solicite seu Orçamento</a>
                <img src="https://mudancacampograndems.com.br/wp-content/uploads/2025/06/canar-prof-03-b.jpg" alt="Profissional da Canarinho Mudanças segurando uma caixa" class="hero-image-item" />
            </div>
        </section>

        <!-- BOXES -->
          <section class="info-section">
        <div class="info-container">
            
            <div class="info-box">
                <div class="icon-background icon-seguranca">
                    <i class="fas fa-shield-alt info-icon"></i>
                </div>
                <h3>Segurança e Cuidado</h3>
                <p>Transporte seguro e cuidadoso de seus bens, com atenção em cada etapa do processo.</p>
            </div>

            <div class="info-box">
                <div class="icon-background icon-agilidade">
                    <i class="fas fa-shipping-fast info-icon"></i>
                </div>
                <h3>Agilidade no Serviço</h3>
                <p>Garantimos que sua mudança seja realizada com rapidez, sem comprometer a qualidade.</p>
            </div>

            <div class="info-box">
                <div class="icon-background icon-precos">
                    <i class="fas fa-file-invoice-dollar info-icon"></i>
                </div>
                <h3>Preços Transparentes</h3>
                <p>Oferecemos orçamentos claros e sem surpresas, com condições facilitadas de pagamento.</p>
            </div>

        </div>
    </section>

        <section class="testimonials" id="testimonials">
            <div class="container">
                <h2>O que nossos clientes dizem</h2>
                <div class="testimonials-container">
                    
                    <!-- depoimento 01 -->
                    <div class="testimonial-card">
                        <div class="testimonial-avatar"><img src="https://mudancacampograndems.com.br/wp-content/uploads/2025/07/Cristiano-05.png"></div>
                        <div class="testimonial-content">
                            <p class="testimonial-text">"Trabalho impecável! A mudança foi realizada com muita atenção e pontualidade. Superou minhas expectativas."</p>
                            <div class="testimonial-footer">
                                <span class="author-name"><a href="https://maps.app.goo.gl/6jR19HXBxVLLJdqr8" target="_blank">Cristiano</a></span>
                                <div class="star-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fa-brands fa-google"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- depoimento 02 -->
                    <div class="testimonial-card">
                        <div class="testimonial-avatar"><img src="https://lh3.googleusercontent.com/a-/ALV-UjWyWc2PpgNYYo2ZkYFM1J64Ubso_RpcTmWs60rgNOdkMCM-Ios-RA=w72-h72-p-rp-mo-ba2-br100" alt="Foto do cliente Adylla"></div>
                        <div class="testimonial-content">
                            <p class="testimonial-text">"A empresa fez um ótimo trabalho. Muito cuidadosos com cada item e super pontuais. Recomendo fortemente!"</p>
                            <div class="testimonial-footer">
                                <span class="author-name"><a href="https://maps.app.goo.gl/bYUb49CE65C377V67" target="_blank">Adylla</a></span>
                                <div class="star-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fa-brands fa-google"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- depoimento 03 -->
                    <div class="testimonial-card">
                        <div class="testimonial-avatar"><img src="https://lh3.googleusercontent.com/a-/ALV-UjVFiBJAG50vQ5bqmb-IIs_KEUq8LLxoARStY2mtVH2xZ6wOFBKsGA=w72-h72-p-rp-mo-br100" alt="Foto do cliente Evelyn"></div>
                        <div class="testimonial-content">
                            <p class="testimonial-text">"Serviço impecável! Agendaram rápido, chegaram pontualmente, desmontaram e montaram os móveis com cuidado. Super recomendo."</p>
                            <div class="testimonial-footer">
                                <span class="author-name"><a href="https://maps.app.goo.gl/JnSTwHRgBv85eAYy9" target="_blank">Evelyn</a></span>
                                <div class="star-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fa-brands fa-google"></i></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="services" id="services">
            <div class="services-container">
                <h2>Nossos Serviços</h2>
                <div class="service-item">
                    <div class="service-icon"><i class="fas fa-check-circle"></i></div>
                    <div class="service-text">
                        <h3>Mudança em Campo Grande</h3>
                        <p>Transporte de móveis seguro que conta com equipe de profissionais especializados em transporte de mudanças para seu novo lar.</p>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-icon"><i class="fas fa-check-circle"></i></div>
                    <div class="service-text">
                        <h3>Transporte de Mudança Interestadual</h3>
                        <p>Realizamos mudanças dentro da cidade e para outros Estados com sistema de carga compartilhada ou exclusivas.</p>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-icon"><i class="fas fa-check-circle"></i></div>
                    <div class="service-text">
                        <h3>Mudança Compartilhada</h3>
                        <p>Realizamos mudanças dentro da cidade e para outros Estados com sistema de carga compartilhada ou exclusivas.</p>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-icon"><i class="fas fa-check-circle"></i></div>
                    <div class="service-text">
                        <h3>Serviço de Montagem e Desmontagem de Móveis</h3>
                        <p>Profissionais qualificados para desmontar, embalar e montar seus móveis de forma rápida e cautelosa.</p>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-icon"><i class="fas fa-check-circle"></i></div>
                    <div class="service-text">
                        <h3>Orçamento de Mudança</h3>
                        <p>Fazemos seu orçamento sem compromisso com os melhores preços e qualidade, pagamento facilitado para você com cartão de crédito e com ótimo desconto para pagamento à vista.</p>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-icon"><i class="fas fa-check-circle"></i></div>
                    <div class="service-text">
                        <h3>Transporte de Veículos</h3>
                        <p>Realizamos transporte de automóveis de passeio e motocicletas, rápido, seguro e sem complicação.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="how-it-works" id="how-it-works">
            <div class="container">
                <h2>Como Funciona</h2>
                <div class="steps-container">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Solicite um orçamento através do WhatsApp</h3>
                            <p>Entre em contato conosco através do WhatsApp para um orçamento rápido e sem compromisso.</p>
                        </div>
                    </div>
                    <div class="step-card">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Defina os detalhes da mudança com a nossa equipe</h3>
                            <p>Nossa equipe entrará em contato para entender melhor sua necessidade de mudança e personalizar o serviço.</p>
                        </div>
                    </div>
                    <div class="step-card">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Agende a execução e nós cuidamos de tudo</h3>
                            <p>Após o agendamento, nossa equipe estará pronta para realizar sua mudança com eficiência e segurança.</p>
                        </div>
                    </div>
                    <div class="step-card">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Receba seus bens no destino</h3>
                            <p>No destino, fazemos a entrega, montagem e organização dos seus móveis com agilidade e atenção.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-choose-us">
            <div class="container">
                <h2>Por que escolher a Canarinho Mudanças?</h2>
                <div class="why-choose-us-content">
                    <div class="logo-column">
                        <img src="https://mudancacampograndems.com.br/wp-content/uploads/2025/06/logo-site-beta-02.webp" alt="Logotipo Canarinho Mudanças">
                    </div>
                    <div class="features-column">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <p><strong>Profissionais Experientes:</strong> Contamos com uma equipe treinada e especializada em Serviços de Mudança e Transporte de Móveis.</p>
                        </div>
                        <div class="feature-item">
                           <i class="fas fa-check-circle"></i>
                           <p><strong>Segurança e Cuidado:</strong> Garantimos que seus bens sejam transportados com segurança, com atenção aos detalhes em cada etapa do processo.</p>
                        </div>
                         <div class="feature-item">
                           <i class="fas fa-check-circle"></i>
                           <p><strong>Transpote de Mudança</strong> Atendemos com destaque em mudanças em Campo Grande e somos referência em mudanças para outras Regiões.</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <p><strong>Facilidade de Comunicação:</strong> Atendimento rápido e direto pelo WhatsApp: (67) 99248-2547.</p>
                         </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-form" id="contact">
            <div class="container">
                <h2>Peça seu Orçamento</h2>
                
                <?php // echo do_shortcode('[contact-form-7 id="3d2c05d" title="Pedir Orçamento"]'); ?>

            </div>
        </section>

    
        <!-- letreiro de palavras chave -->
        <div class="keyword-ticker-wrap">
            <div class="keyword-ticker">
                <span class="keyword-item">Mudanças em Campo Grande MS</span>
                <span class="keyword-item">Orçamento de Mudanças em CG</span>
                <span class="keyword-item">Agilidade na sua mudança</span>
                <span class="keyword-item">Mudanças Local com Cuidado</span>
                <span class="keyword-item">Caminhão de mudanças</span>
                <span class="keyword-item">Campo Grande p/ Outro Estado</span>
                <span class="keyword-item">Transporte com Montagem</span>
                <span class="keyword-item">Local e Interestadual CG</span>
                <span class="keyword-item">Atendimento Rápido CG-MS</span>
                <span class="keyword-item">Profissionais de Confiança</span>
                <span class="keyword-item">Segurança na sua Mudança</span>
                <span class="keyword-item">Mudança Interestadual CG-MS</span>
                <span class="keyword-item">Transporte de Móveis em CG</span>
                <span class="keyword-item">Mudança em Campo Grande</span>
                <span class="keyword-item">Empresa de Mudança CG MS</span>

                <span class="keyword-item">Mudanças em Campo Grande MS</span>
                <span class="keyword-item">Orçamento de Mudanças em CG</span>
                <span class="keyword-item">Agilidade na sua mudança</span>
                <span class="keyword-item">Mudanças Local com Cuidado</span>
                <span class="keyword-item">Caminhão de mudanças</span>
                <span class="keyword-item">Campo Grande p/ Outro Estado</span>
                <span class="keyword-item">Transporte com Montagem</span>
                <span class="keyword-item">Local e Interestadual CG</span>
                <span class="keyword-item">Atendimento Rápido CG-MS</span>
                <span class="keyword-item">Profissionais de Confiança</span>
                <span class="keyword-item">Segurança na sua Mudança</span>
                <span class="keyword-item">Mudança Interestadual CG-MS</span>
                <span class="keyword-item">Transporte de Móveis em CG</span>
                <span class="keyword-item">Mudança em Campo Grande</span>
                <span class="keyword-item">Empresa de Mudança CG MS</span>   
            </div>
        </div>

    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <div class="footer-info">
                    <p><strong>Canarinho Mudanças</strong></p>
                    <p>Rua Eng. Roberto Mange, 2072 - Vila Taquarussu</p>
                    <p>Campo Grande-MS, 79006-630</p>
                    <ul style="list-style-type: none">
                        <li><a href="https://mudancacampograndems.com.br/mudanca-residencial/">Mudança Residencial</a></li>
                        <li><a href="https://mudancacampograndems.com.br/mudanca-em-campo-grande/">Mudança em Campo Grande</a></li>
                        <li><a href="">Mudança Interestadual</a></li>
                        <li><a href="https://mudancacampograndems.com.br/orcamento/">Solicitar Orçamento</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <a href="https://www.facebook.com/profile.php?id=100057117583658" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/canarinhomudancas" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/5567992482547" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="footer-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.94165538283!2d-54.63008182475899!3d-20.42621458097987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9486e8a5b6a7a007%3A0x1d3a51806306c57d!2sR.%20Eng.%20Roberto%20Mange%2C%202072%20-%20Vila%20Taquarussu%2C%20Campo%20Grande%20-%20MS%2C%2079006-630!5e0!3m2!1spt-BR!2sbr!4v1717869156093!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 Canarinho Mudanças | Todos os direitos reservados | Desenv. <a href="https://remotoagencia.com.br" target="_blank" style="color: #fff;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#fff'">Remoto</a></p>
        </div>
    </footer>

    <a href="https://wa.me/5567992482547" class="whatsapp-float" target="_blank" aria-label="Fale conosco pelo WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

</body>
</html>