<div class="w-50 px-4 mb-4">
    <form method="post" action="{{ isset($account) ? route('posts.update', ['post' => $account->_id]) : route('posts.store') }}">
        @csrf
        @isset($account)
            @method('PATCH')
        @endisset
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$account->email ?? old('email')}}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="{{$account->password ?? old('password')}}">
        </div>
        <button type="submit" class="btn btn-primary">
            @isset($account)
               Update
            @else
                Submit
            @endisset
        </button>
    </form>
</div>

