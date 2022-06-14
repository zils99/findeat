<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | User</title>
    <!-- jquery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- fontawesome js -->
    <script src="https://kit.fontawesome.com/bdbefd3567.js" crossorigin="anonymous"></script>
    <!-- bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js" integrity="sha512-5qbIAL4qJ/FSsWfIq5Pd0qbqoZpk5NcUVeAAREV2Li4EKzyJDEGlADHhHOSSCw0tHP7z3Q4hNHJXa81P92borQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/landing/register_user.css">
</head>

<body>
    <header class="navbar navbar-expand-lg nav-bg navbar-dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">FindEat!</a>
    </header>

    <div style="height: 100vh;" class="container-fluid d-flex justify-content-center">
        <div class="row mt-5">

            <div class="col-lg-5 my-auto">

                <!-- title -->
                <div class="mb-3">
                    <h3 style="font-family: 'Moul', cursive;">
                        Register <span style="font-size: 12px;">as Ordinary User</span>
                    </h3>
                    <p style="font-family: 'Lora', serif;">Let's regis your account!</p>
                </div>

                <!-- form -->
                <form method="post" action="<?= base_url('landing/register_user'); ?>">
                    <div class="mb-3">
                        <label style="font-family: 'Moul', cursive;" for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="example@gmail.com" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" mb-3">
                        <label style="font-family: 'Moul', cursive;" for="exampleInputName" class="form-label">Username</label>
                        <input type="name" class="form-control" id="exampleInputName" name="name" placeholder="username" value="<?= set_value('name'); ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <label style="font-family: 'Moul', cursive;" for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="********">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" style="background-color: #203239 !important; border: 0px;" class="btn btn-primary">Registrasi</button>
                    </div>
                </form>
            </div>

            <!-- image -->
            <div class="col ms-5 my-auto">
                <img src="<?= base_url('assets/'); ?>img/landing/img.png" alt="bg-image" class="login-img m-lg-5" style="border-radius: 65px; display: block; object-fit: cover; width: 80%;">
            </div>
        </div>
    </div>
</body>

</html>