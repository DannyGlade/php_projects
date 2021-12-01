<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    i = 0;
    $(document).ready(function() {
        $("#kbevent1").keydown(function() {
            $("#kbevent1").addClass("bg-success");
        });
        $("#kbevent1").keyup(function() {
            $("#kbevent1").removeClass("bg-success");

        });

        $("#kbevent2").keypress(function() {
            i++;
            msg = "You clicked " + i + " Times";        
            $("span").html(msg);
        });
    });
</script>

<body>
    <div class="text-center">
        <h1>Ans 304</h1>
    </div>
    <div class="card w-25 mx-auto">
        <div class="card-title">
            <h3 class="text-center bg-primary p-3">Keyboard Events</h3>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="card-title">
                    <h5 class="text-secondary">Keydown & Keyup</h5>
                    <div class="card-text">
                        <input type="text" class="form-control" id="kbevent1">
                        Enter text above and it will turn green while you press any key in Keyboard
                    </div>

                    <h5 class="text-secondary" id="kbevent2">Keypress</h5>
                    <div class="card-text">
                        <input type="text" class="form-control" id="kbevent2">
                        <p>Keypresses : <span></span></p>
                        By entering text above counter will go up.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>