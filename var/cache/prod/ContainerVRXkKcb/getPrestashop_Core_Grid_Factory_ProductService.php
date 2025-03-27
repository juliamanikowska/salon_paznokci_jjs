<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.product' shared service.

return $this->services['prestashop.core.grid.factory.product'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['prestashop.core.grid.definition.factory.product'] ?? $this->load('getPrestashop_Core_Grid_Definition_Factory_ProductService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Grid\\Data\\Factory\\ProductGridDataFactoryDecorator'] ?? $this->load('getProductGridDataFactoryDecoratorService.php')), ($this->services['prestashop.core.grid.filter.form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));
