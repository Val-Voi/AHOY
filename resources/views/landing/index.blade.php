<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta name="viewport" content="width=900">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AHOY</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3d63093dcc.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />

    <!-- Material Design Bootstrap -->
    <!-- <link href="css/mdb.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/mdb.min.css') }}" />

    <!-- My CSS -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

    <!-- Custom styles for this template -->
    <!-- <link href="css/scrolling-nav.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ URL::asset('js/scrolling-nav.js') }}" />
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-between fixed-top scrolling-navbar" id="mainNav">

        <div class="collapse navbar-collapse navbar-collapse-ahoy" id="mainNav">
            <ul class="navbar-nav navbar-nav-ahoy mr-auto smooth-scroll right">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link js-scroll-trigger colorletraclara" href="#historia">Historia</a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link js-scroll-trigger colorletraclara" href="#personajes">Personajes</a>
                </li>
            </ul>
            <ul class="nav mr-auto smooth-scroll">
                <li class="nav-item  d-none d-lg-block">
                    <a href="#" id="logonav"></a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-ahoy mr-auto smooth-scroll">

                <ul class="navbar-nav navbar-nav-ahoy mr-auto smooth-scroll right ">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link js-scroll-trigger colorletraclara" href="#nuestrojuego">Nuestro Juego</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link js-scroll-trigger colorletraclara" href="#equipo">Quienes Somos</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link js-scroll-trigger colorletraclara" href="#contacto">Contactanos</a>
                    </li>
                </ul>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark justify-content-between fixed-top scrolling-navbar d-lg-none d-xl-none" id="mainNavCollapse">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MainNavCollapse" aria-controls="MainNavCollapse" aria-expanded="false" aria-label="Navegación">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-collapse-ahoy d-lg-none d-xl-none" id="MainNavCollapse">
            <ul class="navbar-nav smooth-scroll d-lg-none d-xl-none">
                <li class="d-lg-none d-xl-none colornegro">
                    <a href="#historia" class="colorletraclara"> Historia</a>
                </li>
                <li class="d-lg-none d-xl-none colornegro">
                    <a href="#personajes" class="colorletraclara"> Personajes</a>
                </li>
                <li class=" d-lg-none d-xl-none colornegro">
                    <a href="#nuestrojuego" class="colorletraclara"> Nuestro Juego</a>
                </li>
                <li class="d-lg-none d-xl-none colornegro">
                    <a href="#equipo" class="colorletraclara">Quienes Somos</a>
                </li>
                <li class="d-lg-none d-xl-none colornegro">
                    <a href="#contacto" class="colorletraclara">Contactanos</a>
                </li>
            </ul>
        </div>

    </nav>
</header>

