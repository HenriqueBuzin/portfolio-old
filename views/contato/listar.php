<link rel="stylesheet" href="assets/css/bibliotecas/vanilla-form.min.css">
<link rel="stylesheet" href="assets/css/contato/listar.css">
<script src="assets/js/bibliotecas/vanilla-form.min.js"></script>
<script src="assets/js/contato/listar.js"></script>
<div class="content">
    <div class="form-container">
        <!--- Code Snippet - standard-form-markup --->
        <!-- Vanilla Form markup starts here -->
        <form action="standard-contact-form.php" method="post" class="vanilla-form" novalidate="novalidate">
            <!-- Left column -->
            <div class="column-50">
                <input type="text" name="name" placeholder="Nome" required="required">
                <input type="text" name="company" placeholder="Empresa">
            </div><!--
                Right column
            --><div class="column-50">
                <input type="email" name="email" placeholder="E-mail" required="required">
                <input type="tel" name="tel" placeholder="Telefone">
            </div>
            <div class="column-100">
                <input type="text" name="assunto" placeholder="Assunto">
            </div>
            <div class="column-100">
                <textarea name="message" placeholder="Escreva sua mensagem aqui..."></textarea>
            </div>
            <div class="column-100 center">
                <input type="submit" value="Send" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
            </div>
            <footer class="notification-box"></footer>
        </form>
        <!-- Vanilla Form markup ends here -->
        <!--- /Code Snippet - standard-form-markup --->
    </div>
</div>