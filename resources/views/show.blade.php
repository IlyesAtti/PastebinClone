<!DOCTYPE html>

<html>
    <head>
        <title>Post</title>
        <link rel="stylesheet" href="{{url('CSS/custom.css')}}"/>
    </head>
    
    <body>
        <h1>Post</h1>
        <p>{{ $post->text }}</p>
        <button onclick="goBack()" class="btn btn-primary">Back</button>
    </body>
</html>
<script>
    function goBack() {
      window.history.back();
    }
</script>