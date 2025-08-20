<x-layouts.app>
     <div class="space-y-4">
          @foreach ( $tweets as $tweet )
               <x-tweet :tweet="$tweet"/>
          @endforeach
     </div>
</x-layouts.app>
