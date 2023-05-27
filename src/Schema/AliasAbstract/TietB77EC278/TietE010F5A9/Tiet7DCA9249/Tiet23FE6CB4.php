<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietB77EC278\TietE010F5A9\Tiet7DCA9249;

abstract readonly class Tiet23FE6CB4
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s allowed to bypass pull request requirements."},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s allowed to bypass pull request requirements."},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s allowed to bypass pull request requirements."}},"description":"Allow specific users, teams, or apps to bypass pull request requirements."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Allow specific users, teams, or apps to bypass pull request requirements.';
    public const SCHEMA_EXAMPLE_DATA = '{"users":["generated","generated"],"teams":["generated","generated"],"apps":["generated","generated"]}';

    /**
     * users: The list of user `login`s allowed to bypass pull request requirements.
     * teams: The list of team `slug`s allowed to bypass pull request requirements.
     * apps: The list of app `slug`s allowed to bypass pull request requirements.
     */
    public function __construct(public ?array $users, public ?array $teams, public ?array $apps)
    {
    }
}
