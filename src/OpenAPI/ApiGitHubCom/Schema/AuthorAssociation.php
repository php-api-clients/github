<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AuthorAssociation
{
    public const SCHEMA_JSON = '{"title":"author_association","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository.","examples":["OWNER"]}';
    public const SCHEMA_TITLE = 'author_association';
    public const SCHEMA_DESCRIPTION = 'How the author is associated with the repository.';
}
