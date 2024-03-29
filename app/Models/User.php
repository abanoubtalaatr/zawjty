<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'country_name',
        'age',
        'birth_day',
        'gender',
        'description',
        'description_partner',
        'country_id',
        'nationality_id',
        'age_id',
        'long_id',
        'weight_id',
        'hair_type_id',
        'hair_color_id',
        'color_eye_id',
        'color_skin_id',
        'health_status_id',
        'religiosity_id',
        'beard_id',
        'commitment_prayer_id',
        'smooking_id',
        'music_id',
        'eduction_id',
        'working_id',
        'financial_status_id',
        'annual_income_id',
        'want_married_id',
        'marriage_type_id',
        'marital_status_id',
        'having_children_id',
        'image',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    protected $with = ['subscribe'];

    // that i send it
    public function senderChats()
    {
        return $this->hasMany(Chat::class, 'sender_id');
    }

    //that i receiver it
    public function receiverChats()
    {
        return $this->hasMany(Chat::class, 'receiver_id');
    }

    public function package()
    {
        return Subscribe::where('user_id', $this->id)->whereDate('expire_at', '>', Carbon::today())->orderBy('created_at', 'desc')->first();
    }

    //feature of package
    public function features()
    {
        if ($this->package()) {
            $idsOfFeature = array_column(FeaturePackage::where('package_id', $this->package()->package_id)->get('feature_id')->toArray(), 'feature_id');
            
            return array_column(Feature::whereIn('id', $idsOfFeature)->get('key')->toArray(), 'key');
        }
        return null;
    }

    public function currentPackage()
    {
        if ($this->package()) {
            $package = Package::find($this->package()->package_id);
            $package['expire_at'] = $this->package()->expire_at;
            return $package;
        }

        return null;
    }

    public function age()
    {
        return $this->belongsTo(Age::class, 'age_id');
    }

    public function beard()
    {
        return $this->belongsTo(Beard::class, 'beard_id');
    }

    public function commitmentPrayer()
    {
        return $this->belongsTo(CommitmentPrayer::class, 'commitment_prayer_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function education()
    {
        return $this->belongsTo(Education::class, 'eduction_id');
    }

    public function long()
    {
        return $this->belongsTo(Long::class, 'long_id');
    }

    public function weight()
    {
        return $this->belongsTo(Weight::class, 'weight_id');
    }

    public function music()
    {
        return $this->belongsTo(Music::class, 'music_id');
    }

    public function nationality()
    {
        return $this->belongsTo(Nationality::class, 'nationality_id');
    }

    public function smooking()
    {
        return $this->belongsTo(Smooking::class, 'smooking_id');
    }

    public function working()
    {
        return $this->belongsTo(Working::class, 'working_id');
    }

    public function hairType()
    {
        return $this->belongsTo(HairType::class, 'hair_type_id');
    }

    public function financialStatus()
    {
        return $this->belongsTo(FinancialStatus::class, 'financial_status_id');
    }

    public function hairColor()
    {
        return $this->belongsTo(HairColor::class, 'hair_color_id');
    }

    public function annualIncome()
    {
        return $this->belongsTo(AnnualIncome::class, 'annual_income_id');
    }

    public function colorEye()
    {
        return $this->belongsTo(ColorEye::class, 'color_eye_id');
    }

    public function wantMarried()
    {
        return $this->belongsTo(WantMarried::class, 'want_married_id');
    }

    public function colorSkin()
    {
        return $this->belongsTo(ColorSkin::class, 'color_skin_id');
    }


    public function marriageType()
    {
        return $this->belongsTo(MarriageType::class, 'marriage_type_id');
    }

    public function healthStatus()
    {
        return $this->belongsTo(HealthStatus::class, 'health_status_id');
    }

    public function maritalStatus()
    {
        return $this->belongsTo(MaritalStatus::class, 'marital_status_id');
    }

    public function religiosity()
    {
        return $this->belongsTo(Religiosity::class, 'religiosity_id');
    }

    public function havingChildren()
    {
        return $this->belongsTo(HavingChildren::class, 'having_children_id');
    }


}
