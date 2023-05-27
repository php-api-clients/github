<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet7D758BFE\TietEBB29982\Tiet55D896DD;

abstract readonly class TietB656904B
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with dismissal access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with dismissal access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with dismissal access"}},"description":"Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.';
    public const SCHEMA_EXAMPLE_DATA = '{"users":["generated","generated"],"teams":["generated","generated"],"apps":["generated","generated"]}';

    /**
     * users: The list of user `login`s with dismissal access
     * teams: The list of team `slug`s with dismissal access
     * apps: The list of app `slug`s with dismissal access
     */
    public function __construct(public ?array $users, public ?array $teams, public ?array $apps)
    {
    }
}
