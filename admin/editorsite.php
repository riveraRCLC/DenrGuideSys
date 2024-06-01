<!DOCTYPE HTML>
<html>
<head>
    <title>Parallelism by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <section id="main">

            <!-- Items Part 1-->
            <div class="items" id="part1">
                <div class="item intro span-2">
                    <h1>D.E.N.R.</h1>
                    <p>Customer Guide Site<br /></p>
                    <button id="addItemButton">Add Frame</button>
                </div>
                
            </div>  

            <!-- Items Part 2-->
            <div class="items" id="part2">
            <div class="item intro span-2">
            <button id="addSectionButton">Add Section</button>
                </div>
            </div>
            
        </section>

        <!-- Divider -->
        <section id="footer">
            <section>
                <p>           </p>
            </section>
            <section>
                <ul class="icons">
                </ul>
                <ul class="copyright">
                </ul>
            </section>
        </section>

    </div>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.poptrox.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>

    <!-- Custom Script -->
    <script>
    var counter = 0;

    $(document).ready(function() {
        console.log('jQuery is loaded');

        // Use event delegation to handle clicks on dynamically created buttons
        $(document).on('click', '#addItemButton', function() {
            console.log('Button clicked');
            
            if (counter > 7) {
                counter = 0;
            }

            var firstLane1 = $('<div class="image-container"><img src="../images/thumbs/01.jpg" alt="Thumbnail"><form action="../includes/formhandler.inc.php" method="post" class="item-form"><input type="text" name="frametitle" placeholder="Enter title" required><input type="text" name="description" placeholder="Enter description" required><input type="hidden" name="fileid" value="1"><button type="submit">Save</button></form></div> <button id="addItemButton">Add Frame</button>');
            var firstLane2 = $('<div class="image-container"><img src="../images/thumbs/01.jpg" alt="Thumbnail"><form action="../includes/formhandler.inc.php" method="post" class="item-form"><input type="text" name="frametitle" placeholder="Enter title" required><input type="text" name="description" placeholder="Enter description" required><input type="hidden" name="fileid" value="1"><button type="submit">Save</button></form></div> <button id="addItemButton">Add Frame</button>');
            var firstLane3 = $('<div class="image-container"><img src="../images/thumbs/01.jpg" alt="Thumbnail"><form action="../includes/formhandler.inc.php" method="post" class="item-form"><input type="text" name="frametitle" placeholder="Enter title" required><input type="text" name="description" placeholder="Enter description" required><input type="hidden" name="fileid" value="1"><button type="submit">Save</button></form></div> <button id="addItemButton">Add Frame</button>');
            var secondLane1 = $('<div class="image-container"><img src="../images/thumbs/01.jpg" alt="Thumbnail"><form action="../includes/formhandler.inc.php" method="post" class="item-form"><input type="text" name="frametitle" placeholder="Enter title" required><input type="text" name="description" placeholder="Enter description" required><input type="hidden" name="fileid" value="1"><button type="submit">Save</button></form></div> <button id="addItemButton">Add Frame</button>');
            var secondLane2 = $('<div class="image-container"><img src="../images/thumbs/01.jpg" alt="Thumbnail"><form action="../includes/formhandler.inc.php" method="post" class="item-form"><input type="text" name="frametitle" placeholder="Enter title" required><input type="text" name="description" placeholder="Enter description" required><input type="hidden" name="fileid" value="1"><button type="submit">Save</button></form></div> <button id="addItemButton">Add Frame</button>');
            var secondLane3 = $('<div class="image-container"><img src="../images/thumbs/01.jpg" alt="Thumbnail"><form action="../includes/formhandler.inc.php" method="post" class="item-form"><input type="text" name="frametitle" placeholder="Enter title" required><input type="text" name="description" placeholder="Enter description" required><input type="hidden" name="fileid" value="1"><button type="submit">Save</button></form></div> <button id="addItemButton">Add Frame</button>');

            if (counter == 0) {
                $('#part1').append(firstLane1);
            } else if (counter == 1) {
                $('#part2').append(secondLane3);
            } else if (counter == 2) {
                $('#part1').append(firstLane2);
            } else if (counter == 3) {
                $('#part2').append(secondLane1);
            } else if (counter == 4) {
                $('#part1').append(firstLane1);
            } else if (counter == 5) {
                $('#part2').append(secondLane2);
            } else if (counter == 6) {
                $('#part1').append(firstLane3);
            } else if (counter == 7) {
                $('#part2').append(secondLane1);
            } 

            console.log('Counter:', counter);
            counter++;
        });

        $(document).on('click', '#addSectionButton', function() {
            console.log('Button clicked');
          
            var firstLane1 = $('<section id="main" > <!-- Items Part 1--><div class="items" id="part1"><div class="item intro span-2"><h1>D.E.N.R.</h1><p>Customer Guide Site<br /></p><button id="addItemButton">Add Frame</button></div></div> <!-- Items Part 2--><div class="items" id="part2"><div class="item intro span-2"><button id="addSectionButton">Add Section</button></div></div> </section>');
            var divider = $(' <!-- Divider --><section id="footer"><section><p></p></section><section><ul class="icons"></ul><ul class="copyright"></ul></section></section>');
            $('#wrapper').append(firstLane1);
            $('#wrapper').append(divider);
        });

        

    });


</script>
</body>
</html>
