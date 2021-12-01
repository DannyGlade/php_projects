<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#ani").click(function() {
            var div = $("#box");

            div.animate({
                height: '150px'
            }, "slow");
            div.animate({
                width: '150px'
            }, "slow");
            div.animate({
                height: '50px'
            }, "slow");
            div.animate({
                width: '50px'
            }, "slow");
        });
    });
</script>

<body>
    <div class="text-center">
        <h1>Ans 309</h1>
    </div>
    <div class="card w-25 mx-auto">
        <div class="card-title">
            <h3 class="text-center bg-primary p-3">Animation With Jquery</h3>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="card-title">
                    <h5 class="text-secondary">Animation</h5>
                    <div class="card border-none">
                        <div class="card-text" style="height: 200px;">
                            <div class="bg-warning" style="height:50px;width:50px;position:absolute;top:0;left:0;" id="box">

                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" id="ani">Start Animation</button>
                </div>
            </div>
        </div>
    </div>
</body>