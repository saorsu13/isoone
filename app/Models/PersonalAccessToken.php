<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonalAccessToken
 * 
 * @property int $personal_access_tokens_id
 * @property string $tokenable_type
 * @property int $tokenable_id
 * @property string $name
 * @property string $token
 * @property string|null $habilities
 * @property Carbon|null $last_used_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PersonalAccessToken extends Model
{
	protected $table = 'personal_access_tokens';
	protected $primaryKey = 'personal_access_tokens_id';

	protected $casts = [
		'tokenable_id' => 'int',
		'last_used_at' => 'date'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'tokenable_type',
		'tokenable_id',
		'name',
		'token',
		'habilities',
		'last_used_at'
	];
}
