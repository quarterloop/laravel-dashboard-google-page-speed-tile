<x-dashboard-tile :position="$position" refresh-interval="60">
    <div style="height: 100%;">
        <a class="font-small text-dimmed text-xs lowercase tracking-wide tabular-nums absolute top-0 left-0 m-1"
          href="{{ route('fetch-page-speed') }}">
          <svg viewBox="0 0 18 18" width="18" height="18">
            <path style="fill: rgba(255, 255, 255, 0.5);" d="M 16.8 0 C 16.139 0 15.6 0.537 15.6 1.2 L 15.6 3.979 C 14.105 1.894 11.678 0.6 9 0.6 C 5.457 0.6 2.347 2.863 1.26 6.232 C 1.056 6.864 1.403 7.54 2.033 7.743 C 2.665 7.95 3.341 7.6 3.545 6.972 C 4.309 4.594 6.502 3 9 3 C 10.894 3 12.611 3.921 13.665 5.4 L 12 5.4 C 11.339 5.4 10.8 5.937 10.8 6.6 C 10.8 7.264 11.339 7.8 12 7.8 L 16.8 7.8 C 17.463 7.8 18 7.264 18 6.6 L 18 1.2 C 18 0.537 17.464 0 16.8 0 Z M 15.967 10.26 C 15.333 10.056 14.659 10.404 14.457 11.032 C 13.692 13.407 11.498 15 9 15 C 7.107 15 5.39 14.081 4.335 12.6 L 6 12.6 C 6.663 12.6 7.2 12.064 7.2 11.4 C 7.2 10.737 6.663 10.2 6 10.2 L 1.2 10.2 C 0.539 10.2 0 10.737 0 11.4 L 0 16.8 C 0 17.465 0.539 18 1.2 18 C 1.862 18 2.4 17.465 2.4 16.8 L 2.4 14.022 C 3.896 16.107 6.322 17.4 8.967 17.4 C 12.509 17.4 15.62 15.138 16.707 11.767 C 16.946 11.138 16.597 10.43 15.967 10.26 Z"></path>
          </svg>
        </a>

        <h1 class="font-medium text-dimmed text-sm uppercase tracking-wide tabular-nums text-center">Page Speed</h1>
        <p class="text-dimmed lowercase tracking-wide tabular-nums text-center mr-auto ml-auto mb-3 w-full"
           style="font-size: 12px;">
           {{ $lastUpdateDate }} - {{ $lastUpdateTime }}
        </p>

        <ul class="mt-auto mb-auto">
          <li class="p-1">
            <div class="flex justify-center">
              <span class="mt-auto mb-auto mr-auto">
                <svg viewBox="0 0 18 18" width="18" height="18">
                  <path style="fill: rgba(255, 255, 255, 0.5);" d="M 16.5 0 L 1.5 0 C 0.672 0 0 0.756 0 1.688 L 0 12.938 C 0 13.869 0.672 14.625 1.5 14.625 L 7.5 14.625 L 7 16.313 L 4.75 16.313 C 4.338 16.313 4 16.692 4 17.156 C 4 17.62 4.338 18 4.75 18 L 13.25 18 C 13.664 18 14 17.622 14 17.156 C 14 16.69 13.664 16.313 13.25 16.313 L 11 16.313 L 10.5 14.625 L 16.5 14.625 C 17.328 14.625 18 13.869 18 12.938 L 18 1.688 C 18 0.756 17.328 0 16.5 0 Z M 16 10.125 L 2 10.125 L 2 2.25 L 16 2.25 L 16 10.125 Z"></path>
                </svg>
              </span>
              <span class="pl-1 font-small text-xs">
                {{!! $desktopScore['categories']['performance']['score']*100 !!}}%

              </span>
            </div>
          </li>
          <li class="p-1">
            <div class="flex justify-center">
              <span class="mt-auto mb-auto mr-auto">
                <svg viewBox="-2 0 18 18" width="18" height="18">
                  <path style="fill: rgba(255, 255, 255, 0.5);" d="M 10.125 0 L 2.25 0 C 1.007 0 0 1.007 0 2.25 L 0 15.75 C 0 16.993 1.007 18 2.25 18 L 10.125 18 C 11.368 18 12.375 16.993 12.375 15.75 L 12.375 2.25 C 12.375 1.007 11.366 0 10.125 0 Z M 6.187 16.875 C 5.563 16.875 5.063 16.374 5.063 15.75 C 5.063 15.126 5.563 14.625 6.187 14.625 C 6.812 14.625 7.312 15.126 7.312 15.75 C 7.312 16.374 6.813 16.875 6.187 16.875 Z M 10.125 2.25 L 10.125 13.5 L 2.25 13.5 L 2.25 2.25 L 10.125 2.25 Z"></path>
                </svg>
              </span>
              <span class="pl-1 font-small text-xs">
                {{!! $mobileScore['categories']['performance']['score']*100 !!}}%
              </span>
            </div>
          </li>
        </ul>
    </div>
</x-dashboard-tile>
