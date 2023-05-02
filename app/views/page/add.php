<?php /** @var TYPE_NAME $data */ ?>
<?php require APPROOT . "/views/inc/header.php"; ?>
<?php //require APPROOT . "/views/inc/navbar.php"; ?>
    <div class="container" style="margin-top: 4rem;">
        <a href="<?php echo URLROOT ?>/page/menu" class="btn btn-primary mb-4"><i class="fa fa-arrow-left"></i> View all menu items</a>
        <div class="card card-body">
            <h2 style="margin-top: 4rem;">Add Menu Item</h2>
            <?php flash("item_message"); ?>
            <form action="<?php echo URLROOT; ?>/menu/add" method="POST">
                <div class="form-group mb-3">
                    <label for="item_name">Item Name: <sup>*</sup></label>
                    <input type="text" name="item_name" id="item_name" class="form-control form-control-lg <?php echo (!empty($data["item_name_error"])) ? "is-invalid" : ""; ?>" value="<?php echo $data["item_name"]; ?>">
                    <span class="invalid-feedback" style="color: red !important; font-weight: bold !important;"><?php echo $data["item_name_error"]; ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="item_category">Item Category: <sup>*</sup></label>
                    <input type="text" name="item_category" id="item_category" class="form-control form-control-lg <?php echo (!empty($data["item_category_error"])) ? "is-invalid" : ""; ?>" value="<?php echo $data["item_category"]; ?>">
                    <span class="invalid-feedback" style="color: red !important; font-weight: bold !important;"><?php echo $data["item_category_error"]; ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="item_price">Item Price: <sup>*</sup></label>
                    <input type="text" name="item_price" id="item_price" class="form-control form-control-lg <?php echo (!empty($data["item_price_error"])) ? "is-invalid" : ""; ?>" value="<?php echo $data["item_price"]; ?>">
                    <span class="invalid-feedback" style="color: red !important; font-weight: bold !important;"><?php echo $data["item_price_error"]; ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="item_description">Description: <sup>*</sup></label>
                    <textarea name="item_description" id="item_description" class="form-control form-control-lg <?php echo (!empty($data["item_description_error"])) ? "is-invalid" : ""; ?>"><?php echo $data["item_description"]; ?></textarea>
                    <span class="invalid-feedback" style="color: red !important; font-weight: bold !important;"><?php echo $data["item_description_error"]; ?></span>
                </div>
                <input type="submit" value="Submit" class="btn btn-secondary" style="margin-bottom: 4rem;">
            </form>
        </div>
    </div>
<?php require APPROOT . "/views/inc/footer.php"; ?>