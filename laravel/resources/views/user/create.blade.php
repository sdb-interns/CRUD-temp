<x-layout>
    <x-slot name="title">
        ユーザー作成ページ
    </x-slot>
    <form action="{{route('user.store')}}" method="post">
        @csrf
{{--        todo:csrfトークンについて理解--}}
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">名前</label>
            <input type="text" class="form-control" id="exampleInputName" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">メールアドレス</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">パスワード</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary">登録</button>
    </form>
</x-layout>
