   <!-- About-->
   <section class="page-section" id="about">
       <div class="container">
           <div class="text-center">
               <h2 class="section-heading text-uppercase">{{ __('menu.About US') }}</h2>
               <h3 class="section-subheading text-muted">
                   {{ __('menu.Trusted real estate solutions for modern living and smart investments.') }}
               </h3>
           </div>
           <ul class="timeline">

               @foreach ($aboutUs as $item)
                   <li class="{{ $item->is_inverted ? 'timeline-inverted' : '' }}">

                       <div class="timeline-image">
                           <img class="rounded-circle img-fluid" src="{{ asset('storage/' . $item->image) }}">
                       </div>

                       <div class="timeline-panel">
                           <div class="timeline-heading">
                               <h4>{{ $item->date }}</h4>
                               <h4 class="subheading">{{ $item->title }}</h4>
                           </div>

                           <div class="timeline-body">
                               <p class="text-muted">{{ $item->description }}</p>
                           </div>
                       </div>

                   </li>
               @endforeach

           </ul>
       </div>
   </section>
