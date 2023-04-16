<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstracte87428107b8ae220ecd4d320d87356f6
{
    public const SCHEMA_JSON         = '{"required":["name","space","private_repos"],"type":"object","properties":{"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"},"filled_seats":{"type":"integer"},"seats":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","space":13,"private_repos":13,"filled_seats":13,"seats":13}';

    public function __construct(public string $name, public int $space, #[MapFrom('private_repos')] public int $privateRepos, #[MapFrom('filled_seats')] public ?int $filledSeats, public ?int $seats)
    {
    }
}
