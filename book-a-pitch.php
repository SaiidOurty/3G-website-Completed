<?php
@ob_start();
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

    <script>delete

            $(document).ready(function () {
                var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    events: 'load.php',
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        $('#bookingModal').modal('show'); //display booking form
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                        $("#bookingModal input[name='start_date']").val(start);
                        $("#bookingModal input[name='end_date']").val(end);
                    },
                    editable: true,
                    eventResize: function (event) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                        var start_time = $.fullCalendar.formatDate(event.start_time, "HH:mm:ss");
                        var end_time = $.fullCalendar.formatDate(event.end_time, "HH:mm:ss");
                        var title = event.title + ' - ' + start_time + ' to ' + end_time;
                        var id = event.id;
                        $.ajax({
                            url: "update.php",
                            type: "POST",
                            data: {title: title, start: start, end: end, id: id, start_time: start_time, end_time: end_time},
                            success: function () {
                                calendar.fullCalendar('refetchEvents');
                                alert('Event Update');
                            }
                        })
                    },

                    eventClick: function (event) {
                        if (confirm("Are you sure you want to remove it?")) {
                            var id = event.id;
                            $.ajax({
                                url: "delete-booking.php",
                                type: "POST",
                                data: {id: id},
                                success: function () {
                                    calendar.fullCalendar('refetchEvents');
                                    alert("Booking Removed");
                                }
                            })
                        }
                    },
                });
            });
    </script>
</head>
<body>
<br/>
<div class="container has-topbar-margin">
    <?php $is_fixed = true; ?>
    <?php include 'partials/menu.php'; ?>
    <div id="calendar"></div>
</div>
<?php if (isset($_SESSION['email_address'])) : ?>
<div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Book a Pitch</h2>
                            <form method="POST" action="insert-booking.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title"
                                           placeholder="Title" required value=""/>
                                </div>
                                <?php include 'partials/pitch-results.php'; ?>
                                <div class="form-group">
                                    <!--                                    <label>Start date</label>-->
                                    <input type="text" class="form-control" hidden name="start_date"
                                           placeholder="Start Date" required value=""/>
                                </div>
                                <div class="form-group">
                                    <!--                                    <label>End date</label>-->
                                    <input type="text" class="form-control" hidden name="end_date"
                                           placeholder="End Date" required value=""/>
                                </div>
                                <div class="form-group">
                                    <label>Start time</label>
                                    <select class="form-control" id="start_time" name="start_time">
                                        <option value="10:00:00">10:00</option>
                                        <option value="11:00:00">11:00</option>
                                        <option value="12:00:00">12:00</option>
                                        <option value="13:00:00">13:00</option>
                                        <option value="14:00:00">14:00</option>
                                        <option value="15:00:00">15:00</option>
                                        <option value="16:00:00">16:00</option>
                                        <option value="17:00:00">17:00</option>
                                        <option value="18:00:00">18:00</option>
                                        <option value="19:00:00">19:00</option>
                                        <option value="20:00:00">20:00</option>
                                        <option value="21:00:00">21:00</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>End time</label>
                                    <select class="form-control" id="end_time" name="end_time">
                                        <option value="11:00:00">11:00</option>
                                        <option value="12:00:00">12:00</option>
                                        <option value="13:00:00">13:00</option>
                                        <option value="14:00:00">14:00</option>
                                        <option value="15:00:00">15:00</option>
                                        <option value="16:00:00">16:00</option>
                                        <option value="17:00:00">17:00</option>
                                        <option value="18:00:00">18:00</option>
                                        <option value="19:00:00">19:00</option>
                                        <option value="20:00:00">20:00</option>
                                        <option value="21:00:00">21:00</option>
                                        <option value="10:00:00">10:00</option>
                                    </select>
                                </div>
                                <!-- Gets user logged in ID to insert into booking table-->
                                <?php
                                if (isset($_SESSION['email_address'])) :
                                    $email_session = $_SESSION['email_address'];

                                    include 'db-config.php'; // loading db config file

                                    // Running SQL query to check if user email and password exist in the database
                                    $query = mysqli_query($con, "SELECT user_id FROM users where email_address = '$email_session'")
                                    or die(mysqli_connect_error());
                                    $result = mysqli_fetch_array($query) or die
                                    (mysqli_connect_error());
                                    $user_id = $result['user_id'];//logged in user ID
                                    ?>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user_id"
                                               placeholder="User" required hidden value="<?php echo
                                        $user_id; ?>"/>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <input type="submit" name="book" class="btnSubmit"
                                           value="Submit"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php include 'partials/footer-main.php'; ?>
</body>
</html>
