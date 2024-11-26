@props(['class'=> null])
<style>
    .headerContent {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        transition: opacity 0.5s ease-in-out;
    }
</style>
<footer class="min-h-96 relative {{$class}}">
        
        <div class="grid grid-cols-2 h-full w-full absolute top-0
                    left-0">
            <div class="bg-gray-900">
            </div>
            <div style="background-image: url('{{asset('images/nav2.webp')}}');" class="relative headerContent">
                <div class="absolute top-0 left-0 w-full h-full
                bg-gradient-to-r from-gray-900 to-blue-500/20">

                </div>

            </div>
        </div>
        

        <div class="flex justify-center translate-x-0 py-8">
            <div class="container max-w-5xl flex justify-start w-full md:w-1/2 ">
                <div class="grid grid-cols-2 gap-4 divide-x divide-white">

                    <div class="text-white">
                        <img src="{{ asset('images/logoblanco.png') }}" class="h-16" alt="">

                        <p class="mt-2">Somos una aerolínea boliviana con sede en Santa Cruz, comprometida con ofrecer vuelos accesibles, cómodos y seguros a nivel nacional e internacional. En EcoJet, nuestro enfoque es brindarte un servicio de alta calidad, asegurando que llegues a tus destinos con puntualidad y confort. ¡Viaja con nosotros y descubre todo lo que el mundo tiene para ofrecer!</p>
                        <div class="mt-4 grid grid-cols-2 gap-4">
                            <input type="text" class="bg-transparent rounded" id="emailNews" placeholder="correo@gmail.com">
                            <button class="primaryButton" onclick="storeEmail()">Recibir noticias</button>
                        </div>
                    </div>
                    <div class="px-0 md:px-4  text-white
                                *:block *:pb-2 *:border-b *:border-white">
                        <span class="text-4xl font-bold border-none">Encuentranos:</span>
                        <span class="mt-2"><i class="fa-brands fa-facebook"></i> Ecojet Bolivia</span>
                        <span class="mt-2"><i class="fa-regular fa-envelope"></i> ecojetbolivia@gmail.com</span>
                        <span class="mt-2"><i class="fa-brands fa-whatsapp"></i> +591 78945621</span>
                        <span class="mt-2"><i class="fa-solid fa-location-dot"></i> Avenida siempre viva</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        async function storeEmail () {
            const emailemailNewsInput = document.getElementById('emailNews');
            const data = {'email' : emailemailNewsInput.value}
            const response = await axios.post('/users/store-email-ajax', data);
            console.log(response);
            if(response.status == 200) {
                alert('Correo registrado exitosamente!');
            }else{
                alert('Error al registrar los datos');
            }
        }
    </script>