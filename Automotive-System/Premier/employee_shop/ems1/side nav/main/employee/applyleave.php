
<body bgcolor="#F0FFFF">
	
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Apply Leave Form</h2>
                   
                    <form action="..//process/applyleaveprocess.php?id=<?php echo $id?>" method="POST">

                         
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Reason" name="reason">
                        </div>
						
                        <div class="row row-space">
                            <div class="col-2">
                            	<p>Start Date</p>
                                <div class="input-group">
                                    <input id="firstDate" class="input--style-1" type="date" placeholder="start" name="start">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                            	<p>End Date</p>
                                <div class="input-group">
                                    <input id="secondDate" class="input--style-1" type="date" placeholder="end" name="end">
                                   
                                </div>
                            </div>
                        </div>
                        
                        



                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" >Submit</button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
		
	

</body>
