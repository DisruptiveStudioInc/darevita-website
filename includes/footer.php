		</main>

		<!-- ============================================== -->
	    <!-- FOOTER -->
	    <!-- ============================================== -->

        <footer class="c-pri all-tc-0">
            <div class="mw-1440">


                <?php $Condicion_1 =(isset($user_replica))? 'g-30 jc-between':''; ?>
                <?php $Condicion =(isset($user_replica))? '':'ai-center t-c fd-col'; ?>
                <div class="med-fd-col <?php echo $Condicion_1; ?>">
                    <div class="<?php echo $Condicion; ?>">
                        <img src="./images/logo/logo_white.svg" class="mw-100 med-m-center" alt="logo darevita">

                        <ul class="fw-wrap med-jc-center g-10 mt-20">
                            <li><a target="_blank" href="https://www.facebook.com/DareVitaInternational" class="v-white icon small br-2 icon-facebook"></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/@DareVitaInternational" class="v-white icon small br-2 icon-youtube"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/DareVitaInternational/" class="v-white icon small br-2 icon-instagram"></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/darevita" class="v-white icon small br-2 icon-linkedin"></a></li>
                        </ul>

                        <p style="font-size: 0.8rem"><?php echo $Payments; ?></p>
                        <img src="./images/body/plan/cards.png" class="mw-200" alt="Payments" style="opacity: 0.5;" />
                    </div>
                    <?php if($user_replica): ?>
                        <div class="w-100 jc-end med-jc-center g-40 small-g-20">
                            <ul class="menu-list link">
                                <h3><?php echo $Footer_content; ?></h3>
                                <li><a href="?p=pay_to_pay"><?php echo $Footer_content_link_01; ?></a></li>
                                <li><a href="?p=retail_disclosure"><?php echo $Footer_content_link_02; ?></a></li>
                                <li><a href="?p=retail_pricing"><?php echo $Footer_content_link_03; ?></a></li>
                            </ul>
                            <ul class="menu-list link">
                                <h3>Darevita</h3>
                                <li><a href="?p=earn"><?php echo $Footer_darevita_link_01; ?></a></li>
                                <li><a href="?p=plan"><?php echo $Footer_darevita_link_02; ?></a></li>
                                <li><a href="?p=privacy_policy#"><?php echo $Footer_darevita_link_03; ?></a></li>
                                <li><a href="?p=returns_policy#"><?php echo $Footer_darevita_link_04; ?></a></li>
                            </ul>
                            <ul class="menu-list link">
                                <h3><?php echo $ContactUs; ?></h3>
                                <li><?php echo $Email; ?></li>
                                <li><?php echo $Phone; ?></li>
                                <li><?php echo $Address; ?></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="t-c p-10 mt-20" style="border-top:1px solid #464f77;">
                <p><?php echo $Footer_Rights; ?></p>
                </div>
            </div>
        </footer>		

		<!-- ============================================== -->
	    <!-- SCRIPTS -->
	    <!-- ============================================== -->

	    <script src="./js/lozad.min.js"></script>
	    <script src="./js/script.js"></script>

	</body>
</html>