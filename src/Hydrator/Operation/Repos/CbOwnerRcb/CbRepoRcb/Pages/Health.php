<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages;

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
            'ApiClients\Client\GitHub\Schema\PagesHealthCheck' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck($payload),
                'ApiClients\Client\GitHub\Schema\PagesHealthCheck\Domain' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck⚡️Domain($payload),
                'ApiClients\Client\GitHub\Schema\PagesHealthCheck\AltDomain' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck⚡️AltDomain($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck(array $payload): \ApiClients\Client\GitHub\Schema\PagesHealthCheck
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck⚡️Domain($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['domain'] = $value;

            after_domain:

            $value = $payload['alt_domain'] ?? null;

            if ($value === null) {
                $properties['alt_domain'] = null;
                goto after_alt_domain;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'alt_domain';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck⚡️AltDomain($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['alt_domain'] = $value;

            after_alt_domain:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PagesHealthCheck', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PagesHealthCheck::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PagesHealthCheck(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PagesHealthCheck', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck⚡️Domain(array $payload): \ApiClients\Client\GitHub\Schema\PagesHealthCheck\Domain
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
                $properties['dns_resolves'] = null;
                goto after_dns_resolves;
            }

            $properties['dns_resolves'] = $value;

            after_dns_resolves:

            $value = $payload['is_proxied'] ?? null;

            if ($value === null) {
                $properties['is_proxied'] = null;
                goto after_is_proxied;
            }

            $properties['is_proxied'] = $value;

            after_is_proxied:

            $value = $payload['is_cloudflare_ip'] ?? null;

            if ($value === null) {
                $properties['is_cloudflare_ip'] = null;
                goto after_is_cloudflare_ip;
            }

            $properties['is_cloudflare_ip'] = $value;

            after_is_cloudflare_ip:

            $value = $payload['is_fastly_ip'] ?? null;

            if ($value === null) {
                $properties['is_fastly_ip'] = null;
                goto after_is_fastly_ip;
            }

            $properties['is_fastly_ip'] = $value;

            after_is_fastly_ip:

            $value = $payload['is_old_ip_address'] ?? null;

            if ($value === null) {
                $properties['is_old_ip_address'] = null;
                goto after_is_old_ip_address;
            }

            $properties['is_old_ip_address'] = $value;

            after_is_old_ip_address:

            $value = $payload['is_a_record'] ?? null;

            if ($value === null) {
                $properties['is_a_record'] = null;
                goto after_is_a_record;
            }

            $properties['is_a_record'] = $value;

            after_is_a_record:

            $value = $payload['has_cname_record'] ?? null;

            if ($value === null) {
                $properties['has_cname_record'] = null;
                goto after_has_cname_record;
            }

            $properties['has_cname_record'] = $value;

            after_has_cname_record:

            $value = $payload['has_mx_records_present'] ?? null;

            if ($value === null) {
                $properties['has_mx_records_present'] = null;
                goto after_has_mx_records_present;
            }

            $properties['has_mx_records_present'] = $value;

            after_has_mx_records_present:

            $value = $payload['is_valid_domain'] ?? null;

            if ($value === null) {
                $properties['is_valid_domain'] = null;
                goto after_is_valid_domain;
            }

            $properties['is_valid_domain'] = $value;

            after_is_valid_domain:

            $value = $payload['is_apex_domain'] ?? null;

            if ($value === null) {
                $properties['is_apex_domain'] = null;
                goto after_is_apex_domain;
            }

            $properties['is_apex_domain'] = $value;

            after_is_apex_domain:

            $value = $payload['should_be_a_record'] ?? null;

            if ($value === null) {
                $properties['should_be_a_record'] = null;
                goto after_should_be_a_record;
            }

            $properties['should_be_a_record'] = $value;

            after_should_be_a_record:

            $value = $payload['is_cname_to_github_user_domain'] ?? null;

            if ($value === null) {
                $properties['is_cname_to_github_user_domain'] = null;
                goto after_is_cname_to_github_user_domain;
            }

            $properties['is_cname_to_github_user_domain'] = $value;

            after_is_cname_to_github_user_domain:

            $value = $payload['is_cname_to_pages_dot_github_dot_com'] ?? null;

            if ($value === null) {
                $properties['is_cname_to_pages_dot_github_dot_com'] = null;
                goto after_is_cname_to_pages_dot_github_dot_com;
            }

            $properties['is_cname_to_pages_dot_github_dot_com'] = $value;

            after_is_cname_to_pages_dot_github_dot_com:

            $value = $payload['is_cname_to_fastly'] ?? null;

            if ($value === null) {
                $properties['is_cname_to_fastly'] = null;
                goto after_is_cname_to_fastly;
            }

            $properties['is_cname_to_fastly'] = $value;

            after_is_cname_to_fastly:

            $value = $payload['is_pointed_to_github_pages_ip'] ?? null;

            if ($value === null) {
                $properties['is_pointed_to_github_pages_ip'] = null;
                goto after_is_pointed_to_github_pages_ip;
            }

            $properties['is_pointed_to_github_pages_ip'] = $value;

            after_is_pointed_to_github_pages_ip:

            $value = $payload['is_non_github_pages_ip_present'] ?? null;

            if ($value === null) {
                $properties['is_non_github_pages_ip_present'] = null;
                goto after_is_non_github_pages_ip_present;
            }

            $properties['is_non_github_pages_ip_present'] = $value;

            after_is_non_github_pages_ip_present:

            $value = $payload['is_pages_domain'] ?? null;

            if ($value === null) {
                $properties['is_pages_domain'] = null;
                goto after_is_pages_domain;
            }

            $properties['is_pages_domain'] = $value;

            after_is_pages_domain:

            $value = $payload['is_served_by_pages'] ?? null;

            if ($value === null) {
                $properties['is_served_by_pages'] = null;
                goto after_is_served_by_pages;
            }

            $properties['is_served_by_pages'] = $value;

            after_is_served_by_pages:

            $value = $payload['is_valid'] ?? null;

            if ($value === null) {
                $properties['is_valid'] = null;
                goto after_is_valid;
            }

            $properties['is_valid'] = $value;

            after_is_valid:

            $value = $payload['reason'] ?? null;

            if ($value === null) {
                $properties['reason'] = null;
                goto after_reason;
            }

            $properties['reason'] = $value;

            after_reason:

            $value = $payload['responds_to_https'] ?? null;

            if ($value === null) {
                $properties['responds_to_https'] = null;
                goto after_responds_to_https;
            }

            $properties['responds_to_https'] = $value;

            after_responds_to_https:

            $value = $payload['enforces_https'] ?? null;

            if ($value === null) {
                $properties['enforces_https'] = null;
                goto after_enforces_https;
            }

            $properties['enforces_https'] = $value;

            after_enforces_https:

            $value = $payload['https_error'] ?? null;

            if ($value === null) {
                $properties['https_error'] = null;
                goto after_https_error;
            }

            $properties['https_error'] = $value;

            after_https_error:

            $value = $payload['is_https_eligible'] ?? null;

            if ($value === null) {
                $properties['is_https_eligible'] = null;
                goto after_is_https_eligible;
            }

            $properties['is_https_eligible'] = $value;

            after_is_https_eligible:

            $value = $payload['caa_error'] ?? null;

            if ($value === null) {
                $properties['caa_error'] = null;
                goto after_caa_error;
            }

            $properties['caa_error'] = $value;

            after_caa_error:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PagesHealthCheck\Domain', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PagesHealthCheck\Domain::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PagesHealthCheck\Domain(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PagesHealthCheck\Domain', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck⚡️AltDomain(array $payload): \ApiClients\Client\GitHub\Schema\PagesHealthCheck\AltDomain
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
                $properties['dns_resolves'] = null;
                goto after_dns_resolves;
            }

            $properties['dns_resolves'] = $value;

            after_dns_resolves:

            $value = $payload['is_proxied'] ?? null;

            if ($value === null) {
                $properties['is_proxied'] = null;
                goto after_is_proxied;
            }

            $properties['is_proxied'] = $value;

            after_is_proxied:

            $value = $payload['is_cloudflare_ip'] ?? null;

            if ($value === null) {
                $properties['is_cloudflare_ip'] = null;
                goto after_is_cloudflare_ip;
            }

            $properties['is_cloudflare_ip'] = $value;

            after_is_cloudflare_ip:

            $value = $payload['is_fastly_ip'] ?? null;

            if ($value === null) {
                $properties['is_fastly_ip'] = null;
                goto after_is_fastly_ip;
            }

            $properties['is_fastly_ip'] = $value;

            after_is_fastly_ip:

            $value = $payload['is_old_ip_address'] ?? null;

            if ($value === null) {
                $properties['is_old_ip_address'] = null;
                goto after_is_old_ip_address;
            }

            $properties['is_old_ip_address'] = $value;

            after_is_old_ip_address:

            $value = $payload['is_a_record'] ?? null;

            if ($value === null) {
                $properties['is_a_record'] = null;
                goto after_is_a_record;
            }

            $properties['is_a_record'] = $value;

            after_is_a_record:

            $value = $payload['has_cname_record'] ?? null;

            if ($value === null) {
                $properties['has_cname_record'] = null;
                goto after_has_cname_record;
            }

            $properties['has_cname_record'] = $value;

            after_has_cname_record:

            $value = $payload['has_mx_records_present'] ?? null;

            if ($value === null) {
                $properties['has_mx_records_present'] = null;
                goto after_has_mx_records_present;
            }

            $properties['has_mx_records_present'] = $value;

            after_has_mx_records_present:

            $value = $payload['is_valid_domain'] ?? null;

            if ($value === null) {
                $properties['is_valid_domain'] = null;
                goto after_is_valid_domain;
            }

            $properties['is_valid_domain'] = $value;

            after_is_valid_domain:

            $value = $payload['is_apex_domain'] ?? null;

            if ($value === null) {
                $properties['is_apex_domain'] = null;
                goto after_is_apex_domain;
            }

            $properties['is_apex_domain'] = $value;

            after_is_apex_domain:

            $value = $payload['should_be_a_record'] ?? null;

            if ($value === null) {
                $properties['should_be_a_record'] = null;
                goto after_should_be_a_record;
            }

            $properties['should_be_a_record'] = $value;

            after_should_be_a_record:

            $value = $payload['is_cname_to_github_user_domain'] ?? null;

            if ($value === null) {
                $properties['is_cname_to_github_user_domain'] = null;
                goto after_is_cname_to_github_user_domain;
            }

            $properties['is_cname_to_github_user_domain'] = $value;

            after_is_cname_to_github_user_domain:

            $value = $payload['is_cname_to_pages_dot_github_dot_com'] ?? null;

            if ($value === null) {
                $properties['is_cname_to_pages_dot_github_dot_com'] = null;
                goto after_is_cname_to_pages_dot_github_dot_com;
            }

            $properties['is_cname_to_pages_dot_github_dot_com'] = $value;

            after_is_cname_to_pages_dot_github_dot_com:

            $value = $payload['is_cname_to_fastly'] ?? null;

            if ($value === null) {
                $properties['is_cname_to_fastly'] = null;
                goto after_is_cname_to_fastly;
            }

            $properties['is_cname_to_fastly'] = $value;

            after_is_cname_to_fastly:

            $value = $payload['is_pointed_to_github_pages_ip'] ?? null;

            if ($value === null) {
                $properties['is_pointed_to_github_pages_ip'] = null;
                goto after_is_pointed_to_github_pages_ip;
            }

            $properties['is_pointed_to_github_pages_ip'] = $value;

            after_is_pointed_to_github_pages_ip:

            $value = $payload['is_non_github_pages_ip_present'] ?? null;

            if ($value === null) {
                $properties['is_non_github_pages_ip_present'] = null;
                goto after_is_non_github_pages_ip_present;
            }

            $properties['is_non_github_pages_ip_present'] = $value;

            after_is_non_github_pages_ip_present:

            $value = $payload['is_pages_domain'] ?? null;

            if ($value === null) {
                $properties['is_pages_domain'] = null;
                goto after_is_pages_domain;
            }

            $properties['is_pages_domain'] = $value;

            after_is_pages_domain:

            $value = $payload['is_served_by_pages'] ?? null;

            if ($value === null) {
                $properties['is_served_by_pages'] = null;
                goto after_is_served_by_pages;
            }

            $properties['is_served_by_pages'] = $value;

            after_is_served_by_pages:

            $value = $payload['is_valid'] ?? null;

            if ($value === null) {
                $properties['is_valid'] = null;
                goto after_is_valid;
            }

            $properties['is_valid'] = $value;

            after_is_valid:

            $value = $payload['reason'] ?? null;

            if ($value === null) {
                $properties['reason'] = null;
                goto after_reason;
            }

            $properties['reason'] = $value;

            after_reason:

            $value = $payload['responds_to_https'] ?? null;

            if ($value === null) {
                $properties['responds_to_https'] = null;
                goto after_responds_to_https;
            }

            $properties['responds_to_https'] = $value;

            after_responds_to_https:

            $value = $payload['enforces_https'] ?? null;

            if ($value === null) {
                $properties['enforces_https'] = null;
                goto after_enforces_https;
            }

            $properties['enforces_https'] = $value;

            after_enforces_https:

            $value = $payload['https_error'] ?? null;

            if ($value === null) {
                $properties['https_error'] = null;
                goto after_https_error;
            }

            $properties['https_error'] = $value;

            after_https_error:

            $value = $payload['is_https_eligible'] ?? null;

            if ($value === null) {
                $properties['is_https_eligible'] = null;
                goto after_is_https_eligible;
            }

            $properties['is_https_eligible'] = $value;

            after_is_https_eligible:

            $value = $payload['caa_error'] ?? null;

            if ($value === null) {
                $properties['caa_error'] = null;
                goto after_caa_error;
            }

            $properties['caa_error'] = $value;

            after_caa_error:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PagesHealthCheck\AltDomain', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PagesHealthCheck\AltDomain::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PagesHealthCheck\AltDomain(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PagesHealthCheck\AltDomain', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
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
                $properties['documentation_url'] = null;
                goto after_documentation_url;
            }

            $properties['documentation_url'] = $value;

            after_documentation_url:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\PagesHealthCheck' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck($object),
            'ApiClients\Client\GitHub\Schema\PagesHealthCheck\Domain' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck⚡️Domain($object),
            'ApiClients\Client\GitHub\Schema\PagesHealthCheck\AltDomain' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck⚡️AltDomain($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PagesHealthCheck);
        $result = [];

        $domain = $object->domain;

        if ($domain === null) {
            goto after_domain;
        }
        $domain = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck⚡️Domain($domain);
        after_domain:        $result['domain'] = $domain;

        
        $alt_domain = $object->alt_domain;

        if ($alt_domain === null) {
            goto after_alt_domain;
        }
        $alt_domain = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck⚡️AltDomain($alt_domain);
        after_alt_domain:        $result['alt_domain'] = $alt_domain;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck⚡️Domain(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PagesHealthCheck\Domain);
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

        
        $dns_resolves = $object->dns_resolves;

        if ($dns_resolves === null) {
            goto after_dns_resolves;
        }
        after_dns_resolves:        $result['dns_resolves'] = $dns_resolves;

        
        $is_proxied = $object->is_proxied;

        if ($is_proxied === null) {
            goto after_is_proxied;
        }
        after_is_proxied:        $result['is_proxied'] = $is_proxied;

        
        $is_cloudflare_ip = $object->is_cloudflare_ip;

        if ($is_cloudflare_ip === null) {
            goto after_is_cloudflare_ip;
        }
        after_is_cloudflare_ip:        $result['is_cloudflare_ip'] = $is_cloudflare_ip;

        
        $is_fastly_ip = $object->is_fastly_ip;

        if ($is_fastly_ip === null) {
            goto after_is_fastly_ip;
        }
        after_is_fastly_ip:        $result['is_fastly_ip'] = $is_fastly_ip;

        
        $is_old_ip_address = $object->is_old_ip_address;

        if ($is_old_ip_address === null) {
            goto after_is_old_ip_address;
        }
        after_is_old_ip_address:        $result['is_old_ip_address'] = $is_old_ip_address;

        
        $is_a_record = $object->is_a_record;

        if ($is_a_record === null) {
            goto after_is_a_record;
        }
        after_is_a_record:        $result['is_a_record'] = $is_a_record;

        
        $has_cname_record = $object->has_cname_record;

        if ($has_cname_record === null) {
            goto after_has_cname_record;
        }
        after_has_cname_record:        $result['has_cname_record'] = $has_cname_record;

        
        $has_mx_records_present = $object->has_mx_records_present;

        if ($has_mx_records_present === null) {
            goto after_has_mx_records_present;
        }
        after_has_mx_records_present:        $result['has_mx_records_present'] = $has_mx_records_present;

        
        $is_valid_domain = $object->is_valid_domain;

        if ($is_valid_domain === null) {
            goto after_is_valid_domain;
        }
        after_is_valid_domain:        $result['is_valid_domain'] = $is_valid_domain;

        
        $is_apex_domain = $object->is_apex_domain;

        if ($is_apex_domain === null) {
            goto after_is_apex_domain;
        }
        after_is_apex_domain:        $result['is_apex_domain'] = $is_apex_domain;

        
        $should_be_a_record = $object->should_be_a_record;

        if ($should_be_a_record === null) {
            goto after_should_be_a_record;
        }
        after_should_be_a_record:        $result['should_be_a_record'] = $should_be_a_record;

        
        $is_cname_to_github_user_domain = $object->is_cname_to_github_user_domain;

        if ($is_cname_to_github_user_domain === null) {
            goto after_is_cname_to_github_user_domain;
        }
        after_is_cname_to_github_user_domain:        $result['is_cname_to_github_user_domain'] = $is_cname_to_github_user_domain;

        
        $is_cname_to_pages_dot_github_dot_com = $object->is_cname_to_pages_dot_github_dot_com;

        if ($is_cname_to_pages_dot_github_dot_com === null) {
            goto after_is_cname_to_pages_dot_github_dot_com;
        }
        after_is_cname_to_pages_dot_github_dot_com:        $result['is_cname_to_pages_dot_github_dot_com'] = $is_cname_to_pages_dot_github_dot_com;

        
        $is_cname_to_fastly = $object->is_cname_to_fastly;

        if ($is_cname_to_fastly === null) {
            goto after_is_cname_to_fastly;
        }
        after_is_cname_to_fastly:        $result['is_cname_to_fastly'] = $is_cname_to_fastly;

        
        $is_pointed_to_github_pages_ip = $object->is_pointed_to_github_pages_ip;

        if ($is_pointed_to_github_pages_ip === null) {
            goto after_is_pointed_to_github_pages_ip;
        }
        after_is_pointed_to_github_pages_ip:        $result['is_pointed_to_github_pages_ip'] = $is_pointed_to_github_pages_ip;

        
        $is_non_github_pages_ip_present = $object->is_non_github_pages_ip_present;

        if ($is_non_github_pages_ip_present === null) {
            goto after_is_non_github_pages_ip_present;
        }
        after_is_non_github_pages_ip_present:        $result['is_non_github_pages_ip_present'] = $is_non_github_pages_ip_present;

        
        $is_pages_domain = $object->is_pages_domain;

        if ($is_pages_domain === null) {
            goto after_is_pages_domain;
        }
        after_is_pages_domain:        $result['is_pages_domain'] = $is_pages_domain;

        
        $is_served_by_pages = $object->is_served_by_pages;

        if ($is_served_by_pages === null) {
            goto after_is_served_by_pages;
        }
        after_is_served_by_pages:        $result['is_served_by_pages'] = $is_served_by_pages;

        
        $is_valid = $object->is_valid;

        if ($is_valid === null) {
            goto after_is_valid;
        }
        after_is_valid:        $result['is_valid'] = $is_valid;

        
        $reason = $object->reason;

        if ($reason === null) {
            goto after_reason;
        }
        after_reason:        $result['reason'] = $reason;

        
        $responds_to_https = $object->responds_to_https;

        if ($responds_to_https === null) {
            goto after_responds_to_https;
        }
        after_responds_to_https:        $result['responds_to_https'] = $responds_to_https;

        
        $enforces_https = $object->enforces_https;

        if ($enforces_https === null) {
            goto after_enforces_https;
        }
        after_enforces_https:        $result['enforces_https'] = $enforces_https;

        
        $https_error = $object->https_error;

        if ($https_error === null) {
            goto after_https_error;
        }
        after_https_error:        $result['https_error'] = $https_error;

        
        $is_https_eligible = $object->is_https_eligible;

        if ($is_https_eligible === null) {
            goto after_is_https_eligible;
        }
        after_is_https_eligible:        $result['is_https_eligible'] = $is_https_eligible;

        
        $caa_error = $object->caa_error;

        if ($caa_error === null) {
            goto after_caa_error;
        }
        after_caa_error:        $result['caa_error'] = $caa_error;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHealthCheck⚡️AltDomain(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PagesHealthCheck\AltDomain);
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

        
        $dns_resolves = $object->dns_resolves;

        if ($dns_resolves === null) {
            goto after_dns_resolves;
        }
        after_dns_resolves:        $result['dns_resolves'] = $dns_resolves;

        
        $is_proxied = $object->is_proxied;

        if ($is_proxied === null) {
            goto after_is_proxied;
        }
        after_is_proxied:        $result['is_proxied'] = $is_proxied;

        
        $is_cloudflare_ip = $object->is_cloudflare_ip;

        if ($is_cloudflare_ip === null) {
            goto after_is_cloudflare_ip;
        }
        after_is_cloudflare_ip:        $result['is_cloudflare_ip'] = $is_cloudflare_ip;

        
        $is_fastly_ip = $object->is_fastly_ip;

        if ($is_fastly_ip === null) {
            goto after_is_fastly_ip;
        }
        after_is_fastly_ip:        $result['is_fastly_ip'] = $is_fastly_ip;

        
        $is_old_ip_address = $object->is_old_ip_address;

        if ($is_old_ip_address === null) {
            goto after_is_old_ip_address;
        }
        after_is_old_ip_address:        $result['is_old_ip_address'] = $is_old_ip_address;

        
        $is_a_record = $object->is_a_record;

        if ($is_a_record === null) {
            goto after_is_a_record;
        }
        after_is_a_record:        $result['is_a_record'] = $is_a_record;

        
        $has_cname_record = $object->has_cname_record;

        if ($has_cname_record === null) {
            goto after_has_cname_record;
        }
        after_has_cname_record:        $result['has_cname_record'] = $has_cname_record;

        
        $has_mx_records_present = $object->has_mx_records_present;

        if ($has_mx_records_present === null) {
            goto after_has_mx_records_present;
        }
        after_has_mx_records_present:        $result['has_mx_records_present'] = $has_mx_records_present;

        
        $is_valid_domain = $object->is_valid_domain;

        if ($is_valid_domain === null) {
            goto after_is_valid_domain;
        }
        after_is_valid_domain:        $result['is_valid_domain'] = $is_valid_domain;

        
        $is_apex_domain = $object->is_apex_domain;

        if ($is_apex_domain === null) {
            goto after_is_apex_domain;
        }
        after_is_apex_domain:        $result['is_apex_domain'] = $is_apex_domain;

        
        $should_be_a_record = $object->should_be_a_record;

        if ($should_be_a_record === null) {
            goto after_should_be_a_record;
        }
        after_should_be_a_record:        $result['should_be_a_record'] = $should_be_a_record;

        
        $is_cname_to_github_user_domain = $object->is_cname_to_github_user_domain;

        if ($is_cname_to_github_user_domain === null) {
            goto after_is_cname_to_github_user_domain;
        }
        after_is_cname_to_github_user_domain:        $result['is_cname_to_github_user_domain'] = $is_cname_to_github_user_domain;

        
        $is_cname_to_pages_dot_github_dot_com = $object->is_cname_to_pages_dot_github_dot_com;

        if ($is_cname_to_pages_dot_github_dot_com === null) {
            goto after_is_cname_to_pages_dot_github_dot_com;
        }
        after_is_cname_to_pages_dot_github_dot_com:        $result['is_cname_to_pages_dot_github_dot_com'] = $is_cname_to_pages_dot_github_dot_com;

        
        $is_cname_to_fastly = $object->is_cname_to_fastly;

        if ($is_cname_to_fastly === null) {
            goto after_is_cname_to_fastly;
        }
        after_is_cname_to_fastly:        $result['is_cname_to_fastly'] = $is_cname_to_fastly;

        
        $is_pointed_to_github_pages_ip = $object->is_pointed_to_github_pages_ip;

        if ($is_pointed_to_github_pages_ip === null) {
            goto after_is_pointed_to_github_pages_ip;
        }
        after_is_pointed_to_github_pages_ip:        $result['is_pointed_to_github_pages_ip'] = $is_pointed_to_github_pages_ip;

        
        $is_non_github_pages_ip_present = $object->is_non_github_pages_ip_present;

        if ($is_non_github_pages_ip_present === null) {
            goto after_is_non_github_pages_ip_present;
        }
        after_is_non_github_pages_ip_present:        $result['is_non_github_pages_ip_present'] = $is_non_github_pages_ip_present;

        
        $is_pages_domain = $object->is_pages_domain;

        if ($is_pages_domain === null) {
            goto after_is_pages_domain;
        }
        after_is_pages_domain:        $result['is_pages_domain'] = $is_pages_domain;

        
        $is_served_by_pages = $object->is_served_by_pages;

        if ($is_served_by_pages === null) {
            goto after_is_served_by_pages;
        }
        after_is_served_by_pages:        $result['is_served_by_pages'] = $is_served_by_pages;

        
        $is_valid = $object->is_valid;

        if ($is_valid === null) {
            goto after_is_valid;
        }
        after_is_valid:        $result['is_valid'] = $is_valid;

        
        $reason = $object->reason;

        if ($reason === null) {
            goto after_reason;
        }
        after_reason:        $result['reason'] = $reason;

        
        $responds_to_https = $object->responds_to_https;

        if ($responds_to_https === null) {
            goto after_responds_to_https;
        }
        after_responds_to_https:        $result['responds_to_https'] = $responds_to_https;

        
        $enforces_https = $object->enforces_https;

        if ($enforces_https === null) {
            goto after_enforces_https;
        }
        after_enforces_https:        $result['enforces_https'] = $enforces_https;

        
        $https_error = $object->https_error;

        if ($https_error === null) {
            goto after_https_error;
        }
        after_https_error:        $result['https_error'] = $https_error;

        
        $is_https_eligible = $object->is_https_eligible;

        if ($is_https_eligible === null) {
            goto after_is_https_eligible;
        }
        after_is_https_eligible:        $result['is_https_eligible'] = $is_https_eligible;

        
        $caa_error = $object->caa_error;

        if ($caa_error === null) {
            goto after_caa_error;
        }
        after_caa_error:        $result['caa_error'] = $caa_error;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
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
