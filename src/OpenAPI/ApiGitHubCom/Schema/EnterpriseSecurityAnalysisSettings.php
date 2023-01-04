<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class EnterpriseSecurityAnalysisSettings
{
    public const SCHEMA_JSON = '{"title":"Enterprise Security Analysis Settings","required":["advanced_security_enabled_for_new_repositories","secret_scanning_enabled_for_new_repositories","secret_scanning_push_protection_enabled_for_new_repositories"],"type":"object","properties":{"advanced_security_enabled_for_new_repositories":{"type":"boolean","description":"Whether GitHub advanced security is automatically enabled for new repositories and repositories transferred to\\nthis enterprise.","examples":[false]},"secret_scanning_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning is automatically enabled for new repositories and repositories transferred to this\\nenterprise.","examples":[false]},"secret_scanning_push_protection_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning push protection is automatically enabled for new repositories and repositories\\ntransferred to this enterprise.","examples":[false]},"secret_scanning_push_protection_custom_link":{"type":["string","null"],"description":"An optional URL string to display to contributors who are blocked from pushing a secret.","examples":["https:\\/\\/github.com\\/test-org\\/test-repo\\/blob\\/main\\/README.md"]}}}';
    public const SCHEMA_TITLE = 'Enterprise Security Analysis Settings';
    public const SCHEMA_DESCRIPTION = '';
    /**
    * Whether GitHub advanced security is automatically enabled for new repositories and repositories transferred to
    this enterprise.
    */
    private bool $advanced_security_enabled_for_new_repositories;
    /**
    * Whether secret scanning is automatically enabled for new repositories and repositories transferred to this
    enterprise.
    */
    private bool $secret_scanning_enabled_for_new_repositories;
    /**
    * Whether secret scanning push protection is automatically enabled for new repositories and repositories
    transferred to this enterprise.
    */
    private bool $secret_scanning_push_protection_enabled_for_new_repositories;
    /**
     * An optional URL string to display to contributors who are blocked from pushing a secret.
     */
    private ?string $secret_scanning_push_protection_custom_link = null;
    /**
    * Whether GitHub advanced security is automatically enabled for new repositories and repositories transferred to
    this enterprise.
    */
    public function advanced_security_enabled_for_new_repositories() : bool
    {
        return $this->advanced_security_enabled_for_new_repositories;
    }
    /**
    * Whether secret scanning is automatically enabled for new repositories and repositories transferred to this
    enterprise.
    */
    public function secret_scanning_enabled_for_new_repositories() : bool
    {
        return $this->secret_scanning_enabled_for_new_repositories;
    }
    /**
    * Whether secret scanning push protection is automatically enabled for new repositories and repositories
    transferred to this enterprise.
    */
    public function secret_scanning_push_protection_enabled_for_new_repositories() : bool
    {
        return $this->secret_scanning_push_protection_enabled_for_new_repositories;
    }
    /**
     * An optional URL string to display to contributors who are blocked from pushing a secret.
     */
    public function secret_scanning_push_protection_custom_link() : ?string
    {
        return $this->secret_scanning_push_protection_custom_link;
    }
}
