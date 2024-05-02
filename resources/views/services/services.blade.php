@extends('layouts.app')
@section('main')

<div class="bg-white">
    <div
        class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
        <div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><span
                    class="text-amber-300">Lapangan</span> Kami.</h2>
            <p class="mt-4 text-gray-500">Di sini, kami menawarkan persewaan lapangan olahraga yang andal, dilengkapi
                dengan fasilitas modern dan pelayanan yang ramah. Pengalaman olahraga yang memuaskan menanti Anda,
                disediakan khusus untuk para pencinta aktivitas fisik.</p>

            <dl class="mt-10 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Origin</dt>
                    <dd class="mt-2 text-sm text-gray-500">Designed by PTCF, Inc.</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Material</dt>
                    <dd class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Laboriosam ducimus, delectus laudantium sequi sunt quis.</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Dimensions</dt>
                    <dd class="mt-2 text-sm text-gray-500">6.25&quot; x 3.55&quot; x 1.15&quot;</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                    <dt class="font-medium text-gray-900">Finish</dt>
                    <dd class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Quae, vel.</dd>
                </div>
                <div class="flex flex-wrap pt-4">
                    <a href="#"
                        class="rent-button block w-full rounded-full border bg-[#00A671] px-12 py-3 text-sm font-medium text-white hover:bg-[#00C888] focus:outline-none focus:ring sm:w-auto">
                        Sewa Sekarang!
                    </a>
                </div>
            </dl>
        </div>
        <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
            <img src="https://placehold.co/400"
                alt="Walnut card tray with white powder coated steel divider and 3 punchout holes."
                class="rounded-lg bg-gray-100">
            <img src="https://placehold.co/400"
                alt="Top down view of walnut card tray with embedded magnets and card groove."
                class="rounded-lg bg-gray-100">
            <img src="https://placehold.co/400" alt="Side of walnut card tray with card groove and recessed card area."
                class="rounded-lg bg-gray-100">
            <img src="https://placehold.co/400"
                alt="Walnut card tray filled with cards and card angled in dedicated groove."
                class="rounded-lg bg-gray-100">
        </div>
    </div>

</div>

<!-- Modal Box -->

<div class="modal" id="rent-modal">
    <div class="modal-container">
        <div class="modal-content">
            <form id="rentForm">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Informasi pribadi</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Gunakan nomor telepon dan alamat email yang
                            dapat dihubungi.</p>

                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                    Depan</label>
                                <div class="mt-2">
                                    <input type="text" name="fname" id="firstName" autocomplete="given-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                    belakang</label>
                                <div class="mt-2">
                                    <input type="text" name="lname" id="lastName" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Alamat
                                    Email</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Nomor
                                    Telepon</label>
                                <div class="mt-2">
                                    <input id="phone" name="phone" type="number" autocomplete="phone"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Informasi penyewaan</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Tentukan tanggal dan waktu serta durasi yang
                            anda ingin ajukan.</p>

                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Tanggal &
                                    waktu</label>
                                <div class="mt-2">
                                    <input type="datetime-local" name="date" id="date"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="duration" class="block text-sm font-medium leading-6 text-gray-900">Durasi
                                    main <Span style="font-size: 1rem; font-weight:100;">*menit</Span></label>
                                <div class="mt-2">
                                    <input type="number" name="duration" id="gameDuration"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <h6 class="block font-small leading-4 text-gray-900" style="font-size: 0.7rem;">
                                    note: <br>minimal
                                    durasi penyewaan
                                    adalah 60 menit dengan kelipatan 30 menit, terima kasih. <br>
                                    e.g.: 60, 90, 120, etc</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button"
                        class=" cancel-button rounded-md px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">Cancel</button>
                    <button type="submit" id="rentSubmitButton"
                        class="rent-submit-button disabled rounded-md bg-[#00A671] px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-[#00C888] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-700">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>


@endsection