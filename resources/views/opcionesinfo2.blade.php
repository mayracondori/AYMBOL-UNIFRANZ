@extends('plantilla.modelo')
@section('title.INFORMACION')
@section('content')
<div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-700">
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                     
                      <h2 class="text-white text-xl font-semibold">
                      MONITOREO DE MONOXIDO DE CARBONO
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="p-4 flex-auto">
                  <!-- Chart -->
                  <div class="relative "><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="line-chart" style="display: block; width: 100%; height: 500px;" width="829" height="150" class="chartjs-render-monitor"></canvas>
                  </div>
                </div>
              </div>
              @endsection

              