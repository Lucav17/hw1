<?php

	class Player {
		private $name;
		private $team;
		private $gp;
		private $min;
		private $fgm;
		private $fga;
		private $tptm;
		private $tpta;
		private $tptpct;
		private $ftm;
		private $fta;
		private $ftpct;
		private $roff;
		private $rdef;
		private $rtot;
		private $ast;
		private $to;
		private $stl;
		private $blk;
		private $pf;
		private $ppg;

		public function __construct($name, $team, $gp, $min, $fgm, $fga, $tptm, $tpta, $tptpct, $ftm, $fta, $ftpct, $roff, $rdef, $rtot, $ast, $to, $stl, $blk, $pf, $ppg) {
	        $this->name = $name;
	        $this->team = $team;
	        $this->gp = $gp;
	        $this->min = $min;
	        $this->fgm = $fgm;
	        $this->fga = $fga;
	        $this->tptm = $tptm;
	        $this->tpta = $tpta;
	        $this->tptpct = $tptpct;
	        $this->ftm = $ftm;
	        $this->fta = $fta;
	        $this->ftpct = $ftpct;
	        $this->roff = $roff;
	        $this->rdef = $rdef;
	        $this->rtot = $rtot;
	        $this->ast = $ast;
	        $this->to = $to;
	        $this->stl = $stl;
	        $this->blk = $blk;
	        $this->pf = $pf;
	        $this->ppg = $ppg;
	    }

	    public function getName() {
	    	return $this->name;
	    }

	    public function getTeam() {
	    	return $this->team;
	    }

		public function getGp() {
	    	return $this->gp;
	    }

	    public function getMin() {
	    	return $this->min;
	    }

	    public function getFgm() {
	    	return $this->fgm;
	    }

	    public function getFga() {
	    	return $this->fga;
	    }

	    public function getTptm() {
	    	return $this->tptm;
	    }

	    public function getTpta() {
	    	return $this->tpta;
	    }

	    public function getTptpct() {
	    	return $this->tptpct;
	    }

	    public function getFtm() {
	    	return $this->ftm;
	    }

	    public function getFta() {
	    	return $this->fta;
	    }

	    public function getFtpct() {
	    	return $this->ftpct;
	    }

	    public function getRoff() {
	    	return $this->roff;
	    }

	    public function getRdef() {
	    	return $this->rdef;
	    }

	    public function getRtot() {
	    	return $this->rtot;
	    }

	    public function getAst() {
	    	return $this->ast;
	    }

	    public function getTo() {
	    	return $this->to;
	    }

	    public function getStl() {
	    	return $this->stl;
	    }

	    public function getBlk() {
	    	return $this->blk;
	    }

	    public function getPf() {
	    	return $this->pf;
	    }

	    public function getPpg() {
	    	return $this->ppg;
	    }
	}




?>