<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\UpdatePullRequestReviewProtection\Request\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class BypassPullRequestAllowances
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
