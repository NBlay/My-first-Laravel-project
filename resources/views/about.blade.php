@extends('layouts.layout')

@section('stylesheet')
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection

@section('contenu')



        <div class="top-banner">
          <img id="ban-img" src="img/page-banner-1.jpg" alt="banner1">
          <h1 class="centered" id="abt">About</h1>
          <p class="centered"><a id="home-but" href="/home">Home</a> / About</p>
        </div>

        <div class="flex">
          <div class="container">
              <div class="first-par">
                <h3>What is COVID-19 ?</h3>
                <ul id="What-is">
                  <li>COVID-19 is the disease caused by the new coronavirus that emerged in China in December 2019.</li>
                  <li>COVID-19 symptoms include cough, fever and shortness of breath. COVID-19 can be severe, and some cases have caused death.</li>
                  <li>The new coronavirus can be spread from person to person. It is diagnosed with a laboratory test.</li>
                  <li>There is no coronavirus vaccine yet. Prevention involves frequent hand-washing, coughing into the bend of your elbow and staying home when you are sick.</li>
                </ul>
              </div>

              <div class="second-par">
                <h3>How is COVID-19 spread ?</h3>
                <p>COVID-19 can be passed from person to person through droplets from coughs and sneezes. COVID-19 has been detected in people all over the world, and is considered a pandemic.</p>
                <p>The spread of this new coronavirus is being monitored by the Centers for Disease Control (CDC), the World Health Organization and health organizations like Johns Hopkins across the globe.</p>
              </div>

              <div class="third-par">
                <h3>How did this new coronavirus spread to humans?</h3>
                <p>COVID-19 appeared in Wuhan, a city in China, in December 2019. Although health officials are still tracing the exact source of this new coronavirus, early hypotheses thought it may be linked to a seafood market in Wuhan, China. Some people who visited the market developed viral pneumonia caused by the new coronavirus. A study that came out on Jan. 25, 2020, notes that the individual with the first reported case became ill on Dec. 1, 2019, and had no link to the seafood market. Investigations are ongoing as to how this virus originated and spread.</p>
              </div>

          </div>
        </div>
    <script src="../js/script.js"type="text/javascript">
