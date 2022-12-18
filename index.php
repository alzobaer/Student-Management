<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav>
        <label class="logo">W-School</label>

        <ul>
            <li> <a href="">Home</a> </li>
            <li> <a href="">Contact</a> </li>
            <li> <a href="">Admission</a> </li>
            <li> <a href="" class="btn btn-primary">Login</a> </li>
        </ul>
    </nav>

    <!-- section-1 -->
    <div class="section1">
        <label class="img_text"> We Teach Students With Care </label>
        <img src="images/school_management.jpg" alt="">

    </div>

    <!-- section-2: Welcode section -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img class="welcome_img" src="images/school2.jpg" alt="">
            </div>
            <div class="col-md-8">
                <h1>
                    Welcome to W-School
                </h1>
                <div class="welcome_text text-justify">
                    <p>
                    To review, use single-line comments for short notes to clarify the purpose of a function or a line of code, and use multiline comments for longer notes, such as a more detailed description of a code block or a note to a fellow developer that they can delete later.In PHP (and other coding languages), comments are often underutilized. At first, they may seem like an unnecessary step that just adds more bulk to your files. But, once you start working in teams and taking on complex longer-term projects, you should already be in the habit of writing comments — they’ll save you and others a lot of time trying to figure things out.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <center>
        <h1>Our Teachers</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="images/teacher1.jpg" alt="">
                <p class="text-justify teacher-des">
                To review, use single-line comments for short notes to clarify the purpose of a function or a line of code, and use multiline comments for longer notes, such as a more detailed description of a code block or a note to a fellow developer that they can delete later
                </p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="images/teacher2.jpg" alt="">
                <p class="text-justify teacher-des">
                To review, use single-line comments for short notes to clarify the purpose of a function or a line of code, and use multiline comments for longer notes, such as a more detailed description of a code block or a note to a fellow developer that they can delete later
                </p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="images/teacher3.jpg" alt="">
                <p class="text-justify teacher-des" >
                To review, use single-line comments for short notes to clarify the purpose of a function or a line of code, and use multiline comments for longer notes, such as a more detailed description of a code block or a note to a fellow developer that they can delete later
                </p>
            </div>
        </div>
    </div>

    <center>
        <h1>Our Courses</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="images/web.jpg" alt="">
                <p class="text-justify course_title">Web Development </p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="images/graphic.jpg" alt="">
                <p class="text-justify course_title"> Graphic Design</p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="images/marketing.png" alt="">
                <p class="text-justify course_title"> Marketing </p>
            </div>
        </div>
    </div>
    <div  align="center" class="container admission_form">
        <form>
            <div class="space_line">
                <label for="">Name</label>
                <input class="inp_design" type="text">
            </div>

            <div class="space_line">
                <label for="">Email</label>
                <input class="inp_design" type="text">
            </div>

            <div class="space_line">
                <label for="">Phone</label>
                <input class="inp_design" type="text">
            </div>
            
            <div class="space_line">
                <label for="">Message</label>
                <textarea class="input_text"></textarea>
            </div>
            <div class="space_line">
                <input class="btn btn-primary" id="submit" type="Submit" value="Apply">
            </div>
        
        </form>
    </div>

    <footer>
        <h3 class="footer_text">All @copyright reserved by web technology</h3>
    </footer>
</body>
</html>