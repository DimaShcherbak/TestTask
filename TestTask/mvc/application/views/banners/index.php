<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <table>
                        <thead></thead>
                    <?php /** @var array $banners */ ?>
                    <?php foreach ($banners as $banner) { ?>
                        <tr>
                            <td><?php echo $banner['id'] ?></td>
                            <td><?php echo $banner['title'] ?></td>
                            <td><a href="banner/edit?id=<?php echo $banner['id'] ?>" title="Edit">Edit</a></td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>