<x-app-layout>

<style>
    .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        font-size: 18px;

    }
    .bgcenter-container {
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        font-size: 18px;
        height: 100vh;
    }
</style>

    <div>
        <img src="{{ url('images\banner-background.jpg') }}"   alt="   banner  background    ">
        <h1 class="bgcenter-container">Banner Background</h1>
    </div> 

    <div class="bg-white center-container">
        <div class="p-40 text-gray-900 mx-auto">
           <h1> Service </h1>
        </div>
    </div>
    
    <div class="bg-white center-container">
        <div class="p-6 text-gray-900 mx-auto">
           <h1> Service </h1>
        </div>
    </div>

    <div class="bg-white center-container">
        <div class="p-6 text-gray-900 mx-auto">
           <h1> Contact </h1>
        </div>
    </div>
</x-app-layout>
