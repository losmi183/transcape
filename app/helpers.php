<?php

function formatDate($time)
{
    return date('d. m. Y.', strtotime($time));
}