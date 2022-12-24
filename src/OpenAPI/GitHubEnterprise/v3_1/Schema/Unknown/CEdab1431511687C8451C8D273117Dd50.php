<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CEdab1431511687C8451C8D273117Dd50
{
    public const SCHEMA_JSON = '{"required":["login"],"type":"object","properties":{"login":{"type":"string","description":"The user\'s username."},"email":{"type":"string","description":"**Required for built-in authentication.** The user\'s email\\naddress. This parameter can be omitted when using CAS, LDAP, or SAML.\\nFor more information, see \\"[About authentication for your enterprise](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/admin\\/identity-and-access-management\\/managing-iam-for-your-enterprise\\/about-authentication-for-your-enterprise).\\""}}}';
    public const SCHEMA_TITLE = 'c_edab1431511687c8451c8d273117dd50';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The user's username.
     */
    private string $login;
    /**
    * **Required for built-in authentication.** The user's email
    address. This parameter can be omitted when using CAS, LDAP, or SAML.
    For more information, see "[About authentication for your enterprise](https://docs.github.com/enterprise-server@3.1/admin/identity-and-access-management/managing-iam-for-your-enterprise/about-authentication-for-your-enterprise)."
    */
    private ?string $email = null;
    /**
     * The user's username.
     */
    public function login() : string
    {
        return $this->login;
    }
    /**
    * **Required for built-in authentication.** The user's email
    address. This parameter can be omitted when using CAS, LDAP, or SAML.
    For more information, see "[About authentication for your enterprise](https://docs.github.com/enterprise-server@3.1/admin/identity-and-access-management/managing-iam-for-your-enterprise/about-authentication-for-your-enterprise)."
    */
    public function email() : ?string
    {
        return $this->email;
    }
}
