<footer>

<div class="container-fluid" style="background-image: url('/app/uploads/2022/06/Footer.svg'); background-size:cover; background-position: center;">
    <div class="container">    
        <div class="row">
            <?php if(!is_page(array('contact', 'log-in'))){ echo '
            <div class="col-md-6 offset-md-2 top-footer"> 
                <img src="/app/uploads/2022/07/Logo-icon.svg" alt="logo" class="logo">
                <h4>CHAT WITH US</h4>
                <h3>Need assistance?</h3>
                <p>Use our live chat or contact form to speak to one of our friendly team.</p>
                <div><a href="/contact" class="sc-btn">CONTACT US</a></div>

            </div>
            '; }?>
            
        </div>
    </div>
    <div class="container-fluid bottom-nav">
        <div class="container">
                <div class="col-md-8 offset-md-1">
                    <p><a href="#"></a>Disclaimer</p>
                    <p><a href="#"></a>Privacy Policy</p>
                </div>
        </div>
    </div>
</div>

</footer>


<style>

.bottom-nav p {
    display: inline;
    color: white;
    padding: 0 20px;
}

.bottom-nav {
    padding: 30px 0;
}

.top-footer {
padding: 100px 0 100px 0;
}

.top-footer p {
    margin: 40px 0 50px 0;
}
.top-footer h4 {
    font-size: larger;
    font-weight: 700;
}
.top-footer h3 {
    font-weight: 300;
}
.top-footer .logo {
    position: absolute;
    left: -100px;
    top: 120px;
    max-width:60px;
    margin-bottom: 20px;
}
.container.main-column {
    min-height: 30vh;
}


@media screen and (max-width:767px) {
    .top-footer .logo {
        position: relative;
        left: 0;
        top: 0;
        max-width:50px;
    }
    .top-footer {
    max-width: 80%;
    margin-left: auto;
    margin-right: auto;
}
.full-image {
    min-height: 600px!important;
}



}
</style>