<body rightmargin="30">

    <div id="intro" class="view">
        <br><br>
        <div>
            <div id="maincarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators carousel-indicators-main">
                    <li data-target="#maincarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#maincarousel" data-slide-to="1"></li>
                    <li data-target="#maincarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/img/personal/mainslider/slider1-1.jpg" alt="Primera imagen promocional">
                        <div class="carousel-caption">
                            <div class="col-xs-3 col-md-3 col-sm-3">
                                <a href="https://www.instagram.com/ahoyjuegos/" target="_blank"><button type="button" class="buttonmainslider">Comprar<br> Aquí</button></a>
                            </div>
                            <div class="col-xs-9 col-md-9 col-sm-9"></div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/personal/mainslider/slider1-2.jpg" alt="Segunda imagen promocional">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/personal/mainslider/slider1-3.jpg" alt="Tercera imagen promocional">
                    </div>

                </div>
                <!--Controls-->
                <a class="carousel-control-prev carousel-main-control-prev" href="#maincarousel" role="button" data-slide="prev">
                    <i class="fas fa-chevron-circle-left fasmaincarousel"></i>
                    <span class="sr-only">Imagen anterior</span>
                </a>
                <a class="carousel-control-next carousel-main-control-next" href="#maincarousel" role="button" data-slide="next">
                    <i class="fas fa-chevron-circle-right fasmaincarousel"></i>
                    <span class="sr-only">Siguiente imagen</span>
                </a>
            </div>
        </div>
    </div>

    <section id="historia" class="todoarriba ponerdebajo"><br><br><br><br><br><br><br><br><br></section>
    <main class="mt-5">
        <div class="container textojustify">

            <!-- SECCION HISTORIA -->
            <section id="seccion1">
                <h2 class="titulo">
                    <hr class="hrtitulo" data-content="LA HISTORIA">
                </h2>
                <h1 class="subtitulohistoria text-center">"AHOY UNA NUEVA AVENTURA"</h1>
                <p id="textohistoria" class="textohistoria textomascara">
                    Existió una edad en la que los piratas fueron los señores de los mares.
                    Quien osara a invadir sus dominios estaba condenado a padecer la furia
                    de su abordaje, que siempre se tornaba cruel y despiadado. Y en eso también
                    había una tortuga un poco... especial, era Tortutonton, que mientras andaba
                    buscando un lugar donde comer con ayuda de su brújula, sin darse cuenta se
                    había subido a la tripulación de la “Pata Negra”, una navegación que se
                    dedicaba al traslado de alcohol del más barato pero que para todos ese
                    es el más valioso . Cuando Tortu se tropezó con una de estas cajas
                    llenas de botellas recién se dio cuenta de que estaba metido en
                    un barco pirata y que ya era muy tarde para irse.
                </p>
                <br id="check">
                <p id="oculto" class="textohistoria">
                    En ese momento una pirata que la llamaban Gatunica La Ladrona, llego hacia Tortu
                    para preguntarle que hacia allí. Tortu le explicó lo que había pasado y que todo
                    era un mal entendido, ahí fue cuando Gatunica entendió y decidió que él podía
                    seguir con ella en el viaje. Como él sería parte del viaje , ella llamó a todos
                    en el barco para poder presentárselos. En eso estaba Cerdón que era contramaestre
                    en el barco, Tiburosansón que básicamente solo le importaba presumir su cuerpo
                    pero que igualmente ayudaba con las cosas pesadas como cajas, también esta
                    Simono El Apostador, que aporta con los juegos y diversión en el barco, pero
                    hay que tener mucho cuidado porque no le gusta perder y si lo hace no me
                    gustaría ser tú. Esta Calico El Mensajero, que por su nombre todos saben
                    que es que llega con las noticias y chismes de todo el mar, al igual que
                    Sir. Crocodanilo De Aguas Negras, dicen que el sabe todos los secretos
                    sobre el mar y los últimos dos que llegaron de una forma que no queríamos,
                    como Los Peleadores Zoom-Zoom y Zumi que como el nombre dice fue por una
                    pelea contra otra gente y como ganaron se unieron a la tripulación y esta
                    Paulpulpón el Lector, que en las noches nos cuenta historias sobre leyendas
                    del océano.
                    <br>
                    Con esto ya estas más que integrado a nuestra tripulacion y te damos la bienvenida..
                    Esa noche hubo celebración en el barco, con comida, música y baile, todos pudieron
                    llevarse bien y conocerce mejor. Pasaron los días y faltaba muy poco para llegar a
                    su destino, tuvieron que hacer una parada en una pequeña isla y donde se bajaron para
                    poder estirar las patas y conocer un poco. Decidieron pasar la noche ahí, hicieron una
                    fogata y se quedaron dormidos...
                    eso fue un error muy grave ya que pensaron que estaban solos en la isla. Cuando amaneció
                    fueron al barco y se dieron cuenta que le habían robado todo el ron
                    y que no había quedado nada, todos estaban espantados y no sabían que hacer. Entonces
                    habló Paulpulpón, que los calmó y tenía un plan ya que, se dio cuenta que habían
                    quedado marcas de patas en la arena que no eran de ellos, así que empezaron a seguirlas
                    , caminaron por la frondosa selva que había hasta llegar a su centro, donde se encontraron
                    con la sorpresa de que habían seis cangrejos con todo su ron y que se lo estaban bebiendo,
                    ahí fue donde empezó la diversión. Fue cuando Zoom-Zoom y zumi comenzarón las patadas,
                    Tiburosansón con los combos y cuando todos empezarón a pelear, obviamente Tortutontón
                    estaba confundido y pérdido así que se quedo sentado mirando todo lo que pasaba.
                    Durante la pelea un cangrejo empezó a gritar que pararan, todo se detuvo y dijo
                    que así no se solucionaban las cosas y que su intencion no había sido robar su
                    mercadería, así que estuvieron todos hablando un buen rato y acabaron en buenos
                    terminos, tomaron la mercadería que había quedado, la subieron al barco y siguieron
                    con su viaje.
                    <br>
                    Un par de días más de viaje, lograron ver su destino, una gran isla. Al llegar se bajaron
                    con su mercadería, aun mercado donde los estaban esperando para poder comercializar su ron,
                    lograron con éxito su objetivo. Llegó el momento de despedirse de Tortutontón, pero el no
                    quería irse ya que nunca lo había pasado tan bien en su vida y nunca había conocido a gente
                    tan genial como ellos, así que decidierón que sería integrante ocial de la tripulación de
                    la “Pata Negra” . Para celebrar esto fueron a un bar para beber y reirse de todo lo que
                    había pasado, ese fue su mayor tesoro.
                    <br>
                </p>
                <br>
                <div class="text-center">
                    <button onclick="mostrarTexto()" id="mostrar" class="buttonleermasstyle">Leer Más ...</button>
                </div>
            </section>

            <br /><br /><br />
            <section id="personajes"> <img class="separador" src="/img/personal/diseno-separador.png"> </section>
        </div>

        <!--SECCION PERSONAJES-->
        <section id="seccion2" class="text-center">
            <div class="container">
                <h2 class="titulo">
                    <hr class="hrtitulo" data-content="PERSONAJES">
                </h2>

                <h1 id="nombrepersonaje" class="subtitulopersonajes">GATUNICA LA LADRONA </h1>
                <div id="carousel-personajes" class="carousel slide carousel-personajes d-none d-lg-block" data-ride="carousel">

                    <script>
                        $('#carousel-personajes').on('slide.bs.carousel', function(ev) {
                            var id = $(ev.relatedTarget).index();
                            changeName(id);
                        })
                    </script>

                    <ol class="carousel-indicators carousel-indicators-personajes">
                        <li data-target="#carousel-personajes" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-personajes" data-slide-to="1"></li>
                        <li data-target="#carousel-personajes" data-slide-to="2"></li>
                        <li data-target="#carousel-personajes" data-slide-to="3"></li>
                        <li data-target="#carousel-personajes" data-slide-to="4"></li>
                        <li data-target="#carousel-personajes" data-slide-to="5"></li>
                        <li data-target="#carousel-personajes" data-slide-to="6"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/personal/personajes/gatunica-la-ladrona.png" alt="Gatunica es una gata muy atrevida,
                            aventurera, audaz y temeraría, pero no siempre fue así, era la pequeña hija de una familia compuesta por papá y mamá,
                            era la regalona de de ellos y siempre quisieron protejerla y darle todo su amor, pero una noche cuando todo estaba
                            en silencio invadieron su casa y se llevaron a sus papás, a ella no ya que como era pequeña pudo esconderse. De ahí
                            en adelante solo buscó venganza, pero nunca encontró a sus padres. Después de todo eso, se pudo embarcar en un barco,
                            el “Pata Negra”que ahí fue donde encontró a su nueva familia.
