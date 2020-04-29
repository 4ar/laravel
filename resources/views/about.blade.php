@include('header')
         <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    About us
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore perspiciatis labore voluptate laborum libero corrupti illum ipsum aliquid. Unde aliquam fugit, quam et culpa beatae esse ad iusto veniam nemo, facilis qui tempore? Quibusdam id, natus facilis perferendis aut nostrum!</p>
            </div>
        </div>
    </body>
</html>
