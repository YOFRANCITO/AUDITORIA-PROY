<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inicio - Ecojet</title>

    <link rel="icon" href="{{ asset('images/logo (2).png') }}" type="image/x-icon">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Styles -->
    @livewireStyles
</head>
<style>
    .animacionFondoUp {
        animation: bgAnimationUp 2s ease-in-out forwards;
    }

    .animacionFondoDown {
        animation: bgAnimationDown 2s ease-in-out forwards;
    }

    @keyframes bgAnimationUp {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes bgAnimationDown {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>

<body>


    <section class="w-full bg-gray-900 relative h-screen animate-fade-down animate-duration-500">
        <div class="h-screen headerContent absolute left-0 top-0 w-full " style="background-image: url('{{ asset('images/nav1.webp') }}');" id="headerSection"> </div>

        <div class="bg-gradient-to-t from-gray-800 to-transparent h-full flex flex-col translate-x-0">

            <div class="flex justify-center">
                <div class="container max-w-5xl p-2 ">


                    <x-nav textColor="text-white" />

                    <div class="mt-16 grid md:grid-cols-2">
                        <div class="flex items-center">
                            <div class="flex items-cemter">
                                <div class="text-white">
                                    <span class="text-md">Descubre destinos sin límites!</span>
                                    <div class=" flex gap-4 items-end">
                                        <span class="font-extrabold text-3xl uppercase">Ecojet</span>
                                        <span class="text-2xl">Tu areolinea</span>
                                    </div>
                                    <div class="grid grid-cols-2 mt-4 shadow-md">
                                        <div class="p-1 bg-blue-600"></div>
                                        <div class="p-1 bg-gray-100"></div>
                                    </div>

                                    <ul class="mt-4">
                                        <li class="mb-2"><i class="fa-regular fa-circle-check text-green-500 mr-2"></i>Vuelos económicos</li>
                                        <li class="mb-2"><i class="fa-regular fa-circle-check text-green-500 mr-2"></i>Servicio premium</li>
                                        <li class="mb-2"><i class="fa-regular fa-circle-check text-green-500 mr-2"></i>Destinos exóticos</li>
                                        <li class="mb-2"><i class="fa-regular fa-circle-check text-green-500 mr-2"></i>Comodidad garantizada</li>
                                        <li class="mb-2"><i class="fa-regular fa-circle-check text-green-500 mr-2"></i>Flexibilidad total</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="flex justify-end">
                            <div class="rounded-lg shadow-lg shadow-gray-900 bg-white p-4 md:w-96 animate-fade-down animate-duration-[800ms]">

                                <span class="block text-center  ">Inicia tu registro, recibe descuentos</span>
                                <span class="block text-center text-xl font-bold text-green-500">Comienza Ahora!</span>

                                <div class="mt-4">
                                    <input type="text" placeholder="Nombre *" name="name" id="name" class="appearance-none border-transparent border-b-gray-800 w-full
                                    mb-2">
                                    <input type="text" placeholder="Correo *" name="email" id="email" class="appearance-none border-transparent border-b-gray-800 w-full
                                    mb-2">
                                    <input type="number" placeholder="Teléfono *" name="phone" id="phone" class="appearance-none border-transparent border-b-gray-800 w-full
                                    mb-2">

                                    <select name="city" id="city" class="border-b-gray-800 appearance-none
                                    border-transparent w-full p-2">
                                        <option value="scz">Santa Cruz de la Sierra</option>
                                        <option value="lp">La Paz</option>
                                        <option value="cbb">Cochabamba</option>
                                        <option value="trj">Tarija</option>
                                        <option value="bn">Beni</option>
                                        <option value="pn">Pando</option>
                                        <option value="or">Oruro</option>
                                        <option value="scr">Sucre</option>
                                        <option value="pt">Potosi</option>

                                    </select>

                                    <div class="mt-8 flex justify-end">
                                        <button type="button" onclick="checkUser()" class="primaryButton">Registrarme</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

            <div class="h-full flex justify-center items-center">
                <a href="#info" class="text-3xl text-white font-bold
                animate-bounce animate-infinite animate-duration-[5000ms] ">
                    <i class="fa-solid fa-angles-down mr-2"></i>Conocer mas
                </a>
            </div>
        </div>
    </section>

    <section class="mt-8 p-2" id="info">
        <div class="flex justify-center">
            <div class="container max-w-5xl">

                <div class="mt-8">
                    <h2 class="text-center text-4xl font-bold text-gray-800">
                        Descubre el mundo sin límites</h2>

                    <h4 class="text-center mt-2 text-lg text-gray-600">
                        Disfruta de vuelos de calidad, precios accesibles y un servicio diseñado para ti. ¡El primer paso hacia la aventura de tus sueños empieza aquí!
                    </h4>
                </div>

                <div class="flex justify-center mt-8">
                    <div class="grid grid-cols-2 w-1/2 shadow-md shadow-gray-300">
                        <div class="bg-blue-500 p-1"></div>
                        <div class="bg-gray-100 p-1"></div>
                    </div>
                </div>


                <div class="rounded-2xl headerContent overflow-hidden mt-16 shadow-lg shadow-gray-400" style="background-image: url('{{asset('images/nav1.webp')}}');">

                    <div class="bg-gradient-to-r from-blue-500 to-transparent grid md:grid-cols-2 p-8 ">

                        <div class="text-white">
                            <h2 class="font-extrabold text-3xl">A donde quieras, cuando quieras!</h2>
                            <span class="text-lg mt-4 inline-block">La aerolínea perfecta para llevarte a cualquier parte del mundo, en cualquier momento.</span>
                            <h3 class=" text-xl font-bold mt-4">Vuelos disponibles las 24 horas, todos los días del año.</h3>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <div class="bg-gray-100 mt-16 py-16">
            <div class="flex justify-center">
                <div class="container max-w-5xl">
                    <div class="">

                        <span class="block text-center text-red-500 font-bold">Líderes en vuelos internacionales *</span>
                        <h2 class=" text-3xl  text-center">Razones porque elejir Ecojet</h2>
                    </div>

                    <div class="mt-16">
                        <div class="grid md:grid-cols-3 gap-16 
                        *:rounded-xl *:p-4 *:bg-white *:shadow-md *:shadow-gray-300
                        *:border-t-4 *:border-green-500">

                            <div class="">

                                <div class="relative inline-block hover:scale-[1.01] duration-200">
                                    <img src="{{asset('images/nav1.webp')}}" alt="" class="rounded-xl" class="">
                                    <div class="darkHoverContainer group">
                                        <h3 class="text-white font-semibold text-xl">Viaja a tu ritmo</h3>
                                        <div class="reactiveBar transition-width"></div>
                                    </div>

                                </div>
                                <p class="text-gray-600 text-md mt-2">Elige los horarios que más te convengan con nuestras múltiples opciones de <strong>vuelos diarios</strong> a diferentes destinos.</p>

                            </div>

                            <div class="">

                                <div class="relative inline-block hover:scale-[1.01] duration-200">
                                    <img src="{{asset('images/nav2.webp')}}" alt="" class="rounded-xl" class="">
                                    <div class="darkHoverContainer group">
                                        <h3 class="text-white font-semibold text-xl">Comodidad garantizada</h3>
                                        <div class="reactiveBar transition-width"></div>
                                    </div>

                                </div>

                                <p class="text-gray-500 text-md mt-2">Relájate en nuestras modernas y espaciosas cabinas, diseñadas para hacer de tu viaje una <strong>experiencia placentera.</strong></p>
                            </div>

                            <div class="">
                                <div class="relative inline-block hover:scale-[1.01] duration-200">
                                    <img src="{{asset('images/nav3.webp')}}" alt="" class="rounded-xl" class="">
                                    <div class="darkHoverContainer group">
                                        <h3 class="text-white font-semibold text-xl">Precios que te convienen</h3>
                                        <div class="reactiveBar transition-width"></div>
                                    </div>

                                </div>
                                <p class="text-gray-600 text-md mt-2">Disfruta de <strong>tarifas accesibles y promociones especiales</strong> todo el año, para que siempre puedas volar sin preocupaciones.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-16 flex justify-center">
            <div class="rounded-xl w-full bg-gradient-to-t container max-w-5xl
                       overflow-hidden shadow-md shadow-gray-300 from-green-500/10
                       to-transparent">
                <div class="grid-cols-2 grid">
                    <div class="bg-blue-500 p-2"></div>
                    <div class="bg-green-500 p-2"></div>
                </div>
                <div class="p-4 grid grid-cols-2">
                    <div class="flex items-center">
                        <h3 class=" text-3xl uppercase font-bold text-gray-700">Empieza tu <strong class="text-blue-500">próxima aventura </strong> hoy!</h3>

                    </div>

                    <div class="h-28 flex justify-end items-center">
                        <button class="rounded-full bg-gradient-to-r from-red-500
                                        to-orange-500 py-2 px-8 text-white font-semibold
                                        text-2xl shadow-lg hover:to-red-500 transition duration-200
                                        shadow-orange-500/60 hover:shadow-red-500/60">
                            Registrate ahora!<i class="fa-solid fa-chevron-right ml-2"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-footer class="" />

</body>

<script>

    async function checkUser () {
        const users = await getUsers();
        const userExist = verifyUser(users);
        if(userExist){
            alert('Correo ya registrado.');
            return;
        }else{
            const stored = await storeUser();
            if (stored) {
                alert('Usuario registrado con exito!');
                window.location.reload();
            }else {
                alert('Hubo un error al guardar los datos.');
                return;
            }

        }
    }

    async function storeUser() {
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');

        const data = {
            'name' : nameInput.value,
            'email' : emailInput.value,
            'phone' : phoneInput.value,
            'is_client' : true,
        }

        const response = await axios.post('/users/store-ajax', data);
        return (response.status == 201);
        
    }

    async function getUsers () {
        const response = await axios.get('/users/get-all');
        console.log('%cResultado Usuarios: ', 'color: blue; font-weight: bold;');
        console.log('%c' + JSON.stringify(response.data['users'], null, 2), 'color: yellow; font-weight: bold;');
        return response.data['users'];
    }

    function verifyUser (users) {
        const emailInput = document.getElementById('email');
        const email = emailInput.value;
        return users.some(user => user['email'] == email);
    } 

    document.addEventListener('DOMContentLoaded', () => {
        const headerSection = document.getElementById('headerSection');
        const images = ["{{ asset('images/nav1.webp') }}", "{{ asset('images/nav2.webp') }}", "{{ asset('images/nav3.webp') }}"];
        let currentIndex = 0;

        const links = document.querySelectorAll('a[href^="#"]');
        links.forEach(link => {
            link.addEventListener("click", function(event) {
                event.preventDefault();
                const targetId = this.getAttribute("href").substring(1);
                const targetSection = document.getElementById(targetId);
                targetSection.scrollIntoView({
                    behavior: "smooth"
                });
            });
        });

        setInterval(() => {
            headerSection.classList.add('animacionFondoDown');
            setTimeout(() => {
                headerSection.classList.remove('animacionFondoDown');

                const newImage = new Image();
                newImage.src = images[currentIndex];

                newImage.onload = () => {
                    headerSection.style.backgroundImage = `url(${images[currentIndex]})`;
                    headerSection.classList.add('animacionFondoUp');
                    setTimeout(() => {
                        headerSection.classList.remove('animacionFondoUp');
                    }, 3500);
                };
            }, 1500);

            currentIndex = (currentIndex + 1) % images.length;
        }, 5000);
    });
</script>