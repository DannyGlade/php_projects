<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#clickafter1").hide();
        $("#clickafter2").hide();
        $("#clickafter3").hide();
        $("#clickafter4").hide();

        $("#clickevent1").click(function() {
            $("#clickafter1").show();
        });

        $("#clickevent2").dblclick(function() {
            $("#clickafter2").show();
        });

        $("#clickevent3").hover(function() {
            $("#clickafter3").show();

        }, function() {
            // out
        });

        $("#clickevent4").mouseenter(function() {
            $("#clickafter4").show();
        });

        $("#clickevent4").mouseleave(function() {
            $("#clickafter4").addClass("bg-primary");
        });
    });
</script>

<body>
    <div class="text-center">
        <h1>Ans 303</h1>
    </div>
    <div class="card w-25 mx-auto">
        <div class="card-title">
            <h3 class="text-center bg-primary p-3">Mouse Events</h3>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h5 class="text-secondary" id="clickevent1">Click Event</h5>
            </div>
            <div class="card-text">
                <p id="clickafter1">This appaered because you clicked on the heading</p>
            </div>
            <div class="card-title">
                <h5 class="text-secondary" id="clickevent2">Double Click</h5>
            </div>
            <div class="card-text">
                <p id="clickafter2">This appaered because you Double clicked on the heading</p>
            </div>
            <div class="card-title">
                <h5 class="text-secondary" id="clickevent3">Hover</h5>
            </div>
            <div class="card-text">
                <p id="clickafter3">This appaered because you clicked on the heading</p>
            </div>
            <div class="card-title">
                <h5 class="text-secondary" id="clickevent4">Mouse Enter & Leave</h5>
            </div>
            <div class="card-text">
                <p id="clickafter4">This appaered because you entered on the heading and turned bg blue cause you left the heading.</p>
            </div>
        </div>
    </div>
</body>