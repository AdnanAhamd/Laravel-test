<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Bootstrap Table</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styling for the table */
        .table-container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }
        .table-title {
            text-align: center;
            margin-bottom: 20px;
            color: #495057;
            font-weight: 600;
            font-size: 1.5rem;
        }
        .table-custom th {
            background-color: #343a40;
            color: white;
        }
        .table-custom tbody tr {
            transition: background-color 0.3s;
        }
        .table-custom tbody tr:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>

<div class="container mt-5 table-container">
    <h2 class="table-title">Articles Table</h2>
    <table class="table table-striped table-custom">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Author Name</th>
                <th scope="col">Title</th>
                <th scope="col">Article</th>
                <th scope="col">Delets</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post as $posts)
            <tr>
                <td>{{$posts->id}}</td>
                <td>{{$posts->auther_name}}</td>
                <td>{{$posts->auther_title}}</td>
                <td>{{$posts->auther_post}}</td>
                <td><form action="{{url('/delete'. $posts->id)}}">
                          <input type="submit" value="Delete Post" />
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
