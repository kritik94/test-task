<h1>Transfer form</h1>
<a href="/balances">Back</a>
<hr>

@if (session('status'))
    <div style="color: red; font-size: 20px;">{{ session('status') }}</div>
    <hr>
@endif

<form action="/balances/transfer", method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <label for="from">From:</label>
    <select id="from" name="from">
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    
    <label for="to">To:</label>
    <select id="to" name="to">
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    
    <label for="amount">Amount:</label>
    <input type="number" id="amount" name="amount" step="0.01">

    <button type="submit">Make transfer</button>
</form>