">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/personal/personajes/contramaestre-cerdon.png" alt="Cerdón nacío en una familia de
                             riquesas y gustos bastantes finos, con padres capitanes de navios enteros. Pero el no quería nada de eso, siempre fue
                              contra la mares respecto a como era toda su familia. Cuando joven se escapó de casa porque siempre escuchaba historias
                               de piratas y el quería ser uno, a parte que ya sabía todo respecto a barcos,  su objetivo era ser capitan de uno de
                                ellos, asi estuvo varios años hasta que lo logró y obviamente este es el “Pata Negra”.
">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/personal/personajes/tiburosanson.png" alt="Tiburonsanson, se crió en una familia de
                             atletas, muy competitivos entre ellos, por alguna razón el siempre fue un poco más agresivos que todos los demás pero es
                              el más gracioso y simpático de la familia. Una vez en el centro de la ciudad se puso a pelear con otro tiburon porque
                               le había gritado a su mamá, en eso la pelea fue tan grande que llegó la polícia y se los llevaron a los dos, pasaron
                                2 años y recién pudieron salir. Él sin familia, ni casa, nisiquiera un poco de dinero no sabía donde ir así que
                                 decidió probar suerte en los barcos de piratas, le fue mal pero en el último barco lo contrataron porque necesitaban
                                  a alguienn que los ayudara con las cajas de mercadería y también por si alguna riña ocurría el podría salir en
                                   representación de la tripulación
