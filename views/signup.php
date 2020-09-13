<?php require('./components/header.php') ?>

<body>
    <header>
        <h1 class="user_form_header">TimeSchedule</h1>
    </header>
    <div class="user_form">
        <form action="./" method="">
        <div class="form_section">
            <h2 class="form_title">signup</h2>

            <h3 class="username_title">Username</h3>
            <input type="text" class="user_name">
            <h3 class="email_title">Password</h3>
            <input type="text" class="user_password">

            <input type="submit" value="Sign up" class="submit">

            <a href="#" class="login">Log in</a>
        </div>
        </form>
    </div>
    <script src="../main.js"></script>

<?php require('./components/footer.php') ?>