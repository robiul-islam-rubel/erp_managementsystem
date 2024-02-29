<h1>Add Advertisement</h1>

<form method="POST" action="{{url('addadvertisement')}}">
    @csrf
    <textarea name="advertisement" placeholder="enter your adversitement"></textarea>
    <button type="submit">Add Advertisement</button>
</form>