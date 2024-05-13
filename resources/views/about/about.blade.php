@extends('layouts.app')
@section('main')

<div class="bg-white">
    <div
        class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-24 gap-y-8 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
        <div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><span
                    class="text-amber-300">Tentang</span> Kami.</h2>
            <p class="mt-4 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, enim,
                velit
                corrupti optio totam illum distinctio nihil deserunt nesciunt magnam iure explicabo adipisci sunt.
                Tempora quisquam debitis consequatur aperiam sapiente nulla! Quaerat molestias veritatis magnam voluptas
                iure libero natus sed.</p>
            <dl class=" mt-10 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Nama</dt>
                    <dd class="mt-2 text-sm text-gray-500">Pesut Tonk Cool Field</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Pemilik</dt>
                    <dd class="mt-2 text-sm text-gray-500">John Doe</dd>
                </div>
                <div class="border-t border-gray-200 pt-4 sm:col-span-2">
                    <dt class="font-medium text-gray-900">Lokasi</dt>
                    <dd class="mt-2 text-sm text-gray-500">Jl. Kapten Soedjono Aj,Sambutan, Kec. Sambutan, Kota
                        Samarinda, Kalimantan Timur 75251</dd>
                </div>
            </dl>
        </div>
        <div class="grid grid-cols-1 item-center ">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.651510595541!2d117.16854790962537!3d-0.5239300352639532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df5d55e43cdaa59%3A0xf16b370ae6e1bc17!2sJl.%20Kapten%20Soedjono%20Aj%2C%20Sambutan%2C%20Kec.%20Sambutan%2C%20Kota%20Samarinda%2C%20Kalimantan%20Timur!5e0!3m2!1sen!2sid!4v1715400461053!5m2!1sen!2sid"
                width="500" height="500" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                class="map rounded-lg bg-gray-100"></iframe>
        </div>
    </div>

</div>


<section class="testimonial-slider relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="testimonial">
        <div
            class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
        </div>
        <div
            class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
        </div>
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <figure class="mt-10">
                <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                    <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos soluta unde explicabo beatae fugiat
                        recusandae."</p>
                </blockquote>
                <figcaption class="mt-10">
                    <img class="mx-auto h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                        <div class="font-semibold text-gray-900">Judith Black</div>
                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                            <circle cx="1" cy="1" r="1" />
                        </svg>
                        <div class="text-gray-600">CEO of Workcation</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="testimonial">
        <div
            class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
        </div>
        <div
            class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
        </div>
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <figure class="mt-10">
                <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                    <p>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus ipsa voluptates quod
                        excepturi saepe accusantium. Similique, dolorum voluptas! Illum labore sapiente obcaecati
                        deserunt dolor sequi."</p>
                </blockquote>
                <figcaption class="mt-10">
                    <img class="mx-auto h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                        <div class="font-semibold text-gray-900">Judy Rose</div>
                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                            <circle cx="1" cy="1" r="1" />
                        </svg>
                        <div class="text-gray-600">CEO of Workcation</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="testimonial">
        <div
            class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
        </div>
        <div
            class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
        </div>
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <figure class="mt-10">
                <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                    <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente
                        alias
                        molestiae. Numquam corrupti in laborum sed rerum et corporis.”</p>
                </blockquote>
                <figcaption class="mt-10">
                    <img class="mx-auto h-10 w-10 rounded-full"
                        src="data:image/jpeg;base64,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"
                        alt="">
                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                        <div class="font-semibold text-gray-900">Dedi Gunawan</div>
                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                            <circle cx="1" cy="1" r="1" />
                        </svg>
                        <div class="text-gray-600">CEO of IDN Boarding School</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="testimonial">
        <div
            class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
        </div>
        <div
            class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
        </div>
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <figure class="mt-10">
                <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                    <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente
                        alias
                        molestiae. Numquam corrupti in laborum sed rerum et corporis.”</p>
                </blockquote>
                <figcaption class="mt-10">
                    <img class="mx-auto h-10 w-10 rounded-full"
                        src="data:image/jpeg;base64,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"
                        alt="">
                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                        <div class="font-semibold text-gray-900">Elon Musk</div>
                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                            <circle cx="1" cy="1" r="1" />
                        </svg>
                        <div class="text-gray-600">CEO of Tesla</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>

</section>


@endsection