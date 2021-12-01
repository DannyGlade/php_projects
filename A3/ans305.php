<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("p").hide();

        $("#formevent").focus(function() {
            $("#formfoc").show().fadeOut(2000);
        });
        $("#formevent").blur(function() {
            $("#formblur").show().fadeOut(2000);
        });

        $("#formevent").change(function() {
            alert("Content In Input box was Changed.");
        });

        $("form").submit(function() {
            alert("Content Submitted.");
        });
    });
</script>

<body>
    <div class="text-center">
        <h1>Ans 305</h1>
    </div>
    <div class="card w-25 mx-auto">
        <div class="card-title">
            <h3 class="text-center bg-primary p-3">Form Events</h3>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="card-title">
                    <h5 class="text-secondary">Focus, Blur, Change & Submit</h5>
                    <div class="card-text">
                        <form>
                            <p id="formblur">You lost focus from below input.</p>
                            <input type="text" name="" id="formevent" class="form-control">
                            <p id="formfoc">You are Typing in Above Field</p>
                            <br>
                            <input type="submit" value="Submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>