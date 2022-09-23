<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PRODUCTOS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 w-full">
                    <!-- component  dark:bg-gray-900-->
                <section class="bg-white ">
                    <div class="container px-6 py-10 mx-auto">
                        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl ">ESPRESSOS</h1>

                        <div id="producto" class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-3">
                            <div class="lg:flex" style="margin: 5%">
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://www.cocinayvino.com/wp-content/uploads/2020/10/www.cocinayvino.com-el-cafe-espresso-italiano-candidato-a-patrimonio-de-la-humanidad-cafe-espresso-e1601665733629-768x432.jpg" alt="">

                                <div  class="flex flex-col justify-between py-6 lg:mx-6">
                                    <p id="producto1" class="text-xl font-semibold text-gray-800 hover:underline ">
                                        ESPRESSO ITALIANO
                                    </p>
                                    <p class="text-xl font-semibold text-gray-800 hover:underline ">
                                        Café concentrado 2 Oz. (60 Ml.)
                                    </p>
                                    <p>10bs</p>
                                </div>
                                <section class="items-start">
                                    <button onclick="document.getElementById('productos').showModal()" id="btn" class="border-2 border-red-600 text-black px-4 py-2 rounded-md text-1xl font-medium hover:bg-red-600 transition duration-300">+</button>
                                </section>
                            </div>
                                
                            

                            <div class="lg:flex" style="margin: 5%">
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmaGEXZsa-gVlIn8RohbWYnFNDOISVFOHMbbrkz0FoYcftVw8VH6SqObysj_I22tTSxeQ&usqp=CAU" alt="">

                                <div  class="flex flex-col justify-between py-6 lg:mx-6">
                                    <p id="producto2" class="text-xl font-semibold text-gray-800 hover:underline ">
                                        ESPRESSO MACCHIATO
                                    </p>
                                    <p class="text-xl font-semibold text-gray-800 hover:underline ">
                                        Café concentrado (2 Oz), con un toque de leche calentada al vapor.
                                    </p>
                                    <p>10bs</p>
                                </div>
                                
                                <section class="items-start">
                                    <button onclick="document.getElementById('productos').showModal()" id="btn" class="border-2 border-red-600 text-black px-4 py-2 rounded-md text-1xl font-medium hover:bg-red-600 transition duration-300">+</button>
                                </section>
                            </div>  


                            <div class="lg:flex" style="margin: 5%">
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://ess-was.com/media/image/e2/17/20/die-kantine-moenchweiler-shop-getraenk-espresso-macchiato.jpg" alt="">

                                <div  class="flex flex-col justify-between py-6 lg:mx-6">
                                    <p id="producto3" class="text-xl font-semibold text-gray-800 hover:underline ">
                                        ESPRESSO DOLCE
                                    </p>
                                    <p class="text-xl font-semibold text-gray-800 hover:underline ">
                                        Café concentrado (2 Oz), con un toque de leche calentada al vapor y leche condensada.
                                    </p>
                                    <p>10bs</p>
                                </div>
                                
                                <section class="items-start">
                                    <button onclick="document.getElementById('productos').showModal()" id="btn" class="border-2 border-red-600 text-black px-4 py-2 rounded-md text-1xl font-medium hover:bg-red-600 transition duration-300">+</button>
                                </section>
                            </div>  
                        </div>
                        <!--AMERICANOSSSSS-->
                        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl ">AMERICANOS</h1>
                        <div id="producto" class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-3">
                            <div class="lg:flex" style="margin: 5%">
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://isamantillablog.files.wordpress.com/2021/03/cafe_americano.jpg?w=1400" alt="">

                                <div  class="flex flex-col justify-between py-6 lg:mx-6">
                                    <p id="producto1" class="text-xl font-semibold text-gray-800 hover:underline ">
                                        AMERICANO REGULAR
                                    </p>
                                    <p class="text-xl font-semibold text-gray-800 hover:underline ">
                                        Espresso, servido con agua caliente.
                                    </p>
                                    <p>15bs</p>
                                    <p>18bs</p>
                                </div>
                                <section class="items-start">
                                    <button onclick="document.getElementById('productos').showModal()" id="btn" class="border-2 border-red-600 text-black px-4 py-2 rounded-md text-1xl font-medium hover:bg-red-600 transition duration-300">+</button>
                                </section>
                            </div>
                                
                            

                            <div class="lg:flex" style="margin: 5%">
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://exigibuencafe.com/wp-content/uploads/2016/12/exigi8-360x200.jpg" alt="">

                                <div  class="flex flex-col justify-between py-6 lg:mx-6">
                                    <p id="producto2" class="text-xl font-semibold text-gray-800 hover:underline ">
                                        AMERICANO MACHIATO
                                    </p>
                                    <p class="text-xl font-semibold text-gray-800 hover:underline ">
                                        Espresso, servido con agua caliente y leche caliente al vapor.
                                    </p>
                                    <p>10bs</p>
                                    <p>15bs</p>
                                </div>
                                
                                <section class="items-start">
                                    <button onclick="document.getElementById('productos').showModal()" id="btn" class="border-2 border-red-600 text-black px-4 py-2 rounded-md text-1xl font-medium hover:bg-red-600 transition duration-300">+</button>
                                </section>
                            </div>  
                        </div>
                        <!--CAPUCCINOS-->
                        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl ">CAPUCCINOS Y MOKACCINOS</h1>
                        
                        <div id="producto" class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-3">
                            <div class="lg:flex" style="margin: 5%">
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://www.roastmarket.de/magazin/wp-content/uploads/2016/10/Fotolia_118055346_Subscription_Monthly_M-660x440.jpg" alt="">

                                <div  class="flex flex-col justify-between py-6 lg:mx-6">
                                    <p id="productoamericano" class="text-xl font-semibold text-gray-800 hover:underline ">
                                        CAPUCCINOS
                                    </p>
                                    <p class="text-xl font-semibold text-gray-800 hover:underline ">
                                        Espresso, servido con leche calentada al vapor con un sabor premium a elección.
                                    </p>
                                    <p>19bs</p>
                                    <p>22bs</p>
                                </div>
                                <section class="items-start">
                                    <button onclick="document.getElementById('productos').showModal()" id="btn" class="border-2 border-red-600 text-black px-4 py-2 rounded-md text-1xl font-medium hover:bg-red-600 transition duration-300">+</button>
                                </section>
                            </div>
                                
                            

                            <div class="lg:flex" style="margin: 5%">
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://media.istockphoto.com/photos/directly-above-shot-of-coffee-caff-mocha-also-know-as-mocaccino-picture-id860396234?k=20&m=860396234&s=612x612&w=0&h=KWBmOGBq20zCWjufm-XFEeaWpA45nMKCOizQhb7yY6Y=" alt="">

                                <div  class="flex flex-col justify-between py-6 lg:mx-6">
                                    <p id="productoamericanomachiato" class="text-xl font-semibold text-gray-800 hover:underline ">
                                        MOKACCINOS
                                    </p>
                                    <p class="text-xl font-semibold text-gray-800 hover:underline ">
                                        Espresso, servido con nuestra deliciosa salsa de chocolate y leche calentada al vapor. (A elección se puede agregar un toque de menta)
                                    </p>
                                    <p>19bs</p>
                                    <p>22bs</p>
                                </div>
                                
                                <section class="items-start">
                                    <button onclick="document.getElementById('productos').showModal()" id="btn" class="border-2 border-red-600 text-black px-4 py-2 rounded-md text-1xl font-medium hover:bg-red-600 transition duration-300">+</button>
                                </section>
                            </div>  
                        </div>


                         <!--CHOCOLATES Y CHAI LATTE-->
                         <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl ">CHOCOLATES Y CHAI LATTE</h1>
                        
                         <div id="producto" class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-3">
                             <div class="lg:flex" style="margin: 5%">
                                 <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://www.roastmarket.de/magazin/wp-content/uploads/2016/10/Fotolia_118055346_Subscription_Monthly_M-660x440.jpg" alt="">
 
                                 <div  class="flex flex-col justify-between py-6 lg:mx-6">
                                     <p id="productoamericano" class="text-xl font-semibold text-gray-800 hover:underline ">
                                         CHOCOLATE
                                     </p>
                                     <p class="text-xl font-semibold text-gray-800 hover:underline ">
                                        Chocolate de la casa servido con leche calentada al vapor. (A elección se puede agregar un toque de menta)
                                     </p>
                                     <p>19bs</p>
                                     <p>22bs</p>
                                 </div>
                                 <section class="items-start">
                                     <button onclick="document.getElementById('productos').showModal()" id="btn" class="border-2 border-red-600 text-black px-4 py-2 rounded-md text-1xl font-medium hover:bg-red-600 transition duration-300">+</button>
                                 </section>
                             </div>
                                 
                             
 
                             <div class="lg:flex" style="margin: 5%">
                                 <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://media.istockphoto.com/photos/directly-above-shot-of-coffee-caff-mocha-also-know-as-mocaccino-picture-id860396234?k=20&m=860396234&s=612x612&w=0&h=KWBmOGBq20zCWjufm-XFEeaWpA45nMKCOizQhb7yY6Y=" alt="">
 
                                 <div  class="flex flex-col justify-between py-6 lg:mx-6">
                                     <p id="productoamericanomachiato" class="text-xl font-semibold text-gray-800 hover:underline ">
                                         CHAILATTE
                                     </p>
                                     <p class="text-xl font-semibold text-gray-800 hover:underline ">
                                        Masala Chai Té, servido con leche calentada al vapor.
                                     </p>
                                     <p>19bs</p>
                                     <p>22bs</p>
                                 </div>
                                 
                                 <section class="items-start">
                                     <button onclick="document.getElementById('productos').showModal()" id="btn" class="border-2 border-red-600 text-black px-4 py-2 rounded-md text-1xl font-medium hover:bg-red-600 transition duration-300">+</button>
                                 </section>
                             </div>  
                         </div>
                        
                    </div>
                </section>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>

