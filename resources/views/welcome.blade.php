<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


        <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    </head>
    <body>

    <div style="display: flex; justify-content: center">

   
    <canvas id="myChart" style="width:100%;max-width:600px;"></canvas>

    </div>
    
   

    <form action="/" method="POST" class="containerAll">
    @csrf

    

    <div>

    
    <div style="display:flex; gap:1em">

  
  
    <div>
            <label for="happiness" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Happiness</label>
            <input type="number" id="happiness" name="happiness" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
        </div>

        <div>
            <label for="motivation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Motivation</label>
            <input type="number" id="motivation" name="motivation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
        </div>

        <div>
            <label for="determination" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Determination</label>
            <input type="number" id="determination" name="determination" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
        </div>

        <div>
            <label for="sadness" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">sadness</label>
            <input type="number" id="sadness" name="sadness" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
        </div>

        <div>
            <label for="fear" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fear</label>
            <input type="number" id="fear" name="fear" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
        </div>

        </div>
        
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Send Emotions</button>
</div>






</form>

<script>
var xValues = ["Happiness", "Motivation", "Determination", "Sadness", "Fear"];
var yValues = [{{$happiness}}, {{$motivation}}, {{$determination}}, {{$sadness}}, {{$fear}}];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Some Emotions to work on"
    }
  }
});
</script>




    </body>
</html>
