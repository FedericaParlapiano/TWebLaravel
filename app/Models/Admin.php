<?php

namespace app\Models;

use App\Models\Resources\Faq;

class Admin{
    public function getFaqs() {
        return Faq::all();
    }
}

