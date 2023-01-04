<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class License
{
    public const SCHEMA_JSON = '{"title":"License","required":["key","name","url","spdx_id","node_id","html_url","description","implementation","permissions","conditions","limitations","body","featured"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri","examples":["http:\\/\\/choosealicense.com\\/licenses\\/mit\\/"]},"description":{"type":"string","examples":["A permissive license that is short and to the point. It lets people do anything with your code with proper attribution and without warranty."]},"implementation":{"type":"string","examples":["Create a text file (typically named LICENSE or LICENSE.txt) in the root of your source code and copy the text of the license into the file. Replace [year] with the current year and [fullname] with the name (or names) of the copyright holders."]},"permissions":{"type":"array","items":{"type":"string"},"examples":["commercial-use","modifications","distribution","sublicense","private-use"]},"conditions":{"type":"array","items":{"type":"string"},"examples":["include-copyright"]},"limitations":{"type":"array","items":{"type":"string"},"examples":["no-liability"]},"body":{"type":"string","examples":["\\n\\nThe MIT License (MIT)\\n\\nCopyright (c) [year] [fullname]\\n\\nPermission is hereby granted, free of charge, to any person obtaining a copy\\nof this software and associated documentation files (the \\"Software\\"), to deal\\nin the Software without restriction, including without limitation the rights\\nto use, copy, modify, merge, publish, distribute, sublicense, and\\/or sell\\ncopies of the Software, and to permit persons to whom the Software is\\nfurnished to do so, subject to the following conditions:\\n\\nThe above copyright notice and this permission notice shall be included in all\\ncopies or substantial portions of the Software.\\n\\nTHE SOFTWARE IS PROVIDED \\"AS IS\\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR\\nIMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,\\nFITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE\\nAUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER\\nLIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,\\nOUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE\\nSOFTWARE.\\n"]},"featured":{"type":"boolean","examples":[true]}},"description":"License"}';
    public const SCHEMA_TITLE = 'License';
    public const SCHEMA_DESCRIPTION = 'License';
    private string $key;
    private string $name;
    private ?string $spdx_id;
    private ?string $url;
    private string $node_id;
    private string $html_url;
    private string $description;
    private string $implementation;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Permissions>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Permissions::class)
     */
    private array $permissions = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Conditions>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Conditions::class)
     */
    private array $conditions = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Limitations>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Limitations::class)
     */
    private array $limitations = array();
    private string $body;
    private bool $featured;
    public function key() : string
    {
        return $this->key;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function spdx_id() : ?string
    {
        return $this->spdx_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function implementation() : string
    {
        return $this->implementation;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Permissions>
     */
    public function permissions() : array
    {
        return $this->permissions;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Conditions>
     */
    public function conditions() : array
    {
        return $this->conditions;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Limitations>
     */
    public function limitations() : array
    {
        return $this->limitations;
    }
    public function body() : string
    {
        return $this->body;
    }
    public function featured() : bool
    {
        return $this->featured;
    }
}
