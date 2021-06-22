<header>
    <a href="/">
        <img src="{{ asset('img/la-molisana-logo.png') }}" alt="Logo">
    </a>

    <nav>
        <ul>

            {{-- diversi metodi per inserire il link della rotta --}}
            <li>
                {{-- metodo 1: per la home --}}
                <a class="{{ (request()->is('/')) ? 'active' : '' }}" href="/">Home</a>
                {{-- operatore ternario: se la richiesta è uguale alla rotta aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li>
                {{-- metodo 2: url('rotta') --}}
                <a class="{{ (request()->is('prodotti')) ? 'active' : '' }}" href="{{ url('prodotti') }}">Prodotti</a>
                 {{-- operatore ternario: se la richiesta è uguale alla rotta aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li>
                {{-- metodo 3: ***IL PIù UTILIZZATO*** legge il name della rotta --}}
                <a class="{{ (request()->is('chi-siamo')) ? 'active' : '' }}" href="{{ route('about') }}">Chi siamo</a>
                 {{-- operatore ternario: se la richiesta è uguale alla rotta (non al name!) aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li>
                {{-- metodo 4: ***DEPRECATO*** --}}
                <a class="{{ (request()->is('contatti')) ? 'active' : '' }}" href="/contatti">Contatti</a>
                 {{-- operatore ternario: se la richiesta è uguale alla rotta aggiungi la classe active, altrimenti nulla --}}
            </li>

        </ul>
    </nav>
</header>
