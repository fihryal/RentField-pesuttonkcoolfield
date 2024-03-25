@extends('layouts.app')
@section('main')


    <!-- Start Hero -->
    <section
        class="relative bg-[url(https://images.unsplash.com/photo-1546717003-caee5f93a9db?q=80&w=2878&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)]  bg-cover bg-center bg-no-repeat">
        <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
            <div class="mx-auto max-w-3xl text-center">
                <h1 class="text-3xl font-extrabold sm:text-5xl text-white drop-shadow-xl">
                    <a class="text-amber-300" href="#">We make your</a> rental easy

                    <span class="sm:block text-white drop-shadow-xl"> and covered </span>
                </h1>

                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a class="block w-full rounded-full border border-white bg-white px-12 py-3 text-sm font-medium text-gray-600 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
                        href="#">
                        rent now
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Start tutorial -->
    <selection class="border h-fit flex justify-center items-center">

        <div class="block justify-center items-center">

            <div class="mb-4 ml-5 mr-5 mt-24 sm:mb-10 md:mt-36 lg:mb-28">
                <h1 class="text-2xl font-extrabold sm:text-4xl text-gray-700 drop-shadow-xl text-center">
                    rent on <a class="text-amber-300" href="#">Pesut Tonk Cool Field</a>

                    <span class="sm:block text-gray-700 drop-shadow-xl"> rental easy and covered </span>
                </h1>
            </div>

            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 flex items-center justify-center p-4 mb-4 mb-56">
                <div class="lg:mb-12 flex items-center justify-center">

                    <div
                        class="max-w-sm p-6  bg-white border border-gray-200 rounded-lg shadow ">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 47.5 47.5"
                            viewBox="0 0 47.5 47.5" id="1" class="h-8 mb-3">
                            <defs>
                                <clipPath id="a">
                                    <path d="M0 38h38V0H0v38Z" fill="#000000" class="color000000 svgShape"></path>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#a)" transform="matrix(1.25 0 0 -1.25 0 47.5)" fill="#000000"
                                class="color000000 svgShape">
                                <path fill="#00a671"
                                    d="M0 0a4 4 0 0 0-4-4h-28a4 4 0 0 0-4 4v28a4 4 0 0 0 4 4h28a4 4 0 0 0 4-4V0Z"
                                    transform="translate(37 5)" class="color3b88c3 svgShape"></path>
                                <path fill="#ffffff"
                                    d="M0 0h-1.829c-1.488 0-2.109 1.085-2.109 2.139 0 1.086.775 2.14 2.109 2.14h4.402c1.334 0 2.078-.961 2.078-2.201v-17.643c0-1.551-.992-2.418-2.326-2.418-1.333 0-2.325.867-2.325 2.418V0Z"
                                    transform="translate(17.462 25.825)" class="colorffffff svgShape"></path>
                            </g>
                        </svg>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 ">Start
                                With A Simple Click</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 ">Contact us via Whatsapp trough
                            clicking
                            the button above.</p>
                    </div>

                </div>
                <div class="lg:mb-12 flex items-center justify-center">

                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow ">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 47.5 47.5"
                            viewBox="0 0 47.5 47.5" id="2" class="h-8 mb-2">
                            <defs>
                                <clipPath id="a">
                                    <path d="M0 38h38V0H0v38Z" fill="#000000" class="color000000 svgShape"></path>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#a)" transform="matrix(1.25 0 0 -1.25 0 47.5)" fill="#000000"
                                class="color000000 svgShape">
                                <path fill="#00a671"
                                    d="M0 0a4 4 0 0 0-4-4h-28a4 4 0 0 0-4 4v28a4 4 0 0 0 4 4h28a4 4 0 0 0 4-4V0Z"
                                    transform="translate(37 5)" class="color3b88c3 svgShape"></path>
                                <path fill="#ffffff"
                                    d="M0 0c1.365 0 2.42-.62 2.42-2.046 0-1.427-1.055-2.047-2.233-2.047h-10.356c-1.365 0-2.418.62-2.418 2.047 0 .65.402 1.209.712 1.581 2.574 3.069 5.365 5.861 7.721 9.271.558.806 1.086 1.767 1.086 2.883 0 1.271-.961 2.388-2.233 2.388-3.566 0-1.861-5.023-4.837-5.023-1.488 0-2.264 1.054-2.264 2.263 0 3.907 3.473 7.038 7.287 7.038s6.883-2.511 6.883-6.449C1.768 7.597-3.037 3.317-5.673 0H0Z"
                                    transform="translate(24.086 12.093)" class="colorffffff svgShape"></path>
                            </g>
                        </svg>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 ">Choose
                                a date that suits your choice</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 ">Select the date provided or contact
                            owner
                            to rent the field</p>
                    </div>

                </div>
                <div class="lg:mb-12 flex items-center justify-center">

                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow ">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 47.5 47.5"
                            viewBox="0 0 47.5 47.5" id="3" class="mb-2 h-8">
                            <defs>
                                <clipPath id="a">
                                    <path d="M0 38h38V0H0v38Z" fill="#000000" class="color000000 svgShape"></path>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#a)" transform="matrix(1.25 0 0 -1.25 0 47.5)" fill="#000000"
                                class="color000000 svgShape">
                                <path fill="#00a671"
                                    d="M0 0a4 4 0 0 0-4-4h-28a4 4 0 0 0-4 4v28a4 4 0 0 0 4 4h28a4 4 0 0 0 4-4V0Z"
                                    transform="translate(37 5)" class="color3b88c3 svgShape"></path>
                                <path fill="#ffffff"
                                    d="M0 0c0-1.954-.836-3.659-2.542-4.744C-.31-5.768 1.24-7.845 1.24-10.294c0-3.721-3.41-6.852-7.813-6.852-4.589 0-7.441 3.379-7.441 5.829 0 1.209 1.271 2.077 2.388 2.077 2.108 0 1.612-3.628 5.115-3.628 1.613 0 2.915 1.24 2.915 2.884 0 4.34-5.271 1.147-5.271 4.806 0 3.255 4.402 1.054 4.402 4.495 0 1.179-.836 2.078-2.232 2.078-2.945 0-2.542-3.039-4.651-3.039-1.271 0-2.015 1.148-2.015 2.295 0 2.418 3.318 5.023 6.759 5.023C-2.139 5.674 0 2.418 0 0"
                                    transform="translate(25.11 24.774)" class="colorffffff svgShape"></path>
                            </g>
                        </svg>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 ">simple
                                payment</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 ">Don't forget to show proof of
                            payment
                            when you come to the field</p>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 mb-56 ml-5 mr-5 lg:grid-cols-4 lg:gap-8">
                <div class="h-32 ml-5 mr-5 mb-20 rounded-lg lg:col-span-2">
                    <div>
                        <h1 class="text-lg text-gray-400 drop-shadow-xl text-left mb-5">
                            Easy Payment...
                        </h1>
                        <h1 class="text-5xl text-gray-700 drop-shadow-xl text-left sm:mb-24">
                            We support <br>
                            payment <br>
                            by...
                        </h1>
                    </div>
                </div>
                <div class="h-52 md:h-80 rounded-lg bg-gray-100 drop-shadow-lg">
                    <div class="flex justify-center items-center ">
                        <div class="grid grid-cols-2 gap-8 lg:grid-cols-1 lg:gap-4">
                            <div class="h-32 rounded-lg">
                                <figure class="h-56 w-56">
                                    <img src="debit_ic.png" alt="debit icen" class="p-10  drop-shadow-xl">
                                </figure>
                            </div>
                            <div class="h-32 pt-16 rounded-lg flex justify-center items-center">
                                <h1 class="text-3xl text-center">Debit</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-52 md:h-80 rounded-lg bg-gray-100 drop-shadow-lg">
                    <div class="flex justify-center items-center ">
                        <div class="grid grid-cols-2 gap-8 lg:grid-cols-1 lg:gap-4">
                            <div class="h-32 rounded-lg">
                                <figure class="h-56 w-56">
                                    <img src="cash_ic.png" alt="cash icen" class="p-10  drop-shadow-xl">
                                </figure>
                            </div>
                            <div class="h-32 pt-16 rounded-lg flex justify-center items-center">
                                <h1 class="text-3xl text-center">Cash</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </selection>
    <!-- End tutorial -->

    <!-- start info -->
    <section class="border h-fit bg-[#00A671]  flex justify-center items-start">

        <div class="block justify-center items-center">
            <h1 class="text-3xl text-white mt-32 text-center font-extrabold sm:text-5xl">
                About Us
            </h1>
            <h1 class="text-xl text-white mt-12 pr-32 pl-32  sm:text-3xl  text-center">
                Kami adalah penyedia rental lapangan olahraga terpercaya di daerah ini. Dengan fasilitas modern dan layanan yang ramah, kami menyediakan pengalaman olahraga yang menyenangkan untuk semua pecinta olahraga.Dengan lapangan berkualitas tinggi dan staf yang siap membantu, Pesut Tonk Cool Field adalah pilihan terbaik untuk latihan, turnamen, atau acara khusus Anda.Bergabunglah dengan kami di Pesut Tonk Cool Field dan rasakan kesenangan berolahraga bersama kami!
            </h1>
            <div class="flex justify-center items-center mb-20">

                <div class="w-fill bg-white rounded-lg mt-24 drop-shadow-xl">
                    <div class="mt-2 mb-2 pr-20 pl-20 sm:mt-4 sm:mb-4">
                        <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3 sm:divide-x sm:divide-gray-200">
                            <div class="flex flex-col px-4 py-8 text-center">
                                <dt class="order-last text-lg font-medium text-[#00A671]">Achievement</dt>

                                <dd class="text-4xl font-extrabold text-[#00A671] md:text-5xl">Rp 4.8jt</dd>
                            </div>

                            <div class="flex flex-col px-4 py-8 text-center">
                                <dt class="order-last text-lg font-medium text-[#00A671]">Total field</dt>

                                <dd class="text-4xl font-extrabold text-[#00A671] md:text-5xl">5</dd>
                            </div>

                            <div class="flex flex-col px-4 py-8 text-center">
                                <dt class="order-last text-lg font-medium text-[#00A671]">Tenant</dt>

                                <dd class="text-4xl font-extrabold text-[#00A671] md:text-5xl">23</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end info -->

    <!-- start article -->
    <section class="  h-flex flex justify-center items-center ">

        <div class="mx-auto max-w-screen-xl px-4 py-8 mt-20 sm:px-6 sm:py-12 lg:px-8">
            <header>
                <p class=" max-w-md text-gray-500">
                    what's new in
                </p>

                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">pesut tonk cool field</h2>
            </header>

            <div class="mt-8">
                <p class="text-sm text-gray-500">Showing <span> 4 </span> of 40</p>
            </div>

            <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <li>
                    <a href="#" class="group block overflow-hidden">
                        <article class="group">
                            <img alt=""
                                src="https://images.unsplash.com/photo-1631451095765-2c91616fc9e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />

                            <div class="p-4">
                                <a href="#">
                                    <h3 class="text-lg font-medium text-gray-900">Finding the Journey to Mordor</h3>
                                </a>

                                <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores,
                                    possimus
                                    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet
                                    corporis quidem,
                                    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius
                                    atque
                                    dignissimos. Molestias explicabo corporis voluptatem?
                                </p>
                            </div>
                        </article>
                    </a>
                </li>
                <li>
                    <a href="#" class="group block overflow-hidden">
                        <article class="group">
                            <img alt=""
                                src="https://images.unsplash.com/photo-1631451095765-2c91616fc9e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />

                            <div class="p-4">
                                <a href="#">
                                    <h3 class="text-lg font-medium text-gray-900">Finding the Journey to Mordor</h3>
                                </a>

                                <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores,
                                    possimus
                                    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet
                                    corporis quidem,
                                    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius
                                    atque
                                    dignissimos. Molestias explicabo corporis voluptatem?
                                </p>
                            </div>
                        </article>
                    </a>
                </li>
                <li>
                    <a href="#" class="group block overflow-hidden">
                        <article class="group">
                            <img alt=""
                                src="https://images.unsplash.com/photo-1631451095765-2c91616fc9e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />

                            <div class="p-4">
                                <a href="#">
                                    <h3 class="text-lg font-medium text-gray-900">Finding the Journey to Mordor</h3>
                                </a>

                                <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores,
                                    possimus
                                    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet
                                    corporis quidem,
                                    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius
                                    atque
                                    dignissimos. Molestias explicabo corporis voluptatem?
                                </p>
                            </div>
                        </article>
                    </a>
                </li>
                <li>
                    <a href="#" class="group block overflow-hidden">
                        <article class="group">
                            <img alt=""
                                src="https://images.unsplash.com/photo-1631451095765-2c91616fc9e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />

                            <div class="p-4">
                                <a href="#">
                                    <h3 class="text-lg font-medium text-gray-900">Finding the Journey to Mordor</h3>
                                </a>

                                <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores,
                                    possimus
                                    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet
                                    corporis quidem,
                                    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius
                                    atque
                                    dignissimos. Molestias explicabo corporis voluptatem?
                                </p>
                            </div>
                        </article>
                    </a>
                </li>
            </ul>

            <ol class="mt-8 flex justify-center gap-1 text-xs font-medium">
                <li>
                    <a href="#" class="inline-flex size-8 items-center justify-center rounded border border-gray-100">
                        <span class="sr-only">Prev Page</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="#" class="block size-8 rounded border border-gray-100 text-center leading-8">
                        1
                    </a>
                </li>

                <li class="block size-8 rounded border-black bg-black text-center leading-8 text-white">2</li>

                <li>
                    <a href="#" class="block size-8 rounded border border-gray-100 text-center leading-8">
                        3
                    </a>
                </li>

                <li>
                    <a href="#" class="block size-8 rounded border border-gray-100 text-center leading-8">
                        4
                    </a>
                </li>

                <li>
                    <a href="#" class="inline-flex size-8 items-center justify-center rounded border border-gray-100">
                        <span class="sr-only">Next Page</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            </ol>
        </div>

    </section>
    <!-- end article -->

@endsection