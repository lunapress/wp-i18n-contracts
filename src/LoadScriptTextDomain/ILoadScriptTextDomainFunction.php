<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\LoadScriptTextDomain;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\FoundationContracts\Support\WpFunction\WpArgState;

defined('ABSPATH') || exit;

interface ILoadScriptTextDomainFunction extends IExecutableFunction
{
    public function handle(string $handle): self;
    public function domain(string|WpArgState $domain): self;
    public function path(string|WpArgState $path): self;

    public function getHandle(): string;
    public function getDomain(): string|WpArgState;
    public function getPath(): string|WpArgState;
}
