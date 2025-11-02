<?php

namespace App\Rules;

use App\Models\Review;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;

class ReviewCooldown implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $userId = Auth::id();

        $lastReview = Review::where('user_id', $userId)
            ->latest('created_at')
            ->first();

        if (!$lastReview) {
            return;
        }

        $hoursSinceLast = now()->diffInHours($lastReview->created_at);

        if ($hoursSinceLast < 4) {
            $fail('After 4 hours, u may place a new review.');
        }
    }

}
