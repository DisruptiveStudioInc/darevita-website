<!-- ============================================== -->
<!-- ONE -->
<!-- ============================================== -->

<section>
    <div class="block-box-bg overlay o-50 custom">
        <img class="full-img-abs" src="./images/body/plan/hero.webp" alt="<?php echo $Plan_Title; ?>"/>
        <div class="mw-1440 ai-center h-80 med-h-0">
            <div class="info w-100 all-tc-0 med-t-c mt-60">
                <h1 class="h1-special"><?php echo $Plan_Title; ?></h1>
                <p class="h4"><?php echo $Plan_Sub; ?></p>
            </div>
        </div>
    </div>
</section>

<section>
	<div class="mw-1440 fd-col g-40 all-m-0">

		<div class="jc-between g-50 small-g-20 small-fd-col ai-start fd-row-rev line">
		    <div>
		        <img src="./images/body/plan/plan_1.webp" class="br-20" alt="<?php echo $Overview; ?>" />
		    </div>
		    <div class="fd-col g-20 w-100">
		        <p class="h3 fw-600 ai-center"><span class="number">1</span><?php echo $Overview; ?></p>
		        <p><?php echo $Overview_text; ?></p>
		        <p class="h5 fw-600"><?php echo $Overview_sub; ?></p>
		        <div class="c-sec p-20 br-10">
			        <ul class="menu-list icon-dot">
						<li><?php echo $Overview_sub_01; ?></li>
						<li><?php echo $Overview_sub_02; ?></li>
						<li><?php echo $Overview_sub_03; ?></li>
						<li><?php echo $Overview_sub_04; ?></li>
					</ul>
			    </div>
		    </div>
		</div>

		<div class="jc-between g-50 small-g-20 small-fd-col ai-center line">
		    <div>
		        <img src="./images/body/plan/plan_2.webp" class="br-20" alt="<?php echo $Consumer; ?>" />
		    </div>
		    <div class="fd-col g-20 w-100">
		        <p class="h3 fw-600 ai-center"><span class="number">2</span><?php echo $Consumer; ?></p>
		        <div>
			        <p class="h5 fw-600"><?php echo $Consumer_sub; ?></p>
			        <p><?php echo $Consumer_text; ?></p>
			    </div>
		    </div>
		</div>

		<div class="fd-col g-20 line">
			<p class="h3 fw-600 ai-center"><span class="number">3</span><?php echo $Earnings; ?></p>
		    <p><?php echo $Earnings_sub; ?></p>
		    <?php
			$Plan = array(
			    array(
			        'title' => $Earnings_01,
			        'list' => array(
			        	$Earnings_01_01,
			        	$Earnings_01_02,
			        	$Earnings_01_03
			        )
			    ),
			    array(
			        'title' => $Earnings_02,
			        'list' => array(
			        	$Earnings_02_01,
			        	$Earnings_02_02,
			        	$Earnings_02_03
			        )
			    ),
			    array(
			        'title' => $Earnings_03,
			        'list' => array(
			        	$Earnings_03_01,
			        	$Earnings_03_02,
			        	$Earnings_03_03
			        )
			    ),
			    array(
			        'title' => $Earnings_04,
			        'list' => array(
			        	$Earnings_04_01,
			        	$Earnings_04_02,
			        	$Earnings_04_03
			        )
			    ),
			    array(
			        'title' => $Earnings_05,
			        'list' => array(
			        	$Earnings_05_01,
			        	$Earnings_05_02
			        )
			    )
			);
			?>

			<ul class="teaser_plan g-20">
			<?php
			$counter = 1;
			foreach ($Plan as $item) {
			    echo "<li class='jc-center ai-start small-fd-col'>
			        <span class='v-custom icon icon-{$counter} plan'></span>
			        <div class='w-100'>
			        <p class='h5 fw-600'>{$item['title']}</p>
			        <ul class='menu-list icon-dot mt-10'>";

			    // Si es la primera, mostramos todos los elementos
			    // Si no, solo mostramos 2
			    $list = ($counter === 1) ? $item['list'] : array_slice($item['list'], 0, 2);

			    foreach ($list as $li) {
			        echo "<li>{$li}</li>";
			    }

			    echo "</ul></div></li>";
			    $counter++;
			}
			?>
			</ul>

		</div>

		<div class="jc-between g-50 small-g-20 small-fd-col ai-start line">
		    <div>
		        <img src="./images/body/plan/plan_3.webp" class="br-20" alt="<?php echo $Guaranteed; ?>" />
		    </div>
		    <div class="fd-col g-20 w-100">
		        <p class="h3 fw-600 ai-center"><span class="number">4</span><?php echo $Guaranteed; ?></p>
		        <p><?php echo $Guaranteed_text; ?></p>
		        <div class="c-sec p-20 br-10">
			        <ul class="menu-list icon-dot">
						<li><?php echo $Guaranteed_01; ?></li>
						<li><?php echo $Guaranteed_02; ?></li>
						<li><?php echo $Guaranteed_03; ?></li>
						<li><?php echo $Guaranteed_04; ?></li>
					</ul>
			    </div>
		    </div>
		</div>

		<div class="jc-between g-50 small-g-20 small-fd-col ai-start fd-row-rev line">
		    <div>
		        <img src="./images/body/plan/plan_4.webp" class="br-20" alt="<?php echo $Participation; ?>" />
		    </div>
		    <div class="fd-col g-20 w-100">
		        <p class="h3 fw-600 ai-center"><span class="number">5</span><?php echo $Participation; ?></p>
		        <p><?php echo $Participation_text; ?></p>
		        <div class="c-sec p-20 br-10">
			        <ul class="menu-list icon-dot">
						<li><?php echo $Participation_01; ?></li>
						<li><?php echo $Participation_02; ?></li>
						<li><?php echo $Participation_03; ?></li>
					</ul>
			    </div>
		    </div>
		</div>

		<div class="jc-between g-50 small-g-20 small-fd-col ai-start line">
		    <div>
		        <img src="./images/body/plan/plan_3.webp" class="br-20" alt="<?php echo $Customer; ?>" />
		    </div>
		    <div class="fd-col g-20 w-100">
		        <p class="h3 fw-600 ai-center"><span class="number">6</span><?php echo $Customer; ?></p>
		        <p><?php echo $Customer_text; ?></p>
		        <div class="c-sec p-20 br-10">
			        <ul class="menu-list icon-dot">
						<li><?php echo $Customer_01; ?></li>
						<li><?php echo $Customer_02; ?></li>
						<li><?php echo $Customer_03; ?></li>
						<li><?php echo $Customer_04; ?></li>
					</ul>
			    </div>
		    </div>
		</div>

		<div class="jc-between g-50 small-g-20 small-fd-col ai-start line">
		    <div>
		        <span class="v-custom icon icon-6 plan"></span>
		    </div>
		    <div class="fd-col g-20 w-100">
		        <p class="h3 fw-600 ai-center"><span class="number">7</span><?php echo $Additional; ?></p>
		        <p><?php echo $Additional_text; ?></p>
		    </div>
		</div>

		<!--<div class="jc-between g-50 small-g-20 small-fd-col ai-start line">
		    <div>
		        <span class="v-custom icon icon-7 plan"></span>
		    </div>
		    <div class="fd-col g-20 w-100">
		        <p class="h3 fw-600 ai-center"><span class="number">8</span><?php echo $Acknowledgment; ?></p>
		        <p><?php echo $Acknowledgment_text; ?></p>
		    </div>
		</div>-->

	</div>
</section>

<section class="c-sec">
	<div class="mw-1440">
		<div class="t-c ai-center fd-col">
			<a href="?p=earn" class="btn big c-pri br-50 mt-40 small-mt-20"><?php echo $Earn_Title; ?></a>
		</div>
	</div>
</section>

<section>
    <div class="mw-1080 t-c p-20 p-tiny">
        <h4><?php echo $Income_title; ?></h4>
        <p><?php echo $Income_text; ?></p>
    </div>
</section>