">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/personal/personajes/simono-el-apostador.png" alt="Simono era un mono muy misterioso,
                             mentiroso e inteligente, el partió en las calles inventando juegos de apuestas, engañando a la gente y quitandoles todo
                              el dinero ya que eran juegos arreglados por él para que solo él ganara. Cuando algunas personas de daban cuenta de estos
                               fraudes, el los negaba pero igualmente salia corriendo con el dinero de Ellos. Un día se encontró con Cerdón, lo invitó
                                a que jugarán y él acepto. Perdió obviamente pero no se quedo de manos cruzadas ya que, le propuso a Simono que se
                                 uniera a la tripulación ya que necesitaban un poco de diversión y juegos en el barco, y también así cuando ellos 
                                 estuvieran de viaje y pararan en islas podía engañar a la gente de ahí y hacerce un poco de dinero extra. Así que
                                  así fue, Simono había encontrado un trabajo en un barco real de piratas.
">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/personal/personajes/sir-crocodanilo.png" alt="Crocodanilo, es un viejo cocodrilo que
                             siempre ha vivido en el mar, siempre fue y será parte de él. Sabe cada una de la leyendas que hay sobre el y cada minimo
                              misterio que tiene. El es solitario, no tiene familia y tampoco conciencia de que alguna vez tuvo una. Mientra vagaba 
                              por la noche, caminando por la orilla del mar divisó, un forma abstracta entre la niebla, mientras más se iba acercando
                               pudo ver que era Gatunica que andaba dando un paseo nocturno, se encontraron y que se quedaron conversando toda la
                                noche, ella le comentó que estaba embarcada en un barco y que él podía ir si quería y viajar con ellos, a lo que
                                 el acepto y nunca más estuvo solo.

