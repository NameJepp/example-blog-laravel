@props(['trigger', 'useArrow' => true, 'styling' => ''])
<div x-data="{ show: false }" @click.away="show = false" class="relative">

    <button @click="show = ! show"
        class="{{ $styling }} py-2 text-sm w-full lg:w-auto text-left font-semibold flex lg:inline-flex ">

        {{ $trigger }}

        @if ($useArrow == 'true')
            <svg :class="show ? 'rotate-90' : '-rotate-90'" class="transform absolute pointer-events-none"
                style="right: 12px;" width="22" height="22" viewBox="0 0 22 22" x-transition>
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                    </path>
                </g>
            </svg>
        @endif

    </button>

    <div x-show="show" x-transition
        class="py-2 absolute bg-gray-100 rounded-xl w-full mt-2 z-50 overflow-auto max-h-52 scrollbar-thin scrollbar-thumb-gray-500 scollbar-track-gray-200 border border-gray-200"
        style="display: none">
        {{ $slot }}
    </div>
</div>
