<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\OrganizationFull;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Plan
{
    public const SCHEMA_JSON         = '{"required":["name","space","private_repos"],"type":"object","properties":{"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"},"filled_seats":{"type":"integer"},"seats":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","space":5,"private_repos":13,"filled_seats":12,"seats":5}';

    public function __construct(public string $name, public int $space, #[MapFrom('private_repos')] public int $privateRepos, #[MapFrom('filled_seats')] public ?int $filledSeats, public ?int $seats)
    {
    }
}
