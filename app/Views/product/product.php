<?php $this->layout(config('view.layout')) ?>
<?php $this->start('page') ?>
    <div class="section mt-70">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-50">
                    <h3 style="text-align: center;">List of Products</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12" id="product-list">
                    <?php $this->insert('product/product-list',[
                        'items'=>$items,
                        'paginator'=>$paginator
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
<?php $this->stop(); ?>