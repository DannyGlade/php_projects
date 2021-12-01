<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#gbtn").click(function() {
            var gottxt = $("#gtxt").val();
            $("#stxt").html(gottxt);
        });
    });
</script>

<body>
    <div class="text-center">
        <h1>Ans 313</h1>
    </div>
    <div class="card w-25 mx-auto">
        <div class="card-title">
            <h3 class="text-center bg-primary p-3">Get & Set Content</h3>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="card-title">
                    <h5 class="text-secondary">Get</h5>
                    <div class="card-text">
                        <input type="text" id="gtxt" class="form-control">
                        <br>
                        <button class="btn btn-primary" id="gbtn">Get & Set text</button>
                    </div>
                </div>
                <div class="card-title">
                    <h5 class="text-secondary">Set</h5>
                    <div class="card-text">                                                
                        <p>The Value You entered is => <span id="stxt"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>