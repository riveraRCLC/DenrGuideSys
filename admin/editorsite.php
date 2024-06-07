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

   <!-- Border -->
   <section id="footer">
            <section>
                <p></p>
            </section>
            <section>
                
            </section>
        </section>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <section id="main" class="main-section" data-section="1">

            <!-- Items Part 1-->
            <div class="items" id="part1">
                <div class="item intro span-2">
                    <h1>D.E.N.R.</h1>
                    <p>Customer Guide Site<br /></p>
                    <button class="addItemButton" data-section="1">Add Frame</button>
                </div>
            </div>  

            <!-- Items Part 2-->
            <div class="items" id="part2">
                <div class="item intro span-2">
                    <button class="addSectionButton">Add Section</button>
                </div>
            </div>
            
        </section>
        
        <!-- Footer -->
        <section id="footer">
            <section>
                <p></p>
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
    var sectionCounter = 1;

    $(document).ready(function() {
        console.log('jQuery is loaded');

        // Use event delegation to handle clicks on dynamically created buttons
        $(document).on('click', '.addItemButton', function() {
            console.log('Add Frame Button clicked');
            var sectionId = $(this).data('section');
            var targetPart = sectionId % 2 === 0 ? '#part2' : '#part1';

            if (counter > 3) {
                counter = 0;
            }

            var frame = $(`
                        <div class="image-container"> <img src="../images/thumbs/09.jpg" alt="Thumbnail">
                            <form action="../includes/formhandler.inc.php" method="post" class="item-form" enctype="multipart/form-data">
                                <input type="text" name="frametitle" placeholder="Enter title" required>
                                <input type="text" name="description" placeholder="Enter description" required>
                                <input type="hidden" name="fileid" value="1">
                                <input type="file" name="media" accept="image/*,video/*,.ppt,.pptx" required>
                                <button type="submit">Save</button>
                            </form>
                        </div>
                        `);

            if (counter % 2 === 0) {
                $(`#main[data-section="${sectionId}"] #part1`).append(frame);
            } else {
                $(`#main[data-section="${sectionId}"] #part2`).append(frame);
            }

            console.log('Counter:', counter);
            counter++;
        });

        $(document).on('click', '.addSectionButton', function() {
            console.log('Add Section Button clicked');
            sectionCounter++;
            var newSection = $(`
                <section id="main" class="main-section" data-section="${sectionCounter}">
                    <!-- Items Part 1-->
                    <div class="items" id="part1">
                        <div class="item intro span-2">
                            <h1>D.E.N.R.</h1>
                            <p>Customer Guide Site<br /></p>
                            <button class="addItemButton" data-section="${sectionCounter}">Add Frame</button>
                        </div>
                    </div>  
                    <!-- Items Part 2-->
                    <div class="items" id="part2">
                        <div class="item intro span-2">
                            <button class="addSectionButton">Add Section</button>
                        </div>
                    </div>
                </section>
            `);
            
            $('#wrapper').append(newSection);

            var divider = $(' <!-- Divider --><section id="footer"><section><p></p></section><section><ul class="icons"></ul><ul class="copyright"></ul></section></section>');
            $('#wrapper').append(divider);
        });
    });
    </script>
</body>
</html>



