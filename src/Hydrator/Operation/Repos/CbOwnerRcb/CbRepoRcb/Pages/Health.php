<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Health implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\Github\Schema\PagesHealthCheck' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck($payload),
                'ApiClients\Client\Github\Schema\PagesHealthCheck\Domain' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️Domain($payload),
                'ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️AltDomain($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck(array $payload): \ApiClients\Client\Github\Schema\PagesHealthCheck
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['domain'] ?? null;

            if ($value === null) {
                $properties['domain'] = null;
                goto after_domain;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'domain';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️Domain($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['domain'] = $value;

            after_domain:

            $value = $payload['alt_domain'] ?? null;

            if ($value === null) {
                $properties['altDomain'] = null;
                goto after_altDomain;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'altDomain';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️AltDomain($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['altDomain'] = $value;

            after_altDomain:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PagesHealthCheck', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PagesHealthCheck::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PagesHealthCheck(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PagesHealthCheck', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️Domain(array $payload): \ApiClients\Client\Github\Schema\PagesHealthCheck\Domain
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['host'] ?? null;

            if ($value === null) {
                $properties['host'] = null;
                goto after_host;
            }

            $properties['host'] = $value;

            after_host:

            $value = $payload['uri'] ?? null;

            if ($value === null) {
                $properties['uri'] = null;
                goto after_uri;
            }

            $properties['uri'] = $value;

            after_uri:

            $value = $payload['nameservers'] ?? null;

            if ($value === null) {
                $properties['nameservers'] = null;
                goto after_nameservers;
            }

            $properties['nameservers'] = $value;

            after_nameservers:

            $value = $payload['dns_resolves'] ?? null;

            if ($value === null) {
                $properties['dnsResolves'] = null;
                goto after_dnsResolves;
            }

            $properties['dnsResolves'] = $value;

            after_dnsResolves:

            $value = $payload['is_proxied'] ?? null;

            if ($value === null) {
                $properties['isProxied'] = null;
                goto after_isProxied;
            }

            $properties['isProxied'] = $value;

            after_isProxied:

            $value = $payload['is_cloudflare_ip'] ?? null;

            if ($value === null) {
                $properties['isCloudflareIp'] = null;
                goto after_isCloudflareIp;
            }

            $properties['isCloudflareIp'] = $value;

            after_isCloudflareIp:

            $value = $payload['is_fastly_ip'] ?? null;

            if ($value === null) {
                $properties['isFastlyIp'] = null;
                goto after_isFastlyIp;
            }

            $properties['isFastlyIp'] = $value;

            after_isFastlyIp:

            $value = $payload['is_old_ip_address'] ?? null;

            if ($value === null) {
                $properties['isOldIpAddress'] = null;
                goto after_isOldIpAddress;
            }

            $properties['isOldIpAddress'] = $value;

            after_isOldIpAddress:

            $value = $payload['is_a_record'] ?? null;

            if ($value === null) {
                $properties['isARecord'] = null;
                goto after_isARecord;
            }

            $properties['isARecord'] = $value;

            after_isARecord:

            $value = $payload['has_cname_record'] ?? null;

            if ($value === null) {
                $properties['hasCnameRecord'] = null;
                goto after_hasCnameRecord;
            }

            $properties['hasCnameRecord'] = $value;

            after_hasCnameRecord:

            $value = $payload['has_mx_records_present'] ?? null;

            if ($value === null) {
                $properties['hasMxRecordsPresent'] = null;
                goto after_hasMxRecordsPresent;
            }

            $properties['hasMxRecordsPresent'] = $value;

            after_hasMxRecordsPresent:

            $value = $payload['is_valid_domain'] ?? null;

            if ($value === null) {
                $properties['isValidDomain'] = null;
                goto after_isValidDomain;
            }

            $properties['isValidDomain'] = $value;

            after_isValidDomain:

            $value = $payload['is_apex_domain'] ?? null;

            if ($value === null) {
                $properties['isApexDomain'] = null;
                goto after_isApexDomain;
            }

            $properties['isApexDomain'] = $value;

            after_isApexDomain:

            $value = $payload['should_be_a_record'] ?? null;

            if ($value === null) {
                $properties['shouldBeARecord'] = null;
                goto after_shouldBeARecord;
            }

            $properties['shouldBeARecord'] = $value;

            after_shouldBeARecord:

            $value = $payload['is_cname_to_github_user_domain'] ?? null;

            if ($value === null) {
                $properties['isCnameToGithubUserDomain'] = null;
                goto after_isCnameToGithubUserDomain;
            }

            $properties['isCnameToGithubUserDomain'] = $value;

            after_isCnameToGithubUserDomain:

            $value = $payload['is_cname_to_pages_dot_github_dot_com'] ?? null;

            if ($value === null) {
                $properties['isCnameToPagesDotGithubDotCom'] = null;
                goto after_isCnameToPagesDotGithubDotCom;
            }

            $properties['isCnameToPagesDotGithubDotCom'] = $value;

            after_isCnameToPagesDotGithubDotCom:

            $value = $payload['is_cname_to_fastly'] ?? null;

            if ($value === null) {
                $properties['isCnameToFastly'] = null;
                goto after_isCnameToFastly;
            }

            $properties['isCnameToFastly'] = $value;

            after_isCnameToFastly:

            $value = $payload['is_pointed_to_github_pages_ip'] ?? null;

            if ($value === null) {
                $properties['isPointedToGithubPagesIp'] = null;
                goto after_isPointedToGithubPagesIp;
            }

            $properties['isPointedToGithubPagesIp'] = $value;

            after_isPointedToGithubPagesIp:

            $value = $payload['is_non_github_pages_ip_present'] ?? null;

            if ($value === null) {
                $properties['isNonGithubPagesIpPresent'] = null;
                goto after_isNonGithubPagesIpPresent;
            }

            $properties['isNonGithubPagesIpPresent'] = $value;

            after_isNonGithubPagesIpPresent:

            $value = $payload['is_pages_domain'] ?? null;

            if ($value === null) {
                $properties['isPagesDomain'] = null;
                goto after_isPagesDomain;
            }

            $properties['isPagesDomain'] = $value;

            after_isPagesDomain:

            $value = $payload['is_served_by_pages'] ?? null;

            if ($value === null) {
                $properties['isServedByPages'] = null;
                goto after_isServedByPages;
            }

            $properties['isServedByPages'] = $value;

            after_isServedByPages:

            $value = $payload['is_valid'] ?? null;

            if ($value === null) {
                $properties['isValid'] = null;
                goto after_isValid;
            }

            $properties['isValid'] = $value;

            after_isValid:

            $value = $payload['reason'] ?? null;

            if ($value === null) {
                $properties['reason'] = null;
                goto after_reason;
            }

            $properties['reason'] = $value;

            after_reason:

            $value = $payload['responds_to_https'] ?? null;

            if ($value === null) {
                $properties['respondsToHttps'] = null;
                goto after_respondsToHttps;
            }

            $properties['respondsToHttps'] = $value;

            after_respondsToHttps:

            $value = $payload['enforces_https'] ?? null;

            if ($value === null) {
                $properties['enforcesHttps'] = null;
                goto after_enforcesHttps;
            }

            $properties['enforcesHttps'] = $value;

            after_enforcesHttps:

            $value = $payload['https_error'] ?? null;

            if ($value === null) {
                $properties['httpsError'] = null;
                goto after_httpsError;
            }

            $properties['httpsError'] = $value;

            after_httpsError:

            $value = $payload['is_https_eligible'] ?? null;

            if ($value === null) {
                $properties['isHttpsEligible'] = null;
                goto after_isHttpsEligible;
            }

            $properties['isHttpsEligible'] = $value;

            after_isHttpsEligible:

            $value = $payload['caa_error'] ?? null;

            if ($value === null) {
                $properties['caaError'] = null;
                goto after_caaError;
            }

            $properties['caaError'] = $value;

            after_caaError:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PagesHealthCheck\Domain', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PagesHealthCheck\Domain::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PagesHealthCheck\Domain(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PagesHealthCheck\Domain', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️AltDomain(array $payload): \ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['host'] ?? null;

            if ($value === null) {
                $properties['host'] = null;
                goto after_host;
            }

            $properties['host'] = $value;

            after_host:

            $value = $payload['uri'] ?? null;

            if ($value === null) {
                $properties['uri'] = null;
                goto after_uri;
            }

            $properties['uri'] = $value;

            after_uri:

            $value = $payload['nameservers'] ?? null;

            if ($value === null) {
                $properties['nameservers'] = null;
                goto after_nameservers;
            }

            $properties['nameservers'] = $value;

            after_nameservers:

            $value = $payload['dns_resolves'] ?? null;

            if ($value === null) {
                $properties['dnsResolves'] = null;
                goto after_dnsResolves;
            }

            $properties['dnsResolves'] = $value;

            after_dnsResolves:

            $value = $payload['is_proxied'] ?? null;

            if ($value === null) {
                $properties['isProxied'] = null;
                goto after_isProxied;
            }

            $properties['isProxied'] = $value;

            after_isProxied:

            $value = $payload['is_cloudflare_ip'] ?? null;

            if ($value === null) {
                $properties['isCloudflareIp'] = null;
                goto after_isCloudflareIp;
            }

            $properties['isCloudflareIp'] = $value;

            after_isCloudflareIp:

            $value = $payload['is_fastly_ip'] ?? null;

            if ($value === null) {
                $properties['isFastlyIp'] = null;
                goto after_isFastlyIp;
            }

            $properties['isFastlyIp'] = $value;

            after_isFastlyIp:

            $value = $payload['is_old_ip_address'] ?? null;

            if ($value === null) {
                $properties['isOldIpAddress'] = null;
                goto after_isOldIpAddress;
            }

            $properties['isOldIpAddress'] = $value;

            after_isOldIpAddress:

            $value = $payload['is_a_record'] ?? null;

            if ($value === null) {
                $properties['isARecord'] = null;
                goto after_isARecord;
            }

            $properties['isARecord'] = $value;

            after_isARecord:

            $value = $payload['has_cname_record'] ?? null;

            if ($value === null) {
                $properties['hasCnameRecord'] = null;
                goto after_hasCnameRecord;
            }

            $properties['hasCnameRecord'] = $value;

            after_hasCnameRecord:

            $value = $payload['has_mx_records_present'] ?? null;

            if ($value === null) {
                $properties['hasMxRecordsPresent'] = null;
                goto after_hasMxRecordsPresent;
            }

            $properties['hasMxRecordsPresent'] = $value;

            after_hasMxRecordsPresent:

            $value = $payload['is_valid_domain'] ?? null;

            if ($value === null) {
                $properties['isValidDomain'] = null;
                goto after_isValidDomain;
            }

            $properties['isValidDomain'] = $value;

            after_isValidDomain:

            $value = $payload['is_apex_domain'] ?? null;

            if ($value === null) {
                $properties['isApexDomain'] = null;
                goto after_isApexDomain;
            }

            $properties['isApexDomain'] = $value;

            after_isApexDomain:

            $value = $payload['should_be_a_record'] ?? null;

            if ($value === null) {
                $properties['shouldBeARecord'] = null;
                goto after_shouldBeARecord;
            }

            $properties['shouldBeARecord'] = $value;

            after_shouldBeARecord:

            $value = $payload['is_cname_to_github_user_domain'] ?? null;

            if ($value === null) {
                $properties['isCnameToGithubUserDomain'] = null;
                goto after_isCnameToGithubUserDomain;
            }

            $properties['isCnameToGithubUserDomain'] = $value;

            after_isCnameToGithubUserDomain:

            $value = $payload['is_cname_to_pages_dot_github_dot_com'] ?? null;

            if ($value === null) {
                $properties['isCnameToPagesDotGithubDotCom'] = null;
                goto after_isCnameToPagesDotGithubDotCom;
            }

            $properties['isCnameToPagesDotGithubDotCom'] = $value;

            after_isCnameToPagesDotGithubDotCom:

            $value = $payload['is_cname_to_fastly'] ?? null;

            if ($value === null) {
                $properties['isCnameToFastly'] = null;
                goto after_isCnameToFastly;
            }

            $properties['isCnameToFastly'] = $value;

            after_isCnameToFastly:

            $value = $payload['is_pointed_to_github_pages_ip'] ?? null;

            if ($value === null) {
                $properties['isPointedToGithubPagesIp'] = null;
                goto after_isPointedToGithubPagesIp;
            }

            $properties['isPointedToGithubPagesIp'] = $value;

            after_isPointedToGithubPagesIp:

            $value = $payload['is_non_github_pages_ip_present'] ?? null;

            if ($value === null) {
                $properties['isNonGithubPagesIpPresent'] = null;
                goto after_isNonGithubPagesIpPresent;
            }

            $properties['isNonGithubPagesIpPresent'] = $value;

            after_isNonGithubPagesIpPresent:

            $value = $payload['is_pages_domain'] ?? null;

            if ($value === null) {
                $properties['isPagesDomain'] = null;
                goto after_isPagesDomain;
            }

            $properties['isPagesDomain'] = $value;

            after_isPagesDomain:

            $value = $payload['is_served_by_pages'] ?? null;

            if ($value === null) {
                $properties['isServedByPages'] = null;
                goto after_isServedByPages;
            }

            $properties['isServedByPages'] = $value;

            after_isServedByPages:

            $value = $payload['is_valid'] ?? null;

            if ($value === null) {
                $properties['isValid'] = null;
                goto after_isValid;
            }

            $properties['isValid'] = $value;

            after_isValid:

            $value = $payload['reason'] ?? null;

            if ($value === null) {
                $properties['reason'] = null;
                goto after_reason;
            }

            $properties['reason'] = $value;

            after_reason:

            $value = $payload['responds_to_https'] ?? null;

            if ($value === null) {
                $properties['respondsToHttps'] = null;
                goto after_respondsToHttps;
            }

            $properties['respondsToHttps'] = $value;

            after_respondsToHttps:

            $value = $payload['enforces_https'] ?? null;

            if ($value === null) {
                $properties['enforcesHttps'] = null;
                goto after_enforcesHttps;
            }

            $properties['enforcesHttps'] = $value;

            after_enforcesHttps:

            $value = $payload['https_error'] ?? null;

            if ($value === null) {
                $properties['httpsError'] = null;
                goto after_httpsError;
            }

            $properties['httpsError'] = $value;

            after_httpsError:

            $value = $payload['is_https_eligible'] ?? null;

            if ($value === null) {
                $properties['isHttpsEligible'] = null;
                goto after_isHttpsEligible;
            }

            $properties['isHttpsEligible'] = $value;

            after_isHttpsEligible:

            $value = $payload['caa_error'] ?? null;

            if ($value === null) {
                $properties['caaError'] = null;
                goto after_caaError;
            }

            $properties['caaError'] = $value;

            after_caaError:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\Github\Schema\PagesHealthCheck' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck($object),
            'ApiClients\Client\Github\Schema\PagesHealthCheck\Domain' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️Domain($object),
            'ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️AltDomain($object),
            'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PagesHealthCheck);
        $result = [];

        $domain = $object->domain;

        if ($domain === null) {
            goto after_domain;
        }
        $domain = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️Domain($domain);
        after_domain:        $result['domain'] = $domain;

        
        $altDomain = $object->altDomain;

        if ($altDomain === null) {
            goto after_altDomain;
        }
        $altDomain = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️AltDomain($altDomain);
        after_altDomain:        $result['alt_domain'] = $altDomain;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️Domain(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PagesHealthCheck\Domain);
        $result = [];

        $host = $object->host;

        if ($host === null) {
            goto after_host;
        }
        after_host:        $result['host'] = $host;

        
        $uri = $object->uri;

        if ($uri === null) {
            goto after_uri;
        }
        after_uri:        $result['uri'] = $uri;

        
        $nameservers = $object->nameservers;

        if ($nameservers === null) {
            goto after_nameservers;
        }
        after_nameservers:        $result['nameservers'] = $nameservers;

        
        $dnsResolves = $object->dnsResolves;

        if ($dnsResolves === null) {
            goto after_dnsResolves;
        }
        after_dnsResolves:        $result['dns_resolves'] = $dnsResolves;

        
        $isProxied = $object->isProxied;

        if ($isProxied === null) {
            goto after_isProxied;
        }
        after_isProxied:        $result['is_proxied'] = $isProxied;

        
        $isCloudflareIp = $object->isCloudflareIp;

        if ($isCloudflareIp === null) {
            goto after_isCloudflareIp;
        }
        after_isCloudflareIp:        $result['is_cloudflare_ip'] = $isCloudflareIp;

        
        $isFastlyIp = $object->isFastlyIp;

        if ($isFastlyIp === null) {
            goto after_isFastlyIp;
        }
        after_isFastlyIp:        $result['is_fastly_ip'] = $isFastlyIp;

        
        $isOldIpAddress = $object->isOldIpAddress;

        if ($isOldIpAddress === null) {
            goto after_isOldIpAddress;
        }
        after_isOldIpAddress:        $result['is_old_ip_address'] = $isOldIpAddress;

        
        $isARecord = $object->isARecord;

        if ($isARecord === null) {
            goto after_isARecord;
        }
        after_isARecord:        $result['is_a_record'] = $isARecord;

        
        $hasCnameRecord = $object->hasCnameRecord;

        if ($hasCnameRecord === null) {
            goto after_hasCnameRecord;
        }
        after_hasCnameRecord:        $result['has_cname_record'] = $hasCnameRecord;

        
        $hasMxRecordsPresent = $object->hasMxRecordsPresent;

        if ($hasMxRecordsPresent === null) {
            goto after_hasMxRecordsPresent;
        }
        after_hasMxRecordsPresent:        $result['has_mx_records_present'] = $hasMxRecordsPresent;

        
        $isValidDomain = $object->isValidDomain;

        if ($isValidDomain === null) {
            goto after_isValidDomain;
        }
        after_isValidDomain:        $result['is_valid_domain'] = $isValidDomain;

        
        $isApexDomain = $object->isApexDomain;

        if ($isApexDomain === null) {
            goto after_isApexDomain;
        }
        after_isApexDomain:        $result['is_apex_domain'] = $isApexDomain;

        
        $shouldBeARecord = $object->shouldBeARecord;

        if ($shouldBeARecord === null) {
            goto after_shouldBeARecord;
        }
        after_shouldBeARecord:        $result['should_be_a_record'] = $shouldBeARecord;

        
        $isCnameToGithubUserDomain = $object->isCnameToGithubUserDomain;

        if ($isCnameToGithubUserDomain === null) {
            goto after_isCnameToGithubUserDomain;
        }
        after_isCnameToGithubUserDomain:        $result['is_cname_to_github_user_domain'] = $isCnameToGithubUserDomain;

        
        $isCnameToPagesDotGithubDotCom = $object->isCnameToPagesDotGithubDotCom;

        if ($isCnameToPagesDotGithubDotCom === null) {
            goto after_isCnameToPagesDotGithubDotCom;
        }
        after_isCnameToPagesDotGithubDotCom:        $result['is_cname_to_pages_dot_github_dot_com'] = $isCnameToPagesDotGithubDotCom;

        
        $isCnameToFastly = $object->isCnameToFastly;

        if ($isCnameToFastly === null) {
            goto after_isCnameToFastly;
        }
        after_isCnameToFastly:        $result['is_cname_to_fastly'] = $isCnameToFastly;

        
        $isPointedToGithubPagesIp = $object->isPointedToGithubPagesIp;

        if ($isPointedToGithubPagesIp === null) {
            goto after_isPointedToGithubPagesIp;
        }
        after_isPointedToGithubPagesIp:        $result['is_pointed_to_github_pages_ip'] = $isPointedToGithubPagesIp;

        
        $isNonGithubPagesIpPresent = $object->isNonGithubPagesIpPresent;

        if ($isNonGithubPagesIpPresent === null) {
            goto after_isNonGithubPagesIpPresent;
        }
        after_isNonGithubPagesIpPresent:        $result['is_non_github_pages_ip_present'] = $isNonGithubPagesIpPresent;

        
        $isPagesDomain = $object->isPagesDomain;

        if ($isPagesDomain === null) {
            goto after_isPagesDomain;
        }
        after_isPagesDomain:        $result['is_pages_domain'] = $isPagesDomain;

        
        $isServedByPages = $object->isServedByPages;

        if ($isServedByPages === null) {
            goto after_isServedByPages;
        }
        after_isServedByPages:        $result['is_served_by_pages'] = $isServedByPages;

        
        $isValid = $object->isValid;

        if ($isValid === null) {
            goto after_isValid;
        }
        after_isValid:        $result['is_valid'] = $isValid;

        
        $reason = $object->reason;

        if ($reason === null) {
            goto after_reason;
        }
        after_reason:        $result['reason'] = $reason;

        
        $respondsToHttps = $object->respondsToHttps;

        if ($respondsToHttps === null) {
            goto after_respondsToHttps;
        }
        after_respondsToHttps:        $result['responds_to_https'] = $respondsToHttps;

        
        $enforcesHttps = $object->enforcesHttps;

        if ($enforcesHttps === null) {
            goto after_enforcesHttps;
        }
        after_enforcesHttps:        $result['enforces_https'] = $enforcesHttps;

        
        $httpsError = $object->httpsError;

        if ($httpsError === null) {
            goto after_httpsError;
        }
        after_httpsError:        $result['https_error'] = $httpsError;

        
        $isHttpsEligible = $object->isHttpsEligible;

        if ($isHttpsEligible === null) {
            goto after_isHttpsEligible;
        }
        after_isHttpsEligible:        $result['is_https_eligible'] = $isHttpsEligible;

        
        $caaError = $object->caaError;

        if ($caaError === null) {
            goto after_caaError;
        }
        after_caaError:        $result['caa_error'] = $caaError;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️AltDomain(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain);
        $result = [];

        $host = $object->host;

        if ($host === null) {
            goto after_host;
        }
        after_host:        $result['host'] = $host;

        
        $uri = $object->uri;

        if ($uri === null) {
            goto after_uri;
        }
        after_uri:        $result['uri'] = $uri;

        
        $nameservers = $object->nameservers;

        if ($nameservers === null) {
            goto after_nameservers;
        }
        after_nameservers:        $result['nameservers'] = $nameservers;

        
        $dnsResolves = $object->dnsResolves;

        if ($dnsResolves === null) {
            goto after_dnsResolves;
        }
        after_dnsResolves:        $result['dns_resolves'] = $dnsResolves;

        
        $isProxied = $object->isProxied;

        if ($isProxied === null) {
            goto after_isProxied;
        }
        after_isProxied:        $result['is_proxied'] = $isProxied;

        
        $isCloudflareIp = $object->isCloudflareIp;

        if ($isCloudflareIp === null) {
            goto after_isCloudflareIp;
        }
        after_isCloudflareIp:        $result['is_cloudflare_ip'] = $isCloudflareIp;

        
        $isFastlyIp = $object->isFastlyIp;

        if ($isFastlyIp === null) {
            goto after_isFastlyIp;
        }
        after_isFastlyIp:        $result['is_fastly_ip'] = $isFastlyIp;

        
        $isOldIpAddress = $object->isOldIpAddress;

        if ($isOldIpAddress === null) {
            goto after_isOldIpAddress;
        }
        after_isOldIpAddress:        $result['is_old_ip_address'] = $isOldIpAddress;

        
        $isARecord = $object->isARecord;

        if ($isARecord === null) {
            goto after_isARecord;
        }
        after_isARecord:        $result['is_a_record'] = $isARecord;

        
        $hasCnameRecord = $object->hasCnameRecord;

        if ($hasCnameRecord === null) {
            goto after_hasCnameRecord;
        }
        after_hasCnameRecord:        $result['has_cname_record'] = $hasCnameRecord;

        
        $hasMxRecordsPresent = $object->hasMxRecordsPresent;

        if ($hasMxRecordsPresent === null) {
            goto after_hasMxRecordsPresent;
        }
        after_hasMxRecordsPresent:        $result['has_mx_records_present'] = $hasMxRecordsPresent;

        
        $isValidDomain = $object->isValidDomain;

        if ($isValidDomain === null) {
            goto after_isValidDomain;
        }
        after_isValidDomain:        $result['is_valid_domain'] = $isValidDomain;

        
        $isApexDomain = $object->isApexDomain;

        if ($isApexDomain === null) {
            goto after_isApexDomain;
        }
        after_isApexDomain:        $result['is_apex_domain'] = $isApexDomain;

        
        $shouldBeARecord = $object->shouldBeARecord;

        if ($shouldBeARecord === null) {
            goto after_shouldBeARecord;
        }
        after_shouldBeARecord:        $result['should_be_a_record'] = $shouldBeARecord;

        
        $isCnameToGithubUserDomain = $object->isCnameToGithubUserDomain;

        if ($isCnameToGithubUserDomain === null) {
            goto after_isCnameToGithubUserDomain;
        }
        after_isCnameToGithubUserDomain:        $result['is_cname_to_github_user_domain'] = $isCnameToGithubUserDomain;

        
        $isCnameToPagesDotGithubDotCom = $object->isCnameToPagesDotGithubDotCom;

        if ($isCnameToPagesDotGithubDotCom === null) {
            goto after_isCnameToPagesDotGithubDotCom;
        }
        after_isCnameToPagesDotGithubDotCom:        $result['is_cname_to_pages_dot_github_dot_com'] = $isCnameToPagesDotGithubDotCom;

        
        $isCnameToFastly = $object->isCnameToFastly;

        if ($isCnameToFastly === null) {
            goto after_isCnameToFastly;
        }
        after_isCnameToFastly:        $result['is_cname_to_fastly'] = $isCnameToFastly;

        
        $isPointedToGithubPagesIp = $object->isPointedToGithubPagesIp;

        if ($isPointedToGithubPagesIp === null) {
            goto after_isPointedToGithubPagesIp;
        }
        after_isPointedToGithubPagesIp:        $result['is_pointed_to_github_pages_ip'] = $isPointedToGithubPagesIp;

        
        $isNonGithubPagesIpPresent = $object->isNonGithubPagesIpPresent;

        if ($isNonGithubPagesIpPresent === null) {
            goto after_isNonGithubPagesIpPresent;
        }
        after_isNonGithubPagesIpPresent:        $result['is_non_github_pages_ip_present'] = $isNonGithubPagesIpPresent;

        
        $isPagesDomain = $object->isPagesDomain;

        if ($isPagesDomain === null) {
            goto after_isPagesDomain;
        }
        after_isPagesDomain:        $result['is_pages_domain'] = $isPagesDomain;

        
        $isServedByPages = $object->isServedByPages;

        if ($isServedByPages === null) {
            goto after_isServedByPages;
        }
        after_isServedByPages:        $result['is_served_by_pages'] = $isServedByPages;

        
        $isValid = $object->isValid;

        if ($isValid === null) {
            goto after_isValid;
        }
        after_isValid:        $result['is_valid'] = $isValid;

        
        $reason = $object->reason;

        if ($reason === null) {
            goto after_reason;
        }
        after_reason:        $result['reason'] = $reason;

        
        $respondsToHttps = $object->respondsToHttps;

        if ($respondsToHttps === null) {
            goto after_respondsToHttps;
        }
        after_respondsToHttps:        $result['responds_to_https'] = $respondsToHttps;

        
        $enforcesHttps = $object->enforcesHttps;

        if ($enforcesHttps === null) {
            goto after_enforcesHttps;
        }
        after_enforcesHttps:        $result['enforces_https'] = $enforcesHttps;

        
        $httpsError = $object->httpsError;

        if ($httpsError === null) {
            goto after_httpsError;
        }
        after_httpsError:        $result['https_error'] = $httpsError;

        
        $isHttpsEligible = $object->isHttpsEligible;

        if ($isHttpsEligible === null) {
            goto after_isHttpsEligible;
        }
        after_isHttpsEligible:        $result['is_https_eligible'] = $isHttpsEligible;

        
        $caaError = $object->caaError;

        if ($caaError === null) {
            goto after_caaError;
        }
        after_caaError:        $result['caa_error'] = $caaError;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
