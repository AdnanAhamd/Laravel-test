<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Centered Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional styling for the form box */
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            background-color: #f8f9fa;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            color: #495057;
        }
        .btn-submit {
            width: 100%;
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="form-container">
        <h2>Submit Your Post</h2>
        <form action="{{url('/storedata')}}"  method="POST">
            @csrf
            <div class="mb-3">
                <label for="authorName" class="form-label">Author Name</label>
                <input type="text" name="auther_name" class="form-control" id="authorName" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="postTitle" class="form-label">Post Title</label>
                <input type="text" name="auther_title" class="form-control" id="postTitle" placeholder="Enter the post title">
            </div>
            <div class="mb-3">
                <label for="postTitle" class="form-label">Post Artical</label>
                <textarea type="text" name="auther_post" class="form-control" id="postTitle" placeholder="Enter the post title"></textarea>
            </div>
            <button type="submit" class="btn btn-submit">Submit</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</body>
</html>