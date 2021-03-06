<?php
	$menu = $this->router->fetch_class();
	$submenu = $this->router->fetch_method();
?>
 <aside class="bg-black aside-md hidden-print" id="nav">
        <section class="vbox">
          <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
              <!-- nav -->
              <nav class="nav-primary hidden-xs">
                <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Menu</div>
                <ul class="nav nav-main" data-ride="collapse">
                  <li  class="<?= (($menu == "orangtua") && ($submenu == 'dashboard')) ? "active" : ""; ?>">
                    <a href="<?php echo base_url() ?>orangtua/portalortusantri/dashboard" class="auto">
                      <i class="fa fa-dashboard">
                      </i>
                      <span class="font-bold">Dashboard</span>
                    </a>
                  </li>
                  <li class="<?= (($menu == "orangtua") && ($submenu == 'biodata'))  ? "active" : ""; ?>">
                    <a href="<?php echo base_url() ?>orangtua/portalortusantri/biodata" class="auto">
                      <i class="fa fa-user">
                      </i>
                      <span class="font-bold">Biodata Santri</span>
                    </a>
                  </li>
									<li class="<?= (($menu == "orangtua") && ($submenu == 'prestasidanpelanggaran'))  ? "active" : ""; ?>">
										<a href="<?php echo base_url() ?>orangtua/portalortusantri/prestasidanpelanggaran" class="auto">
											<span class="pull-right text-muted">
											</span>
											<i class="fa fa-money">
											</i>
											<span class="font-bold">Prestasi & Pelanggaran</span>
										</a>

									</li>
                  <li class="<?= (($menu == "orangtua") && ($submenu == 'statusperizinan'))  ? "active" : ""; ?>">
                    <a href="<?php echo base_url() ?>orangtua/portalortusantri/statusperizinan" class="auto">
                      <span class="pull-right text-muted">
                      </span>
                      <i class="fa fa-folder-open">
                      </i>
                      <span class="font-bold">Status Perizinan Santri</span>
                    </a>
                  </li>
                  <li class="<?= (($menu == "orangtua") && ($submenu == 'databayarinfaq'))  ? "active" : ""; ?>">
                    <a href="<?php echo base_url() ?>orangtua/portalortusantri/databayarinfaq" class="auto">
                      <span class="pull-right text-muted">
                      </span>
                      <i class="fa fa-money">
                      </i>
                      <span class="font-bold">Pembayaran Infaq Santri</span>
                    </a>

                  </li>
                  <li class="<?= (($menu == "orangtua") && ($submenu == 'informasi'))  ? "active" : ""; ?>" >
                    <a href="<?php echo base_url() ?>orangtua/portalortusantri/informasi" class="auto">
                      <span class="pull-right text-muted">

                      </span>
                      <i class="fa fa-info-circle">
                      </i>
                      <span class="font-bold">Informasi</span>
                    </a>

                  </li>

                </ul>



              </nav>
              <!-- / nav -->
            </div>
          </section>

          <footer class="footer hidden-xs no-padder text-center-nav-xs">
            <a href="<?php echo base_url() ?>orangtua/portalortusantri/logout" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
              <i class="i i-logout"></i>
            </a>
            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
              <i class="i i-circleleft text"></i>
              <i class="i i-circleright text-active"></i>
            </a>
          </footer>
        </section>
      </aside>
