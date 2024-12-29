<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script
        src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script>
    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
</head>

<body>
    <div id="example-table"></div>
    <script>
       const menu = JSON.parse(localStorage.getItem("userMenu"));
       menu.map()
       console.log(menu)
        var table = new Tabulator("#example-table", {
            //height: "311px",
            data: menu,
            pagination: "local", //paginate the data
        paginationSize: 10, //allow 15 rows per page of data
        paginationCounter: "rows", //display count of paginated rows in footer
        paginationSizeSelector: [15, 20, 30, 50],
        dataTree: true,
        dataTreeStartExpanded: true,
        movableColumns: true,
        layout: "fitDataTable",
            columns: [{
                    title: "",
                    field: "name",
                    responsive: 0
                }, //never hide this column
                {
                    title: "",
                    field: "location",
                    width: 85
                },
            ],
        });

        
    </script>
</body>

</html>