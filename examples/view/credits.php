<h1>Credits</h1>
<ul>
    @foreach ($authors as $author)
        <li><a href="{{ $author->page }}">{{ $author->name }}</a></li>
    @/foreach
</ul>
