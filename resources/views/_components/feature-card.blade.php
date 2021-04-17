<div class="pt-6">
  <div class="px-6 pb-8 rounded-lg flow-root card">
    <div class="-mt-6">
      <div>
        <span class="inline-flex items-center justify-center p-3 border border-yellow-400 gradient rounded-md btn">
          @includeIf("_svgs.{$icon}")
        </span>
      </div>
      <h3 class="mt-8 text-lg font-black tracking-wide text-transparent bg-clip-text bg-gradient-to-tr from-yellow-500 to-yellow-200">{{ $title }}</h3>
      <p class="mt-5 text-base text-white">{{ $body }}</p>
    </div>
  </div>
</div>
