<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Support;

use LunaPress\FoundationContracts\Support\WpFunction\WpUnset;

defined('ABSPATH') || exit;

interface IHasDomain
{
    public function domain(string|WpUnset $domain): self;
    public function getDomain(): string|WpUnset;
}
