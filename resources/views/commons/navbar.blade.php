<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">Task List</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">

                @if (Auth::check())
                    {{-- タスク作成ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('tasks.create', '新規タスクの登録', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログアウトのリンク --}}
                    <li class="nav-item">{!! link_to_route('logout.get', '[ ログアウト ]', [], ['class' => 'nav-link']) !!}</li>
                @else
                    {{-- ログインのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                    {{-- 新規登録のリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get', '新規ユーザー登録', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>