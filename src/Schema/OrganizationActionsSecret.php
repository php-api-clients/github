<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class OrganizationActionsSecret
{
    public const SCHEMA_JSON = '{"title":"Actions Secret for an Organization","required":["name","created_at","updated_at","visibility"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["SECRET_TOKEN"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"visibility":{"enum":["all","private","selected"],"type":"string","description":"Visibility of a secret"},"selected_repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/org\\/secrets\\/my_secret\\/repositories"]}},"description":"Secrets for GitHub Actions for an organization."}';
    public const SCHEMA_TITLE = 'Actions Secret for an Organization';
    public const SCHEMA_DESCRIPTION = 'Secrets for GitHub Actions for an organization.';
    /**
     * The name of the secret.
     */
    public ?string $name;
    public ?string $created_at;
    public ?string $updated_at;
    /**
     * Visibility of a secret
     */
    public ?string $visibility;
    public string $selected_repositories_url;
    public function __construct(string $name, string $created_at, string $updated_at, string $visibility, string $selected_repositories_url)
    {
        $this->name = $name;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->visibility = $visibility;
        $this->selected_repositories_url = $selected_repositories_url;
    }
}
