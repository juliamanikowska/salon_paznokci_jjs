<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.http.client' shared service.

return $this->services['ps_checkout.http.client'] = ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\HttpClientFactory'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\HttpClientFactory'] = new \PrestaShop\Module\PrestashopCheckout\Http\HttpClientFactory()))->create(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\MaaslandHttpClientConfigurationBuilder'] ?? $this->load('getMaaslandHttpClientConfigurationBuilderService.php')));
