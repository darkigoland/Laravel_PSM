<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Book Form</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
    
    <form method="post" action="{{ route('savelogbook')}}" enctype="multipart/form-data">

        <fieldset>
            <legend>Log Book</legend>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br>

            <label for="studentid">Student ID:</label>
            <input type="text" id="studentid" name="studentid"><br>

            <label for="title">Project Title:</label>
            <input type="text" id="title" name="title"><br>

            <label for="meetdate">Meeting Date:</label>
            <input type="date" id="meetdate" name="meetdate"><br>

            <label for="starttime">Meeting Time:</label>
            <input type="time" id="starttime" name="starttime" value="Start">
            <input type="time" id="endtime" name="endtime" value="End"><br>

            <label for="progress">Current Progress:</label>
            <textarea id="progress" rows="4" cols="50" ></textarea><br>

            <label for="details">Discussion Detail:</label>
            <textarea id="details" rows="4" cols="50" ></textarea><br>

            <label for="plan">Plan after Discussion:</label>
            <textarea id="plan" rows="4" cols="50" ></textarea><br>

            <input type="submit" value="Save">
        </fieldset>
    </form>

</body>
</html>