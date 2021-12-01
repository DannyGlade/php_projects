<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#msg").html("Hello World!...");

        $("#popmsg").click(function() {
            alert("Hello World!...");
        });
    });
</script>

<body>
    <div class="text-center">
        <h1>Ans 301</h1>
    </div>
    <div class="card w-50 mx-auto">
        <div class="card-title">
            <h3 class="text-center bg-primary p-3">This is Hello world by jQuary</h3>
        </div>
        <div class="card-body">
            <div class="card-text" id="msg"></div>
            <div class="card-text" id="popmsg">Click Here to See Popup Hello World.</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>