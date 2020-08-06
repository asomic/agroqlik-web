    <!-- Footer -->
    <footer>
        <div class="footer-inner paddings-l-r">
            <div class="datos-wrapper">
                <div class="item">
                    <img src="{{asset('/images/logo-inv.png')}}">
                </div>

                <div class="item">
                    <p>
                        <span>Correo</span>
                        <br>
                        <a href="mailto:contacto@agroqlik.cl">contacto@agroqlik.cl</a>
                    </p>
                </div>
                <div class="item">
                    <p>
                        <span>Teléfono</span>
                        <br>
                        {{-- <a href="tel:+56989222422">+569 89 222 422</a> --}}
                        <a href="tel:+56966070874">+56 9 660 70 874</a>
                    </p>
                </div>
                <div class="item">
                    <p>
                        <span>Somos de</span>
                        <br>
                        <a
                            href="https://www.google.cl/maps/place/Curic%C3%B3,+Maule/@-34.9809426,-71.2628082,13z/data=!3m1!4b1!4m5!3m4!1s0x966519c706a5d7d3:0xd0866d47d2259f4!8m2!3d-34.9779853!4d-71.2528803">Curicó,
                            VII Región</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="creditos">
            <div class="rrss">
                <a href="https://facebook.com/agroqlik" target="_blank"><img src="{{ asset('/images/rrss/facebook.svg') }}" alt=""></a>
                <a href="https://instagram.com/agroqlik" target="_blank"><img src="{{ asset('/images/rrss/instagram.svg') }}" alt=""></a>
                <a href="https://www.linkedin.com/company/agroqlik" target="_blank"><img src="{{ asset('/images/rrss/linkedin.svg') }}" alt=""></a>
            </div>
            <p>
                Hecho por <a href="https://asomic.com"><img src="{{asset('/images/asomic.png')}}" alt="asomic"></a> en Curicó,
                Chile
            </p>
        </div>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('/js/app.js')}}"></script>
     @if(Session::has('danger') || Session::has('success')) 
    <script>
        $(document).ready(function(){
            console.log('siii');
            $('#modal-response').addClass('show-modal');
        });
    </script>
    @endif 
<main>
</body>

</html>
