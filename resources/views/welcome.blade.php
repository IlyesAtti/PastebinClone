
<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <title>PasteBin</title>

        <!-- Fonts -->
        <link rel = "preconnect" href="https://fonts.bunny.net">
        <link href = "https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel = "stylesheet" />
        <link rel = "stylesheet" href="{{url('CSS/custom.css')}}"/>
    </head>

    <body>
        <form action = "add" method = "POST">
            @csrf <!-- {{ csrf_field() }} -->
            <textarea rows = "15", cols = "100" id = "id" name = "Text" placeholder = "Enter Your text here" style = "resize:none"></textarea></br>
            <button type = "submitt">Submit</button>
        </form>
        
        <table>
            @foreach($post as $text)
                <tr>
                    <td><a href = "{{route('post.show', $text->id)}}">{{ $text->teaster }}</a></td>
                </tr>
            @endforeach
        </table>
    </body>
</html>

