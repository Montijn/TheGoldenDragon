@include('layouts.header')

<div id="loginDiv">
    <form action="{{route('login')}}" method="POST">
        @csrf
        <input type="number" name="employee_Nr" placeholder="Medewerker Nummer" min="1"><br>
        <input type="password" name="password" placeholder="Wachtwoord"><br>
        <input type="submit" value="inloggen"><br>
    </form>
</div>

<?php
if(isset($_SESSION['login_error'])){
    echo("<div class='errorMessage'>".$_SESSION['login_error']."</div>");
}
?>
