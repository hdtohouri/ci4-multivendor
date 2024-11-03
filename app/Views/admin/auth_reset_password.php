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
            Veuillez saisir le nouveau mot de passe.
        </div>

        <form autocomplete="off" action="<?= base_url('auth/reset_password/'.$token) ?>" method="POST">
            <div>
                <label for="emailInput" class="inline-block mb-2 text-base font-medium">Mot de passe :</label>
                <input type="password" name="password" value="<?= set_value('password') ?>" class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" required="" placeholder="Veuillez saisir votre nouvezu mot de passe">
                <?php if(isset($errors['password'])): ?>
                    <div class="mt-1 text-sm text-red-500"><?= $errors['password'] ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="emailInput" class="inline-block mb-2 text-base font-medium">Mot de passe :</label>
                <input type="password" name="password2" value="<?= set_value('password2') ?>" class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" required="" placeholder="Veuillez resaisir le nouvezu mot de passe">
                <?php if(isset($errors['password2'])): ?>
                    <div class="mt-1 text-sm text-red-500"><?= $errors['password2'] ?></div>
                <?php endif; ?></div>
            <div class="mt-8">
                <button type="submit" class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Modifier le mot de passe</button>
            </div>
        </form>
        <div class="relative text-center my-9 before:absolute before:top-3 before:left-0 before:right-0 before:border-t before:border-t-slate-200 dark:before:border-t-zink-500">
                <h5 class="inline-block px-2 py-0.5 text-sm bg-white text-slate-500 dark:bg-zink-600 dark:text-zink-200 rounded relative">Se connecter</h5>
            </div>
            <div class="mt-10 text-center">
                <a href="<?= base_url('auth/login') ?>" class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500">
                    <p class="mb-0 text-slate-500 dark:text-zink-200">Se Connecter</p>
                </a>
            </div>
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