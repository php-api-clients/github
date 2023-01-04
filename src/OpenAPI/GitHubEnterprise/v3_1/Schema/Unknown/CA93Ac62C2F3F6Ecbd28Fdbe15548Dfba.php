<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CA93Ac62C2F3F6Ecbd28Fdbe15548Dfba
{
    public const SCHEMA_JSON = '{"type":"object","anyOf":[{"required":["source"]},{"required":["cname"]},{"required":["public"]},{"required":["https_enforced"]}],"properties":{"cname":{"type":["string","null"],"description":"Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see \\"[Using a custom domain with GitHub Pages](https:\\/\\/docs.github.com\\/articles\\/using-a-custom-domain-with-github-pages\\/).\\""},"https_enforced":{"type":"boolean","description":"Specify whether HTTPS should be enforced for the repository."},"public":{"type":"boolean","description":"Configures access controls for the GitHub Pages site. If public is set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site. This includes anyone in your Enterprise if the repository is set to `internal` visibility. This feature is only available to repositories in an organization on an Enterprise plan."},"source":{"anyOf":[{"enum":["gh-pages","master","master \\/docs"],"type":"string","description":"Update the source for the repository. Must include the branch name, and may optionally specify the subdirectory `\\/docs`. Possible values are `\\"gh-pages\\"`, `\\"master\\"`, and `\\"master \\/docs\\"`."},{"required":["branch","path"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`."}},"description":"Update the source for the repository. Must include the branch name and path."}]}}}';
    public const SCHEMA_TITLE = 'c_a93ac62c2f3f6ecbd28fdbe15548dfba';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see "[Using a custom domain with GitHub Pages](https://docs.github.com/articles/using-a-custom-domain-with-github-pages/)."
     */
    private $cname;
    /**
     * Specify whether HTTPS should be enforced for the repository.
     */
    private bool $https_enforced;
    /**
     * Configures access controls for the GitHub Pages site. If public is set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site. This includes anyone in your Enterprise if the repository is set to `internal` visibility. This feature is only available to repositories in an organization on an Enterprise plan.
     */
    private bool $public;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CA93Ac62C2F3F6Ecbd28Fdbe15548Dfba\Source::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CA93Ac62C2F3F6Ecbd28Fdbe15548Dfba\Source $source;
    /**
     * Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see "[Using a custom domain with GitHub Pages](https://docs.github.com/articles/using-a-custom-domain-with-github-pages/)."
     */
    public function cname()
    {
        return $this->cname;
    }
    /**
     * Specify whether HTTPS should be enforced for the repository.
     */
    public function https_enforced() : bool
    {
        return $this->https_enforced;
    }
    /**
     * Configures access controls for the GitHub Pages site. If public is set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site. This includes anyone in your Enterprise if the repository is set to `internal` visibility. This feature is only available to repositories in an organization on an Enterprise plan.
     */
    public function public() : bool
    {
        return $this->public;
    }
    public function source() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CA93Ac62C2F3F6Ecbd28Fdbe15548Dfba\Source
    {
        return $this->source;
    }
}
