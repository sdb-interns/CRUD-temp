<x-layout>
    <x-slot name="title">
        ユーザー作成ページ
    </x-slot>
    <form action="{{route('post.store')}}" method="post">
        @csrf
{{--        todo:csrfトークンについて理解--}}
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">投稿名</label>
            <input type="text" class="form-control" id="exampleInputName" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">テキスト</label>
            <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" name="text">
        </div>
        <div class="mb-3">
            <label for="exampleInputUser" class="form-label">ユーザーを選択する</label>
            <select id="exampleInputUser" name="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">登録</button>
    </form>
</x-layout>
