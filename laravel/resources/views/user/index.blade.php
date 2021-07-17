<x-layout>
    <x-slot name="title">
        ユーザー一覧
    </x-slot>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thread>
                <tr>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
            </thread>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('user.edit',$user->id)}}"><button class="btn btn-success">編集</button></a></td>
                    <td>
                        <form action="{{route('user.delete',$user->id)}}" method="post">@csrf @method('DELETE')<button class="btn btn-danger">削除</button></form></td>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    <div class="text-center">
        <a href="{{route('user.create')}}"><button class="btn btn-primary">新規登録</button></a>
    </div>
</x-layout>
{{--todo:コンポーネントの理解--}}
