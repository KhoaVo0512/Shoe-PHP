
<div class="product-list list">
    <table class="table table-striped table-hover">
        <thead>
            <tr style="text-align:center;">
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Brand</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Discount</th>
                <th scope="col">Image 1</th>
                <th scope="col">Image 2</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $start = ($paginator->currentPage() - 1) * $paginator->perPage() + 1; ?>
            <?php foreach ($items as $item) : ?>
                <tr >
                    <th scope="row"><?= $start++; ?></th>
                    <td><?= $item->id; ?></td>
                    <td><?= $item->brands->name_brand; ?></td>
                    <td><?= $item->name; ?></td>
                    <td><?= $item->price; ?></td>
                    <td><?= $item->discount; ?></td>
                    <td><?= $item->image_1; ?></td>
                    <td><?= $item->image_2; ?></td>
                    <td >
                        <a class="remove-item delete-product" href="<?= request()->baseUrl() ?>/admin/product_list/delete" 
                        data-id="<?= $item->id ?>" 
                        title="Delete <?= $item->name ?>" data-name="<?= $item->name ?>" data-return-url="<?= request()->fullUrl(); ?>" >
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Hiển thị phân trang bên dưới bảng -->
<div class="pagination">
    <?= $this->insert('partials/pagination', ['paginator' => $paginator]); ?>
</div>
<?= $this->insert('product/product-delete-modal'); ?>
