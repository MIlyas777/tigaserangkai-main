<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<style>
    .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}
</style>
<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">
                    
                    <div class="px-5 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <span class="h1 fw-bold mb-0">Logo</span>
                    </div>
                    
                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                        
                        <form style="width: 23rem;" action="<?= base_url('/login/auth')?>" method="post">
                            
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
                            
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example18" name="email" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">Email address</label>
                            </div>
                            
                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example28" name="password" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example28">Password</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember-me" id="form1Example3" checked />
                                <label class="form-check-label" for="form1Example3"> Remember me </label>
                             </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>
            
            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>
            
        </form>
        
    </div>
    
</div>
<div class="col-sm-6 px-0 d-none d-sm-block">
    <img src="https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg"
    alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
</div>
</div>
</div>
</section>

</body>
</html>