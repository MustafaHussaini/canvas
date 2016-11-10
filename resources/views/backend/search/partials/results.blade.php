<table class="table table-condensed table-vmiddle">
    <thead>
    <tr>
        <th>Content Type</th>
        <th>Title</th>
        <th>Created</th>
        <th>Last Updated</th>
    </tr>
    </thead>
    <tbody>
    @if(empty($posts->toArray()) && empty($tags->toArray()))
        <tr>
            <td>No results found.</td>
            <td></td>
            <td></td>
        </tr>
    @else
        @foreach ($posts as $post)
            <tr>
                <td><i class="zmdi zmdi-book"></i>&nbsp;&nbsp;Post</td>
                <td><a href="{{ url('admin/post') }}/{{ $post->id }}/edit">{{ $post->title }}</a></td>
                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('M d, Y') }}</td>
                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at)->format('M d, Y') }}</td>
            </tr>
        @endforeach

        @foreach ($tags as $tag)
            <tr>
                <td><i class="zmdi zmdi-label"></i>&nbsp;&nbsp;Tag</td>
                <td><a href="{{ url('admin/tag') }}/{{ $tag->id }}/edit">{{ $tag->title }}</a></td>
                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tag->created_at)->format('M d, Y') }}</td>
                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tag->updated_at)->format('M d, Y') }}</td>
            </tr>
        @endforeach
    @endif

    </tbody>
</table>