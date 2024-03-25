@extends('layouts.app')
@section('main')
<div class="mx-auto mt-20 max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">
        <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">What's new today</h1>

        <p class="mx-auto mt-4 max-w-lg text-center text-gray-500">
            Dalam menulis artikel, sangat penting untuk memastikan bahwa konten yang disajikan adalah faktual, bebas
            dari bias, dan tidak mengandung unsur SARA atau merendahkan siapapun. Pastikan untuk menggunakan sumber yang
            dapat dipercaya, menjaga objektivitas, menghormati privasi individu, dan menggunakan bahasa yang sopan serta
            inklusif. Dengan mematuhi prinsip-prinsip ini, Anda akan berkontribusi pada penyebaran informasi yang
            bertanggung jawab dan menghormati keragaman pembaca Anda.
        </p>

        <form action="{{url('/article')}}" method="POST"
            class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
            @csrf
            <p class="text-center text-lg font-medium">Buat artikel anda</p>

            <div>
                <label for="article" class="sr-only">article</label>

                <div class="relative">
                    <input type="text" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Ketik artikel anda" name="article" id="article" />


                </div>
            </div>

            {{-- <div>
          <label for="password" class="sr-only">Password</label>
  
          <div class="relative">
            <input
              type="password"
              class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
              placeholder="Enter password"
            />
  
            <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-4 text-gray-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                />
              </svg>
            </span>
          </div>
        </div> --}}

            <button type="submit"
                class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                Submit
            </button>

        </form>
    </div>
</div>
@endsection