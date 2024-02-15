<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Routing\Controller as BaseController;

class SolanaController extends BaseController {

    public function createWallet(): string {
        return "";
    }
    
    public function getBalance(): float {
        return 0.00;
    }

    public function transferAmount(): bool {
        return true;
    }

}