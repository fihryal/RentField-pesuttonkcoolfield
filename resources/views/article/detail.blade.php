
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

    <section class="h-fit flex justify-center items-center">
        <div class="max-w-2xl mt-20 mb-5 bg-white border border-gray-200 rounded-lg shadow">
            <div class="p-5">
                <a href="#">
                    <img class="rounded-t-lg" src="{{url('foto').'/'.$data->foto}}" alt="" class="h-56 w-full object-cover"/>
                </a>
                <a href="#">
                    <h5 class="mb-8 mt-8 text-2xl font-bold tracking-tight text-gray-900">{{$data->judul}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">{{$data->article}}</p>
            </div>
        </div>
    </section>
</body>

</html>