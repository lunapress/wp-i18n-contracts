<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\LoadScriptTextDomain;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Support\IHasDomain;

defined('ABSPATH') || exit;

interface ILoadScriptTextDomainFunction extends IExecutableFunction, IHasDomain
{
    public function handle(string $handle): self;
    public function path(string $path): self;

    public function getHandle(): string;
    public function getPath(): string;
}
