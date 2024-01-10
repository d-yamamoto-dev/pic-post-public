<head>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
  <form method="POST" action="/" enctype="multipart/form-data">
    <label>
      @csrf
      <input type="file" name="picture" class="pic-upload" id="picture">
    </label>
    <button>アップロード</button>
  </form>

  <script src="{{ asset('js/index.js') }}"></script>

  @foreach($pictures as $picture)
    <img src="{{ asset($picture->file_path) }}" height=300 width=300 alt="" >
  @endforeach

</body>
