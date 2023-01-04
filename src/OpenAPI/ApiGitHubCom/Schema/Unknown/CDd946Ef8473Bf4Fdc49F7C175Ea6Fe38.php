<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CDd946Ef8473Bf4Fdc49F7C175Ea6Fe38
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"advanced_security_enabled_for_new_repositories":{"type":"boolean","description":"Whether GitHub Advanced Security is automatically enabled for new repositories. For more information, see \\"[About GitHub Advanced Security](https:\\/\\/docs.github.com\\/get-started\\/learning-about-github\\/about-github-advanced-security).\\""},"secret_scanning_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning is automatically enabled for new repositories. For more information, see \\"[About secret scanning](https:\\/\\/docs.github.com\\/code-security\\/secret-scanning\\/about-secret-scanning).\\""},"secret_scanning_push_protection_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning push protection is automatically enabled for new repositories. For more information, see \\"[Protecting pushes with secret scanning](https:\\/\\/docs.github.com\\/code-security\\/secret-scanning\\/protecting-pushes-with-secret-scanning).\\""},"secret_scanning_push_protection_custom_link":{"type":["string","null"],"description":"The URL that will be displayed to contributors who are blocked from pushing a secret. For more information, see \\"[Protecting pushes with secret scanning](https:\\/\\/docs.github.com\\/code-security\\/secret-scanning\\/protecting-pushes-with-secret-scanning).\\"\\nTo disable this functionality, set this field to `null`."}}}';
    public const SCHEMA_TITLE = 'c_dd946ef8473bf4fdc49f7c175ea6fe38';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether GitHub Advanced Security is automatically enabled for new repositories. For more information, see "[About GitHub Advanced Security](https://docs.github.com/get-started/learning-about-github/about-github-advanced-security)."
     */
    private bool $advanced_security_enabled_for_new_repositories;
    /**
     * Whether secret scanning is automatically enabled for new repositories. For more information, see "[About secret scanning](https://docs.github.com/code-security/secret-scanning/about-secret-scanning)."
     */
    private bool $secret_scanning_enabled_for_new_repositories;
    /**
     * Whether secret scanning push protection is automatically enabled for new repositories. For more information, see "[Protecting pushes with secret scanning](https://docs.github.com/code-security/secret-scanning/protecting-pushes-with-secret-scanning)."
     */
    private bool $secret_scanning_push_protection_enabled_for_new_repositories;
    /**
    * The URL that will be displayed to contributors who are blocked from pushing a secret. For more information, see "[Protecting pushes with secret scanning](https://docs.github.com/code-security/secret-scanning/protecting-pushes-with-secret-scanning)."
    To disable this functionality, set this field to `null`.
    */
    private ?string $secret_scanning_push_protection_custom_link;
    /**
     * Whether GitHub Advanced Security is automatically enabled for new repositories. For more information, see "[About GitHub Advanced Security](https://docs.github.com/get-started/learning-about-github/about-github-advanced-security)."
     */
    public function advanced_security_enabled_for_new_repositories() : bool
    {
        return $this->advanced_security_enabled_for_new_repositories;
    }
    /**
     * Whether secret scanning is automatically enabled for new repositories. For more information, see "[About secret scanning](https://docs.github.com/code-security/secret-scanning/about-secret-scanning)."
     */
    public function secret_scanning_enabled_for_new_repositories() : bool
    {
        return $this->secret_scanning_enabled_for_new_repositories;
    }
    /**
     * Whether secret scanning push protection is automatically enabled for new repositories. For more information, see "[Protecting pushes with secret scanning](https://docs.github.com/code-security/secret-scanning/protecting-pushes-with-secret-scanning)."
     */
    public function secret_scanning_push_protection_enabled_for_new_repositories() : bool
    {
        return $this->secret_scanning_push_protection_enabled_for_new_repositories;
    }
    /**
    * The URL that will be displayed to contributors who are blocked from pushing a secret. For more information, see "[Protecting pushes with secret scanning](https://docs.github.com/code-security/secret-scanning/protecting-pushes-with-secret-scanning)."
    To disable this functionality, set this field to `null`.
    */
    public function secret_scanning_push_protection_custom_link() : ?string
    {
        return $this->secret_scanning_push_protection_custom_link;
    }
}
