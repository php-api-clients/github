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
    public const SCHEMA_EXAMPLE_DATA = '{"name":"SECRET_TOKEN","created_at":"generated_created_at","updated_at":"generated_updated_at","visibility":"generated_visibility","selected_repositories_url":"https:\\/\\/api.github.com\\/organizations\\/org\\/secrets\\/my_secret\\/repositories"}';
    /**
     * name: The name of the secret.
     * visibility: Visibility of a secret
     */
    public function __construct(public string $name, public string $created_at, public string $updated_at, public string $visibility, public ?string $selected_repositories_url)
    {
    }
}
