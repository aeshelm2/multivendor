<?php

namespace Aeshel\Multistore\Api;

/**
*@api SellerManagementInterface
*/
interface SellerManagementInterface
{    
    /**
     * checkName
     *
     * @param  string $name
     * @return bool
     */
    public function checkName($name);
}