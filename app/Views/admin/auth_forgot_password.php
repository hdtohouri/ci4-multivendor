<?= $this->extend('./admin/template/auth_template') ?>
<?= $this->section('content') ?>
<div class="mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70">
    <div class="!px-10 !py-12 card-body">
        <a href="index-1.html">
            <img src="<?= base_url('assets/images/logo-light.png') ?>" alt="" class="hidden h-6 mx-auto dark:block">
            <img src="<?= base_url('assets/images/logo-dark.png') ?>" alt="" class="block h-6 mx-auto dark:hidden">
        </a>

        <div class="mt-8 text-center">
            <h4 class="mb-2 text-custom-500 dark:text-custom-500">Mot de passe oublié?</h4>
            <p class="mb-8 text-slate-500 dark:text-zink-200">Réinitialiser votre mot de passe</p>
        </div>

        <div class="px-4 py-3 mb-6 text-sm text-yellow-500 border border-transparent rounded-md bg-yellow-50 dark:bg-yellow-400/20">
            Indiquez votre adresse email et les instructions vous seront envoyées.
        </div>

        <form autocomplete="off" action="<?= base_url('auth/forgot_password') ?>" method="POST">
            <div>
                <label for="emailInput" class="inline-block mb-2 text-base font-medium">Adresse Email :</label>
                <input type="text" name="email" value="<?= set_value('email') ?>" class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" required="" placeholder="Saisir votre adresse email">
                <?php if(isset($errors['email'])): ?>
                    <div id="username-error" class="mt-1 text-sm text-red-500"><?= $errors['email'] ?></div>
                <?php endif; ?>
            </div>
            <div class="mt-8">
                <button type="submit" class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Envoyer le lien de réinitialisation</button>
            </div>
            <div class="mt-4 text-center">
                <p class="mb-0">Je me souviens de mon mot de passe...<a href="<?= base_url('auth/login') ?>" class="underline fw-medium text-custom-500"> Me connecter </a> </p>
            </div>
        </form>
    </div>
</div>
<script>
    <?php $session = service('session');
    if ($session->has('error')): ?>
        var text = "<?= $session->get('error') ?>"
        notifyMe(text, color = "red", duration = 5000, load = false)
    <?php elseif ($session->has('success')): ?>
        var text = "<?= $session->get('success') ?>"
        notifyMe(text, color = "green", duration = 5000, load = false)
    <?php endif; ?>
</script>
<?= $this->endSection() ?>