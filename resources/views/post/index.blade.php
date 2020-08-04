<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    @foreach ($posts as $post)
    
        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="https://i.pinimg.com/236x/d1/22/01/d122010e26f9db122062a9f8b711b39f--photography-women-photography-tutorials.jpg" class="rounded float-left" style="width: 150px ">
               
            </div>
            <div class="card-body card-block px-2">
               
                <h4 class="card-title">{{ $post['title'] }}</h4>
                <p class="card-text">{{ $post['content'] }}</p>
                <div class="card-footer">
                   
                    {{-- {{ dump(collect($post['last_edited'])) }}     --}}

                    
                     <h6> last updated :{{ $post['last_edited']->y }}-year; {{ $post['last_edited']->m }}-month; {{ $post['last_edited']->d }}-days;  ago</h6> 
                   
                </div>
                
                
            </div>
            
        </div>
    @endforeach
   
    
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    
    
    
    
</body>
</html>

