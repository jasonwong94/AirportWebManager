angular.module("airportModule", [])
	.controller ("eflightController", function() {


	this.updateGateInfo = function(gateNumber){
		this.gateNumber = gateNumber;
	}

	this.changeEDT = function(time){
		this.EDT = time;
	}

	this.changeADT = function(time){
		this.ADT = time;
	}

}); 