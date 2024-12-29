<!DOCTYPE html>
<html>
    <?= $this->include('admin/template/head') ?>
	<body>
		<div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="<?= base_url('vendors/images/deskapp-logo.svg') ?>" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div>

		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input
								type="text"
								class="form-control search-input"
								placeholder="Search Here"
							/>
						</div>
					</form>
				</div>
			</div>
            <?= $this->include('admin/template/header-right') ?>
		</div>

        <?= $this->include('admin/template/right-sidebar') ?>
        <?= $this->include('admin/template/left-side-bar') ?> 

		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
                <?= $this->renderSection('content') ?>
				

                <?= $this->include('admin/template/footer') ?>
			</div>
		</div>

		<!-- js -->
		<?= $this->include('admin/template/script') ?>
	</body>
</html>
