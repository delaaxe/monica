<?php

namespace App;

use App\ActivityType;
use App\Helpers\DateHelper;
use Illuminate\Database\Eloquent\Model;


class Activity extends Model
{
    protected $table = 'activities';

    protected $dates = ['date_it_happened'];

    /**
     * Get the summary for this activity.
     *
     * @return string or null
     */
    public function getSummary()
    {
        if (is_null($this->summary)) {
            return null;
        }

        return $this->summary;
    }

    /**
     * Get the description for this activity.
     *
     * @return string or null
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            return null;
        }

        return $this->description;
    }

    /**
     * Get the date the activity happened.
     *
     * @return Carbon
     */
    public function getDateItHappened()
    {
        return $this->date_it_happened;
    }

    /**
     * Get the key of the title of the activity.
     *
     * @return string or null
     */
    public function getTitle()
    {
        if (is_null($this->activity_type_id)) {
            return null;
        }

        $activityType = ActivityType::find($this->activity_type_id);
        return $activityType->key;
    }
}
