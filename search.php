<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Watches</title>
    <link href="https://unpkg.com/boxicons/css/boxicons.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            border-radius: 4px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
        }

        #searchMenu {
            margin-top: 10px;
        }

        #searchMenu label {
            font-size: 16px;
            margin-right: 10px;
        }

        #searchMenu button {
            padding: 5px 10px;
            background-color: #45DEF1;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }

        #searchMenu button:hover {
            background-color: #2CA9C9;
        }

        #ticketDetails {
            margin-top: 10px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <a href="javascript:void(0);" id="searchLink">
        <box-icon name='search' class="icon" color="white"></box-icon><span>Search</span>
    </a>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="searchMenu">
                <label for="trainIdInput">Enter Search ID:</label>
                <input type="text" id="trainIdInput" placeholder="Enter Search ID">
                <button id="submitSearch">Submit</button>
                <div id="ticketDetails"></div>
            </div>
        </div>
    </div>

    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            var modal = $('#myModal');
            var span = $('.close');

            $('#searchLink').click(function() {
                modal.show();
                $('#trainIdInput').focus();
            });

            span.click(function() {
                modal.hide();
            });

            $(window).click(function(event) {
                if (event.target.id === 'myModal') {
                    modal.hide();
                }
            });

            $('#submitSearch').click(function() {
                var searchId = $('#trainIdInput').val().trim();

                if (searchId === "") {
                    alert('Please enter a Search ID.');
                    return;
                }

                $.ajax({
                    url: 'search.xml',
                    dataType: 'xml',
                    success: function(data) {
                        var searchesFound = false;
                        $('#ticketDetails').empty();

                        $(data).find('search').each(function() {
                            var searchID = $(this).find('id').text();
                            if (searchID === searchId) {
                                searchesFound = true;
                                var name = $(this).find('name').text();
                                var price = $(this).find('price').text();
                                var link = $(this).find('link').text();
                                $('#ticketDetails').append('<p>Name: ' + name + ', Price: ' + price + '</p>');
                                $('#ticketDetails').append('<a href="' + link + '">View Details</a>');
                            }
                        });

                        if (!searchesFound) {
                            $('#ticketDetails').append('<p>No searches found for the specified ID.</p>');
                        }
                    },
                    error: function() {
                        alert('Error fetching data.');
                    }
                });
            });
        });
    </script>
</body>

</html>