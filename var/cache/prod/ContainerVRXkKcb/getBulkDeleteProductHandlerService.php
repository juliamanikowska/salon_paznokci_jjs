<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\CommandHandler\BulkDeleteProductHandler' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\CommandHandler\\BulkDeleteProductHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\BulkDeleteProductHandler(($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\ProductDeleter'] ?? $this->load('getProductDeleterService.php')));
