
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ikon pintasan" type="image/jpg" href="/favicon.jpg" />
    <title>PTCF</title>


    <script src="https://cdn.tailwindcss.com"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>

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
    
            <form action="{{url('article/'.$data->id)}}" method="POST"
                class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                @csrf
                @method('PATCH')
                <text class="text-center text-lg font-medium">Buat artikel anda</text>
                <div>
                    <label for="foto" class="sr-only">gambar</label>
    
                    <div class="relative">
                        <input type="file" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Ketik judul artikel anda" name="foto" id="foto" value="{{$data -> foto}}"></input>
    
    
                    </div>
                </div>
                <div>
                    <label for="judul" class="sr-only">judul</label>
    
                    <div class="relative">
                        <input type="text" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Ketik judul artikel anda" name="judul" id="judul" value="{{$data -> judul}}"></input>
    
    
                    </div>
                </div>
    
                <div>
                    <label for="article" class="sr-only">article</label>
    
                    <div class="relative">
                        <textarea type="text" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Ketik artikel anda" name="article" id="article">{{$data -> article}}</textarea>
    
    
                    </div>
                </div>
    
    
                <button type="submit"
                    class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                    Submit
                </button>
    
            </form>
            @if ($errors->any())
            <div class="p-3">
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
    
            </div>
        </div>
    
        @endif
    </div>
    </div>
</body>

</html>