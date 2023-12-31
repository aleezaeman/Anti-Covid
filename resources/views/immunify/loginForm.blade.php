</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

    <title>Sign In</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<style>
* {


    font-family: 'Lato', sans-serif;

}

body {
    background-color: #3389fc;
}

.card-img-top {
    height: 100%;
    object-fit: cover;
}

/* center the content vertically and horizontally */
.card-body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

/* add some margin to the top and bottom of the form */
form {
    margin: 20px 0;
}

/* make the form inputs take up the entire width of the container */
input {
    width: 100%;
}

/* add some padding to the top and bottom of the container */
section {
    padding: 20px 0;
}

/* add some margin to the top and bottom of the container on small screens */
@media (max-width: 768px) {
    section {
        margin: 20px 0;
    }
}
</style>



<body>

    <section class="vh-100" style="background-color:#3389fc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-12">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="./pexels-anna-shvets-3786119.jpg" alt="login form" class="card-img-top"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <div class="text-center mt-4">
                                        <h1 style="color:#203C71;  font-size:30px;" class="h2">Welcome Back, Anti-Covid
                                            Team</h1>
                                        <p class="lead">
                                            Your Health Is Our Priority
                                        </p>
                                    </div>
                                  
                                       <a href="/parentSignin"> <button  type="button" class="btn btn-info"
                                style="background-color:#3389FC; font-size:16px">For Patients</button></a> <br>
                          <a href="/hospitalSignin"> <button  type="button" class="btn btn-info"
                                style="background-color:#3389FC; font-size:16px">For Hospital</button></a> <br>
                                       
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>


</html>