<?php

abstract class Task {
    private AuditTrail $auditTrail;
    public function __construct() {
        $this->auditTrail= new AuditTrail();
    }

    public function execute() {
        $this->auditTrail->log();
        $this->doExecute();
    }
    public abstract function doExecute();
} 