">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/personal/personajes/zoom-zoom-y-zumi.png" alt="Estos par de canguros hermanos ,
                             provienen de una vida de circo, donde los hacían pelear con otros animales, el salario no era muy bueno y no tenian
                              un hogar fijo donde caer. Un día se aburrieron de estar con una vida así y decidieron escapar del circo. Sin ningún
                               plan o rumbo que seguir llegaron a las costas donde estaban todos los barcos de piratas, que desde lo más alto 
                               había gente que les gritaba cosas y abucheaba. Ellos no muy contentos se pusieron a pelear con un asqueroso lobo
                                marino que los estaba molestando desde que llegaron. Los hermanos ganaron la pelea, y en eso Tiburonsanson estaba 
                                de especatador y no dudo en ir a hablarles para que se unieran a la tripulación ya que necesitaban gente así de
                                 valiente. Así que por una pelea pudieron encontrar hogar y familia.">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/personal/personajes/paulpulpon-el-lector.png" alt="Paul es un pulpo muy sabio, se
                             sabe cada libro acerca de los mares, de piratas y barcos que puedan existir, era proferor en una pequeña escuela pero
                              un día ya no pudo seguir enseñando porque se tuvo que hacer cargo de su mamá que estaba muy enferma. El día en que
                               ella murió y decidió no quedarse en casa haciendo nada, el quería hacer algo más alla de todo lo que había pensado
                                y fu hacía la costa, a probar suerte si es que en algún barco podía embarcarse, llego hasta el “Pata Negra” donde 
                                se encontró con Cerdón, hablaron de que lo que podía hacer y todo lo que él sabía, que podía crear tácticas para
                                 poder distribuir mejor la mercadería y sin que otros piratas les ganaran, que el sabia todo acerca de eso. Con 
                                 eso lo convenció, así que fue el último integrante de la tripulación de la “Pata Negra”.">
                        </div>
                    </div>
                    <!--Controls-->
                    <a class="carousel-control-prev carousel-personajes-control-prev" href="#carousel-personajes" role="button" data-slide="prev">
                        <i class="fas fa-chevron-circle-left fascarouselpersonajes"></i>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next carousel-peronajes-control-next" href="#carousel-personajes" role="button" data-slide="next">
                        <i class="fas fa-chevron-circle-right fascarouselpersonajes"></i>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>


            <div id="carousel-personajes-cel" class="carousel slide carousel-personajes d-lg-none d-xl-none" data-ride="carousel">

                <script>
                    $('#carousel-personajes-cel').on('slide.bs.carousel', function(ev) {
                        var id = $(ev.relatedTarget).index();
                        changeName(id);
                    })
                </script>

                <ol class="carousel-indicators carousel-indicators-personajes-cel">
                    <li data-target="#carousel-personajes-cel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-personajes-cel" data-slide-to="1"></li>
                    <li data-target="#carousel-personajes-cel" data-slide-to="2"></li>
                    <li data-target="#carousel-personajes-cel" data-slide-to="3"></li>
                    <li data-target="#carousel-personajes-cel" data-slide-to="4"></li>
                    <li data-target="#carousel-personajes-cel" data-slide-to="5"></li>
                    <li data-target="#carousel-personajes-cel" data-slide-to="6"></li>
                </ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/personal/personajes/gatunica-la-ladrona.png" alt="Gatunica es una gata muy atrevida,
                            aventurera, audaz y temeraría, pero no siempre fue así, era la pequeña hija de una familia compuesta por papá y mamá,
                            era la regalona de de ellos y siempre quisieron protejerla y darle todo su amor, pero una noche cuando todo estaba
                            en silencio invadieron su casa y se llevaron a sus papás, a ella no ya que como era pequeña pudo esconderse. De ahí
                            en adelante solo buscó venganza, pero nunca encontró a sus padres. Después de todo eso, se pudo embarcar en un barco,
                            el “Pata Negra”que ahí fue donde encontró a su nueva familia.
">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/personal/personajes/contramaestre-cerdon.png" alt="Cerdón nacío en una familia de
                             riquesas y gustos bastantes finos, con padres capitanes de navios enteros. Pero el no quería nada de eso, siempre fue
                              contra la mares respecto a como era toda su familia. Cuando joven se escapó de casa porque siempre escuchaba historias
                               de piratas y el quería ser uno, a parte que ya sabía todo respecto a barcos,  su objetivo era ser capitan de uno de
                                ellos, asi estuvo varios años hasta que lo logró y obviamente este es el “Pata Negra”.
">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/personal/personajes/tiburosanson.png" alt="Tiburonsanson, se crió en una familia de
                             atletas, muy competitivos entre ellos, por alguna razón el siempre fue un poco más agresivos que todos los demás pero es
                              el más gracioso y simpático de la familia. Una vez en el centro de la ciudad se puso a pelear con otro tiburon porque
                               le había gritado a su mamá, en eso la pelea fue tan grande que llegó la polícia y se los llevaron a los dos, pasaron
                                2 años y recién pudieron salir. Él sin familia, ni casa, nisiquiera un poco de dinero no sabía donde ir así que
                                 decidió probar suerte en los barcos de piratas, le fue mal pero en el último barco lo contrataron porque necesitaban
                                  a alguienn que los ayudara con las cajas de mercadería y también por si alguna riña ocurría el podría salir en
                                   representación de la tripulación
