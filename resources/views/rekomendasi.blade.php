<h2 class="mb-4 text-lg font-bold">Related Articles</h2>
<div class="grid grid-cols-2 gap-4 md:grid-cols-4">
    @foreach($relatedArticles as $related)
        <div class="p-4 bg-gray-800 rounded-lg">
            <img src="{{ asset($related->image) }}" class="object-cover w-full h-40 rounded-lg">
            <h3 class="mt-2 font-bold text-white">{{ $related->title }}</h3>
            <p class="text-gray-400">{{ Str::limit($related->content, 100) }}</p>
            <a href="{{ route('rekomendasi.show', $related->id) }}" class="text-blue-400">Read more</a>
        </div>
    @endforeach
</div>
