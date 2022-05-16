<x-dashboard-tile :position="$position" refresh-interval="60">
    <div>
        <h1 class="font-medium text-dimmed text-sm uppercase tracking-wide tabular-nums text-center">Google Page Speed</h1>
        <ul>
          <li class="p-1">
            <div class="flex justify-center">
              <span class="p-1 rounded-sm">
                Desktop
              </span>
              <span class="p-1">
                {{ $desktop['score']*100 }}
              </span>
            </div>
          </li>
          <li class="p-1">
            <div class="flex justify-center">
              <span class="p-1 rounded-sm">
                Mobile
              </span>
              <span class="p-1">
                {{ $mobile['score']*100 }}
              </span>
            </div>
          </li>
        </ul>
    </div>
</x-dashboard-tile>
