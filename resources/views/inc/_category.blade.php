<div class="sidebar">
  <div class="logo-sidebar">
    <img src="/img/sidebar-transiago.png" alt="">
  </div>
    <div class="category-sidebar">

      <ul class="category-list">
        @foreach($category as $kategori)
        <a href="{{ route('blog.category', ['category_id' => $kategori->id])}}"><li>{{ $kategori->name }}</li></a>
        @endforeach
      </ul>
    </div>
</div>
