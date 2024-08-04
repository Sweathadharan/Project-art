<div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Art Categories</h1>
                        
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Spotlight </button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>
			
            <div class="row special-list">
			<?php list_product_categories("nothing");?>
			</div>
        </div>
    </div>