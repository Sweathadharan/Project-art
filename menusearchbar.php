<div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"></span>
				<div class="search-product">
				<form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
										<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                    
										</div>    
                 </form></div>
				 <span class="input-group-addon close-search"><i class="fa fa-times-circle"></i></span>
            </div>
        </div>
    </div>