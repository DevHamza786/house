<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Preview</title>
    <!-- Bootstrap CSS -->
    <style>
        /* Add any necessary styles for printing */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table,
        .table th,
        .table td {
            border: 1px solid black;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: left;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

@if (!empty($columnsOrdered))
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                @foreach ($columnsOrdered as $column)
                    <th>{{ $columns[$column] }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($entries as $entry)
                <tr>
                    <td>{{ $i++ }}</td>
                    @foreach ($columnsOrdered as $column)
                        <td>{{ $entry->{$column} }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No columns selected.</p>
@endif

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
