<!-- Footer -->
<footer class=" text-white py-5" id="contatos">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5>Contato</h5>
                <ul class="list-unstyled">
                    <li><a href="#"> Endereço: Rua Tal, 123 - Cidade, Estado</a></li>
                    <li class="py-3"><a href="#">Email: contato@fisioterapeuta.com</a>
                    </li>
                    <li><a href="#">Telefone: (00) 1234-5678</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Serviços</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Acupuntura</a></li>
                    <li class="py-3"><a href="#">Fisioterapia Neurológica</a></li>
                    <li><a href="#">Pilates</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h5>Nossas redes</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Instagram</a></li>
                    <li class="py-3"><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="text-center mt-5">&copy; <?php echo esc_html(date('Y')); ?> <?php echo esc_html(get_theme_mod('set_copyright', 'Copyright X - All Rights Reserved')); ?></p>

                <p class="text-center mt-2 company">Desenvolvido por 2ps</p>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>

</html>