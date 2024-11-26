@props(['textColor'])
<style>
    .headerContent {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        transition: opacity 0.5s ease-in-out;
    }

    #headerSection {
        background-size: cover;
        background-position: center;
    }

    .transition-width {
        transition: width 0.2s ease-in-out;
    }
</style>
<nav class="p-2 flex justify-between {{$textColor}} font-semibold ">
    <div class="">
        <img src="{{ asset('images/logoblanco.png') }}" class="h-20" alt="" srcset="">
    </div>

    <div class="flex gap-x-8 text-lg">
        <a href="#" class="group flex justify-center items-center">
            <div>
                <span class="textReactiveBar">Mision Vision</span>
                <div class="reactiveBar transition-width"></div>
            </div>
        </a>
        <a href="#" class="group flex justify-center items-center">
            <div>
                <span class="textReactiveBar">Sobre nosotros</span>
                <div class="reactiveBar transition-width"></div>
            </div>
        </a>
        <a href="#" class="group flex justify-center items-center">
            <div>
                <span class="textReactiveBar">Contactos</span>
                <div class="reactiveBar transition-width"></div>
            </div>
        </a>
        <a href="{{route('login')}}" class="group flex justify-center items-center">
            <div>
                <span class="textReactiveBar"><i class="fa-solid fa-user mr-2"></i>Iniciar Sesion</span>
                <div class="reactiveBar transition-width"></div>
            </div>
        </a>

    </div>


</nav>