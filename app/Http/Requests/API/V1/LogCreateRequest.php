<?php

namespace App\Http\Requests\API\V1;

use App\Enums\LevelEnum;
use App\Http\Requests\BaseRequest;

class LogCreateRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'client' => 'required|string|max:255',
            'message' => 'required|string|max:3096',
            'level' => 'required|string|in:' . LevelEnum::toImplode(),
            'userId' => 'required|integer'
        ];
    }
}
