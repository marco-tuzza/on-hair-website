<header>
    <div id="logo">
        <img src="https://www.onhair.men/wp-content/uploads/2023/01/onhairl_logo_web2.png" alt="On hair barber shop logo">
    </div>
    <div id="menu">
        <ul>
            <li>
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            </li>
            <li>
                <a href="/chi-siamo" class="{{ request()->is('/chi-siamo') ? 'active' : '' }}">Chi siamo</a>
            </li>
            <li>
                <a href="/servizi" class="{{ request()->is('/servizi') ? 'active' : '' }}">Servizi</a>
            </li>
            <li>
                <a href="/prodotti-theos" class="{{ request()->is('/prodotti-theos') ? 'active' : '' }}">Prodotti Theos</a>
            </li>
            <li>
                <a href="/listino-prezzi" class="{{ request()->is('/listino-prezzi') ? 'active' : '' }}">Listino Prezzi</a>
            </li>
            <li>
                <a href="/contattaci" class="{{ request()->is('/contattaci') ? 'active' : '' }}">Contatti</a>
            </li>
            <li class="button">
                <a href="/contattaci">Prenota Ora</a>
            </li>
        </ul>
    </div>
</header>
