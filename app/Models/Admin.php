<?php

namespace app\Models;

use App\Models\Resources\Faq;

class Admin{
    public function getFaqs() {
        return Faq::all();
    }
    
    public function getFaqById($id) {
        return Faq::where('id',$id)->get()->first();
    }
}

