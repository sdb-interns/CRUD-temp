<x-layout>
    <x-slot name="title">
        ユーザー一覧
    </x-slot>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thread>
                <tr>
                    <th>題名</th>
                    <th>内容</th>
                    <th>作者名</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
            </thread>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->name}}</td>
                    <td>{{$post->text}}</td>
                    <td>{{$post->user->name}}</td>
                    <td><a href="{{route('post.edit',$post->id)}}"><button class="btn btn-success">編集</button></a></td>
                    <td>
                        <form action="{{route('post.delete',$post->id)}}" method="post">@csrf @method('DELETE')<button class="btn btn-danger">削除</button></form></td>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    <div class="text-center">
        <a href="{{route('post.create')}}"><button class="btn btn-primary">新規登録</button></a>
    </div>
</x-layout>
{{--todo:コンポーネントの理解--}}
