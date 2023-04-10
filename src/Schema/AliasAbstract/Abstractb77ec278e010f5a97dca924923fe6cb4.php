<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstractb77ec278e010f5a97dca924923fe6cb4
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s allowed to bypass pull request requirements."},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s allowed to bypass pull request requirements."},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s allowed to bypass pull request requirements."}},"description":"Allow specific users, teams, or apps to bypass pull request requirements."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Allow specific users, teams, or apps to bypass pull request requirements.';
    public const SCHEMA_EXAMPLE_DATA = '{"users":["generated_users_null"],"teams":["generated_teams_null"],"apps":["generated_apps_null"]}';
    /**
     * users: The list of user `login`s allowed to bypass pull request requirements.
     * @param ?array<string> $users
     * teams: The list of team `slug`s allowed to bypass pull request requirements.
     * @param ?array<string> $teams
     * apps: The list of app `slug`s allowed to bypass pull request requirements.
     * @param ?array<string> $apps
     */
    public function __construct(public ?array $users, public ?array $teams, public ?array $apps)
    {
    }
}
