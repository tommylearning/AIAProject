<template>
    <nav class="navbar navbar-expand-lg" style="background-color:#d31145">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/image/AIA corporate logo_white_88.png" alt=""></a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i style="color:white" class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">OUR PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">AIA VITALITY</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">WHAT MATTERS</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT AIA</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">HELP & SUPPORT</a>
                    </li>
                    <li class="nav-item mt-auto">
                    <a class="nav-link" href="#">MY AIA</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name : 'NavBar',
}
</script>

<style scoped>
a{
    color: white;
    font-weight: bold;
    font-size: 15px;
}
a:hover{
    color: black;
}
@media only screen and (min-width: 1024px) {
    .nav-item
    {
        width: 5rem;
        margin: 1rem 3rem;
    }
}
</style>
