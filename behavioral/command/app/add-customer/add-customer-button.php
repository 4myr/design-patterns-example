<?php

class AddCustomerButton implements Command {
    private CustomerService $customerService;
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }
    public function execute()
    {
        $this->customerService->add_customer();
    }
}