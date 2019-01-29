<?php

// default max-width: 440px, medium: 340px, small: 290px, tiny: 150px


if ($brand_name != '' && strtolower($add_link) == 'yes') {
	$title = $brand_name . "<br>Mortgage Loan Calculator";
} else {
	$title = "Mortgage Loan Calculator";
}

// rather than using exclusively a CSS solution for setting size, PHP is used as well
// so that the text displayed can vary as well
if (strtolower($size) == 'tiny'){
?>

<!-- Copyright 2016 financial-calculators.com -->

<div id="calc-wrap" class="tiny">  <!--default max-width: 440px, medium: 340px, small: 290px, tiny: 150px-->

		<!--calculator-->
		<form id="mortgage" class="calculator">

		<!--mortgage calculator-->
		<!-- calculator title -->
		<div class="calc-name"><?php echo ((strtolower($add_link) == 'yes') ? '<a href="https://financial-calculators.com/mortgage-calculator" target="_blank" data-toggle="tooltip" data-placement="right" title="click for more advanced calculator by financial-calculators.com">' . $title . '</a>' : $title) ?></div>


<!-- start calculator inputs -->

				<div class="input-group input-group-sm">
					<label class= "control-label" for="edPrice">Price of Real Estate?:</label>
					<input type="text" class="control num" id="edPrice" maxlength="14" size="16" value=<?php echo $price ?>>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label" for="edDwnPmtPct">Down Payment %?:</label>
					<input type="text" class="control num" id="edDwnPmtPct" maxlength="3" size="16" value=<?php echo $pct_dwn ?>>
				</div>

				<div class="input-group input-group-sm">
					<label class= "control-label" for="edPV">Amount of Loan?:</label>
					<input type="text" class="control num" id="edPV" maxlength="14" size="16" value=<?php echo $loan_amt ?>>
				</div>

				<div class="input-group input-group-sm tail">
					<div class="msg">Enter a &quot;0&quot; (zero) for one unknown value above.</div>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label" for="edNumPmts">Monthly Payments? (#):</label>
					<input type="text" class="control num" id="edNumPmts" maxlength="3" size="16" value=<?php echo $n_months ?>>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label" for="edRate">Annual Interest Rate?:</label>
					<input type="text" class="control num" id="edRate" maxlength="8" size="16" value=<?php echo $rate ?>>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label" for="edPoints">Points?:</label>
					<input type="text" class="control num" id="edPoints" maxlength="8" size="16" value=<?php echo $points ?>>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label" for="edPropTaxes">Annual Prop. Taxes?:</label>
					<input type="text" class="control num" id="edPropTaxes" maxlength="14" size="16" value=<?php echo $taxes ?>>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label" for="edIns">Annual Insurance?:</label>
					<input type="text" class="control num" id="edIns" maxlength="14" size="16" value=<?php echo $insurance ?>>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label" for="edPMI">PMI?:</label>
					<input type="text" class="control num" id="edPMI" maxlength="8" size="16" value=<?php echo $pmi ?>>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label" for="selPmtMthd">Payment Method?:</label>
						<select id="selPmtMthd" class="control">
						<option value="0" selected="selected">End-of-Period</option><option value="1">Start-of-Period</option></select>
				</div>

				<hr class="bar" />


				<div class="input-group input-group-sm">
					<label class= "control-label">Monthly Payment:</label>
					<input type="text" class="control num" id="edPmt" maxlength="14" size="16" disabled>
				</div>

				<div class="input-group input-group-sm">
					<label class= "control-label">Down Payment:</label>
					<input type="text" class="control num" id="edDownPmt" maxlength="14" size="16" disabled>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label">Total Interest:</label>
					<input type="text" class="control num" id="edInterest" maxlength="14" size="16" disabled>
				</div>

				<div class="input-group input-group-sm tail">
					<label class= "control-label">Total P &amp; I:</label>
					<input type="text" class="control num" id="edTotalPI" maxlength="14" size="16" disabled>
				</div>

				<!-- end mortgage calculator -->

		<!--buttons-->

		<!--buttons small-->
		<div class="btn-group">
			<div class="btn-row">
				<div class="btn-wrapper-4"><button type="button" id="btnCalc" class="btn btn-primary btn-calculator" data-toggle="tooltip" data-placement="top" title="calc">C</button></div>
				<div class="btn-wrapper-4"><button type="button" id="btnClear" class="btn btn-primary btn-calculator" data-toggle="tooltip" data-placement="top" title="clear">Cl</button></div>
				<div class="btn-wrapper-4"><button type="button" id="btnPrint" class="btn btn-primary btn-calculator" data-toggle="tooltip" data-placement="top" title="print">P</button></div>
				<div class="btn-wrapper-4"><button type="button" id="btnHelp" class="btn btn-primary btn-calculator" data-toggle="tooltip" data-placement="top" title="help">H</button></div>
			</div>
			<div class="btn-row">
				<div class="btn-wrapper-2"><button type="button" id="btnSchedule" class="btn btn-primary btn-calculator" data-toggle="tooltip" data-placement="bottom" title="schedule">S</button></div>
				<div class="btn-wrapper-2"><button type="button" id="btnCharts" class="btn btn-primary btn-calculator" data-toggle="tooltip" data-placement="bottom" title="charts">Ch</button></div>
			</div>
		</div>

		<div class="foot"><div class="cr">©2016 <?php echo ((strtolower($add_link) == 'yes') ? '<a href="https://financial-calculators.com" target="_blank" data-toggle="tooltip" data-placement="right" title="click for more advanced calculator by financial-calculators.com">financial-calculators.com,<br>all rights reserved</a>' : 'financial-calculators.com,<br>all rights reserved') ?></div><div id="CCY" data-toggle="tooltip" data-placement="right" title="click to change currency or date format">$ : mm/dd/yyyy</div></div>

	</form>
	<!--calculator-->

	<div id="zoomer" <?php echo ((strtolower($hide_resize) === 'yes') ? 'class="hidden"' : "") ?>><span id="shrink" class="flaticon-minussign7"></span><span id="original">&nbsp;&nbsp;Original Size&nbsp;&nbsp;</span><span id="grow" class="flaticon-add73"></span></div>

</div> 
<!--calc-wrap-->

<!--end loan calculator widget-->
<!--end tiny-->


<?php
} elseif(strtolower($size) == "small"){
?>
<!-- Copyright 2016 financial-calculators.com -->

<div id="calc-wrap" class="small">  <!--default max-width: 440px, medium: 340px, small: 290px, tiny: 150px-->

		<!--calculator-->
		<form id="mortgage" class="calculator">

			<!-- calculator title -->
			<!--mortgage calculator-->
		<div class="calc-name"><?php echo ((strtolower($add_link) == 'yes') ? '<a href="https://financial-calculators.com/mortgage-calculator" target="_blank" data-toggle="tooltip" data-placement="right" title="click for more advanced calculator by financial-calculators.com">' . $title . '</a>' : $title) ?></div>


<!-- start calculator inputs -->

				<div class="input-group input-group-sm">
					<label class= "control-label" for="edPrice">Real Estate Price?:</label>
					<input type="text" class="control num" id="edPrice" maxlength="14" size="16" value=<?php echo $price ?>>
				</div>



				<div class="input-group input-group-sm">
					<label class= "control-label" for="edDwnPmtPct">Down Pmt. Pct.?:</label>
					<input type="text" class="control num" id="edDwnPmtPct" maxlength="3" size="16" value=<?php echo $pct_dwn ?>>
				</div>

				<div class="input-group input-group-sm">
					<label class= "control-label" for="edPV">Loan Amount?:</label>
					<input type="text" class="control num" id="edPV" maxlength="14" size="16" value=<?php echo $loan_amt ?>>
				</div>

				<div class="input-group input-group-sm">
					<div class="msg" style="font-size:85%">Enter a &quot;0&quot; (zero) for one unknown value above.</div>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label" for="edNumPmts">Payments? (#):</label>
					<input type="text" class="control num" id="edNumPmts" maxlength="3" size="16" value=<?php echo $n_months ?>>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label" for="edRate">Interest Rate?:</label>
					<input type="text" class="control num" id="edRate" maxlength="8" size="16" value=<?php echo $rate ?>>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label" for="edPoints">Points?:</label>
					<input type="text" class="control num" id="edPoints" maxlength="8" size="16" value=<?php echo $points ?>>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label" for="edPMI">PMI?:</label>
					<input type="text" class="control num" id="edPMI" maxlength="8" size="16" value=<?php echo $pmi ?>>
				</div>

				<div class="input-group input-group-sm">
					<label class= "control-label" for="edPropTaxes">Property Taxes?:</label>
					<input type="text" class="control num" id="edPropTaxes" maxlength="14" size="16" value=<?php echo $taxes ?>>
				</div>

				<div class="input-group input-group-sm">
					<label class= "control-label" for="edIns">Insurance?:</label>
					<input type="text" class="control num" id="edIns" maxlength="14" size="16" value=<?php echo $insurance ?>>
				</div>

				<div class="input-group input-group-sm">
					<div class="msg" style="font-size:85%">Enter annual amounts for above two inputs.</div>
				</div>

				<div class="input-group">
					<label class= "control-label" for="selPmtMthd">Payment When?:</label>
						<select id="selPmtMthd" class="control">
						<option value="0" selected="selected">Period End</option><option value="1">Period Start</option></select>
				</div>

				<hr class="bar" />


				<div class="input-group input-group-sm">
					<label class= "control-label">Monthly Payment:</label>
					<input type="text" class="control num" id="edPmt" maxlength="14" size="16" disabled>
				</div>

				<div class="input-group input-group-sm">
					<label class= "control-label">Down Payment:</label>
					<input type="text" class="control num" id="edDownPmt" maxlength="14" size="16" disabled>
				</div>


				<div class="input-group input-group-sm">
					<label class= "control-label">Total Interest:</label>
					<input type="text" class="control num" id="edInterest" maxlength="14" size="16" disabled>
				</div>

				<div class="input-group input-group-sm tail">
					<label class= "control-label">Total P &amp; I:</label>
					<input type="text" class="control num" id="edTotalPI" maxlength="14" size="16" disabled>
				</div>

				<!-- end mortgage calculator -->



		<!--buttons-->

		<!--buttons small-->
		<div class="btn-group">
			<div class="btn-row">
				<div class="btn-wrapper-4"><button type="button" id="btnCalc" class="btn btn-primary btn-calculator">Calc</button></div>
				<div class="btn-wrapper-4"><button type="button" id="btnClear" class="btn btn-primary btn-calculator">Clear</button></div>
				<div class="btn-wrapper-4"><button type="button" id="btnPrint" class="btn btn-primary btn-calculator">Print</button></div>
				<div class="btn-wrapper-4"><button type="button" id="btnHelp" class="btn btn-primary btn-calculator">Help</button></div>
			</div>
			<div class="btn-row">
				<div class="btn-wrapper-2"><button type="button" id="btnSchedule" class="btn btn-primary btn-calculator">Schedule</button></div>
				<div class="btn-wrapper-2"><button type="button" id="btnCharts" class="btn btn-primary btn-calculator">Charts</button></div>
			</div>
		</div>


		<div class="foot"><div class="cr">©2016 <?php echo ((strtolower($add_link) == 'yes') ? '<a href="https://financial-calculators.com" target="_blank" data-toggle="tooltip" data-placement="right" title="click for more advanced calculator by financial-calculators.com">financial-calculators.com, all rights reserved</a>' : 'financial-calculators.com, all rights reserved') ?></div><div id="CCY" data-toggle="tooltip" data-placement="right" title="click to change currency or date format">$ : mm/dd/yyyy</div></div>

	</form>
	<!--calculator-->

	<div id="zoomer" <?php echo ((strtolower($hide_resize) === 'yes') ? 'class="hidden"' : "") ?>><span id="shrink" class="flaticon-minussign7"></span><span id="original">&nbsp;&nbsp;Original Size&nbsp;&nbsp;</span><span id="grow" class="flaticon-add73"></span></div>

</div> 
<!--calc-wrap-->

<!--end loan calculator widget-->
<!--end small-->


<?php
} elseif(strtolower($size) == "medium"){
?>
<!-- Copyright 2016 financial-calculators.com -->

<div id="calc-wrap" class="medium">  <!--default max-width: 440px, medium: 340px, small: 290px, tiny: 150px-->

		<!--calculator-->
		<form id="mortgage" class="calculator">

			<!-- calculator title -->
			<!--mortgage calculator-->
		<div class="calc-name"><?php echo ((strtolower($add_link) == 'yes') ? '<a href="https://financial-calculators.com/mortgage-calculator" target="_blank" data-toggle="tooltip" data-placement="right" title="click for more advanced calculator by financial-calculators.com">' . $title . '</a>' : $title) ?></div>


<!-- start calculator inputs -->

				<div class="input-group">
					<label class= "control-label" for="edPrice">Price of Real Estate?:</label>
					<input type="text" class="control num" id="edPrice" maxlength="14" size="16" value=<?php echo $price ?>>
				</div>



				<div class="input-group">
					<label class= "control-label" for="edDwnPmtPct">Down Payment Pct?:</label>
					<input type="text" class="control num" id="edDwnPmtPct" maxlength="3" size="16" value=<?php echo $pct_dwn ?>>
				</div>

				<div class="input-group">
					<label class= "control-label" for="edPV">Amount of Loan?:</label>
					<input type="text" class="control num" id="edPV" maxlength="14" size="16" value=<?php echo $loan_amt ?>>
				</div>

				<div class="input-group">
					<div class="msg">Enter a &quot;0&quot; (zero) for one unknown value above.</div>
				</div>


				<div class="input-group">
					<label class= "control-label" for="edNumPmts">Monthly Payments?:</label>
					<input type="text" class="control num" id="edNumPmts" maxlength="3" size="16" value=<?php echo $n_months ?>>
				</div>


				<div class="input-group">
					<label class= "control-label" for="edRate">Annual Interest Rate?:</label>
					<input type="text" class="control num" id="edRate" maxlength="8" size="16" value=<?php echo $rate ?>>
				</div>


				<div class="input-group">
					<label class= "control-label" for="edPoints">Points?:</label>
					<input type="text" class="control num" id="edPoints" maxlength="8" size="16" value=<?php echo $points ?>>
				</div>


				<div class="input-group">
					<label class= "control-label" for="edPropTaxes">Annual Prop. Taxes?:</label>
					<input type="text" class="control num" id="edPropTaxes" maxlength="14" size="16" value=<?php echo $taxes ?>>
				</div>


				<div class="input-group">
					<label class= "control-label" for="edIns">Annual Insurance?:</label>
					<input type="text" class="control num" id="edIns" maxlength="14" size="16" value=<?php echo $insurance ?>>
				</div>


				<div class="input-group">
					<label class= "control-label" for="edPMI">Mortgage Ins. (PMI)?:</label>
					<input type="text" class="control num" id="edPMI" maxlength="8" size="16" value=<?php echo $pmi ?>>
				</div>


				<div class="input-group">
					<label class= "control-label" for="selPmtMthd">Payment Method?:</label>
						<select id="selPmtMthd" class="control">
						<option value="0" selected="selected">End-of-Period</option><option value="1">Start-of-Period</option></select>
				</div>

				<hr class="bar" />


				<div class="input-group">
					<label class= "control-label">Monthly Payment:</label>
					<input type="text" class="control num" id="edPmt" maxlength="14" size="16" disabled>
				</div>

				<div class="input-group">
					<label class= "control-label">Down Payment:</label>
					<input type="text" class="control num" id="edDownPmt" maxlength="14" size="16" disabled>
				</div>


				<div class="input-group">
					<label class= "control-label">Total Interest:</label>
					<input type="text" class="control num" id="edInterest" maxlength="14" size="16" disabled>
				</div>

				<div class="input-group tail">
					<label class= "control-label">Total P &amp; I:</label>
					<input type="text" class="control num" id="edTotalPI" maxlength="14" size="16" disabled>
				</div>

				<!-- end mortgage calculator -->


		<!--buttons-->
		<div class="btn-group">
			<div class="btn-row">
				<div class="btn-wrapper-4"><button type="button" id="btnCalc" class="btn btn-primary btn-calculator">Calc</button></div>
				<div class="btn-wrapper-4"><button type="button" id="btnClear" class="btn btn-primary btn-calculator">Clear</button></div>
				<div class="btn-wrapper-4"><button type="button" id="btnPrint" class="btn btn-primary btn-calculator">Print</button></div>
				<div class="btn-wrapper-4"><button type="button" id="btnHelp" class="btn btn-primary btn-calculator">Help</button></div>
			</div>
			<div class="btn-row">
				<div class="btn-wrapper-2"><button type="button" id="btnSchedule" class="btn btn-primary btn-calculator">Schedule</button></div>
				<div class="btn-wrapper-2"><button type="button" id="btnCharts" class="btn btn-primary btn-calculator">Charts</button></div>
			</div>
		</div>


		<div class="foot"><div class="cr">©2016 <?php echo ((strtolower($add_link) == 'yes') ? '<a href="https://financial-calculators.com" target="_blank" data-toggle="tooltip" data-placement="right" title="click for more advanced calculator by financial-calculators.com">financial-calculators.com, all rights reserved</a>' : 'financial-calculators.com, all rights reserved') ?></div><div id="CCY" data-toggle="tooltip" data-placement="right" title="click to change currency or date format">$ : mm/dd/yyyy</div></div>


	</form>
	<!--calculator-->

	<div id="zoomer" <?php echo ((strtolower($hide_resize) === 'yes') ? 'class="hidden"' : "") ?>><span id="shrink" class="flaticon-minussign7"></span><span id="original">&nbsp;&nbsp;Original Size&nbsp;&nbsp;</span><span id="grow" class="flaticon-add73"></span></div>

</div> 
<!--calc-wrap-->

<!--end loan calculator widget-->
<!--end medium-->



<?php
}else{
?>

<!-- default size - large -->
<!-- Copyright 2016 financial-calculators.com -->

<div id="calc-wrap" class="large">  <!--default max-width: 440px, medium: 340px, small: 290px, tiny: 150px-->

		<!--calculator-->
		<form id="mortgage" class="calculator">

			<!-- calculator title -->
			<!--mortgage calculator-->
		<div class="calc-name"><?php echo ((strtolower($add_link) == 'yes') ? '<a href="https://financial-calculators.com/mortgage-calculator" target="_blank" data-toggle="tooltip" data-placement="right" title="click for more advanced calculator by financial-calculators.com">' . $title . '</a>' : $title) ?></div>


<!-- start calculator inputs -->

				<div class="input-group">
					<label class= "control-label" for="edPrice">Price of Real Estate or Asset?:</label>
					<input type="text" class="control num" id="edPrice" maxlength="14" size="16" value=<?php echo $price ?>>
				</div>



				<div class="input-group">
					<label class= "control-label" for="edDwnPmtPct">Down Payment Percent?:</label>
					<input type="text" class="control num" id="edDwnPmtPct" maxlength="3" size="16" value=<?php echo $pct_dwn ?>>
				</div>

				<div class="input-group">
					<label class= "control-label" for="edPV">Amount of Loan?:</label>
					<input type="text" class="control num" id="edPV" maxlength="14" size="16" value=<?php echo $loan_amt ?>>
				</div>

				<div class="input-group">
					<div class="msg">Enter a &quot;0&quot; (zero) for one unknown value above.</div>
				</div>


				<div class="input-group">
					<label class= "control-label" for="edNumPmts">Number of Payments? (#):</label>
					<input type="text" class="control num" id="edNumPmts" maxlength="3" size="16" value=<?php echo $n_months ?>>
				</div>


				<div class="input-group">
					<label class= "control-label" for="edRate">Annual Interest Rate?:</label>
					<input type="text" class="control num" id="edRate" maxlength="8" size="16" value=<?php echo $rate ?>>
				</div>


				<div class="input-group">
					<label class= "control-label" for="edPoints">Points?:</label>
					<input type="text" class="control num" id="edPoints" maxlength="8" size="16" value=<?php echo $points ?>>
				</div>


				<div class="input-group">
					<label class= "control-label" for="edPropTaxes">Annual Property Taxes?:</label>
					<input type="text" class="control num" id="edPropTaxes" maxlength="14" size="16" value=<?php echo $taxes ?>>
				</div>


				<div class="input-group">
					<label class= "control-label" for="edIns">Annual Insurance?:</label>
					<input type="text" class="control num" id="edIns" maxlength="14" size="16" value=<?php echo $insurance ?>>
				</div>


				<div class="input-group">
					<label class= "control-label" for="edPMI">Private Mortgage Ins. (PMI)?:</label>
					<input type="text" class="control num" id="edPMI" maxlength="8" size="16" value=<?php echo $pmi ?>>
				</div>


				<div class="input-group">
					<label class= "control-label" for="selPmtMthd">Payment Method?:</label>
						<select id="selPmtMthd" class="control">
						<option value="0" selected="selected">End-of-Period</option><option value="1">Start-of-Period</option></select>
				</div>

				<hr class="bar" />


				<div class="input-group">
					<label class= "control-label">Monthly Payment Amount:</label>
					<input type="text" class="control num" id="edPmt" maxlength="14" size="16" disabled>
				</div>

				<div class="input-group">
					<label class= "control-label">Down Payment Amount:</label>
					<input type="text" class="control num" id="edDownPmt" maxlength="14" size="16" disabled>
				</div>


				<div class="input-group">
					<label class= "control-label">Total Interest:</label>
					<input type="text" class="control num" id="edInterest" maxlength="14" size="16" disabled>
				</div>

				<div class="input-group tail">
					<label class= "control-label">Total Principal &amp; Interest:</label>
					<input type="text" class="control num" id="edTotalPI" maxlength="14" size="16" disabled>
				</div>

				<!-- end mortgage calculator -->


		<!--buttons-->

		<div class="btn-group">
			<div class="btn-row">
				<div class="btn-wrapper-4"><button type="button" id="btnCalc" class="btn btn-primary btn-calculator">Calc</button></div>
				<div class="btn-wrapper-4"><button type="button" id="btnClear" class="btn btn-primary btn-calculator">Clear</button></div>
				<div class="btn-wrapper-4"><button type="button" id="btnPrint" class="btn btn-primary btn-calculator">Print</button></div>
				<div class="btn-wrapper-4"><button type="button" id="btnHelp" class="btn btn-primary btn-calculator">Help</button></div>
			</div>
			<div class="btn-row">
				<div class="btn-wrapper-2"><button type="button" id="btnSchedule" class="btn btn-primary btn-calculator">Payment Schedule</button></div>
				<div class="btn-wrapper-2"><button type="button" id="btnCharts" class="btn btn-primary btn-calculator">Charts</button></div>
			</div>
		</div>


		<div class="foot"><div class="cr">©2016 <?php echo ((strtolower($add_link) == 'yes') ? '<a href="https://financial-calculators.com" target="_blank" data-toggle="tooltip" data-placement="right" title="click for more advanced calculator by financial-calculators.com">financial-calculators.com, all rights reserved</a>' : 'financial-calculators.com, all rights reserved') ?></div><div id="CCY" data-toggle="tooltip" data-placement="right" title="click to change currency or date format">$ : mm/dd/yyyy</div></div>

	</form>
	<!--calculator-->

	<div id="zoomer" <?php echo ((strtolower($hide_resize) === 'yes') ? 'class="hidden"' : "") ?>><span id="shrink" class="flaticon-minussign7"></span><span id="original">&nbsp;&nbsp;Original Size&nbsp;&nbsp;</span><span id="grow" class="flaticon-add73"></span></div>

</div> 
<!--calc-wrap-->

<!--end loan calculator widget-->
<!--end default/large-->


<?php
};  // if
?>

<!-- below included with all calculator layouts -->


<!-- HELP TEXT -->
<div class="fc-widget">
	<div id="hShow" class="hidden">
		<div id="hText">
<h2>Mortgage Calculator Help</h2>
<p>You can calculate the mortgage loan amount from the price of the real estate by providing the down payment percentage.</p>
<p>If you know the mortgage amount you can afford and the cash down payment percentage required, you can calculate the affordable real estate price.</p>
<p>Or if you know the price of the real estate and the loan amout and enter &quot;0&quot; for the down payment percentage, the calculator will calculate the down payment amount and percentage.</p>
<p>Points, Annual Property Taxes, Annual Insurance and Private Mortgage Ins. (PMI) are all optional. If you enter values, the periodic portion of each will be calculated and shown on the schedule. Property taxes and insurance are combined under escrow.</p>
<p>If a borrower does not have cash to cover at least 20% of the purchase price, some lenders will require the borrower to purchase private mortgage insurance (PMI) to cover against a possible default. Premiums are typically 0.5% to 2.0% of the original loan amount. The borrower can drop the insurance coverage once the mortgage balance is less than 80% of the original purchase price. The calculator handles this automatically. (There may be other conditions as well under which the lender will no longer require PMI. One such case might be apprciation of the real estate.)</p>
<p>Points are charges that are normally due at closing. Borrowers (normally only in USA) may select to pay a lender &quot;points&quot; up front in exchange for a lower interest rate. Points are expressed in percent and are calculated on the amount borrowed. 3 points on a $200,000 mortgage equals $6,000. If the user enters points, this calculator includes their value in the summary and as part of the total payment at loan origination on the payment schedule.</p>
<p class="tail">The term (duration) of the loan is expressed as a number of months.</p>
<ul class="mono tail"><li>&nbsp;60 months = &nbsp;5 years</li><li>120 months = 10 years</li><li>180 months = 15 years</li><li>240 months = 20 years</li><li class="tail">360 months = 30 years</li></ul>
<p>Need more options including the ability to solve for other unknowns, change payment / compounding frequency and the ability to print an amortization schedule? Please visit, <b>https://financial-calculators.com/mortgage-calculator</b></p>
		</div>
	</div>
</div>
<!--- end of help text -->




<!-- start dialog code -->
<div id="fc-modals">
<!-- currency date options -->
<div class="modal fade" id="CURRENCYDATE" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-modal">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="bg-modal" aria-hidden="true">&times;</span></button>
				<h4 class="modal-title bg-modal">Currency and Date Conventions</h4>
			</div>
			<div class="modal-body">
					<form>
						<div class="modal-group">
							<div class="radio-group pct50"><label class="radio-label" for="ccyUSD"><input type="radio" name="ccy_grp" id="ccyUSD" class="radio-input">$1,234.56</label></div>
							<div class="radio-group pct50"><label class="radio-label" for="ccyUSD2"><input type="radio" name="ccy_grp" id="ccyUSD2" class="radio-input">$1.234,56</label></div>
							<div class="radio-group pct50"><label class="radio-label" for="ccyGBH"><input type="radio" name="ccy_grp" id="ccyGBH" class="radio-input">£1,234.56</label></div>
							<div class="radio-group pct50"><label class="radio-label" for="ccyNone"><input type="radio" name="ccy_grp" id="ccyNone" class="radio-input">1,234.56</label></div>

							<div class="radio-group pct50"><label class="radio-label" for="ccyEUR1"><input type="radio" name="ccy_grp" id="ccyEUR1" class="radio-input">€1,234.56</label></div>
							<div class="radio-group pct50"><label class="radio-label" for="ccyEUR2"><input type="radio" name="ccy_grp" id="ccyEUR2" class="radio-input">€1.234,56</label></div>
							<div class="radio-group pct50"><label class="radio-label" for="ccyEUR3"><input type="radio" name="ccy_grp" id="ccyEUR3" class="radio-input">1 234,56 €</label></div>
							<div class="radio-group pct50"><label class="radio-label" for="ccyEUR4"><input type="radio" name="ccy_grp" id="ccyEUR4" class="radio-input">1.234,56 €</label></div>
						</div>

						<div class="modal-group">
							<div class="radio-group"><label class="radio-label" for="MMDDYY"><input type="radio" name="date_grp" id="MMDDYY" class="radio-input">mm/dd/yyyy</label></div>
							<div class="radio-group"><label class="radio-label" for="DDMMYY"><input type="radio" name="date_grp" id="DDMMYY" class="radio-input">dd/mm/yyyy</label></div>
							<div class="radio-group"><label class="radio-label" for="YYMMDD"><input type="radio" name="date_grp" id="YYMMDD" class="radio-input">yyyy-mm-dd</label></div>
						</div>

						<div class="modal-text">
							<div>Clicking <b>&quot;Save changes&quot;</b> will cause the calculator to reload. Your edits will be lost.</div>
						</div>
					</form>

			</div>
			<div class="modal-footer">
				<button id="CURRENCYDATE_cancel" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button id="CURRENCYDATE_save" type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
			</div>
		</div>
	</div>
</div> 
<!--CURRENCYDATE modal-->

<!-- end currency date options options -->
</div>
<!-- end dialog code -->

<!--end mortgage calculator plugin-->


