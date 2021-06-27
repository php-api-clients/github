<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class InteractionGroup
{
    public const SCHEMA_TITLE = 'interaction-group';
    public const SCHEMA_DESCRIPTION = 'The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect. Can be one of: `existing_users`, `contributors_only`, `collaborators_only`.';
}
