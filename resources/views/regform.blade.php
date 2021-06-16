<h1>User Registration</h1>

<form action="user"method="post">
    @csrf
    <input type="text" name="username"placeholder="username"required ><br>
    <span style="color:red">@error('username'){{$messege}}@enderror</span><br><br>
    <input type="email" name="usermail"placeholder="Email"required ><br>
    <span style="color:red">@error('usermail'){{$messege}}@enderror</span><br><br>
    <input type="password" name="password"placeholder="password"required ><br>
    <span style="color:red">@error('password'){{$messege}}@enderror</span><br><br>
    <button type="submit">Registration</button>
</form>