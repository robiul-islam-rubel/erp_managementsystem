<h1>Add Advertisement</h1>

<form method="POST" action="{{url('addadvertisement')}}">
    @csrf
    <input type="text" name="title1" placeholder="Title" style="height: 30px;width:400px">
    <input type="text" name="title2" placeholder="Title2" style="height: 30px;width:400px">
    <textarea name="add_desc" placeholder="enter your adversitement" rows="5"></textarea>
    <button type="submit">Add Advertisement</button>
</form>