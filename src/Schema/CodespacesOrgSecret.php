<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CodespacesOrgSecret
{
    public const SCHEMA_JSON = '{"title":"Codespaces Secret","required":["name","created_at","updated_at","visibility"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret","examples":["SECRET_NAME"]},"created_at":{"type":"string","description":"The date and time at which the secret was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time"},"updated_at":{"type":"string","description":"The date and time at which the secret was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time"},"visibility":{"enum":["all","private","selected"],"type":"string","description":"The type of repositories in the organization that the secret is visible to"},"selected_repositories_url":{"type":"string","description":"The API URL at which the list of repositories this secret is visible to can be retrieved","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/ORGANIZATION\\/codespaces\\/secrets\\/SECRET_NAME\\/repositories"]}},"description":"Secrets for a GitHub Codespace."}';
    public const SCHEMA_TITLE = 'Codespaces Secret';
    public const SCHEMA_DESCRIPTION = 'Secrets for a GitHub Codespace.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"SECRET_NAME","created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","visibility":"all","selected_repositories_url":"https:\\/\\/api.github.com\\/orgs\\/ORGANIZATION\\/codespaces\\/secrets\\/SECRET_NAME\\/repositories"}';
    /**
     * name: The name of the secret
     * created_at: The date and time at which the secret was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     * updated_at: The date and time at which the secret was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     * visibility: The type of repositories in the organization that the secret is visible to
     * selected_repositories_url: The API URL at which the list of repositories this secret is visible to can be retrieved
     */
    public function __construct(public string $name, public string $created_at, public string $updated_at, public string $visibility, public ?string $selected_repositories_url)
    {
    }
}
