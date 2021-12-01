<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#rele").click(function() {
            $("#ele").remove();
        });
        $("#ratr").click(function() {
            $("#ele2").removeAttr("style");
        });
    });
</script>

<body>
    <div class="text-center">
        <h1>Ans 315</h1>
    </div>
    <div class="card w-25 mx-auto">
        <div class="card-title">
            <h3 class="text-center bg-primary p-3">Remove Element And Attribute</h3>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="card-title">
                    <h5 class="text-secondary">Remove Element</h5>
                    <div class="card-text">
                        <h6><a href="#" id="ele" style="color:black;text-decoration:none;">This is A H6 Element With Bootstrap Style and hyperlink</a></h6>
                        <br>
                        <button class="btn btn-danger" id="rele">Remove Element</button>
                    </div>
                </div>
                <div class="card-title">
                    <h5 class="text-secondary">Remove Attribute</h5>
                    <div class="card-text">
                        <h6><a href="#" id="ele2" style="color:black;text-decoration:none;"> is A H6 Element With Bootstrap Style and hyperlink</a></h6>
                        <br>
                        <button class="btn btn-danger" id="ratr">Remove Attribute</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>