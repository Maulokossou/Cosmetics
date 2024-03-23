<div>
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            @php
                $active = request()->is('dashboard');
            @endphp
            @if ($active)
                <span class="absolute inset-y-0 left-0 w-1 bg-main rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
            @endif
            <a @class([
                'inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800  ',
                'dash-active-link' => $active,
            ]) href="{{ route('dashboard') }}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
                <span class="ml-4">Acceuil</span>
            </a>
        </li>
    </ul>
    <ul>
        <li class="relative px-6 py-3">
            @php
                $active = request()->is('dashboard/events') || request()->is('dashboard/events/*');
            @endphp
            @if ($active)
                <span class="absolute inset-y-0 left-0 w-1 bg-main rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
            @endif
            <a @class([
                'inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 ',
                'dash-active-link' => $active,
            ]) href="{{ route('events.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                  </svg>
                <span class="ml-4">Evenements</span>
            </a>

        </li>

        <li class="relative px-6 py-3">
            @php
                $active = request()->is('dashboard/event_tickets') || request()->is('dashboard/event_tickets/*');
            @endphp
            @if ($active)
                <span class="absolute inset-y-0 left-0 w-1 bg-main rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
            @endif
            <a @class([
                'inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800'
            ]) href="{{ route('event_tickets.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                  </svg>
                  
                <span class="ml-4">Tickets</span>
            </a>

        </li>

        <li class="relative px-6 py-3">
            @php
                $active = request()->is('dashboard/reservations') || request()->is('dashboard/reservations/*');
            @endphp
            @if ($active)
                <span class="absolute inset-y-0 left-0 w-1 bg-main rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
            @endif
            <a @class([
                'inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800'
            ]) href="{{ route('reservations.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
              </svg>
                                
                <span class="ml-4">Réservations</span>
            </a>

        </li>
        
    </ul>
</div>