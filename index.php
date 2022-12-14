<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;700&display=swap" rel="stylesheet">
    <?php 
        // forces browser to load new css file when it has been changed.
        // for testing purposes. only works on dev computer. 
        $filename = 'styles.css';
        $filemodified = substr(md5(filemtime($filename)), 0,6);
    ?>
    <link rel="stylesheet" href="<?php echo $filename;?>?v=<?php echo $filemodified;?>">
    <title>CardsQL</title>
</head>
<body>
    
    <?php readfile('header.html');?>
    <main>
        <!-- <form action="logic.php" method="post"> -->
        <form action="logic.php" method="post" target="hiddenframe">
            <!-- <label> -->
                <!-- Select Subject: -->
                <!-- <select name="subject" id="subject"> -->
                    <!-- <option value=""></option> -->
                    <!-- <option value="test" selected>test</option> -->
                <!-- </select> -->
            <!-- </label>--or-- -->
            <!-- <a href="#">+ New Subject</a> -->
            <textarea name="front" id="front" placeholder="Front of card" cols="30" rows="10" required></textarea>
            <!-- <a href="#">&rarr;</a>  -->
            &rarr;
            <textarea name="back" id="back" placeholder="Rear of card" cols="30" rows="10" required></textarea>
            <br><button>Submit</button>
        </form>

        <iframe name="hiddenframe" hidden></iframe> 
        <!-- janky bit of code from StackOverflow. Used in form target so that we stay on same page after submitting-->
    </main>
</body>
</html>