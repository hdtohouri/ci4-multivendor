<?= $this->extend('./admin/template/auth_template') ?>
<?= $this->section('content') ?>
<div class="mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70">
    <div class="!px-10 !py-12 card-body">
        <div class="mt-8 text-center">
            <h4 class="mb-2 text-purple-500 dark:text-purple-500">Welcome Back !</h4>
            <p class="text-slate-500 dark:text-zink-200">Se connecter pour continuer à l'espace d'administration.
            </p>
        </div>

        <form action="<?= base_url('auth/login') ?>" class="mt-10" method="post">
            <div class="hidden px-4 py-3 mb-3 text-sm text-green-500 border border-green-200 rounded-md bg-green-50 dark:bg-green-400/20 dark:border-green-500/50" id="successAlert">
                You have <b>successfully</b> signed in.
            </div>
            <div class="mb-3">
                <label for="username" class="inline-block mb-2 text-base font-medium">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter username or email">
                <?php if (isset($errors['username'])): ?>
                    <div id="username-error" class="mt-1 text-sm text-red-500"><?= $errors['username'] ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="password" class="inline-block mb-2 text-base font-medium">Mot de passe</label>
                <input type="password" id="password" name="password" class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter password">
                <?php if (isset($errors['password'])): ?>
                    <div id="password-error" class="mt-1 text-sm text-red-500"><?= $errors['password'] ?></div>
                <?php endif; ?>
            </div>
            <div>
                <div class="flex items-center gap-2">
                    <input id="checkboxDefault1" class="border rounded-sm appearance-none size-4 bg-slate-100 border-slate-200 dark:bg-zink-600/50 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400" type="checkbox" value="">
                    <label for="checkboxDefault1" class="inline-block text-base font-medium align-middle cursor-pointer">Se Souvenir de moi</label>
                </div>
                <div id="remember-error" class="hidden mt-1 text-sm text-red-500">Please check the "Remember me" before submitting the form.</div>
            </div>
            <div class="mt-10">
                <button type="submit" class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Se Connecter</button>
            </div>

            <div class="relative text-center my-9 before:absolute before:top-3 before:left-0 before:right-0 before:border-t before:border-t-slate-200 dark:before:border-t-zink-500">
                <h5 class="inline-block px-2 py-0.5 text-sm bg-white text-slate-500 dark:bg-zink-600 dark:text-zink-200 rounded relative">Sign In with</h5>
            </div>
            <div class="mt-10 text-center">
                <a href="<?= base_url('auth/forgot_password') ?>" class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500">
                    <p class="mb-0 text-slate-500 dark:text-zink-200">Mot de passe Oublié ?</p>
                </a>
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