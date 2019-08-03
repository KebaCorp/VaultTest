<?php

namespace app\helpers;

use yii\base\InvalidConfigException;
use yii\httpclient\Client;
use yii\httpclient\Exception;

/**
 * Class VaultHelper
 * @package app\helpers
 */
class VaultHelper
{
    /**
     * Paths.
     */
    const PATH_APP = 'app';
    const PATH_MYSQL = 'databases/mysql';
    const PATH_MONGODB = 'databases/mongodb';

    /**
     * Returns secret by path.
     *
     * @param string $path
     * @return bool|mixed
     */
    public static function getSecret(string $path)
    {
        // Vault path
        $url = self::getBasePath() . $path;

        $client = new Client();
        try {
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setHeaders(['X-Vault-Token: ' . env('VAULT_TOKEN')])
                ->setUrl($url)
                ->send();

            if ($response->isOk) {
                return $response->data;
            }
        } catch (InvalidConfigException $e) {
        } catch (Exception $e) {
        }

        return false;
    }

    /**
     * Returns Vault base path.
     *
     * @return string
     */
    public static function getBasePath(): string
    {
        return env('VAULT_BASE_URL');
    }
}
