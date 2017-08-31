<?php

namespace DotMailer\Api\DataTypes;


final class ApiContactScoreList extends JsonArray
{

    protected function getDataClass()
    {
        return 'ApiContactScore';
    }

}
