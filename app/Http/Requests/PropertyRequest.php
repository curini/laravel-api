<?php

namespace App\Http\Requests;

use App\Enums\LocaleEnum;
use App\Enums\StatesEnum;
use App\Enums\OtherInfoEnum;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Override;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'country' => [Rule::enum(LocaleEnum::class)],
            'state' =>  [Rule::enum(StatesEnum::class)],
            'other_info' => [Rule::enum(OtherInfoEnum::class)]
        ];
    }

    #[Override]
    public function toArray(): array
    {
        $query = http_build_query([
            'locale' => $this->country,
            'serpSlug' => [
                $this->state,
                $this->other_info
            ]
        ]);

        $query = preg_replace('/%5B\d+%5D=/', '=', $query);

        return [
            'query' => $query
        ];
    }
}
