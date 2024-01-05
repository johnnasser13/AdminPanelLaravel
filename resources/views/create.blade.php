<form action="/create" method="POST">
    @csrf
    <label for="id">ID:</label>
    <input type="text" name="id"></br>
    <label for="full_name">Full Name:</label>
    <input type="text" name="full_name"></br>
    <label for="phone_number">Phone Number:</label>
    <input type="text" name="phone_number"></br>
    <label for="email">Email:</label>
    <input type="text" name="email">
    <button> Send </button>
</form>
