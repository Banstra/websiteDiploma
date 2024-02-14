<div class="recloud-monitoring" id="recloud-monitoring">
	<div class="monitoring-content">

		<div class="monitoring-content__header">
			<div class="monitoring-content__name"><?=  $name ?></div>
			<div class="monitoring-content__status"><?= $online ?></div>
		</div>

		<div class="monitoring-content__body">
			<div class="monitoring-content__desc"><?= $desc ?></div>
		</div>

		<div class="monitoring-content__footer">
			<div class="monitoring-content__bar">
				<div class="monitoring-content__bar-value" style="width: <?= $procentValue ?>%;"></div>
			</div>
		</div>

	</div>
</div>