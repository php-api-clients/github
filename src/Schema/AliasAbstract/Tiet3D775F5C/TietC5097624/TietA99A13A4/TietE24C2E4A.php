<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet3D775F5C\TietC5097624\TietA99A13A4;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietE24C2E4A
{
    public const SCHEMA_JSON         = '{"required":["collaborators","name","space","private_repos"],"type":"object","properties":{"collaborators":{"type":"integer"},"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"collaborators":13,"name":"generated","space":5,"private_repos":13}';

    public function __construct(public int $collaborators, public string $name, public int $space, #[MapFrom('private_repos')]
    public int $privateRepos,)
    {
    }
}
