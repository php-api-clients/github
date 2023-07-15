<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Organization
{
    public const SCHEMA_JSON         = '{"title":"Organization","required":["login","url","id","node_id","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description","html_url","has_organization_projects","has_repository_projects","public_repos","public_gists","followers","following","type","created_at","updated_at"],"type":"object","properties":{"login":{"type":"string","description":"Unique login name of the organization","examples":["new-org"]},"url":{"type":"string","description":"URL for the organization","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github"]},"id":{"type":"integer"},"node_id":{"type":"string"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"hooks_url":{"type":"string"},"issues_url":{"type":"string"},"members_url":{"type":"string"},"public_members_url":{"type":"string"},"avatar_url":{"type":"string"},"description":{"type":["string","null"]},"blog":{"type":"string","description":"Display blog url for the organization","format":"uri","examples":["blog.example-org.com"]},"html_url":{"type":"string","format":"uri"},"name":{"type":"string","description":"Display name for the organization","examples":["New Org"]},"company":{"type":"string","description":"Display company name for the organization","examples":["Acme corporation"]},"location":{"type":"string","description":"Display location for the organization","examples":["Berlin, Germany"]},"email":{"type":"string","description":"Display email for the organization","format":"email","examples":["org@example.com"]},"has_organization_projects":{"type":"boolean","description":"Specifies if organization projects are enabled for this org"},"has_repository_projects":{"type":"boolean","description":"Specifies if repository projects are enabled for repositories that belong to this org"},"is_verified":{"type":"boolean"},"public_repos":{"type":"integer"},"public_gists":{"type":"integer"},"followers":{"type":"integer"},"following":{"type":"integer"},"type":{"type":"string"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"plan":{"type":"object","properties":{"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"},"filled_seats":{"type":"integer"},"seats":{"type":"integer"}}}},"description":"GitHub account for managing multiple users, teams, and repositories"}';
    public const SCHEMA_TITLE        = 'Organization';
    public const SCHEMA_DESCRIPTION  = 'GitHub account for managing multiple users, teams, and repositories';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"new-org","url":"https:\\/\\/api.github.com\\/orgs\\/github","id":2,"node_id":"generated","repos_url":"https:\\/\\/example.com\\/","events_url":"https:\\/\\/example.com\\/","hooks_url":"generated","issues_url":"generated","members_url":"generated","public_members_url":"generated","avatar_url":"generated","description":"generated","blog":"blog.example-org.com","html_url":"https:\\/\\/example.com\\/","name":"New Org","company":"Acme corporation","location":"Berlin, Germany","email":"org@example.com","has_organization_projects":false,"has_repository_projects":false,"is_verified":false,"public_repos":12,"public_gists":12,"followers":9,"following":9,"type":"generated","created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","plan":{"name":"generated","space":5,"private_repos":13,"filled_seats":12,"seats":5}}';

    /**
     * login: Unique login name of the organization
     * url: URL for the organization
     * blog: Display blog url for the organization
     * name: Display name for the organization
     * company: Display company name for the organization
     * location: Display location for the organization
     * email: Display email for the organization
     * hasOrganizationProjects: Specifies if organization projects are enabled for this org
     * hasRepositoryProjects: Specifies if repository projects are enabled for repositories that belong to this org
     */
    public function __construct(public string $login, public string $url, public int $id, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('repos_url')]
    public string $reposUrl, #[MapFrom('events_url')]
    public string $eventsUrl, #[MapFrom('hooks_url')]
    public string $hooksUrl, #[MapFrom('issues_url')]
    public string $issuesUrl, #[MapFrom('members_url')]
    public string $membersUrl, #[MapFrom('public_members_url')]
    public string $publicMembersUrl, #[MapFrom('avatar_url')]
    public string $avatarUrl, public string|null $description, public string|null $blog, #[MapFrom('html_url')]
    public string $htmlUrl, public string|null $name, public string|null $company, public string|null $location, public string|null $email, #[MapFrom('has_organization_projects')]
    public bool $hasOrganizationProjects, #[MapFrom('has_repository_projects')]
    public bool $hasRepositoryProjects, #[MapFrom('is_verified')]
    public bool|null $isVerified, #[MapFrom('public_repos')]
    public int $publicRepos, #[MapFrom('public_gists')]
    public int $publicGists, public int $followers, public int $following, public string $type, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt, public Schema\Organization\Plan|null $plan,)
    {
    }
}
