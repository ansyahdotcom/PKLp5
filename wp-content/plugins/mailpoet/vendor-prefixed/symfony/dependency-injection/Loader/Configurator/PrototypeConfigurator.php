<?php
 namespace MailPoetVendor\Symfony\Component\DependencyInjection\Loader\Configurator; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\DependencyInjection\Definition; use MailPoetVendor\Symfony\Component\DependencyInjection\Loader\PhpFileLoader; class PrototypeConfigurator extends AbstractServiceConfigurator { use Traits\AbstractTrait; use Traits\ArgumentTrait; use Traits\AutoconfigureTrait; use Traits\AutowireTrait; use Traits\BindTrait; use Traits\CallTrait; use Traits\ConfiguratorTrait; use Traits\DeprecateTrait; use Traits\FactoryTrait; use Traits\LazyTrait; use Traits\ParentTrait; use Traits\PropertyTrait; use Traits\PublicTrait; use Traits\ShareTrait; use Traits\TagTrait; public const FACTORY = 'load'; private $loader; private $resource; private $excludes; private $allowParent; public function __construct(ServicesConfigurator $parent, PhpFileLoader $loader, Definition $defaults, string $namespace, string $resource, bool $allowParent) { $definition = new Definition(); if (!$defaults->isPublic() || !$defaults->isPrivate()) { $definition->setPublic($defaults->isPublic()); } $definition->setAutowired($defaults->isAutowired()); $definition->setAutoconfigured($defaults->isAutoconfigured()); $definition->setBindings(\unserialize(\serialize($defaults->getBindings()))); $definition->setChanges([]); $this->loader = $loader; $this->resource = $resource; $this->allowParent = $allowParent; parent::__construct($parent, $definition, $namespace, $defaults->getTags()); } public function __destruct() { parent::__destruct(); if ($this->loader) { $this->loader->registerClasses($this->definition, $this->id, $this->resource, $this->excludes); } $this->loader = null; } public final function exclude($excludes) : self { $this->excludes = (array) $excludes; return $this; } } 