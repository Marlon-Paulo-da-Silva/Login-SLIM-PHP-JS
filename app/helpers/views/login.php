<?php $this->layout('master', ['title' => $title]) ?>


<section class="container-left">
    <article class="logo-img">
        <header class="site-header">
            <div class="site-title">Slim</div>
            <div class="site-slogan">Um micro framework for PHP</div>
        </header>
    </article>
    
    <article class="logo-text">
        <h3>Seja bem vindo á</h3>
        <h1>Tela de Login</h1>
    </article>
</section>

<section class="container-right">
    
    <h1>Faça seu login</h1>
    
    <div id="message">
    </div>
    <form class="form-login" id="form-login">
        <div>
            <label>Usuário:</label>
            <input type="text" name="email" placeholder="Ex.: usuarioteste" class="input input-dark" value="marlon@gmail.com">
        </div>
        <div id="passwordContainer">
            <label>Senha:</label>
            <input id="password" name="passwrd" type="password" placeholder="Ex.: senhateste"
                class="input input-dark" value="abc123">
            <i data-feather="eye-off" class="iconFeather"></i>
        </div>
        <button type="submit" class="btn btn-login">Entrar</button>
    </form>
</section>