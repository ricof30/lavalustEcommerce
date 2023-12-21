<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add Product</h2>
        <form action="<?= site_url('add_product'); ?>" method="post" enctype="multipart/form-data">
            <!-- Product Name -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <!-- Product Description -->
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <!-- Product Price -->
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>
            <!-- Product Image -->
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>

            <!-- Product Quantity -->
            <div class="form-group">
                <label for="quantity">Stocks:</label>
                <input type="number" class="form-control" id="quantity" name="stocks" required>
            </div> 

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and jQuery for form validation (if needed) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



