<?php require('./components/header.php') ?>

<body>
    <div class="user_form">

        <header>
            <h1 class="user_form_header">TimeSchedule</h1>
        </header>

        <form action="./" method="">
            <h2 class="form_title">signup</h2>

            <h3 class="username_title">Username</h3>
            <input type="text" class="user_name">
            <h3 class="email_title">Password</h3>
            <input type="text" class="user_password">

            <input type="submit" value="Sign up">

            <a href="#">Log in</a>
        </form>

    </div>
    <script src="../main.js"></script>

<?php require('./components/footer.php') ?>