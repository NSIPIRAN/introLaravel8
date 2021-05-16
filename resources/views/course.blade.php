@extends('layouts.web')

@section('content')
<div class="grid grid-cols-3 gap-4">
  <div class="p-8 bg-gray-200 col-span-1">
    <ul class="flex flex-col">
      <li class="font-medium text-sm text-gray-400 uppercase mb-4">
          Contenido
      </li>
    </ul>  
  </div>  
  <div class="text-gray-700 col-span-2">
    <img src="{{ $course->image }}" alt="">
    <h2 class="text-4xl">{{ $course->name }}</h2>
    <p>{{ $course->description }} </p>
    <div class="flex mt-3">
      <img src="{{ $course->user->avatar }}" class="h-10 w-10 rounded-full mr-2" alt="">
    </div>
    <div>
      <p class="text-gray-500 text-sm">{{ $course->user->name }}</p>
      <p class="text-gray-300 text-xs">{{ $course->created_at->diffForHUmans() }}</p>
    </div>
  </div>
  
</div>
<livewire:course-list>
@endsection