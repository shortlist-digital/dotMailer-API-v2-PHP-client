<?php

namespace DotMailer\Api\DataTypes;

/**
 * Class ApiContactScore
 *
 * @property XsInt contactId
 * @property XsString email
 * @property XsDateTime dateModified
 * @property XsString scoreLabel
 * @property XsInt score
 * @property XsInt engagement
 * @property XsInt suitability
 *
 */
final class ApiContactScore extends JsonObject
{

    protected function getProperties()
    {
        return array(
            'ContactId' => 'XsInt',
            'Email' => 'XsString',
            'DateModified' => 'XsDateTime',
            'ScoreLabel' => 'XsString',
            'Score' => 'XsInt',
            'Engagement' => 'XsInt',
            'Suitability' => 'XsInt'
        );
    }

}
