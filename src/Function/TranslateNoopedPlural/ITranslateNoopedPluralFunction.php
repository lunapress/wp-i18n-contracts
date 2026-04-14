<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\TranslateNoopedPlural;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasOptionalDomain;
use LunaPress\Wp\I18nContracts\Entity\INoopedPlural;

defined('ABSPATH') || exit;

interface ITranslateNoopedPluralFunction extends IExecutableFunction, IHasOptionalDomain
{
    public function noopedPlural(INoopedPlural $noopedPlural): static;
    public function number(int $number): static;

    public function getNoopedPlural(): INoopedPlural;
    public function getNumber(): int;
}
