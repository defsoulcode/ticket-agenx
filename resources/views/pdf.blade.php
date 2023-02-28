<!DOCTYPE html>
<html lang="en">

<body>
    <div>
        <h1>Music Concert - agent X</h1>
        <hr>
        <hr> <br>
        <small>TICKET NUMBER</small>
        <h2>{{ $ticket->number }}</h2>
        <hr> <br>
        <small>NAME</small>
        <h2>{{ $ticket->nama }}</h2>
        <hr> <br>
        <small>DATE/TIME</small>
        <h2>6 PM, 4 March 2023</h2>
        <hr> <br>
        <small>VENUE</small>
        <h2>The Kasablanka, South Jakarta</h2>
        <hr> <br>
        <small>ORDERED AT</small>
        <h3>{{ $ticket->created_at }}</h3>
    </div>
</body>

</html>
