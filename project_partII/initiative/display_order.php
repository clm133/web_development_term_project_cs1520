<div class="container col-sm-8">
	<div class="panel panel-default">
		<div class="panel-heading clearfix">
			<header>
				<h4 class="primaryheading pull-left">Current Order</h4>
				<p class="subheading pull-right" id="collapseExplaination">Click on a creature's row to show/hide more options</p>
			</header>
		</div>
		<div class="panel-body">
			<div class="container-fluid table" id="orderTable">
				<div class="row">
						<div class="nameSpan col-sm-4 header">Creature Name</div>
						<div class="healthSpan col-sm-4 header">Health</div>
						<div class="ivSpan col-sm-4 header">Initiative Value</div>
				</div>
					<?php
						if(isset($_SESSION["order"])){
							foreach($_SESSION["order"] as $currCreature){
								$name = $currCreature->name;
								$iv = $currCreature->iv;
								$currHp = $currCreature->currHp;
								$id = $currCreature->id;
								include("creature_row.php");
								include("health_modal.php");
								include("stats_modal.php");
							}
						}
					?>
			</div>
		</div>
		<div class="panel-footer">
				<button onclick="nextTurn('start')" class="btn btn-primary" name="advanceOrder">
					Start Order <span class="glyphicon glyphicon-repeat"></span>
				</button>
				<button onclick="nextTurn('next')" class="btn btn-primary" name="advanceOrder">
					Next Turn <span class="glyphicon glyphicon-chevron-right"></span>
				</button>
		</div>
	</div>
</div>