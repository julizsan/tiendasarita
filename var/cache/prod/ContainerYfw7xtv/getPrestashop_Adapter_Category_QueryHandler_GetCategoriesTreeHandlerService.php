<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.category.query_handler.get_categories_tree_handler' shared service.

return $this->services['prestashop.adapter.category.query_handler.get_categories_tree_handler'] = new \PrestaShop\PrestaShop\Adapter\Category\QueryHandler\GetCategoriesTreeHandler(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->language->id);
