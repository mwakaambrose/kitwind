<div class="w-full md:w-1/4 px-3 mb-6">
  <a href="{{ $category->getUrl() }}">
    <div class="group overflow-hidden bg-white rounded border hover:border-teal-500 hover:text-teal-700 transition-border transition-colors">
      <div class="group-hover:bg-teal-200 group-hover:text-teal-500 text-gray-500 bg-gray-200 flex justify-center py-5 transition-colors">
        {!! $category->icon !!}
      </div>
      <div class="p-5">
        <h5 class="font-semibold">
          {{ $category->title }}
        </h5>
        <p class="opacity-75 text-xs">
          {{ count($category->components($components)) }} Components
        </p>
      </div>
    </div>
  </a>
</div>