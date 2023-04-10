<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class OrganizationActionsSecret
{
    public const SCHEMA_JSON = '{"title":"Actions Secret for an Organization","required":["name","created_at","updated_at","visibility"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["SECRET_TOKEN"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"visibility":{"enum":["all","private","selected"],"type":"string","description":"Visibility of a secret"},"selected_repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/org\\/secrets\\/my_secret\\/repositories"]}},"description":"Secrets for GitHub Actions for an organization."}';
    public const SCHEMA_TITLE = 'Actions Secret for an Organization';
    public const SCHEMA_DESCRIPTION = 'Secrets for GitHub Actions for an organization.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"SECRET_TOKEN","created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","visibility":"all","selected_repositories_url":"https:\\/\\/api.github.com\\/organizations\\/org\\/secrets\\/my_secret\\/repositories"}';
    /**
     * name: The name of the secret.
     * visibility: Visibility of a secret
     */
    public function __construct(public string $name, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, public string $visibility, #[\EventSauce\ObjectHydrator\MapFrom('selected_repositories_url')] public ?string $selectedRepositoriesUrl)
    {
    }
}
