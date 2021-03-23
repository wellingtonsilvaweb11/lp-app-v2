<footer class="footer">
    <div class="inner-footer">
        <div class="box-logo-footer">
            <div class="logo">
                <a href="/www">
                    <img src="/assets/img/logo.svg" alt="Logo">
                    <div class="">
                        <h1 class="dra-name">Caroline Cha</h1>
                        <p class="profession">Dermatologista</p>
                        <p class="crm">CRM: 144.349</p>
                    </div>
                </a>
            </div>

            <div class="box-sociais-footer show-desktop">
                <a href="https://www.instagram.com/carolinecha_dermatologia" target="_blank">
                    <img src="/assets/img/icon-insta-white.png" alt="Instagram">
                </a>
                <a href="javascript:void(0);" target="_blank">
                    <img src="/assets/img/icon-face-white.png" alt="Facebook">
                </a>
            </div>
        </div>

        <div class="sep-footer">

        </div>

        <div class="">
            <p class="text-adress white">
                <a target="_blank" href="https://www.google.com.br/maps/place/Av.+Brasil,+564+-+Jardim+America,+S%C3%A3o+Paulo+-+SP,+01429-001/@-23.5752199,-46.667555,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce59dc2ea5c89d:0x1f07dd6335899f1e!8m2!3d-23.5752248!4d-46.6653663">Av. Brasil, 564 - São Paulo/SP
                <span>CEP 01429-001</span>
            </a>
        </p>
            <div class="flex-tel">
                <p class="text-tel white">
                  <a  href="tel: 11 3885-0092">
                    <img src="/assets/img/icon-tel-white.png" alt=""> (11) 3885-0092
                    </a>
                </p>

                <a class="text-tel white" target="_blank" href="https://wa.me/5511973284573?text=Oi,%20gostaria%20de%20uma%20consulta%20com%20a%20Dra.%20Caroline%20Cha.">
                    <img src="/assets/img/icon-whats-white.png" alt=""> (11) 97328-4573
                </a>

            </div>
        </div>

        <div class="box-sociais-footer show-mobile">
            <a href="https://www.instagram.com/carolinecha_dermatologia" target="_blank">
                <img src="/assets/img/icon-insta-white.png" alt="Instagram">
            </a>
            <a href="javascript:void(0);">
                <img src="/assets/img/icon-face-white.png" alt="Facebook" target="_blank">
            </a>
        </div>
    </div>
</footer>

<script src="/assets/js/jquery.js"></script>

<script>
    $(document).ready(function() {
        $('#menu-mobile').click(function() {
            $(this).toggleClass('open');
            $(".nav-menu").toggleClass('open');
        });

        $('#menu-mobile').click(function() {
            $("body, html").toggleClass('remove-overflow');
        });

        $('.nav-menu a').click(function() {
            setTimeout(function() {
                $(".nav-menu, #menu-mobile").removeClass('open');
                $("body, html").removeClass('remove-overflow');
            }, 600);
        });
    });
</script>