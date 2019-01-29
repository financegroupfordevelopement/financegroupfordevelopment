
/*global alert: false, jQuery: false, GUI$: false */
/*jslint vars: true */


/** 
* @preserve Copyright 2016 Pine Grove Software, LLC
* financial-calculators.com
* pine-grove.com
* interface.MORTGAGE-WIDGET.v2.gpl.js
*/
(function ($, GUI) {
	'use strict';

	// don't try to initialize the wrong calculator
	if (!document.getElementById('mortgage')) {
		return;
	}

	var obj = {}, // interface object to base equations
		schedule,
		// gui controls
		priceInput,
		pctInput,
		pvInput,
		numPmtsInput,
		rateInput,
		pmtInput,
		pntsInput,
		propTaxInput,
		insInput,
		pmiInput,
		dwnPmt;

	/**
	* init() -- init or reset GUI's values
	*/
	function initGUI() {

		// Note: default dates are set in calc() method.
		// main window

		priceInput.setValue(priceInput.getUSNumber());
		pctInput.setValue(pctInput.getUSNumber());
		pvInput.setValue(pvInput.getUSNumber());
		numPmtsInput.setValue(numPmtsInput.getUSNumber());
		rateInput.setValue(rateInput.getUSNumber());
		pmtInput.setValue(pmtInput.getUSNumber());
		pntsInput.setValue(pntsInput.getUSNumber());
		propTaxInput.setValue(propTaxInput.getUSNumber());
		insInput.setValue(insInput.getUSNumber());
		pmiInput.setValue(pmiInput.getUSNumber());

		document.getElementById("edPmt").value = GUI.formatLocalFloat(0.0, GUI.moneyConventions, 2);
		document.getElementById("edDownPmt").value = GUI.formatLocalFloat(0.0, GUI.moneyConventions, 2);
		document.getElementById("edInterest").value = GUI.formatLocalFloat(0.0, GUI.moneyConventions, 2);
		document.getElementById("edTotalPI").value = GUI.formatLocalFloat(0.0, GUI.moneyConventions, 2);

	}


	/**
	* clearGUI() -- reset GUI's values
	*/
	function clearGUI() {

		// main window
		priceInput.setValue(0.0);
		pctInput.setValue(0);
		pvInput.setValue(0.0);
		numPmtsInput.setValue(0);
		rateInput.setValue(0.0);
		pmtInput.setValue(0.0);
		pntsInput.setValue(0.0);
		propTaxInput.setValue(0.0);
		insInput.setValue(0.0);
		pmiInput.setValue(0.0);

		document.getElementById("edPmt").value = GUI.formatLocalFloat(0.0, GUI.moneyConventions, 2);
		document.getElementById("edDownPmt").value = GUI.formatLocalFloat(0.0, GUI.moneyConventions, 2);
		document.getElementById("edInterest").value = GUI.formatLocalFloat(0.0, GUI.moneyConventions, 2);
		document.getElementById("edTotalPI").value = GUI.formatLocalFloat(0.0, GUI.moneyConventions, 2);

	}


	/**
	* getInputs() -- get user inputs and initialize obj equation interface object
	*/
	function getInputs() {
		var pr, pct, selPmtFreq, selCmpFreq, selPmtMthd, selAmortMthd, nunknowns = 0;

		obj = new GUI.fin_params();

		pr = priceInput.getUSNumber();

		pct = pctInput.getUSNumber() / 100;

		obj.pv = pvInput.getUSNumber();

		// can we calculate the amount of the loan? Validate inputs
		if (pr !== 0 && pct !== 0 && obj.pv !== 0) {
			// Are the inputs valid? They may have already been calculated
			// pr - (pr * (pct / 100)) === loan amount, if the calculated loan amount is more than 0.01 greater than the input's loan amount, then fail.
			if (Math.abs(obj.pv - (pr - (pr * pct))) > 0.01) {
				alert('One of the following: "Price", "Down Payment Percent" or "Loan Amount" must be "0".\n\nYou may use our general purpose loan calculator if you don\'t want to consider purchase price.');
				return false;
			}
		}


		// are there too many unknowns?
		if (pr === 0) {
			nunknowns += 1;
		}
		if (pct === 0) {
			nunknowns += 1;
		}
		if (obj.pv === 0) {
			nunknowns += 1;
		}
		if (nunknowns > 1) {
			alert('Only one of the following: "Price", "Down Payment Percent" or "Loan Amount" can be "0".\n\nYou may use our general purpose loan calculator if you don\'t want to consider purchase price.');
			return false;
		}

		if (obj.pv === 0) {
			obj.pv = GUI.roundMoney(pr - (pr * pct));
			pvInput.setValue(obj.pv);
		}

		if (pct === 0) {
			pct = 1 - (obj.pv / pr);
			pctInput.setValue(Math.round(pct * 100));
		}

		if (pr === 0) {
			pr = GUI.roundMoney(obj.pv / (1 - pct));
			priceInput.setValue(pr);
		}

		dwnPmt = pr - obj.pv;

		obj.n = numPmtsInput.getUSNumber();

		obj.nominalRate = rateInput.getUSNumber() / 100;

		obj.cf = 0;

		// cash flow's payment frequency
		obj.pmtFreq = GUI.pmt_frequency;

		// cash flow's compound frequency
		obj.cmpFreq = GUI.pmt_frequency;

		selPmtMthd = document.getElementById('selPmtMthd');
		obj.pmtMthd = parseInt(selPmtMthd.value, 10);
		obj.amortMthd = 0; // normal

		obj.pnts = pntsInput.getUSNumber() / 100;
		obj.propTax = propTaxInput.getUSNumber();
		obj.ins = insInput.getUSNumber();
		obj.pmi = pmiInput.getUSNumber() / 100;
		obj.price = pr;

		if (obj.pmi > 0.0 && pct >= 0.20) {
			alert("Normally private mortgage insurance is not required if the down payment equals or exceeds 20% of the purchase price.");
		}

		return true;

	} // getInputs()


	/** 
	* calc() -- initialize CashInputs data structures for equation classes
	*/
	function calc() {
		var nUnknowns = 0;

		if (obj.pv === 0) {
			nUnknowns += 1;
		}
		if (obj.n === 0) {
			nUnknowns += 1;
		}
		if (obj.nominalRate === 0) {
			nUnknowns += 1;
		}

		if (nUnknowns > 0) {
			alert('Please enter non-zero values for "Number of Payments" and "Annual Interest Rate".');
			return null;
		}

		if (obj.cf === 0) {
			obj.cf = GUI.roundMoney(GUI.CF.calc(obj));
			if (obj.cf !== Infinity) {
				pmtInput.setValue(-obj.cf);
			} else {
				obj.cf = 0;
			}
		}

		if (obj.cf !== 0) {
			// these are approximate values - could calculate a complete schedule and pickup running totals after rounding
			//schedule = GUI.LOAN_SCHEDULE.calc(obj);
			document.getElementById("edDownPmt").value = GUI.formatLocalFloat(dwnPmt, GUI.moneyConventions, 2);

			document.getElementById("edInterest").value = GUI.formatLocalFloat((obj.n * Math.abs(obj.cf)) - obj.pv, GUI.moneyConventions, 2);

			document.getElementById("edTotalPI").value = GUI.formatLocalFloat(obj.n * Math.abs(obj.cf), GUI.moneyConventions, 2);
		}

	} // function calc()


	$(document).ready(function () {
		// main window
		priceInput = new GUI.NE('edPrice', GUI.moneyConventions, 2);

		pctInput = new GUI.NE('edDwnPmtPct', GUI.rateConventions, 0);
			
		pvInput = new GUI.NE('edPV', GUI.moneyConventions, 2);

		numPmtsInput = new GUI.NE('edNumPmts', GUI.numConventions, 0);

		rateInput = new GUI.NE('edRate', GUI.rateConventions, 4);

		pmtInput = new GUI.NE('edPmt', GUI.moneyConventions, 2);

		pntsInput = new GUI.NE('edPoints', GUI.rateConventions, 4);

		propTaxInput = new GUI.NE('edPropTaxes', GUI.moneyConventions, 2);

		insInput = new GUI.NE('edIns', GUI.moneyConventions, 2);

		pmiInput = new GUI.NE('edPMI', GUI.rateConventions, 4);

		initGUI();

		$('#btnCalc').click(function (e) {
			//alert("calculate");
			if (getInputs()) {
				calc();
			}
		});


		$('#btnClear').click(function (e) {
			//alert("clear");
			clearGUI();  // clear and reset GUI's values
		});


		$('#btnPrint').click(function (e) {
			getInputs();
			calc();
			GUI.print_calc();
		});


		$('#btnHelp').click(function (e) {
			//alert("help");
			GUI.show_help();
		});


		$('#btnSchedule').click(function (e) {
			var schedule;
			GUI.summary.cashFlowType = 0; // loan
			getInputs();
			schedule = calc();
			GUI.showMortgageSchedule(GUI.MORTGAGE_SCHEDULE.calc(obj, schedule));
		});


		$('#btnCharts').click(function (e) {
			var schedule;
			GUI.summary.cashFlowType = 0; // loan
			getInputs();
			schedule = calc();
			GUI.showLoanCharts(GUI.MORTGAGE_SCHEDULE.calc(obj, schedule));
		});

		$('#CCY').click(function (e) {
			//alert("settings");
			GUI$.init_CURRENCYDATE_Dlg();
		});

	}); // $(document).ready

}(jQuery, GUI$));





