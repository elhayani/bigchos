<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'knpu.oauth2.client.facebook' shared service.

include_once $this->targetDirs[3].'\\vendor\\knpuniversity\\oauth2-client-bundle\\src\\Client\\OAuth2ClientInterface.php';
include_once $this->targetDirs[3].'\\vendor\\knpuniversity\\oauth2-client-bundle\\src\\Client\\OAuth2Client.php';
include_once $this->targetDirs[3].'\\vendor\\knpuniversity\\oauth2-client-bundle\\src\\Client\\Provider\\FacebookClient.php';
include_once $this->targetDirs[3].'\\vendor\\league\\oauth2-client\\src\\Tool\\ArrayAccessorTrait.php';
include_once $this->targetDirs[3].'\\vendor\\league\\oauth2-client\\src\\Tool\\GuardedPropertyTrait.php';
include_once $this->targetDirs[3].'\\vendor\\league\\oauth2-client\\src\\Tool\\QueryBuilderTrait.php';
include_once $this->targetDirs[3].'\\vendor\\league\\oauth2-client\\src\\Provider\\AbstractProvider.php';
include_once $this->targetDirs[3].'\\vendor\\league\\oauth2-facebook\\src\\Provider\\Facebook.php';
include_once $this->targetDirs[3].'\\vendor\\knpuniversity\\oauth2-client-bundle\\src\\DependencyInjection\\ProviderFactory.php';

return $this->services['knpu.oauth2.client.facebook'] = new \KnpU\OAuth2ClientBundle\Client\Provider\FacebookClient((new \KnpU\OAuth2ClientBundle\DependencyInjection\ProviderFactory(($this->services['router'] ?? $this->getRouterService())))->createProvider('League\\OAuth2\\Client\\Provider\\Facebook', ['clientId' => $this->getEnv('OAUTH_FACEBOOK_ID'), 'clientSecret' => $this->getEnv('OAUTH_FACEBOOK_SECRET'), 'graphApiVersion' => 'v3.2'], 'connect_facebook_check', [], []), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
