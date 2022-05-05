<?php

namespace Khomeriki\BitgoWallet\Contracts;

use Illuminate\Http\Client\Response;

interface BitgoContract
{
    /**
     * @return Response
     */
    public function me(): Response;

    /**
     * @return Response
     */
    public function pingExpress(): Response;

    /**
     * @return Response
     */
    public function ping(): Response;

    /**
     * @param string $coin
     * @param string $label
     * @param string $passphrase
     * @return array|null
     */
    public function generateWallet(string $coin, string $label, string $passphrase): ?array;

    /**
     * @param string $coin
     * @param string $walletId
     * @return array|null
     */
    public function getWallet(string $coin, string $walletId): ?array;

    /**
     * @param string $coin
     * @param string $walletId
     * @param string|null $label
     * @return array|null
     */
    public function generaAddressOnWallet(string $coin, string $walletId, string $label = null): ?array;

    /**
     * @param string $coin
     * @param string $walletId
     * @param int $numConfirmations
     * @param string|null $callbackUrl
     * @return array|null
     */
    public function addWalletWebhook(string $coin, string $walletId, int $numConfirmations = 0, string $callbackUrl = null): ?array;
}
