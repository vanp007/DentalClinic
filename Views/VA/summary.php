<?php 
    include"header.php";
 ?>


<div class="container text-center">
	<div class="row text-center my-4">
		<div class="col-12">
			<h1 style="font-weight: bolder; font-size: 50px; color: #03A13B">Daily Summary</h1>
		</div>
	</div>

    <div class="row">
        <div class="col">
            <form method="POST" action="today_summary.php">
                <button class="btn btn-primary w-50" type="submit" name="today_summary">VIEW TODAY'S SUMMARY</button>
            </form>
        </div>
    </div>

    <div class="row"></div><br><br><br><br><br><br>

     <div class="row">
        <div class="col">

        <button class="btn btn-info w-50" type="submit" name="">CUSTOM SUMMARY</button>
        </div>
    </div>

            <form method="POST" action="today_summary">
                <div class="form-row text-center my-4">
                    <div class="col-2"></div>

                    <div class="input-group form-group col-4">
                        <label style="font-weight: bold;">FROM:</label> &nbsp;
                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                <input type="date" class="form-control" name="start_date" required >
            </div>

            <div class="input-group form-group col-4">
                        <label style="font-weight: bold;">TO:</label> &nbsp;
                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                <input type="date" class="form-control" name="end_date" required >
            </div>
        </div>

        <div class="form-row">
        <div class="col">
        <button class="btn btn-success" type="submit" name="submit">Submit</button> &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="/admini" class="btn btn-danger">Cancel</a>
        </div>
    </div>
    </form>

</div>
</body>
</html>