<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="navbar fixed-top">
        <div class="container d-flex justify-content-between align-items-center px-3">
            <span class="navbar-brand">SOMIRA</span>

            <!-- Mobile Menu Trigger -->
            <div class="d-lg-none d-flex align-items-center gap-2">
                <div class="cart-icon rounded-circle p-2">
                    <i class="fas fa-bag-shopping"></i>
                </div>
                <button class="navbar-toggler border-0 bg-dark rounded-circle p-2" type="button" id="menuToggle">
                    <i class="fas fa-bars text-white"></i>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="collapse navbar-collapse d-lg-flex justify-content-between align-items-center"
                id="navbarContent">
                <div class="d-flex align-items-center gap-4">
                    <div class="divider d-none d-lg-block"></div>
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link" href="#">Somira DeepRelief™</a>
                    <a class="nav-link" href="#">Contact</a>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <select class="form-select form-select-sm w-auto">
                        <option>EUR €</option>
                        <option>USD $</option>
                    </select>
                    <button class="btn btn-buy btn-style1 text-white rounded-pill px-4">BUY NOW</button>
                    <div class="cart-icon rounded-circle p-2 d-none d-lg-block">
                        <i class="fas fa-bag-shopping"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Slide-out Menu -->
        <div id="mobileMenu"
            class="d-lg-none position-fixed top-0 end-0 bg-white vh-100 w-100 shadow d-flex flex-column">

            <!-- Close Button -->
            <div class="d-flex justify-content-end mb-3">
                <button id="menuClose" class="btn btn-dark rounded-circle" style="width: 36px; height: 36px;">X</button>
            </div>

            <!-- Main content (non-flex-grow) -->
            <div class="d-flex flex-column gap-4">
                <a href="#" class="fs-4 fw-bold text-dark border-bottom pb-2">Home</a>
                <a href="#" class="fs-4 fw-bold text-dark border-bottom pb-2">Somira DeepRelief™</a>
                <a href="#" class="fs-4 fw-bold text-dark border-bottom pb-2">Contact</a>
            </div>

            <!-- Spacer to push bottom content -->
            <div class="flex-grow-1"></div>

            <!-- Bottom menu -->
            <div class="setyui d-flex flex-column gap-3">
                <select class="form-select form-select-lg">
                    <option>EUR €</option>
                    <option>USD $</option>
                </select>
                <button class="btn btn-dark btn-lg rounded-pill">Buy Now</button>
            </div>
        </div>
    </nav>