">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/personal/personajes/simono-el-apostador.png" alt="Simono era un mono muy misterioso,
                             mentiroso e inteligente, el partió en las calles inventando juegos de apuestas, engañando a la gente y quitandoles todo
                              el dinero ya que eran juegos arreglados por él para que solo él ganara. Cuando algunas personas de daban cuenta de estos
                               fraudes, el los negaba pero igualmente salia corriendo con el dinero de Ellos. Un día se encontró con Cerdón, lo invitó
                                a que jugarán y él acepto. Perdió obviamente pero no se quedo de manos cruzadas ya que, le propuso a Simono que se
                                 uniera a la tripulación ya que necesitaban un poco de diversión y juegos en el barco, y también así cuando ellos 
                                 estuvieran de viaje y pararan en islas podía engañar a la gente de ahí y hacerce un poco de dinero extra. Así que
                                  así fue, Simono había encontrado un trabajo en un barco real de piratas.
">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/personal/personajes/sir-crocodanilo.png" alt="Crocodanilo, es un viejo cocodrilo que
                             siempre ha vivido en el mar, siempre fue y será parte de él. Sabe cada una de la leyendas que hay sobre el y cada minimo
                              misterio que tiene. El es solitario, no tiene familia y tampoco conciencia de que alguna vez tuvo una. Mientra vagaba 
                              por la noche, caminando por la orilla del mar divisó, un forma abstracta entre la niebla, mientras más se iba acercando
                               pudo ver que era Gatunica que andaba dando un paseo nocturno, se encontraron y que se quedaron conversando toda la
                                noche, ella le comentó que estaba embarcada en un barco y que él podía ir si quería y viajar con ellos, a lo que
                                 el acepto y nunca más estuvo solo.

