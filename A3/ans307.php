<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#fout").click(function() {
            $("#sberry").fadeOut(1000);
        });
        $("#fin").click(function() {
            $("#sberry").fadeIn(500);
        });
        $("#ft").click(function() {
            $("#kiwi").fadeToggle(500);
        });
        $("#fto").click(function() {
            $("#kiwi").fadeTo(500, 0.5);
        });
    });
</script>

<body>
    <div class="text-center">
        <h1>Ans 307</h1>
    </div>
    <div class="card w-25 mx-auto">
        <div class="card-title">
            <h3 class="text-center bg-primary p-3">Fade in, Fade out , Fade toggle & Fade to</h3>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="card-title">
                    <h5 class="text-secondary">Fade In & Fade Out</h5>
                    <div class="card-text">
                        <div class="text-center">
                            <img src="StrawB.jpg" id="sberry" class="rounded" alt="No image found" width="150">
                        </div>
                        <br>
                        <button class="btn btn-success" id="fin">Fade In</button>
                        <button class="btn btn-danger" id="fout">Fade Out</button>
                    </div>
                </div>
                <div class="card-title">
                    <h5 class="text-secondary">Fade Toggle & Fade To</h5>
                    <div class="card-text">
                        <div class="text-center">
                            <img src="kiwi-fruit.jpg" id="kiwi" class="rounded" alt="No image found" width="150">
                        </div>
                        <br>
                        <button class="btn btn-primary" id="ft">Fade Toggle</button>
                        <button class="btn btn-secondary" id="fto">Fade To</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>