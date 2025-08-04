<!-- ============================================== -->
<!-- ONE -->
<!-- ============================================== -->

<section>
    <div class="block-box-bg overlay o-50 custom">
        <img class="full-img-abs" src="./images/body/earn/hero.webp" alt="<?php echo $Earn_Title; ?>" />
        <div class="mw-1440 ai-center h-80 med-h-0">
            <div class="info w-100 all-tc-0 med-t-c mt-60">
                <h1 class="h1-special"><?php echo $Earn_Title; ?></h1>
                <p class="h4"><?php echo $Earn_Sub; ?></p>
            </div>
        </div>
    </div>
</section>

<section>
	<div class="mw-1440 t-c pb-0">
		<p class="h3"><?php echo $Earn_Intro; ?></p>
	</div>
</section>

<section>
	<div class="mw-1440 fd-col g-40 all-m-0">

		<div class="fd-col line">
		    <h2 class="h1 t-c"><?php echo $Earn_Sub_intro; ?></h2>
		    <p class="t-col-2 g-50 med-g-20 small-t-col-1"><?php echo $Earn_Sub_intro_text; ?></p>
		</div>

		<div class="fd-col g-20 line">
			<p class="h3 fw-600 t-c"><?php echo $Works; ?></p>
		    <?php
			$Plan = array(
			    array(
			        'icon' => 'icon-8',
			        'title' => $Works_title_01,
			        'list' => array(
			            $Works_title_01_sub_01,
			            $Works_title_01_sub_02
			        )
			    ),
			    array(
			        'icon' => 'icon-9',
			        'title' => $Works_title_02,
			        'list' => array(
			            $Works_title_02_sub_01,
			            $Works_title_02_sub_02
			        )
			    ),
			    array(
			        'icon' => 'icon-10',
			        'title' => $Works_title_03, // <- corregido
			        'list' => array(
			            $Works_title_03_sub_01,
			            $Works_title_03_sub_02
			        )
			    )
			);
			?>


			<ul class="teaser_earn">
			<?php
			$counter = 1;
			foreach ($Plan as $item){
			    echo "<li>
			        <span class='v-custom icon {$item['icon']} plan c-sec br-10'></span>
			        <div class='w-100 mt-40 small-mt-20'>
			        <p class='h5 fw-600 ai-center'><span class='number'>{$counter}</span>{$item['title']}</p>
			        <ul class='menu-list icon-dot mt-20 small-mt-20'>";
			    foreach ($item['list'] as $li){
			        echo "<li>{$li}</li>";
			    }
			    echo "</ul></div></li>";
			    $counter++;
			}
			?>
			</ul>

		</div>

		<div class="jc-between g-50 small-g-30 small-fd-col ai-start line">
		    <div>
		        <img src="./images/body/earn/earn_1.webp" class="br-20" alt="<?php echo $Who; ?>" />
		    </div>
		    <div class="fd-col g-20 w-100">
		    	<div>
			        <p class="h3 fw-600"><?php echo $Who; ?></p>
			        <div class="mt-20">
				        <p class="h5 fw-600"><?php echo $Who_sub; ?></p>
				        <p><?php echo $Who_sub_text; ?></p>
				    </div>
			    </div>
		        <div class="c-sec p-20 br-10">
			        <ul class="menu-list icon-dot">
						<li><?php echo $Who_sub_text_01; ?></li>
						<li><?php echo $Who_sub_text_02; ?></li>
					</ul>
			    </div>
			    <p><?php echo $Who_text; ?></p>
		    </div>
		</div>

		<div class="jc-between g-50 small-g-30 small-fd-col ai-start fd-row-rev line">
		    <div>
		        <img src="./images/body/earn/earn_2.webp" class="br-20" alt="<?php echo $What; ?>" />
		    </div>
		    <div class="fd-col g-20 w-100">
		        <p class="h3 fw-600"><?php echo $What; ?></p>
		        <div class="c-sec p-20 br-10">
			        <ul class="menu-list icon-dot">
						<li><?php echo $What_01; ?>s</li>
						<li><?php echo $What_02; ?></li>
						<li><?php echo $What_03; ?></li>
					</ul>
			    </div>
		    </div>
		</div>

	</div>
</section>

<section class="c-sec">
	<div class="mw-1440">
		<div class="t-c ai-center fd-col">
			<a href="?p=plan" class="btn big c-pri br-50 mt-40 small-mt-20"><?php echo $Plan_Title; ?></a>
		</div>
	</div>
</section>