">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/personal/personajes/zoom-zoom-y-zumi.png" alt="Estos par de canguros hermanos ,
                             provienen de una vida de circo, donde los hacían pelear con otros animales, el salario no era muy bueno y no tenian
                              un hogar fijo donde caer. Un día se aburrieron de estar con una vida así y decidieron escapar del circo. Sin ningún
                               plan o rumbo que seguir llegaron a las costas donde estaban todos los barcos de piratas, que desde lo más alto 
                               había gente que les gritaba cosas y abucheaba. Ellos no muy contentos se pusieron a pelear con un asqueroso lobo
                                marino que los estaba molestando desde que llegaron. Los hermanos ganaron la pelea, y en eso Tiburonsanson estaba 
                                de especatador y no dudo en ir a hablarles para que se unieran a la tripulación ya que necesitaban gente así de
                                 valiente. Así que por una pelea pudieron encontrar hogar y familia.">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/personal/personajes/paulpulpon-el-lector.png" alt="Paul es un pulpo muy sabio, se
                             sabe cada libro acerca de los mares, de piratas y barcos que puedan existir, era proferor en una pequeña escuela pero
                              un día ya no pudo seguir enseñando porque se tuvo que hacer cargo de su mamá que estaba muy enferma. El día en que
                               ella murió y decidió no quedarse en casa haciendo nada, el quería hacer algo más alla de todo lo que había pensado
                                y fu hacía la costa, a probar suerte si es que en algún barco podía embarcarse, llego hasta el “Pata Negra” donde 
                                se encontró con Cerdón, hablaron de que lo que podía hacer y todo lo que él sabía, que podía crear tácticas para
                                 poder distribuir mejor la mercadería y sin que otros piratas les ganaran, que el sabia todo acerca de eso. Con 
                                 eso lo convenció, así que fue el último integrante de la tripulación de la “Pata Negra”.">
                    </div>

                </div>
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-personajes-cel" role="button" data-slide="prev">
                    <i class="fas fa-chevron-circle-left fascarouselpersonajes"></i>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel-personajes-cel" role="button" data-slide="next">
                    <i class="fas fa-chevron-circle-right fascarouselpersonajes"></i>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>

        </section>
        <br /><br /><br />

        <div class="container">
            <section id="nuestrojuego"><img class="separador" src="/img/personal/diseno-separador.png"> </section>
        </div>
        <div class="container">

            <!--SECCION NUESTRO JUEGO-->
            <section id="seccion3" class="text-center">
                <h2 class="titulo">
                    <hr class="hrtitulo" data-content="NUESTRO JUEGO">
                </h2>
                <br><br>
        </div>
        <div>
            <div class="imgizq">
                <img src="/img/personal/caja-diseno-ahoy.png" hspace="5" vspace="5"></iframe>
            </div>
            <div class="container textojustify">
                <div class="row">
                    <div class="col-md-3 col-md-3 col-xs-3 col-sm-3"></div>
                    <div class="col-md-6 col-md-6 col-xs-3 col-sm-6">
                        <div class="textohistoria">
                            <img width="100%" src="/img/personal/design-skull-icon.png">
                            <br>
                            <div class="d-lg-none d-xl-none textoizq">
                                AHOY es un juego el cual está dirigido y diseñado para esas ocaciones
                                de juntas,fiestas y reuniones con tus amigos y familiares en la que
                                falta una chispa inicial para que empiece la diversión, brindar y
                                beber entre varios está bien,
                            </div>
                            <div class="d-none d-lg-block ">
                                AHOY es un juego el cual está dirigido y diseñado para esas ocaciones
                                de juntas,fiestas y reuniones con tus amigos y familiares en la que
                                falta una chispa inicial para que empiece la diversión, brindar y
                                beber entre varios está bien,
                            </div>
                        </div>
                        <div class="enfasistexto1 d-none d-lg-block"> ¡pero con AHOY es mejor! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                        <div class="enfasistexto1 d-lg-none d-xl-none textoizq"> ¡pero con AHOY es mejor!</div>
                    </div>
                    <div class="col-md-3 col-xs-3 col-sm-3"></div>
                </div>
            </div>
        </div>

        <div class="container ponerdebajo">
            <img class="separador ponerdebajo" src="/img/personal/diseno-separador.png">
            <br><br><br><br>
        </div>

        <div class="alignizq">
            <div class="imgder">
                <img src="/img/personal/edades-tarjeta.png" hspace="5" vspace="5"></iframe>
            </div>
            <div class="container textojustify">
                <div class="row">
                    <div class="col-md-3 col-xs-3 col-sm-3"></div>

                    <div class="col-md-9 col-xs-9 col-sm-9 textohistoria">
                        <img width="100%" src="/img/personal/design-ship-icon.png">
                        <br>
                        <div class="d-lg-none d-xl-none textoizq">
                            AHOY en su primera versión “Piratas, Tu Juego para Brindarggg!
                            es un juego que tiene castigos y duelos con Alcohol, por ende
                            es para mayores de 18 años, y tiene la particularidad de ser
                            un juego con un gran rango de jugadores, específicamente de
                            2 a 9 personas.
                        </div>
                        <div class="d-none d-lg-block ">
                            AHOY en su primera versión “Piratas, Tu Juego para Brindarggg!
                            es un juego que tiene castigos y duelos con Alcohol, por ende
                            es para mayores de 18 años, y tiene la particularidad de ser
                            un juego con un gran rango de jugadores, específicamente de
                            2 a 9 personas.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <br /><br /><br />

        <div class="container ponerdebajo">
            <img id="equipo" class="separador" src="/img/personal/diseno-separador.png">
            <!--SECCION CONTACTO-->
            <section id="seccion4">
                <h2 class="titulo">
                    <hr class="hrtitulo" data-content="EQUIPO AHOY">
                </h2>
        </div>

        <div class="container">
            <img class="imagencentrada" src="/img/personal/equipo-ahoy.png">
        </div>
        <br><br>
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-xs-3">
                    <h1 class="nombresequipo">CARLOS OSSANDÓN</h1>
                    <h3 class="nombresequipo">Diseñador Gráfico - Ilustrador </h3>
                    <h3 class="textoequipo">Creador Principal de concepto y fundador de Juegos AHOY.<br>
                        “Dibujante y Diseñador de Día, Escritor somnoliento de noche,
                        me gusta estár siempre inventando cosas y aunque digan que
                        ya está todo creado, quiero seguir intentándolo y ver si
                        es verdad :) ”.
                    </h3>

                </div>
                <div class="col-md-6 col-xs-3">
                    <h1 class="nombresequipo">FERNANDA OPAZO</h1>
                    <h3 class="nombresequipo">Diseñadora Gráfica -Redactora<br> Principal </h3>
                    <h3 class="textoequipo">Encargada de Diagramación y Composición de packaging..<br>
                        “Diseñadora, amante de lo oscuro y extrovertida. Inquieta pero creativa, siempre
                        el positivismo ante todo, cualquier meta y objetivo al final del camino se
                        puede alcanzar.”
                    </h3>
                </div>

            </div>
            <br><br>
            <img id="contacto" class="separador" src="/img/personal/diseno-separador.png">
            <br><br>

            <!-- Formulario -->
            <div class="row no-gutters">
                <div class="col-md-5 imageform ">
                    <br>
                    <h5 class="textoitc textoqr">COMPRA TU JUEGO AHOY AQUÍ</h5>
                    <br>
                    <a href="https://www.instagram.com/ahoyjuegos/" target="_blank">
                        <img class="imageform2" src="/img/personal/codigo-qr.jpg" alt="codigo qr">
                        <h1 class="logocontacto"><i class="fab fa-instagram"></i></h1>
                        <h2 class="textoitc textoqr">@ahoyjuegos</h2>
                    </a>
                </div>

                <div class="col-md-7">

                    <form class="p-5 formcontacto" id="contact-form" name="contact-form" action="{{url('/#contacto')}}" method="POST">
                        {{ csrf_field()}}
                        <h1 class="textoform">¡ AYÚDANOS A MEJORAR !</h1>
                        <div>
                            <label for="name">Nombre y Apellido</label>
                            <input type="text" id="name" required="required" name="name" class="form-control form-control-sm formcontactotextarea">
                        </div>
                        <br>
                        <div>
                            <label for="email">Correo Electrónico</label>
                            <input type="email" id="email" required="required" name="email" class="form-control form-control-sm formcontactotextarea">
                        </div>
                        <br>
                        <div>
                            <label for="content">Déjanos tu comentario :)</label>
                            <textarea type="text" id="content" required="required" name="content" class="md-textarea form-control form-control-sm formcontactotextarea" rows="4"></textarea>

                        </div>
                        <div class="text-center mt-4">
                            <input type="submit" name="send" class="buttonenviar" value="Enviar"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <br><br><br><br><br><br><br>
        </div>
        </section>
        </div>
    </main>

    <footer class="page-footer">

        <div class="formatobajada">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 col-xs-3 col-sm-3">
                        <br>
                        <img class="imagefooter" src="/img/personal/logo.png">
                    </div>
                    <div class="col-md-1">
                        <br>
                        <div class="vertical">
                        </div>
                    </div>
                    <div class="col-md-5  col-xs-5 col-sm-5 textofooter">
                        <br>
                        <div class="row">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <a class="nav-link js-scroll-trigger" href="#historia">HISTORIA</a>
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <a class="nav-link js-scroll-trigger" href="#equipo">QUiÉNES SOMOS</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <a class="nav-link js-scroll-trigger" href="#personajes">PERSONAJES</a>
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <a class="nav-link js-scroll-trigger" href="#contacto">CONTÁCTANOS</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <a class="nav-link js-scroll-trigger" href="#nuestrojuego">NUESTRO JUEGO</a>
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-3col-sm-3">
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </footer>
</body>
<footer>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <!-- <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>

    <!-- Bootstrap tooltips -->
    <!-- <script type="text/javascript" src="js/popper.min.js"></script> -->
    <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- MDB core JavaScript -->
    <!-- <script type="text/javascript" src="js/mdb.min.js"></script> -->
    <script type="text/javascript" src="{{ URL::asset('js/mdb.min.js') }}"></script>

    <!-- FUNCIONES ESPECÍFICAS -->
    <script type="text/javascript" src="{{ URL::asset('js/ahoy.js') }}"></script>

</footer>


</html>